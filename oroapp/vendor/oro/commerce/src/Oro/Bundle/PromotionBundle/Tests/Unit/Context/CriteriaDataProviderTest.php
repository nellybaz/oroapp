<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Context;

use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\CustomerBundle\Entity\CustomerOwnerAwareInterface;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Provider\CustomerUserRelationsProvider;
use Oro\Bundle\PromotionBundle\Context\CriteriaDataProvider;
use Oro\Bundle\WebsiteBundle\Entity\Website;
use Oro\Bundle\WebsiteBundle\Entity\WebsiteAwareInterface;
use Oro\Bundle\WebsiteBundle\Manager\WebsiteManager;

class CriteriaDataProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CustomerUserRelationsProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $relationsProvider;

    /**
     * @var WebsiteManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $websiteManager;

    /**
     * @var CriteriaDataProvider
     */
    private $provider;

    protected function setUp()
    {
        $this->relationsProvider = $this->createMock(CustomerUserRelationsProvider::class);
        $this->websiteManager = $this->createMock(WebsiteManager::class);

        $this->provider = new CriteriaDataProvider(
            $this->relationsProvider,
            $this->websiteManager
        );
    }

    public function testGetCustomerUser()
    {
        /** @var CustomerOwnerAwareInterface|\PHPUnit_Framework_MockObject_MockObject $entity */
        $entity = $this->createMock(CustomerOwnerAwareInterface::class);

        $customerUser = $this->createMock(CustomerUser::class);
        $entity->expects($this->once())
            ->method('getCustomerUser')
            ->willReturn($customerUser);

        $this->assertSame($customerUser, $this->provider->getCustomerUser($entity));
    }

    public function testGetCustomerFromRelationProvider()
    {
        /** @var CustomerOwnerAwareInterface|\PHPUnit_Framework_MockObject_MockObject $entity */
        $entity = $this->createMock(CustomerOwnerAwareInterface::class);

        $customerUser = $this->createMock(CustomerUser::class);
        $customer = $this->createMock(Customer::class);
        $entity->expects($this->once())
            ->method('getCustomerUser')
            ->willReturn($customerUser);
        $entity->expects($this->never())
            ->method('getCustomer');

        $this->relationsProvider->expects($this->once())
            ->method('getCustomer')
            ->with($customerUser)
            ->willReturn($customer);
        $this->assertSame($customer, $this->provider->getCustomer($entity));
    }

    public function testGetCustomerFromEntity()
    {
        /** @var CustomerOwnerAwareInterface|\PHPUnit_Framework_MockObject_MockObject $entity */
        $entity = $this->createMock(CustomerOwnerAwareInterface::class);

        $customerUser = $this->createMock(CustomerUser::class);
        $customer = $this->createMock(Customer::class);
        $entity->expects($this->once())
            ->method('getCustomerUser')
            ->willReturn($customerUser);
        $entity->expects($this->once())
            ->method('getCustomer')
            ->willReturn($customer);

        $this->relationsProvider->expects($this->once())
            ->method('getCustomer')
            ->with($customerUser)
            ->willReturn(null);
        $this->assertSame($customer, $this->provider->getCustomer($entity));
    }

    public function testGetCustomerGroupFromCustomer()
    {
        /** @var CustomerOwnerAwareInterface|\PHPUnit_Framework_MockObject_MockObject $entity */
        $entity = $this->createMock(CustomerOwnerAwareInterface::class);

        $customerUser = $this->createMock(CustomerUser::class);
        $customer = $this->createMock(Customer::class);
        $customerGroup = $this->createMock(CustomerGroup::class);

        $customer->expects($this->once())
            ->method('getGroup')
            ->willReturn($customerGroup);

        $entity->expects($this->once())
            ->method('getCustomerUser')
            ->willReturn($customerUser);
        $this->relationsProvider->expects($this->once())
            ->method('getCustomer')
            ->with($customerUser)
            ->willReturn($customer);
        $this->relationsProvider->expects($this->never())
            ->method('getCustomerGroup');

        $this->assertSame($customerGroup, $this->provider->getCustomerGroup($entity));
    }

    public function testGetCustomerGroupFromRelationProvider()
    {
        /** @var CustomerOwnerAwareInterface|\PHPUnit_Framework_MockObject_MockObject $entity */
        $entity = $this->createMock(CustomerOwnerAwareInterface::class);

        $customerUser = $this->createMock(CustomerUser::class);
        $customer = $this->createMock(Customer::class);
        $customerGroup = $this->createMock(CustomerGroup::class);

        $customer->expects($this->once())
            ->method('getGroup')
            ->willReturn(null);

        $entity->expects($this->atLeastOnce())
            ->method('getCustomerUser')
            ->willReturn($customerUser);
        $this->relationsProvider->expects($this->once())
            ->method('getCustomer')
            ->with($customerUser)
            ->willReturn($customer);
        $this->relationsProvider->expects($this->once())
            ->method('getCustomerGroup')
            ->with($customerUser)
            ->willReturn($customerGroup);

        $this->assertSame($customerGroup, $this->provider->getCustomerGroup($entity));
    }

    public function testGetWebsiteFromEntity()
    {
        /** @var WebsiteAwareInterface|\PHPUnit_Framework_MockObject_MockObject $entity */
        $entity = $this->createMock(WebsiteAwareInterface::class);
        $website = new Website();
        $entity->expects($this->once())
            ->method('getWebsite')
            ->willReturn($website);
        $this->websiteManager->expects($this->never())
            ->method($this->anything());

        $this->assertSame($website, $this->provider->getWebsite($entity));
    }

    public function testGetWebsiteFromWebsiteManager()
    {
        /** @var WebsiteAwareInterface|\PHPUnit_Framework_MockObject_MockObject $entity */
        $entity = $this->createMock(WebsiteAwareInterface::class);
        $website = new Website();
        $entity->expects($this->once())
            ->method('getWebsite')
            ->willReturn(null);
        $this->websiteManager->expects($this->once())
            ->method('getCurrentWebsite')
            ->willReturn($website);

        $this->assertSame($website, $this->provider->getWebsite($entity));
    }
}
