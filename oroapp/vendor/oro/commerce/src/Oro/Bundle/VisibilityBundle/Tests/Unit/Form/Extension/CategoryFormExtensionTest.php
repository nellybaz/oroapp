<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\Form\Extension;

use Doctrine\Common\Persistence\ManagerRegistry;
use Oro\Bundle\AttachmentBundle\Form\Type\ImageType;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Form\Type\CategoryDefaultProductOptionsType;
use Oro\Bundle\CatalogBundle\Form\Type\CategoryType;
use Oro\Bundle\CatalogBundle\Form\Type\CategoryUnitPrecisionType;
use Oro\Bundle\CatalogBundle\Visibility\CategoryDefaultProductUnitOptionsVisibilityInterface;
use Oro\Bundle\CustomerBundle\Tests\Unit\Form\Extension\Stub\ImageTypeStub;
use Oro\Bundle\CustomerBundle\Tests\Unit\Form\Extension\Stub\OroRichTextTypeStub;
use Oro\Bundle\CustomerBundle\Tests\Unit\Form\Type\Stub\DataChangesetTypeStub;
use Oro\Bundle\CustomerBundle\Tests\Unit\Form\Type\Stub\EntityChangesetTypeStub;
use Oro\Bundle\FormBundle\Form\Type\DataChangesetType;
use Oro\Bundle\FormBundle\Form\Type\EntityChangesetType;
use Oro\Bundle\FormBundle\Form\Type\EntityIdentifierType;
use Oro\Bundle\FormBundle\Form\Type\OroRichTextType;
use Oro\Bundle\LocaleBundle\Form\Type\LocalizationCollectionType;
use Oro\Bundle\LocaleBundle\Form\Type\LocalizedFallbackValueCollectionType;
use Oro\Bundle\LocaleBundle\Form\Type\LocalizedPropertyType;
use Oro\Bundle\LocaleBundle\Tests\Unit\Form\Type\Stub\LocalizationCollectionTypeStub;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Form\Extension\IntegerExtension;
use Oro\Bundle\ProductBundle\Form\Type\ProductUnitSelectionType;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductUnitSelectionTypeStub;
use Oro\Bundle\RedirectBundle\Form\Type\LocalizedSlugType;
use Oro\Bundle\RedirectBundle\Form\Type\LocalizedSlugWithRedirectType;
use Oro\Bundle\RedirectBundle\Helper\ConfirmSlugChangeFormHelper;
use Oro\Bundle\RedirectBundle\Tests\Unit\Form\Type\Stub\LocalizedSlugTypeStub;
use Oro\Bundle\VisibilityBundle\Form\EventListener\VisibilityPostSetDataListener;
use Oro\Bundle\VisibilityBundle\Form\Extension\CategoryFormExtension;
use Oro\Bundle\VisibilityBundle\Form\Type\EntityVisibilityType;
use Oro\Bundle\VisibilityBundle\Provider\VisibilityChoicesProvider;
use Oro\Bundle\VisibilityBundle\Tests\Unit\Form\Extension\Stub\CategoryStub;
use Oro\Component\Testing\Unit\Form\Type\Stub\EntityIdentifierType as EntityIdentifierTypeStub;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Validator\Validation;

class CategoryFormExtensionTest extends FormIntegrationTestCase
{
    /** @var CategoryFormExtension|\PHPUnit_Framework_MockObject_MockObject */
    protected $categoryFormExtension;

    protected function setUp()
    {
        $this->categoryFormExtension = new CategoryFormExtension();

        parent::setUp();
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        /** @var ManagerRegistry $registry */
        $registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');

        /** @var VisibilityPostSetDataListener|\PHPUnit_Framework_MockObject_MockObject $postSetDataListener */
        $postSetDataListener = $this->getMockBuilder(
            'Oro\Bundle\VisibilityBundle\Form\EventListener\VisibilityPostSetDataListener'
        )
            ->disableOriginalConstructor()
            ->getMock();

        /** @var \PHPUnit_Framework_MockObject_MockObject|VisibilityChoicesProvider $visibilityChoicesProvider */
        $visibilityChoicesProvider = $this
            ->getMockBuilder('Oro\Bundle\VisibilityBundle\Provider\VisibilityChoicesProvider')
            ->disableOriginalConstructor()
            ->getMock();

        /** @var CategoryDefaultProductUnitOptionsVisibilityInterface $defaultProductOptionsVisibility */
        $defaultProductOptionsVisibility = $this
            ->getMockBuilder(CategoryDefaultProductUnitOptionsVisibilityInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $defaultProductOptions = new CategoryDefaultProductOptionsType();
        $defaultProductOptions->setDataClass('Oro\Bundle\CatalogBundle\Entity\CategoryDefaultProductOptions');

        $categoryUnitPrecision = new CategoryUnitPrecisionType($defaultProductOptionsVisibility);
        $categoryUnitPrecision->setDataClass('Oro\Bundle\CatalogBundle\Model\CategoryUnitPrecision');

        /** @var ConfirmSlugChangeFormHelper $confirmSlugChangeFormHelper */
        $confirmSlugChangeFormHelper = $this->getMockBuilder(ConfirmSlugChangeFormHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var RouterInterface $router */
        $router = $this->createMock(RouterInterface::class);

        return [
            new PreloadedExtension(
                [
                    EntityVisibilityType::NAME => new EntityVisibilityType(
                        $postSetDataListener,
                        $visibilityChoicesProvider
                    ),
                    CategoryType::NAME => new CategoryType($router),
                    CategoryDefaultProductOptionsType::NAME => $defaultProductOptions,
                    CategoryUnitPrecisionType::NAME => $categoryUnitPrecision,
                    ProductUnitSelectionType::NAME => new ProductUnitSelectionTypeStub(
                        [
                            'item' => (new ProductUnit())->setCode('item'),
                            'kg' => (new ProductUnit())->setCode('kg')
                        ]
                    ),
                    EntityIdentifierType::NAME => new EntityIdentifierTypeStub([]),
                    LocalizedFallbackValueCollectionType::NAME => new LocalizedFallbackValueCollectionType($registry),
                    LocalizedPropertyType::NAME => new LocalizedPropertyType(),
                    LocalizationCollectionType::NAME => new LocalizationCollectionTypeStub(),
                    DataChangesetType::NAME => new DataChangesetTypeStub(),
                    EntityChangesetType::NAME => new EntityChangesetTypeStub(),
                    OroRichTextType::NAME => new OroRichTextTypeStub(),
                    ImageType::NAME => new ImageTypeStub(),
                    LocalizedSlugType::NAME => new LocalizedSlugTypeStub(),
                    LocalizedSlugWithRedirectType::NAME
                        => new LocalizedSlugWithRedirectType($confirmSlugChangeFormHelper),
                ],
                [
                    CategoryType::NAME => [$this->categoryFormExtension],
                    'form' => [new IntegerExtension()]
                ]
            ),
            new ValidatorExtension(Validation::createValidator()),
        ];
    }

    public function testBuildForm()
    {
        $form = $this->factory->create(
            CategoryType::NAME,
            new CategoryStub(),
            ['data_class' => Category::class]
        );
        $this->assertTrue($form->has('visibility'));
    }

    public function testGetExtendedType()
    {
        $this->assertEquals($this->categoryFormExtension->getExtendedType(), CategoryType::NAME);
    }
}
