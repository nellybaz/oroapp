<?php

namespace Oro\Bundle\TestGeneratorBundle\Generator;

use Symfony\Component\HttpKernel\KernelInterface;

abstract class AbstractTestGenerator
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * @var  KernelInterface
     */
    protected $kernel;

    /**
     * @var array
     */
    protected $usedClasses;

    /**
     * @var float
     */
    protected $phpVersion;

    /**
     * @var array
     */
    protected $rootPathData;

    /**
     * @var null|array
     */
    protected static $availableApplications;

    const PACKAGE_FOLDER_NAME = 'package';
    
    /**
     * @param \Twig_Environment $twig
     * @param KernelInterface $kernelInterface
     */
    public function __construct(
        \Twig_Environment $twig,
        KernelInterface $kernelInterface
    ) {
        $this->twig = $twig;
        $this->kernel = $kernelInterface;
        $this->usedClasses = [];
        $this->rootPathData =  explode(DIRECTORY_SEPARATOR, $this->kernel->getRootDir());
    }

    /**
     * @return float
     */
    public function getPhpVersion()
    {
        return $this->phpVersion;
    }

    /**
     * @param $phpVersion
     * @return $this
     */
    public function setPhpVersion($phpVersion)
    {
        $this->phpVersion = $phpVersion;

        return $this;
    }

    /**
     * @param string $className
     */
    abstract public function generate($className);

    /**
     * @param \ReflectionClass $class
     * @return array
     */
    protected function getMethodsData(\ReflectionClass $class)
    {
        $data = [];
        $methods = $this->getPublicMethods($class);
        foreach ($methods as $method) {
            $methodName = $method->getName();
            if ($methodName !== '__construct') {
                $params = $method->getParameters();
                $arguments = [];
                foreach ($params as $param) {
                    $arguments = $this->fillArguments($param, $arguments);
                }
                $data[] = [
                    'name' => $methodName,
                    'arguments' => $arguments,
                    'testName' => 'test' . ucfirst($methodName)
                ];
            }
        }

        return $data;
    }

    /**
     * @param \ReflectionClass $class
     * @return \ReflectionMethod[]
     */
    protected function getPublicMethods(\ReflectionClass $class)
    {
        $methods = [];
        foreach ($class->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
            if ($method->getDeclaringClass()->getName() === $class->getName()) {
                $methods[] = $method;
            }
        }

        return $methods;
    }

    /**
     * @param array $dependencies
     * @return array
     */
    protected function getDependenciesData($dependencies)
    {
        $data = [];
        foreach ($dependencies as $dependency) {
            $temp = [];
            if ($dependency['class'] !== 'non_object') {
                if (strpos($dependency['class'], '\\')) {
                    $parts = explode('\\', $dependency['class']);
                    $temp['class'] = end($parts);
                    $temp['fullClassName'] = $dependency['class'];
                } else {
                    $temp['class'] = '\\' . $dependency['class'];
                    $temp['fullClassName'] = '\\' . $dependency['class'];
                }
                $class = new \ReflectionClass($dependency['class']);
                $temp['has_constructor'] = $this->classConstructorCheck($class->getConstructor());
            } else {
                $temp['class'] = '';
            }
            $temp['variable'] = $dependency['name'];
            $data[] = $temp;
        }

        return $data;
    }

    /**
     * @param string[] $classes
     * @return array
     */
    protected function getOrderedUses(array  $classes)
    {
        $result = [];
        foreach ($classes as $class) {
            $slashPos = strpos($class, '\\');
            if ($slashPos) {
                $vendor = substr($class, 0, $slashPos);
                $result[$vendor][] = $class;
            }
        }

        return $result;
    }

    /**
     * @param string $className
     * @param string $testType
     * @return string
     */
    protected function getNamespaceForTest($className, $testType)
    {
        $parts = explode('\\', $className);
        $i = count($parts);
        while ($i > 0) {
            $i--;
            if (strpos($parts[$i], 'Bundle')) {
                break;
            }
        }
        $result = [];
        foreach ($parts as $key => $part) {
            $result[] = $part;
            if ($key === $i) {
                $result[] = 'Tests';
                $result[] = ucfirst($testType);
            }
        }

        return implode('\\', $result) . 'Test';
    }

    /**
     * @param string $namespace
     * @return string
     */
    protected function getTestPath($namespace, $classFileName)
    {
        $application = $this->getApplicationName($classFileName);

        $parts = [
            $this->getRootPath(3),
            self::PACKAGE_FOLDER_NAME,
            $application,
            'src',
            str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . '.php'
        ];

        return implode(DIRECTORY_SEPARATOR, $parts);
    }

    /**
     * @param $classFileName
     * @return mixed
     * @throws \Exception
     */
    protected function getApplicationName($classFileName)
    {
        $classFilePathData = explode(self::PACKAGE_FOLDER_NAME, $classFileName);
        $classFilePathData = (explode(DIRECTORY_SEPARATOR, $classFilePathData[1]));
        $actualApplicationName = $classFilePathData[1];
        if (!$this->isInAvailableApplications($actualApplicationName)) {
            throw new \Exception('Application '. $actualApplicationName. ' does not exist');
        }

        return $actualApplicationName;
    }

    /**
     * @param string $applicationName
     * @return bool
     */
    protected function isInAvailableApplications($applicationName)
    {
        if (self::$availableApplications === null) {
            $applicationsFolders = $this->getRootPath(3). DIRECTORY_SEPARATOR .
            self::PACKAGE_FOLDER_NAME. DIRECTORY_SEPARATOR . '*';
            self::$availableApplications = array_map('basename', glob($applicationsFolders, GLOB_ONLYDIR));
        }
        return in_array($applicationName, self::$availableApplications);
    }

    /**
     * @param int $removedFolderLevels
     * @return string
     */
    protected function getRootPath($removedFolderLevels = 0)
    {
        return implode(
            DIRECTORY_SEPARATOR,
            array_slice($this->rootPathData, 0, count($this->rootPathData) - $removedFolderLevels)
        );
    }

    /**
     * @param string $path
     * @param string $content
     */
    protected function createFile($path, $content)
    {
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0777, true);
        }
        $fp = fopen($path, 'w');
        fwrite($fp, $content);
        fclose($fp);
    }

    /**
     * @param \ReflectionMethod $constructor
     * @return array
     */
    protected function getDependencies(\ReflectionMethod $constructor)
    {
        $dependencies = [];
        if ($constructor) {
            $params = $constructor->getParameters();
            foreach ($params as $param) {
                $class = $param->getClass();
                $this->addClassToUses($class);
                $dependencies[] = ['class' => $class ? $class->getName() : 'non_object', 'name' => $param->getName()];
            }

            return $dependencies;
        }

        return $dependencies;
    }

    /**
     * @param \ReflectionParameter $param
     * @param array $arguments
     * @return array
     */
    protected function fillArguments(\ReflectionParameter $param, $arguments)
    {
        $temp = [];
        $class = $param->getClass();
        if ($class) {
            $this->addClassToUses($class);
            $temp['has_constructor'] = $this->classConstructorCheck($class->getConstructor());
        }
        $fullClassName = $class ? $class->getName() : 'non_object';
        if (strpos($fullClassName, '\\')) {
            $parts = explode('\\', $fullClassName);
            $temp['class'] = end($parts);
            $temp['fullClass'] = $fullClassName;
        } elseif ($fullClassName !== 'non_object') {
            $temp['class'] = '\\' . $fullClassName;
            $temp['fullClass'] = $temp['class'];
        } else {
            $temp['class'] = '';
        }

        $temp['name'] = $param->getName();
        $arguments[] = $temp;

        return $arguments;
    }

    /**
     * @param \ReflectionClass|string $class
     */
    protected function addClassToUses($class)
    {
        if ($class instanceof \ReflectionClass && !in_array($class->getName(), $this->usedClasses, true)) {
            $this->usedClasses[] = $class->getName();
        } elseif ($class && !in_array($class, $this->usedClasses, true) && strpos($class, '\\') !== 0) {
            $this->usedClasses[] = $class;
        }
    }

    /**
     * @param \ReflectionMethod|null $constructor
     * @return bool
     */
    protected function classConstructorCheck(\ReflectionMethod $constructor = null)
    {
        return $constructor && $constructor->getParameters() ? true : false;
    }
}
