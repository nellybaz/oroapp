<?php

namespace Oro\Bundle\PricingBundle\Form\Extension;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\ProductBundle\Form\Type\ProductType;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\PricingBundle\Form\Type\ProductAttributePriceCollectionType;
use Oro\Bundle\PricingBundle\Entity\PriceAttributeProductPrice;

class PriceAttributesProductFormExtension extends AbstractTypeExtension
{
    const PRODUCT_PRICE_ATTRIBUTES_PRICES = 'productPriceAttributesPrices';

    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * @var RegistryInterface
     */
    protected $registry;

    /**
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        $this->registry = $registry;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductType::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(self::PRODUCT_PRICE_ATTRIBUTES_PRICES, 'collection', [
            'mapped' => false,
            'type' => ProductAttributePriceCollectionType::NAME,
            'label' => false,
            'required' => false,
        ]);

        $builder->addEventListener(FormEvents::POST_SET_DATA, [$this, 'onPreSetData']);
        $builder->addEventListener(FormEvents::POST_SUBMIT, [$this, 'onPostSubmit']);
    }

    /**
     * @param FormEvent $event
     */
    public function onPreSetData(FormEvent $event)
    {
        /** @var Product $product */
        $product = $event->getData();

        $neededPrices = $this->getAvailablePricesForProduct($product);
        $existingPrices = $this->getProductExistingPrices($product);

        $formData = [];
        foreach ($existingPrices as $price) {
            $formData[$price->getPriceList()->getId()][] = $price;
            $neededPricesKey = array_search(
                [
                    'attribute' => $price->getPriceList(),
                    'currency' => $price->getPrice()->getCurrency(),
                    'unit' => $price->getUnit()
                ],
                $neededPrices,
                true
            );

            if (false !== $neededPricesKey) {
                unset($neededPrices[$neededPricesKey]);
            }
        }

        foreach ($neededPrices as $newPriceInstanceData) {
            $price = $this->createPrice($newPriceInstanceData, $product);
            $formData[$price->getPriceList()->getId()][] = $price;
        }

        $event->getForm()->get(self::PRODUCT_PRICE_ATTRIBUTES_PRICES)->setData($formData);
    }

    /**
     * @param FormEvent $event
     */
    public function onPostSubmit(FormEvent $event)
    {
        $data = $event->getForm()->get(self::PRODUCT_PRICE_ATTRIBUTES_PRICES)->getData();

        foreach ($data as $attributePrices) {
            /** @var PriceAttributeProductPrice $price */
            foreach ($attributePrices as $price) {
                //remove nullable prices
                if ($price->getPrice()->getValue() === null) {
                    if (null !== $price->getId()) {
                        $this->getManager()->remove($price);
                    }
                    continue;
                }

                // persist new prices
                if (null === $price->getId()) {
                    $this->getManager()->persist($price);
                }
            }
        }
    }

    /**
     * @param array $newInstanceData
     * @param Product $product
     * @return PriceAttributeProductPrice
     */
    protected function createPrice(array $newInstanceData, Product $product)
    {
        return (new PriceAttributeProductPrice())
            ->setUnit($newInstanceData['unit'])
            ->setProduct($product)
            ->setPrice(Price::create(null, $newInstanceData['currency']))
            ->setPriceList($newInstanceData['attribute']);
    }

    /**
     * @return ObjectManager|null
     */
    protected function getManager()
    {
        if (!$this->objectManager) {
            $this->objectManager = $this->registry->getManagerForClass(Product::class);
        }
        return $this->objectManager;
    }

    /**
     * @param Product $product
     * @return array
     */
    protected function getAvailablePricesForProduct(Product $product)
    {
        $neededPrices = [];
        $unites = $product->getAvailableUnits();
        $priceAttributes = $this->getManager()
            ->getRepository('OroPricingBundle:PriceAttributePriceList')
            ->findAll();

        foreach ($priceAttributes as $attribute) {
            foreach ($attribute->getCurrencies() as $currency) {
                foreach ($unites as $unit) {
                    $neededPrices[] = ['attribute' => $attribute, 'currency' => $currency, 'unit' => $unit];
                }
            }
        }

        return $neededPrices;
    }

    /**
     * @param $product
     * @return array|PriceAttributeProductPrice[]
     */
    protected function getProductExistingPrices($product)
    {
        return $this->getManager()->getRepository('OroPricingBundle:PriceAttributeProductPrice')
            ->findBy(['product' => $product]);
    }
}
