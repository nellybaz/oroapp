<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\ImportExport\Converter;

use Oro\Bundle\MagentoBundle\ImportExport\Converter\OrderNotesDataConverter;

class OrderNotesDataConverterTest extends \PHPUnit_Framework_TestCase
{
    const PHP_DATETIME_FORMAT = 'Y-m-d H:i:s';

    /**
     * @var OrderNotesDataConverter
     */
    protected $dataConverter;

    /** {@inheritdoc} */
    protected function setUp()
    {
        $this->dataConverter = new OrderNotesDataConverter();
    }

    /** {@inheritdoc} */
    public function tearDown()
    {
        $this->dataConverter = null;
    }

    public function testConvertToImportFormat()
    {
        $today = new \DateTime('now', new \DateTimeZone('UTC'));

        $expected = [
            'originId'    => 1,
            'createdAt'   => $today->format(self::PHP_DATETIME_FORMAT),
            'updatedAt'   => $today->format(self::PHP_DATETIME_FORMAT),
            'message'     => 'Test comment'
        ];

        $result = $this->dataConverter->convertToImportFormat([
            'increment_id' => 1,
            'created_at'   => $today->format(self::PHP_DATETIME_FORMAT),
            'updated_at'   => $today->format(self::PHP_DATETIME_FORMAT),
            'comment'      => 'Test comment'
        ]);

        $this->assertEquals($expected, $result);
    }
}
