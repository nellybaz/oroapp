<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor;

use Oro\Bundle\ApiBundle\Collection\IncludedEntityCollection;
use Oro\Bundle\ApiBundle\Processor\FormContext;

class FormContextTest extends \PHPUnit_Framework_TestCase
{
    /** @var FormContext */
    protected $context;

    protected function setUp()
    {
        $configProvider   = $this->getMockBuilder('Oro\Bundle\ApiBundle\Provider\ConfigProvider')
            ->disableOriginalConstructor()
            ->getMock();
        $metadataProvider = $this->getMockBuilder('Oro\Bundle\ApiBundle\Provider\MetadataProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->context = new FormContextStub($configProvider, $metadataProvider);
    }

    public function testRequestData()
    {
        $requestData = [];
        $this->context->setRequestData($requestData);
        $this->assertSame($requestData, $this->context->getRequestData());
    }

    public function testIncludedData()
    {
        $includedData = [];
        $this->context->setIncludedData($includedData);
        $this->assertSame($includedData, $this->context->getIncludedData());
    }

    public function testIncludedEntities()
    {
        $this->assertNull($this->context->getIncludedEntities());

        $includedEntities = $this->createMock(IncludedEntityCollection::class);
        $this->context->setIncludedEntities($includedEntities);
        $this->assertSame($includedEntities, $this->context->getIncludedEntities());

        $this->context->setIncludedEntities();
        $this->assertNull($this->context->getIncludedEntities());
    }

    public function testFormBuilder()
    {
        $formBuilder = $this->createMock('Symfony\Component\Form\FormBuilderInterface');

        $this->assertFalse($this->context->hasFormBuilder());
        $this->assertNull($this->context->getFormBuilder());

        $this->context->setFormBuilder($formBuilder);
        $this->assertTrue($this->context->hasFormBuilder());
        $this->assertSame($formBuilder, $this->context->getFormBuilder());

        $this->context->setFormBuilder();
        $this->assertFalse($this->context->hasFormBuilder());
        $this->assertNull($this->context->getFormBuilder());
    }

    public function testForm()
    {
        $form = $this->createMock('Symfony\Component\Form\FormInterface');

        $this->assertFalse($this->context->hasForm());
        $this->assertNull($this->context->getForm());

        $this->context->setForm($form);
        $this->assertTrue($this->context->hasForm());
        $this->assertSame($form, $this->context->getForm());

        $this->context->setForm();
        $this->assertFalse($this->context->hasForm());
        $this->assertNull($this->context->getForm());
    }
}
