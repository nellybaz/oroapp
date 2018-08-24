<?php

namespace Oro\Bundle\SecurityBundle\Annotation\Loader;

use Doctrine\Common\Annotations\Reader as AnnotationReader;

use Oro\Component\Config\Loader\CumulativeConfigLoader;
use Oro\Bundle\SecurityBundle\Metadata\AclAnnotationStorage;

class AclAnnotationLoader implements AclAnnotationLoaderInterface
{
    const ANNOTATION_CLASS = 'Oro\Bundle\SecurityBundle\Annotation\Acl';
    const ANCESTOR_CLASS   = 'Oro\Bundle\SecurityBundle\Annotation\AclAncestor';

    /**
     * @var AnnotationReader
     */
    private $reader;

    /**
     * Constructor
     *
     * @param AnnotationReader $reader
     */
    public function __construct(AnnotationReader $reader)
    {
        $this->reader = $reader;
    }

    /**
     * Loads ACL annotations from PHP files
     *
     * @param AclAnnotationStorage $storage
     */
    public function load(AclAnnotationStorage $storage)
    {
        $configLoader = self::getAclAnnotationResourceLoader();
        $resources    = $configLoader->load();
        foreach ($resources as $resource) {
            foreach ($resource->data as $file) {
                $className = $this->getClassName($file);
                if ($className !== null) {
                    $reflection = $this->getReflectionClass($className);
                    // read annotations from class
                    $annotation = $this->reader->getClassAnnotation($reflection, self::ANNOTATION_CLASS);
                    if ($annotation) {
                        $storage->add($annotation, $reflection->getName());
                    } else {
                        $ancestor = $this->reader->getClassAnnotation($reflection, self::ANCESTOR_CLASS);
                        if ($ancestor) {
                            $storage->addAncestor($ancestor, $reflection->getName());
                        }
                    }
                    // read annotations from methods
                    foreach ($reflection->getMethods() as $reflectionMethod) {
                        $annotation = $this->reader->getMethodAnnotation($reflectionMethod, self::ANNOTATION_CLASS);
                        if ($annotation) {
                            $storage->add($annotation, $reflection->getName(), $reflectionMethod->getName());
                        } else {
                            $ancestor = $this->reader->getMethodAnnotation($reflectionMethod, self::ANCESTOR_CLASS);
                            if ($ancestor) {
                                $storage->addAncestor($ancestor, $reflection->getName(), $reflectionMethod->getName());
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * Gets a class name from the given file.
     *
     * Restrictions:
     *      - only one class must be declared in a file
     *      - a namespace must be declared in a file
     *
     * @param  string $fileName
     * @return null|string the fully qualified class name or null if the class name cannot be extracted
     */
    protected function getClassName($fileName)
    {
        $src = $this->getFileContent($fileName);
        if (!preg_match('#' . str_replace("\\", "\\\\", self::ANNOTATION_CLASS) . '#', $src)) {
            return null;
        }

        if (!preg_match('/\bnamespace\s+([^;]+);/s', $src, $match)) {
            return null;
        }
        $namespace = $match[1];

        if (!preg_match('/\bclass\s+([^\s]+)\s+(?:extends|implements|{)/s', $src, $match)) {
            return null;
        }

        return $namespace . '\\' . $match[1];
    }

    /**
     * Creates ReflectionClass object
     *
     * @param  string $className
     * @return \ReflectionClass
     */
    protected function getReflectionClass($className)
    {
        return new \ReflectionClass($className);
    }

    /**
     * Reads the given file into a string
     *
     * @param  string $fileName
     * @return string
     */
    protected function getFileContent($fileName)
    {
        return file_get_contents($fileName);
    }

    /**
     * @return CumulativeConfigLoader
     */
    public static function getAclAnnotationResourceLoader()
    {
        return new CumulativeConfigLoader(
            'oro_acl_annotation',
            new AclAnnotationCumulativeResourceLoader(['Controller'])
        );
    }
}
