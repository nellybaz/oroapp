<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\Twig;

use Oro\Bundle\OrderBundle\Formatter\ShippingTrackingFormatter;
use Oro\Bundle\OrderBundle\Formatter\SourceDocumentFormatter;
use Oro\Bundle\OrderBundle\Twig\OrderExtension;
use Symfony\Component\DependencyInjection\ContainerInterface;

class OrderExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ContainerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $container;

    /**
     * @var OrderExtension
     */
    private $orderExtension;

    protected function setUp()
    {
        $this->container = $this->createMock(ContainerInterface::class);
        $this->orderExtension = new OrderExtension($this->container);
    }

    public function testGetFilters()
    {
        $filters = $this->orderExtension->getFilters();
        $this->assertCount(1, $filters);
        $this->assertInstanceOf(\Twig_SimpleFilter::class, $filters[0]);
    }

    public function testGetFunctions()
    {
        $filters = $this->orderExtension->getFunctions();

        $this->assertCount(3, $filters);
        $this->assertInstanceOf(\Twig_SimpleFunction::class, $filters[0]);
        $this->assertInstanceOf(\Twig_SimpleFunction::class, $filters[1]);
        $this->assertInstanceOf(\Twig_SimpleFunction::class, $filters[2]);
    }

    public function testGetName()
    {
        $this->assertEquals('oro_order_order', $this->orderExtension->getName());
    }

    public function testGetTemplateContent()
    {
        /** @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject $environment **/
        $environment = $this->createMock(\Twig_Environment::class);

        $context = ['parameter' => 'value'];
        $content = 'html conten';
        /** @var \Twig_Template|\PHPUnit_Framework_MockObject_MockObject $template */
        $template = $this->createMock(\Twig_Template::class);
        $template
            ->expects($this->once())
            ->method('render')
            ->with($context)
            ->willReturn($content);

        $templateName = 'some:name';
        $environment
            ->expects($this->once())
            ->method('resolveTemplate')
            ->with($templateName)
            ->willReturn($template);

        $this->assertEquals($content, $this->orderExtension->getTemplateContent($environment, $templateName, $context));
    }

    public function testFormatSourceDocument()
    {
        $sourceEntityClass = 'entityClas';
        $sourceEntityId = 77;
        $sourceEntityIdentifier = 'id';
        $formattedData = 'html data';

        /** @var SourceDocumentFormatter|\PHPUnit_Framework_MockObject_MockObject $sourceDocumentFormatter */
        $sourceDocumentFormatter = $this->createMock(SourceDocumentFormatter::class);
        $sourceDocumentFormatter
            ->expects($this->once())
            ->method('format')
            ->with($sourceEntityClass, $sourceEntityId, $sourceEntityIdentifier)
            ->willReturn($formattedData);

        $this->container
            ->expects($this->once())
            ->method('get')
            ->with('oro_order.formatter.source_document')
            ->willReturn($sourceDocumentFormatter);

        $this->assertEquals(
            $formattedData,
            $this->orderExtension->formatSourceDocument($sourceEntityClass, $sourceEntityId, $sourceEntityIdentifier)
        );
    }

    public function testFormatShippingTrackingMethod()
    {
        $shippingMethodName = 'shippingMethod';
        $formattedMethod = 'shipping method';

        /** @var ShippingTrackingFormatter|\PHPUnit_Framework_MockObject_MockObject $shippingTrackingFormatter */
        $shippingTrackingFormatter = $this->createMock(ShippingTrackingFormatter::class);
        $shippingTrackingFormatter
            ->expects($this->once())
            ->method('formatShippingTrackingMethod')
            ->with($shippingMethodName)
            ->willReturn($formattedMethod);

        $this->container
            ->expects($this->once())
            ->method('get')
            ->with('oro_order.formatter.shipping_tracking')
            ->willReturn($shippingTrackingFormatter);

        $this->assertEquals(
            $formattedMethod,
            $this->orderExtension->formatShippingTrackingMethod($shippingMethodName)
        );
    }

    public function testFormatShippingTrackingLink()
    {
        $shippingMethodName = 'shippingMethod';
        $trackingNumber = '7s45';
        $formattedLink = 'shipping link';

        /** @var ShippingTrackingFormatter|\PHPUnit_Framework_MockObject_MockObject $shippingTrackingFormatter */
        $shippingTrackingFormatter = $this->createMock(ShippingTrackingFormatter::class);
        $shippingTrackingFormatter
            ->expects($this->once())
            ->method('formatShippingTrackingLink')
            ->with($shippingMethodName, $trackingNumber)
            ->willReturn($formattedLink);

        $this->container
            ->expects($this->once())
            ->method('get')
            ->with('oro_order.formatter.shipping_tracking')
            ->willReturn($shippingTrackingFormatter);

        $this->assertEquals(
            $formattedLink,
            $this->orderExtension->formatShippingTrackingLink($shippingMethodName, $trackingNumber)
        );
    }
}
