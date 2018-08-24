<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\ImportExport\Normalizer;

use Oro\Bundle\EntityBundle\Helper\FieldHelper;
use Oro\Bundle\PricingBundle\Entity\PriceAttributeProductPrice;
use Oro\Bundle\PricingBundle\ImportExport\Normalizer\PriceAttributeProductPriceNormalizer;
use PHPUnit\Framework\TestCase;

class PriceAttributeProductPriceNormalizerTest extends TestCase
{
    /**
     * @var FieldHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    private $fieldHelper;

    /**
     * @var PriceAttributeProductPriceNormalizer
     */
    private $normalizer;

    protected function setUp()
    {
        $this->fieldHelper = $this->createMock(FieldHelper::class);

        $this->normalizer = new PriceAttributeProductPriceNormalizer($this->fieldHelper);
    }

    public function testSupportsNormalization()
    {
        static::assertTrue($this->normalizer->supportsNormalization(new PriceAttributeProductPrice()));
        static::assertFalse($this->normalizer->supportsNormalization(null));
    }

    public function testNormalize()
    {
        $this->fieldHelper
            ->expects(static::any())
            ->method('getFields')
            ->willReturn([
                ['name' => 'column1'],
                ['name' => 'column2'],
                ['name' => 'quantity'],
                ['name' => 'column3'],
            ]);

        $expected = [
            'column1' => null,
            'column2' => null,
            'column3' => null,
        ];

        static::assertSame(
            $expected,
            $this->normalizer->normalize(new PriceAttributeProductPrice())
        );
    }
}
