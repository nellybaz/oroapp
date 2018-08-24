<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Validator\Constraints;

use Symfony\Component\Translation\TranslatorInterface;

use Doctrine\Common\Collections\ArrayCollection;

use Oro\Bundle\LayoutBundle\Model\ThemeImageType;
use Oro\Bundle\LayoutBundle\Provider\ImageTypeProvider;
use Oro\Bundle\ProductBundle\Entity\ProductImage;
use Oro\Bundle\ProductBundle\Entity\ProductImageType;
use Oro\Bundle\ProductBundle\Validator\Constraints\ProductImageTypeValidator;
use Oro\Bundle\ProductBundle\Validator\Constraints\ProductImageType as ProductImageTypeConstraint;
use Oro\Component\Testing\Validator\AbstractConstraintValidatorTest;

class ProductImageTypeValidatorTest extends AbstractConstraintValidatorTest
{
    /**
     * @var ImageTypeProvider|\PHPUnit_Framework_MockObject_MockObject $imageTypeProvider
     */
    protected $imageTypeProvider;

    /**
     * @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject $translator
     */
    protected $translator;

    public function setUp()
    {
        parent::setUp();

        $this->constraint = new ProductImageTypeConstraint();
        $this->context = $this->createContext();
        $this->validator = $this->createValidator();
        $this->validator->initialize($this->context);
    }

    /**
     * @return ProductImageTypeValidator
     */
    protected function createValidator()
    {
        $this->imageTypeProvider = $this->createMock(ImageTypeProvider::class);
        $this->translator = $this->createMock(TranslatorInterface::class);

        return new ProductImageTypeValidator(
            $this->imageTypeProvider,
            $this->translator
        );
    }

    public function testValidateShouldIgnore()
    {
        $value = new ProductImageType(null);

        $this->validator->validate($value, $this->constraint);

        $this->assertNoViolation();
    }

    public function testValidateShouldThrowErrorInvalid()
    {
        $value = new ProductImageType('testType');

        $this->imageTypeProvider->expects($this->once())
            ->method('getImageTypes')
            ->willReturn(['otherType' => []]);

        $this->validator->validate($value, $this->constraint);

        $this->buildViolation('oro.product.product_image_type.invalid_type')
            ->setParameters(
                [
                    '%type%' => 'testType',
                ]
            )
            ->assertRaised();
    }

    public function testValidateShouldThrowErrorDuplicate()
    {
        $productImageTypesCollection = $this->createMock(ArrayCollection::class);
        $productImageTypesCollection->expects($this->once())
            ->method('containsKey')
            ->willReturn(true);


        $productImage = new ProductImage();
        $productImage->setTypes($productImageTypesCollection);

        $value = new ProductImageType('main');
        $value->setProductImage($productImage);

        $this->imageTypeProvider->expects($this->once())
            ->method('getImageTypes')
            ->willReturn(
                [
                    'main' => new ThemeImageType('main', 'Main', [])
                ]
            );

        $this->translator->expects($this->once())
            ->method('trans')
            ->willReturn('Main');

        $this->validator->validate($value, $this->constraint);


        $this->buildViolation('oro.product.product_image_type.already_exists')
            ->setParameters(
                [
                    '%type%' => 'Main',
                ]
            )
            ->assertRaised();
    }

    public function testValidateShouldPass()
    {
        $value = new ProductImageType('testType');
        $this->imageTypeProvider->expects($this->once())
            ->method('getImageTypes')
            ->willReturn(
                [
                    'testType' => []
                ]
            );

        $this->validator->validate($value, $this->constraint);

        $this->assertNoViolation();
    }
}
