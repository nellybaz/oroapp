<?php

namespace Oro\Bundle\CatalogBundle\Migrations\Data\Demo\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

use Oro\Bundle\CatalogBundle\DependencyInjection\Configuration as CatalogConfig;

/**
 * Class EnableAllProductsDemoData just enable All products page on demo instance
 */
class EnableAllProductsDemoData extends AbstractFixture implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $configManager = $this->container->get('oro_config.global');
        $configManager->set(CatalogConfig::getConfigKeyByName(CatalogConfig::ALL_PRODUCTS_PAGE_ENABLED), true);

        $configManager->flush();
    }
}
