<?php

namespace Oro\Bundle\ImportExportBundle\Tests\Unit\Form\Type;

use Oro\Bundle\ImportExportBundle\Form\Model\ImportData;
use Oro\Bundle\ImportExportBundle\Form\Type\ImportType;
use Oro\Bundle\ImportExportBundle\Processor\ProcessorRegistry;

use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\Validator\Validation;

class ImportTypeTest extends FormIntegrationTestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ProcessorRegistry
     */
    protected $processorRegistry;

    /**
     * @var ImportType
     */
    protected $type;

    protected function setUp()
    {
        parent::setUp();

        $this->processorRegistry = $this->getMockBuilder('Oro\Bundle\ImportExportBundle\Processor\ProcessorRegistry')
            ->disableOriginalConstructor()
            ->getMock();
        $this->type = new ImportType($this->processorRegistry);
    }

    /**
     * @dataProvider submitDataProvider
     * @param mixed $submitData
     * @param mixed $formData
     * @param array $formOptions
     */
    public function testSubmit($submitData, $formData, array $formOptions)
    {
        $this->processorRegistry->expects($this->any())
            ->method('getProcessorAliasesByEntity')
            ->will(
                $this->returnCallback(
                    function ($type, $entityName) {
                        \PHPUnit_Framework_Assert::assertEquals(ProcessorRegistry::TYPE_IMPORT, $type);
                        return array($type . $entityName);
                    }
                )
            );

        $form = $this->factory->create($this->type, null, $formOptions);

        $this->assertTrue($form->has('file'));
        $this->assertEquals('file', $form->get('file')->getConfig()->getType()->getName());
        $this->assertTrue($form->get('file')->getConfig()->getOption('required'));

        $this->assertTrue($form->has('processorAlias'));
        $this->assertEquals('choice', $form->get('processorAlias')->getConfig()->getType()->getName());
        $this->assertTrue($form->get('processorAlias')->getConfig()->getOption('required'));
        $key = ProcessorRegistry::TYPE_IMPORT . $formOptions['entityName'];
        $this->assertEquals(
            [new ChoiceView($key, $key, 'oro.importexport.import.' . $key)],
            $form->createView()->offsetGet('processorAlias')->vars['choices']
        );

        $form->submit($submitData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($formData, $form->getData());
    }

    public function submitDataProvider()
    {
        $data = new ImportData();
        $data->setProcessorAlias('importname');

        return array(
            'empty data' => array(
                'submitData' => array(),
                'formData' => $data,
                'formOptions' => array(
                    'entityName' => 'name'
                )
            ),
            'alias options' => array(
                'submitData' => array(),
                'formData' => $data,
                'formOptions' => array(
                    'entityName' => 'name',
                    'processorAliasOptions' => [
                        'expanded' => true,
                        'multiple' => false,
                    ],
                )
            ),
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        return [new ValidatorExtension(Validation::createValidator())];
    }
}
