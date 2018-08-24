<?php

namespace Oro\Bundle\PaymentBundle\Tests\Unit\Form\Type;

use Oro\Bundle\PaymentBundle\Entity\PaymentMethodConfig;
use Oro\Bundle\PaymentBundle\Form\Type\PaymentMethodConfigType;
use Oro\Bundle\PaymentBundle\Method\Provider\PaymentMethodProviderInterface;
use Oro\Bundle\PaymentBundle\Method\View\CompositePaymentMethodViewProvider;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;

class PaymentMethodConfigTypeTest extends FormIntegrationTestCase
{
    /**
     * @var PaymentMethodConfigType
     */
    protected $formType;

    /**
     * @var PaymentMethodProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $paymentMethodProvider;

    /**
     * @var CompositePaymentMethodViewProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $paymentMethodViewProvider;

    protected function setUp()
    {
        $this->paymentMethodProvider = $this->createMock(PaymentMethodProviderInterface::class);
        $this->paymentMethodViewProvider = $this->createMock(CompositePaymentMethodViewProvider::class);
        $this->formType = new PaymentMethodConfigType(
            $this->paymentMethodProvider,
            $this->paymentMethodViewProvider
        );

        parent::setUp();
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals(PaymentMethodConfigType::NAME, $this->formType->getBlockPrefix());
    }

    /**
     * @dataProvider submitDataProvider
     *
     * @param array $data
     */
    public function testSubmit($data)
    {
        $form = $this->factory->create($this->formType, $data);

        $this->assertSame($data, $form->getData());

        $form->submit([
            'type' => 'MO',
            'options' => ['client_id' => 3],
        ]);

        $paymentMethodConfig = (new PaymentMethodConfig())
            ->setType('MO')
            ->setOptions(['client_id' => 3])
        ;

        $this->assertTrue($form->isValid());
        $this->assertEquals($paymentMethodConfig, $form->getData());
    }

    /**
     * @return array
     */
    public function submitDataProvider()
    {
        return [
            [new PaymentMethodConfig()],
            [
                (new PaymentMethodConfig())->setType('PP')->setOptions(['client_id' => 5])
            ],
        ];
    }
}
