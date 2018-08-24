<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\Form\EventListener;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\ScopeBundle\Form\FormScopeCriteriaResolver;
use Oro\Bundle\ScopeBundle\Manager\ScopeManager;
use Oro\Bundle\ScopeBundle\Model\ScopeCriteria;
use Oro\Bundle\ScopeBundle\Tests\Unit\Stub\StubScope;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\CustomerGroupProductVisibility;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\CustomerProductVisibility;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\ProductVisibility;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\Repository\VisibilityRepositoryInterface;
use Oro\Bundle\VisibilityBundle\Form\EventListener\VisibilityFormFieldDataProvider;
use Oro\Component\Testing\Unit\EntityTrait;
use Symfony\Component\Form\FormConfigInterface;
use Symfony\Component\Form\FormInterface;

class VisibilityFormFieldDataProviderTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var VisibilityFormFieldDataProvider
     */
    protected $dataProvider;

    /**
     * @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * @var ScopeManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $scopeManager;

    /**
     * @var FormScopeCriteriaResolver|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $formScopeCriteriaResolver;

    public function setUp()
    {
        $this->registry = $this->createMock(ManagerRegistry::class);

        $this->scopeManager = $this->getMockBuilder(ScopeManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->formScopeCriteriaResolver = $this->getMockBuilder(FormScopeCriteriaResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->dataProvider = new VisibilityFormFieldDataProvider(
            $this->registry,
            $this->scopeManager,
            $this->formScopeCriteriaResolver
        );
    }

    public function testFindAllFormFieldData()
    {
        // visibility target entity
        $product = $this->getEntity(Product::class, ['id' => 1]);

        // configure form behaviour
        $form = $this->createMock(FormInterface::class);
        $form->method('getData')->willReturn($product);
        $formConfig = $this->createMock(FormConfigInterface::class);
        $rootScope = new Scope();
        $formConfig->method('getOption')
            ->willReturnMap(
                [
                    ['allClass', null, ProductVisibility::class],
                    ['scope', null, $rootScope],
                ]
            );
        $form->method('getConfig')->willReturn($formConfig);
        $allForm = $this->createMock(FormInterface::class);
        $form->expects($this->once())->method('get')->with('all')->willReturn($allForm);

        $this->formScopeCriteriaResolver->expects($this->once())
            ->method('resolve')
            ->with($allForm, ProductVisibility::VISIBILITY_TYPE)
            ->willReturn(new ScopeCriteria([], []));

        // configure database queries results
        $visibility = $this->getEntity(
            ProductVisibility::class,
            [
                'id' => 1,
                'visibility' => 'visible',
                'scope' => new StubScope(['customerGroup' => null, 'customer' => null]),
            ]
        );

        $em = $this->createMock(EntityManagerInterface::class);
        $repository = $this->createMock(VisibilityRepositoryInterface::class);
        $repository->expects($this->once())
            ->method('findByScopeCriteriaForTarget')
            ->willReturn([$visibility]);
        $em->method('getRepository')->willReturn($repository);
        $this->registry->method('getManagerForClass')->willReturn($em);

        $actual = $this->dataProvider->findFormFieldData($form, 'all');
        $this->assertEquals($visibility, $actual);
    }

    public function testFindCustomerGroupFormFieldData()
    {
        // visibility target entity
        $product = $this->getEntity(Product::class, ['id' => 1]);

        // configure form behaviour
        $form = $this->createMock(FormInterface::class);
        $form->method('getData')->willReturn($product);
        $formConfig = $this->createMock(FormConfigInterface::class);
        $rootScope = new Scope();
        $formConfig->method('getOption')
            ->willReturnMap(
                [
                    ['customerGroupClass', null, CustomerGroupProductVisibility::class],
                    ['scope', null, $rootScope],
                ]
            );
        $form->method('getConfig')->willReturn($formConfig);
        $customerGroupForm = $this->createMock(FormInterface::class);
        $form->expects($this->once())->method('get')->with('customerGroup')->willReturn($customerGroupForm);

        $this->formScopeCriteriaResolver->expects($this->once())
            ->method('resolve')
            ->with($customerGroupForm, CustomerGroupProductVisibility::VISIBILITY_TYPE)
            ->willReturn(new ScopeCriteria([], []));

        // configure database queries results
        $visibility1 = $this->getEntity(
            CustomerGroupProductVisibility::class,
            [
                'id' => 1,
                'visibility' => 'visible',
                'scope' => new StubScope(
                    ['customerGroup' => $this->getEntity(CustomerGroup::class, ['id' => 2]), 'customer' => null]
                ),
            ]
        );
        $visibility2 = $this->getEntity(
            CustomerGroupProductVisibility::class,
            [
                'id' => 2,
                'visibility' => 'hidden',
                'scope' => new StubScope(
                    ['customerGroup' => $this->getEntity(CustomerGroup::class, ['id' => 4]), 'customer' => null]
                ),
            ]
        );
        $em = $this->createMock(EntityManagerInterface::class);
        $repository = $this->createMock(VisibilityRepositoryInterface::class);
        $repository->expects($this->once())
            ->method('findByScopeCriteriaForTarget')
            ->willReturn([$visibility1, $visibility2]);
        $em->method('getRepository')->willReturn($repository);
        $this->registry->method('getManagerForClass')->willReturn($em);

        $expected = [2 => $visibility1, 4 => $visibility2];

        $actual = $this->dataProvider->findFormFieldData($form, 'customerGroup');
        $this->assertEquals($expected, $actual);
    }

    public function testFindCustomerFormFieldData()
    {
        // visibility target entity
        $product = $this->getEntity(Product::class, ['id' => 1]);

        // configure form behaviour
        $form = $this->createMock(FormInterface::class);
        $form->method('getData')->willReturn($product);
        $formConfig = $this->createMock(FormConfigInterface::class);
        $rootScope = new Scope();
        $formConfig->method('getOption')
            ->willReturnMap(
                [
                    ['customerClass', null, CustomerProductVisibility::class],
                    ['scope', null, $rootScope],
                ]
            );
        $form->method('getConfig')->willReturn($formConfig);
        $customerForm = $this->createMock(FormInterface::class);
        $form->expects($this->once())->method('get')->with('customer')->willReturn($customerForm);

        $this->formScopeCriteriaResolver->expects($this->once())
            ->method('resolve')
            ->with($customerForm, CustomerProductVisibility::VISIBILITY_TYPE)
            ->willReturn(new ScopeCriteria([], []));

        // configure database queries results
        $visibility1 = $this->getEntity(
            CustomerProductVisibility::class,
            [
                'id' => 1,
                'visibility' => 'visible',
                'scope' => new StubScope(
                    ['customer' => $this->getEntity(Customer::class, ['id' => 2]), 'customerGroup' => null]
                ),
            ]
        );
        $visibility2 = $this->getEntity(
            CustomerProductVisibility::class,
            [
                'id' => 2,
                'visibility' => 'hidden',
                'scope' => new StubScope(
                    ['customer' => $this->getEntity(Customer::class, ['id' => 4]), 'customerGroup' => null]
                ),
            ]
        );
        $em = $this->createMock(EntityManagerInterface::class);
        $repository = $this->createMock(VisibilityRepositoryInterface::class);
        $repository->expects($this->once())
            ->method('findByScopeCriteriaForTarget')
            ->willReturn([$visibility1, $visibility2]);
        $em->method('getRepository')->willReturn($repository);
        $this->registry->method('getManagerForClass')->willReturn($em);

        $expected = [2 => $visibility1, 4 => $visibility2];

        $actual = $this->dataProvider->findFormFieldData($form, 'customer');
        $this->assertEquals($expected, $actual);
    }

    public function testCreateFormFieldData()
    {
        $product = new Product();
        $form = $this->createMock(FormInterface::class);
        $form->method('getData')->willReturn($product);
        $formConfig = $this->createMock(FormConfigInterface::class);
        $rootScope = new Scope();
        $formConfig->method('hasOption')->with('scope')->willReturn(true);
        $formConfig->method('getOption')
            ->willReturnMap(
                [
                    ['customerClass', null, CustomerProductVisibility::class],
                    ['scope', null, $rootScope],
                ]
            );
        $form->method('getConfig')->willReturn($formConfig);
        $this->scopeManager->expects($this->once())
            ->method('getCriteriaByScope')
            ->with($rootScope, 'customer_product_visibility')
            ->willReturn(new ScopeCriteria(['customer' => $this->getEntity(Customer::class, ['id' => 3])], []));

        $fieldData = new Customer();
        $scope = new Scope();
        $this->scopeManager->expects($this->once())
            ->method('findOrCreate')
            ->with('customer_product_visibility', ['customer' => $fieldData])
            ->willReturn($scope);

        $actual = $this->dataProvider->createFormFieldData($form, 'customer', $fieldData);
        $expected = (new CustomerProductVisibility())->setProduct($product)->setScope($scope);
        $this->assertEquals($expected, $actual);
    }
}
