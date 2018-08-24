<?php

namespace Oro\Bundle\PaymentBundle\Tests\Functional\Provider;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\PaymentBundle\Tests\Functional\DataFixtures\LoadPaymentTransactionData;
use Psr\Log\LoggerInterface;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerUserData;
use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\TestFrameworkBundle\Entity\Item;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class PaymentTransactionProviderTest extends WebTestCase
{
    use EntityTrait;

    public function testGetActiveAuthorizePaymentTransactionShouldNotRelyOnFrontendOwnerFromBackend()
    {
        $this->initClient();
        $this->client->useHashNavigation(true);
        $this->loadFixtures([LoadPaymentTransactionData::class]);

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');

        $this->getContainer()->get('security.token_storage')
            ->setToken(new UsernamePasswordToken(self::USER_NAME, self::AUTH_PW, 'user'));

        $this->assertNotEmpty(
            $paymentTransactionProvider->getActiveAuthorizePaymentTransaction(
                $this->getEntity(PaymentTransaction::class, ['id' => 1]),
                '1000',
                'USD',
                'payment_method'
            )
        );
    }

    public function testGetActiveAuthorizePaymentTransactionShouldNotRelyOnFrontendOwner()
    {
        $this->initClient(
            [],
            $this->generateBasicAuthHeader(
                LoadCustomerUserData::LEVEL_1_1_EMAIL,
                LoadCustomerUserData::LEVEL_1_1_PASSWORD
            )
        );

        $this->loadFixtures(['Oro\Bundle\PaymentBundle\Tests\Functional\DataFixtures\LoadPaymentTransactionData']);

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');

        $this->getContainer()->get('security.token_storage')->setToken(
            new UsernamePasswordToken(
                $this->getReference(LoadCustomerUserData::LEVEL_1_1_EMAIL),
                LoadCustomerUserData::LEVEL_1_1_PASSWORD,
                'key'
            )
        );

        $this->assertNotEmpty(
            $paymentTransactionProvider->getActiveAuthorizePaymentTransaction(
                $this->getEntity(PaymentTransaction::class, ['id' => 1]),
                '1000',
                'USD',
                'payment_method'
            )
        );
    }

    public function testGetActiveValidatePaymentTransactionAnotherUser()
    {
        $this->initClient(
            [],
            $this->generateBasicAuthHeader(
                LoadCustomerUserData::LEVEL_1_1_EMAIL,
                LoadCustomerUserData::LEVEL_1_1_PASSWORD
            )
        );

        $this->loadFixtures(['Oro\Bundle\PaymentBundle\Tests\Functional\DataFixtures\LoadPaymentTransactionData']);

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');

        $this->getContainer()->get('security.token_storage')->setToken(
            new UsernamePasswordToken(
                $this->getReference(LoadCustomerUserData::LEVEL_1_1_EMAIL),
                LoadCustomerUserData::LEVEL_1_1_PASSWORD,
                'key'
            )
        );

        $this->assertEmpty(
            $paymentTransactionProvider->getActiveValidatePaymentTransaction('payment_method')
        );
    }

    public function testGetActiveValidatePaymentTransactionCurrentLoggedUserOnly()
    {
        $this->initClient(
            [],
            $this->generateBasicAuthHeader(LoadCustomerUserData::EMAIL, LoadCustomerUserData::PASSWORD)
        );

        $this->loadFixtures(['Oro\Bundle\PaymentBundle\Tests\Functional\DataFixtures\LoadPaymentTransactionData']);

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');

        $this->getContainer()->get('security.token_storage')->setToken(
            new UsernamePasswordToken(
                $this->getReference(LoadCustomerUserData::EMAIL),
                LoadCustomerUserData::PASSWORD,
                'key'
            )
        );

        $this->assertNotEmpty(
            $paymentTransactionProvider->getActiveValidatePaymentTransaction('payment_method')
        );
    }

    public function testGetActiveValidatePaymentTransactionEmptyForUser()
    {
        $this->initClient();
        $this->loadFixtures(['Oro\Bundle\PaymentBundle\Tests\Functional\DataFixtures\LoadPaymentTransactionData']);

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');

        $this->getContainer()->get('security.token_storage')->setToken(null);

        $this->assertEmpty(
            $paymentTransactionProvider->getActiveValidatePaymentTransaction('payment_method')
        );
    }

    public function testCreatePaymentTransactionUseCurrentLoggedCustomerUser()
    {
        $this->initClient(
            [],
            $this->generateBasicAuthHeader(LoadCustomerUserData::EMAIL, LoadCustomerUserData::PASSWORD)
        );

        $this->loadFixtures(['Oro\Bundle\PaymentBundle\Tests\Functional\DataFixtures\LoadPaymentTransactionData']);

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');

        $this->getContainer()->get('security.token_storage')->setToken(
            new UsernamePasswordToken(
                $this->getReference(LoadCustomerUserData::EMAIL),
                LoadCustomerUserData::PASSWORD,
                'key'
            )
        );

        /** @var PaymentTransaction $paymentTransaction */
        $paymentTransaction = $paymentTransactionProvider->createPaymentTransaction(
            'paymentMethod',
            'authorize',
            $this->getEntity(PaymentTransaction::class, ['id' => 1])
        );

        $paymentTransaction
            ->setAmount('1000')
            ->setCurrency('USD');

        $paymentTransactionProvider->savePaymentTransaction($paymentTransaction);

        $this->assertEquals(LoadCustomerUserData::EMAIL, $paymentTransaction->getFrontendOwner()->getEmail());
    }

    public function testTransactionSaveExceptionDoNotBreakThings()
    {
        $this->initClient();

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');
        /** @var \PHPUnit_Framework_MockObject_MockObject|LoggerInterface $logger */
        $logger = $this->createMock('\Psr\Log\LoggerInterface');
        $logger->expects($this->once())->method('error');

        $paymentTransactionProvider->setLogger($logger);
        $paymentTransactionProvider->savePaymentTransaction(new PaymentTransaction());
    }

    /**
     * @expectedException \Oro\Bundle\EntityBundle\Exception\NotManageableEntityException
     * @expectedExceptionMessage Entity class "stdClass" is not manageable.
     */
    public function testCreatePaymentTransactionNonManageable()
    {
        $this->initClient();

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');

        $paymentTransaction = $paymentTransactionProvider->createPaymentTransaction(
            'paymentMethod',
            'authorize',
            new \stdClass()
        );
        $paymentTransactionProvider->savePaymentTransaction($paymentTransaction);
    }

    public function testCreatePaymentTransactionWithoutId()
    {
        $this->initClient();

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');
        /** @var \PHPUnit_Framework_MockObject_MockObject|LoggerInterface $logger */
        $logger = $this->createMock('\Psr\Log\LoggerInterface');
        $logger->expects($this->once())->method('error');

        $paymentTransactionProvider->setLogger($logger);
        $paymentTransaction = $paymentTransactionProvider->createPaymentTransaction(
            'paymentMethod',
            'authorize',
            new Item()
        );
        $paymentTransactionProvider->savePaymentTransaction($paymentTransaction);
    }

    public function testCreatePaymentTransactionByParentTransaction()
    {
        $this->initClient();

        $paymentTransactionProvider = $this->getContainer()->get('oro_payment.provider.payment_transaction');

        $action = 'someAction';
        $paymentMethod = 'somePaymentMethod';
        $entityClass = 'someEntityClass';
        $entityIdentifier = 1;
        $amount = 'someAmount';
        $currency = 'someCurrency';

        $parentPaymentTransaction = new PaymentTransaction();
        $parentPaymentTransaction
            ->setPaymentMethod($paymentMethod)
            ->setEntityClass($entityClass)
            ->setEntityIdentifier($entityIdentifier)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setAccessToken(null)
            ->setAccessIdentifier(null);

        $expectedPaymentTransaction = clone $parentPaymentTransaction;
        $expectedPaymentTransaction
            ->setAction($action)
            ->setFrontendOwner($this->getLoggedCustomerUser())
            ->setSourcePaymentTransaction($parentPaymentTransaction);

        $actualPaymentTransaction = $paymentTransactionProvider->createPaymentTransactionByParentTransaction(
            $action,
            $parentPaymentTransaction
        );

        $actualPaymentTransaction
            ->setAccessToken(null)
            ->setAccessIdentifier(null);

        $this->assertEquals($expectedPaymentTransaction, $actualPaymentTransaction);
    }

    /**
     * @return CustomerUser|null
     */
    protected function getLoggedCustomerUser()
    {
        $token = $this->getContainer()->get('security.token_storage')->getToken();
        if (!$token) {
            return null;
        }

        $user = $token->getUser();

        if ($user instanceof CustomerUser) {
            return $user;
        }

        return null;
    }
}
