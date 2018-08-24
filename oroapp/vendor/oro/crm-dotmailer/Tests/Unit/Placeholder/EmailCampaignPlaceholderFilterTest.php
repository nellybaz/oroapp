<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Unit\Placeholder;

use Oro\Bundle\DotmailerBundle\Placeholders\EmailCampaignPlaceholderFilter;
use Oro\Bundle\DotmailerBundle\Transport\DotmailerEmailCampaignTransport;

class EmailCampaignPlaceholderFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EmailCampaignPlaceholderFilter
     */
    protected $target;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $repository;

    protected function setUp()
    {
        $this->registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $this->repository = $this->createMock('Doctrine\Common\Persistence\ObjectRepository');

        $this->registry
            ->expects($this->any())
            ->method('getRepository')
            ->will($this->returnValue($this->repository));

        $this->target = new EmailCampaignPlaceholderFilter($this->registry);
    }

    public function testIsApplicableOnEmailCampaign()
    {
        $actual = $this->target->isApplicableOnEmailCampaign(new \StdClass());
        $this->assertFalse($actual);

        $entity = $this->createMock('Oro\Bundle\CampaignBundle\Entity\EmailCampaign');
        $entity->expects($this->once())
            ->method('getTransport')
            ->will($this->returnValue('OtherTransport'));
        $actual = $this->target->isApplicableOnEmailCampaign($entity);
        $this->assertFalse($actual);

        $entity = $this->createMock('Oro\Bundle\CampaignBundle\Entity\EmailCampaign');
        $entity->expects($this->any())
            ->method('getTransport')
            ->will($this->returnValue(DotmailerEmailCampaignTransport::NAME));

        $this->repository
            ->expects($this->at(0))
            ->method('findOneBy')
            ->with(['emailCampaign' => $entity])
            ->will($this->returnValue(false));
        $this->repository
            ->expects($this->at(1))
            ->method('findOneBy')
            ->with(['emailCampaign' => $entity])
            ->will($this->returnValue(true));

        $actual = $this->target->isApplicableOnEmailCampaign($entity);
        $this->assertFalse($actual);

        $actual = $this->target->isApplicableOnEmailCampaign($entity);
        $this->assertTrue($actual);
    }
}
