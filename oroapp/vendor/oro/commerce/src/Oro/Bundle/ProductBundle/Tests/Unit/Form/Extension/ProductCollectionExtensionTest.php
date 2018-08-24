<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Form\Extension;

use Oro\Bundle\ProductBundle\Tests\Unit\ContentVariant\Stub\ContentVariantStub;
use Oro\Bundle\ProductBundle\Form\Extension\ProductCollectionExtension;

use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Form\FormBuilderInterface;

class ProductCollectionExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $translator;

    /**
     * @var |\PHPUnit_Framework_MockObject_MockObject
     */
    private $extendedType;

    /**
     * @var ProductCollectionExtension
     */
    private $productCollectionExtension;

    protected function setUp()
    {
        $this->translator = $this->createMock(TranslatorInterface::class);
        $this->productCollectionExtension = new ProductCollectionExtension($this->translator, $this->extendedType);
    }

    public function testBuildForm()
    {
        /** @var FormBuilderInterface|\PHPUnit_Framework_MockObject_MockObject $builder **/
        $builder = $this->createMock(FormBuilderInterface::class);
        $builder
            ->expects($this->once())
            ->method('addEventListener')
            ->with(FormEvents::POST_SUBMIT, [$this->productCollectionExtension, 'onPostSubmit']);

        $this->productCollectionExtension->buildForm($builder, []);
    }

    /**
     * @dataProvider productCollectionFormsDataProvider
     * @param array $forms
     */
    public function testOnPostSubmitNoValidationError(array $forms)
    {
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form **/
        $form = $this->createMock(FormInterface::class);
        $form
            ->expects($this->once())
            ->method('all')
            ->willReturn($forms);

        $this->translator
            ->expects($this->never())
            ->method('trans');

        $event = new FormEvent($form, []);

        $this->productCollectionExtension->onPostSubmit($event);
    }

    /**
     * @return array
     */
    public function productCollectionFormsDataProvider()
    {
        return [
            'no content variants' => [
                'forms' => []
            ],
            'no productCollectionSegment child form' => [
                'forms' => [
                    $this->createNoProductCollectionSegmentChildForm(),
                    $this->createNoProductCollectionSegmentChildForm()
                ]
            ],
            'no productCollectionSegmentName child form' => [
                'forms' => [
                    $this->createNoProductCollectionSegmentNameChildForm(),
                    $this->createNoProductCollectionSegmentNameChildForm()
                ]
            ],
            'empty segment name in form data' => [
                'forms' => [
                    $this->createProductCollectionForm(''),
                    $this->createProductCollectionForm('')
                ]
            ],
            'unique segment names' => [
                'forms' => [
                    $this->createProductCollectionForm('first unique name'),
                    $this->createProductCollectionForm('second unique name')
                ]
            ],
        ];
    }

    public function testOnPostSubmitValidationError()
    {
        $nameForm = $this->createMock(FormInterface::class);
        $firstProductCollectionForm = $this->createProductCollectionForm('Not unique segment name');
        $secondProductCollectionForm = $this->createProductCollectionForm('Not unique segment name', $nameForm);

        $validationMessage = 'This name already in use';
        $this->translator
            ->expects($this->once())
            ->method('trans')
            ->with('oro.product.product_collection.unique_segment_name.message', [], 'validators')
            ->willReturn($validationMessage);

        $expectedFormError = new FormError($validationMessage);

        $nameForm
            ->expects($this->once())
            ->method('addError')
            ->with($expectedFormError);

        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form */
        $form = $this->createMock(FormInterface::class);
        $form
            ->expects($this->any())
            ->method('all')
            ->willReturn([$firstProductCollectionForm, $secondProductCollectionForm]);

        $this->productCollectionExtension->onPostSubmit(new FormEvent($form, []));
    }

    public function testGetExtendedType()
    {
        $extendedType = 'SomeExtendedType';
        $this->productCollectionExtension = new ProductCollectionExtension($this->translator, $extendedType);

        $this->assertEquals($extendedType, $this->productCollectionExtension->getExtendedType());
    }

    /**
     * @param string $segmentName
     * @param \PHPUnit_Framework_MockObject_MockObject|null $productCollectionSegmentNameForm
     * @return \PHPUnit_Framework_MockObject_MockObject|FormInterface
     */
    private function createProductCollectionForm(
        $segmentName,
        \PHPUnit_Framework_MockObject_MockObject $productCollectionSegmentNameForm = null
    ) {
        if (!$productCollectionSegmentNameForm) {
            $productCollectionSegmentNameForm = $this->createMock(FormInterface::class);
        }

        $productCollectionSegmentNameForm
            ->expects($this->any())
            ->method('getData')
            ->willReturn($segmentName);

        $productCollectionSegmentForm = $this->createMock(FormInterface::class);
        $productCollectionSegmentForm
            ->expects($this->any())
            ->method('has')
            ->willReturnMap([
                ['name', true]
            ]);

        $productCollectionSegmentForm
            ->expects($this->any())
            ->method('get')
            ->willReturnMap([
                ['name', $productCollectionSegmentNameForm]
            ]);

        $productCollectionForm = $this->createMock(FormInterface::class);
        $productCollectionForm
            ->expects($this->any())
            ->method('has')
            ->willReturnMap([
                ['productCollectionSegment', true]
            ]);

        $productCollectionForm
            ->expects($this->any())
            ->method('get')
            ->willReturnMap([
                ['productCollectionSegment', $productCollectionSegmentForm]
            ]);

        return $productCollectionForm;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|FormInterface
     */
    private function createNoProductCollectionSegmentChildForm()
    {
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form */
        $form = $this->createMock(FormInterface::class);
        $form
            ->expects($this->any())
            ->method('has')
            ->willReturnMap([
                ['productCollectionSegment', false]
            ]);

        return $form;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|FormInterface
     */
    private function createNoProductCollectionSegmentNameChildForm()
    {
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $noProductCollectionSegmentChildForm */
        $productCollectionSegmentForm = $this->createMock(FormInterface::class);
        $productCollectionSegmentForm
            ->expects($this->any())
            ->method('has')
            ->willReturnMap([
                ['name', false]
            ]);

        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $noProductCollectionSegmentChildForm */
        $form = $this->createMock(FormInterface::class);
        $form
            ->expects($this->any())
            ->method('has')
            ->willReturnMap([
                ['productCollectionSegment', true]
            ]);

        $form
            ->expects($this->any())
            ->method('get')
            ->willReturnMap([
                ['productCollectionSegment', $productCollectionSegmentForm]
            ]);

        return $form;
    }
}
