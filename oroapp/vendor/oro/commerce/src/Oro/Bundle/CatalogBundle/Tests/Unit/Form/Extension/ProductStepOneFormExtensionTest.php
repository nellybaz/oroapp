<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\Form\Extension;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Form\Extension\ProductFormExtension;
use Oro\Bundle\CatalogBundle\Form\Extension\ProductStepOneFormExtension;
use Oro\Bundle\CatalogBundle\Form\Type\CategoryTreeType;
use Oro\Bundle\ProductBundle\Form\Type\ProductStepOneType;

class ProductStepOneFormExtensionTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $defaultProductUnitProvider;

    /**
     * @var ProductFormExtension
     */
    protected $extension;

    protected function setUp()
    {
        $this->defaultProductUnitProvider = $this
            ->getMockBuilder('Oro\Bundle\CatalogBundle\Provider\CategoryDefaultProductUnitProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->extension = new ProductStepOneFormExtension($this->defaultProductUnitProvider);
    }

    public function testGetExtendedType()
    {
        $this->assertEquals(ProductStepOneType::NAME, $this->extension->getExtendedType());
    }

    public function testBuildForm()
    {
        /** @var FormBuilderInterface|\PHPUnit_Framework_MockObject_MockObject $builder */
        $builder = $this->createMock('Symfony\Component\Form\FormBuilderInterface');
        $builder->expects($this->once())
            ->method('add')
            ->with(
                'category',
                CategoryTreeType::NAME,
                [
                    'required' => false,
                    'mapped'   => false,
                    'label'    => 'oro.catalog.category.entity_label'
                ]
            );
        $builder->expects($this->exactly(1))
            ->method('addEventListener');
        $builder->expects($this->at(1))
            ->method('addEventListener')
            ->with(FormEvents::POST_SUBMIT, [$this->extension, 'onPostSubmit'], 10);

        $this->extension->buildForm($builder, []);
    }

    public function testOnPostSubmitNoCategory()
    {
        $event = $this->createEvent(null);
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $mainForm */
        $mainForm = $event->getForm();
        $mainForm->expects($this->once())
            ->method('isValid')
            ->willReturn(true);

        $this->defaultProductUnitProvider->expects($this->never())->method($this->anything());

        $this->extension->onPostSubmit($event);
    }

    public function testOnPostSubmitInvalidForm()
    {
        $event = $this->createEvent($this->createCategory());
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $mainForm */
        $mainForm = $event->getForm();
        $mainForm->expects($this->once())
            ->method('isValid')
            ->willReturn(false);

        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $categoryForm */
        $categoryForm = $mainForm->get('category');
        $categoryForm->expects($this->never())->method('getData');

        $this->defaultProductUnitProvider->expects($this->never())->method($this->anything());

        $this->extension->onPostSubmit($event);
    }

    public function testOnPostSubmitWithCategory()
    {
        $category = $this->createCategory(1);
        $event   = $this->createEvent($category);
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $mainForm */
        $mainForm = $event->getForm();
        $mainForm->expects($this->once())
            ->method('isValid')
            ->willReturn(true);

        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $categoryForm */
        $categoryForm = $mainForm->get('category');
        $categoryForm->expects($this->once())
            ->method('getData')
            ->willReturn($category);

        $this->defaultProductUnitProvider->expects($this->once())
            ->method('setCategory')
            ->with($category);

        $this->extension->onPostSubmit($event);
    }

    /**
     * @param mixed $data
     *
     * @return FormEvent
     */
    protected function createEvent($data)
    {
        $categoryForm = $this->createMock('Symfony\Component\Form\FormInterface');

        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $mainForm */
        $mainForm = $this->createMock('Symfony\Component\Form\FormInterface');
        $mainForm->expects($this->any())
            ->method('get')
            ->with('category')
            ->willReturn($categoryForm);

        return new FormEvent($mainForm, $data);
    }

    /**
     * @param int|null $id
     *
     * @return Category
     */
    protected function createCategory($id = null)
    {
        return $this->getEntity('Oro\Bundle\CatalogBundle\Entity\Category', ['id' => $id]);
    }
}
