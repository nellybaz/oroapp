<?php

namespace Oro\Bundle\InstallerBundle\Process\Step;

use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;

use Symfony\Component\HttpFoundation\JsonResponse;

use Oro\Bundle\InstallerBundle\InstallerEvents;
use Oro\Bundle\InstallerBundle\CommandExecutor;
use Oro\Bundle\InstallerBundle\ScriptExecutor;

class InstallationStep extends AbstractStep
{
    /**
     * @param ProcessContextInterface $context
     * @return mixed
     */
    public function displayAction(ProcessContextInterface $context)
    {
        set_time_limit(900);

        $action = $this->getRequest()->query->get('action');
        switch ($action) {
            case 'fixtures':
                return $this->handleAjaxAction('oro:migration:data:load', ['--fixtures-type' => 'demo']);
            case 'after-database':
                return $this->handleAjaxAction(
                    self::TRIGGER_EVENT,
                    ['name' => InstallerEvents::INSTALLER_AFTER_DATABASE_PREPARATION]
                );
            case 'translation-load':
                //Load all translations from bundled YML files
                $translationsLoadResult = $this->handleAjaxAction('oro:translation:load');
                //Load "remote" translations for all installed languages
                $this->handleAjaxAction('oro:language:update', ['--all' => true]);
                return $translationsLoadResult;
            case 'js-routing':
                return $this->handleAjaxAction('fos:js-routing:dump');
            case 'localization':
                return $this->handleAjaxAction('oro:localization:dump');
            case 'assets':
                return $this->handleAjaxAction(
                    'oro:assets:install',
                    ['target' => './', '--exclude' => ['OroInstallerBundle']]
                );
            case 'assetic':
                return $this->handleAjaxAction('assetic:dump');
            case 'translation':
                return $this->handleAjaxAction('oro:translation:dump');
            case 'requirejs':
                return $this->handleAjaxAction('oro:requirejs:build', ['--ignore-errors' => true]);
            case 'finish':
                $this->get('event_dispatcher')->dispatch(InstallerEvents::FINISH);
                // everything was fine - update installed flag in parameters.yml
                $dumper = $this->get('oro_installer.yaml_persister');
                $params = $dumper->parse();
                $params['system']['installed'] = date('c');
                $dumper->dump($params);
                // launch 'cache:clear' to set installed flag in DI container
                // suppress warning: ini_set(): A session is active. You cannot change the session
                // module's ini settings at this time
                error_reporting(E_ALL ^ E_WARNING);
                return $this->handleAjaxAction('cache:clear');
        }

        // check if we have package installation step
        if (strpos($action, 'installerScript-') !== false) {
            $scriptFile = $this->container->get('oro_installer.script_manager')->getScriptFileByKey(
                str_replace('installerScript-', '', $action)
            );

            $scriptExecutor = new ScriptExecutor(
                $this->getOutput(),
                $this->container,
                new CommandExecutor(
                    $this->container->getParameter('kernel.environment'),
                    $this->getOutput(),
                    $this->getApplication()
                )
            );
            $scriptExecutor->runScript($scriptFile);

            return new JsonResponse(['result' => true]);
        }

        return $this->render(
            'OroInstallerBundle:Process/Step:installation.html.twig',
            [
                'loadFixtures' => $context->getStorage()->get('loadFixtures'),
                'installerScripts' => $this
                        ->container
                        ->get('oro_installer.script_manager')
                        ->getScriptLabels(),
            ]
        );
    }
}
