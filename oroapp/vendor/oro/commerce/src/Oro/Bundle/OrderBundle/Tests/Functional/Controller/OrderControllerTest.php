<?php
namespace Oro\Bundle\OrderBundle\Tests\Functional\Controller;

use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\AddressBundle\Entity\AbstractAddress;
use Oro\Bundle\LocaleBundle\Formatter\NameFormatter;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Entity\OrderDiscount;
use Oro\Bundle\OrderBundle\Entity\OrderLineItem;
use Oro\Bundle\OrderBundle\Tests\Functional\DataFixtures\LoadOrders;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\UserBundle\Entity\User;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\DomCrawler\Form;

/**
 * @group CommunityEdition
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class OrderControllerTest extends WebTestCase
{
    const ORDER_PO_NUMBER = 'PO_NUMBER';
    const ORDER_PO_NUMBER_UPDATED = 'NEW_PO_NUMBER';

    /**
     * @var NameFormatter
     */
    protected $formatter;

    /**
     * @var string
     */
    public static $overriddenShippingCostAmount = '999.9900';

    /**
     * @var string
     */
    public static $shippingCostCurrency = 'USD';

    /**
     * @var array
     */
    protected $disabledAddressInputs = [
        'label',
        'firstName',
        'middleName',
        'lastName',
        'nameSuffix',
        'organization',
        'street',
        'city',
        'postalCode'
    ];

    /**
     * @param Form $form
     * @param Customer $orderCustomer
     * @param $lineItems
     * @param $discountItems
     * @return array
     */
    public function getSubmittedData($form, $orderCustomer, $lineItems, $discountItems)
    {
        $submittedData = [
            'input_action' => 'save_and_stay',
            'oro_order_type' => [
                '_token' => $form['oro_order_type[_token]']->getValue(),
                'owner' => $this->getCurrentUser()->getId(),
                'customer' => $orderCustomer->getId(),
                'poNumber' => self::ORDER_PO_NUMBER,
                'lineItems' => $lineItems,
                'discounts' => $discountItems,
            ]
        ];

        return $submittedData;
    }

    /**
     * @param Form $form
     * @param Customer $orderCustomer
     * @param array $lineItems
     * @param array $discountItems
     * @return array
     */
    public function getUpdatedData($form, $orderCustomer, $lineItems, $discountItems)
    {
        $submittedData = [
            'input_action' => 'save_and_stay',
            'oro_order_type' => [
                '_token' => $form['oro_order_type[_token]']->getValue(),
                'owner' => $this->getCurrentUser()->getId(),
                'customer' => $orderCustomer->getId(),
                'poNumber' => self::ORDER_PO_NUMBER_UPDATED,
                'lineItems' => $lineItems,
                'discounts' => $discountItems,
            ]
        ];

        return $submittedData;
    }

    protected function setUp()
    {
        $this->initClient([], array_merge($this->generateBasicAuthHeader(), ['HTTP_X-CSRF-Header' => 1]));
        $this->client->useHashNavigation(true);

        $this->loadFixtures(
            [
                'Oro\Bundle\OrderBundle\Tests\Functional\DataFixtures\LoadOrders',
                'Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerUserData',
                'Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerAddresses',
                'Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductUnitPrecisions',
            ]
        );

        $this->formatter = $this->getContainer()->get('oro_locale.formatter.name');
    }

    public function testIndex()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_index'));
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('orders-grid', $crawler->html());
        $this->assertEquals('Orders', $crawler->filter('h1.oro-subtitle')->html());
    }

    public function testBackendOrderGrid()
    {
        $response = $this->client->requestGrid('orders-grid');

        $result = static::getJsonResponseContent($response, 200);

        $myOrderData = [];
        foreach ($result['data'] as $row) {
            if ($row['identifier'] === LoadOrders::MY_ORDER) {
                $myOrderData = $row;
                break;
            }
        }

        $order = $this->getReference(LoadOrders::MY_ORDER);

        $this->assertArrayHasKey('poNumber', $myOrderData);
        $this->assertEquals($order->getPoNumber(), $myOrderData['poNumber']);
    }

    /**
     * @return int
     */
    public function testCreate()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_create'));
        $result  = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        /** @var Form $form */
        $form = $crawler->selectButton('Save')->form();

        /** @var Customer $orderCustomer */
        $orderCustomer = $this->getReference('customer.level_1');
        
        /** @var Product $product */
        $product = $this->getReference('product-1');

        $date = (new \DateTime('now'))->format('Y-m-d');
        $lineItems = [
            [
                'product' => $product->getId(),
                'quantity' => 10,
                'productUnit' => 'liter',
                'price' => [
                    'value' => 100,
                    'currency' => 'USD'
                ],
                'priceType' => OrderLineItem::PRICE_TYPE_UNIT,
                'shipBy' => $date
            ],
        ];
        $discountItems = $this->getDiscountItems();
        $submittedData = $this->getSubmittedData($form, $orderCustomer, $lineItems, $discountItems);

        $this->client->followRedirects(true);

        // Submit form
        $result = $this->client->getResponse();
        $crawler = $this->client->request($form->getMethod(), $form->getUri(), $submittedData);

        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertEquals(
            self::ORDER_PO_NUMBER,
            $crawler->filter('input[name="oro_order_type[poNumber]"]')->extract('value')[0]
        );

        $this->assertNotEquals('N/A', $crawler->filter('.user-name')->text());

        $actualLineItems = $this->getActualLineItems($crawler, count($lineItems));

        usort($actualLineItems, function ($a, $b) {
            return $a['product'] - $b['product'];
        });

        $expectedLineItems = [
            [
                'product' => $product->getId(),
                'freeFormProduct' => '',
                'quantity' => 10,
                'productUnit' => 'liter',
                'price' => [
                    'value' => 100,
                    'currency' => 'USD'
                ],
                'priceType' => OrderLineItem::PRICE_TYPE_UNIT,
                'shipBy' => $date
            ]
        ];

        $this->assertEquals($expectedLineItems, $actualLineItems);

        $actualDiscountItems = $this->getActualDiscountItems($crawler, count($discountItems));
        $expectedDiscountItems = $this->getExpectedDiscountItems();
        foreach ($actualDiscountItems as $item) {
            $this->assertContains($item, $expectedDiscountItems);
        }

        /** @var Order $order */
        $order = $this->getContainer()->get('doctrine')
            ->getManagerForClass('OroOrderBundle:Order')
            ->getRepository('OroOrderBundle:Order')
            ->findOneBy(['poNumber' => self::ORDER_PO_NUMBER]);
        $this->assertNotEmpty($order);

        return $order->getId();
    }

    /**
     * @depends testCreate
     * @param int $id
     */
    public function testUpdateDiscountAndLineItems($id)
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $id]));

        $result  = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        /** @var Form $form */
        $form = $crawler->selectButton('Save and Close')->form();

        /** @var Customer $orderCustomer */
        $orderCustomer = $this->getReference('customer.level_1');

        $date = (new \DateTime('now'))->format('Y-m-d');
        $lineItems = $this->getLineItemsToUpdate($date);

        $discountItems = [
            [
                'percent' => '33',
                'amount' => '33.33',
                'type' => OrderDiscount::TYPE_PERCENT,
                'description' => 'some test description 333'
            ],
            [
                'percent' => '44',
                'amount' => '44.44',
                'type' => OrderDiscount::TYPE_AMOUNT,
                'description' => 'some other test description 444'
            ]
        ];

        $submittedData = $this->getUpdatedData($form, $orderCustomer, $lineItems, $discountItems);

        $this->client->followRedirects(true);

        // Submit form
        $result = $this->client->getResponse();
        $this->client->request($form->getMethod(), $form->getUri(), $submittedData);
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        // Check updated line items
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $id]));

        $actualLineItems = $this->getActualLineItems($crawler, count($lineItems));

        usort($actualLineItems, function ($a, $b) {
            return (int)$a['product'] - (int)$b['product'];
        });

        $expectedLineItems = $this->getExpectedLineItemsAfterUpdate($date);
        $this->assertEquals($expectedLineItems, $actualLineItems);

        $actualDiscountItems = $this->getActualDiscountItems($crawler, count($discountItems));
        $expectedDiscountItems = [
            [
                'percent' => '33',
                'amount' => '33.33',
                'type' => OrderDiscount::TYPE_PERCENT,
                'description' => 'some test description 333'
            ],
            [
                'percent' => '21.161904761905',
                'amount' => '44.44',
                'type' => OrderDiscount::TYPE_AMOUNT,
                'description' => 'some other test description 444'
            ]
        ];
        $this->assertEquals($expectedDiscountItems, $actualDiscountItems);
    }

    /**
     * @depends testCreate
     * @param int $id
     */
    public function testUpdateBillingAddress($id)
    {
        $this->assertUpdateAddress($id, 'billingAddress');
    }

    /**
     * @depends testCreate
     * @param int $id
     */
    public function testUpdateShippingAddress($id)
    {
        $this->assertUpdateAddress($id, 'shippingAddress');
    }

    /**
     * @param int $id
     * @param string $addressType
     */
    protected function assertUpdateAddress($id, $addressType)
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $id]));

        $result  = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        /** @var AbstractAddress $orderCustomer */
        $orderCustomerAddress = $this->getReference('customer.level_1.address_1');

        // Save order
        $form = $crawler->selectButton('Save and Close')->form(
            [
                'oro_order_type['. $addressType .'][customerAddress]' => 'a_'. $orderCustomerAddress->getId(),
            ]
        );

        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $html = $crawler->html();

        $this->assertContains('Order has been saved', $html);

        $html = $crawler->html();

        $this->assertContains(self::ORDER_PO_NUMBER_UPDATED, $html);
        $this->assertContains($orderCustomerAddress->getPostalCode(), $html);
        $this->assertContains($orderCustomerAddress->getStreet(), $html);
        $this->assertContains(strtoupper($orderCustomerAddress->getCity()), $html);

        // Check address on edit
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $id]));

        /** @var Form $form */
        $form = $crawler->selectButton('Save and Close')->form();

        // Check form values
        $formValues = $form->getValues();
        $this->assertContains(
            $orderCustomerAddress->getPostalCode(),
            $formValues['oro_order_type['. $addressType .'][postalCode]']
        );
        $this->assertContains(
            $orderCustomerAddress->getStreet(),
            $formValues['oro_order_type['. $addressType .'][street]']
        );
        $this->assertContains(
            $orderCustomerAddress->getCity(),
            $formValues['oro_order_type['. $addressType .'][city]']
        );

        // Check address disabled
        foreach ($this->disabledAddressInputs as $input) {
            $crawler->filter('input[name="oro_order_type['. $addressType .']['. $input .']"][readonly="readonly"]');
        }
    }

    /**
     * @depends testCreate
     * @param int $id
     */
    public function testUpdateShippingCost($id)
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $id]));

        /* @var $form Form */
        $form = $crawler->selectButton('Save')->form();
        $form['oro_order_type[overriddenShippingCostAmount]'] = [
            'value' => self::$overriddenShippingCostAmount,
            'currency' => 'USD',
        ];

        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);

        $titleBlock = $crawler->filter('.responsive-section')
            ->eq(2)
            ->filter('.scrollspy-title')
            ->html();
        self::assertEquals('Shipping Information', trim($titleBlock));

        $value  = $crawler->filter('.responsive-section')->eq(2)->filter('.controls .control-label')->html();
        self::assertEquals('$999.99', $value);

        $result = $this->client->getResponse();
        static::assertHtmlResponseStatusCodeEquals($result, 200);
    }

    /**
     * @depends testCreate
     * @param int $id
     */
    public function testUpdateShippingCostEmpty($id)
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $id]));

        /* @var $form Form */
        $form = $crawler->selectButton('Save')->form();
        $form['oro_order_type[overriddenShippingCostAmount][value]'] = '';

        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);

        $titleBlock = $crawler->filter('.responsive-section')
            ->eq(2)
            ->filter('.scrollspy-title')
            ->html();
        self::assertEquals('Shipping Information', trim($titleBlock));

        $value  = $crawler->filter('.responsive-section')->eq(2)->filter('.controls .control-label')->html();
        self::assertEquals('N/A', $value);

        $result = $this->client->getResponse();
        static::assertHtmlResponseStatusCodeEquals($result, 200);
    }

    /**
     * @depends testCreate
     * @param int $id
     */
    public function testUpdateShippingCostZero($id)
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $id]));

        /* @var $form Form */
        $form = $crawler->selectButton('Save')->form();
        $form['oro_order_type[overriddenShippingCostAmount][value]'] = 0;
      
        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);

        $titleBlock = $crawler->filter('.responsive-section')
            ->eq(2)
            ->filter('.scrollspy-title')
            ->html();
        self::assertEquals('Shipping Information', trim($titleBlock));

        $value  = $crawler->filter('.responsive-section')->eq(2)->filter('.controls .control-label')->html();
        self::assertEquals('$0.00', $value);

        $result = $this->client->getResponse();
        static::assertHtmlResponseStatusCodeEquals($result, 200);
    }

    /**
     * @depends testCreate
     *
     * @param int $id
     */
    public function testView($id)
    {
        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_order_view', ['id' => $id])
        );

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $html = $crawler->html();
        $this->assertContains(self::ORDER_PO_NUMBER_UPDATED, $html);
    }

    public function testSaveOrderWithEmptyProductErrorMessage()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_order_create'));

        $form = $crawler->selectButton('Save')->form();

        $orderCustomer = $this->getReference('customer.level_1');
        $lineItems = [
            [
                'product' => '',
                'quantity' => 1,
                'productUnit' => '',
                'price' => [
                    'value' => '',
                    'currency' => 'USD'
                ],
                'priceType' => 10,
                'shipBy' => ''
            ],
        ];
        $discountItems = $this->getDiscountItems();

        $submittedData = $this->getSubmittedData($form, $orderCustomer, $lineItems, $discountItems);

        $this->client->followRedirects(true);
        $this->client->request($form->getMethod(), $form->getUri(), $submittedData);

        $this->assertContains('Please choose Product', $this->client->getResponse()->getContent());
    }

    /**
     * @return User
     */
    protected function getCurrentUser()
    {
        return $this->getContainer()->get('oro_security.token_accessor')->getUser();
    }

    /**
     * @param Crawler $crawler
     * @param int $count
     * @return array
     */
    protected function getActualLineItems(Crawler $crawler, $count)
    {
        $result = [];

        for ($i = 0; $i < $count; $i++) {
            $result[] = [
                'product' => $crawler->filter('input[name="oro_order_type[lineItems]['. $i .'][product]"]')
                    ->extract('value')[0],
                'freeFormProduct' => $crawler
                    ->filter('input[name="oro_order_type[lineItems]['. $i .'][freeFormProduct]"]')
                    ->extract('value')[0],
                'quantity' => $crawler->filter('input[name="oro_order_type[lineItems]['. $i .'][quantity]"]')
                    ->extract('value')[0],
                'productUnit' => $crawler
                    ->filter('select[name="oro_order_type[lineItems]['. $i .'][productUnit]"] :selected')
                    ->html(),
                'price' => [
                    'value' => $crawler->filter('input[name="oro_order_type[lineItems]['. $i .'][price][value]"]')
                        ->extract('value')[0],
                    'currency' => $crawler
                        ->filter('input[name="oro_order_type[lineItems]['. $i .'][price][currency]"]')
                        ->extract('value')[0],
                ],
                'priceType' => $crawler
                    ->filter('input[name="oro_order_type[lineItems]['. $i .'][priceType]"]')
                    ->extract('value')[0],
                'shipBy' => $crawler->filter('input[name="oro_order_type[lineItems]['. $i .'][shipBy]"]')
                    ->extract('value')[0]
            ];
        }

        return $result;
    }

    /**
     * @param Crawler $crawler
     * @param int $count
     * @return array
     */
    protected function getActualDiscountItems(Crawler $crawler, $count)
    {
        $result = [];

        for ($i = 0; $i < $count; $i++) {
            $result[] = [
                'percent' => $crawler
                    ->filter('input[name="oro_order_type[discounts]['. $i .'][percent]"]')
                    ->extract('value')[0],
                'amount' => $crawler->filter('input[name="oro_order_type[discounts]['. $i .'][amount]"]')
                    ->extract('value')[0],
                'type' => $crawler
                    ->filter('input[name="oro_order_type[discounts]['. $i .'][type]"]')
                    ->extract('value')[0],
                'description' => $crawler->filter('input[name="oro_order_type[discounts]['. $i .'][description]"]')
                    ->extract('value')[0]
            ];
        }

        return $result;
    }

    /**
     * @return array
     */
    protected function getDiscountItems()
    {
        return [
            [
                'percent' => '11',
                'amount' => '11.11',
                'type' => OrderDiscount::TYPE_PERCENT,
                'description' => 'some test description'
            ],
            [
                'percent' => '22',
                'amount' => '22.22',
                'type' => OrderDiscount::TYPE_AMOUNT,
                'description' => 'some other test description'
            ]
        ];
    }

    /**
     * @return array
     */
    protected function getExpectedDiscountItems()
    {
        return [
            [
                'percent' => '11',
                'amount' => '11.11',
                'type' => OrderDiscount::TYPE_PERCENT,
                'description' => 'some test description'
            ],
            [
                'percent' => '2.222',
                'amount' => '22.22',
                'type' => OrderDiscount::TYPE_AMOUNT,
                'description' => 'some other test description'
            ]
        ];
    }

    /**
     * @param $date
     * @return array
     */
    protected function getLineItemsToUpdate($date)
    {
        /** @var Product $product */
        $product = $this->getReference('product-1');

        return [
            [
                'freeFormProduct' => 'Free form product',
                'quantity' => 20,
                'productUnit' => 'liter',
                'price' => [
                    'value' => 200,
                    'currency' => 'USD'
                ],
                'priceType' => OrderLineItem::PRICE_TYPE_BUNDLED,
                'shipBy' => $date
            ],
            [
                'product' => $product->getId(),
                'quantity' => 1,
                'productUnit' => 'bottle',
                'price' => [
                    'value' => 10,
                    'currency' => 'USD'
                ],
                'priceType' => OrderLineItem::PRICE_TYPE_UNIT,
                'shipBy' => $date
            ]
        ];
    }

    /**
     * @param $date
     * @return array
     */
    protected function getExpectedLineItemsAfterUpdate($date)
    {
        /** @var Product $product */
        $product = $this->getReference('product-1');

        return [
            [
                'product' => '',
                'freeFormProduct' => 'Free form product',
                'quantity' => 20,
                'productUnit' => 'liter',
                'price' => [
                    'value' => 200,
                    'currency' => 'USD'
                ],
                'priceType' => OrderLineItem::PRICE_TYPE_UNIT,
                'shipBy' => $date
            ],
            [
                'product' => $product->getId(),
                'freeFormProduct' => '',
                'quantity' => 1,
                'productUnit' => 'bottle',
                'price' => [
                    'value' => 10,
                    'currency' => 'USD'
                ],
                'priceType' => OrderLineItem::PRICE_TYPE_UNIT,
                'shipBy' => $date
            ]
        ];
    }
}
