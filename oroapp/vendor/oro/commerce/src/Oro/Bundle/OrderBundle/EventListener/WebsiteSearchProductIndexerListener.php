<?php

namespace Oro\Bundle\OrderBundle\EventListener;

use Oro\Bundle\FeatureToggleBundle\Checker\FeatureCheckerHolderTrait;
use Oro\Bundle\OrderBundle\Provider\LatestOrderedProductsInfoProvider;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\WebsiteSearchBundle\Event\IndexEntityEvent;
use Oro\Bundle\WebsiteSearchBundle\Manager\WebsiteContextManager;
use Oro\Bundle\CustomerBundle\Placeholder\CustomerIdPlaceholder;

class WebsiteSearchProductIndexerListener
{
    use FeatureCheckerHolderTrait;

    /**
     * @var WebsiteContextManager
     */
    private $websiteContextManager;

    /**
     * @var LatestOrderedProductsInfoProvider
     */
    protected $latestOrderedProductsInfoProvider;

    /**
     * @param WebsiteContextManager $websiteContextManager
     * @param LatestOrderedProductsInfoProvider $latestOrderedProductsInfoProvider
     */
    public function __construct(
        WebsiteContextManager $websiteContextManager,
        LatestOrderedProductsInfoProvider $latestOrderedProductsInfoProvider
    ) {
        $this->websiteContextManager = $websiteContextManager;
        $this->latestOrderedProductsInfoProvider = $latestOrderedProductsInfoProvider;
    }

    /**
     * @param IndexEntityEvent $event
     */
    public function onWebsiteSearchIndex(IndexEntityEvent $event)
    {
        $website = $this->websiteContextManager->getWebsite($event->getContext());
        if (!$website) {
            $event->stopPropagation();

            return;
        }

        if (!$this->isFeaturesEnabled($website)) {
            return;
        }

        /** @var Product[] $products */
        $products = $event->getEntities();

        $productIds = array_map(
            function (Product $product) {
                return $product->getId();
            },
            $products
        );

        $latestOrderedProductsInfo = $this->latestOrderedProductsInfoProvider
            ->getLatestOrderedProductsInfo($productIds, $website->getId());

        foreach ($products as $product) {
            if (isset($latestOrderedProductsInfo[$product->getId()])) {
                $orderInfoArray = $latestOrderedProductsInfo[$product->getId()];
                foreach ($orderInfoArray as $orderInfo) {
                    $placeholders = [CustomerIdPlaceholder::NAME => $orderInfo['customer_id']];
                    $event->addPlaceholderField(
                        $product->getId(),
                        'ordered_at_by_CUSTOMER_ID',
                        $orderInfo['created_at'],
                        $placeholders
                    );
                }
            }
        }
    }
}
