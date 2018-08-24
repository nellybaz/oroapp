<?php

namespace Oro\Bundle\PayPalBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class OroPayPalExtension extends Extension
{
    const ALIAS = 'oro_paypal';

    /**
     * {@inheritDoc}
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
        $loader->load('form_types.yml');
        $loader->load('payflow.yml');
        $loader->load('method.yml');
        $loader->load('listeners.yml');

        if ($container->getParameter('kernel.environment') === 'test') {
            $loader->load('payment_test.yml');
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {
        return self::ALIAS;
    }
}
