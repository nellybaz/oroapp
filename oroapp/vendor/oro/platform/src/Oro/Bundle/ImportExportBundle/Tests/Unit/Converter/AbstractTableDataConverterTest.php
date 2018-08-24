<?php

namespace Oro\Bundle\ImportExportBundle\Tests\Unit\Converter;

use Oro\Bundle\ImportExportBundle\Converter\AbstractTableDataConverter;

/**
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
class AbstractTableDataConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected $headerConversionRules = array(
        'First Name' => 'firstName',
        'Last Name'  => 'lastName',
        'Job Title'  => 'jobTitle',
        'Email'      => 'emails:0',
        'Numeric Email' => array(
            AbstractTableDataConverter::FRONTEND_TO_BACKEND => array('Email (\d+)', 'emails:$1'),
            AbstractTableDataConverter::BACKEND_TO_FRONTEND => array('emails:(\d+)', 'Email $1'),
        ),
        'Empty Regexp'   => array(), // invalid format, used to test all cases
        'Ignored Regexp' => array(   // invalid format, used to test all cases
            AbstractTableDataConverter::FRONTEND_TO_BACKEND => array('key' => 'value'),
            AbstractTableDataConverter::BACKEND_TO_FRONTEND => array('key' => 'value'),
        ),
    );

    /**
     * @var array
     */
    protected $backendHeader = array(
        'firstName',
        'lastName',
        'jobTitle',
        'emails:0',
        'emails:1',
        'emails:2',
    );

    /**
     * @var AbstractTableDataConverter
     */
    protected $dataConverter;

    protected function setUp()
    {
        $dataConverter = $this->getMockBuilder('Oro\Bundle\ImportExportBundle\Converter\AbstractTableDataConverter')
            ->getMockForAbstractClass();
        $dataConverter->expects($this->any())
            ->method('getHeaderConversionRules')
            ->will($this->returnValue($this->headerConversionRules));
        $dataConverter->expects($this->any())
            ->method('getBackendHeader')
            ->will($this->returnValue($this->backendHeader));

        $this->dataConverter = $dataConverter;
    }

    protected function tearDown()
    {
        unset($this->dataConverter);
    }

    /**
     * @param array $importedRecord
     * @param array $result
     * @dataProvider convertToExportDataProvider
     */
    public function testConvertToExportFormat(array $importedRecord, array $result)
    {
        $this->assertEquals($result, $this->dataConverter->convertToExportFormat($importedRecord));
    }

    /**
     * @return array
     */
    public function convertToExportDataProvider()
    {
        return array(
            'no data' => array(
                'importedRecord' => array(),
                'result' => array(
                    'First Name' => '',
                    'Last Name'  => '',
                    'Job Title'  => '',
                    'Email'      => '',
                    'Email 1'    => '',
                    'Email 2'    => '',
                )
            ),
            'plain data' => array(
                'importedRecord' => array(
                    'firstName' => 'John',
                    'lastName'  => 'Doe'
                ),
                'result' => array(
                    'First Name' => 'John',
                    'Last Name'  => 'Doe',
                    'Job Title'  => '',
                    'Email'      => '',
                    'Email 1'    => '',
                    'Email 2'    => '',
                )
            ),
            'complex data' => array(
                array(
                    'firstName' => 'John',
                    'lastName'  => 'Doe',
                    'jobTitle'  => 'Engineer',
                    'emails' => array(
                        'john@qwerty.com',
                        'doe@qwerty.com',
                        'john.doe@qwerty.com',
                    ),
                ),
                'result' => array(
                    'First Name' => 'John',
                    'Last Name'  => 'Doe',
                    'Job Title'  => 'Engineer',
                    'Email'      => 'john@qwerty.com',
                    'Email 1'    => 'doe@qwerty.com',
                    'Email 2'    => 'john.doe@qwerty.com',
                )
            )
        );
    }

    /**
     * @param array $exportedRecord
     * @param array $result
     * @param bool  $skipNull
     * @dataProvider convertToImportDataProvider
     */
    public function testConvertToImportFormat(array $exportedRecord, array $result, $skipNull = true)
    {
        $this->assertEquals($result, $this->dataConverter->convertToImportFormat($exportedRecord, $skipNull));
    }

    /**
     * @return array
     */
    public function convertToImportDataProvider()
    {
        return array(
            'no data' => array(
                'exportedRecord' => array(),
                'result'         => array(),
            ),
            'plain data skip null values' => array(
                'exportedRecord' => array(
                    'First Name' => 'John',
                    'Last Name'  => 'Doe',
                    'Job Title'  => '',
                    'Email'      => '',
                ),
                'result' => array(
                    'firstName' => 'John',
                    'lastName'  => 'Doe',
                )
            ),
            'plain data' => array(
                'exportedRecord' => array(
                    'First Name' => 'John',
                    'Last Name'  => 'Doe',
                    'Job Title'  => '',
                    'Email'      => '',
                ),
                'result' => [
                    'firstName' => 'John',
                    'lastName'  => 'Doe',
                    'jobTitle'  => null,
                    'emails'    => [],
                ],
                'skipNull' => false
            ),
            'complex data' => array(
                'exportedRecord' => array(
                    'First Name' => 'John',
                    'Last Name'  => 'Doe',
                    'Job Title'  => 'Engineer',
                    'Email'      => 'john@qwerty.com',
                    'Email 1'    => 'doe@qwerty.com',
                    'Email 2'    => 'john.doe@qwerty.com',
                ),
                'result' => array(
                    'firstName' => 'John',
                    'lastName'  => 'Doe',
                    'jobTitle'  => 'Engineer',
                    'emails' => array(
                        'john@qwerty.com',
                        'doe@qwerty.com',
                        'john.doe@qwerty.com',
                    ),
                )
            ),
            'multi-level array data'           => [
                'exportedRecord' => [
                    'First Name'                    => 'John',
                    'Last Name'                     => 'Doe',
                    'Job Title'                     => 'Engineer',
                    'address:0:name'                => 'John',
                    'address:0:last'                => 'Doe',
                    'address:0:city'                => 'City',
                    'address:0:organization:0:name' => 'Main',
                    'address:0:organization:1:name' => 'Default',
                    'address:0:organization:2:name' => '',
                    'address:1'                     => '',
                ],
                'result'         => [
                    'firstName' => 'John',
                    'lastName'  => 'Doe',
                    'jobTitle'  => 'Engineer',
                    'address'   => [
                        [
                            'name'         => 'John',
                            'last'         => 'Doe',
                            'city'         => 'City',
                            'organization' => [
                                ['name' => 'Main'],
                                ['name' => 'Default'],
                            ],
                        ],
                    ],
                ],
            ],
            'multi-level data with empty data' => [
                'exportedRecord' => [
                    'First Name' => 'John',
                    'Last Name'  => 'Doe',
                    'Job Title'  => 'Engineer',
                    'address:0'  => [],
                    'address:1'  => [],
                ],
                'result'         => [
                    'firstName' => 'John',
                    'lastName'  => 'Doe',
                    'jobTitle'  => 'Engineer',
                    'address'   => [],
                ],
            ],
            'no conversion rules' => array(
                'exportedRecord' => array(
                    'First Name' => 'John',
                    'Last Name'  => 'Doe',
                    'phones:0'   => '12345',
                    'phones:1'   => '98765',
                ),
                'result' => array(
                    'firstName' => 'John',
                    'lastName'  => 'Doe',
                    'phones' => array(
                        '12345',
                        '98765'
                    )
                )
            ),
        );
    }

    /**
     * @expectedException \Oro\Bundle\ImportExportBundle\Exception\LogicException
     * @expectedExceptionMessage Backend header doesn't contain fields: fax
     */
    public function testConvertToExportFormatExtraFields()
    {
        $importedRecordWithExtraData = array(
            'firstName' => 'John',
            'lastName'  => 'Doe',
            'fax'       => '5555', // this field is not defined in backend header
        );

        $this->dataConverter->convertToExportFormat($importedRecordWithExtraData);
    }
}
