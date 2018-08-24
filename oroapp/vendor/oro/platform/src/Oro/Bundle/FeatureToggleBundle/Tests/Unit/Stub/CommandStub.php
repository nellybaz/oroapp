<?php

namespace Oro\Bundle\FeatureToggleBundle\Tests\Unit\Stub;

use Symfony\Component\Console\Command\Command;

use Oro\Bundle\FeatureToggleBundle\Checker\FeatureChecker;
use Oro\Bundle\FeatureToggleBundle\Checker\FeatureCheckerAwareInterface;

/**
 * Class CommandStub is created to easily test concept of FeatureChecker injection
 */
class CommandStub extends Command implements FeatureCheckerAwareInterface
{
    /** @var FeatureChecker */
    private $featureChecker;

    /**
     * @inheritDoc
     */
    public function setFeatureChecker(FeatureChecker $featureChecker)
    {
        $this->featureChecker = $featureChecker;
    }

    /**
     * @return FeatureChecker
     */
    public function getFeatureChecker()
    {
        return $this->featureChecker;
    }
}
