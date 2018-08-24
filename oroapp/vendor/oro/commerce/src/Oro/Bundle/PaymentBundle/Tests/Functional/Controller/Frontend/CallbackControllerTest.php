<?php

namespace Oro\Bundle\PaymentBundle\Tests\Functional\Controller\Frontend;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Tests\Functional\DataFixtures\LoadPaymentTransactionData;

class CallbackControllerTest extends WebTestCase
{
    const ALLOWED_REMOTE_ADDR = '173.0.81.1';

    protected function setUp()
    {
        $this->initClient();
        $this->client->useHashNavigation(true);

        $this->loadFixtures(['Oro\Bundle\PaymentBundle\Tests\Functional\DataFixtures\LoadPaymentTransactionData']);
    }

    public function testWithoutTransactionNoErrors()
    {
        foreach (['POST', 'GET'] as $method) {
            foreach (['oro_payment_callback_return', 'oro_payment_callback_error'] as $route) {
                $this->client->request(
                    $method,
                    $this->getUrl($route, ['accessIdentifier' => 'some_key', 'accessToken' => 'some_val']),
                    [],
                    [],
                    ['REMOTE_ADDR' => self::ALLOWED_REMOTE_ADDR]
                );
            }
        }
    }

    public function testReturnAndErrorCallbacksDontChangeActiveAndSuccessful()
    {
        /** @var PaymentTransaction $paymentTransaction */
        $paymentTransaction = $this->getReference(LoadPaymentTransactionData::AUTHORIZE_TRANSACTION);

        foreach (['POST', 'GET'] as $method) {
            foreach (['oro_payment_callback_return', 'oro_payment_callback_error'] as $route) {
                $this->assertCallback($paymentTransaction, $method, $route);
            }
        }
    }

    /**
     * @param PaymentTransaction $paymentTransaction
     * @param string $method
     * @param string $route
     */
    protected function assertCallback(PaymentTransaction $paymentTransaction, $method, $route)
    {
        $parameters = [
            'PNREF' => 'Transaction Reference ' . $method . $route,
            'RESULT' => '0',
            'SECURETOKEN' => 'SECURETOKEN',
            'SECURETOKENID' => 'SECURETOKENID',
        ];

        $expectedData = $parameters + $paymentTransaction->getRequest();
        $this->client->request(
            $method,
            $this->getUrl(
                $route,
                ['accessIdentifier' => $paymentTransaction->getAccessIdentifier()]
            ),
            $expectedData,
            [],
            ['REMOTE_ADDR' => self::ALLOWED_REMOTE_ADDR]
        );

        $objectManager = $this->getContainer()->get('doctrine')
            ->getRepository('OroPaymentBundle:PaymentTransaction');

        /** @var PaymentTransaction $paymentTransaction */
        $paymentTransaction = $objectManager->find($paymentTransaction->getId());

        $this->assertFalse($paymentTransaction->isActive());
        $this->assertFalse($paymentTransaction->isSuccessful());
        $this->assertEquals(
            [
                'SECURETOKEN' => 'SECURETOKEN',
                'SECURETOKENID' => 'SECURETOKENID',
            ],
            $paymentTransaction->getResponse()
        );
    }

    public function testNotifyGetIsInvalid()
    {
        /** @var PaymentTransaction $paymentTransaction */
        $paymentTransaction = $this->getReference(LoadPaymentTransactionData::AUTHORIZE_TRANSACTION);
        $this->assertFalse($paymentTransaction->isActive());
        $this->assertFalse($paymentTransaction->isSuccessful());

        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_payment_callback_notify',
                [
                    'accessIdentifier' => $paymentTransaction->getAccessIdentifier(),
                    'accessToken' => $paymentTransaction->getAccessToken(),
                ]
            ),
            [],
            [],
            ['REMOTE_ADDR' => self::ALLOWED_REMOTE_ADDR]
        );

        $this->assertResponseStatusCodeEquals($this->client->getResponse(), 405);
    }

    public function testNotifyTokenRequired()
    {
        /** @var PaymentTransaction $paymentTransaction */
        $paymentTransaction = $this->getReference(LoadPaymentTransactionData::AUTHORIZE_TRANSACTION);
        $this->assertFalse($paymentTransaction->isActive());
        $this->assertFalse($paymentTransaction->isSuccessful());

        $this->client->request(
            'POST',
            $this->getUrl(
                'oro_payment_callback_notify',
                [
                    'accessIdentifier' => $paymentTransaction->getAccessIdentifier(),
                    'accessToken' => '123',
                ]
            ),
            [],
            [],
            ['REMOTE_ADDR' => self::ALLOWED_REMOTE_ADDR]
        );

        $this->assertResponseStatusCodeEquals($this->client->getResponse(), 404);
    }
}
