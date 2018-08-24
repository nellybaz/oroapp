<?php

namespace Oro\Bundle\HangoutsCallBundle\Tests\Unit\Twig;

use Oro\Bundle\HangoutsCallBundle\Twig\OroHangoutsCallExtension;
use Oro\Component\Testing\Unit\TwigExtensionTestCaseTrait;

class OroHangoutsCallExtensionTest extends \PHPUnit_Framework_TestCase
{
    use TwigExtensionTestCaseTrait;

    /** @var OroHangoutsCallExtension */
    protected $extension;

    /** @var array */
    protected $initialAppsParameter = [['app_id' => '100000000001']];

    protected function setUp()
    {
        $container = self::getContainerBuilder()
            ->addParameter('oro_hangouts.initial_apps', $this->initialAppsParameter)
            ->getContainer($this);

        $this->extension = new OroHangoutsCallExtension($container);
    }

    public function testGetInitialApps()
    {
        $this->assertEquals(
            $this->initialAppsParameter,
            self::callTwigFunction($this->extension, 'get_hangoutscall_initail_apps', [])
        );
    }

    public function testGetName()
    {
        $this->assertEquals('oro_hangoutscall_extension', $this->extension->getName());
    }
}
