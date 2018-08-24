<?php

namespace Oro\Bundle\ApiBundle\Tests\Functional;

use Symfony\Component\Form\FormInterface;

use Oro\Bundle\ApiBundle\Form\FormHelper;
use Oro\Bundle\ApiBundle\Form\Guesser\MetadataTypeGuesser;
use Oro\Bundle\ApiBundle\Form\FormExtensionSwitcherInterface;
use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Metadata\FieldMetadata;
use Oro\Bundle\ApiBundle\Metadata\MetadataAccessorInterface;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class FormTest extends WebTestCase
{
    const TEST_CLASS = 'Oro\Bundle\ApiBundle\Tests\Functional\TestObject';

    protected function setUp()
    {
        $this->initClient();
    }

    protected function tearDown()
    {
        $this->switchToDefaultFormExtension();
        $this->setMetadataAccessor();
        parent::tearDown();
    }

    public function testDefaultForm()
    {
        $form = $this->getForm(['csrf_protection' => false]);
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['id' => 123, 'title' => 'test']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertTrue($form->isValid(), 'isValid');

        self::assertSame(123, $object->getId());
        self::assertSame('test', $object->getTitle());
    }

    public function testApiForm()
    {
        $this->switchToApiFormExtension();

        $form = $this->getForm();
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['id' => 123, 'title' => 'test']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertTrue($form->isValid(), 'isValid');

        self::assertSame(123, $object->getId());
        self::assertSame('test', $object->getTitle());
    }

    public function testDefaultFormValidation()
    {
        $form = $this->getForm(['csrf_protection' => false]);
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['id' => 123, 'title' => '']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertFalse($form->isValid(), 'isValid');
    }

    public function testApiFormValidation()
    {
        $this->switchToApiFormExtension();

        $form = $this->getForm();
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['id' => 123, 'title' => '']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertFalse($form->isValid(), 'isValid');
    }

    public function testValidationConstraintFromAllGroups()
    {
        $this->switchToApiFormExtension();

        $form = $this->getForm();
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['id' => 123, 'title' => 'test', 'description' => '12']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertTrue($form->isValid(), 'isValid');
    }

    public function testValidationConstraintFromApiGroup()
    {
        $this->switchToApiFormExtension();

        $form = $this->getForm(['validation_groups' => ['Default', 'api']]);
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['id' => 123, 'title' => 'test', 'description' => '1234']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertFalse($form->isValid(), 'isValid');
    }

    public function testValidationConstraintFromUiGroup()
    {
        $this->switchToApiFormExtension();

        $form = $this->getForm(['validation_groups' => ['Default', 'ui']]);
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['id' => 123, 'title' => 'test', 'description' => '1234']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertTrue($form->isValid(), 'isValid');
    }

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException
     */
    public function testApiFormShouldNotHaveCsrfExtension()
    {
        $this->switchToApiFormExtension();

        $this->getForm(['csrf_protection' => false]);
    }

    public function testApiFormWithGuessedTypes()
    {
        $this->switchToApiFormExtension();

        $metadata = $this->getEntityMetadata();
        $this->setMetadataAccessor(new TestMetadataAccessor([$metadata]));

        $form = $this->getFormWithGuessedTypes();
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['id' => 123, 'title' => 'test']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertTrue($form->isValid(), 'isValid');

        self::assertSame(123, $object->getId());
        self::assertSame('test', $object->getTitle());
    }

    public function testApiFormWithGuessedTypesAndPropertyPath()
    {
        $this->switchToApiFormExtension();

        $metadata = $this->getEntityMetadata();
        $metadata->setIdentifierFieldNames(['code']);
        $metadata->renameField('id', 'code');
        $this->setMetadataAccessor(new TestMetadataAccessor([$metadata]));

        $form = $this->getRootForm();
        $form->add('code', null, ['property_path' => 'id']);
        $form->add('title');
        $object = new TestObject();
        $form->setData($object);

        $form->submit(['code' => 123, 'title' => 'test']);
        self::assertTrue($form->isSubmitted(), 'isSubmitted');
        self::assertTrue($form->isValid(), 'isValid');

        self::assertSame(123, $object->getId());
        self::assertSame('test', $object->getTitle());
    }

    protected function switchToDefaultFormExtension()
    {
        /** @var FormExtensionSwitcherInterface $formExtensionSwitcher */
        $formExtensionSwitcher = $this->getContainer()->get('form.registry');
        $formExtensionSwitcher->switchToDefaultFormExtension();
    }

    protected function switchToApiFormExtension()
    {
        /** @var FormExtensionSwitcherInterface $formExtensionSwitcher */
        $formExtensionSwitcher = $this->getContainer()->get('form.registry');
        $formExtensionSwitcher->switchToApiFormExtension();
    }

    /**
     * @param MetadataAccessorInterface|null $metadataAccessor
     */
    protected function setMetadataAccessor(MetadataAccessorInterface $metadataAccessor = null)
    {
        /** @var MetadataTypeGuesser $metadataTypeGuesser */
        $metadataTypeGuesser = $this->getContainer()->get('oro_api.form.guesser.metadata');
        $metadataTypeGuesser->setMetadataAccessor($metadataAccessor);
    }

    /**
     * @param array $options
     *
     * @return FormInterface
     */
    protected function getForm(array $options = [])
    {
        $form = $this->getRootForm($options);
        $form->add('id', 'integer');
        $form->add('title', 'text');
        $form->add('description', 'text');

        return $form;
    }

    /**
     * @param array $options
     *
     * @return FormInterface
     */
    protected function getFormWithGuessedTypes(array $options = [])
    {
        $form = $this->getRootForm($options);
        $form->add('id');
        $form->add('title');

        return $form;
    }

    /**
     * @param array $options
     *
     * @return FormInterface
     */
    protected function getRootForm(array $options = [])
    {
        if (!isset($options['data_class'])) {
            $options['data_class'] = self::TEST_CLASS;
        }
        $options['extra_fields_message'] = FormHelper::EXTRA_FIELDS_MESSAGE;
        $form = $this->getContainer()->get('form.factory')->create($this->getType(), null, $options);

        return $form;
    }

    /**
     * @return EntityMetadata
     */
    protected function getEntityMetadata()
    {
        $metadata = new EntityMetadata();
        $metadata->setClassName(self::TEST_CLASS);
        $metadata->setIdentifierFieldNames(['id']);
        $idField = new FieldMetadata();
        $idField->setName('id');
        $idField->setDataType('integer');
        $idField->setIsNullable(true);
        $metadata->addField($idField);
        $titleField = new FieldMetadata();
        $titleField->setName('title');
        $titleField->setDataType('string');
        $titleField->setIsNullable(true);
        $metadata->addField($titleField);

        return $metadata;
    }

    /**
     * Provide backward compatibility between Symfony versions < 2.8 and 2.8+
     *
     * @return string
     */
    public function getType()
    {
        return method_exists('Symfony\Component\Form\AbstractType', 'getBlockPrefix')
            ? 'Symfony\Component\Form\Extension\Core\Type\FormType'
            : 'form';
    }
}
