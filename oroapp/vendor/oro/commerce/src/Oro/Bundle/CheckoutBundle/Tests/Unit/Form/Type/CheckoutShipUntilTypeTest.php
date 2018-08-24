<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Unit\Form\Type;

use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Form\Type\CheckoutShipUntilType;
use Oro\Bundle\FormBundle\Form\Type\OroDateType;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;

class CheckoutShipUntilTypeTest extends FormIntegrationTestCase
{
    public function testGetName()
    {
        $formType = new CheckoutShipUntilType();
        $this->assertSame('oro_checkout_ship_until', $formType->getName());
    }

    public function testGetParent()
    {
        $formType = new CheckoutShipUntilType();
        $this->assertSame(OroDateType::class, $formType->getParent());
    }

    public function testSetDefaultOptions()
    {
        $checkout = new Checkout();
        $form = $this->factory->create(CheckoutShipUntilType::class, new \DateTime(), ['checkout' => $checkout]);

        $this->assertSame($checkout, $form->getConfig()->getOption('checkout'));
        $this->assertSame([
            'class' => 'datepicker-input input input--full',
            'placeholder' => 'oro.checkout.order_review.shipping_date_placeholder'
        ], $form->getConfig()->getOption('attr'));
        $this->assertSame('0', $form->getConfig()->getOption('minDate'));
    }

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\InvalidOptionsException
     * @expectedExceptionMessage The option "checkout" with value stdClass is invalid.
     */
    public function testRequiredOption()
    {
        $this->factory->create(CheckoutShipUntilType::class, new \DateTime(), ['checkout' => new \stdClass()]);
    }
}
