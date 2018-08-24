<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\EventListener;

use Symfony\Component\Form\FormView;

use Oro\Component\Testing\Unit\FormViewListenerTestCase;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;
use Oro\Bundle\UIBundle\View\ScrollData;
use Oro\Bundle\CatalogBundle\Entity\Repository\CategoryRepository;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\EventListener\FormViewListener;
use Oro\Bundle\ProductBundle\Entity\Product;

class FormViewListenerTest extends FormViewListenerTestCase
{
    /**
     * @var FormViewListener
     */
    protected $listener;

    protected function setUp()
    {
        parent::setUp();
        $this->listener = new FormViewListener($this->translator, $this->doctrineHelper);
    }

    protected function tearDown()
    {
        unset($this->listener);
        parent::tearDown();
    }

    public function testOnProductEdit()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|\Twig_Environment $env */
        $env = $this->createMock(\Twig_Environment::class);

        $formView = new FormView();

        $env->expects($this->once())
            ->method('render')
            ->with('OroCatalogBundle:Product:category_update.html.twig', ['form' => $formView])
            ->willReturn('');

        $event = new BeforeListRenderEvent($env, new ScrollData(), new Product(), $formView);
        $this->listener->onProductEdit($event);
    }

    public function testOnProductView()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|CategoryRepository $repository */
        $repository = $this->getMockBuilder(CategoryRepository::class)
            ->disableOriginalConstructor()
            ->setMethods(['findOneByProduct'])
            ->getMock();

        $product = new Product();
        $category = new Category();

        $repository
            ->expects($this->once())
            ->method('findOneByProduct')
            ->with($product)
            ->willReturn($category);

        $this->doctrineHelper
            ->expects($this->once())
            ->method('getEntityRepository')
            ->with('OroCatalogBundle:Category')
            ->willReturn($repository);

        /** @var \PHPUnit_Framework_MockObject_MockObject|\Twig_Environment $env */
        $env = $this->createMock(\Twig_Environment::class);
        $env->expects($this->once())
            ->method('render')
            ->with('OroCatalogBundle:Product:category_view.html.twig', ['entity' => $category])
            ->willReturn('');

        $scrollData = $this->getPreparedScrollData();

        $event = new BeforeListRenderEvent($env, $scrollData, new Product());

        $this->listener->onProductView($event);
        $this->assertScrollData($scrollData);
    }

    public function testOnProductViewWithoutCategory()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|CategoryRepository $repository */
        $repository = $this->getMockBuilder(CategoryRepository::class)
            ->disableOriginalConstructor()
            ->setMethods(['findOneByProduct'])
            ->getMock();

        $product = new Product();

        $repository
            ->expects($this->once())
            ->method('findOneByProduct')
            ->with($product)
            ->willReturn(null);

        $this->doctrineHelper
            ->expects($this->once())
            ->method('getEntityRepository')
            ->with('OroCatalogBundle:Category')
            ->willReturn($repository);

        /** @var \PHPUnit_Framework_MockObject_MockObject|\Twig_Environment $env */
        $env = $this->createMock(\Twig_Environment::class);
        $env->expects($this->never())
            ->method('render');

        $event = new BeforeListRenderEvent($env, new ScrollData(), new Product());

        $this->listener->onProductView($event);
    }

    /**
     * @expectedException \Oro\Component\Exception\UnexpectedTypeException
     */
    public function testOnProductViewInvalidEntity()
    {
        $env = $this->createMock(\Twig_Environment::class);
        $scrollData = new ScrollData();

        $event = new BeforeListRenderEvent($env, $scrollData, new \stdClass());

        $this->listener->onProductView($event);
    }

    /**
     * @return ScrollData
     */
    protected function getPreparedScrollData()
    {
        $data[ScrollData::DATA_BLOCKS][FormViewListener::GENERAL_BLOCK][ScrollData::SUB_BLOCKS][0][ScrollData::DATA] = [
            'productName' => [],
        ];

        return new ScrollData($data);
    }

    /**
     * @param ScrollData $scrollData
     */
    private function assertScrollData(ScrollData $scrollData)
    {
        $data = $scrollData->getData();
        $generalBlockData = $data[ScrollData::DATA_BLOCKS][FormViewListener::GENERAL_BLOCK][ScrollData::SUB_BLOCKS]
            [0][ScrollData::DATA];

        $this->assertArrayHasKey('productName', $generalBlockData);
        $this->assertArrayHasKey(FormViewListener::CATEGORY_FIELD, $generalBlockData);

        reset($generalBlockData);
        $this->assertEquals(FormViewListener::CATEGORY_FIELD, key($generalBlockData), 'Category not a first element');
    }
}
