<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\Form\Handler;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\FormBundle\Event\FormHandler\AfterFormProcessEvent;
use Oro\Component\Testing\Unit\FormHandlerTestCase;
use Oro\Bundle\CatalogBundle\Tests\Unit\Entity\Stub\Category;
use Oro\Bundle\CatalogBundle\Form\Handler\CategoryHandler;
use Oro\Bundle\ProductBundle\Entity\Product;

class CategoryHandlerTest extends FormHandlerTestCase
{
    /**
     * @var Category
     */
    protected $entity;

    /** @var  EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $eventDispatcher;

    protected function setUp()
    {
        parent::setUp();
        $this->eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $this->entity = $this->createMock(Category::class);
        $this->handler = new CategoryHandler($this->form, $this->request, $this->manager, $this->eventDispatcher);
    }

    /**
     * @dataProvider supportedMethods
     *
     * @param string $method
     * @param boolean $isValid
     * @param boolean $isProcessed
     */
    public function testProcessSupportedRequest($method, $isValid, $isProcessed)
    {
        $this->form->expects($this->once())
            ->method('setData')
            ->with($this->entity);

        $this->form->expects($this->any())
            ->method('isValid')
            ->will($this->returnValue($isValid));

        if ($isValid) {
            $this->assertAppendRemoveProducts();
            $this->assertCategoryUnitPrecisionUpdate();
        }

        $this->request->setMethod($method);

        $this->form->expects($this->once())
            ->method('submit')
            ->with($this->request);

        $this->mockProductCategory();

        $this->assertEquals($isProcessed, $this->handler->process($this->entity));
    }

    public function testProcessValidData()
    {
        $event = new AfterFormProcessEvent($this->form, $this->entity);
        $this->eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with('oro_catalog.category.edit', $event);

        $this->form->expects($this->once())
            ->method('setData')
            ->with($this->entity);

        $this->request->setMethod('POST');

        $this->form->expects($this->once())
            ->method('submit')
            ->with($this->request);

        $this->form->expects($this->once())
            ->method('isValid')
            ->will($this->returnValue(true));

        $this->assertAppendRemoveProducts();
        $this->assertCategoryUnitPrecisionUpdate();

        $this->mockProductCategory();

        $this->manager->expects($this->any())
            ->method('persist');

        $this->manager->expects($this->any())
            ->method('flush');

        $this->assertTrue($this->handler->process($this->entity));
    }

    protected function assertAppendRemoveProducts()
    {
        $this->eventDispatcher->expects($this->once())->method('dispatch')->with(
            'oro_catalog.category.edit',
            new AfterFormProcessEvent($this->form, $this->entity)
        );
        $appendProducts = $this->getMockBuilder('Symfony\Component\Form\Form')
            ->disableOriginalConstructor()
            ->getMock();

        $appendProducts->expects($this->once())
            ->method('getData')
            ->will($this->returnValue([new Product()]));

        $this->form->expects($this->at(3))
            ->method('get')
            ->with('appendProducts')
            ->will($this->returnValue($appendProducts));

        $removeProducts = $this->getMockBuilder('Symfony\Component\Form\Form')
            ->disableOriginalConstructor()
            ->getMock();

        $removeProducts->expects($this->once())
            ->method('getData')
            ->will($this->returnValue([new Product()]));

        $this->form->expects($this->at(4))
            ->method('get')
            ->with('removeProducts')
            ->will($this->returnValue($removeProducts));
    }

    protected function mockProductCategory()
    {
        $category = new Category();
        $categoryRepository = $this
            ->getMockBuilder('Oro\Bundle\CatalogBundle\Entity\Repository\CategoryRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $categoryRepository->expects($this->any())
            ->method('findOneByProduct')
            ->will($this->returnValue($category));
        $this->manager->expects($this->any())
            ->method('getRepository')
            ->with('OroCatalogBundle:Category')
            ->will($this->returnValue($categoryRepository));
    }
    
    protected function assertCategoryUnitPrecisionUpdate()
    {
        $defaultProductOptions = $this->createMock('Oro\Bundle\CatalogBundle\Entity\CategoryDefaultProductOptions');
        $defaultProductOptions->expects($this->once())
            ->method('updateUnitPrecision');
        $this->entity->expects($this->any())
            ->method('getDefaultProductOptions')
            ->will($this->returnValue($defaultProductOptions));
    }
}
