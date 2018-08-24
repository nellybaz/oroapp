<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\ImportExport\Strategy;

use Akeneo\Bundle\BatchBundle\Entity\JobExecution;
use Akeneo\Bundle\BatchBundle\Entity\StepExecution;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\EntityBundle\Provider\ChainEntityClassNameProvider;
use Oro\Bundle\ImportExportBundle\Field\DatabaseHelper;
use Oro\Bundle\EntityBundle\Helper\FieldHelper;
use Oro\Bundle\ImportExportBundle\Strategy\Import\ImportStrategyHelper;
use Oro\Bundle\ImportExportBundle\Strategy\StrategyInterface;
use Oro\Bundle\IntegrationBundle\ImportExport\Helper\DefaultOwnerHelper;
use Oro\Bundle\ImportExportBundle\Strategy\Import\NewEntitiesHelper;
use Oro\Bundle\MagentoBundle\ImportExport\Strategy\StrategyHelper\AddressImportHelper;
use Oro\Bundle\ChannelBundle\ImportExport\Helper\ChannelHelper;
use Oro\Bundle\MagentoBundle\ImportExport\Strategy\AbstractImportStrategy;
use Oro\Bundle\SecurityBundle\Owner\OwnerChecker;

abstract class AbstractStrategyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ImportStrategyHelper
     */
    protected $strategyHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|StepExecution
     */
    protected $stepExecution;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|JobExecution
     */
    protected $jobExecution;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|FieldHelper
     */
    protected $fieldHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|DatabaseHelper
     */
    protected $databaseHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|DefaultOwnerHelper
     */
    protected $defaultOwnerHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ChannelHelper
     */
    protected $channelHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|AddressImportHelper
     */
    protected $addressHelper;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ChainEntityClassNameProvider
     */
    protected $chainEntityClassNameProvider;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|TranslatorInterface
     */
    protected $translator;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @var NewEntitiesHelper
     */
    protected $newEntitiesHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|OwnerChecker $channel
     */
    protected $ownerChecker;

    protected function setUp()
    {
        $this->eventDispatcher = $this->createMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        $this->fieldHelper = $this->getMockBuilder('Oro\Bundle\EntityBundle\Helper\FieldHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->fieldHelper->expects($this->any())
            ->method('getIdentityValues')
            ->willReturn([]);

        $this->fieldHelper->expects($this->any())
            ->method('getFields')
            ->willReturn([]);

        $this->databaseHelper = $this->getMockBuilder('Oro\Bundle\ImportExportBundle\Field\DatabaseHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->strategyHelper = $this
            ->getMockBuilder('Oro\Bundle\ImportExportBundle\Strategy\Import\ImportStrategyHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->strategyHelper->expects($this->any())
            ->method('isGranted')
            ->will($this->returnValue(true));

        $this->defaultOwnerHelper = $this
            ->getMockBuilder('Oro\Bundle\IntegrationBundle\ImportExport\Helper\DefaultOwnerHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->channelHelper = $this
            ->getMockBuilder('Oro\Bundle\ChannelBundle\ImportExport\Helper\ChannelHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->addressHelper = $this
            ->getMockBuilder('Oro\Bundle\MagentoBundle\ImportExport\Strategy\StrategyHelper\AddressImportHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->stepExecution = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\StepExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $this->jobExecution = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\JobExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $this->stepExecution->expects($this->any())->method('getJobExecution')
            ->will($this->returnValue($this->jobExecution));

        $this->chainEntityClassNameProvider = $this
            ->getMockBuilder('Oro\Bundle\EntityBundle\Provider\ChainEntityClassNameProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->translator = $this->getMockBuilder('Symfony\Component\Translation\TranslatorInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $this->doctrineHelper = $this->getMockBuilder('Oro\Bundle\EntityBundle\ORM\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->ownerChecker = $this->createMock(OwnerChecker::class);

        $this->newEntitiesHelper = new NewEntitiesHelper();
        $this->logger = new NullLogger();
    }

    protected function tearDown()
    {
        unset(
            $this->eventDispatcher,
            $this->strategyHelper,
            $this->fieldHelper,
            $this->databaseHelper,
            $this->strategy,
            $this->stepExecution,
            $this->jobExecution,
            $this->defaultOwnerHelper,
            $this->logger,
            $this->channelHelper,
            $this->addressHelper,
            $this->doctrineHelper,
            $this->newEntitiesHelper
        );
    }

    /**
     * @return StrategyInterface|AbstractImportStrategy
     */
    abstract protected function getStrategy();
}
