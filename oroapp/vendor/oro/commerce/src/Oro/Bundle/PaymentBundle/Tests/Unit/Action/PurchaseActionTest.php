<?php

namespace Oro\Bundle\PaymentBundle\Tests\Unit\Action;

use Oro\Bundle\PaymentBundle\Action\PurchaseAction;
use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Method\PaymentMethodInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyPath;
use Symfony\Component\Routing\RouterInterface;

class PurchaseActionTest extends AbstractActionTest
{
    const PAYMENT_METHOD = 'testPaymentMethod';

    /**
     * @dataProvider executeDataProvider
     * @param array $data
     * @param array $expected
     */
    public function testExecute(array $data, array $expected)
    {
        $context = [];
        $options = $data['options'];

        $responseValue = $this->returnValue($data['response']);

        if ($data['response'] instanceof \Exception) {
            $responseValue = $this->throwException($data['response']);
        }

        $this->action->initialize($options);

        $this->contextAccessor
            ->expects($this->any())
            ->method('getValue')
            ->will($this->returnArgument(1));

        $paymentTransaction = new PaymentTransaction();
        $paymentTransaction
            ->setAction(PaymentMethodInterface::PURCHASE)
            ->setPaymentMethod($options['paymentMethod']);

        /** @var PaymentMethodInterface|\PHPUnit_Framework_MockObject_MockObject $paymentMethod */
        $paymentMethod = $this->createMock('Oro\Bundle\PaymentBundle\Method\PaymentMethodInterface');
        $paymentMethod->expects($this->once())
            ->method('execute')
            ->with(PaymentMethodInterface::PURCHASE, $paymentTransaction)
            ->will($responseValue);

        $this->paymentTransactionProvider
            ->expects($this->once())
            ->method('createPaymentTransaction')
            ->with($options['paymentMethod'], PaymentMethodInterface::PURCHASE, $options['object'])
            ->willReturn($paymentTransaction);

        $this->mockPaymentMethodProvider($paymentMethod, $options['paymentMethod']);

        $this->paymentTransactionProvider
            ->expects($this->once())
            ->method('savePaymentTransaction')
            ->with($paymentTransaction)
            ->willReturnCallback(
                function (PaymentTransaction $paymentTransaction) use ($options) {
                    $this->assertEquals($options['amount'], $paymentTransaction->getAmount());
                    $this->assertEquals($options['currency'], $paymentTransaction->getCurrency());
                    if (!empty($options['transactionOptions'])) {
                        $this->assertEquals(
                            $options['transactionOptions'],
                            $paymentTransaction->getTransactionOptions()
                        );
                    }
                }
            );

        $this->router
            ->expects($this->exactly(2))
            ->method('generate')
            ->withConsecutive(
                [
                    'oro_payment_callback_error',
                    [
                        'accessIdentifier' => $paymentTransaction->getAccessIdentifier(),
                    ],
                    RouterInterface::ABSOLUTE_URL
                ],
                [
                    'oro_payment_callback_return',
                    [
                        'accessIdentifier' => $paymentTransaction->getAccessIdentifier(),
                    ],
                    RouterInterface::ABSOLUTE_URL
                ]
            )
            ->will($this->returnArgument(0));

        $this->contextAccessor
            ->expects($this->once())
            ->method('setValue')
            ->with($context, $options['attribute'], $expected);

        $this->action->execute($context);
    }

    /**
     * @return array
     */
    public function executeDataProvider()
    {
        return [
            'default' => [
                'data' => [
                    'options' => [
                        'object' => new \stdClass(),
                        'amount' => 100.0,
                        'currency' => 'USD',
                        'attribute' => new PropertyPath('test'),
                        'paymentMethod' => self::PAYMENT_METHOD,
                        'transactionOptions' => [
                            'testOption' => 'testOption',
                        ],
                    ],
                    'response' => ['testResponse' => 'testResponse'],
                ],
                'expected' => [
                    'paymentMethod' => self::PAYMENT_METHOD,
                    'errorUrl' => 'oro_payment_callback_error',
                    'returnUrl' => 'oro_payment_callback_return',
                    'testResponse' => 'testResponse',
                    'paymentMethodSupportsValidation' => false,
                    'testOption' => 'testOption',
                ],
            ],
            'without transactionOptions' => [
                'data' => [
                    'options' => [
                        'object' => new \stdClass(),
                        'amount' => 100.0,
                        'currency' => 'USD',
                        'attribute' => new PropertyPath('test'),
                        'paymentMethod' => self::PAYMENT_METHOD,
                    ],
                    'response' => ['testResponse' => 'testResponse'],
                ],
                'expected' => [
                    'paymentMethod' => self::PAYMENT_METHOD,
                    'errorUrl' => 'oro_payment_callback_error',
                    'returnUrl' => 'oro_payment_callback_return',
                    'testResponse' => 'testResponse',
                    'paymentMethodSupportsValidation' => false,
                ],
            ],
            'throw exception' => [
                'data' => [
                    'options' => [
                        'object' => new \stdClass(),
                        'amount' => 100.0,
                        'currency' => 'USD',
                        'attribute' => new PropertyPath('test'),
                        'paymentMethod' => self::PAYMENT_METHOD,
                        'transactionOptions' => [
                            'testOption' => 'testOption',
                        ],
                    ],
                    'response' => new \Exception(),
                ],
                'expected' => [
                    'paymentMethod' => self::PAYMENT_METHOD,
                    'errorUrl' => 'oro_payment_callback_error',
                    'returnUrl' => 'oro_payment_callback_return',
                    'paymentMethodSupportsValidation' => false,
                    'testOption' => 'testOption',
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getAction()
    {
        return new PurchaseAction(
            $this->contextAccessor,
            $this->paymentMethodProvider,
            $this->paymentTransactionProvider,
            $this->router
        );
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Validation payment transaction not found
     */
    public function testSourcePaymentTransactionNotFound()
    {
        $options = [
            'object' => new \stdClass(),
            'amount' => 100.0,
            'currency' => 'USD',
            'attribute' => new PropertyPath('test'),
            'paymentMethod' => self::PAYMENT_METHOD,
            'transactionOptions' => [
                'testOption' => 'testOption',
            ],
        ];

        $this->contextAccessor->expects($this->any())->method('getValue')->will($this->returnArgument(1));

        $paymentTransaction = new PaymentTransaction();
        $paymentTransaction
            ->setAction(PaymentMethodInterface::PURCHASE)
            ->setPaymentMethod(self::PAYMENT_METHOD);

        $this->paymentTransactionProvider
            ->expects($this->once())
            ->method('createPaymentTransaction')
            ->with($options['paymentMethod'], PaymentMethodInterface::PURCHASE, $options['object'])
            ->willReturn($paymentTransaction);

        /** @var PaymentMethodInterface|\PHPUnit_Framework_MockObject_MockObject $paymentMethod */
        $paymentMethod = $this->createMock('Oro\Bundle\PaymentBundle\Method\PaymentMethodInterface');
        $paymentMethod->expects($this->once())->method('supports')->with('validate')->willReturn(true);

        $this->mockPaymentMethodProvider($paymentMethod, $options['paymentMethod']);

        $this->action->initialize($options);
        $this->action->execute([]);
    }

    /**
     * @dataProvider sourcePaymentTransactionProvider
     * @param PaymentTransaction $paymentTransaction
     * @param PaymentTransaction $sourcePaymentTransaction
     * @param array $expectedAttributes
     * @param array $expectedSourceTransactionProperties
     */
    public function testSourcePaymentTransaction(
        PaymentTransaction $paymentTransaction,
        PaymentTransaction $sourcePaymentTransaction,
        $expectedAttributes = [],
        $expectedSourceTransactionProperties = []
    ) {
        $options = [
            'object' => new \stdClass(),
            'amount' => 100.0,
            'currency' => 'USD',
            'attribute' => new PropertyPath('test'),
            'paymentMethod' => self::PAYMENT_METHOD,
            'transactionOptions' => [
                'testOption' => 'testOption',
            ],
        ];

        $context = [];

        $this->contextAccessor->expects($this->any())->method('getValue')->will($this->returnArgument(1));

        $this->paymentTransactionProvider
            ->expects($this->once())
            ->method('createPaymentTransaction')
            ->with($options['paymentMethod'], PaymentMethodInterface::PURCHASE, $options['object'])
            ->willReturn($paymentTransaction);

        $this->paymentTransactionProvider->expects($this->once())->method('getActiveValidatePaymentTransaction')
            ->willReturn($sourcePaymentTransaction);

        /** @var PaymentMethodInterface|\PHPUnit_Framework_MockObject_MockObject $paymentMethod */
        $paymentMethod = $this->createMock('Oro\Bundle\PaymentBundle\Method\PaymentMethodInterface');
        $paymentMethod->expects($this->once())->method('supports')->with('validate')->willReturn(true);
        $paymentMethod
            ->expects($this->once())
            ->method('execute')
            ->with($paymentTransaction->getAction(), $paymentTransaction)
            ->willReturn([]);

        $this->mockPaymentMethodProvider($paymentMethod, $options['paymentMethod']);

        $this->contextAccessor
            ->expects($this->once())
            ->method('setValue')
            ->with($context, $options['attribute'], $this->callback(function ($value) use ($expectedAttributes) {
                foreach ($expectedAttributes as $expectedAttribute) {
                    $this->assertContains($expectedAttribute, $value);
                }

                return true;
            }));


        $this->action->initialize($options);
        $this->action->execute($context);

        $propertyAccessor = PropertyAccess::createPropertyAccessor();

        foreach ($expectedSourceTransactionProperties as $path => $expectedValue) {
            $actualValue = $propertyAccessor->getValue($sourcePaymentTransaction, $path);
            $this->assertSame($expectedValue, $actualValue, $path);
        }
    }

    /**
     * @return array
     */
    public function sourcePaymentTransactionProvider()
    {
        $paymentTransaction = new PaymentTransaction();
        $paymentTransaction
            ->setAction(PaymentMethodInterface::PURCHASE)
            ->setPaymentMethod(self::PAYMENT_METHOD);

        $successfulTransaction = clone $paymentTransaction;
        $successfulTransaction->setSuccessful(true);
        $unsuccessfulTransaction = clone $paymentTransaction;
        $unsuccessfulTransaction->setSuccessful(false);

        return [
            'without saveForLaterUse deactivates source transaction' => [
                $paymentTransaction,
                (new PaymentTransaction())->setActive(true),
                [],
                [
                    'active' => false,
                ],
            ],
            'saveForLaterUse leaves source transaction active' => [
                $paymentTransaction,
                (new PaymentTransaction())->setActive(true)->setTransactionOptions(['saveForLaterUse' => true]),
                [],
                [
                    'active' => true,
                ],
            ],
            'successful transaction with validation' => [
                $successfulTransaction,
                new PaymentTransaction(),
                [
                    'purchaseSuccessful' => true,
                ],
            ],
            'unsuccessful transaction with validation' => [
                $unsuccessfulTransaction,
                new PaymentTransaction(),
                [
                    'purchaseSuccessful' => false,
                ],
            ],
        ];
    }

    public function testFailedExecuteDoesNotExposeContext()
    {
        $options = [
            'object' => new \stdClass(),
            'amount' => 100.0,
            'currency' => 'USD',
            'paymentMethod' => self::PAYMENT_METHOD,
            'transactionOptions' => [
                'testOption' => 'testOption',
            ],
        ];

        $this->contextAccessor->expects($this->any())->method('getValue')->will($this->returnArgument(1));

        $paymentTransaction = new PaymentTransaction();
        $paymentTransaction
            ->setAction(PaymentMethodInterface::PURCHASE)
            ->setPaymentMethod(self::PAYMENT_METHOD);

        $this->paymentTransactionProvider->expects($this->once())->method('createPaymentTransaction')
            ->willReturn($paymentTransaction);

        /** @var PaymentMethodInterface|\PHPUnit_Framework_MockObject_MockObject $paymentMethod */
        $paymentMethod = $this->createMock('Oro\Bundle\PaymentBundle\Method\PaymentMethodInterface');
        $paymentMethod->expects($this->once())->method('execute')->willThrowException(new \Exception());

        $this->mockPaymentMethodProvider($paymentMethod, $options['paymentMethod']);

        $this->logger->expects($this->once())->method('error')->with($this->isType('string'), $this->logicalAnd());

        $this->action->initialize($options);
        $this->action->execute([]);
    }

    /**
     * @param PaymentMethodInterface|\PHPUnit_Framework_MockObject_MockObject $paymentMethod
     * @param string $identifier
     */
    protected function mockPaymentMethodProvider($paymentMethod, $identifier)
    {
        $this->paymentMethodProvider->expects($this->atLeastOnce())
            ->method('hasPaymentMethod')
            ->with($identifier)
            ->willReturn(true);

        $this->paymentMethodProvider
            ->expects($this->atLeastOnce())
            ->method('getPaymentMethod')
            ->with($identifier)
            ->willReturn($paymentMethod);
    }
}
