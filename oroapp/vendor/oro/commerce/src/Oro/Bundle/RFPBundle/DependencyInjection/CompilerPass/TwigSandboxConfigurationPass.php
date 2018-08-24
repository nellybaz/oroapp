<?php

namespace Oro\Bundle\RFPBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class TwigSandboxConfigurationPass implements CompilerPassInterface
{
    const EMAIL_TEMPLATE_SANDBOX_SECURITY_POLICY_SERVICE_KEY = 'oro_email.twig.email_security_policy';
    const EMAIL_TEMPLATE_RENDERER_SERVICE_KEY = 'oro_email.email_renderer';

    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasDefinition(self::EMAIL_TEMPLATE_SANDBOX_SECURITY_POLICY_SERVICE_KEY)
            && $container->hasDefinition(self::EMAIL_TEMPLATE_RENDERER_SERVICE_KEY)
        ) {
            $securityPolicyDef = $container->getDefinition(self::EMAIL_TEMPLATE_SANDBOX_SECURITY_POLICY_SERVICE_KEY);

            $functions = array_merge($securityPolicyDef->getArgument(4), ['rfp_products']);
            $securityPolicyDef->replaceArgument(4, $functions);

            $rendererDef = $container->getDefinition(self::EMAIL_TEMPLATE_RENDERER_SERVICE_KEY);
            $rendererDef->addMethodCall('addExtension', [new Reference('oro_rfp.twig.request_products')]);
        }
    }
}
