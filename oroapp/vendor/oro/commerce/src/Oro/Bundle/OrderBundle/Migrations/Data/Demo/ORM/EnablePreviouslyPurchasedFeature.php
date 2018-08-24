<?php

namespace Oro\Bundle\CatalogBundle\Migrations\Data\Demo\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

use Oro\Bundle\OrderBundle\DependencyInjection\Configuration as OrderConfig;

/**
 * Class EnablePreviouslyPurchasedFeature just enable Previously Purchased feature on demo instance
 */
class EnablePreviouslyPurchasedFeature extends AbstractFixture implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $configManager = $this->container->get('oro_config.global');
        $configManager->set(OrderConfig::getConfigKey(OrderConfig::CONFIG_KEY_ENABLE_PURCHASE_HISTORY), true);

        $configManager->flush();
    }
}
