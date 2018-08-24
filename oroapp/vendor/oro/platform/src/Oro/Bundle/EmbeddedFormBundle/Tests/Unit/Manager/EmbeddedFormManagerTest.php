<?php

namespace Oro\Bundle\EmbeddedFormBundle\Tests\Unit\Manager;

use Oro\Bundle\EmbeddedFormBundle\Manager\EmbeddedFormManager;

class EmbeddedFormManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeConstructedWithContainerAndFormFactory()
    {
        new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
    }

    /**
     * @test
     */
    public function shouldCreateForm()
    {
        $type = 'type';
        $container = $this->createContainerMock();
        $formFactory = $this->createFormFactoryMock();
        $manager = new EmbeddedFormManager($container, $formFactory);

        $formInstance = new \stdClass();

        $formFactory->expects($this->once())
            ->method('create')
            ->with($type, null, [])
            ->will($this->returnValue($formInstance));

        $this->assertSame($formInstance, $manager->createForm($type));
    }

    /**
     * @test
     */
    public function shouldAllowToAddFormType()
    {
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $type = uniqid();
        $manager->addFormType($type);
    }

    /**
     * @test
     */
    public function shouldAllowToAddFormTypeWithLabel()
    {
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $type = uniqid();
        $label = uniqid('label');
        $manager->addFormType($type, $label);
    }

    /**
     * @test
     */
    public function shouldReturnEmptyLabelForNotAddedType()
    {
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $type = uniqid();
        $this->assertNull($manager->getLabelByType($type));
    }

    /**
     * @test
     */
    public function shouldReturnLabelForAddedType()
    {
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $type = uniqid();
        $label = uniqid('label');
        $manager->addFormType($type, $label);
        $this->assertEquals($label, $manager->getLabelByType($type));
    }


    /**
     * @test
     */
    public function shouldReturnTypeAsLabelForAddedTypeWithoutLabel()
    {
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $type = uniqid();
        $manager->addFormType($type);
        $this->assertEquals($type, $manager->getLabelByType($type));
    }

    /**
     * @test
     */
    public function shouldReturnAllAddedTypes()
    {
        $types = [
            $type1 = uniqid('type') => uniqid('label'),
            $type2 = uniqid('type') => uniqid('label'),
        ];
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $manager->addFormType($type1, $types[$type1]);
        $manager->addFormType($type2, $types[$type2]);

        $this->assertEquals($types, $manager->getAll());
    }

    /**
     * @test
     */
    public function shouldReturnEmptyDefaultCss()
    {
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $this->assertEquals('', $manager->getDefaultCssByType(uniqid('type')));
    }

    /**
     * @test
     */
    public function shouldReturnDefaultCss()
    {
        $type = 'type';
        $typeInstance = $this->createMock('Oro\Bundle\EmbeddedFormBundle\Form\Type\EmbeddedFormInterface');
        $container = $this->createContainerMock($typeInstance);
        $formFactory = $this->createFormFactoryMock();
        $defaultCss = 'my default css';

        $typeInstance->expects($this->once())
            ->method('getDefaultCss')
            ->will($this->returnValue($defaultCss));

        $manager = new EmbeddedFormManager($container, $formFactory);
        $this->assertEquals($defaultCss, $manager->getDefaultCssByType($type));
    }

    /**
     * @test
     */
    public function shouldReturnDefaultSuccessMessage()
    {
        $type = 'type';
        $typeInstance = $this->createMock('Oro\Bundle\EmbeddedFormBundle\Form\Type\EmbeddedFormInterface');
        $container = $this->createContainerMock($typeInstance);
        $formFactory = $this->createFormFactoryMock();
        $defaultMessage = 'my default message';

        $typeInstance->expects($this->once())
            ->method('getDefaultSuccessMessage')
            ->will($this->returnValue($defaultMessage));

        $manager = new EmbeddedFormManager($container, $formFactory);
        $this->assertEquals($defaultMessage, $manager->getDefaultSuccessMessageByType($type));
    }

    /**
     * @test
     */
    public function shouldReturnEmptyDefaultSuccessMessage()
    {
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $this->assertEquals('', $manager->getDefaultSuccessMessageByType(uniqid('type')));
    }

    /**
     * @test
     */
    public function shouldReturnEmptyCustomFormLayoutByFormType()
    {
        $manager = new EmbeddedFormManager($this->createContainerMock(), $this->createFormFactoryMock());
        $this->assertEquals('', $manager->getCustomFormLayoutByFormType(uniqid('type')));
    }

    /**
     * @test
     * @dataProvider customLayoutTypesProvider
     */
    public function shouldReturnCustomFormLayoutByFormType($typeInstance, $expectedLayout)
    {
        $container = $this->createContainerMock($typeInstance);
        $formFactory = $this->createFormFactoryMock();

        $type = 'type';
        $manager = new EmbeddedFormManager($container, $formFactory);
        $this->assertEquals($expectedLayout, $manager->getCustomFormLayoutByFormType($type));
    }

    /**
     * @return array
     */
    public function customLayoutTypesProvider()
    {
        $customLayout = 'layout.html.twig';
        $typeInstance = $this->createMock('Oro\Bundle\EmbeddedFormBundle\Form\Type\CustomLayoutFormTypeInterface');
        $newInterfaceTypeInstance = $this
            ->createMock('Oro\Bundle\EmbeddedFormBundle\Form\Type\CustomLayoutFormInterface');

        $typeInstance->expects($this->any())->method('geFormLayout')
            ->will($this->returnValue($customLayout));

        $newInterfaceTypeInstance->expects($this->any())->method('getFormLayout')
            ->will($this->returnValue($customLayout));

        return [
            'not custom layout aware form'         => [null, ''],
            'deprecated interface, should be used' => [$typeInstance, $customLayout],
            'new interface, should be used'        => [$newInterfaceTypeInstance, $customLayout],
        ];
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function createFormFactoryMock()
    {
        return $this->createMock('Symfony\Component\Form\FormFactoryInterface');
    }

    /**
     * @param null|object $typeInstance
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function createContainerMock($typeInstance = null)
    {
        $container = $this->createMock('Symfony\Component\DependencyInjection\ContainerInterface');

        if ($typeInstance) {
            $container->expects($this->once())
                ->method('has')
                ->will($this->returnValue(true));

            $container->expects($this->once())
                ->method('get')
                ->will($this->returnValue($typeInstance));
        }

        return $container;
    }
}
