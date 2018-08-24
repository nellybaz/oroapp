<?php

namespace Oro\Bundle\InstallerBundle\Process\Step;

use Oro\Bundle\InstallerBundle\Command\InstallCommand;
use Oro\Bundle\InstallerBundle\CommandExecutor;
use Oro\Bundle\InstallerBundle\InstallerEvent;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Console\Output\StreamOutput;

use Sylius\Bundle\FlowBundle\Process\Step\AbstractControllerStep;

abstract class AbstractStep extends AbstractControllerStep
{
    const TRIGGER_EVENT = 'trigger:event';

    /**
     * @var Application
     */
    protected $application;

    /**
     * @var StreamOutput
     */
    protected $output;

    /**
     *
     * @param  string $command
     * @param  array  $params
     * @return mixed
     */
    protected function handleAjaxAction($command, $params = [])
    {
        $exitCode = $this->runCommand($command, $params);

        return $this->getAjaxActionResponse($exitCode);
    }

    /**
     * @param int $exitCode
     * @return mixed
     */
    protected function getAjaxActionResponse($exitCode)
    {
        return $this->getRequest()->isXmlHttpRequest()
            ? new JsonResponse(['result' => true, 'exitCode' => $exitCode])
            : $this->redirect(
                $this->generateUrl(
                    'sylius_flow_display',
                    [
                        'scenarioAlias' => 'oro_installer',
                        'stepName'      => $this->getName(),
                    ]
                )
            );
    }

    /**
     * Execute Symfony2 command
     *
     * @param  string $command Command name (for example, "cache:clear")
     * @param  array  $params  [optional] Additional command parameters, like "--force" etc
     * @return int an executed command exit code
     * @throws \Exception
     * @throws \RuntimeException
     */
    protected function runCommand($command, $params = [])
    {
        $application     = $this->getApplication();
        $output          = $this->getOutput();
        $commandExecutor = new CommandExecutor(
            $application->getKernel()->getEnvironment(),
            $output,
            $application
        );

        $output->writeln('');
        $output->writeln(sprintf('[%s] Launching "%s" command', date('Y-m-d H:i:s'), $command));

        $mem  = (int)memory_get_usage() / (1024 * 1024);
        $time = time();

        $result = null;
        try {
            if ($command === self::TRIGGER_EVENT) {
                $event = new InstallerEvent(
                    $application->get(InstallCommand::NAME),
                    new ArrayInput([]),
                    $output,
                    $commandExecutor
                );

                $this->get('event_dispatcher')->dispatch($params['name'], $event);
                $result = 0;
            } else {
                $commandExecutor->runCommand($command, $params);
                $result = $commandExecutor->getLastCommandExitCode();
            }
        } catch (\RuntimeException $ex) {
            $result = $ex;
        }

        $output->writeln('');
        $output->writeln(
            sprintf(
                'Command "%s" executed in %u second(s), memory usage: %.2fMb',
                $command,
                time() - $time,
                (int)memory_get_usage() / (1024 * 1024) - $mem
            )
        );
        $output->writeln('');

        // check for any error
        if ($result instanceof \RuntimeException) {
            throw $result;
        }

        return $result;
    }

    /**
     * @return Application
     */
    protected function getApplication()
    {
        if (!$this->application) {
            $this->application = new Application($this->get('kernel'));

            $this->application->setAutoExit(false);
        }

        return $this->application;
    }

    /**
     * @return StreamOutput
     */
    protected function getOutput()
    {
        if (!$this->output) {
            $this->output = new StreamOutput(
                fopen($this->container->getParameter('kernel.logs_dir') . DIRECTORY_SEPARATOR . 'oro_install.log', 'a+')
            );
        }

        return $this->output;
    }
}
