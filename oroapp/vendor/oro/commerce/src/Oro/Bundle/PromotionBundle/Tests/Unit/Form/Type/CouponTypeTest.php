<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Form\Type;

use Oro\Bundle\FormBundle\Form\Extension\DateTimeExtension;
use Oro\Bundle\FormBundle\Form\Type\OroDateTimeType;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Component\Testing\Unit\Form\Type\Stub\EntityType;
use Oro\Bundle\PromotionBundle\Entity\Coupon;
use Oro\Bundle\PromotionBundle\Form\Type\CouponType;
use Oro\Bundle\FormBundle\Form\Extension\TooltipFormExtension;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\PromotionBundle\Entity\Promotion;
use Oro\Bundle\PromotionBundle\Form\Type\PromotionSelectType;
use Oro\Bundle\TranslationBundle\Translation\Translator;

use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;

class CouponTypeTest extends FormIntegrationTestCase
{
    use EntityTrait;

    /**
     * @var CouponType
     */
    protected $formType;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->formType = new CouponType();
    }

    /**
     * {@inheritDoc}
     */
    protected function getExtensions()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|ConfigProvider $configProvider */
        $configProvider = $this->createMock(ConfigProvider::class);
        /** @var \PHPUnit_Framework_MockObject_MockObject|Translator $translator */
        $translator = $this->createMock(Translator::class);

        $promotionSelectType = new EntityType(
            [
                'promotion1' => $this->getEntity(Promotion::class, ['id' => 1]),
                'promotion2' => $this->getEntity(Promotion::class, ['id' => 2]),
            ],
            PromotionSelectType::NAME,
            [
                'autocomplete_alias' => 'oro_promotion',
                'grid_name' => 'promotion-for-coupons-select-grid',
            ]
        );

        return [
            new PreloadedExtension(
                [
                    $promotionSelectType->getName() => $promotionSelectType,
                    OroDateTimeType::NAME => new OroDateTimeType(),
                ],
                [
                    'form' => [
                        new TooltipFormExtension($configProvider, $translator),
                    ],
                    'datetime' => [
                        new DateTimeExtension()
                    ]
                ]
            ),
        ];
    }

    /**
     * @dataProvider submitProvider
     *
     * @param array $submittedData
     * @param Coupon $expectedData
     */
    public function testSubmit($submittedData, Coupon $expectedData)
    {
        $form = $this->factory->create($this->formType);
        $form->submit($submittedData);
        $this->assertTrue($form->isValid());

        /** @var Coupon $data */
        $data = $form->getData();

        $this->assertEquals($expectedData, $data);
    }

    public function testBuildForm()
    {
        $form = $this->factory->create($this->formType, $this->createCoupon('test'));

        $this->assertTrue($form->has('code'));
        $this->assertTrue($form->has('promotion'));
        $this->assertTrue($form->has('enabled'));
        $this->assertTrue($form->has('usesPerPerson'));
        $this->assertTrue($form->has('usesPerCoupon'));
        $this->assertTrue($form->has('validUntil'));
    }

    /**
     * @return array
     */
    public function submitProvider()
    {
        $promotion2 = $this->getEntity(Promotion::class, ['id' => 2]);
        $validFromDate = '01-01-2010 12:00:00';
        $validUntilDate = '01-01-2020 12:00:00';

        return [
            'coupon with promotion' => [
                'submittedData' => [
                    'code' => 'test1234',
                    'enabled' => false,
                    'promotion' => 'promotion2',
                    'usesPerPerson' => 2,
                    'usesPerCoupon' => 3,
                    'validFrom' => $validFromDate,
                    'validUntil' => $validUntilDate,
                ],
                'expectedData' => $this->createCoupon(
                    'test1234',
                    false,
                    2,
                    3,
                    $promotion2,
                    new \DateTime($validFromDate),
                    new \DateTime($validUntilDate)
                ),
            ],
            'coupon without promotion' => [
                'submittedData' => [
                    'code' => 'test1234',
                    'enabled' => true,
                    'promotion' => null,
                    'usesPerPerson' => 2,
                    'usesPerCoupon' => 3,
                    'validUntil' => null,
                ],
                'expectedData' => $this->createCoupon('test1234', true, 2, 3),
            ],
        ];
    }

    /**
     * @param string $couponCode
     * @param bool $enabled
     * @param int|null $usesPerPerson
     * @param int|null $usesPerCoupon
     * @param Promotion|null $promotion
     * @param \DateTime|null $validFrom
     * @param \DateTime|null $validUntil
     * @return Coupon
     */
    public function createCoupon(
        $couponCode,
        $enabled = false,
        $usesPerPerson = null,
        $usesPerCoupon = null,
        $promotion = null,
        \DateTime $validFrom = null,
        \DateTime $validUntil = null
    ) {
        return (new Coupon())
            ->setCode($couponCode)
            ->setEnabled($enabled)
            ->setUsesPerPerson($usesPerPerson)
            ->setUsesPerCoupon($usesPerCoupon)
            ->setPromotion($promotion)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
}
