<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Extension;

use Doctrine\Common\Persistence\ManagerRegistry;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\WebsiteBundle\Form\Type\WebsiteScopedDataType;
use Oro\Bundle\WebsiteBundle\Provider\WebsiteProviderInterface;

class WebsiteScopedTypeMockProvider extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @return WebsiteScopedDataType
     */
    public function getWebsiteScopedDataType()
    {
        $website = $this->getEntity('Oro\Bundle\WebsiteBundle\Entity\Website', ['id' => 1, 'name' => 'US']);

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $em->expects($this->any())
            ->method('getReference')
            ->with('Oro\Bundle\WebsiteBundle\Entity\Website', 1)
            ->willReturn($website);

        $repository = $this->getMockBuilder('Oro\Bundle\WebsiteBundle\Entity\Repository\WebsiteRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $repository->expects($this->any())
            ->method('getAllWebsites')
            ->willReturn([$website]);

        /** @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject $registry */
        $registry = $this->getMockBuilder('\Doctrine\Common\Persistence\ManagerRegistry')
            ->disableOriginalConstructor()
            ->getMock();

        $registry->expects($this->any())
            ->method('getRepository')
            ->with('Oro\Bundle\WebsiteBundle\Entity\Website')
            ->willReturn($repository);

        $registry->expects($this->any())
            ->method('getManagerForClass')
            ->with('Oro\Bundle\WebsiteBundle\Entity\Website')
            ->willReturn($em);

        /** @var WebsiteProviderInterface|\PHPUnit_Framework_MockObject_MockObject $websiteProvider */
        $websiteProvider = $this->createMock('Oro\Bundle\WebsiteBundle\Provider\WebsiteProviderInterface');
        $websiteProvider->expects($this->any())
            ->method('getWebsites')
            ->willReturn([$website]);

        return new WebsiteScopedDataType($registry, $websiteProvider);
    }
}
