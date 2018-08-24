<?php

namespace Oro\Bridge\CustomerAccount\Tests\Functional\Api;

use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Tests\Functional\Api\AbstractRestTest;
use Oro\Bundle\CustomerBundle\Tests\Functional\Api\DataFixtures\LoadCustomerData;
use Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadGroups;
use Oro\Bundle\UserBundle\Tests\Functional\DataFixtures\LoadUserData;

class RestCustomerTest extends AbstractRestTest
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->loadFixtures(
            [
                LoadCustomerData::class,
                LoadUserData::class,
            ]
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testGetCustomers()
    {
        $uri = $this->getUrl('oro_rest_api_cget', ['entity' => $this->getEntityType(Customer::class)]);
        $response = $this->request('GET', $uri, []);

        $this->assertApiResponseStatusCodeEquals($response, Response::HTTP_OK, Customer::class, 'get list');
        $content = json_decode($response->getContent(), true);
        $defaultCustomer = $this->getDefaultCustomer();
        /** @var Customer $customer1 */
        $customer1 = $this->getReference('customer.1');

        $owner = $defaultCustomer->getOwner();
        $organization = $defaultCustomer->getOrganization();
        $expected = [
            'data' => [
                [
                    'type' => 'customers',
                    'id' => (string)$defaultCustomer->getId(),
                    'attributes' => [
                        'name' => $defaultCustomer->getName(),
                        'lifetime' => null,
                    ],
                    'relationships' => [
                        'parent' => ['data' => null,],
                        'children' => [
                            'data' => [
                                [
                                    'type' => 'customers',
                                    'id' => (string)$customer1->getId(),
                                ],
                            ],
                        ],
                        'users' => [
                            'data' => [
                                [
                                    'type' => 'customer_users',
                                    'id' => $defaultCustomer->getUsers()->first()->getId(),
                                ],
                            ],
                        ],
                        'owner' => [
                            'data' => ['type' => 'users', 'id' => (string)$owner->getId()],
                        ],
                        'organization' => [
                            'data' => ['type' => 'organizations', 'id' => (string)$organization->getId()],
                        ],
                        'salesRepresentatives' => ['data' => []],
                        'internal_rating' => ['data' => null],
                        'group' => ['data' => null],
                    ],
                ],
                [
                    'type' => 'customers',
                    'id' => (string)$customer1->getId(),
                    'attributes' =>
                        [
                            'name' => 'customer.1',
                            'lifetime' => null,
                        ],
                    'relationships' => [
                        'parent' => [
                            'data' => [
                                'type' => 'customers',
                                'id' => (string)$defaultCustomer->getId(),
                            ],
                        ],
                        'children' => ['data' => [],],
                        'users' => ['data' => [],],
                        'owner' => [
                            'data' => [
                                'type' => 'users',
                                'id' => (string)$owner->getId(),
                            ],
                        ],
                        'organization' => [
                            'data' => [
                                'type' => 'organizations',
                                'id' => (string)$organization->getId(),
                            ],
                        ],
                        'salesRepresentatives' => [
                            'data' => [
                                [
                                    'type' => 'users',
                                    'id' => (string)$owner->getId(),
                                ],
                            ],
                        ],
                        'internal_rating' => [
                            'data' =>
                                [
                                    'type' => 'customer_rating',
                                    'id' => 'internal_rating.1_of_5',
                                ],
                        ],
                        'group' => [
                            'data' => [
                                'type' => 'customer_groups',
                                'id' => (string)$this->getGroup(LoadGroups::GROUP1)->getId(),
                            ],
                        ],
                    ],
                ],
            ],
        ];
        $this->assertArraySubset($expected, $content);
    }

    public function testGetCustomer()
    {
        /** @var Customer $customer1 */
        $customer = $this->getReference('customer.1');
        $uri = $this->getUrl(
            'oro_rest_api_get',
            [
                'entity' => $this->getEntityType(Customer::class),
                'id' => (string)$customer->getId(),
            ]
        );
        $response = $this->request('GET', $uri, []);

        $this->assertApiResponseStatusCodeEquals($response, Response::HTTP_OK, Customer::class, 'get');
        $content = json_decode($response->getContent(), true);

        $parent = $this->getDefaultCustomer();
        $owner = $parent->getOwner();
        $organization = $parent->getOrganization();
        $expected = [
            'data' => [
                'type' => 'customers',
                'id' => (string)$customer->getId(),
                'attributes' =>
                    [
                        'name' => 'customer.1',
                        'lifetime' => null,
                    ],
                'relationships' => [
                    'parent' => [
                        'data' => [
                            'type' => 'customers',
                            'id' => (string)$parent->getId(),
                        ],
                    ],
                    'children' => ['data' => [],],
                    'users' => ['data' => [],],
                    'owner' => [
                        'data' => [
                            'type' => 'users',
                            'id' => (string)$owner->getId(),
                        ],
                    ],
                    'organization' => [
                        'data' => [
                            'type' => 'organizations',
                            'id' => (string)$organization->getId(),
                        ],
                    ],
                    'salesRepresentatives' => [
                        'data' => [
                            [
                                'type' => 'users',
                                'id' => (string)$owner->getId(),
                            ],
                        ],
                    ],
                    'internal_rating' => [
                        'data' =>
                            [
                                'type' => 'customer_rating',
                                'id' => 'internal_rating.1_of_5',
                            ],
                    ],
                    'group' => [
                        'data' => [
                            'type' => 'customer_groups',
                            'id' => (string)$this->getGroup(LoadGroups::GROUP1)->getId(),
                        ],
                    ],
                ],
            ],
        ];
        $this->assertArraySubset($expected, $content);
    }

    public function testGetParentSubresource()
    {
        /** @var Customer $customer */
        $customer = $this->getReference('customer.1');
        $parent = $customer->getParent();
        $owner = $customer->getOwner();
        $organization = $customer->getOrganization();

        $uri = $this->getUrl(
            'oro_rest_api_get_subresource',
            [
                'entity' => $this->getEntityType(Customer::class),
                'id' => $customer->getId(),
                'association' => 'parent',
            ]
        );
        $response = $this->request('GET', $uri, []);
        $this->assertSame(Response::HTTP_OK, $response->getStatusCode());
        $content = json_decode($response->getContent(), true);
        $expected = [
            'data' => [
                'type' => 'customers',
                'id' => (string)$parent->getId(),
                'attributes' => [
                    'name' => $parent->getName(),
                    'lifetime' => null,
                ],
                'relationships' => [
                    'parent' => ['data' => null,],
                    'children' => [
                        'data' => [
                            [
                                'type' => 'customers',
                                'id' => (string)$customer->getId(),
                            ],
                        ],
                    ],
                    'users' => [
                        'data' => [
                            [
                                'type' => 'customer_users',
                                'id' => '1',
                            ],
                        ],
                    ],
                    'owner' => [
                        'data' => ['type' => 'users', 'id' => (string)$owner->getId()],
                    ],
                    'organization' => [
                        'data' => ['type' => 'organizations', 'id' => (string)$organization->getId()],
                    ],
                    'salesRepresentatives' => ['data' => []],
                    'internal_rating' => ['data' => null],
                    'group' => ['data' => null],
                ],
            ],
        ];
        $this->assertArraySubset($expected, $content);
    }

    public function testGetChildrenSubresource()
    {
        /** @var Customer $customer */
        $customer = $this->getDefaultCustomer();

        $uri = $this->getUrl(
            'oro_rest_api_get_subresource',
            [
                'entity' => $this->getEntityType(Customer::class),
                'id' => $customer->getId(),
                'association' => 'children',
            ]
        );
        $response = $this->request('GET', $uri, []);
        $this->assertSame(Response::HTTP_OK, $response->getStatusCode());
        $content = json_decode($response->getContent(), true);

        $owner = $customer->getOwner();
        $organization = $customer->getOrganization();
        $expected = [
            'data' => [
                [
                    'type' => 'customers',
                    'id' => (string)$this->getReference('customer.1')->getId(),
                    'attributes' =>
                        [
                            'name' => 'customer.1',
                            'lifetime' => null,
                        ],
                    'relationships' => [
                        'parent' => [
                            'data' => [
                                'type' => 'customers',
                                'id' => (string)$customer->getId(),
                            ],
                        ],
                        'children' => ['data' => []],
                        'users' => ['data' => []],
                        'owner' => [
                            'data' => [
                                'type' => 'users',
                                'id' => (string)$owner->getId(),
                            ],
                        ],
                        'organization' => [
                            'data' => [
                                'type' => 'organizations',
                                'id' => (string)$organization->getId(),
                            ],
                        ],
                        'salesRepresentatives' => [
                            'data' => [
                                [
                                    'type' => 'users',
                                    'id' => (string)$owner->getId(),
                                ],
                            ],
                        ],
                        'internal_rating' => [
                            'data' =>
                                [
                                    'type' => 'customer_rating',
                                    'id' => 'internal_rating.1_of_5',
                                ],
                        ],
                        'group' => [
                            'data' => [
                                'type' => 'customer_groups',
                                'id' => (string)$this->getGroup(LoadGroups::GROUP1)->getId(),
                            ],
                        ],
                    ],
                ],
            ],
        ];
        $this->assertArraySubset($expected, $content);
    }
}
