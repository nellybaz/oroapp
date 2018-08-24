<?php

namespace Oro\Bundle\ReportBundle\Tests\Functional;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CaseBundle\Entity\CaseComment;
use Oro\Bundle\CaseBundle\Entity\CasePriority;
use Oro\Bundle\CaseBundle\Entity\CaseSource;
use Oro\Bundle\CaseBundle\Entity\CaseStatus;
use Oro\Bundle\CaseBundle\Model\CaseEntityManager;

class CaseEntityManagerTest extends WebTestCase
{
    /**
     * @var CaseEntityManager
     */
    protected $manager;

    protected function setUp()
    {
        $this->initClient(
            array(),
            array_merge($this->generateBasicAuthHeader(), array('HTTP_X-CSRF-Header' => 1))
        );

        $this->loadFixtures(
            array(
                'Oro\Bundle\CaseBundle\Tests\Functional\DataFixtures\LoadCaseEntityData',
            )
        );

        $this->manager = $this->getContainer()->get('oro_case.manager');
    }

    public function testCreateCase()
    {
        $case = $this->manager->createCase();
        $this->assertInstanceOf('Oro\Bundle\CaseBundle\Entity\CaseEntity', $case);
        $this->assertEquals(CaseStatus::STATUS_OPEN, $case->getStatus()->getName());
        $this->assertEquals(CaseSource::SOURCE_OTHER, $case->getSource()->getName());
        $this->assertEquals(CasePriority::PRIORITY_NORMAL, $case->getPriority()->getName());
    }

    public function testCreateComment()
    {
        $case = $this->manager->createCase();
        $comment = $this->manager->createComment($case);
        $this->assertInstanceOf('Oro\Bundle\CaseBundle\Entity\CaseComment', $comment);
        $this->assertEquals($case, $comment->getCase());
    }

    /**
     * @dataProvider getCommentsDataProvider
     */
    public function testGetComments($caseSubject, $order, $expectedCommentsMessage)
    {
        $case = $this->getContainer()->get('doctrine')
            ->getRepository('OroCaseBundle:CaseEntity')
            ->findOneBySubject($caseSubject);

        $this->assertNotEmpty($case);

        $comments = $this->manager->getCaseComments($case, $order);

        $this->assertCount(count($expectedCommentsMessage), $comments);
        $this->assertSame(
            $expectedCommentsMessage,
            array_map(
                function (CaseComment $comment) {
                    return $comment->getMessage();
                },
                $comments
            )
        );
    }

    public function getCommentsDataProvider()
    {
        return array(
            'DESC' => array(
                'caseSubject' => 'Case #1',
                'order' => 'DESC',
                'expectedCommentsMessage' => array(
                    'Case #1 Comment #3',
                    'Case #1 Comment #2',
                    'Case #1 Comment #1',
                )
            ),
            'ASC' => array(
                'caseSubject' => 'Case #1',
                'order' => 'ASC',
                'expectedCommentsMessage' => array(
                    'Case #1 Comment #1',
                    'Case #1 Comment #2',
                    'Case #1 Comment #3',
                )
            ),
        );
    }
}
