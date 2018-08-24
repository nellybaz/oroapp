<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Configuration\Import;

use Oro\Bundle\WorkflowBundle\Configuration\Import\ResourceFileImportProcessorFactory;
use Oro\Bundle\WorkflowBundle\Configuration\Reader\ConfigFileReaderInterface;

class ResourceFileImportProcessorFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var ConfigFileReaderInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $reader;

    /** @var ResourceFileImportProcessorFactory */
    private $factory;

    protected function setUp()
    {
        $this->reader = $this->createMock(ConfigFileReaderInterface::class);
        $this->factory = new ResourceFileImportProcessorFactory($this->reader);
    }

    /**
     * @dataProvider isApplicableTest
     *
     * @param array|string $import
     * @param bool $expected
     */
    public function testIsApplicable($import, bool $expected)
    {
        $this->assertEquals($expected, $this->factory->isApplicable($import));
    }

    /**
     * @return \Generator
     */
    public function isApplicableTest()
    {
        /**
         * ```
         * imports:
         *     - './stringFileName'
         * ```
         */
        yield 'simple inline' => [
            'import' => './stringFileName',
            true
        ];

        /**
         * ```
         * imports:
         *     - ['./stringFileName']
         * ```
         */
        yield 'simple array' => [
            'import' => ['./stringFileName'],
            true
        ];

        /**
         * ```
         * imports:
         *     - { resource: './stringFileName' }
         * ```
         */
        yield 'usual object' => [
            'import' => ['resource' => './stringFileName'],
            true
        ];

        yield 'too big - not applicable' => [
            'import' => ['a', 'b'],
            false
        ];

        yield 'unknown option - not applicable' => [
            'import' => ['everything' => 42],
            false
        ];
    }

    /**
     * @dataProvider createTestProvider
     *
     * @param array|string $import
     * @param string $expectedPath
     */
    public function testCreate($import, string $expectedPath)
    {
        $processor = $this->factory->create($import);

        $this->assertEquals($expectedPath, $this->getPrivateProperty($processor, 'importResource'));

        $this->assertSame($this->reader, $this->getPrivateProperty($processor, 'reader'));
    }

    /**
     * @param object $object
     * @param string $property
     * @return mixed
     */
    protected function getPrivateProperty($object, string $property)
    {
        $get = \Closure::bind(
            function ($property) {
                return $this->{$property};
            },
            $object,
            $object
        );

        return $get($property);
    }

    /**
     * @return \Generator
     */
    public function createTestProvider()
    {
        yield 'string' => [
            'import' => './stringFileName',
            'expected' => './stringFileName'
        ];

        yield 'array' => [
            'import' => ['./stringFileName'],
            'expected' => './stringFileName'
        ];

        yield 'hash' => [
            'import' => ['resource' => './stringFileName'],
            'expected' => './stringFileName'
        ];
    }

    public function testCreateException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Import options is not applicable for factory.');
        $this->factory->create(['*' => 42]);
    }
}
