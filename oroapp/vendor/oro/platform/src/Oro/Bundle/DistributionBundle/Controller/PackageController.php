<?php

namespace Oro\Bundle\DistributionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Oro\Bundle\DistributionBundle\Entity\PackageRequirement;
use Oro\Bundle\DistributionBundle\Exception\VerboseException;
use Oro\Bundle\DistributionBundle\Manager\PackageManager;
use Oro\Bundle\HelpBundle\Annotation\Help;

/**
 * @Help(link="https://www.oroinc.com/doc/orocommerce/current/install-upgrade")
 */
class PackageController extends Controller
{
    const CODE_INSTALLED = 0;
    const CODE_UPDATED = 0;
    const CODE_ERROR = 1;
    const CODE_CONFIRM = 2;

    protected function setUpEnvironment()
    {
        $kernelRootDir = $this->container->getParameter('kernel.root_dir');
        putenv(sprintf('COMPOSER_HOME=%s', $this->container->getParameter('oro_distribution.composer_cache_home')));
        chdir(realpath($kernelRootDir . '/../'));
        set_time_limit(0);
    }

    /**
     * @Route("/packages/installed")
     * @Template("OroDistributionBundle:Package:list_installed.html.twig")
     */
    public function listInstalledAction()
    {
        $this->setUpEnvironment();
        $manager = $this->getPackageManager();
        $items = [];
        $errors = [];

        foreach ($manager->getInstalled() as $package) {
            $item = [
                'package' => $package,
                'update' => null,
                'canBeDeleted' => false
            ];
            try {
                $item['update'] = $manager->getPackageUpdate($package);
                $item['canBeDeleted'] = $manager->canBeDeleted($package->getPrettyName());
            } catch (\Exception $e) {
                if (!in_array($e->getMessage(), $errors)) {
                    $errors[] = $e->getMessage();
                }
            }
            $items[] = $item;
        }

        return [
            'items' => $items,
            'notWritableSystemPaths' => $this->getNotWritablePaths(),
            'errors' => $errors
        ];
    }

    /**
     * @Route("/packages/available")
     * @Template("OroDistributionBundle:Package:list_available.html.twig")
     */
    public function listAvailableAction()
    {
        $this->setUpEnvironment();
        $packageManager = $this->getPackageManager();

        return [
            'packages' => $packageManager->getAvailable(),
            'notWritableSystemPaths' => $this->getNotWritablePaths()
        ];
    }

    /**
     * @Route("/packages/updates")
     * @Template("OroDistributionBundle:Package:list_updates.html.twig")
     */
    public function listUpdatesAction()
    {
        $this->setUpEnvironment();

        return ['updates' => $this->container->get('oro_distribution.package_manager')->getAvailableUpdates()];
    }

    /**
     * @Route("/package/install")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function installAction(Request $request)
    {
        $this->setUpEnvironment();

        $params = $request->get('params');
        $packageName = $this->getParamValue($params, 'packageName', null);
        $packageVersion = $this->getParamValue($params, 'version', null);
        $loadDemoData = $this->getParamValue($params, 'loadDemoData', null);
        $forceDependenciesInstalling = $this->getParamValue($params, 'force', false);

        $isConfirmationRequired = ($loadDemoData === null);

        /** @var PackageManager $manager */
        $manager = $this->container->get('oro_distribution.package_manager');
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');

        if ($manager->isPackageInstalled($packageName)) {
            $responseContent = [
                'code' => self::CODE_ERROR,
                'message' => $this->trans('oro.distribution.package.already_installed'),
            ];
            $response->setContent(json_encode($responseContent));

            return $response;
        }


        try {
            if ($isConfirmationRequired) {
                $params['force'] = true;
                $responseContent = [
                    'code' => self::CODE_CONFIRM,
                    'params' => $params
                ];

                if (!$forceDependenciesInstalling && $requirements = $manager->getRequirements($packageName)) {
                    $responseContent['requirements'] = array_map(
                        function (PackageRequirement $pr) {
                            return $pr->toArray();
                        },
                        $requirements
                    );
                }

                $response->setContent(json_encode($responseContent));

                return $response;
            }

            $manager->install($packageName, $packageVersion, (bool)$loadDemoData);
        } catch (\Exception $e) {
            $message = $e instanceof VerboseException ?
                $e->getMessage() . '_' . $e->getVerboseMessage() :
                $e->getMessage();
            $responseContent = [
                'code' => self::CODE_ERROR,
                'message' => $message
            ];
            $response->setContent(json_encode($responseContent));

            return $response;
        }

        $responseContent = ['code' => self::CODE_INSTALLED];
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode($responseContent));

        return $response;
    }

    /**
     * @Route("/package/update")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function updateAction(Request $request)
    {
        $this->setUpEnvironment();

        $params = $request->get('params');
        $packageName = $this->getParamValue($params, 'packageName', null);

        /** @var PackageManager $manager */
        $manager = $this->container->get('oro_distribution.package_manager');
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');

        if (!$manager->isPackageInstalled($packageName)) {
            $responseContent = [
                'code' => self::CODE_ERROR,
                'message' => $this->trans('oro.distribution.package.not_installed', ['%package%' => $packageName]),
            ];
            $response->setContent(json_encode($responseContent));

            return $response;
        }

        if (!$manager->isUpdateAvailable($packageName)) {
            $responseContent = [
                'code' => self::CODE_ERROR,
                'message' => $this->trans('oro.distribution.package.no_updates', ['%package%' => $packageName]),
            ];
            $response->setContent(json_encode($responseContent));

            return $response;
        }

        try {
            $manager->update($packageName);
        } catch (VerboseException $e) {
            $responseContent = [
                'code' => self::CODE_ERROR,
                'message' => $e->getMessage() . '_' . $e->getVerboseMessage()
            ];
            $response->setContent(json_encode($responseContent));

            return $response;
        } catch (\Exception $e) {
            $responseContent = [
                'code' => self::CODE_ERROR,
                'message' => $e->getMessage()
            ];
            $response->setContent(json_encode($responseContent));

            return $response;
        }
        $responseContent = [
            'code' => self::CODE_UPDATED,
        ];
        $response->setContent(json_encode($responseContent));

        return $response;
    }

    /**
     * @return PackageManager
     */
    protected function getPackageManager()
    {
        return $this->container->get('oro_distribution.package_manager');
    }

    /**
     * @param array $params
     * @param string $paramName
     * @param mixed $defaultValue
     *
     * @return mixed
     */
    protected function getParamValue(array $params, $paramName, $defaultValue)
    {
        return isset($params[$paramName]) ? $params[$paramName] : $defaultValue;
    }

    protected function getNotWritablePaths()
    {
        $paths = $this->container->getParameter('oro_distribution.package_manager.system_paths');
        $kernelRootDir = $this->container->getParameter('kernel.root_dir');

        $notWritablePaths = [];
        foreach ($paths as $path) {
            $realPath = realpath($kernelRootDir . '/../' . $path);
            if (!is_writable($realPath)) {
                $notWritablePaths[] = $path;
            }
        }

        return $notWritablePaths;
    }

    /**
     * @param $key
     * @param array $params
     *
     * @return string
     */
    private function trans($key, $params = [])
    {
        return $this->get('translator')->trans($key, $params);
    }
}
