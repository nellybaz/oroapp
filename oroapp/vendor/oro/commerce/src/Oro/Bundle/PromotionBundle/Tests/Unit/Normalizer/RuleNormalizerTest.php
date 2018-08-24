<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Normalizer;

use Oro\Bundle\RuleBundle\Entity\Rule;
use Oro\Bundle\PromotionBundle\Normalizer\RuleNormalizer;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;

class RuleNormalizerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RuleNormalizer
     */
    protected $normalizer;

    protected function setUp()
    {
        $this->normalizer = new RuleNormalizer();
    }

    public function testNormalize()
    {
        $rule = new Rule();
        $rule->setName('Promo')
            ->setExpression('currency = "USD"')
            ->setSortOrder(10)
            ->setStopProcessing(false);

        $expected = [
            'name' => 'Promo',
            'expression' => 'currency = "USD"',
            'sortOrder' => 10,
            'isStopProcessing' => false,
        ];

        $actual = $this->normalizer->normalize($rule);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider denormalizeDataProvider
     *
     * @param $ruleData
     * @param $expectedRule
     */
    public function testDenormalize($ruleData, $expectedRule)
    {
        $actualRule = $this->normalizer->denormalize($ruleData);
        $this->assertEquals($expectedRule, $actualRule);
    }

    public function denormalizeDataProvider()
    {
        return [
            'usual case' => [
                'ruleData' => [
                    'name' => 'Promo',
                    'expression' => 'currency = "USD"',
                    'sortOrder' => 10,
                    'isStopProcessing' => false,
                ],
                'expectedRule' => (new Rule())->setName('Promo')
                    ->setExpression('currency = "USD"')
                    ->setSortOrder(10)
                    ->setStopProcessing(false)
            ],
            'expression optional' => [
                'ruleData' => [
                    'name' => 'Promo',
                    'sortOrder' => 10,
                    'isStopProcessing' => false,
                ],
                'expectedRule' => (new Rule())->setName('Promo')
                    ->setExpression(null)
                    ->setSortOrder(10)
                    ->setStopProcessing(false)
            ]
        ];
    }

    public function testRequiredOptionsException()
    {
        $ruleData = [];

        $this->expectException(MissingOptionsException::class);
        $this->expectExceptionMessage(
            'The required options "isStopProcessing", "name", "sortOrder" are missing.'
        );

        $this->normalizer->denormalize($ruleData);
    }

    public function testInvalidArgumentException()
    {
        $object = new \stdClass();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument rule should be instance of Rule entity');

        $this->normalizer->normalize($object);
    }
}
