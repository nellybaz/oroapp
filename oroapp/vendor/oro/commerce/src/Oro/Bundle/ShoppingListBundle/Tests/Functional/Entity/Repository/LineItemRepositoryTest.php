<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Functional\Entity\Repository;

use Doctrine\ORM\EntityRepository;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Entity\CustomerUserRole;
use Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerUserData;
use Oro\Bundle\FrontendTestFrameworkBundle\Migrations\Data\ORM\LoadCustomerUserData as OroLoadCustomerUserData;
use Oro\Bundle\SecurityBundle\Authentication\Token\UsernamePasswordOrganizationToken;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Entity\Repository\LineItemRepository;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\ShoppingListBundle\Tests\Functional\DataFixtures\LoadShoppingLists;

/**
 * @dbIsolationPerTest
 */
class LineItemRepositoryTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);

        $this->loadFixtures(
            [
                'Oro\Bundle\ShoppingListBundle\Tests\Functional\DataFixtures\LoadShoppingListLineItems',
            ]
        );
    }

    public function testFindDuplicate()
    {
        /** @var LineItem $lineItem */
        $lineItem = $this->getReference('shopping_list_line_item.1');
        $repository = $this->getLineItemRepository();

        $duplicate = $repository->findDuplicate($lineItem);
        $this->assertNull($duplicate);

        $this->setProperty($lineItem, 'id', ($lineItem->getId() + 1));
        $duplicate = $repository->findDuplicate($lineItem);
        $this->assertInstanceOf('Oro\Bundle\ShoppingListBundle\Entity\LineItem', $duplicate);
    }

    public function testGetItemsByProductAndShoppingList()
    {
        /** @var Product $product */
        $product = $this->getReference(LoadProductData::PRODUCT_1);

        /** @var ShoppingList $shoppingList */
        $shoppingList = $this->getReference(LoadShoppingLists::SHOPPING_LIST_1);

        /** @var LineItem $lineItem */
        $lineItem = $this->getReference('shopping_list_line_item.1');

        $lineItems = $this->getLineItemRepository()->getItemsByShoppingListAndProducts($shoppingList, [$product]);

        $this->assertCount(1, $lineItems);
        $this->assertContains($lineItem, $lineItems);
    }


    public function testGetOneProductLineItemsWithShoppingListNames()
    {
        /** @var Product $product */
        $product = $this->getReference(LoadProductData::PRODUCT_1);

        /** @var CustomerUser $customerUser */
        $customerUser = $this->getCustomerUserRepository()
            ->findOneBy(['username' => OroLoadCustomerUserData::AUTH_USER]);

        /** @var ShoppingList $shoppingList */
        $shoppingList = $this->getReference(LoadShoppingLists::SHOPPING_LIST_1);

        $lineItems = $this
            ->getLineItemRepository()
            ->getOneProductLineItemsWithShoppingListNames($product, $customerUser);

        $this->assertTrue(count($lineItems) > 1);

        $shoppingListLabelList = [];
        /** @var LineItem $lineItem */
        foreach ($lineItems as $lineItem) {
            $this->assertEquals($product->getSku(), $lineItem->getProduct()->getSku());
            $shoppingListLabelList[] = $lineItem->getShoppingList()->getLabel();
        }

        $this->assertTrue(count($shoppingListLabelList) > 1);
        $this->assertTrue(in_array($shoppingList->getLabel(), $shoppingListLabelList));
    }

    public function testGetProductItemsWithShoppingListNames()
    {
        /** @var Product $product */
        $product = $this->getReference(LoadProductData::PRODUCT_1);

        /** @var ShoppingList $shoppingList */
        $shoppingList = $this->getReference(LoadShoppingLists::SHOPPING_LIST_1);

        $lineItems = $this->getLineItemRepository()->getProductItemsWithShoppingListNames(
            $this->getContainer()->get('oro_security.acl_helper'),
            $product
        );

        $this->assertTrue(count($lineItems) > 1);

        $shoppingListLabelList = [];
        $productSkuList = [];
        /** @var LineItem $lineItem */
        foreach ($lineItems as $lineItem) {
            $productSkuList[] = $lineItem->getProduct()->getSku();
            $shoppingListLabelList[] = $lineItem->getShoppingList()->getLabel();
        }

        $this->assertTrue(count($productSkuList) > 1);
        $this->assertTrue(in_array($product->getSku(), $productSkuList));

        $this->assertTrue(count($shoppingListLabelList) > 1);
        $this->assertTrue(in_array($shoppingList->getLabel(), $shoppingListLabelList));
    }

    /**
     * @dataProvider productItemsWithShoppingListNamesDataProvider
     * @param array $productReferences
     * @param array $shoppingListReferences
     * @param string $userEmail
     * @param string $roleName
     */
    public function testGetProductItemsWithShoppingListNamesForProduct7(
        array $productReferences,
        array $shoppingListReferences,
        $userEmail,
        $roleName
    ) {
        /** @var EntityRepository $userRepository */
        $userRepository = $this->getContainer()
            ->get('doctrine')
            ->getRepository(CustomerUser::class);

        /** @var CustomerUser $customerUser */
        $customerUser = $userRepository->findOneBy(['email' => $userEmail]);

        $customerUserRoleRepository = $this->getContainer()
            ->get('doctrine')
            ->getRepository(CustomerUserRole::class);
        $role = $customerUserRoleRepository->findOneBy(['role' => $roleName]);
        $token = new UsernamePasswordOrganizationToken(
            $customerUser,
            LoadCustomerUserData::LEVEL_1_PASSWORD,
            'phpunit',
            $customerUser->getOrganization(),
            [$role]
        );

        $tokenStorage = $this->getContainer()->get('security.token_storage');
        $tokenStorage->setToken($token);

        /** @var Product[] $products */
        $products = [
            $this->getReference(LoadProductData::PRODUCT_4),
            $this->getReference(LoadProductData::PRODUCT_7)
        ];

        $expectedProductSkuList = [];
        foreach ($productReferences as $productReference) {
            /** @var Product $product */
            $product = $this->getReference($productReference);
            $expectedProductSkuList[$product->getSku()] = $product->getSku();
        }

        $expectedShoppingListLabelList = [];
        foreach ($shoppingListReferences as $shoppingListReference) {
            $expectedShoppingListLabelList[$this->getReference($shoppingListReference)->getLabel()] =
                $this->getReference($shoppingListReference)->getLabel();
        }

        $lineItems = $this->getLineItemRepository()->getProductItemsWithShoppingListNames(
            $this->getContainer()->get('oro_security.acl_helper'),
            $products
        );

        $shoppingListLabelList = [];
        $productSkuList = [];
        /** @var LineItem $lineItem */
        foreach ($lineItems as $lineItem) {
            $productSkuList[$lineItem->getProduct()->getSku()] = $lineItem->getProduct()->getSku();
            $shoppingListLabelList[$lineItem->getShoppingList()->getLabel()] = $lineItem->getShoppingList()->getLabel();
        }

        $this->assertArraySubset($expectedProductSkuList, $productSkuList);
        $this->assertArraySubset($expectedShoppingListLabelList, $shoppingListLabelList);
    }

    /**
     * @return array
     */
    public function productItemsWithShoppingListNamesDataProvider()
    {
        return [
            'as frontend administrator customer user has access to all shopping lists of his/her business unit' => [
                'productReferences' => [
                    LoadProductData::PRODUCT_4,
                    LoadProductData::PRODUCT_7
                ],
                'shoppingListReferences' => [
                    LoadShoppingLists::SHOPPING_LIST_6,
                    LoadShoppingLists::SHOPPING_LIST_7
                ],
                'userEmail' => LoadCustomerUserData::LEVEL_1_EMAIL,
                'roleName' => 'ROLE_FRONTEND_ADMINISTRATOR'
            ],
            'as frontend buyer customer user has access to his/her own shopping lists only' => [
                'productReferences' => [
                    LoadProductData::PRODUCT_7
                ],
                'shoppingListReferences' => [
                    LoadShoppingLists::SHOPPING_LIST_7
                ],
                'userEmail' => LoadCustomerUserData::LEVEL_1_EMAIL,
                'roleName' => 'ROLE_FRONTEND_BUYER'
            ],
        ];
    }

    public function testGetLastProductsGroupedByShoppingList()
    {
        $shoppingLists = [
            $this->getReference(LoadShoppingLists::SHOPPING_LIST_1),
            $this->getReference(LoadShoppingLists::SHOPPING_LIST_5)
        ];

        $productName1 = $this->getReference(LoadProductData::PRODUCT_1)->getName()->getString();
        $productName5 = $this->getReference(LoadProductData::PRODUCT_5)->getName()->getString();
        $productName8 = $this->getReference(LoadProductData::PRODUCT_8)->getName()->getString();

        $shoppingListId1 = $this->getReference(LoadShoppingLists::SHOPPING_LIST_1)->getId();
        $shoppingListId5 = $this->getReference(LoadShoppingLists::SHOPPING_LIST_5)->getId();

        /** @var LineItem[] $lineItems */
        $result = $this->getLineItemRepository()->getLastProductsGroupedByShoppingList($shoppingLists, 2);

        $this->assertEquals(
            [
                $shoppingListId1 => [
                    [
                        'name' => $productName1
                    ]
                ],
                $shoppingListId5 => [
                    [
                        'name' => $productName8
                    ],
                    [
                        'name' => $productName5
                    ]
                ]
            ],
            $result
        );
    }

    /**
     * @return LineItemRepository
     */
    protected function getLineItemRepository()
    {
        return $this->getContainer()->get('doctrine')->getRepository('OroShoppingListBundle:LineItem');
    }

    /**
     * @return EntityRepository
     */
    protected function getCustomerUserRepository()
    {
        return $this->getContainer()->get('doctrine')->getRepository('OroCustomerBundle:CustomerUser');
    }

    /**
     * @param object $object
     * @param string $property
     * @param mixed $value
     */
    protected function setProperty($object, $property, $value)
    {
        $reflection = new \ReflectionProperty(get_class($object), $property);
        $reflection->setAccessible(true);
        $reflection->setValue($object, $value);
    }
}
