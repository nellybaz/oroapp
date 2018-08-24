<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Form\Type;

use Oro\Bundle\PromotionBundle\Entity\AppliedCoupon;
use Oro\Bundle\PromotionBundle\Form\Type\AppliedCouponType;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;

class AppliedCouponTypeTest extends FormIntegrationTestCase
{
    /**
     * @var AppliedCouponType
     */
    private $formType;

    protected function setUp()
    {
        parent::setUp();
        $this->formType = new AppliedCouponType();
    }

    public function testBuildForm()
    {
        $form = $this->factory->create($this->formType);

        $this->assertTrue($form->has('couponCode'));
        $this->assertTrue($form->has('sourcePromotionId'));
        $this->assertTrue($form->has('sourceCouponId'));
    }

    /**
     * @dataProvider submitProvider
     *
     * @param AppliedCoupon $defaultData
     * @param array $submittedData
     * @param AppliedCoupon $expectedData
     */
    public function testSubmit(AppliedCoupon $defaultData, array $submittedData, AppliedCoupon $expectedData)
    {
        $form = $this->factory->create($this->formType, $defaultData);
        $form->submit($submittedData);
        $this->assertTrue($form->isValid());

        $this->assertEquals($expectedData, $form->getData());
    }

    /**
     * @return array
     */
    public function submitProvider()
    {
        return [
            'new data' => [
                'defaultData' => new AppliedCoupon(),
                'submittedData' => [
                    'couponCode' => 'code',
                    'sourcePromotionId' => 1,
                    'sourceCouponId' => 2,
                ],
                'expectedData' => (new AppliedCoupon())
                    ->setCouponCode('code')
                    ->setSourcePromotionId(1)
                    ->setSourceCouponId(2),
            ],
            'update data' => [
                'defaultData' => (new AppliedCoupon())
                    ->setCouponCode('code')
                    ->setSourcePromotionId(1)
                    ->setSourceCouponId(2),
                'submittedData' => [
                    'couponCode' => 'new-code',
                    'sourcePromotionId' => 333,
                    'sourceCouponId' => 555,
                ],
                'expectedData' => (new AppliedCoupon())
                    ->setCouponCode('new-code')
                    ->setSourcePromotionId(333)
                    ->setSourceCouponId(555),
            ]
        ];
    }

    public function testDefaultOptions()
    {
        $form = $this->factory->create($this->formType);

        $this->assertArraySubset([
            'data_class' => AppliedCoupon::class,
        ], $form->getConfig()->getOptions());
    }

    public function testGetName()
    {
        $this->assertEquals(AppliedCouponType::NAME, $this->formType->getName());
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals(AppliedCouponType::NAME, $this->formType->getBlockPrefix());
    }
}
