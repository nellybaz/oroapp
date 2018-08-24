<?php

namespace Oro\Bundle\CurrencyBundle\Tests\Unit\ImportExport\Serializer\Normalizer;

use Oro\Bundle\CurrencyBundle\Formatter\NumberFormatter;
use Oro\Bundle\CurrencyBundle\Entity\MultiCurrency;
use Oro\Bundle\CurrencyBundle\ImportExport\Serializer\Normalizer\MultiCurrencyNormalizer;

class MultiCurrencyNormalizerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NumberFormatter|\PHPUnit_Framework_MockObject_MockObject
     */
    private $formatter;

    /**
     * @var MultiCurrencyNormalizer
     */
    private $normalizer;

    protected function setUp()
    {
        $this->formatter  = $this->createMock(NumberFormatter::class);
        $this->normalizer = new MultiCurrencyNormalizer($this->formatter);
    }

    public function testSupportsNormalization()
    {
        $multiCurrency = new MultiCurrency('100', 'USD');
        $isNormalizationSupports = $this->normalizer->supportsNormalization($multiCurrency);
        $this->assertTrue($isNormalizationSupports);
    }

    public function testNotSupportsNormalization()
    {
        $multiCurrency = new \stdClass();
        $isNormalizationSupports = $this->normalizer->supportsNormalization($multiCurrency);
        $this->assertFalse($isNormalizationSupports);
    }

    /**
     * @dataProvider getNormalizerData
     *
     * @param string $value
     * @param string $currency
     */
    public function testNormalizeShouldGenerateCorrectString($value, $currency)
    {
        $multiCurrency  = new MultiCurrency($value, $currency);
        $formattedValue = $currency.$value;
        $this->formatter->expects($this->once())
            ->method('formatCurrency')
            ->willReturn($formattedValue);

        $this->assertEquals($formattedValue, $this->normalizer->normalize($multiCurrency));
    }

    /**
     * @return array
     */
    public function getNormalizerData()
    {
        return [
            ['100.00', 'USD']
        ];
    }
}
