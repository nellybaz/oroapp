<?php

namespace Oro\Bundle\MagentoBundle\Tests\Functional\Controller;

class OrderControllerTest extends AbstractController
{
    protected function getMainEntityId()
    {
        return $this->getReference('order')->getId();
    }

    public function testView()
    {
        $this->client->request('GET', $this->getUrl('oro_magento_order_view', ['id' => $this->getMainEntityId()]));
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('Orders', $result->getContent());
        $this->assertContains('General Information', $result->getContent());
        $this->assertContains('Order items', $result->getContent());
        $this->assertContains('Activity', $result->getContent());
        $this->assertContains('Sync Data', $result->getContent());
        $this->assertContains('$4.40', $result->getContent());
        $this->assertContains('open', $result->getContent());
        $this->assertContains('test@example.com', $result->getContent());
        $this->assertContains('$12.47', $result->getContent());
        $this->assertContains('$5.00', $result->getContent());
        $this->assertContains('$17.85', $result->getContent());
        $this->assertContains('$11.00', $result->getContent());
        $this->assertContains('$4.00', $result->getContent());
        $this->assertContains('$0.00', $result->getContent());
        $this->assertContains('Some unique shipping method', $result->getContent());
        $this->assertContains('127.0.0.1', $result->getContent());
        $this->assertContains('some very unique gift message', $result->getContent());
        $this->assertContains('web site', $result->getContent());
        $this->assertContains('Demo Web store', $result->getContent());
        $this->assertContains('John Doe', $result->getContent());
        $this->assertContains('Shopping Cart', $result->getContent());
    }

    /**
     * @return array
     */
    public function gridProvider()
    {
        return [
            'Magento order grid'                             => [
                [
                    'gridParameters'      => [
                        'gridName' => 'magento-order-grid',
                        'magento-order-grid[_sort_by][incrementId]' => 'ASC',
                    ],
                    'gridFilters'         => [],
                    'asserts' => [
                        [
                            'channelName' => 'Magento channel',
                            'firstName'   => 'John',
                            'lastName'    => 'Doe',
                            'status'      => 'open',
                            'subTotal'    => '$0.00',
                        ],
                        [
                            'channelName' => 'Magento channel',
                            'firstName'   => 'Guest Jack',
                            'lastName'    => 'Guest White',
                            'status'      => 'open',
                            'subTotal'    => '$0.00',
                        ]
                    ],
                    'expectedResultCount' => 2
                ],
            ],
            'Magento order grid with filters'                => [
                [
                    'gridParameters'      => [
                        'gridName' => 'magento-order-grid'
                    ],
                    'gridFilters'         => [
                        'magento-order-grid[_filter][lastName][value]'  => 'Doe',
                        'magento-order-grid[_filter][firstName][value]' => 'John',
                        'magento-order-grid[_filter][status][value]'    => 'open',
                    ],
                    'assert'              => [
                        'channelName' => 'Magento channel',
                        'firstName'   => 'John',
                        'lastName'    => 'Doe',
                        'status'      => 'open',
                        'subTotal'    => '$0.00',
                    ],
                    'expectedResultCount' => 1
                ],
            ],
            'Magento order grid with filters without result' => [
                [
                    'gridParameters'      => [
                        'gridName' => 'magento-order-grid'
                    ],
                    'gridFilters'         => [
                        'magento-order-grid[_filter][lastName][value]'  => 'Doe',
                        'magento-order-grid[_filter][firstName][value]' => 'John',
                        'magento-order-grid[_filter][status][value]'    => 'close',
                    ],
                    'assert'              => [],
                    'expectedResultCount' => 0
                ],
            ],
            'Magento order item grid'                        => [
                [
                    'gridParameters'      => [
                        'gridName' => 'magento-orderitem-grid',
                        'id'       => 'id',
                    ],
                    'gridFilters'         => [],
                    'assert'              => [
                        'sku'            => 'some sku',
                        'qty'            => 1,
                        'rowTotal'       => '$234.00',
                        'taxAmount'      => '$1.50',
                        'discountAmount' => '$0.00'
                    ],
                    'expectedResultCount' => 1
                ],
            ],
        ];
    }
}
