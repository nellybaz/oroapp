<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Form\Type;

use Oro\Bundle\PromotionBundle\Form\Type\AppliedCouponCollectionType;
use Oro\Bundle\PromotionBundle\Form\Type\AppliedCouponType;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;

class AppliedCouponCollectionTypeTest extends FormIntegrationTestCase
{
    /**
     * @var AppliedCouponCollectionType
     */
    private $formType;

    protected function setUp()
    {
        parent::setUp();
        $this->formType = new AppliedCouponCollectionType();
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        return [
            new PreloadedExtension(
                [
                    new AppliedCouponType(),
                ],
                []
            ),
        ];
    }

    public function testFinishView()
    {
        /** @var FormInterface $form */
        $form = $this->createMock(FormInterface::class);
        $view = new FormView();
        $entity = new \stdClass();

        $widgetAlias = 'alias';
        $componentView = 'component-view';
        $this->formType->finishView(
            $view,
            $form,
            [
                'entity' => $entity,
                'dialog_widget_alias' => $widgetAlias,
                'page_component_view' => $componentView,
                'page_component_options' => [],
            ]
        );

        $this->assertArrayHasKey('dialogWidgetAlias', $view->vars);
        $this->assertEquals($widgetAlias, $view->vars['dialogWidgetAlias']);
        $this->assertArrayHasKey('entity', $view->vars);
        $this->assertEquals($entity, $view->vars['entity']);
        $this->assertArrayHasKey('data-page-component-view', $view->vars['attr']);
        $this->assertEquals(
            $componentView,
            $view->vars['attr']['data-page-component-view']
        );
        $this->assertArrayHasKey('data-page-component-options', $view->vars['attr']);
        $this->assertEquals(
            json_encode(['dialogWidgetAlias' => $widgetAlias]),
            $view->vars['attr']['data-page-component-options']
        );
    }

    public function testDefaultOptions()
    {
        $form = $this->factory->create($this->formType, null, ['entity' => new \stdClass()]);

        $this->assertArraySubset([
            'type' => AppliedCouponType::class,
            'dialog_widget_alias' => 'add-coupons-dialog',
            'page_component_view' => 'oropromotion/js/app/views/applied-coupon-collection-view',
            'page_component_options' => [],
            'error_bubbling' => false,
            'prototype' => true,
            'allow_add' => true,
            'allow_delete' => true,
            'prototype_name' => '__applied_coupon_collection_item__',
            'by_reference' => false
        ], $form->getConfig()->getOptions());
    }

    public function testWithoutRequiredOptions()
    {
        $this->expectException(MissingOptionsException::class);
        $this->expectExceptionMessage('The required option "entity" is missing.');
        $this->factory->create($this->formType);
    }

    public function testGetParent()
    {
        $this->assertEquals(CollectionType::class, $this->formType->getParent());
    }

    public function testGetName()
    {
        $this->assertEquals(AppliedCouponCollectionType::NAME, $this->formType->getName());
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals(AppliedCouponCollectionType::NAME, $this->formType->getBlockPrefix());
    }
}
