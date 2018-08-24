<?php

namespace Oro\Bundle\MessageQueueBundle\Tests\Unit\Security;

use Psr\Log\LoggerInterface;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

use Oro\Component\MessageQueue\Client\Config;
use Oro\Component\MessageQueue\Consumption\Context;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\Null\NullMessage;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Oro\Bundle\MessageQueueBundle\Security\SecurityAwareConsumptionExtension;
use Oro\Bundle\MessageQueueBundle\Security\SecurityAwareDriver;
use Oro\Bundle\SecurityBundle\Authentication\TokenSerializerInterface;

class SecurityAwareConsumptionExtensionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject|TokenStorageInterface */
    private $tokenStorage;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TokenSerializerInterface */
    private $tokenSerializer;

    /** @var \PHPUnit_Framework_MockObject_MockObject|LoggerInterface */
    private $logger;

    /** @var SecurityAwareConsumptionExtension */
    private $extension;

    protected function setUp()
    {
        $this->tokenStorage = $this->createMock(TokenStorageInterface::class);
        $this->tokenSerializer = $this->createMock(TokenSerializerInterface::class);
        $this->logger = $this->createMock(LoggerInterface::class);

        $this->extension = new SecurityAwareConsumptionExtension(
            ['security_agnostic_processor'],
            $this->tokenStorage,
            $this->tokenSerializer,
            $this->logger
        );
    }

    public function testOnPreReceivedShouldNotSetSecurityTokenForSecurityAgnosticProcessor()
    {
        $message = new NullMessage();
        $message->setProperties([
            Config::PARAMETER_PROCESSOR_NAME              => 'security_agnostic_processor',
            SecurityAwareDriver::PARAMETER_SECURITY_TOKEN => 'serialized'
        ]);

        $context = new Context($this->createMock(SessionInterface::class));
        $context->setMessage($message);

        $this->tokenSerializer->expects(self::never())
            ->method('deserialize');
        $this->tokenStorage->expects(self::never())
            ->method('setToken');

        $this->extension->onPreReceived($context);
    }

    public function testOnPreReceivedShouldSetSecurityToken()
    {
        $token = $this->createMock(TokenInterface::class);
        $serializedToken = 'serialized';

        $message = new NullMessage();
        $message->setProperties([SecurityAwareDriver::PARAMETER_SECURITY_TOKEN => $serializedToken]);

        $context = new Context($this->createMock(SessionInterface::class));
        $context->setMessage($message);

        $this->tokenSerializer->expects(self::once())
            ->method('deserialize')
            ->with($serializedToken)
            ->willReturn($token);
        $this->tokenStorage->expects(self::once())
            ->method('setToken')
            ->with(self::identicalTo($token));
        $this->logger->expects(self::once())
            ->method('debug')
            ->with('Set security token');

        $this->extension->onPreReceived($context);
    }

    public function testOnPreReceivedShouldRejectMessageIfSecurityTokenCannotBeDeserialized()
    {
        $serializedToken = 'serialized';

        $message = new NullMessage();
        $message->setProperties([SecurityAwareDriver::PARAMETER_SECURITY_TOKEN => $serializedToken]);

        $context = new Context($this->createMock(SessionInterface::class));
        $context->setMessage($message);

        $this->tokenSerializer->expects(self::once())
            ->method('deserialize')
            ->with($serializedToken)
            ->willReturn(null);
        $this->tokenStorage->expects(self::never())
            ->method('setToken');
        $this->logger->expects(self::once())
            ->method('error')
            ->with('Cannot deserialize security token');

        $this->extension->onPreReceived($context);

        self::assertEquals(MessageProcessorInterface::REJECT, $context->getStatus());
    }

    public function testOnPreReceivedShouldDoNothingIdMessageDoesNotContainSecurityToken()
    {
        $message = new NullMessage();

        $context = new Context($this->createMock(SessionInterface::class));
        $context->setMessage($message);

        $this->tokenSerializer->expects(self::never())
            ->method('deserialize');
        $this->tokenStorage->expects(self::never())
            ->method('setToken');

        $this->extension->onPreReceived($context);
    }

    public function testOnPostReceivedShouldSetSecurityTokenToNull()
    {
        $context = new Context($this->createMock(SessionInterface::class));

        $this->tokenStorage->expects(self::once())
            ->method('setToken')
            ->with(null);

        $this->extension->onPostReceived($context);
    }
}
