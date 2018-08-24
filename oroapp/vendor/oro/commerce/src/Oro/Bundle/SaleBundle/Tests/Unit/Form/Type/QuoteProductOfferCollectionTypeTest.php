<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\SaleBundle\Form\Type\QuoteProductOfferType;
use Oro\Bundle\SaleBundle\Form\Type\QuoteProductOfferCollectionType;

class QuoteProductOfferCollectionTypeTest extends FormIntegrationTestCase
{
    /**
     * @var QuoteProductOfferCollectionType
     */
    protected $formType;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->formType = new QuoteProductOfferCollectionType();
    }

    public function testSetDefaultOptions()
    {
        /* @var $resolver \PHPUnit_Framework_MockObject_MockObject|OptionsResolverInterface */
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolverInterface');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with([
                'type' => QuoteProductOfferType::NAME,
                'show_form_when_empty' => false,
                'error_bubbling' => false,
                'prototype_name' => '__namequoteproductoffer__',
            ])
        ;

        $this->formType->setDefaultOptions($resolver);
    }

    public function testGetParent()
    {
        $this->assertEquals(CollectionType::NAME, $this->formType->getParent());
    }

    public function testGetName()
    {
        $this->assertEquals(QuoteProductOfferCollectionType::NAME, $this->formType->getName());
    }
}
