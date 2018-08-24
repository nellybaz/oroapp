<?php

namespace Oro\Bundle\TrackingBundle\Migrations\Data\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;

class SetShareGridConfig extends AbstractFixture implements ContainerAwareInterface
{
    const PACKAGE_ENTERPRISE = 'enterprise';

    protected static $entityEnterpriseSecurityConfigs = [
        ['Oro\Bundle\TrackingBundle\Entity\TrackingWebsite', 'share_scopes', ['user']],
    ];

    /** @var ContainerInterface */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $packageProvider = $this->container->get('oro_platform.provider.package');
        $entitySecurityConfigs = [];
        foreach ($packageProvider->getOroPackages() as $package) {
            if (strpos($package->getName(), self::PACKAGE_ENTERPRISE) !== false) {
                $entitySecurityConfigs = self::$entityEnterpriseSecurityConfigs;
                break;
            }
        }

        $configManager = $this->container->get('oro_entity_config.config_manager');

        foreach ($entitySecurityConfigs as $securityConfig) {
            $this->setEntityConfig($configManager, $securityConfig[0], $securityConfig[1], $securityConfig[2]);
        }

        $configManager->flush();
    }

    /**
     * @param ConfigManager $configManager
     * @param string        $entityClass
     * @param string        $code
     * @param mixed         $value
     */
    protected function setEntityConfig(ConfigManager $configManager, $entityClass, $code, $value)
    {
        if (!$configManager->hasConfig($entityClass)) {
            return;
        }

        $entityConfig = $configManager->getProvider('security')->getConfig($entityClass);
        $entityConfig->set($code, $value);
        $configManager->persist($entityConfig);
    }
}
