<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Unit\Validator;

use Doctrine\DBAL\Types\Type;

use Oro\Bundle\DotmailerBundle\Entity\DataField;
use Oro\Bundle\DotmailerBundle\Entity\DataFieldMapping;
use Oro\Bundle\DotmailerBundle\Entity\DataFieldMappingConfig;
use Oro\Bundle\DotmailerBundle\Tests\Unit\Stub\DataFieldStub;
use Oro\Bundle\DotmailerBundle\Tests\Unit\Stub\EnumValueStub;
use Oro\Bundle\DotmailerBundle\Validator\DataFieldMappingConfigValidator;
use Oro\Bundle\DotmailerBundle\Validator\Constraints\DataFieldMappingConfigConstraint;
use Oro\Bundle\EntityBundle\DoctrineExtensions\DBAL\Types\DurationType;
use Oro\DBAL\Types\MoneyType;
use Oro\DBAL\Types\PercentType;

class DataFieldMappingConfigValidatorTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $entityFieldProvider;

     /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $translator;

    /** @var DataFieldMappingConfigValidator */
    protected $validator;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $context;

    protected function setUp()
    {
        $this->entityFieldProvider = $this->getMockBuilder('Oro\Bundle\EntityBundle\Provider\EntityFieldProvider')
            ->disableOriginalConstructor()->getMock();
        $this->translator = $this->getMockBuilder('Symfony\Component\Translation\TranslatorInterface')
            ->disableOriginalConstructor()->getMock();
        $this->validator = new DataFieldMappingConfigValidator($this->entityFieldProvider, $this->translator);
        $this->context = $this->getMockBuilder('Symfony\Component\Validator\Context\ExecutionContextInterface')
            ->getMock();
        $this->validator->initialize($this->context);
    }

    public function testValidateNumericFailed()
    {
        $mappingConfig = new DataFieldMappingConfig();
        $dataField = new DataFieldStub();
        $dataField->setType(new EnumValueStub(DataField::FIELD_TYPE_NUMERIC));
        $dataField->setName('dataFieldName');
        $mappingConfig->setDataField($dataField);
        $mappingConfig->setEntityFields('entityFieldName');
        $mapping = new DataFieldMapping();
        $mapping->setEntity('entityClass');
        $mappingConfig->setMapping($mapping);
        $this->entityFieldProvider->expects($this->once())->method('getFields')
            ->with('entityClass', false, true, false, false, false, false)
            ->will($this->returnValue([
                [
                    'name' => 'entityFieldName',
                    'type' => Type::STRING
                ]
            ]));

        $this->translator->expects($this->once())->method('trans')
            ->with(
                'oro.dotmailer.datafieldmappingconfig.validation.incompatible_types_numeric',
                ['%datafield%' => 'dataFieldName']
            )
            ->will($this->returnValue('translated error message'));
        $violation = $this->createMock('Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface');
        $this->context->expects($this->once())->method('buildViolation')->with('translated error message', [])
            ->will($this->returnValue($violation));

        $constraint = new DataFieldMappingConfigConstraint();
        $this->validator->validate($mappingConfig, $constraint);
    }

    public function testValidateBooleanFailed()
    {
        $mappingConfig = new DataFieldMappingConfig();
        $dataField = new DataFieldStub();
        $dataField->setType(new EnumValueStub(DataField::FIELD_TYPE_BOOLEAN));
        $dataField->setName('dataFieldName');
        $mappingConfig->setDataField($dataField);
        $mappingConfig->setEntityFields('entityFieldName');
        $mapping = new DataFieldMapping();
        $mapping->setEntity('entityClass');
        $mappingConfig->setMapping($mapping);
        $this->entityFieldProvider->expects($this->once())->method('getFields')
            ->with('entityClass', false, true, false, false, false, false)
            ->will($this->returnValue([
                [
                    'name' => 'entityFieldName',
                    'type' => Type::STRING
                ]
            ]));

        $this->translator->expects($this->once())->method('trans')
            ->with(
                'oro.dotmailer.datafieldmappingconfig.validation.incompatible_types_boolean',
                ['%datafield%' => 'dataFieldName']
            )
            ->will($this->returnValue('translated error message'));
        $violation = $this->createMock('Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface');
        $this->context->expects($this->once())->method('buildViolation')->with('translated error message', [])
            ->will($this->returnValue($violation));

        $constraint = new DataFieldMappingConfigConstraint();
        $this->validator->validate($mappingConfig, $constraint);
    }

    public function testValidateDateFailed()
    {
        $mappingConfig = new DataFieldMappingConfig();
        $dataField = new DataFieldStub();
        $dataField->setType(new EnumValueStub(DataField::FIELD_TYPE_DATE));
        $dataField->setName('dataFieldName');
        $mappingConfig->setDataField($dataField);
        $mappingConfig->setEntityFields('entityFieldName');
        $mapping = new DataFieldMapping();
        $mapping->setEntity('entityClass');
        $mappingConfig->setMapping($mapping);
        $this->entityFieldProvider->expects($this->once())->method('getFields')
            ->with('entityClass', false, true, false, false, false, false)
            ->will($this->returnValue([
                [
                    'name' => 'entityFieldName',
                    'type' => Type::STRING
                ]
            ]));

        $this->translator->expects($this->once())->method('trans')
            ->with(
                'oro.dotmailer.datafieldmappingconfig.validation.incompatible_types_date',
                ['%datafield%' => 'dataFieldName']
            )
            ->will($this->returnValue('translated error message'));
        $violation = $this->createMock('Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface');
        $this->context->expects($this->once())->method('buildViolation')->with('translated error message', [])
            ->will($this->returnValue($violation));

        $constraint = new DataFieldMappingConfigConstraint();
        $this->validator->validate($mappingConfig, $constraint);
    }

    public function testValidateMutlipleFieldsFailed()
    {
        $mappingConfig = new DataFieldMappingConfig();
        $dataField = new DataFieldStub();
        $dataField->setType(new EnumValueStub(DataField::FIELD_TYPE_BOOLEAN));
        $dataField->setName('dataFieldName');
        $mappingConfig->setDataField($dataField);
        $mappingConfig->setEntityFields('entityFieldName,anotherEntityFieldName');

        $this->translator->expects($this->once())->method('trans')
            ->with('oro.dotmailer.datafieldmappingconfig.validation.multiple')
            ->will($this->returnValue('translated error message'));
        $violation = $this->createMock('Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface');
        $this->context->expects($this->once())->method('buildViolation')->with('translated error message', [])
            ->will($this->returnValue($violation));

        $constraint = new DataFieldMappingConfigConstraint();
        $this->validator->validate($mappingConfig, $constraint);
    }

    /**
     * @param $dataFieldType
     * @param $type
     *
     * @dataProvider dataFieldDataProvider
     */
    public function testValidatePassed($dataFieldType, $type)
    {
        $mappingConfig = new DataFieldMappingConfig();
        $dataField = new DataFieldStub();
        $dataField->setType(new EnumValueStub($dataFieldType));
        $dataField->setName('dataFieldName');
        $mappingConfig->setDataField($dataField);
        $mappingConfig->setEntityFields('entityFieldName');
        $mapping = new DataFieldMapping();
        $mapping->setEntity('entityClass');
        $mappingConfig->setMapping($mapping);
        $this->entityFieldProvider->expects($this->once())->method('getFields')
            ->with('entityClass', false, true, false, false, false, false)
            ->will($this->returnValue([
                [
                    'name' => 'entityFieldName',
                    'type' => $type
                ]
            ]));

        $this->translator->expects($this->never())->method('trans');
        $this->context->expects($this->never())->method('buildViolation');

        $constraint = new DataFieldMappingConfigConstraint();
        $this->validator->validate($mappingConfig, $constraint);
    }

    /**
     * @return array
     */
    public function dataFieldDataProvider()
    {
        return [
            'string'    => [DataField::FIELD_TYPE_STRING, Type::STRING],
            'integer'   => [DataField::FIELD_TYPE_NUMERIC, Type::INTEGER],
            'binint'    => [DataField::FIELD_TYPE_NUMERIC, Type::BIGINT],
            'smallint'  => [DataField::FIELD_TYPE_NUMERIC, Type::SMALLINT],
            'decimal'   => [DataField::FIELD_TYPE_NUMERIC, Type::DECIMAL],
            'float'     => [DataField::FIELD_TYPE_NUMERIC, Type::FLOAT],
            'money'     => [DataField::FIELD_TYPE_NUMERIC, MoneyType::TYPE],
            'percent'   => [DataField::FIELD_TYPE_NUMERIC, PercentType::TYPE],
            'duration'  => [DataField::FIELD_TYPE_NUMERIC, DurationType::TYPE],
            'datetime'  => [DataField::FIELD_TYPE_DATE, Type::DATETIME],
            'datetimez' => [DataField::FIELD_TYPE_DATE, Type::DATETIMETZ],
            'date'      => [DataField::FIELD_TYPE_DATE, Type::DATE],
            'boolean'   => [DataField::FIELD_TYPE_BOOLEAN, Type::BOOLEAN],
        ];
    }
}
