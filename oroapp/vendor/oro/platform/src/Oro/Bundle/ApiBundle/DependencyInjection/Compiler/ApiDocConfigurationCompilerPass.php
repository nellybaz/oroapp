<?php

namespace Oro\Bundle\ApiBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

use Oro\Bundle\ApiBundle\ApiDoc\RestRequestTypeProvider as ApiDocViews;
use Oro\Bundle\ApiBundle\Util\DependencyInjectionUtil;

class ApiDocConfigurationCompilerPass implements CompilerPassInterface
{
    const API_DOC_EXTRACTOR_SERVICE                 = 'nelmio_api_doc.extractor.api_doc_extractor';
    const EXPECTED_API_DOC_EXTRACTOR_CLASS          = 'Nelmio\ApiDocBundle\Extractor\ApiDocExtractor';
    const EXPECTED_CACHING_API_DOC_EXTRACTOR_CLASS  = 'Nelmio\ApiDocBundle\Extractor\CachingApiDocExtractor';
    const NEW_API_DOC_EXTRACTOR_CLASS               = 'Oro\Bundle\ApiBundle\ApiDoc\ApiDocExtractor';
    const NEW_CACHING_API_DOC_EXTRACTOR_CLASS       = 'Oro\Bundle\ApiBundle\ApiDoc\CachingApiDocExtractor';
    const API_DOC_ROUTING_OPTIONS_RESOLVER_SERVICE  = 'oro_api.rest.routing_options_resolver';
    const API_DOC_ROUTING_OPTIONS_RESOLVER_TAG_NAME = 'oro_api.routing_options_resolver';
    const REST_DOC_VIEW_DETECTOR_SERVICE            = 'oro_api.rest.doc_view_detector';
    const REQUEST_TYPE_PROVIDER_TAG                 = 'oro_api.request_type_provider';
    const API_DOC_HTML_FORMATTER_SERVICE            = 'nelmio_api_doc.formatter.html_formatter';
    const EXPECTED_API_DOC_HTML_FORMATTER_CLASS     = 'Nelmio\ApiDocBundle\Formatter\HtmlFormatter';
    const RENAMED_API_DOC_HTML_FORMATTER_SERVICE    = 'oro_api.api_doc.formatter.html_formatter.nelmio';
    const NEW_API_DOC_HTML_FORMATTER_SERVICE        = 'oro_api.api_doc.formatter.html_formatter';
    const COMPOSITE_API_DOC_HTML_FORMATTER_SERVICE  = 'oro_api.api_doc.formatter.html_formatter.composite';
    const DEFAULT_API_DOC_HTML_FORMATTER_CLASS      = 'Oro\Bundle\ApiBundle\ApiDoc\HtmlFormatter';
    const FILE_LOCATOR_SERVICE                      = 'file_locator';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$this->isApplicable($container)) {
            return;
        }

        $this->configureApiDocExtractor($container);
        $this->configureHtmlFormatter($container);
        $this->registerRoutingOptionsResolvers($container);
        $this->registerRequestTypeProviders($container);
    }

    /**
     * @param ContainerBuilder $container
     *
     * @return bool
     */
    protected function isApplicable(ContainerBuilder $container)
    {
        // extractor
        if (!$container->hasDefinition(self::API_DOC_EXTRACTOR_SERVICE)) {
            return false;
        }
        $apiDocExtractorDef = $container->getDefinition(self::API_DOC_EXTRACTOR_SERVICE);
        if (!$this->getNewApiDocExtractorClass($apiDocExtractorDef->getClass())) {
            return false;
        }

        // HTML formatter
        if (!$container->hasDefinition(self::API_DOC_HTML_FORMATTER_SERVICE)) {
            return false;
        }
        $htmlFormatterDef = $container->getDefinition(self::API_DOC_HTML_FORMATTER_SERVICE);
        if (self::EXPECTED_API_DOC_HTML_FORMATTER_CLASS !== $htmlFormatterDef->getClass()) {
            return false;
        }

        if (!$container->hasDefinition(self::API_DOC_ROUTING_OPTIONS_RESOLVER_SERVICE)) {
            return false;
        }

        return true;
    }

    /**
     * @param ContainerBuilder $container
     */
    protected function configureApiDocExtractor(ContainerBuilder $container)
    {
        $apiDocExtractorDef = $container->getDefinition(self::API_DOC_EXTRACTOR_SERVICE);
        $apiDocExtractorDef->setClass(
            $this->getNewApiDocExtractorClass($apiDocExtractorDef->getClass())
        );
        $apiDocExtractorDef->addMethodCall(
            'setRestDocViewDetector',
            [new Reference(self::REST_DOC_VIEW_DETECTOR_SERVICE)]
        );
        $apiDocExtractorDef->addMethodCall(
            'setRouteOptionsResolver',
            [new Reference(self::API_DOC_ROUTING_OPTIONS_RESOLVER_SERVICE)]
        );
    }

    /**
     * @param ContainerBuilder $container
     */
    protected function configureHtmlFormatter(ContainerBuilder $container)
    {
        // rename default HTML formatter service
        $defaultHtmlFormatterDef = $container->getDefinition(self::API_DOC_HTML_FORMATTER_SERVICE);
        $container->removeDefinition(self::API_DOC_HTML_FORMATTER_SERVICE);
        $container->setDefinition(self::RENAMED_API_DOC_HTML_FORMATTER_SERVICE, $defaultHtmlFormatterDef);
        $isPublicService = $defaultHtmlFormatterDef->isPublic();
        $defaultHtmlFormatterDef->setPublic(false);
        $defaultHtmlFormatterDef->setClass(self::DEFAULT_API_DOC_HTML_FORMATTER_CLASS);
        $defaultHtmlFormatterDef->addMethodCall(
            'setFileLocator',
            [new Reference(self::FILE_LOCATOR_SERVICE)]
        );
        $defaultHtmlFormatterDef->addMethodCall(
            'setWebBackendPrefix',
            [$container->hasParameter('web_backend_prefix') ? $container->getParameter('web_backend_prefix') : '']
        );

        // configure composite HTML formatter and set it as default one
        $compositeHtmlFormatterDef = $container->getDefinition(self::COMPOSITE_API_DOC_HTML_FORMATTER_SERVICE);
        $container->removeDefinition(self::COMPOSITE_API_DOC_HTML_FORMATTER_SERVICE);
        $container->setDefinition(self::API_DOC_HTML_FORMATTER_SERVICE, $compositeHtmlFormatterDef);
        $compositeHtmlFormatterDef->setPublic($isPublicService);
        $compositeHtmlFormatterDef->addMethodCall(
            'addFormatter',
            ['', new Reference(self::RENAMED_API_DOC_HTML_FORMATTER_SERVICE)]
        );
        $compositeHtmlFormatterDef->addMethodCall(
            'addFormatter',
            [ApiDocViews::PLAIN_VIEW, new Reference(self::NEW_API_DOC_HTML_FORMATTER_SERVICE)]
        );
        $compositeHtmlFormatterDef->addMethodCall(
            'addFormatter',
            [ApiDocViews::JSON_API_VIEW, new Reference(self::NEW_API_DOC_HTML_FORMATTER_SERVICE)]
        );
    }

    /**
     * @param ContainerBuilder $container
     */
    protected function registerRoutingOptionsResolvers(ContainerBuilder $container)
    {
        $chainServiceDef = DependencyInjectionUtil::findDefinition(
            $container,
            self::API_DOC_ROUTING_OPTIONS_RESOLVER_SERVICE
        );
        if (null !== $chainServiceDef) {
            // find services
            $services = [];
            $taggedServices = $container->findTaggedServiceIds(self::API_DOC_ROUTING_OPTIONS_RESOLVER_TAG_NAME);
            foreach ($taggedServices as $id => $attributes) {
                foreach ($attributes as $attribute) {
                    $priority = isset($attribute['priority']) ? $attribute['priority'] : 0;
                    $view = null;
                    if (!empty($attribute['view'])) {
                        $view = $attribute['view'];
                    }
                    $services[$priority][] = [new Reference($id), $view];
                }
            }
            if (empty($services)) {
                return;
            }

            // sort by priority and flatten
            krsort($services);
            $services = call_user_func_array('array_merge', $services);

            // register
            foreach ($services as $service) {
                $chainServiceDef->addMethodCall('addResolver', $service);
            }
        }
    }

    /**
     * @param ContainerBuilder $container
     */
    protected function registerRequestTypeProviders(ContainerBuilder $container)
    {
        DependencyInjectionUtil::registerTaggedServices(
            $container,
            self::REST_DOC_VIEW_DETECTOR_SERVICE,
            self::REQUEST_TYPE_PROVIDER_TAG,
            'addRequestTypeProvider'
        );
    }

    /**
     * @param string $currentClass
     *
     * @return string|null
     */
    protected function getNewApiDocExtractorClass($currentClass)
    {
        switch ($currentClass) {
            case self::EXPECTED_CACHING_API_DOC_EXTRACTOR_CLASS:
                return self::NEW_CACHING_API_DOC_EXTRACTOR_CLASS;
            case self::EXPECTED_API_DOC_EXTRACTOR_CLASS:
                return self::NEW_API_DOC_EXTRACTOR_CLASS;
            default:
                return null;
        }
    }
}
