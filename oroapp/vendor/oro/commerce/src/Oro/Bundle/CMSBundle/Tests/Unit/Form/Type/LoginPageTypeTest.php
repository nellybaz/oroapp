<?php

namespace Oro\Bundle\CMSBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;

use Oro\Bundle\AttachmentBundle\Form\Type\ImageType;
use Oro\Bundle\CMSBundle\Form\Type\LoginPageType;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ImageTypeStub;

class LoginPageTypeTest extends FormIntegrationTestCase
{
    /**
     * @var LoginPageType
     */
    protected $formType;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->formType = new LoginPageType();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->formType);
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        return [
            new PreloadedExtension(
                [
                    ImageType::NAME => new ImageTypeStub(),
                ],
                []
            )
        ];
    }

    public function testGetName()
    {
        $this->assertInternalType('string', $this->formType->getName());
        $this->assertEquals(LoginPageType::NAME, $this->formType->getName());
    }

    public function testBuildForm()
    {
        $form = $this->factory->create($this->formType);

        $this->assertTrue($form->has('topContent'));
        $this->assertTrue($form->has('bottomContent'));
        $this->assertTrue($form->has('css'));
        $this->assertTrue($form->has('logoImage'));
        $this->assertTrue($form->has('backgroundImage'));
    }
}
