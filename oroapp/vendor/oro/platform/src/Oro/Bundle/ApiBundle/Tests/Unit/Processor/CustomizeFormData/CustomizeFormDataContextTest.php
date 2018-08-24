<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\CustomizeFormData;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Processor\CustomizeFormData\CustomizeFormDataContext;

class CustomizeFormDataContextTest extends \PHPUnit_Framework_TestCase
{
    /** @var CustomizeFormDataContext */
    protected $context;

    protected function setUp()
    {
        $this->context = new CustomizeFormDataContext();
    }

    public function testRootClassName()
    {
        $this->assertNull($this->context->getRootClassName());

        $this->context->setRootClassName('Test\Class');
        $this->assertEquals('Test\Class', $this->context->getRootClassName());
    }

    public function testClassName()
    {
        $this->assertNull($this->context->getClassName());

        $this->context->setClassName('Test\Class');
        $this->assertEquals('Test\Class', $this->context->getClassName());
    }

    public function testPropertyPath()
    {
        $this->assertNull($this->context->getPropertyPath());

        $this->context->setPropertyPath('field1.field11');
        $this->assertEquals('field1.field11', $this->context->getPropertyPath());
    }

    public function testRootConfig()
    {
        $this->assertNull($this->context->getRootConfig());

        $config = new EntityDefinitionConfig();
        $this->context->setConfig($config);
        $this->assertNull($this->context->getRootConfig());

        $this->context->setPropertyPath('test');
        $this->assertSame($config, $this->context->getRootConfig());
    }

    public function testConfigForKnownField()
    {
        $this->assertNull($this->context->getConfig());

        $config = new EntityDefinitionConfig();
        $config
            ->addField('field1')
            ->createAndSetTargetEntity()
            ->addField('field11')
            ->createAndSetTargetEntity();

        $this->context->setConfig($config);
        $this->assertSame($config, $this->context->getConfig());

        $this->context->setPropertyPath('field1.field11');
        $this->assertSame(
            $config->getField('field1')->getTargetEntity()->getField('field11')->getTargetEntity(),
            $this->context->getConfig()
        );
    }

    public function testConfigForUnknownField()
    {
        $this->assertNull($this->context->getConfig());

        $config = new EntityDefinitionConfig();
        $config->addField('field1');

        $this->context->setConfig($config);
        $this->assertSame($config, $this->context->getConfig());

        $this->context->setPropertyPath('unknownField.field11');
        $this->assertNull($this->context->getConfig());
    }

    public function testConfigForExcludedField()
    {
        $this->assertNull($this->context->getConfig());

        $config = new EntityDefinitionConfig();
        $config
            ->addField('field1')
            ->createAndSetTargetEntity()
            ->addField('field11')
            ->createAndSetTargetEntity();
        $config->getField('field1')->setExcluded();

        $this->context->setConfig($config);
        $this->assertSame($config, $this->context->getConfig());

        $this->context->setPropertyPath('field1.field11');
        $this->assertSame(
            $config->getField('field1')->getTargetEntity()->getField('field11')->getTargetEntity(),
            $this->context->getConfig()
        );
    }

    public function testForm()
    {
        $this->assertNull($this->context->getForm());

        $form = $this->createMock('Symfony\Component\Form\Test\FormInterface');
        $this->context->setForm($form);
        $this->assertSame($form, $this->context->getForm());
    }
}
