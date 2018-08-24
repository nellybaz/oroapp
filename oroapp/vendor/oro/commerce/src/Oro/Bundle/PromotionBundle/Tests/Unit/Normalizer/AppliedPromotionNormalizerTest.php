<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Normalizer;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\PromotionBundle\Entity\DiscountConfiguration;
use Oro\Bundle\PromotionBundle\Entity\Promotion;
use Oro\Bundle\PromotionBundle\Entity\PromotionDataInterface;
use Oro\Bundle\PromotionBundle\Model\AppliedPromotionData;
use Oro\Bundle\PromotionBundle\Normalizer\AppliedPromotionNormalizer;
use Oro\Bundle\PromotionBundle\Normalizer\RuleNormalizer;
use Oro\Bundle\PromotionBundle\Normalizer\ScopeNormalizer;
use Oro\Bundle\PromotionBundle\Normalizer\SegmentNormalizer;
use Oro\Bundle\RuleBundle\Entity\Rule;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\SegmentBundle\Entity\Segment;
use Oro\Bundle\SegmentBundle\Entity\SegmentType;
use Oro\Component\Testing\Unit\EntityTrait;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;

class AppliedPromotionNormalizerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var RuleNormalizer|\PHPUnit_Framework_MockObject_MockObject
     */
    private $ruleNormalizer;

    /**
     * @var ScopeNormalizer|\PHPUnit_Framework_MockObject_MockObject
     */
    private $scopeNormalizer;

    /**
     * @var SegmentNormalizer|\PHPUnit_Framework_MockObject_MockObject
     */
    private $segmentNormalizer;

    /**
     * @var AppliedPromotionNormalizer
     */
    private $normalizer;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->ruleNormalizer = $this->createMock(RuleNormalizer::class);
        $this->scopeNormalizer = $this->createMock(ScopeNormalizer::class);
        $this->segmentNormalizer = $this->createMock(SegmentNormalizer::class);

        $this->normalizer = new AppliedPromotionNormalizer(
            $this->ruleNormalizer,
            $this->scopeNormalizer,
            $this->segmentNormalizer
        );
    }

    /**
     * @dataProvider normalizeDataProvider
     *
     * @param PromotionDataInterface $promotion
     * @param array $expected
     */
    public function testNormalize(
        PromotionDataInterface $promotion,
        array $expected
    ) {
        $this->ruleNormalizer->expects($this->once())
            ->method('normalize')
            ->with($promotion->getRule())
            ->willReturn([
                'name' => 'Promo',
                'expression' => 'currency = "USD"',
                'sortOrder' => 10,
                'isStopProcessing' => false,
            ]);

        $this->scopeNormalizer->expects($this->exactly(count($expected['scopes'])))
            ->method('normalize')
            ->withConsecutive(...array_chunk($promotion->getScopes()->toArray(), 1))
            ->willReturnOnConsecutiveCalls(...$expected['scopes']);

        $this->segmentNormalizer->expects($this->once())
            ->method('normalize')
            ->with($promotion->getProductsSegment())
            ->willReturn([
                'definition' => '{"filters":[],"columns":[{"name":"sku","label":"sku","sorting":null}]}'
            ]);

        $actual = $this->normalizer->normalize($promotion);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function normalizeDataProvider()
    {
        /** @var Scope $firstScope */
        $firstScope = $this->getEntity(Scope::class, ['id' => 42]);

        /** @var Scope $secondScope */
        $secondScope = $this->getEntity(Scope::class, ['id' => 45]);

        $rule = new Rule();
        $rule->setName('Promo')
            ->setExpression('currency = "USD"')
            ->setSortOrder(10)
            ->setStopProcessing(false);

        $discountConfiguration = new DiscountConfiguration();
        $discountConfiguration->setType('order');
        $discountConfiguration->setOptions([
            'discount_type' => 'amount',
            'discount_value' => '10.0000',
            'discount_currency' => 'USD'
        ]);

        $segment = new Segment();
        $segment->setType(new SegmentType(SegmentType::TYPE_DYNAMIC));
        $segment->setDefinition('{"filters":[],"columns":[{"name":"sku","label":"sku","sorting":null}]}')
            ->setEntity(Product::class);

        /** @var Promotion $promotion */
        $promotion = $this->getEntity(
            Promotion::class,
            [
                'id' => 42,
                'useCoupons' => true,
                'rule' => $rule,
                'scopes' => [$firstScope, $secondScope],
                'discountConfiguration' => $discountConfiguration,
                'productsSegment' => $segment
            ]
        );

        $appliedPromotion = $this->getEntity(
            AppliedPromotionData::class,
            [
                'id' => 42,
                'useCoupons' => true,
                'rule' => $rule,
                'scopes' => new ArrayCollection([$firstScope, $secondScope]),
                'discountConfiguration' => $discountConfiguration,
                'productsSegment' => $segment
            ]
        );

        $expected = [
            'id' => 42,
            'useCoupons' => true,
            'rule' => [
                'name' => 'Promo',
                'expression' => 'currency = "USD"',
                'sortOrder' => 10,
                'isStopProcessing' => false,
            ],
            'scopes' => [
                ['id' => 42],
                ['id' => 45],
            ],
            'productsSegment' => [
                'definition' => '{"filters":[],"columns":[{"name":"sku","label":"sku","sorting":null}]}'
            ]
        ];

        $appliedPromotionWithoutScopes = $this->getEntity(
            AppliedPromotionData::class,
            [
                'id' => 42,
                'useCoupons' => true,
                'rule' => $rule,
                'discountConfiguration' => $discountConfiguration,
                'productsSegment' => $segment
            ]
        );

        return [
            'Promotion' => [
                'promotion' => $promotion,
                'expected' =>  $expected
            ],
            'Applied Promotion' => [
                'promotion' => $appliedPromotion,
                'expected' => $expected
            ],
            'AppliedPromotion with empty scopes' => [
                'promotion' => $appliedPromotionWithoutScopes,
                'expected' => [
                    'id' => 42,
                    'useCoupons' => true,
                    'rule' => [
                        'name' => 'Promo',
                        'expression' => 'currency = "USD"',
                        'sortOrder' => 10,
                        'isStopProcessing' => false,
                    ],
                    'scopes' => [],
                    'productsSegment' => [
                        'definition' => '{"filters":[],"columns":[{"name":"sku","label":"sku","sorting":null}]}'
                    ]
                ]
            ]
        ];
    }

    /**
     * @dataProvider denormalizeDataProvider
     *
     * @param array $promotionData
     * @param Rule $rule
     * @param array|Scope[] $scopes
     * @param Segment $segment
     * @param AppliedPromotionData $expected
     */
    public function testDenormalize(
        array $promotionData,
        Rule $rule,
        array $scopes,
        Segment $segment,
        AppliedPromotionData $expected
    ) {
        $this->ruleNormalizer->expects($this->once())
            ->method('denormalize')
            ->with($promotionData['rule'])
            ->willReturn($rule);

        $this->scopeNormalizer->expects($this->exactly(count($promotionData['scopes'])))
            ->method('denormalize')
            ->withConsecutive(...array_chunk($promotionData['scopes'], 1))
            ->willReturnOnConsecutiveCalls(...$scopes);

        $this->segmentNormalizer->expects($this->once())
            ->method('denormalize')
            ->with($promotionData['productsSegment'])
            ->willReturn($segment);

        $actual = $this->normalizer->denormalize($promotionData);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function denormalizeDataProvider()
    {
        /** @var Scope $firstScope */
        $firstScope = $this->getEntity(Scope::class, ['id' => 42]);

        /** @var Scope $secondScope */
        $secondScope = $this->getEntity(Scope::class, ['id' => 45]);

        $segment = new Segment();
        $segment->setType(new SegmentType(SegmentType::TYPE_DYNAMIC));
        $segment->setDefinition('{"filters":[],"columns":[{"name":"sku","label":"sku","sorting":null}]}')
            ->setEntity(Product::class);

        $rule = new Rule();
        $rule->setName('Promo')
            ->setExpression('currency = "USD"')
            ->setSortOrder(10)
            ->setStopProcessing(false);

        return [
            'denormalize with full data' => [
                'promotionData' => [
                    'id' => 42,
                    'useCoupons' => true,
                    'rule' => [
                        'name' => 'Promo',
                        'expression' => 'currency = "USD"',
                        'sortOrder' => 10,
                        'isStopProcessing' => false,
                    ],
                    'scopes' => [
                        ['id' => 42],
                        ['id' => 45]
                    ],
                    'productsSegment' => [
                        'definition' => '{"filters":[],"columns":[{"name":"sku","label":"sku","sorting":null}]}'
                    ]
                ],
                'rule' => $rule,
                'scopes' => [$firstScope, $secondScope],
                'segment' => $segment,
                'expected' => (new AppliedPromotionData())->setId(42)
                    ->setUseCoupons(true)
                    ->addScope($firstScope)
                    ->addScope($secondScope)
                    ->setRule($rule)
                    ->setProductsSegment($segment)
            ],
            'denormalize with empty scopes' => [
                'promotionData' => [
                    'id' => 42,
                    'useCoupons' => true,
                    'rule' => [
                        'name' => 'Promo',
                        'expression' => 'currency = "USD"',
                        'sortOrder' => 10,
                        'isStopProcessing' => false,
                    ],
                    'scopes' => [],
                    'productsSegment' => [
                        'definition' => '{"filters":[],"columns":[{"name":"sku","label":"sku","sorting":null}]}'
                    ]
                ],
                'rule' => $rule,
                'scopes' => [],
                'segment' => $segment,
                'expected' => (new AppliedPromotionData())->setId(42)
                    ->setUseCoupons(true)
                    ->setRule($rule)
                    ->setProductsSegment($segment)
            ]
        ];
    }

    public function testRequiredOptionsException()
    {
        $ruleData = [];

        $this->expectException(MissingOptionsException::class);
        $this->expectExceptionMessage(
            'The required options "id", "rule", "useCoupons" are missing.'
        );

        $this->normalizer->denormalize($ruleData);
    }


    public function testInvalidArgumentException()
    {
        $object = new \stdClass();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Argument promotion should be instance of Oro\Bundle\PromotionBundle\Entity\PromotionDataInterface entity'
        );

        $this->normalizer->normalize($object);
    }
}
