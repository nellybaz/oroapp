<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\Visibility\Resolver;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\ScopeBundle\Manager\ScopeManager;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\BaseCategoryVisibilityResolved;
use Oro\Bundle\VisibilityBundle\Visibility\Resolver\CategoryVisibilityResolver;
use Oro\Component\Testing\Unit\EntityTrait;

class CategoryVisibilityResolverTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var Registry|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $configManager;

    /**
     * @var array
     */
    protected $visibleCategoryIds = [1, 2, 3];

    /**
     * @var array
     */
    protected $hiddenCategoryIds = [1, 2, 3];

    /**
     * @var CategoryVisibilityResolver
     */
    protected $resolver;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ScopeManager
     */
    protected $scopeManager;

    public function setUp()
    {
        $this->registry = $this->getMockBuilder('Doctrine\Bundle\DoctrineBundle\Registry')
            ->disableOriginalConstructor()
            ->getMock();

        $this->configManager = $this->getMockBuilder('Oro\Bundle\ConfigBundle\Config\ConfigManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->configManager->expects($this->any())
            ->method('get')
            ->with('oro_visibility.category_visibility')
            ->willReturn(BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE);

        $this->scopeManager = $this->getMockBuilder(ScopeManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->resolver = new CategoryVisibilityResolver($this->registry, $this->configManager, $this->scopeManager);
    }

    public function testIsCategoryVisible()
    {
        /** @var Category $category */
        $category = $this->getEntity('Oro\Bundle\CatalogBundle\Entity\Category', ['id' => 42]);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder('Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CategoryRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('isCategoryVisible')
            ->with($category, BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE)
            ->willReturn(true);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertTrue($this->resolver->isCategoryVisible($category));
    }

    public function testGetVisibleCategoryIds()
    {
        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder('Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CategoryRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('getCategoryIdsByVisibility')
            ->with(
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE,
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE
            )
            ->willReturn($this->visibleCategoryIds);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertEquals($this->visibleCategoryIds, $this->resolver->getVisibleCategoryIds());
    }

    public function testGetHiddenCategoryIds()
    {
        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder('Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CategoryRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('getCategoryIdsByVisibility')
            ->with(
                BaseCategoryVisibilityResolved::VISIBILITY_HIDDEN,
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE
            )
            ->willReturn($this->hiddenCategoryIds);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertEquals($this->hiddenCategoryIds, $this->resolver->getHiddenCategoryIds());
    }

    public function testIsCategoryVisibleForCustomerGroup()
    {
        /** @var Category $category */
        $category = $this->getEntity('Oro\Bundle\CatalogBundle\Entity\Category', ['id' => 123]);

        /** @var CustomerGroup $customerGroup */
        $customerGroup = $this->getEntity('Oro\Bundle\CustomerBundle\Entity\CustomerGroup', ['id' => 42]);

        $scope = $this->getEntity(Scope::class, ['id' => 1]);
        $this->scopeManager->method('findOrCreate')->willReturn($scope);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder(
                'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CustomerGroupCategoryRepository'
            )
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('isCategoryVisible')
            ->with($category, BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE, $scope)
            ->willReturn(false);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CustomerGroupCategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertFalse($this->resolver->isCategoryVisibleForCustomerGroup($category, $customerGroup));
    }

    public function testGetVisibleCategoryIdsForCustomerGroup()
    {
        /** @var CustomerGroup $customerGroup */
        $customerGroup = $this->getEntity('Oro\Bundle\CustomerBundle\Entity\CustomerGroup', ['id' => 42]);

        $scope = $this->getEntity(Scope::class, ['id' => 1]);
        $this->scopeManager->method('findOrCreate')->willReturn($scope);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder(
                'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CustomerGroupCategoryRepository'
            )
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('getCategoryIdsByVisibility')
            ->with(
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE,
                $scope,
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE
            )
            ->willReturn($this->visibleCategoryIds);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CustomerGroupCategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertEquals(
            $this->visibleCategoryIds,
            $this->resolver->getVisibleCategoryIdsForCustomerGroup($customerGroup)
        );
    }

    public function testGetHiddenCategoryIdsForCustomerGroup()
    {
        /** @var CustomerGroup $customerGroup */
        $customerGroup = $this->getEntity('Oro\Bundle\CustomerBundle\Entity\CustomerGroup', ['id' => 42]);

        $scope = $this->getEntity(Scope::class, ['id' => 1]);
        $this->scopeManager->method('findOrCreate')->willReturn($scope);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder(
                'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CustomerGroupCategoryRepository'
            )
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('getCategoryIdsByVisibility')
            ->with(
                BaseCategoryVisibilityResolved::VISIBILITY_HIDDEN,
                $scope,
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE
            )
            ->willReturn($this->hiddenCategoryIds);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CustomerGroupCategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertEquals(
            $this->hiddenCategoryIds,
            $this->resolver->getHiddenCategoryIdsForCustomerGroup($customerGroup)
        );
    }

    public function testIsCategoryVisibleForCustomer()
    {
        /** @var Category $category */
        $category = $this->getEntity(Category::class, ['id' => 10]);

        /** @var Customer $customer */
        $customer = $this->getEntity(Customer::class, ['id' => 20]);
        $customer->setGroup($this->getEntity(CustomerGroup::class, ['id' => 1]));

        $scope = $this->getEntity(Scope::class, ['id' => 1]);
        $this->scopeManager->method('findOrCreate')->willReturn($scope);

        $groupScope = $this->getEntity(Scope::class, ['id' => 2]);
        $this->scopeManager->method('find')->willReturn($groupScope);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder(
                'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CustomerCategoryRepository'
            )
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('isCategoryVisible')
            ->with($category, BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE, $scope, $groupScope)
            ->willReturn(true);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CustomerCategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertTrue($this->resolver->isCategoryVisibleForCustomer($category, $customer));
    }

    public function testGetVisibleCategoryIdsForCustomer()
    {
        /** @var Customer $customer */
        $customer = $this->getEntity(Customer::class, ['id' => 20]);
        $customer->setGroup($this->getEntity(CustomerGroup::class, ['id' => 1]));

        $scope = $this->getEntity(Scope::class, ['id' => 1]);
        $this->scopeManager->method('findOrCreate')->willReturn($scope);

        $groupScope = $this->getEntity(Scope::class, ['id' => 2]);
        $this->scopeManager->method('find')->willReturn($groupScope);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder(
                'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CustomerCategoryRepository'
            )
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('getCategoryIdsByVisibility')
            ->with(
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE,
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE,
                $scope,
                $groupScope
            )
            ->willReturn($this->visibleCategoryIds);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CustomerCategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertEquals(
            $this->visibleCategoryIds,
            $this->resolver->getVisibleCategoryIdsForCustomer($customer)
        );
    }

    public function testGetHiddenCategoryIdsForCustomer()
    {
        /** @var Customer $customer */
        $customer = $this->getEntity(Customer::class, ['id' => 20]);
        $customer->setGroup($this->getEntity(CustomerGroup::class, ['id' => 1]));

        $scope = $this->getEntity(Scope::class, ['id' => 1]);
        $this->scopeManager->method('findOrCreate')->willReturn($scope);

        $groupScope = $this->getEntity(Scope::class, ['id' => 2]);
        $this->scopeManager->method('find')->willReturn($groupScope);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository = $this
            ->getMockBuilder(
                'Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\Repository\CustomerCategoryRepository'
            )
            ->disableOriginalConstructor()
            ->getMock();

        $categoryVisibilityResolvedRepository->expects($this->once())
            ->method('getCategoryIdsByVisibility')
            ->with(
                BaseCategoryVisibilityResolved::VISIBILITY_HIDDEN,
                BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE,
                $scope,
                $groupScope
            )
            ->willReturn($this->hiddenCategoryIds);

        $em->expects($this->once())
            ->method('getRepository')
            ->with('OroVisibilityBundle:VisibilityResolved\CustomerCategoryVisibilityResolved')
            ->willReturn($categoryVisibilityResolvedRepository);

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->assertEquals(
            $this->hiddenCategoryIds,
            $this->resolver->getHiddenCategoryIdsForCustomer($customer)
        );
    }
}
