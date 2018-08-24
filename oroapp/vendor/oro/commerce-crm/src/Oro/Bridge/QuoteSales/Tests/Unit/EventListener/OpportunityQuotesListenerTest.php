<?php

namespace Oro\Bridge\QuoteSales\Tests;

use Oro\Bridge\QuoteSales\EventListener\OpportunityQuotesListener;

class OpportunityQuotesListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var  OpportunityQuotesListener */
    protected $opportunityQuotesListener;

    /** @var  \PHPUnit_Framework_MockObject_MockObject */
    protected $opportunityQuotesProvider;

    /** @var  \PHPUnit_Framework_MockObject_MockObject */
    protected $translator;

    public function setUp()
    {
        $this->opportunityQuotesProvider = $this
            ->getMockBuilder('Oro\Bridge\QuoteSales\Provider\OpportunityQuotesProvider')
            ->setMethods(['getQuotesByOpportunity'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->translator = $this->createMock('Symfony\Component\Translation\TranslatorInterface');

        $this->opportunityQuotesListener = new OpportunityQuotesListener(
            $this->opportunityQuotesProvider,
            $this->translator
        );
    }

    public function testNoQuotesInOpportunity()
    {
        $this->opportunityQuotesProvider
            ->expects($this->once())
            ->method('getQuotesByOpportunity')
            ->willReturn([]);

        $this->translator
            ->expects($this->never())
            ->method('trans');

        $event = $this
            ->getMockBuilder('Oro\Bundle\UIBundle\Event\BeforeViewRenderEvent')
            ->disableOriginalConstructor()
            ->getMock();

        $entity = $this
            ->getMockBuilder('Oro\Bundle\SalesBundle\Entity\Opportunity')
            ->disableOriginalConstructor()
            ->getMock();

        $entity->expects($this->once())
            ->method('getCustomerAssociation')
            ->willReturn(true);

        $event->expects($this->once())
            ->method('getEntity')
            ->willReturn($entity);

        $this->opportunityQuotesListener->addRelatedQuotes($event);
    }
}
