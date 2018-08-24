<?php

namespace Oro\Bundle\UserBundle\Tests\Unit\Form\EventListener;

use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\UserBundle\Form\EventListener\ChangePasswordSubscriber;

class ChangePasswordSubscriberTest extends FormIntegrationTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $tokenAccessor;

    /** @var  ChangePasswordSubscriber */
    protected $subscriber;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $token;

    protected function setUp()
    {
        parent::setUp();

        $this->tokenAccessor = $this->createMock(TokenAccessorInterface::class);
        $this->token = $this->createMock(TokenInterface::class);

        $this->subscriber = new ChangePasswordSubscriber($this->factory, $this->tokenAccessor);
    }

    /**
     * test getSubscribedEvents
     */
    public function testSubscribedEvents()
    {
        $this->assertEquals(
            array(
                FormEvents::POST_SUBMIT => 'onSubmit',
                FormEvents::PRE_SUBMIT   => 'preSubmit'
            ),
            $this->subscriber->getSubscribedEvents()
        );
    }

    /**
     * Test onSubmit
     */
    public function testOnSubmit()
    {
        $eventMock = $this->getMockBuilder('Symfony\Component\Form\FormEvent')
            ->disableOriginalConstructor()
            ->getMock();

        $formMock = $this->getMockBuilder('Symfony\Component\Form\Test\FormInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $parentFormMock = $this->getMockBuilder('Symfony\Component\Form\Test\FormInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $formMock->expects($this->once())
            ->method('getParent')
            ->will($this->returnValue($parentFormMock));

        $formPlainPassword = $this->getMockBuilder('Symfony\Component\Form\Test\FormInterface')
            ->disableOriginalConstructor()
            ->getMock();
        $formPlainPassword->expects($this->once())
            ->method('getData')
            ->will($this->returnValue('123123'));

        $formMock->expects($this->once())
            ->method('get')
            ->with($this->equalTo('plainPassword'))
            ->will($this->returnValue($formPlainPassword));

        $currentUser = $userMock = $this
            ->getMockBuilder('Oro\Bundle\UserBundle\Entity\User')
            ->disableOriginalConstructor()
            ->getMock();

        $userMock->expects($this->exactly(3))
            ->method('getId')
            ->will($this->returnValue(1));

        $this->token->expects($this->any())
            ->method('getUser')
            ->will($this->returnValue($currentUser));

        $this->tokenAccessor->expects($this->once())
            ->method('getToken')
            ->will($this->returnValue($this->token));

        $parentFormMock->expects($this->once())
            ->method('getData')
            ->will($this->returnValue($userMock));

        $eventMock->expects($this->once())
            ->method('getForm')
            ->will($this->returnValue($formMock));

        $this->subscriber->onSubmit($eventMock);
    }

    /**
     * Test preSubmit
     *
     * @dataProvider preSubmitProvider
     */
    public function testPreSubmit($mode, $data)
    {
        $eventMock = $this->getMockBuilder('Symfony\Component\Form\FormEvent')
            ->disableOriginalConstructor()
            ->getMock();

        $formMock = $this->getMockBuilder('Symfony\Component\Form\Test\FormInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $eventMock->expects($this->once())
            ->method('getForm')
            ->will($this->returnValue($formMock));
        $eventMock->expects($this->once())
            ->method('getData')
            ->will($this->returnValue($data));

        if ($mode) {
            $formMock->expects($this->once())
                ->method('remove')
                ->with('currentPassword');

            $formMock->expects($this->once())
                ->method('add')
                ->with($this->isInstanceOf('Symfony\Component\Form\Form'));
        } else {
            $formMock->expects($this->never())
                ->method('remove');

            $formMock->expects($this->never())
                ->method('add');
        }

        $this->subscriber->preSubmit($eventMock);
    }

    /**
     * @return array
     */
    public function preSubmitProvider()
    {
        return array(
            array(true, array(
                'currentPassword' => null,
                'plainPassword' => array(
                    'first' => null
                ),
            )),
            array(false, array(
                'currentPassword' => '123123',
                'plainPassword' => array(
                    'first' => '32321'
                ),
            )),
        );
    }

    /**
     * Test bad scenario for isCurrentUser
     */
    public function testIsCurrentUserFalse()
    {
        $reflection = new \ReflectionMethod($this->subscriber, 'isCurrentUser');
        $reflection->setAccessible(true);

        $userMock = $this
            ->getMockBuilder('Oro\Bundle\UserBundle\Entity\User')
            ->disableOriginalConstructor()
            ->getMock();

        $userMock->expects($this->once())
            ->method('getId')
            ->will($this->returnValue(1));

        $this->token->expects($this->any())
            ->method('getUser')
            ->will($this->returnValue(null));

        $this->tokenAccessor->expects($this->once())
            ->method('getToken')
            ->will($this->returnValue($this->token));

        return $reflection->invoke($this->subscriber, $userMock);
    }
}
