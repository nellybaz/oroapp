<?php

namespace Oro\Bundle\CalendarBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class TwigSandboxConfigurationPass implements CompilerPassInterface
{
    const EMAIL_TEMPLATE_SANDBOX_SECURITY_POLICY_SERVICE_KEY = 'oro_email.twig.email_security_policy';
    const EMAIL_TEMPLATE_RENDERER_SERVICE_KEY = 'oro_email.email_renderer';
    const DATE_FORMAT_EXTENSION_SERVICE_KEY = 'oro_calendar.twig.dateformat';
    const RECURRENCE_EXTENSION_SERVICE_KEY = 'oro_calendar.twig.recurrence';

    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasDefinition(self::EMAIL_TEMPLATE_SANDBOX_SECURITY_POLICY_SERVICE_KEY)
            && $container->hasDefinition(self::EMAIL_TEMPLATE_RENDERER_SERVICE_KEY)
            && $container->hasDefinition(self::DATE_FORMAT_EXTENSION_SERVICE_KEY)
            && $container->hasDefinition(self::RECURRENCE_EXTENSION_SERVICE_KEY)) {
            // register 'calendar_date_range', 'calendar_date_range_organization', 'get_recurrence_text_value' functions
            $securityPolicyDef = $container->getDefinition(self::EMAIL_TEMPLATE_SANDBOX_SECURITY_POLICY_SERVICE_KEY);
            $functions = $securityPolicyDef->getArgument(4);
            $functions = array_merge(
                $functions,
                ['calendar_date_range', 'calendar_date_range_organization', 'get_event_recurrence_pattern']
            );
            $securityPolicyDef->replaceArgument(4, $functions);
            // register an twig extension implements this function
            $rendererDef = $container->getDefinition(self::EMAIL_TEMPLATE_RENDERER_SERVICE_KEY);
            $rendererDef->addMethodCall('addExtension', array(new Reference(self::DATE_FORMAT_EXTENSION_SERVICE_KEY)));
            $rendererDef->addMethodCall('addExtension', array(new Reference(self::RECURRENCE_EXTENSION_SERVICE_KEY)));
        }
    }
}
