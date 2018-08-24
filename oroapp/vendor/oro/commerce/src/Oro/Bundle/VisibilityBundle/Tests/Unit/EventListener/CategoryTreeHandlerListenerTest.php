<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\EventListener;

use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Entity\UserInterface;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\VisibilityBundle\EventListener\CategoryTreeHandlerListener;
use Oro\Bundle\CustomerBundle\Provider\CustomerUserRelationsProvider;
use Oro\Bundle\VisibilityBundle\Visibility\Resolver\CategoryVisibilityResolverInterface;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Event\CategoryTreeCreateAfterEvent;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 */
class CategoryTreeHandlerListenerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var CategoryVisibilityResolverInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $categoryVisibilityResolver;

    /**
     * @var CustomerUserRelationsProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $customerUserRelationsProvider;

    /**
     * @var CategoryTreeHandlerListener
     */
    protected $listener;

    /** @var array */
    protected static $categories = [
        ['id' => 1, 'parent' => null],
        ['id' => 2, 'parent' => 1],
        ['id' => 3, 'parent' => 1],
        ['id' => 4, 'parent' => 2],
        ['id' => 5, 'parent' => 2],
        ['id' => 6, 'parent' => 4],
        ['id' => 7, 'parent' => 4],
        ['id' => 8, 'parent' => 5],
        ['id' => 9, 'parent' => 5],
        ['id' => 10, 'parent' => 3],
        ['id' => 11, 'parent' => 3],
        ['id' => 12, 'parent' => 10],
        ['id' => 13, 'parent' => 10],
        ['id' => 14, 'parent' => 11],
        ['id' => 15, 'parent' => 11],
    ];

    protected function setUp()
    {
        $this->categoryVisibilityResolver = $this->createMock(CategoryVisibilityResolverInterface::class);

        $this->customerUserRelationsProvider = $this
            ->getMockBuilder(CustomerUserRelationsProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new CategoryTreeHandlerListener(
            $this->categoryVisibilityResolver,
            $this->customerUserRelationsProvider
        );
    }

    protected function tearDown()
    {
        unset($this->categoryVisibilityResolver, $this->listener);
    }

    /**
     * @dataProvider onCreateAfterDataProvider
     *
     * @param array $categories
     * @param array $expected
     * @param array $hiddenCategoryIds
     * @param UserInterface|null $user
     * @param Customer $customer
     * @param CustomerGroup|null $customerGroup
     */
    public function testOnCreateAfter(
        array $categories,
        array $expected,
        array $hiddenCategoryIds,
        UserInterface $user = null,
        Customer $customer = null,
        CustomerGroup $customerGroup = null
    ) {
        $categories = $this->prepareCategories($categories);
        $expected = $this->prepareCategories($expected);
        $event = new CategoryTreeCreateAfterEvent($categories);
        $event->setUser($user);

        if (!$user) {
            $this->customerUserRelationsProvider->expects($this->once())
                ->method('getCustomerGroup')
                ->with($user)
                ->willReturn($customerGroup);
        }

        if ($user instanceof User) {
            $this->categoryVisibilityResolver->expects($this->never())
                ->method('isCategoryVisibleForCustomer');
            $this->categoryVisibilityResolver->expects($this->never())
                ->method('isCategoryVisibleForCustomerGroup');
            $this->categoryVisibilityResolver->expects($this->never())
                ->method('getHiddenCategoryIds');
        } elseif ($user instanceof CustomerUser && $customer) {
            $this->customerUserRelationsProvider->expects($this->once())
                ->method('getCustomer')
                ->with($user)
                ->willReturn($customer);
            $this->categoryVisibilityResolver->expects($this->once())
                ->method('getHiddenCategoryIdsForCustomer')
                ->with($customer)
                ->willReturn($hiddenCategoryIds);
        } elseif (!$user && $customerGroup) {
            $this->categoryVisibilityResolver->expects($this->once())
                ->method('getHiddenCategoryIdsForCustomerGroup')
                ->with($customerGroup)
                ->willReturn($hiddenCategoryIds);
        } else {
            $this->categoryVisibilityResolver->expects($this->once())
                ->method('getHiddenCategoryIds')
                ->willReturn($hiddenCategoryIds);
        }

        $this->listener->onCreateAfter($event);
        $actual = $event->getCategories();
        $this->assertEquals(count($expected), count($actual));

        foreach ($actual as $id => $category) {
            $this->assertEquals($expected[$id]->getId(), $category->getId());
        }
    }

    /**
     * @return array
     */
    public function onCreateAfterDataProvider()
    {
        return [
            'tree for backend user' => [
                'categories' => self::$categories,
                'expected' => self::$categories,
                'hiddenCategoryIds' => [],
                'user' => new User()
            ],
            'tree for anonymous user with visible ids' => [
                'categories' => self::$categories,
                'expected' => [
                    ['id' => 1, 'parent' => null],
                    ['id' => 2, 'parent' => 1],
                ],
                'hiddenCategoryIds' => [3, 4, 5, 8, 9, 10, 11],
                'user' => null,
                'customer' => null,
                'customerGroup' => new CustomerGroup()
            ],
            'tree without user and group' => [
                'categories' => self::$categories,
                'expected' => [
                    ['id' => 1, 'parent' => null],
                    ['id' => 2, 'parent' => 1],
                ],
                'hiddenCategoryIds' => [3, 4, 5, 8, 9, 10, 11],
                'user' => null,
                'customer' => null,
                'customerGroup' => null
            ],
            'tree for customer user with invisible ids' => [
                'categories' => self::$categories,
                'expected' => [
                    ['id' => 1, 'parent' => null],
                    ['id' => 2, 'parent' => 1],
                    ['id' => 4, 'parent' => 2],
                    ['id' => 5, 'parent' => 2],
                    ['id' => 6, 'parent' => 4],
                    ['id' => 7, 'parent' => 4],
                    ['id' => 8, 'parent' => 5],
                    ['id' => 9, 'parent' => 5],
                ],
                'hiddenCategoryIds' => [3],
                'user' => new CustomerUser(),
                'customer' => $this->getEntity(Customer::class, ['id' => 42])
            ]
        ];
    }

    /**
     * @param array $categories
     * @return Category[]
     */
    protected function prepareCategories(array $categories)
    {
        /** @var Category[] $categoriesCollection */
        $categoriesCollection = [];
        foreach ($categories as $item) {
            /** @var Category $category */
            $category = $this->getEntity(Category::class, ['id' => $item['id']]);

            $category->setParentCategory($this->getParent($item['parent'], $categoriesCollection));
            $categoriesCollection[$category->getId()] = $category;
        }
        foreach ($categoriesCollection as $parentCategory) {
            foreach ($categoriesCollection as $category) {
                if ($category->getParentCategory() === $parentCategory) {
                    $parentCategory->addChildCategory($category);
                }
            }
        }

        return $categoriesCollection;
    }

    /**
     * @param int $id
     * @param Category[] $categoriesCollection
     * @return null
     */
    protected function getParent($id, $categoriesCollection)
    {
        $parent = null;
        foreach ($categoriesCollection as $category) {
            if ($category->getId() === $id) {
                $parent = $category;
            }
        }

        return $parent;
    }
}
