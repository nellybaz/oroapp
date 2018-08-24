<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor;

use Doctrine\Common\Annotations\AnnotationReader;

use Oro\Bundle\ApiBundle\Provider\ConfigProvider;
use Oro\Bundle\ApiBundle\Provider\MetadataProvider;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormExtensionInterface;
use Symfony\Component\Form\Forms;
use Symfony\Component\Validator\Validation;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfigExtra;
use Oro\Bundle\ApiBundle\Processor\FormContext;
use Oro\Bundle\ApiBundle\Processor\SingleItemContext;
use Oro\Bundle\ApiBundle\Request\RequestType;

class FormProcessorTestCase extends \PHPUnit_Framework_TestCase
{
    const TEST_VERSION      = '1.1';
    const TEST_REQUEST_TYPE = RequestType::REST;

    /** @var FormContext|SingleItemContext */
    protected $context;

    /** @var ConfigProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $configProvider;

    /** @var MetadataProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $metadataProvider;

    protected function setUp()
    {
        $this->configProvider   = $this->getMockBuilder('Oro\Bundle\ApiBundle\Provider\ConfigProvider')
            ->disableOriginalConstructor()
            ->getMock();
        $this->metadataProvider = $this->getMockBuilder('Oro\Bundle\ApiBundle\Provider\MetadataProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->context = $this->createContext();
        $this->context->setVersion(self::TEST_VERSION);
        $this->context->getRequestType()->add(self::TEST_REQUEST_TYPE);
        $this->context->setConfigExtras(
            [
                new EntityDefinitionConfigExtra($this->context->getAction())
            ]
        );
    }

    /**
     * @return FormContext
     */
    protected function createContext()
    {
        return new FormContextStub($this->configProvider, $this->metadataProvider);
    }

    /**
     * @param FormExtensionInterface[] $extensions
     *
     * @return FormBuilder
     */
    protected function createFormBuilder(array $extensions = [])
    {
        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtensions(array_merge($this->getFormExtensions(), $extensions))
            ->getFormFactory();
        $dispatcher = $this->createMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        return new FormBuilder(null, null, $dispatcher, $formFactory);
    }

    /**
     * @return FormExtensionInterface[]
     */
    protected function getFormExtensions()
    {
        $validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping(new AnnotationReader())
            ->getValidator();

        return [new ValidatorExtension($validator)];
    }
}
