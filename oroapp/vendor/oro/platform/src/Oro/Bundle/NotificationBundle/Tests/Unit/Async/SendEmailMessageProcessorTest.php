<?php

namespace Oro\Bundle\NotificationBundle\Tests\Unit\Async;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Psr\Log\LoggerInterface;
use Oro\Bundle\EmailBundle\Entity\EmailTemplate;
use Oro\Bundle\EmailBundle\Entity\Repository\EmailTemplateRepository;
use Oro\Bundle\EmailBundle\Mailer\DirectMailer;
use Oro\Bundle\EmailBundle\Mailer\Processor;
use Oro\Bundle\EmailBundle\Provider\EmailRenderer;
use Oro\Bundle\NotificationBundle\Async\SendEmailMessageProcessor;
use Oro\Bundle\NotificationBundle\Async\Topics;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\Null\NullMessage;
use Oro\Component\MessageQueue\Transport\SessionInterface;

class SendEmailMessageProcessorTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldConstructWithRequiredArguments()
    {
        new SendEmailMessageProcessor(
            $this->createMailerMock(),
            $this->createEmailProcessorMock(),
            $this->createManagerRegistryMock(),
            $this->createEmailRendererMock(),
            $this->createLoggerMock()
        );
    }

    public function testShouldBeSubscribedForTopics()
    {
        $expectedSubscribedTopics = [
            Topics::SEND_NOTIFICATION_EMAIL,
        ];

        self::assertEquals($expectedSubscribedTopics, SendEmailMessageProcessor::getSubscribedTopics());
    }

    public function testShouldRejectIfBodyEmpty()
    {
        $logger = $this->createLoggerMock();
        $logger
            ->expects($this->once())
            ->method('critical')
            ->with('Got invalid message');

        $processor = new SendEmailMessageProcessor(
            $this->createMailerMock(),
            $this->createEmailProcessorMock(),
            $this->createManagerRegistryMock(),
            $this->createEmailRendererMock(),
            $logger
        );

        $message = new NullMessage;
        $message->setBody(json_encode([
            'toEmail'   => 'to@email.com',
            'fromEmail' => 'from@email.com',
        ]));

        $result = $processor->process($message, $this->createSessionMock());

        self::assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    public function testShouldRejectIfSenderNotSet()
    {
        $logger = $this->createLoggerMock();
        $logger
            ->expects($this->once())
            ->method('critical')
            ->with('Got invalid message');

        $processor = new SendEmailMessageProcessor(
            $this->createMailerMock(),
            $this->createEmailProcessorMock(),
            $this->createManagerRegistryMock(),
            $this->createEmailRendererMock(),
            $logger
        );

        $message = new NullMessage;
        $message->setBody(json_encode([
            'body'    => 'body',
            'toEmail' => 'to@email.com',
        ]));

        $result = $processor->process($message, $this->createSessionMock());

        self::assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    public function testShouldRejectIfRecepientNotSet()
    {
        $logger = $this->createLoggerMock();
        $logger
            ->expects($this->once())
            ->method('critical')
            ->with('Got invalid message');

        $processor = new SendEmailMessageProcessor(
            $this->createMailerMock(),
            $this->createEmailProcessorMock(),
            $this->createManagerRegistryMock(),
            $this->createEmailRendererMock(),
            $logger
        );

        $message = new NullMessage;
        $message->setBody(json_encode([
            'body'      => 'body',
            'fromEmail' => 'from@email.com',
        ]));

        $result = $processor->process($message, $this->createSessionMock());

        self::assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    public function testShouldRejectIfTemplatePassedButBodyIsNotArray()
    {
        $logger = $this->createLoggerMock();
        $logger
            ->expects($this->once())
            ->method('critical')
            ->with('Got invalid message');

        $processor = new SendEmailMessageProcessor(
            $this->createMailerMock(),
            $this->createEmailProcessorMock(),
            $this->createManagerRegistryMock(),
            $this->createEmailRendererMock(),
            $logger
        );

        $message = new NullMessage;
        $message->setBody(json_encode([
            'fromEmail' => 'from@email.com',
            'toEmail'   => 'to@email.com',
            'template'  => 'template_name',
        ]));

        $result = $processor->process($message, $this->createSessionMock());

        self::assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    public function testShouldRejectIfSendingFailed()
    {
        $mailer = $this->createMailerMock();
        $mailer
            ->expects($this->once())
            ->method('send')
            ->willReturn(0);

        $logger = $this->createLoggerMock();
        $logger
            ->expects($this->once())
            ->method('error')
            ->with('Cannot send message');

        $processor = new SendEmailMessageProcessor(
            $mailer,
            $this->createEmailProcessorMock(),
            $this->createManagerRegistryMock(),
            $this->createEmailRendererMock(),
            $logger
        );

        $message = new NullMessage;
        $message->setBody(json_encode([
            'body'      => 'Message body',
            'toEmail'   => 'to@email.com',
            'fromEmail' => 'from@email.com'
        ]));

        $result = $processor->process($message, $this->createSessionMock());

        self::assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    public function testShouldSendEmailAndReturmACKIfAllParametersCorrect()
    {
        $mailer = $this->createMailerMock();
        $mailer
            ->expects($this->once())
            ->method('send')
            ->willReturn(1);

        $logger = $this->createLoggerMock();
        $logger
            ->expects($this->never())
            ->method('critical');

        $processor = new SendEmailMessageProcessor(
            $mailer,
            $this->createEmailProcessorMock(),
            $this->createManagerRegistryMock(),
            $this->createEmailRendererMock(),
            $logger
        );

        $message = new NullMessage;
        $message->setBody(json_encode([
            'body'      => 'Message body',
            'toEmail'   => 'to@email.com',
            'fromEmail' => 'from@email.com',
        ]));

        $result = $processor->process($message, $this->createSessionMock());

        self::assertEquals(MessageProcessorInterface::ACK, $result);
    }

    public function testShouldRenderCorrectEmailTemplate()
    {
        $emailTemplate = $this->createMock(EmailTemplate::class);

        $repository = $this->createMock(EmailTemplateRepository::class);
        $repository
            ->expects($this->once())
            ->method('findByName')
            ->with($this->equalTo('template_name'))
            ->willReturn($emailTemplate);

        $manager = $this->createMock(EntityManager::class);
        $manager
            ->expects($this->once())
            ->method('getRepository')
            ->with($this->equalTo(EmailTemplate::class))
            ->willReturn($repository);

        $managerRegistry = $this->createManagerRegistryMock();
        $managerRegistry
            ->expects($this->once())
            ->method('getManagerForClass')
            ->with($this->equalTo(EmailTemplate::class))
            ->willReturn($manager);

        $emailRenderer = $this->createEmailRendererMock();
        $emailRenderer
            ->expects($this->once())
            ->method('compileMessage')
            ->with($this->isInstanceOf(EmailTemplate::class), $this->equalTo(['body_parameter' => 'value']))
            ->willReturn(['email subject', 'email body']);

        $processor = new SendEmailMessageProcessor(
            $this->createMailerMock(),
            $this->createEmailProcessorMock(),
            $managerRegistry,
            $emailRenderer,
            $this->createLoggerMock()
        );

        $message = new NullMessage;
        $message->setBody(json_encode([
            'toEmail'   => 'to@email.com',
            'fromEmail' => 'from@email.com',
            'template'  => 'template_name',
            'body'      => ['body_parameter' => 'value'],
        ]));

        $processor->process($message, $this->createSessionMock());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testShouldThrowExceptionIfTemplateNotFound()
    {
        $repository = $this->createMock(EmailTemplateRepository::class);
        $repository
            ->expects($this->once())
            ->method('findByName')
            ->with($this->equalTo('template_name'))
            ->willReturn(null);

        $manager = $this->createMock(EntityManager::class);
        $manager
            ->expects($this->once())
            ->method('getRepository')
            ->with($this->equalTo(EmailTemplate::class))
            ->willReturn($repository);

        $managerRegistry = $this->createManagerRegistryMock();
        $managerRegistry
            ->expects($this->once())
            ->method('getManagerForClass')
            ->with($this->equalTo(EmailTemplate::class))
            ->willReturn($manager);

        $emailRenderer = $this->createEmailRendererMock();
        $emailRenderer
            ->expects($this->never())
            ->method('compileMessage');

        $processor = new SendEmailMessageProcessor(
            $this->createMailerMock(),
            $this->createEmailProcessorMock(),
            $managerRegistry,
            $emailRenderer,
            $this->createLoggerMock()
        );

        $message = new NullMessage;
        $message->setBody(json_encode([
            'toEmail'   => 'to@email.com',
            'fromEmail' => 'from@email.com',
            'template'  => 'template_name',
            'body'      => ['body_parameter' => 'value'],
        ]));

        $processor->process($message, $this->createSessionMock());
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject | DirectMailer
     */
    private function createMailerMock()
    {
        return $this->createMock(DirectMailer::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject | LoggerInterface
     */
    private function createLoggerMock()
    {
        return $this->createMock(LoggerInterface::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|SessionInterface
     */
    private function createSessionMock()
    {
        return $this->createMock(SessionInterface::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject | Processor
     */
    private function createEmailProcessorMock()
    {
        return $this->createMock(Processor::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry
     */
    private function createManagerRegistryMock()
    {
        return $this->createMock(ManagerRegistry::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|EmailRenderer
     */
    private function createEmailRendererMock()
    {
        return $this->createMock(EmailRenderer::class);
    }
}
