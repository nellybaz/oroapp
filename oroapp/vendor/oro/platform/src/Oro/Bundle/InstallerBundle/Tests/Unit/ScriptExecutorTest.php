<?php

namespace Oro\Bundle\InstallerBundle\Tests\Unit;

use Oro\Bundle\InstallerBundle\ScriptExecutor;

class ScriptExecutorTest extends \PHPUnit_Framework_TestCase
{
    public function testRunScript()
    {
        $testScriptFile = realpath(__DIR__ . '/Fixture/src/TestPackage/install.php');

        $output = $this->getMockBuilder('Symfony\Component\Console\Output\StreamOutput')
            ->disableOriginalConstructor()
            ->getMock();
        $output->expects($this->at(0))
            ->method('writeln')
            ->with($this->stringContains(sprintf('Launching "Test Package Installer" (%s) script', $testScriptFile)));
        $output->expects($this->at(1))
            ->method('writeln')
            ->with('Test Package Installer data');
        $container = $this->createMock('Symfony\Component\DependencyInjection\ContainerBuilder');

        $commandExecutor = $this->getMockBuilder('Oro\Bundle\InstallerBundle\CommandExecutor')
            ->disableOriginalConstructor()
            ->getMock();
        $scriptExecutor = new ScriptExecutor($output, $container, $commandExecutor);

        $scriptExecutor->runScript($testScriptFile);
    }
}
