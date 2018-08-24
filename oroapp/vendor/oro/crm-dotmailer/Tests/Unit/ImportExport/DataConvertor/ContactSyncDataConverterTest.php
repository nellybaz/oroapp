<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Unit\ImportExport\DataConverter;

use Oro\Bundle\DotmailerBundle\ImportExport\DataConverter\ContactSyncDataConverter;
use Oro\Bundle\DotmailerBundle\Provider\CacheProvider;
use Oro\Bundle\ImportExportBundle\Context\ContextInterface;

class ContactSyncDataConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ContactSyncDataConverter
     */
    private $contactSyncDataConverter;

    /**
     * @var ContextInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $context;

    /**
     * @var CacheProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $cacheProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->context = $this->createMock(ContextInterface::class);
        $this->contactSyncDataConverter = new ContactSyncDataConverter();
        $this->cacheProvider = $this->createMock(CacheProvider::class);
        $this->contactSyncDataConverter->setCacheProvider($this->cacheProvider);
        $this->contactSyncDataConverter->setImportExportContext($this->context);
    }

    public function testConvertToImportFormatEmailTurnedToLowercase()
    {
        $this->context->expects($this->once())
            ->method('hasOption')
            ->with('channel')
            ->willReturn(true);

        $this->context->expects($this->once())
            ->method('getOption')
            ->with('channel')
            ->willReturn(1);

        $this->cacheProvider->expects($this->once())
            ->method('getCachedItem')
            ->with(ContactSyncDataConverter::CACHED_DATAFIELDS, 1)
            ->willReturn(['DATA_FIELD' => 1]);

        $result = $this->contactSyncDataConverter->convertToImportFormat(['email' => 'FooBar@gmail.com']);
        $this->assertSame(
            ['email' => 'foobar@gmail.com', 'dataFields' => []],
            $result
        );
    }
}
