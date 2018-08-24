<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\EventListener;

use Oro\Bundle\FeatureToggleBundle\Checker\FeatureChecker;
use Oro\Bundle\OrderBundle\EventListener\WebsiteSearchProductIndexerListener;
use Oro\Bundle\OrderBundle\Provider\LatestOrderedProductsInfoProvider;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\WebsiteBundle\Entity\Website;
use Oro\Bundle\WebsiteSearchBundle\Event\IndexEntityEvent;
use Oro\Bundle\WebsiteSearchBundle\Manager\WebsiteContextManager;
use Oro\Component\Testing\Unit\EntityTrait;

class WebsiteSearchProductIndexerListenerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    const WEBSITE_ID = 1;

    /**
     * @var WebsiteContextManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $websiteContextManager;

    /**
     * @var LatestOrderedProductsInfoProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $infoProvider;

    /**
     * @var FeatureChecker|\PHPUnit_Framework_MockObject_MockObject
     */
    private $featureChecker;

    /**
     * @var IndexEntityEvent|\PHPUnit_Framework_MockObject_MockObject
     */
    private $event;

    /**
     * @var Website
     */
    private $website;

    /**
     * @var WebsiteSearchProductIndexerListener
     */
    private $listener;

    protected function setUp()
    {
        $this->websiteContextManager = $this->createMock(WebsiteContextManager::class);
        $this->website = $this->getEntity(Website::class, [ 'id' => self:: WEBSITE_ID ]);
        $this->infoProvider = $this->createMock(LatestOrderedProductsInfoProvider::class);
        $this->featureChecker = $this->createMock(FeatureChecker::class);
        $this->event = $this->createMock(IndexEntityEvent::class);

        $this->listener = new WebsiteSearchProductIndexerListener($this->websiteContextManager, $this->infoProvider);
        $this->listener->setFeatureChecker($this->featureChecker);
        $this->listener->addFeature('previously_purchased_products');
    }

    protected function tearDown()
    {
        unset($this->websiteContextManager);
        unset($this->website);
        unset($this->event);
        unset($this->infoProvider);
        unset($this->featureChecker);
        unset($this->listener);
    }

    public function testWebsiteNotFound()
    {
        $this->event->expects($this->once())
            ->method('getContext')
            ->willReturn([]);
        $this->featureChecker->expects($this->never())
            ->method('isFeatureEnabled')
            ->with('previously_purchased_products', $this->website);
        $this->websiteContextManager->expects($this->once())
            ->method('getWebsite')
            ->willReturn(null);

        $this->event->expects($this->never())
            ->method('getEntities');

        $this->listener->onWebsiteSearchIndex($this->event);
    }

    public function testFeatureDisabled()
    {
        $this->event->expects($this->once())
            ->method('getContext')
            ->willReturn([]);
        $this->featureChecker->expects($this->once())
            ->method('isFeatureEnabled')
            ->with('previously_purchased_products', $this->website)
            ->willReturn(false);
        $this->websiteContextManager->expects($this->once())
            ->method('getWebsite')
            ->willReturn($this->website);

        $this->event->expects($this->never())
            ->method('getEntities');

        $this->listener->onWebsiteSearchIndex($this->event);
    }

    /**
     * @dataProvider productsInfo
     *
     * @param array     $products
     * @param array     $orderInfo
     * @param callable  $assertPlaceholderFieldCallback
     */
    public function testWebsiteSearchIndex(
        array $products,
        array $orderInfo,
        callable $assertPlaceholderFieldCallback
    ) {
        $this->event->expects($this->once())
            ->method('getContext')
            ->willReturn([]);
        $this->featureChecker->expects($this->once())
            ->method('isFeatureEnabled')
            ->with('previously_purchased_products', $this->website)
            ->willReturn(true);
        $this->websiteContextManager->expects($this->once())
            ->method('getWebsite')
            ->willReturn($this->website);

        $this->event->expects($this->once())
            ->method('getEntities')
            ->willReturn($products);

        $this->infoProvider->expects($this->once())
            ->method('getLatestOrderedProductsInfo')
            ->with(array_keys($orderInfo), $this->website->getId())
            ->willReturn($orderInfo);

        $assertPlaceholderFieldCallback($this->event);

        $this->listener->onWebsiteSearchIndex($this->event);
    }

    /**
     * @return \Generator
     */
    public function productsInfo()
    {
        yield 'Test reindex two products' => [
            'products' => [
                0 => $this->getEntity(Product::class, ['id' => 1]),
                1 => $this->getEntity(Product::class, ['id' => 2])
            ],
            'orderInfo' => [
                1 => [
                    ['customer_id' => 1, 'created_at' => 20171],
                    ['customer_id' => 2, 'created_at' => 20172]
                ],
                2 => [
                    ['customer_id' => 1, 'created_at' => 20173]
                ]
            ],
            'assertPlaceholderFieldCallback' => function (\PHPUnit_Framework_MockObject_MockObject $event) {
                $event
                    ->expects($this->exactly(3))
                    ->method('addPlaceholderField')
                    ->withConsecutive(
                        [
                            1, 'ordered_at_by_CUSTOMER_ID', 20171, [ 'CUSTOMER_ID' => 1 ]
                        ],
                        [
                            1, 'ordered_at_by_CUSTOMER_ID', 20172, [ 'CUSTOMER_ID' => 2 ]
                        ],
                        [
                            2, 'ordered_at_by_CUSTOMER_ID', 20173, [ 'CUSTOMER_ID' => 1 ]
                        ]
                    );
            }
        ];

        yield 'Test no products' => [
            'products' => [],
            'orderInfo' => [],
            'assertPlaceholderFieldCallback' => function (\PHPUnit_Framework_MockObject_MockObject $event) {
                $event
                    ->expects($this->never())
                    ->method('addPlaceholderField');
            }
        ];
    }
}
