<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\ProductVariant\VariantFieldValueHandler;

use Symfony\Component\Translation\TranslatorInterface;
use Oro\Bundle\ProductBundle\ProductVariant\VariantFieldValueHandler\BooleanVariantFieldValueHandler;

class BooleanVariantFieldValueHandlerTest extends \PHPUnit_Framework_TestCase
{
    /** @var BooleanVariantFieldValueHandler */
    private $handler;

    /** @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $translator;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->translator = $this->createMock(TranslatorInterface::class);
        $this->translator->expects($this->any())
            ->method('trans')
            ->willReturnMap([
                ['oro.product.variant_fields.no.label', [], null, null, 'No'],
                ['oro.product.variant_fields.yes.label', [], null, null, 'Yes'],
            ]);

        $this->handler = new BooleanVariantFieldValueHandler($this->translator);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->handler);
    }

    public function testGetType()
    {
        $this->assertEquals(BooleanVariantFieldValueHandler::TYPE, $this->handler->getType());
    }

    public function testGetValues()
    {
        $this->assertEquals([0 => 'No', 1 => 'Yes'], $this->handler->getPossibleValues('testField'));
    }

    /**
     * @dataProvider getScalarValueProvider
     * @param mixed $value
     * @param bool $expected
     */
    public function testGetScalarValue($value, $expected)
    {
        $this->assertEquals($expected, $this->handler->getScalarValue($value));
    }

    /**
     * @dataProvider getHumanReadableValueProvider
     * @param mixed $value
     * @param bool $expected
     */
    public function testGetHumanReadableValue($value, $expected)
    {
        $this->assertEquals($expected, $this->handler->getHumanReadableValue('any_value', $value));
    }

    /**
     * @return array
     */
    public function getScalarValueProvider()
    {
        return [
            'return false' => [
                'value' => 0,
                'expected' => false
            ],
            'return true' => [
                'value' => 1,
                'expected' => true
            ]
        ];
    }

    /**
     * @return array
     */
    public function getHumanReadableValueProvider()
    {
        return [
            'return human readable false' => [
                'value' => 0,
                'expected' => 'No'
            ],
            'return human readable true' => [
                'value' => 1,
                'expected' => 'Yes'
            ]
        ];
    }
}
