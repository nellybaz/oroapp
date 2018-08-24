<?php

namespace Oro\Bundle\RFPBundle\Tests\Unit\Acl\Voter;

use Doctrine\Common\Util\ClassUtils;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\FrontendBundle\Provider\ActionCurrentApplicationProvider as ApplicationProvider;
use Oro\Bundle\RFPBundle\Acl\Voter\FrontendRequestVoter;
use Oro\Bundle\RFPBundle\Entity\Request;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Model\Workflow;
use Oro\Bundle\WorkflowBundle\Model\WorkflowManager;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class FrontendRequestVoterTest extends \PHPUnit_Framework_TestCase
{
    /** @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject */
    protected $doctrineHelper;

    /** @var ApplicationProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $applicationProvider;

    /** @var WorkflowManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $workflowManager;

    /** @var TokenInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $token;

    /** @var FrontendRequestVoter */
    protected $voter;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->doctrineHelper = $this->createMock(DoctrineHelper::class);
        $this->doctrineHelper->expects($this->any())
            ->method('getEntityClass')
            ->willReturnCallback([ClassUtils::class, 'getClass']);

        $this->applicationProvider = $this->createMock(ApplicationProvider::class);
        $this->workflowManager = $this->createMock(WorkflowManager::class);
        $this->token = $this->createMock(TokenInterface::class);

        $this->voter = new FrontendRequestVoter(
            $this->applicationProvider,
            $this->workflowManager
        );
        $this->voter->setDoctrineHelper($this->doctrineHelper);
        $this->voter->setClassName(Request::class);
    }

    public function testVoteWithActiveFrontoffice()
    {
        $definition = new WorkflowDefinition();
        $definition->setExclusiveRecordGroups(['b2b_rfq_frontoffice_flow']);

        $workflow = $this->getMockBuilder(Workflow::class)->disableOriginalConstructor()->getMock();
        $workflow->expects($this->once())->method('getDefinition')->willReturn($definition);

        $this->applicationProvider->expects($this->once())
            ->method('getCurrentApplication')
            ->willReturn(ApplicationProvider::COMMERCE_APPLICATION);

        $this->workflowManager->expects($this->once())
            ->method('getApplicableWorkflows')
            ->with(Request::class)
            ->willReturn([$workflow]);

        $this->assertEquals(
            FrontendRequestVoter::ACCESS_DENIED,
            $this->voter->vote($this->token, new Request(), ['EDIT'])
        );
    }

    public function testVoteWithInactiveFrontoffice()
    {
        $this->applicationProvider->expects($this->once())
            ->method('getCurrentApplication')
            ->willReturn(ApplicationProvider::COMMERCE_APPLICATION);

        $this->workflowManager->expects($this->once())
            ->method('getApplicableWorkflows')
            ->with(Request::class)
            ->willReturn([]);

        $this->assertEquals(
            FrontendRequestVoter::ACCESS_ABSTAIN,
            $this->voter->vote($this->token, new Request(), ['EDIT'])
        );
    }

    public function testVoteWithUnknownApplication()
    {
        $this->applicationProvider->expects($this->once())
            ->method('getCurrentApplication')
            ->willReturn('unknown_application');

        $this->workflowManager->expects($this->never())->method('getApplicableWorkflows');

        $this->assertEquals(
            FrontendRequestVoter::ACCESS_ABSTAIN,
            $this->voter->vote($this->token, new Request(), ['EDIT'])
        );
    }

    public function testVoteWithUnsupportedAttribute()
    {
        $this->applicationProvider->expects($this->never())->method('getCurrentApplication');

        $this->workflowManager->expects($this->never())->method('getApplicableWorkflows');

        $this->assertEquals(
            FrontendRequestVoter::ACCESS_ABSTAIN,
            $this->voter->vote($this->token, new Request(), ['VIEW'])
        );
    }

    public function testVoteWithUnsupportedClass()
    {
        $this->applicationProvider->expects($this->never())->method('getCurrentApplication');

        $this->workflowManager->expects($this->never())->method('getApplicableWorkflows');

        $this->assertEquals(
            FrontendRequestVoter::ACCESS_ABSTAIN,
            $this->voter->vote($this->token, new \stdClass(), ['EDIT'])
        );
    }
}
