<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Twig;

use Oro\Component\Testing\Unit\TwigExtensionTestCaseTrait;
use Oro\Bundle\PromotionBundle\CouponGeneration\Code\CodeGenerator;
use Oro\Bundle\PromotionBundle\CouponGeneration\Options\CodeGenerationOptions;
use Oro\Bundle\PromotionBundle\Twig\CouponPreviewExtension;

class CouponPreviewExtensionTest extends \PHPUnit_Framework_TestCase
{
    use TwigExtensionTestCaseTrait;

    /**
     * @var CouponPreviewExtension
     */
    protected $couponPreviewExtension;

    /**
     * @var CodeGenerator|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $codeGenerator;

    protected function setUp()
    {
        $this->codeGenerator = $this->createMock(CodeGenerator::class);

        $container = $this->getContainerBuilder()
            ->add('oro_promotion.coupon_generation.code_generator', $this->codeGenerator)
            ->getContainer($this);

        $this->couponPreviewExtension = new CouponPreviewExtension($container);
    }

    public function testGenerateCouponCode()
    {
        $options = new CodeGenerationOptions();

        $this->codeGenerator->expects($this->once())
            ->method('generateOne')
            ->with($options)
            ->willReturn('coupon-code');

        self::callTwigFunction($this->couponPreviewExtension, 'oro_promotion_generate_coupon_code', [$options]);
    }
}
