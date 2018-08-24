<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Unit\ImportExport\DataConverter;

use Oro\Bundle\DotmailerBundle\ImportExport\DataConverter\ContactDataConverter;

class ContactDataConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ContactDataConverter
     */
    private $contactDataConverter;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->contactDataConverter = new ContactDataConverter();
    }

    public function testConvertToImportFormat()
    {
        $result = $this->contactDataConverter->convertToImportFormat(['email' => 'FooBar@test.com']);
        $this->assertSame(['email' => 'foobar@test.com', 'dataFields' => []], $result);
    }
}
