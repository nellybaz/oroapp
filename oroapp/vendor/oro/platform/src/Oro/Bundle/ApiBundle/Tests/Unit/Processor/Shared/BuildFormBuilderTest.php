<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Shared;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Form\FormHelper;
use Oro\Bundle\ApiBundle\Metadata\AssociationMetadata;
use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Metadata\FieldMetadata;
use Oro\Bundle\ApiBundle\Processor\Shared\BuildFormBuilder;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\FormProcessorTestCase;
use Oro\Bundle\ApiBundle\Util\ConfigUtil;

class BuildFormBuilderTest extends FormProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $formFactory;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $container;

    /** @var BuildFormBuilder */
    protected $processor;

    public function setUp()
    {
        parent::setUp();

        $this->formFactory = $this->createMock(FormFactoryInterface::class);
        $this->container = $this->createMock(ContainerInterface::class);

        $this->processor = new BuildFormBuilder(new FormHelper($this->formFactory, $this->container));
    }

    /**
     * @param string $fieldName
     *
     * @return FieldMetadata
     */
    protected function createFieldMetadata($fieldName)
    {
        $fieldMetadata = new FieldMetadata();
        $fieldMetadata->setName($fieldName);

        return $fieldMetadata;
    }

    /**
     * @param string $associationName
     *
     * @return AssociationMetadata
     */
    protected function createAssociationMetadata($associationName)
    {
        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setName($associationName);

        return $associationMetadata;
    }

    public function testProcessWhenFormBuilderAlreadyExists()
    {
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $this->context->setFormBuilder($formBuilder);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }

    public function testProcessWhenFormAlreadyExists()
    {
        $form = $this->createMock(FormInterface::class);

        $this->context->setForm($form);
        $this->processor->process($this->context);
        $this->assertFalse($this->context->hasFormBuilder());
        $this->assertSame($form, $this->context->getForm());
    }

    public function testProcessForCustomForm()
    {
        $entityClass = 'Test\Entity';
        $formType = 'test_form';
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $config = new EntityDefinitionConfig();
        $config->setFormType($formType);
        $config->setFormOptions(['validation_groups' => ['Default', 'api', 'my_group']]);

        $this->formFactory->expects($this->once())
            ->method('createNamedBuilder')
            ->with(
                null,
                $formType,
                null,
                [
                    'data_class'           => $entityClass,
                    'validation_groups'    => ['Default', 'api', 'my_group'],
                    'extra_fields_message' => FormHelper::EXTRA_FIELDS_MESSAGE,
                    'api_context'          => $this->context
                ]
            )
            ->willReturn($formBuilder);
        $formBuilder->expects($this->never())
            ->method('add');

        $this->context->setClassName($entityClass);
        $this->context->setConfig($config);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testProcess()
    {
        $entityClass = 'Test\Entity';
        $data = new \stdClass();
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $config = new EntityDefinitionConfig();
        $config->addField('field1');
        $config->addField('field2')->setPropertyPath('realField2');
        $configField3 = $config->addField('field3');
        $configField3->setPropertyPath('realField3');
        $configField3->setFormType('text');
        $configField3->setFormOptions(['trim' => false]);
        $config->addField('association1');
        $config->addField('association2')->setPropertyPath('realAssociation2');
        $configAssociation3 = $config->addField('association3');
        $configAssociation3->setPropertyPath('realAssociation3');
        $configAssociation3->setFormType('text');
        $configAssociation3->setFormOptions(['trim' => false]);

        $metadata = new EntityMetadata();
        $metadata->addField($this->createFieldMetadata('field1'));
        $metadata->addField($this->createFieldMetadata('field2'))
            ->setPropertyPath('realField2');
        $metadata->addField($this->createFieldMetadata('field3'))
            ->setPropertyPath('realField3');
        $metadata->addAssociation($this->createAssociationMetadata('association1'));
        $metadata->addAssociation($this->createAssociationMetadata('association2'))
            ->setPropertyPath('realAssociation2');
        $metadata->addAssociation($this->createAssociationMetadata('association3'))
            ->setPropertyPath('realAssociation3');

        $this->formFactory->expects($this->once())
            ->method('createNamedBuilder')
            ->with(
                null,
                'form',
                $data,
                [
                    'data_class'           => $entityClass,
                    'validation_groups'    => ['Default', 'api'],
                    'extra_fields_message' => FormHelper::EXTRA_FIELDS_MESSAGE,
                    'api_context'          => $this->context
                ]
            )
            ->willReturn($formBuilder);

        $formBuilder->expects($this->at(0))
            ->method('add')
            ->with(
                'field1',
                null,
                []
            );
        $formBuilder->expects($this->at(1))
            ->method('add')
            ->with(
                'field2',
                null,
                ['property_path' => 'realField2']
            );
        $formBuilder->expects($this->at(2))
            ->method('add')
            ->with(
                'field3',
                'text',
                ['property_path' => 'realField3', 'trim' => false]
            );
        $formBuilder->expects($this->at(3))
            ->method('add')
            ->with(
                'association1',
                null,
                []
            );
        $formBuilder->expects($this->at(4))
            ->method('add')
            ->with(
                'association2',
                null,
                ['property_path' => 'realAssociation2']
            );
        $formBuilder->expects($this->at(5))
            ->method('add')
            ->with(
                'association3',
                'text',
                ['property_path' => 'realAssociation3', 'trim' => false]
            );

        $this->context->setClassName($entityClass);
        $this->context->setConfig($config);
        $this->context->setMetadata($metadata);
        $this->context->setResult($data);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }

    public function testProcessForIgnoredField()
    {
        $entityClass = 'Test\Entity';
        $data = new \stdClass();
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $config = new EntityDefinitionConfig();
        $config->addField('field1')
            ->setPropertyPath(ConfigUtil::IGNORE_PROPERTY_PATH);

        $metadata = new EntityMetadata();
        $metadata->addField($this->createFieldMetadata('field1'))
            ->setPropertyPath(ConfigUtil::IGNORE_PROPERTY_PATH);

        $this->formFactory->expects($this->once())
            ->method('createNamedBuilder')
            ->with(
                null,
                'form',
                $data,
                [
                    'data_class'           => $entityClass,
                    'validation_groups'    => ['Default', 'api'],
                    'extra_fields_message' => FormHelper::EXTRA_FIELDS_MESSAGE,
                    'api_context'          => $this->context
                ]
            )
            ->willReturn($formBuilder);

        $formBuilder->expects($this->once())
            ->method('add')
            ->with(
                'field1',
                null,
                ['mapped' => false]
            );

        $this->context->setClassName($entityClass);
        $this->context->setConfig($config);
        $this->context->setMetadata($metadata);
        $this->context->setResult($data);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }

    public function testProcessForFieldIgnoredOnlyForGetActions()
    {
        $entityClass = 'Test\Entity';
        $data = new \stdClass();
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $config = new EntityDefinitionConfig();
        $config->addField('field1')
            ->setPropertyPath(ConfigUtil::IGNORE_PROPERTY_PATH);

        $metadata = new EntityMetadata();
        $metadata->addField($this->createFieldMetadata('field1'));

        $this->formFactory->expects($this->once())
            ->method('createNamedBuilder')
            ->with(
                null,
                'form',
                $data,
                [
                    'data_class'           => $entityClass,
                    'validation_groups'    => ['Default', 'api'],
                    'extra_fields_message' => FormHelper::EXTRA_FIELDS_MESSAGE,
                    'api_context'          => $this->context
                ]
            )
            ->willReturn($formBuilder);

        $formBuilder->expects($this->once())
            ->method('add')
            ->with(
                'field1',
                null,
                []
            );

        $this->context->setClassName($entityClass);
        $this->context->setConfig($config);
        $this->context->setMetadata($metadata);
        $this->context->setResult($data);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }

    public function testProcessForIgnoredAssociation()
    {
        $entityClass = 'Test\Entity';
        $data = new \stdClass();
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $config = new EntityDefinitionConfig();
        $config->addField('association1')
            ->setPropertyPath(ConfigUtil::IGNORE_PROPERTY_PATH);

        $metadata = new EntityMetadata();
        $metadata->addAssociation($this->createAssociationMetadata('association1'))
            ->setPropertyPath(ConfigUtil::IGNORE_PROPERTY_PATH);

        $this->formFactory->expects($this->once())
            ->method('createNamedBuilder')
            ->with(
                null,
                'form',
                $data,
                [
                    'data_class'           => $entityClass,
                    'validation_groups'    => ['Default', 'api'],
                    'extra_fields_message' => FormHelper::EXTRA_FIELDS_MESSAGE,
                    'api_context'          => $this->context
                ]
            )
            ->willReturn($formBuilder);

        $formBuilder->expects($this->once())
            ->method('add')
            ->with(
                'association1',
                null,
                ['mapped' => false]
            );

        $this->context->setClassName($entityClass);
        $this->context->setConfig($config);
        $this->context->setMetadata($metadata);
        $this->context->setResult($data);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }

    public function testProcessForAssociationIgnoredOnlyForGetActions()
    {
        $entityClass = 'Test\Entity';
        $data = new \stdClass();
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $config = new EntityDefinitionConfig();
        $config->addField('association1')
            ->setPropertyPath(ConfigUtil::IGNORE_PROPERTY_PATH);

        $metadata = new EntityMetadata();
        $metadata->addAssociation($this->createAssociationMetadata('association1'));

        $this->formFactory->expects($this->once())
            ->method('createNamedBuilder')
            ->with(
                null,
                'form',
                $data,
                [
                    'data_class'           => $entityClass,
                    'validation_groups'    => ['Default', 'api'],
                    'extra_fields_message' => FormHelper::EXTRA_FIELDS_MESSAGE,
                    'api_context'          => $this->context
                ]
            )
            ->willReturn($formBuilder);

        $formBuilder->expects($this->once())
            ->method('add')
            ->with(
                'association1',
                null,
                []
            );

        $this->context->setClassName($entityClass);
        $this->context->setConfig($config);
        $this->context->setMetadata($metadata);
        $this->context->setResult($data);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }

    public function testProcessForCustomEventSubscriber()
    {
        $entityClass = 'Test\Entity';
        $data = new \stdClass();
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $eventSubscriberServiceId = 'test_event_subscriber';
        $eventSubscriber = $this->createMock(EventSubscriberInterface::class);

        $config = new EntityDefinitionConfig();
        $config->setFormEventSubscribers([$eventSubscriberServiceId]);

        $this->formFactory->expects($this->once())
            ->method('createNamedBuilder')
            ->with(
                null,
                'form',
                $data,
                [
                    'data_class'           => $entityClass,
                    'validation_groups'    => ['Default', 'api'],
                    'extra_fields_message' => FormHelper::EXTRA_FIELDS_MESSAGE,
                    'api_context'          => $this->context
                ]
            )
            ->willReturn($formBuilder);

        $this->container->expects($this->once())
            ->method('get')
            ->with($eventSubscriberServiceId)
            ->willReturn($eventSubscriber);

        $formBuilder->expects($this->once())
            ->method('addEventSubscriber')
            ->with($this->identicalTo($eventSubscriber));

        $this->context->setClassName($entityClass);
        $this->context->setConfig($config);
        $this->context->setMetadata(new EntityMetadata());
        $this->context->setResult($data);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }

    public function testProcessForCustomEventSubscriberInjectedAsService()
    {
        $entityClass = 'Test\Entity';
        $data = new \stdClass();
        $formBuilder = $this->createMock(FormBuilderInterface::class);

        $eventSubscriber = $this->createMock(EventSubscriberInterface::class);

        $config = new EntityDefinitionConfig();
        $config->setFormEventSubscribers([$eventSubscriber]);

        $this->formFactory->expects($this->once())
            ->method('createNamedBuilder')
            ->with(
                null,
                'form',
                $data,
                [
                    'data_class'           => $entityClass,
                    'validation_groups'    => ['Default', 'api'],
                    'extra_fields_message' => FormHelper::EXTRA_FIELDS_MESSAGE,
                    'api_context'          => $this->context
                ]
            )
            ->willReturn($formBuilder);

        $formBuilder->expects($this->once())
            ->method('addEventSubscriber')
            ->with($this->identicalTo($eventSubscriber));

        $this->context->setClassName($entityClass);
        $this->context->setConfig($config);
        $this->context->setMetadata(new EntityMetadata());
        $this->context->setResult($data);
        $this->processor->process($this->context);
        $this->assertSame($formBuilder, $this->context->getFormBuilder());
    }
}
