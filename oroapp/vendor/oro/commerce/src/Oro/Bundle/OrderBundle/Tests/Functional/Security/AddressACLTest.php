<?php

namespace Oro\Bundle\OrderBundle\Tests\Functional\Security;

use Oro\Bundle\SecurityBundle\Acl\AccessLevel;
use Oro\Bundle\UserBundle\Entity\Role;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\OrderBundle\Entity\Order;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
class AddressACLTest extends AbstractAddressACLTest
{
    const BILLING_ADDRESS = 'billingAddress';
    const SHIPPING_ADDRESS = 'shippingAddress';

    const COMPANY_BILLING_DEFAULT_BILLING = '2413 Capitol Avenue, ROMNEY IN US 47981';
    const COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING = '1215 Caldwell Road, ROCHESTER NY US 14608';
    const COMPANY_BILLING_SHIPPING_ADDRESS = '722 Harvest Lane, SEDALIA MO US 65301';

    const USER_BILLING_DEFAULT_BILLING = '2413 Capitol Avenue, ROMNEY IN US 47981';
    const USER_BILLING_SHIPPING_DEFAULT_SHIPPING = '1215 Caldwell Road, ROCHESTER NY US 14608';
    const USER_BILLING_SHIPPING_ADDRESS = '722 Harvest Lane, SEDALIA MO US 65301';

    /** @var Role */
    protected $role;

    /** @var string */
    protected $formName = 'oro_order_type';

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);

        $this->role = $this->getContainer()
            ->get('doctrine')
            ->getManagerForClass('OroUserBundle:Role')
            ->getRepository('OroUserBundle:Role')
            ->findOneBy(['role' => User::ROLE_ADMINISTRATOR]);

        $this->loadFixtures([
            'Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomers',
            'Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerAddresses',
            'Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerUserData',
            'Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerUserAddresses',
            'Oro\Bundle\OrderBundle\Tests\Functional\DataFixtures\LoadOrders'
        ]);
    }

    protected function tearDown()
    {
        unset($this->role);
    }

    /**
     * @dataProvider checkShippingAddressesDataProvider
     * @param array $permissions
     * @param array $capabilities
     * @param array $expected
     */
    public function testCheckShippingAddresses(array $permissions, array $capabilities, array $expected)
    {
        $this->setRolePermissions($permissions['customerEntityPermissions'], $this->getCustomerAddressIdentity());
        $this->setRolePermissions(
            $permissions['customerUserEntityPermissions'],
            $this->getCustomerAddressUserIdentity()
        );

        foreach ($capabilities as $capabilityId => $value) {
            $this->setActionPermissions($capabilityId, $value);
        }

        /** @var Order $order */
        $order = $this->getReference('simple_order');

        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $order->getId()]));
        $result  = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        if (!empty($expected)) {
            // Check shipping addresses
            $this->assertContains('Shipping Address', $crawler->filter('.navbar-static')->html());
            $this->checkAddresses($crawler, $this->formName, self::SHIPPING_ADDRESS, $expected);
        } else {
            $this->assertNotContains('Shipping Address', $crawler->filter('.navbar-static')->html());
        }
    }

    /**
     * @return array
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function checkShippingAddressesDataProvider()
    {
        return [
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => true,
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => false,
                ],
                'expected' => []
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => false,
                ],
                'expected' => []
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [],
                    'manually' => true
                ],
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [],
                    'manually' => true
                ],
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [],
                    'customerUser' => [],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => []
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => false,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => false,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_shipping_customer_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_any_backend' => true,
                    'oro_order_address_shipping_customer_user_use_default_backend' => true,
                    'oro_order_address_shipping_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ]
        ];
    }

    /**
     * @dataProvider checkBillingAddressesDataProvider
     * @param array $permissions
     * @param array $capabilities
     * @param array $expected
     */
    public function testCheckBillingAddresses(array $permissions, array $capabilities, array $expected)
    {
        $this->setRolePermissions($permissions['customerEntityPermissions'], $this->getCustomerAddressIdentity());
        $this->setRolePermissions(
            $permissions['customerUserEntityPermissions'],
            $this->getCustomerAddressUserIdentity()
        );

        foreach ($capabilities as $capabilityId => $value) {
            $this->setActionPermissions($capabilityId, $value);
        }

        /** @var Order $order */
        $order = $this->getReference('simple_order');

        $crawler = $this->client->request('GET', $this->getUrl('oro_order_update', ['id' => $order->getId()]));
        $result  = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        if (!empty($expected)) {
            // Check billing addresses
            $this->assertContains('Billing Address', $crawler->filter('.navbar-static')->html());
            $this->checkAddresses($crawler, $this->formName, self::BILLING_ADDRESS, $expected);
        } else {
            $this->assertNotContains('Billing Address', $crawler->filter('.navbar-static')->html());
        }
    }

    /**
     * @return array
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function checkBillingAddressesDataProvider()
    {
        return [
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => true,
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => false,
                ],
                'expected' => []
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => false,
                ],
                'expected' => []
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [],
                    'manually' => true
                ],
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [],
                    'manually' => true
                ],
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [],
                    'customerUser' => [],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::NONE_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::NONE_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => []
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => false,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => false,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING
                    ],
                    'manually' => true
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => false
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => false
                ]
            ],
            [
                'permissions' => [
                    'customerEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                    'customerUserEntityPermissions' => AccessLevel::SYSTEM_LEVEL,
                ],
                'capabilities' => [
                    'oro_order_address_billing_customer_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_any_backend' => true,
                    'oro_order_address_billing_customer_user_use_default_backend' => true,
                    'oro_order_address_billing_allow_manual_backend' => true
                ],
                'expected' => [
                    'customer' => [
                        self::COMPANY_BILLING_DEFAULT_BILLING,
                        self::COMPANY_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::COMPANY_BILLING_SHIPPING_ADDRESS
                    ],
                    'customerUser' => [
                        self::USER_BILLING_DEFAULT_BILLING,
                        self::USER_BILLING_SHIPPING_DEFAULT_SHIPPING,
                        self::USER_BILLING_SHIPPING_ADDRESS
                    ],
                    'manually' => true
                ]
            ]
        ];
    }
}
