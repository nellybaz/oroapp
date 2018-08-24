<?php

namespace Oro\Bundle\FedexShippingBundle\Entity\EntityListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\PersistentCollection;
use Oro\Bundle\FedexShippingBundle\Entity\FedexIntegrationSettings;
use Oro\Bundle\FedexShippingBundle\Entity\FedexShippingService;
use Oro\Bundle\FedexShippingBundle\Integration\FedexChannel;
use Oro\Bundle\FedexShippingBundle\ShippingMethod\Identifier\FedexMethodTypeIdentifierGeneratorInterface;
use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\IntegrationBundle\Generator\IntegrationIdentifierGeneratorInterface;
use Oro\Bundle\ShippingBundle\Method\Event\MethodTypeRemovalEventDispatcherInterface;

class FedexDeleteIntegrationSettingsServicesEntityListener
{
    /**
     * @var IntegrationIdentifierGeneratorInterface
     */
    private $integrationIdentifierGenerator;

    /**
     * @var FedexMethodTypeIdentifierGeneratorInterface
     */
    private $typeIdentifierGenerator;

    /**
     * @var MethodTypeRemovalEventDispatcherInterface
     */
    private $typeRemovalEventDispatcher;

    /**
     * @param IntegrationIdentifierGeneratorInterface     $integrationIdentifierGenerator
     * @param FedexMethodTypeIdentifierGeneratorInterface $typeIdentifierGenerator
     * @param MethodTypeRemovalEventDispatcherInterface   $typeRemovalEventDispatcher
     */
    public function __construct(
        IntegrationIdentifierGeneratorInterface $integrationIdentifierGenerator,
        FedexMethodTypeIdentifierGeneratorInterface $typeIdentifierGenerator,
        MethodTypeRemovalEventDispatcherInterface $typeRemovalEventDispatcher
    ) {
        $this->integrationIdentifierGenerator = $integrationIdentifierGenerator;
        $this->typeIdentifierGenerator = $typeIdentifierGenerator;
        $this->typeRemovalEventDispatcher = $typeRemovalEventDispatcher;
    }

    /**
     * @param FedexIntegrationSettings $settings
     * @param LifecycleEventArgs       $args
     */
    public function postUpdate(FedexIntegrationSettings $settings, LifecycleEventArgs $args)
    {
        /** @var PersistentCollection $services */
        $services = $settings->getShippingServices();

        $deletedServices = $services->getDeleteDiff();
        if (empty($deletedServices)) {
            return;
        }

        $channel = $args->getEntityManager()
            ->getRepository('OroIntegrationBundle:Channel')
            ->findOneBy([
                'type' => FedexChannel::TYPE,
                'transport' => $settings
            ]);

        if (null === $channel) {
            return;
        }

        $this->dispatchTypeRemovalEvents($deletedServices, $channel);
    }

    /**
     * @param FedexShippingService[] $deletedServices
     * @param Channel                $channel
     */
    private function dispatchTypeRemovalEvents(array $deletedServices, Channel $channel)
    {
        $methodId = $this->integrationIdentifierGenerator->generateIdentifier($channel);

        foreach ($deletedServices as $service) {
            $typeId = $this->typeIdentifierGenerator->generate($service);
            $this->typeRemovalEventDispatcher->dispatch($methodId, $typeId);
        }
    }
}
