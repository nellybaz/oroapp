<?php

namespace Oro\Component\Config\Tests\Unit\Loader;

use Oro\Component\Config\CumulativeResource;
use Oro\Component\Config\CumulativeResourceInfo;
use Oro\Component\Config\Loader\CumulativeFileLoader;
use Oro\Component\Config\Loader\CumulativeResourceLoaderCollection;
use Oro\Component\Config\Tests\Unit\Fixtures\Bundle\TestBundle1\TestBundle1;
use Oro\Component\Config\Tests\Unit\Fixtures\CopyFixturesToTemp;

class CumulativeFileLoaderTest extends \PHPUnit_Framework_TestCase
{
    /** @var CopyFixturesToTemp */
    private $copier;

    /** @var string */
    private $bundleDir;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $target = realpath(sys_get_temp_dir()) . DIRECTORY_SEPARATOR . 'test_data';
        $source = realpath(__DIR__ . '/../Fixtures');
        $this->copier = new CopyFixturesToTemp($target, $source);
        $this->copier->copy();
        $this->bundleDir = $target . DIRECTORY_SEPARATOR . 'Bundle' . DIRECTORY_SEPARATOR . 'TestBundle1';
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        $this->copier->delete();
    }

    public function testLoader()
    {
        $relativeFilePath = 'Resources/config/test.yml';

        $loader = $this->createLoader($relativeFilePath);

        $data             = ['test' => 123];
        $bundleDir        = $this->bundleDir;
        $expectedFilePath = $bundleDir . '/' . $relativeFilePath;
        $expectedFilePath = str_replace('/', DIRECTORY_SEPARATOR, $expectedFilePath);

        $expectedResource = new CumulativeResourceInfo(
            TestBundle1::class,
            'test',
            $expectedFilePath,
            $data
        );

        $loader->expects($this->once())
            ->method('loadFile')
            ->with($expectedFilePath)
            ->will($this->returnValue($data));

        $this->assertEquals($relativeFilePath, $loader->getResource());

        $resource = $loader->load(TestBundle1::class, $bundleDir);
        $this->assertEquals($expectedResource, $resource);
    }

    /**
     * @dataProvider filePathProvider
     */
    public function testFilePath($relativeFilePath, $expectedRelativeFilePath, $expectedResource)
    {
        $loader = $this->createLoader($relativeFilePath);

        $this->assertEquals($expectedRelativeFilePath, $loader->getRelativeFilePath());
        $this->assertEquals($expectedResource, $loader->getResource());
    }

    public function testRegisterFoundResource()
    {
        $relativeFilePath = 'Resources/config/test.yml';

        $bundleClass = TestBundle1::class;
        $bundleDir   = $this->bundleDir;

        $loader = $this->createLoader($relativeFilePath);

        $resource = new CumulativeResource('test_group', new CumulativeResourceLoaderCollection());
        $loader->registerFoundResource($bundleClass, $bundleDir, '', $resource);

        $expectedResource = new CumulativeResource('test_group', new CumulativeResourceLoaderCollection());
        $expectedResource->addFound(
            $bundleClass,
            str_replace('/', DIRECTORY_SEPARATOR, $bundleDir . '/' . $relativeFilePath)
        );
        $this->assertEquals($expectedResource, $resource);
    }

    public function testIsResourceFreshNoChanges()
    {
        $relativeFilePath = 'Resources/config/test.yml';

        $bundleClass = TestBundle1::class;
        $bundleDir   = $this->bundleDir;

        $loader = $this->createLoader($relativeFilePath);

        $loadTime = filemtime($bundleDir . '/' . $relativeFilePath) + 1;
        $resource = new CumulativeResource('test_group', new CumulativeResourceLoaderCollection());
        $loader->registerFoundResource($bundleClass, $bundleDir, '', $resource);

        $this->assertTrue($loader->isResourceFresh($bundleClass, $bundleDir, '', $resource, $loadTime));
    }

    public function testIsResourceFreshNoFile()
    {
        $relativeFilePath = 'Resources/config/none.tmp';

        $bundleClass = TestBundle1::class;
        $bundleDir   = $this->bundleDir;

        $loader = $this->createLoader($relativeFilePath);

        $loadTime = filemtime($bundleDir) + 1;
        $resource = new CumulativeResource('test_group', new CumulativeResourceLoaderCollection());
        $loader->registerFoundResource($bundleClass, $bundleDir, '', $resource);

        $this->assertTrue($loader->isResourceFresh($bundleClass, $bundleDir, '', $resource, $loadTime));
    }

    public function testIsResourceFreshExistingFileWasChanged()
    {
        $relativeFilePath = 'Resources/config/test.yml';

        $bundleClass = TestBundle1::class;
        $bundleDir   = $this->bundleDir;

        $loader = $this->createLoader($relativeFilePath);

        $loadTime = filemtime($bundleDir . '/' . $relativeFilePath) - 1;
        $resource = new CumulativeResource('test_group', new CumulativeResourceLoaderCollection());
        $loader->registerFoundResource($bundleClass, $bundleDir, '', $resource);

        $this->assertFalse($loader->isResourceFresh($bundleClass, $bundleDir, '', $resource, $loadTime));
    }

    public function testIsResourceFreshNewFileWasAdded()
    {
        $relativeFilePath = 'Resources/config/test.tmp';

        $bundleClass = TestBundle1::class;
        $bundleDir   = $this->bundleDir;

        $loader = $this->createLoader($relativeFilePath);

        $loadTime = filemtime($bundleDir) + 1;
        $resource = new CumulativeResource('test_group', new CumulativeResourceLoaderCollection());
        $loader->registerFoundResource($bundleClass, $bundleDir, '', $resource);

        $filePath = $bundleDir . '/' . $relativeFilePath;
        file_put_contents($filePath, 'test');
        $result = $loader->isResourceFresh($bundleClass, $bundleDir, '', $resource, $loadTime);
        unlink($filePath);
        $this->assertFalse($result);
    }

    public function testIsResourceFreshNewFileWasDeleted()
    {
        $relativeFilePath = 'Resources/config/test.tmp';

        $bundleClass = TestBundle1::class;
        $bundleDir   = $this->bundleDir;

        $loader = $this->createLoader($relativeFilePath);

        $filePath = $bundleDir . '/' . $relativeFilePath;
        file_put_contents($filePath, 'test');
        $loadTime = filemtime($bundleDir . '/' . $relativeFilePath) + 1;
        $resource = new CumulativeResource('test_group', new CumulativeResourceLoaderCollection());
        $loader->registerFoundResource($bundleClass, $bundleDir, '', $resource);
        unlink($filePath);

        $this->assertFalse($loader->isResourceFresh($bundleClass, $bundleDir, '', $resource, $loadTime));
    }

    public function filePathProvider()
    {
        return [
            [
                'Resources/config/test.yml',
                str_replace('/', DIRECTORY_SEPARATOR, '/Resources/config/test.yml'),
                'Resources/config/test.yml'
            ],
            [
                '/Resources/config/test.yml',
                str_replace('/', DIRECTORY_SEPARATOR, '/Resources/config/test.yml'),
                'Resources/config/test.yml'
            ],
            [
                'Resources\config\test.yml',
                str_replace('/', DIRECTORY_SEPARATOR, '/Resources/config/test.yml'),
                'Resources/config/test.yml'
            ],
            [
                '\Resources\config\test.yml',
                str_replace('/', DIRECTORY_SEPARATOR, '/Resources/config/test.yml'),
                'Resources/config/test.yml'
            ],
            [
                'test.yml',
                str_replace('/', DIRECTORY_SEPARATOR, '/test.yml'),
                'test.yml'
            ],
            [
                '/test.yml',
                str_replace('/', DIRECTORY_SEPARATOR, '/test.yml'),
                'test.yml'
            ],
            [
                '\test.yml',
                str_replace('/', DIRECTORY_SEPARATOR, '/test.yml'),
                'test.yml'
            ],
        ];
    }

    /**
     * @param string $relativeFilePath
     * @return CumulativeFileLoader|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function createLoader($relativeFilePath)
    {
        return $this->getMockForAbstractClass(
            'Oro\Component\Config\Loader\CumulativeFileLoader',
            [$relativeFilePath]
        );
    }
}
