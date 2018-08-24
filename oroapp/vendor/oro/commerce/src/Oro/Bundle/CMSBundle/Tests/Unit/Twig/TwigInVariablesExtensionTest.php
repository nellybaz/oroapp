<?php

namespace Oro\Bundle\CMSBundle\Tests\Unit\Twig;

use Oro\Bundle\CMSBundle\Twig\TwigInVariablesExtension;
use Oro\Component\Testing\Unit\TwigExtensionTestCaseTrait;

class TwigInVariablesExtensionTest extends \PHPUnit_Framework_TestCase
{
    use TwigExtensionTestCaseTrait;

    /** @var TwigInVariablesExtension */
    private $extension;

    /** @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject */
    private $twig;

    protected function setUp()
    {
        $this->twig = $this->createMock(\Twig_Environment::class);
        $this->extension = new TwigInVariablesExtension($this->twig);
    }

    public function testRenderContent()
    {
        $renderedString = 'rendered string';

        $template = $this->createMock(\Twig_Template::class);
        $template->expects($this->once())
            ->method('render')
            ->with([])
            ->willReturn($renderedString);
        $this->twig->expects($this->once())
            ->method('createTemplate')
            ->willReturn($template);

        $this->assertEquals(
            $renderedString,
            self::callTwigFilter($this->extension, 'render_content', ['{{placeholder}}'])
        );
    }
}
