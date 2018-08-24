<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;
use Oro\Bundle\UIBundle\View\ScrollData;
use Oro\Component\Testing\Unit\FormViewListenerTestCase;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ShippingBundle\Entity\ProductShippingOptions;
use Oro\Bundle\ShippingBundle\EventListener\FormViewListener;
use Oro\Bundle\ShippingBundle\Model\ShippingOrigin;
use Oro\Bundle\ShippingBundle\Provider\ShippingOriginProvider;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 */
class FormViewListenerTest extends FormViewListenerTestCase
{
    /** @var Request|\PHPUnit_Framework_MockObject_MockObject */
    protected $request;

    /** @var RequestStack|\PHPUnit_Framework_MockObject_MockObject */
    protected $requestStack;

    /** @var ShippingOriginProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $shippingOriginProvider;

    /** @var FormViewListener */
    protected $listener;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->shippingOriginProvider = $this
            ->getMockBuilder('Oro\Bundle\ShippingBundle\Provider\ShippingOriginProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->request = $this->getRequest();

        $this->requestStack = $this->createMock('Symfony\Component\HttpFoundation\RequestStack');

        $this->listener = new FormViewListener(
            $this->translator,
            $this->doctrineHelper,
            $this->requestStack
        );
    }

    public function testOnProductViewWithoutRequest()
    {
        $this->requestStack->expects($this->once())
            ->method('getCurrentRequest')
            ->willReturn(null);

        $event = $this->getBeforeListRenderEventMock();
        $event->expects($this->never())
            ->method('getScrollData');

        $this->listener->onProductView($event);
    }

    public function testOnProductViewWithEmptyRequest()
    {
        $this->requestStack->expects($this->once())
            ->method('getCurrentRequest')
            ->willReturn($this->request);

        $event = $this->getBeforeListRenderEventMock();
        $event->expects($this->never())
            ->method('getScrollData');

        $this->listener->onProductView($event);
    }

    public function testOnProductViewWithoutProduct()
    {
        $this->requestStack->expects($this->once())->method('getCurrentRequest')->willReturn($this->request);
        $this->request->expects($this->once())->method('get')->with('id')->willReturn(42);

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityReference')
            ->with('OroProductBundle:Product', 42)
            ->willReturn(null);

        $event = $this->getBeforeListRenderEventMock();
        $event->expects($this->never())->method('getScrollData');

        $this->listener->onProductView($event);
    }

    public function testOnProductViewWithEmptyShippingOptions()
    {
        $this->requestStack->expects($this->once())
            ->method('getCurrentRequest')
            ->willReturn($this->request);

        $this->request->expects($this->once())
            ->method('get')
            ->with('id')
            ->willReturn(47);

        $product = new Product();

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityReference')
            ->with('OroProductBundle:Product', 47)
            ->willReturn($product);

        $mockRepo = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $mockRepo->expects($this->once())
            ->method('findBy')
            ->with(['product' => 47])
            ->willReturn([]);

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepositoryForClass')
            ->with('OroShippingBundle:ProductShippingOptions')
            ->willReturn($mockRepo);

        $event = $this->getBeforeListRenderEventMock();
        $event->expects($this->never())->method('getScrollData');

        $this->listener->onProductView($event);
    }

    public function testOnProductView()
    {
        $this->requestStack->expects($this->once())
            ->method('getCurrentRequest')
            ->willReturn($this->request);

        $this->request->expects($this->once())
            ->method('get')
            ->with('id')
            ->willReturn(47);

        $product = new Product();

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityReference')
            ->with('OroProductBundle:Product', 47)
            ->willReturn($product);

        $mockRepo = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $mockRepo->expects($this->once())
            ->method('findBy')
            ->with(['product' => 47])
            ->willReturn(
                [
                    new ProductShippingOptions(),
                    new ProductShippingOptions(),
                ]
            );

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepositoryForClass')
            ->with('OroShippingBundle:ProductShippingOptions')
            ->willReturn($mockRepo);

        $renderedHtml = 'rendered_html';

        /** @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject $twig */
        $twig = $this->getMockBuilder('\Twig_Environment')->disableOriginalConstructor()->getMock();
        $twig->expects($this->once())
            ->method('render')
            ->with(
                'OroShippingBundle:Product:shipping_options_view.html.twig',
                [
                    'entity' => $product,
                    'shippingOptions' => [new ProductShippingOptions(), new ProductShippingOptions()]
                ]
            )
            ->willReturn($renderedHtml);

        $event = new BeforeListRenderEvent($twig, $this->getScrollData(), new \stdClass());

        $this->listener->onProductView($event);

        $scrollData = $event->getScrollData()->getData();
        $this->assertEquals(
            [$renderedHtml],
            $scrollData[ScrollData::DATA_BLOCKS][1][ScrollData::SUB_BLOCKS][0][ScrollData::DATA]
        );
    }

    public function testOnProductEdit()
    {
        $renderedHtml = 'rendered_html';

        /** @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject $twig */
        $twig = $this->getMockBuilder('\Twig_Environment')->disableOriginalConstructor()->getMock();
        $twig->expects($this->once())->method('render')->willReturn($renderedHtml);

        $event = new BeforeListRenderEvent($twig, $this->getScrollData(), new \stdClass());

        $this->listener->onProductEdit($event);

        $scrollData = $event->getScrollData()->getData();
        $this->assertEquals(
            [$renderedHtml],
            $scrollData[ScrollData::DATA_BLOCKS][1][ScrollData::SUB_BLOCKS][0][ScrollData::DATA]
        );
    }

    /**
     * @return ScrollData
     */
    protected function getScrollData()
    {
        return new ScrollData([
            ScrollData::DATA_BLOCKS => [
                [
                    ScrollData::SUB_BLOCKS => [
                        [
                            ScrollData::DATA => []
                        ]
                    ]
                ]
            ]
        ]);
    }
}
