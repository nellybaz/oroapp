<?php

namespace Oro\Bundle\FilterBundle\Tests\Unit\Form\Type\Filter;

use Oro\Bundle\FilterBundle\Filter\FilterUtility;
use Oro\Bundle\FilterBundle\Tests\Unit\Fixtures\CustomFormExtension;
use Oro\Bundle\FilterBundle\Tests\Unit\Form\Type\AbstractTypeTestCase;
use Oro\Bundle\FilterBundle\Form\Type\Filter\NumberFilterType;
use Oro\Bundle\FilterBundle\Form\Type\Filter\FilterType;

class NumberFilterTypeTest extends AbstractTypeTestCase
{
    /**
     * @var NumberFilterType
     */
    protected $type;

    /**
     * @var string
     */
    protected $defaultLocale = 'en';

    protected function setUp()
    {
        $translator             = $this->createMockTranslator();
        $this->formExtensions[] = new CustomFormExtension(array(new FilterType($translator)));

        parent::setUp();
        $this->type = new NumberFilterType($translator);
    }

    /**
     * {@inheritDoc}
     */
    protected function getTestFormType()
    {
        return $this->type;
    }

    public function testGetName()
    {
        $this->assertEquals(NumberFilterType::NAME, $this->type->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultOptionsDataProvider()
    {
        return array(
            array(
                'defaultOptions' => array(
                    'field_type'        => 'number',
                    'operator_choices'  => array(
                        NumberFilterType::TYPE_EQUAL         => 'oro.filter.form.label_type_equal',
                        NumberFilterType::TYPE_NOT_EQUAL     => 'oro.filter.form.label_type_not_equal',
                        NumberFilterType::TYPE_GREATER_EQUAL => 'oro.filter.form.label_type_greater_equal',
                        NumberFilterType::TYPE_GREATER_THAN  => 'oro.filter.form.label_type_greater_than',
                        NumberFilterType::TYPE_LESS_EQUAL    => 'oro.filter.form.label_type_less_equal',
                        NumberFilterType::TYPE_LESS_THAN     => 'oro.filter.form.label_type_less_than',
                        NumberFilterType::TYPE_IN            => 'oro.filter.form.label_type_in',
                        NumberFilterType::TYPE_NOT_IN        => 'oro.filter.form.label_type_not_in',
                        FilterUtility::TYPE_EMPTY            => 'oro.filter.form.label_type_empty',
                        FilterUtility::TYPE_NOT_EMPTY        => 'oro.filter.form.label_type_not_empty',
                    ),
                    'data_type'         => NumberFilterType::DATA_INTEGER,
                    'formatter_options' => array()
                )
            )
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * {@inheritDoc}
     */
    public function bindDataProvider()
    {
        return array(
            'not formatted number' => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12345.67890'),
                'formData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => 12345.68),
                'viewData'      => array(
                    'value' => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12,345.68'),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::DATA_INTEGER
                ),
                'customOptions' => array(
                    'field_options' => array('grouping' => true, 'precision' => 2)
                ),
            ),
            'formatted number'     => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12,345.68'),
                'formData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => 12345.68),
                'viewData'      => array(
                    'value' => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12,345.68'),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::DATA_INTEGER
                ),
                'customOptions' => array(
                    'field_options' => array('grouping' => true, 'precision' => 2)
                ),
            ),
            'integer'              => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12345.67890'),
                'formData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => 12345),
                'viewData'      => array(
                    'value'             => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12345'),
                    'formatter_options' => array(
                        'decimals'         => 0,
                        'grouping'         => false,
                        'orderSeparator'   => '',
                        'decimalSeparator' => '.',
                    ),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::DATA_INTEGER
                ),
                'customOptions' => array(
                    'field_type' => 'integer',
                    'data_type'  => NumberFilterType::DATA_INTEGER
                ),
            ),
            'integer IN'              => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_IN, 'value' => '1,2,5'),
                'formData'      => array('type' => NumberFilterType::TYPE_IN, 'value' => '1,2,5'),
                'viewData'      => array(
                    'value'             => array('type' => NumberFilterType::TYPE_IN, 'value' => '1,2,5'),
                    'formatter_options' => array(
                        'decimals'         => 0,
                        'grouping'         => false,
                        'orderSeparator'   => '',
                        'decimalSeparator' => '.',
                    ),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::DATA_INTEGER
                ),
                'customOptions' => array(
                    'field_type' => 'integer',
                    'data_type'  => NumberFilterType::DATA_INTEGER
                ),
            ),
            'integer NOT IN'              => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_NOT_IN, 'value' => '1,2,5'),
                'formData'      => array('type' => NumberFilterType::TYPE_NOT_IN, 'value' => '1,2,5'),
                'viewData'      => array(
                    'value'             => array('type' => NumberFilterType::TYPE_NOT_IN, 'value' => '1,2,5'),
                    'formatter_options' => array(
                        'decimals'         => 0,
                        'grouping'         => false,
                        'orderSeparator'   => '',
                        'decimalSeparator' => '.',
                    ),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::DATA_INTEGER
                ),
                'customOptions' => array(
                    'field_type' => 'integer',
                    'data_type'  => NumberFilterType::DATA_INTEGER
                ),
            ),
            'percent_float'        => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12.34'),
                'formData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => 12.34),
                'viewData'      => array(
                    'value'             => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12.34'),
                    'formatter_options' => array(
                        'decimals'         => 2,
                        'grouping'         => false,
                        'orderSeparator' => '',
                        'decimalSeparator' => '.',
                        'percent'          => true
                    ),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::PERCENT
                ),
                'customOptions' => array(
                    'data_type'  => NumberFilterType::PERCENT
                ),
            ),
            'percent_int'          => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12'),
                'formData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => 12),
                'viewData'      => array(
                    'value'             => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12'),
                    'formatter_options' => array(
                        'decimals'         => 2,
                        'grouping'         => false,
                        'orderSeparator' => '',
                        'decimalSeparator' => '.',
                        'percent'          => true
                    ),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::PERCENT
                ),
                'customOptions' => array(
                    'data_type'  => NumberFilterType::PERCENT
                ),
            ),
            'money'                => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12345.67890'),
                'formData'      => array(
                    'type'  => NumberFilterType::TYPE_EQUAL,
                    'value' => 12345.68
                ),
                'viewData'      => array(
                    'value'             => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => '12345.68'),
                    'formatter_options' => array(
                        'decimals'         => 4,
                        'grouping'         => true,
                        'orderSeparator'   => ' ',
                        'decimalSeparator' => '.',
                    ),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::DATA_DECIMAL
                ),
                'customOptions' => array(
                    'field_type'        => 'money',
                    'data_type'         => NumberFilterType::DATA_DECIMAL,
                    'formatter_options' => array(
                        'decimals'       => 4,
                        'orderSeparator' => ' '
                    )
                ),
            ),
            'invalid format'       => array(
                'bindData'      => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => 'abcd.67890'),
                'formData'      => array('type' => NumberFilterType::TYPE_EQUAL),
                'viewData'      => array(
                    'value' => array('type' => NumberFilterType::TYPE_EQUAL, 'value' => 'abcd.67890'),
                    'array_separator' => ',',
                    'array_operators' => [NumberFilterType::TYPE_IN, NumberFilterType::TYPE_NOT_IN],
                    'data_type' => NumberFilterType::DATA_INTEGER
                ),
                'customOptions' => array(
                    'field_type' => 'money'
                ),
            ),
        );
    }
}
