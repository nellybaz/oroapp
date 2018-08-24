<?php

namespace Oro\Bundle\PricingBundle\EventListener;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\Translation\TranslatorInterface;

use Oro\Component\Exception\UnexpectedTypeException;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\PricingBundle\Entity\PriceAttributePriceList;
use Oro\Bundle\PricingBundle\Entity\Repository\PriceAttributePriceListRepository;
use Oro\Bundle\PricingBundle\Provider\PriceAttributePricesProvider;

class FormViewListener
{
    const PRICE_ATTRIBUTES_BLOCK_NAME = 'price_attributes';
    const PRICING_BLOCK_NAME = 'prices';

    const PRICING_BLOCK_PRIORITY = 550;
    const PRICE_ATTRIBUTES_BLOCK_PRIORITY = 500;

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @var PriceAttributePricesProvider
     */
    protected $priceAttributePricesProvider;

    /**
     * @param TranslatorInterface $translator
     * @param DoctrineHelper $doctrineHelper
     * @param PriceAttributePricesProvider $provider
     */
    public function __construct(
        TranslatorInterface $translator,
        DoctrineHelper $doctrineHelper,
        PriceAttributePricesProvider $provider
    ) {
        $this->translator = $translator;
        $this->doctrineHelper = $doctrineHelper;
        $this->priceAttributePricesProvider = $provider;
    }

    /**
     * @param BeforeListRenderEvent $event
     */
    public function onProductView(BeforeListRenderEvent $event)
    {
        $product = $event->getEntity();
        if (!$product instanceof Product) {
            throw new UnexpectedTypeException($product, Product::class);
        }

        $this->addPriceAttributesViewBlock($event, $product);
        $this->addProductPricesViewBlock($event, $product);
    }

    /**
     * @param BeforeListRenderEvent $event
     */
    public function onProductEdit(BeforeListRenderEvent $event)
    {
        $template = $event->getEnvironment()->render(
            'OroPricingBundle:Product:prices_update.html.twig',
            ['form' => $event->getFormView()]
        );
        $scrollData = $event->getScrollData();
        $blockLabel = $this->translator->trans('oro.pricing.productprice.entity_plural_label');
        $scrollData->addNamedBlock(self::PRICING_BLOCK_NAME, $blockLabel, 10);
        $subBlockId = $scrollData->addSubBlock(self::PRICING_BLOCK_NAME);
        $scrollData->addSubBlockData(self::PRICING_BLOCK_NAME, $subBlockId, $template, 'productPriceAttributesPrices');
    }

    /**
     * @return PriceAttributePriceList[]
     */
    protected function getProductAttributesPriceLists()
    {
        return $this->getPriceAttributePriceListRepository()->findAll();
    }

    /**
     * @return PriceAttributePriceListRepository|EntityRepository
     */
    protected function getPriceAttributePriceListRepository()
    {
        return $this->doctrineHelper->getEntityRepository('OroPricingBundle:PriceAttributePriceList');
    }

    /**
     * @param BeforeListRenderEvent $event
     * @param Product $product
     */
    protected function addPriceAttributesViewBlock(BeforeListRenderEvent $event, Product $product)
    {
        $scrollData = $event->getScrollData();
        $blockLabel = $this->translator->trans('oro.pricing.priceattributepricelist.entity_plural_label');
        $scrollData->addNamedBlock(
            self::PRICE_ATTRIBUTES_BLOCK_NAME,
            $blockLabel,
            self::PRICE_ATTRIBUTES_BLOCK_PRIORITY
        );

        foreach ($this->getProductAttributesPriceLists() as $priceList) {
            $subBlockId = $scrollData->addSubBlock(self::PRICE_ATTRIBUTES_BLOCK_NAME);

            $priceAttributePrices = $this->priceAttributePricesProvider
                ->getPricesWithUnitAndCurrencies($priceList, $product);

            $template = $event->getEnvironment()->render(
                'OroPricingBundle:Product:price_attribute_prices_view.html.twig',
                [
                    'product' => $product,
                    'priceList' => $priceList,
                    'priceAttributePrices' => $priceAttributePrices,
                ]
            );
            $scrollData->addSubBlockData(
                self::PRICE_ATTRIBUTES_BLOCK_NAME,
                $subBlockId,
                $template,
                $priceList->getName()
            );
        }
    }

    /**
     * @param BeforeListRenderEvent $event
     * @param Product $product
     */
    protected function addProductPricesViewBlock(BeforeListRenderEvent $event, Product $product)
    {
        $scrollData = $event->getScrollData();
        $blockLabel = $this->translator->trans('oro.pricing.pricelist.entity_plural_label');
        $scrollData->addNamedBlock(self::PRICING_BLOCK_NAME, $blockLabel, self::PRICING_BLOCK_PRIORITY);
        $priceListSubBlockId = $scrollData->addSubBlock(self::PRICING_BLOCK_NAME);

        $template = $event->getEnvironment()->render(
            'OroPricingBundle:Product:prices_view.html.twig',
            [
                'entity' => $product,
            ]
        );

        $scrollData->addSubBlockData(
            self::PRICING_BLOCK_NAME,
            $priceListSubBlockId,
            $template,
            'productPriceAttributesPrices'
        );
    }
}
