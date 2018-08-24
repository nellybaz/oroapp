<?php

namespace Oro\Bundle\CustomerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OwnerTreeListenerPass implements CompilerPassInterface
{
    const LISTENER_SERVICE = 'oro_security.ownership_tree_subscriber';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition(self::LISTENER_SERVICE)) {
            return;
        }

        $listenerDefinition = $container->getDefinition(self::LISTENER_SERVICE);
        $listenerDefinition->addMethodCall(
            'addSupportedClass',
            [
                $container->getParameter('oro_customer.entity.customer.class'),
                ['parent', 'organization']
            ]
        );
        $listenerDefinition->addMethodCall(
            'addSupportedClass',
            [
                $container->getParameter('oro_customer.entity.customer_user.class'),
                ['customer', 'organization'],
            ]
        );
    }
}
