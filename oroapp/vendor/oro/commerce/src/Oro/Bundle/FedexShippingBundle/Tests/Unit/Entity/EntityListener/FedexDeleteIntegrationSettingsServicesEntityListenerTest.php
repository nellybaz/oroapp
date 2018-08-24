<?php

namespace Oro\Bundle\FedexShippingBundle\Tests\Unit\Entity\EntityListener;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\PersistentCollection;
use Oro\Bundle\FedexShippingBundle\Entity\EntityListener\FedexDeleteIntegrationSettingsServicesEntityListener;
use Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings;
use Oro\Bundle\FedexShippingBundle\Entity\FedexShippingService;
use Oro\Bundle\FedexShippingBundle\Integration\FedexChannel;
use Oro\Bundle\FedexShippingBundle\ShippingMethod\Identifier\FedexMethodTypeIdentifierGeneratorInterface;
use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\IntegrationBundle\Generator\IntegrationIdentifierGeneratorInterface;
use Oro\Bundle\ShippingBundle\Method\Event\MethodTypeRemovalEventDispatcherInterface;
use PHPUnit\Framework\TestCase;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class FedexDeleteIntegrationSettingsServicesEntityListenerTest extends TestCase
{
    const METHOD_ID = 'method';

    /**
     * @var IntegrationIdentifierGeneratorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $integrationIdentifierGenerator;

    /**
     * @var FedexMethodTypeIdentifierGeneratorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $typeIdentifierGenerator;

    /**
     * @var MethodTypeRemovalEventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $typeRemovalEventDispatcher;

    /**
     * @var FedexDeleteIntegrationSettingsServicesEntityListener
     */
    private $listener;

    protected function setUp()
    {
        $this->integrationIdentifierGenerator = $this->createMock(IntegrationIdentifierGeneratorInterface::class);
        $this->typeIdentifierGenerator = $this->createMock(FedexMethodTypeIdentifierGeneratorInterface::class);
        $this->typeRemovalEventDispatcher = $this->createMock(MethodTypeRemovalEventDispatcherInterface::class);

        $this->listener = new FedexDeleteIntegrationSettingsServicesEntityListener(
            $this->integrationIdentifierGenerator,
            $this->typeIdentifierGenerator,
            $this->typeRemovalEventDispatcher
        );
    }

    public function testPostUpdateNoDeletedServices()
    {
        $settings = $this->createSettings([]);

        $args = $this->createMock(LifecycleEventArgs::class);
        $args
            ->expects(static::never())
            ->method('getEntityManager');

        $this->listener->postUpdate($settings, $args);
    }

    public function testPostUpdateNoChannel()
    {
        $settings = $this->createSettings([
            new FedexShippingService(),
            new FedexShippingService(),
        ]);

        $this->typeRemovalEventDispatcher
            ->expects(static::never())
            ->method('dispatch');

        $this->listener->postUpdate($settings, $this->createArgs(null, $settings));
    }

    public function testPostUpdate()
    {
        $channel = new Channel();
        $services = [
            new FedexShippingService(),
            new FedexShippingService(),
        ];
        $typeIds = ['1', '2'];

        $settings = $this->createSettings($services);

        $this->integrationIdentifierGenerator
            ->expects(static::once())
            ->method('generateIdentifier')
            ->with($channel)
            ->willReturn(self::METHOD_ID);

        $this->typeIdentifierGenerator
            ->expects(static::exactly(2))
            ->method('generate')
            ->withConsecutive([$services[0]], [$services[1]])
            ->willReturnOnConsecutiveCalls($typeIds[0], $typeIds[1]);

        $this->typeRemovalEventDispatcher
            ->expects(static::exactly(2))
            ->method('dispatch')
            ->withConsecutive([self::METHOD_ID, $typeIds[0]], [self::METHOD_ID, $typeIds[1]]);

        $this->listener->postUpdate($settings, $this->createArgs($channel, $settings));
    }

    /**
     * @param FedexShippingService[] $deletedServices
     *
     * @return FedexIntegrationSettings|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createSettings(array $deletedServices)
    {
        $serviceCollection = new PersistentCollection(
            $this->createMock(EntityManagerInterface::class),
            $this->createMock(ClassMetadata::class),
            new ArrayCollection($deletedServices)
        );
        $serviceCollection->takeSnapshot();
        $serviceCollection->clear();

        $settings = $this->createMock(FedexIntegrationSettings::class);
        $settings->expects(static::once())
            ->method('getShippingServices')
            ->willReturn($serviceCollection);

        return $settings;
    }

    /**
     * @param Channel|null             $channel
     * @param FedexIntegrationSettings $settings
     *
     * @return LifecycleEventArgs|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createArgs(Channel $channel = null, FedexIntegrationSettings $settings)
    {
        $repository = $this->createMock(EntityRepository::class);
        $repository
            ->expects(static::once())
            ->method('findOneBy')
            ->with([
                'type' => FedexChannel::TYPE,
                'transport' => $settings
            ])
            ->willReturn($channel);

        $entityManager = $this->createMock(EntityManager::class);
        $entityManager
            ->expects(static::once())
            ->method('getRepository')
            ->willReturn($repository);

        $args = $this->createMock(LifecycleEventArgs::class);
        $args
            ->expects(static::once())
            ->method('getEntityManager')
            ->willReturn($entityManager);

        return $args;
    }
}
