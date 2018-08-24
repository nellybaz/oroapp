<?php

namespace Oro\Bundle\ApiBundle\Processor\Shared;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Oro\Component\ChainProcessor\ContextInterface;
use Oro\Component\ChainProcessor\ProcessorInterface;
use Oro\Bundle\ApiBundle\Config\FeatureConfigurationExtension;
use Oro\Bundle\ApiBundle\Processor\Context;
use Oro\Bundle\FeatureToggleBundle\Checker\FeatureChecker;

/**
 * Validates whether an feature is enabled for the type of entities specified
 * in the "class" property of the Context.
 */
class EntityTypeFeatureCheck implements ProcessorInterface
{
    /** @var FeatureChecker */
    protected $featureChecker;

    /**
     * @param FeatureChecker $featureChecker
     */
    public function __construct(FeatureChecker $featureChecker)
    {
        $this->featureChecker = $featureChecker;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContextInterface $context)
    {
        /** @var Context $context */

        if (!$this->featureChecker->isResourceEnabled(
            $context->getClassName(),
            FeatureConfigurationExtension::API_RESOURCE_KEY
        )) {
            throw new AccessDeniedException();
        }
    }
}
