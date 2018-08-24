<?php

namespace Oro\Bundle\EmailBundle\Tests\Unit\Builder\Helper;

use Doctrine\ORM\EntityManager;

use Oro\Bundle\EmailBundle\Builder\Helper\EmailModelBuilderHelper;
use Oro\Bundle\EmailBundle\Cache\EmailCacheManager;
use Oro\Bundle\EmailBundle\Entity\Email;
use Oro\Bundle\EmailBundle\Entity\Manager\EmailAddressManager;
use Oro\Bundle\EmailBundle\Tests\Unit\Entity\TestFixtures\EmailAddress;
use Oro\Bundle\EmailBundle\Tests\Unit\Fixtures\Entity\TestUser;
use Oro\Bundle\EmailBundle\Tools\EmailAddressHelper;
use Oro\Bundle\EntityBundle\Provider\EntityNameResolver;
use Oro\Bundle\EntityBundle\Tools\EntityRoutingHelper;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\UserBundle\Entity\User;

use Symfony\Component\Templating\EngineInterface;

class EmailModelBuilderHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EmailModelBuilderHelper
     */
    protected $helper;

    /**
     * @var EntityRoutingHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $entityRoutingHelper;

    /**
     * @var EmailAddressHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $emailAddressHelper;

    /**
     * @var EntityNameResolver|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $entityNameResolver;

    /**
     * @var TokenAccessorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $tokenAccessor;

    /**
     * @var EmailAddressManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $emailAddressManager;

    /**
     * @var EntityManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $entityManager;

    /**
     * @var EmailCacheManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $emailCacheManager;

    /**
     * @var EngineInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $templating;

    protected function setUp()
    {
        $this->entityRoutingHelper = $this->getMockBuilder('Oro\Bundle\EntityBundle\Tools\EntityRoutingHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->emailAddressHelper = new EmailAddressHelper();

        $this->entityNameResolver = $this->getMockBuilder('Oro\Bundle\EntityBundle\Provider\EntityNameResolver')
            ->disableOriginalConstructor()
            ->getMock();

        $this->tokenAccessor = $this->createMock(TokenAccessorInterface::class);

        $this->emailAddressManager = $this->getMockBuilder('Oro\Bundle\EmailBundle\Entity\Manager\EmailAddressManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->emailCacheManager = $this->getMockBuilder('Oro\Bundle\EmailBundle\Cache\EmailCacheManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->templating = $this->createMock('Symfony\Component\Templating\EngineInterface');

        $mailboxManager = $this->getMockBuilder('Oro\Bundle\EmailBundle\Entity\Manager\MailboxManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->helper = new EmailModelBuilderHelper(
            $this->entityRoutingHelper,
            $this->emailAddressHelper,
            $this->entityNameResolver,
            $this->tokenAccessor,
            $this->emailAddressManager,
            $this->entityManager,
            $this->emailCacheManager,
            $this->templating,
            $mailboxManager
        );
    }

    public function testPreciseFullEmailAddressIsFullQualifiedName()
    {
        $emailAddress = '"Admin" <someaddress@example.com>';

        $this->entityRoutingHelper->expects($this->never())
            ->method('getEntity');

        $this->entityNameResolver->expects($this->never())
            ->method('getName');

        $this->emailAddressManager->expects($this->never())
            ->method('getEmailAddressRepository');

        $this->helper->preciseFullEmailAddress($emailAddress, null, null);
    }

    public function testPreciseFullEmailAddressViaRoutingHelper()
    {
        $emailAddress = 'someaddress@example.com';
        $expected     = '"Admin" <someaddress@example.com>';

        $ownerClass = 'Oro\Bundle\UserBundle\Entity\User';
        $ownerId    = 1;
        $owner      = $this->createMock($ownerClass);
        $ownerName  = 'Admin';

        $this->entityRoutingHelper->expects($this->once())
            ->method('getEntity')
            ->with($ownerClass, $ownerId)
            ->willReturn($owner);

        $this->entityNameResolver->expects($this->once())
            ->method('getName')
            ->with($owner)
            ->willReturn($ownerName);

        $this->emailAddressManager->expects($this->never())
            ->method('getEmailAddressRepository');

        $this->helper->preciseFullEmailAddress($emailAddress, $ownerClass, $ownerId);
        $this->assertEquals($expected, $emailAddress);
    }

    public function testPreciseFullEmailAddressViaRoutingHelperWithExcludeCurrentUser()
    {
        $emailAddress = 'someaddress@example.com';
        $expected     = false;

        $ownerClass = 'Oro\Bundle\UserBundle\Entity\User';
        $ownerId    = 1;
        $owner      = $this->createMock($ownerClass);

        $this->entityRoutingHelper->expects($this->once())
            ->method('getEntity')
            ->with($ownerClass, $ownerId)
            ->willReturn($owner);

        $this->tokenAccessor->expects($this->once())
            ->method('getUser')
            ->willReturn($owner);

        $this->helper->preciseFullEmailAddress($emailAddress, $ownerClass, $ownerId, true);
        $this->assertEquals($expected, $emailAddress);
    }

    public function testPreciseFullEmailAddressViaAddressManager()
    {
        $emailAddress = 'someaddress@example.com';
        $expected     = '"Admin" <someaddress@example.com>';

        $ownerClass = 'Oro\Bundle\UserBundle\Entity\User';
        $ownerId    = null;
        $ownerName  = 'Admin';

        $repo = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $otherOwner = $this->createMock('Oro\Bundle\UserBundle\Entity\User');

        $emailAddressObj = $this->createMock('Oro\Bundle\EmailBundle\Entity\EmailAddress');
        $emailAddressObj->expects($this->any())
            ->method('getOwner')
            ->willReturn($otherOwner);

        $repo->expects($this->once())
            ->method('findOneBy')
            ->willReturn($emailAddressObj);

        $this->emailAddressManager->expects($this->once())
            ->method('getEmailAddressRepository')
            ->with($this->entityManager)
            ->willReturn($repo);

        $this->entityNameResolver->expects($this->once())
            ->method('getName')
            ->with($otherOwner)
            ->willReturn($ownerName);

        $this->helper->preciseFullEmailAddress($emailAddress, $ownerClass, $ownerId);
        $this->assertEquals($expected, $emailAddress);
    }

    public function testPreciseFullEmailAddressViaAddressManagerWithExcludeCurrentUser()
    {
        $emailAddress = 'someaddress@example.com';
        $expected     = false;

        $ownerClass = 'Oro\Bundle\UserBundle\Entity\User';
        $ownerId    = null;

        $repo = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $otherOwner = $this->createMock('Oro\Bundle\UserBundle\Entity\User');

        $emailAddressObj = $this->createMock('Oro\Bundle\EmailBundle\Entity\EmailAddress');
        $emailAddressObj->expects($this->any())
            ->method('getOwner')
            ->willReturn($otherOwner);

        $repo->expects($this->once())
            ->method('findOneBy')
            ->willReturn($emailAddressObj);

        $this->emailAddressManager->expects($this->once())
            ->method('getEmailAddressRepository')
            ->with($this->entityManager)
            ->willReturn($repo);

        $this->tokenAccessor->expects($this->once())
            ->method('getUser')
            ->willReturn($otherOwner);

        $this->helper->preciseFullEmailAddress($emailAddress, $ownerClass, $ownerId, true);
        $this->assertEquals($expected, $emailAddress);
    }

    /**
     * @dataProvider preciseFullEmailAddressProvider
     */
    public function testPreciseFullEmailAddressWithProvider($expected, $emailAddress, $ownerClass, $ownerId)
    {
        $emailAddressRepository = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $emailAddressRepository->expects($this->any())
            ->method('findOneBy')
            ->will(
                $this->returnCallback(
                    function ($args) {
                        $emailAddress = new EmailAddress();
                        $emailAddress->setEmail($args['email']);
                        $emailAddress->setOwner(new TestUser($args['email'], 'FirstName', 'LastName'));

                        return $emailAddress;
                    }
                )
            );
        $this->emailAddressManager->expects($this->any())
            ->method('getEmailAddressRepository')
            ->with($this->identicalTo($this->entityManager))
            ->will($this->returnValue($emailAddressRepository));

        $this->entityNameResolver->expects($this->any())
            ->method('getName')
            ->with($this->isInstanceOf('Oro\Bundle\EmailBundle\Tests\Unit\Fixtures\Entity\TestUser'))
            ->will(
                $this->returnCallback(
                    function ($obj) {
                        return $obj->getFirstName() . ' ' . $obj->getLastName();
                    }
                )
            );
        if ($ownerId) {
            $this->entityRoutingHelper->expects($this->once())
                ->method('getEntity')
                ->with($ownerClass, $ownerId)
                ->will($this->returnValue(new TestUser($emailAddress, 'OwnerFirstName', 'OwnerLastName')));
        }

        $this->helper->preciseFullEmailAddress($emailAddress, $ownerClass, $ownerId);
        $this->assertEquals($expected, $emailAddress);
    }

    public function preciseFullEmailAddressProvider()
    {
        return [
            [
                '"FirstName LastName" <test@example.com>',
                'test@example.com',
                null,
                null
            ],
            [
                '"FirstName LastName" <test@example.com>',
                'test@example.com',
                'Oro\Bundle\EmailBundle\Tests\Unit\Fixtures\Entity\TestUser',
                null
            ],
            [
                '"OwnerFirstName OwnerLastName" <test@example.com>',
                'test@example.com',
                'Oro\Bundle\EmailBundle\Tests\Unit\Fixtures\Entity\TestUser',
                123
            ],
        ];
    }

    public function testPreciseFulEmailAddressNoResult()
    {
        $emailAddress = $expected = 'someaddress@example.com';

        $ownerClass = 'Oro\Bundle\UserBundle\Entity\User';
        $ownerId    = 2;

        $this->entityRoutingHelper->expects($this->once())
            ->method('getEntity')
            ->with($ownerClass, $ownerId)
            ->willReturn(null);

        $repo = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $repo->expects($this->once())
            ->method('findOneBy')
            ->willReturn(null);

        $this->emailAddressManager->expects($this->once())
            ->method('getEmailAddressRepository')
            ->with($this->entityManager)
            ->willReturn($repo);

        $this->entityNameResolver->expects($this->never())
            ->method('getName');

        $this->helper->preciseFullEmailAddress($emailAddress, $ownerClass, $ownerId);
        $this->assertEquals($emailAddress, $expected);
    }

    public function testGetUserTokenIsNull()
    {
        $this->tokenAccessor->expects($this->once())
            ->method('getUser')
            ->willReturn(null);

        $result = $this->helper->getUser();
        $this->assertNull($result);
    }

    /**
     * @param object $user
     * @param mixed  $expected
     *
     * @dataProvider getUserProvider
     */
    public function testGetUser($user)
    {
        $this->tokenAccessor->expects($this->once())
            ->method('getUser')
            ->willReturn($user);

        $result = $this->helper->getUser();
        $this->assertSame($user, $result);
    }

    public function getUserProvider()
    {
        return [
            [new User()],
        ];
    }

    public function testDecodeClassName()
    {
        $className = 'Class';

        $this->entityRoutingHelper->expects($this->once())
            ->method('resolveEntityClass')
            ->with($className)
            ->willReturn($className);

        $result = $this->helper->decodeClassName($className);
        $this->assertEquals($result, $className);
    }

    public function testBuildFullEmailAddress()
    {
        $user = $this->createMock('Oro\Bundle\UserBundle\Entity\User');
        $email = 'email';
        $format = 'format';
        $expected = '"format" <email>';

        $user->expects($this->once())
            ->method('getEmail')
            ->willReturn($email);

        $this->entityNameResolver->expects($this->once())
            ->method('getName')
            ->with($user)
            ->willReturn($format);

        $result = $this->helper->buildFullEmailAddress($user);
        $this->assertEquals($expected, $result);
    }

    public function testGetEmailBodyWithException()
    {
        $exception = $this->createMock('Oro\Bundle\EmailBundle\Exception\LoadEmailBodyException');
        $emailEntity = new Email();

        $this->emailCacheManager->expects($this->once())
            ->method('ensureEmailBodyCached')
            ->with($emailEntity)
            ->willThrowException($exception);

        $result = $this->helper->getEmailBody($emailEntity, null);
        $this->assertNull($result);
    }

    public function testGetEmailBody()
    {
        $emailEntity = new Email();
        $templatePath = 'template_path';
        $body = 'body';

        $this->emailCacheManager->expects($this->once())
            ->method('ensureEmailBodyCached')
            ->with($emailEntity);

        $this->templating->expects($this->once())
            ->method('render')
            ->with($templatePath, ['email' => $emailEntity])
            ->willReturn($body);

        $result = $this->helper->getEmailBody($emailEntity, $templatePath);
        $this->assertEquals($body, $result);
    }

    /**
     * @param string $prefix
     * @param string $subject
     * @param string $result
     *
     * @dataProvider prependWithProvider
     */
    public function testPrependWith($prefix, $subject, $result)
    {
        $this->assertEquals($result, $this->helper->prependWith($prefix, $subject));
    }

    public function prependWithProvider()
    {
        return [
            [
                'prefix'  => 'Re: ',
                'subject' => 'Subject',
                'result'  => 'Re: Subject',
            ],
            [
                'prefix'  => 'Fwd: ',
                'subject' => 'Subject',
                'result'  => 'Fwd: Subject',
            ],
            [
                'prefix'  => 'Re: ',
                'subject' => 'Re: Subject',
                'result'  => 'Re: Subject',
            ],
            [
                'prefix'  => 'Fwd: ',
                'subject' => 'Fwd: Subject',
                'result'  => 'Fwd: Subject',
            ],
            [
                'prefix'  => '',
                'subject' => 'Subject',
                'result'  => 'Subject',
            ],
        ];
    }
}
