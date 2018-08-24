<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Subresource\GetSubresource;

use Oro\Bundle\ApiBundle\Config\CustomizeLoadedDataConfigExtra;
use Oro\Bundle\ApiBundle\Config\DataTransformersConfigExtra;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfigExtra;
use Oro\Bundle\ApiBundle\Config\FiltersConfigExtra;
use Oro\Bundle\ApiBundle\Config\SortersConfigExtra;
use Oro\Bundle\ApiBundle\Processor\Subresource\GetSubresource\InitializeConfigExtras;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Subresource\GetSubresourceProcessorTestCase;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\TestConfigExtra;

class InitializeConfigExtrasTest extends GetSubresourceProcessorTestCase
{
    /** @var InitializeConfigExtras */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->processor = new InitializeConfigExtras();
    }

    public function testProcessWhenConfigExtrasAreAlreadyInitialized()
    {
        $this->context->setConfigExtras([]);
        $this->context->addConfigExtra(new EntityDefinitionConfigExtra());

        $this->context->setAction('test_action');
        $this->processor->process($this->context);

        $this->assertEquals(
            [new EntityDefinitionConfigExtra()],
            $this->context->getConfigExtras()
        );
    }

    public function testProcessForToOneAssociation()
    {
        $existingExtra = new TestConfigExtra('test');
        $this->context->addConfigExtra($existingExtra);

        $this->context->setAction('test_action');
        $this->context->setParentClassName('Test\ParentClass');
        $this->context->setAssociationName('test_association');
        $this->processor->process($this->context);

        $this->assertEquals(
            [
                new TestConfigExtra('test'),
                new EntityDefinitionConfigExtra(
                    $this->context->getAction(),
                    $this->context->isCollection(),
                    $this->context->getParentClassName(),
                    $this->context->getAssociationName()
                ),
                new CustomizeLoadedDataConfigExtra(),
                new DataTransformersConfigExtra()
            ],
            $this->context->getConfigExtras()
        );
    }

    public function testProcessForToManyAssociation()
    {
        $existingExtra = new TestConfigExtra('test');
        $this->context->addConfigExtra($existingExtra);

        $this->context->setAction('test_action');
        $this->context->setParentClassName('Test\ParentClass');
        $this->context->setAssociationName('test_association');
        $this->context->setIsCollection(true);
        $this->processor->process($this->context);

        $this->assertEquals(
            [
                new TestConfigExtra('test'),
                new EntityDefinitionConfigExtra(
                    $this->context->getAction(),
                    $this->context->isCollection(),
                    $this->context->getParentClassName(),
                    $this->context->getAssociationName()
                ),
                new CustomizeLoadedDataConfigExtra(),
                new DataTransformersConfigExtra(),
                new FiltersConfigExtra(),
                new SortersConfigExtra()
            ],
            $this->context->getConfigExtras()
        );
    }
}
