<?php

namespace Oro\Bundle\CustomerBundle\Tests\Functional;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerUserData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class CustomerUserOperationsTest extends WebTestCase
{
    const EMAIL = LoadCustomerUserData::EMAIL;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
        $this->loadFixtures(
            [
                'Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerUserRoleData'
            ]
        );
    }

    public function testConfirm()
    {
        /** @var \Oro\Bundle\CustomerBundle\Entity\CustomerUser $user */
        $user = $this->getReference(static::EMAIL);
        $this->assertNotNull($user);

        $id = $user->getId();

        $user->setConfirmed(false);
        $this->getObjectManager()->flush();
        $this->getObjectManager()->clear();

        $this->executeOperation($user, 'oro_customer_customeruser_confirm');

        /** @var \Swift_Plugins_MessageLogger $emailLogging */
        $emailLogger = $this->getContainer()->get('swiftmailer.plugin.messagelogger');
        $emailMessages = $emailLogger->getMessages();

        $this->assertCount(1, $emailMessages);

        $message = array_shift($emailMessages);

        $this->assertInstanceOf('\Swift_Message', $message);
        $this->assertEquals($user->getEmail(), key($message->getTo()));
        $this->assertEquals(
            $this->getContainer()->get('oro_config.manager')->get('oro_notification.email_notification_sender_email'),
            key($message->getFrom())
        );
        $this->assertContains($user->getEmail(), $message->getSubject());
        $this->assertContains($user->getEmail(), $message->getBody());

        $configManager = $this->getContainer()->get('oro_config.manager');
        $applicationUrl = $configManager->get('oro_ui.application_url');
        $loginUrl = $applicationUrl . $this->getUrl('oro_customer_customer_user_security_login');

        $this->assertContains($loginUrl, $message->getBody());

        $this->assertJsonResponseStatusCodeEquals($this->client->getResponse(), 200);

        $user = $this->getUserRepository()->find($id);

        $this->assertNotNull($user);
        $this->assertTrue($user->isConfirmed());
    }

    public function testSendConfirmation()
    {
        /** @var CustomerUser $user */
        $email = static::EMAIL;

        $user = $this->getReference($email);
        $user->setConfirmed(false);
        $this->getObjectManager()->flush();
        $this->getObjectManager()->clear();

        $this->executeOperation($user, 'oro_customer_customeruser_sendconfirmation');

        $result = $this->client->getResponse();
        $this->assertJsonResponseStatusCodeEquals($result, 200);

        /** @var \Swift_Plugins_MessageLogger $emailLogging */
        $emailLogger = $this->getContainer()->get('swiftmailer.plugin.messagelogger');
        $emailMessages = $emailLogger->getMessages();

        /** @var \Swift_Message $message */
        $message = reset($emailMessages);

        $this->assertInstanceOf('Swift_Message', $message);
        $this->assertEquals($email, key($message->getTo()));
        $this->assertContains('Confirmation of account registration', $message->getSubject());
        $this->assertContains($email, $message->getBody());
    }

    public function testEnableAndDisable()
    {
        /** @var CustomerUser $user */
        $user = $this->getUserRepository()->findOneBy(['email' => static::EMAIL]);
        $id = $user->getId();

        $this->assertNotNull($user);
        $this->assertTrue($user->isEnabled());

        $this->executeOperation($user, 'oro_customer_customeruser_disable');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        $this->getObjectManager()->clear();

        $user = $this->getUserRepository()->find($id);
        $this->assertFalse($user->isEnabled());
        $this->assertNotEmpty($user->getRoles());

        $this->executeOperation($user, 'oro_customer_customeruser_enable');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        $this->getObjectManager()->clear();

        $user = $this->getUserRepository()->find($id);
        $this->assertTrue($user->isEnabled());
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectManager
     */
    protected function getObjectManager()
    {
        return $this->getContainer()->get('doctrine')->getManager();
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    protected function getUserRepository()
    {
        return $this->getObjectManager()->getRepository('OroCustomerBundle:CustomerUser');
    }

    /**
     * {@inheritdoc}
     */
    protected function executeOperation(CustomerUser $customerUser, $operationName)
    {
        $entityId = $customerUser->getId();
        $entityClass = CustomerUser::class;
        $this->client->request(
            'POST',
            $this->getUrl(
                'oro_action_operation_execute',
                [
                    'operationName' => $operationName,
                    'route' => 'oro_customer_customer_user_view',
                    'entityId' => $entityId,
                    'entityClass' => $entityClass
                ]
            ),
            $this->getOperationExecuteParams($operationName, $entityId, $entityClass)
        );
    }

    /**
     * @param $operationName
     * @param $entityId
     * @param $entityClass
     *
     * @return array
     */
    protected function getOperationExecuteParams($operationName, $entityId, $entityClass)
    {
        $actionContext = [
            'entityId'    => $entityId,
            'entityClass' => $entityClass
        ];
        $container = self::getContainer();
        $operation = $container->get('oro_action.operation_registry')->findByName($operationName);
        $actionData = $container->get('oro_action.helper.context')->getActionData($actionContext);

        $tokenData = $container
            ->get('oro_action.operation.execution.form_provider')
            ->createTokenData($operation, $actionData);
        $container->get('session')->save();

        return $tokenData;
    }
}
