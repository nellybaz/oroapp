<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Async;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\EntityBundle\ORM\DatabaseExceptionHelper;
use Oro\Bundle\PricingBundle\Async\CombinedPriceListProcessor;
use Oro\Bundle\PricingBundle\Builder\CombinedPriceListsBuilder;
use Oro\Bundle\PricingBundle\Builder\CombinedPriceListsBuilderFacade;
use Oro\Bundle\PricingBundle\Builder\CustomerCombinedPriceListsBuilder;
use Oro\Bundle\PricingBundle\Builder\CustomerGroupCombinedPriceListsBuilder;
use Oro\Bundle\PricingBundle\Builder\WebsiteCombinedPriceListsBuilder;
use Oro\Bundle\PricingBundle\Entity\CombinedPriceList;
use Oro\Bundle\PricingBundle\Model\CombinedPriceListTriggerHandler;
use Oro\Bundle\PricingBundle\Model\DTO\PriceListRelationTrigger;
use Oro\Bundle\PricingBundle\Model\Exception\InvalidArgumentException;
use Oro\Bundle\PricingBundle\Model\PriceListRelationTriggerFactory;
use Oro\Bundle\WebsiteBundle\Entity\Website;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class CombinedPriceListProcessorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|CombinedPriceListsBuilderFacade
     */
    protected $combinedPriceListsBuilderFacade;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ObjectManager
     */
    protected $manager;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry
     */
    protected $registry;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|CombinedPriceListsBuilder
     */
    protected $cplBuilder;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|WebsiteCombinedPriceListsBuilder
     */
    protected $cplWebsiteBuilder;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|CustomerGroupCombinedPriceListsBuilder
     */
    protected $cplCustomerGroupBuilder;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|CustomerCombinedPriceListsBuilder
     */
    protected $cplCustomerBuilder;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|EventDispatcherInterface
     */
    protected $dispatcher;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|PriceListRelationTriggerFactory
     */
    protected $triggerFactory;

    /**
     * @var DatabaseExceptionHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $databaseExceptionHelper;

    /**
     * @var CombinedPriceListTriggerHandler|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $triggerHandler;

    /**
     * @var CombinedPriceListProcessor
     */
    protected $processor;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $cplBuilderClass = 'Oro\Bundle\PricingBundle\Builder\CombinedPriceListsBuilder';
        $this->cplBuilder = $this->getMockBuilder($cplBuilderClass)
            ->disableOriginalConstructor()
            ->getMock();

        $cplWebsiteBuilderClass = 'Oro\Bundle\PricingBundle\Builder\WebsiteCombinedPriceListsBuilder';
        $this->cplWebsiteBuilder = $this->getMockBuilder($cplWebsiteBuilderClass)
            ->disableOriginalConstructor()
            ->getMock();

        $cplCustomerGroupBuilderClass = 'Oro\Bundle\PricingBundle\Builder\CustomerGroupCombinedPriceListsBuilder';
        $this->cplCustomerGroupBuilder = $this->getMockBuilder($cplCustomerGroupBuilderClass)
            ->disableOriginalConstructor()
            ->getMock();

        $cplCustomerBuilderClass = 'Oro\Bundle\PricingBundle\Builder\CustomerCombinedPriceListsBuilder';
        $this->cplCustomerBuilder = $this->getMockBuilder($cplCustomerBuilderClass)
            ->disableOriginalConstructor()
            ->getMock();

        $this->dispatcher = $this->createMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        $this->logger = $this->createMock(LoggerInterface::class);
        $this->triggerFactory = $this->getMockBuilder(PriceListRelationTriggerFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->registry = $this->createMock(ManagerRegistry::class);

        $this->databaseExceptionHelper = $this->getMockBuilder(DatabaseExceptionHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->triggerHandler = $this->createMock(CombinedPriceListTriggerHandler::class);

        $this->combinedPriceListsBuilderFacade = $this->createMock(CombinedPriceListsBuilderFacade::class);

        /** @var CombinedPriceListProcessor processor */
        $this->processor = new CombinedPriceListProcessor(
            $this->cplBuilder,
            $this->cplWebsiteBuilder,
            $this->cplCustomerGroupBuilder,
            $this->cplCustomerBuilder,
            $this->dispatcher,
            $this->logger,
            $this->triggerFactory,
            $this->registry,
            $this->databaseExceptionHelper
        );
        $this->processor->setCombinedPriceListTriggerHandler($this->triggerHandler);
        $this->processor->setCombinedPriceListBuilderFacade($this->combinedPriceListsBuilderFacade);
    }

    /**
     * @dataProvider processDataProvider
     *
     * @param PriceListRelationTrigger $trigger
     * @param string $expectedMethod
     */
    public function testProcess(PriceListRelationTrigger $trigger, string $expectedMethod)
    {
        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects(($this->never()))
            ->method('rollback');

        $em->expects(($this->once()))
            ->method('commit');

        $this->triggerHandler->expects($this->once())
            ->method('startCollect');
        $this->triggerHandler->expects($this->never())
            ->method('rollback');
        $this->triggerHandler->expects($this->once())
            ->method('commit');

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with(CombinedPriceList::class)
            ->willReturn($em);

        $this->combinedPriceListsBuilderFacade->expects($this->once())
            ->method($expectedMethod);

        $this->combinedPriceListsBuilderFacade->expects($this->once())
            ->method('dispatchEvents');

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message **/
        $message = $this->createMock(MessageInterface::class);
        $message->method('getBody')->willReturn('');

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        $this->triggerFactory->method('createFromArray')->willReturn($trigger);

        $this->assertEquals(MessageProcessorInterface::ACK, $this->processor->process($message, $session));
    }

    public function testProcessWithException()
    {
        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects(($this->once()))
            ->method('rollback');

        $em->expects(($this->never()))
            ->method('commit');

        $this->triggerHandler->expects($this->once())
            ->method('startCollect');
        $this->triggerHandler->expects($this->once())
            ->method('rollback');
        $this->triggerHandler->expects($this->never())
            ->method('commit');

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with(CombinedPriceList::class)
            ->willReturn($em);

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message **/
        $message = $this->createMock(MessageInterface::class);
        $message->method('getBody')->willReturn('');

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        $this->triggerFactory->method('createFromArray')->willThrowException(new InvalidArgumentException());

        $this->assertEquals(MessageProcessorInterface::REJECT, $this->processor->process($message, $session));
    }

    /**
     * @return array
     */
    public function processDataProvider()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|Customer $customer */
        $customer = $this->createMock(Customer::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|CustomerGroup $customerGroup */
        $customerGroup = $this->createMock('Oro\Bundle\CustomerBundle\Entity\CustomerGroup');

        /** @var \PHPUnit_Framework_MockObject_MockObject|Website $website */
        $website = $this->createMock(Website::class);

        $trigger = new PriceListRelationTrigger();
        $trigger->setWebsite($website);
        return [
            [
                'trigger' => new PriceListRelationTrigger(),
                'expectedMethod' => 'rebuildAll'
            ],
            [
                'trigger' => $trigger,
                'expectedMethod' => 'rebuildForWebsites'
            ],
            [
                'trigger' => (clone $trigger)->setCustomerGroup($customerGroup),
                'expectedMethod' => 'rebuildForCustomerGroups'
            ],
            [
                'trigger' => (clone $trigger)->setCustomer($customer),
                'expectedMethod' => 'rebuildForCustomers'
            ],
        ];
    }

    /**
     * @dataProvider dispatchCustomerScopeEventDataProvider
     * @param array $builtList
     */
    public function testDispatchCustomerScopeEvent(array $builtList)
    {
        $this->prepareMocksForEvents();

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message **/
        $message = $this->createMock(MessageInterface::class);
        $message->method('getBody')->willReturn('');

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|Customer $customer */
        $customer = $this->createMock(Customer::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|Website $website */
        $website = $this->createMock(Website::class);

        $trigger = new PriceListRelationTrigger();
        $trigger->setWebsite($website)
            ->setCustomer($customer);
        $this->triggerFactory->method('createFromArray')->willReturn($trigger);

        $this->processor->process($message, $session);
    }

    /**
     * @return array
     */
    public function dispatchCustomerScopeEventDataProvider()
    {
        return [
            'with customer scope' => [
                'builtList' => [
                    'customer' => [
                        1 => [
                            1 => true,
                            2 => true
                        ]
                    ]
                ]
            ],
            'without customer scope' => [
                'builtList' => []
            ],
        ];
    }

    /**
     * @dataProvider dispatchCustomerGroupScopeEventDataProvider
     * @param array $builtList
     */
    public function testDispatchCustomerGroupScopeEvent(array $builtList)
    {
        $this->prepareMocksForEvents();

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message **/
        $message = $this->createMock(MessageInterface::class);
        $message->method('getBody')->willReturn('');

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|CustomerGroup $customer */
        $customerGroup = $this->createMock(CustomerGroup::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|Website $website */
        $website = $this->createMock(Website::class);

        $trigger = new PriceListRelationTrigger();
        $trigger->setWebsite($website)
            ->setCustomerGroup($customerGroup);
        $this->triggerFactory->method('createFromArray')->willReturn($trigger);

        $this->processor->process($message, $session);
    }

    /**
     * @return array
     */
    public function dispatchCustomerGroupScopeEventDataProvider()
    {
        return [
            'with customer group scope' => [
                'builtList' => [
                    1 => [
                        1 => true,
                        2 => true
                    ]
                ]
            ],
            'without customer group scope' => [
                'builtList' => []
            ],
        ];
    }

    /**
     * @dataProvider dispatchWebsiteScopeEventDataProvider
     * @param array $builtList
     */
    public function testDispatchWebsiteScopeEvent(array $builtList)
    {
        $this->prepareMocksForEvents();

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message **/
        $message = $this->createMock(MessageInterface::class);
        $message->method('getBody')->willReturn('');

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        /** @var \PHPUnit_Framework_MockObject_MockObject|Website $website */
        $website = $this->createMock(Website::class);

        $trigger = new PriceListRelationTrigger();
        $trigger->setWebsite($website);
        $this->triggerFactory->method('createFromArray')->willReturn($trigger);

        $this->processor->process($message, $session);
    }

    /**
     * @return array
     */
    public function dispatchWebsiteScopeEventDataProvider()
    {
        return [
            'with customer group scope' => [
                'builtList' => [1, 2, 3]
            ],
            'without customer group scope' => [
                'builtList' => []
            ],
        ];
    }

    /**
     * @dataProvider dispatchConfigScopeEventDataProvider
     * @param bool $isBuilt
     */
    public function testDispatchConfigScopeEvent($isBuilt)
    {
        $this->prepareMocksForEvents();

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message **/
        $message = $this->createMock(MessageInterface::class);
        $message->method('getBody')->willReturn('');

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        $trigger = new PriceListRelationTrigger();
        $this->triggerFactory->method('createFromArray')->willReturn($trigger);

        $this->processor->process($message, $session);
    }

    /**
     * @return array
     */
    public function dispatchConfigScopeEventDataProvider()
    {
        return [
            'built' => [
                'builtList' => true
            ],
            'not built' => [
                'builtList' => false
            ],
        ];
    }

    protected function prepareMocksForEvents()
    {
        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects(($this->never()))
            ->method('rollback');

        $em->expects(($this->once()))
            ->method('commit');

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with(CombinedPriceList::class)
            ->willReturn($em);

        $this->triggerHandler->expects($this->once())
            ->method('startCollect');
        $this->triggerHandler->expects($this->never())
            ->method('rollback');
        $this->triggerHandler->expects($this->once())
            ->method('commit');

        $this->combinedPriceListsBuilderFacade->expects($this->once())->method('dispatchEvents');
    }
}
