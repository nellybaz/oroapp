<?php

namespace Oro\Bundle\PaymentTermBundle\Tests\Unit\Twig;

use Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm;
use Oro\Bundle\PaymentTermBundle\Twig\DeleteMessageTextExtension;
use Oro\Bundle\PaymentTermBundle\Twig\DeleteMessageTextGenerator;
use Oro\Component\Testing\Unit\TwigExtensionTestCaseTrait;

class DeleteMessageTextExtensionTest extends \PHPUnit_Framework_TestCase
{
    use TwigExtensionTestCaseTrait;

    /** @var DeleteMessageTextGenerator|\PHPUnit_Framework_MockObject_MockObject */
    protected $deleteMessageTextGenerator;

    /** @var DeleteMessageTextExtension */
    protected $extension;

    protected function setUp()
    {
        $this->deleteMessageTextGenerator = $this->getMockBuilder(DeleteMessageTextGenerator::class)
            ->disableOriginalConstructor()
            ->getMock();

        $container = self::getContainerBuilder()
            ->add('oro_payment_term.payment_term.delete_message_generator', $this->deleteMessageTextGenerator)
            ->getContainer($this);

        $this->extension = new DeleteMessageTextExtension($container);
    }

    protected function tearDown()
    {
        unset($this->deleteMessageTextGenerator);
    }

    public function testGetName()
    {
        $this->assertEquals(
            DeleteMessageTextExtension::DELETE_MESSAGE_TEXT_EXTENSION_NAME,
            $this->extension->getName()
        );
    }

    public function testGetDeleteMessageText()
    {
        $message = 'Delete message for payment term';
        $paymentTerm = new PaymentTerm();

        $this->deleteMessageTextGenerator->expects($this->once())
            ->method('getDeleteMessageText')
            ->with(self::identicalTo($paymentTerm))
            ->willReturn($message);

        $this->assertEquals(
            $message,
            self::callTwigFunction($this->extension, 'get_payment_term_delete_message', [$paymentTerm])
        );
    }

    public function testGetDeleteMessageDatagrid()
    {
        $message = 'Payment term delete message for datagrid';
        $paymentTermId = 1;

        $this->deleteMessageTextGenerator->expects($this->once())
            ->method('getDeleteMessageTextForDataGrid')
            ->with($paymentTermId)
            ->willReturn($message);

        $this->assertEquals(
            $message,
            self::callTwigFunction($this->extension, 'get_payment_term_delete_message_datagrid', [$paymentTermId])
        );
    }
}
