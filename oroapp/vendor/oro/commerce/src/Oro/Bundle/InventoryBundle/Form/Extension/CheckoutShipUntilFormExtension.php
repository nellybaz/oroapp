<?php

namespace Oro\Bundle\InventoryBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\CheckoutBundle\DataProvider\Manager\CheckoutLineItemsManager;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Form\Type\CheckoutShipUntilType;
use Oro\Bundle\InventoryBundle\Provider\ProductUpcomingProvider;
use Oro\Bundle\LocaleBundle\Formatter\DateTimeFormatter;

class CheckoutShipUntilFormExtension extends AbstractTypeExtension
{
    /**
     * @var ProductUpcomingProvider
     */
    protected $provider;

    /**
     * @var CheckoutLineItemsManager
     */
    protected $checkoutLineItemsManager;

    /**
     * @var DateTimeFormatter
     */
    protected $dateTimeFormatter;

    /**
     * @param ProductUpcomingProvider $provider
     * @param CheckoutLineItemsManager $checkoutLineItemsManager
     * @param DateTimeFormatter $dateTimeFormatter
     */
    public function __construct(
        ProductUpcomingProvider $provider,
        CheckoutLineItemsManager $checkoutLineItemsManager,
        DateTimeFormatter $dateTimeFormatter
    ) {
        $this->provider = $provider;
        $this->checkoutLineItemsManager = $checkoutLineItemsManager;
        $this->dateTimeFormatter = $dateTimeFormatter;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return CheckoutShipUntilType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('disabled', function (Options $options) {
            foreach ($this->getProducts($options) as $product) {
                if ($this->provider->isUpcoming($product) && !$this->provider->getAvailabilityDate($product)) {
                    return true;
                }
            }
            return false;
        });

        $resolver->setDefault('minDate', function (Options $options) {
            $latestDate = $this->provider->getLatestAvailabilityDate($this->getProducts($options));
            return $latestDate ? $this->dateTimeFormatter->formatDate($latestDate) : '0';
        });
    }

    /**
     * @param Options $options
     * @return Product[]
     */
    protected function getProducts(Options $options)
    {
        $checkout = $options['checkout'];
        if (!$checkout instanceof Checkout) {
            throw new \LogicException('Wrong "checkout" option value');
        }
        $products = [];
        foreach ($this->checkoutLineItemsManager->getData($checkout) as $lineItem) {
            $product = $lineItem->getProduct();
            if ($product instanceof Product) {
                $products[] = $product;
            }
        }
        return $products;
    }
}
