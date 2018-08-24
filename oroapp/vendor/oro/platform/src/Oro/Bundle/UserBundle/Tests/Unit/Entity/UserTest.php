<?php

namespace Oro\Bundle\UserBundle\Tests\Unit\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Event\PreUpdateEventArgs;

use Oro\Bundle\EmailBundle\Entity\InternalEmailOrigin;
use Oro\Bundle\ImapBundle\Form\Model\AccountTypeModel;
use Oro\Bundle\OrganizationBundle\Entity\BusinessUnit;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\UserBundle\Entity\Email;
use Oro\Bundle\UserBundle\Entity\Group;
use Oro\Bundle\UserBundle\Entity\Role;
use Oro\Bundle\UserBundle\Entity\Status;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Entity\UserApi;

class UserTest extends AbstractUserTest
{
    /**
     * @return User
     */
    public function getUser()
    {
        return new User();
    }

    public function testEmail()
    {
        $user = $this->getUser();
        $mail = 'tony@mail.org';

        $this->assertNull($user->getEmail());

        $user->setEmail($mail);

        $this->assertEquals($mail, $user->getEmail());
    }

    public function testSetRolesCollection()
    {
        $user = $this->getUser();
        $role = new Role(User::ROLE_DEFAULT);
        $roles = new ArrayCollection([$role]);
        $user->setRolesCollection($roles);
        $this->assertSame($roles, $user->getRolesCollection());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $collection must be an instance of Doctrine\Common\Collections\Collection
     */
    public function testSetRolesCollectionThrowsException()
    {
        $user = $this->getUser();
        $user->setRolesCollection([]);
    }

    public function testGroups()
    {
        $user = $this->getUser();
        $role = new Role('ROLE_FOO');
        $group = new Group('Users');

        $group->addRole($role);

        $this->assertNotContains($role, $user->getRoles());

        $user->addGroup($group);

        $this->assertContains($group, $user->getGroups());
        $this->assertContains('Users', $user->getGroupNames());
        $this->assertTrue($user->hasRole($role));
        $this->assertTrue($user->hasGroup('Users'));

        $user->removeGroup($group);

        $this->assertFalse($user->hasRole($role));
    }

    public function testCallbacks()
    {
        $user = $this->getUser();
        $user->beforeSave();
        $this->assertInstanceOf('\DateTime', $user->getCreatedAt());
    }

    public function testStatuses()
    {
        $user = $this->getUser();
        $status = new Status();

        $this->assertNotContains($status, $user->getStatuses());
        $this->assertNull($user->getCurrentStatus());

        $user->addStatus($status);
        $user->setCurrentStatus($status);

        $this->assertContains($status, $user->getStatuses());
        $this->assertEquals($status, $user->getCurrentStatus());

        $user->setCurrentStatus();

        $this->assertNull($user->getCurrentStatus());

        $user->getStatuses()->clear();

        $this->assertNotContains($status, $user->getStatuses());
    }

    public function testEmails()
    {
        $user = $this->getUser();
        $email = new Email();

        $this->assertNotContains($email, $user->getEmails());

        $user->addEmail($email);

        $this->assertContains($email, $user->getEmails());

        $user->removeEmail($email);

        $this->assertNotContains($email, $user->getEmails());
    }

    public function testNames()
    {
        $user = $this->getUser();
        $first = 'James';
        $last = 'Bond';

        $user->setFirstName($first);
        $user->setLastName($last);
    }

    public function testDates()
    {
        $user = $this->getUser();
        $now = new \DateTime('-1 year');

        $user->setBirthday($now);
        $user->setLastLogin($now);

        $this->assertEquals($now, $user->getBirthday());
        $this->assertEquals($now, $user->getLastLogin());
    }

    /**
     * Data provider
     *
     * @return array
     */
    public function provider()
    {
        return [
            ['username', 'test'],
            ['email', 'test'],
            ['nameprefix', 'test'],
            ['firstname', 'test'],
            ['middlename', 'test'],
            ['lastname', 'test'],
            ['namesuffix', 'test'],
            ['birthday', new \DateTime()],
            ['password', 'test'],
            ['plainPassword', 'test'],
            ['confirmationToken', 'test'],
            ['passwordRequestedAt', new \DateTime()],
            ['passwordChangedAt', new \DateTime()],
            ['lastLogin', new \DateTime()],
            ['loginCount', 11],
            ['createdAt', new \DateTime()],
            ['updatedAt', new \DateTime()],
            ['salt', md5('user')],
        ];
    }

    public function testPreUpdateUnChanged()
    {
        $changeSet = [
            'lastLogin' => null,
            'loginCount' => null
        ];

        $user = $this->getUser();
        $updatedAt = new \DateTime('2015-01-01');
        $user->setUpdatedAt($updatedAt);

        /** @var \PHPUnit_Framework_MockObject_MockObject|PreUpdateEventArgs $event */
        $event = $this->getMockBuilder('Doctrine\ORM\Event\PreUpdateEventArgs')
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())
            ->method('getEntityChangeSet')
            ->will($this->returnValue($changeSet));

        $user->preUpdate($event);
        $this->assertEquals($updatedAt, $user->getUpdatedAt());
    }

    public function testPreUpdateChanged()
    {
        $changeSet = ['lastname' => null];

        $user = $this->getUser();
        $updatedAt = new \DateTime('2015-01-01');
        $user->setUpdatedAt($updatedAt);

        /** @var \PHPUnit_Framework_MockObject_MockObject|PreUpdateEventArgs $event */
        $event = $this->getMockBuilder('Doctrine\ORM\Event\PreUpdateEventArgs')
            ->disableOriginalConstructor()
            ->getMock();
        $event->expects($this->any())
            ->method('getEntityChangeSet')
            ->will($this->returnValue($changeSet));

        $user->preUpdate($event);
        $this->assertNotEquals($updatedAt, $user->getUpdatedAt());
    }

    public function testBusinessUnit()
    {
        $user = $this->getUser();
        $businessUnit = new BusinessUnit();

        $user->setBusinessUnits(new ArrayCollection([$businessUnit]));

        $this->assertContains($businessUnit, $user->getBusinessUnits());

        $user->removeBusinessUnit($businessUnit);

        $this->assertNotContains($businessUnit, $user->getBusinessUnits());

        $user->addBusinessUnit($businessUnit);

        $this->assertContains($businessUnit, $user->getBusinessUnits());
    }

    public function testOwners()
    {
        $entity = $this->getUser();
        $businessUnit = new BusinessUnit();

        $this->assertEmpty($entity->getOwner());

        $entity->setOwner($businessUnit);

        $this->assertEquals($businessUnit, $entity->getOwner());
    }

    public function testImapConfiguration()
    {
        $entity = $this->getUser();
        $imapConfiguration = $this->createMock('Oro\Bundle\ImapBundle\Entity\UserEmailOrigin');
        $imapConfiguration->expects($this->once())
            ->method('setActive')
            ->with(false);
        $imapConfiguration->expects($this->exactly(2))
            ->method('isActive')
            ->willReturn(true);
        $imapConfiguration->expects($this->once())
            ->method('getUser')
            ->willReturn($entity);

        $this->assertCount(0, $entity->getEmailOrigins());
        $this->assertNull($entity->getImapConfiguration());

        $entity->setImapConfiguration($imapConfiguration);
        $this->assertEquals($imapConfiguration, $entity->getImapConfiguration());
        $this->assertCount(1, $entity->getEmailOrigins());

        $entity->setImapConfiguration(null);
        $this->assertNull($entity->getImapConfiguration());
        $this->assertCount(0, $entity->getEmailOrigins());
    }

    public function testEmailOrigins()
    {
        $entity = $this->getUser();
        $origin1 = new InternalEmailOrigin();
        $origin2 = new InternalEmailOrigin();

        $this->assertCount(0, $entity->getEmailOrigins());

        $entity->addEmailOrigin($origin1);
        $entity->addEmailOrigin($origin2);
        $this->assertCount(2, $entity->getEmailOrigins());
        $this->assertSame($origin1, $entity->getEmailOrigins()->first());
        $this->assertSame($origin2, $entity->getEmailOrigins()->last());

        $entity->removeEmailOrigin($origin1);
        $this->assertCount(1, $entity->getEmailOrigins());
        $this->assertSame($origin2, $entity->getEmailOrigins()->first());
    }

    public function testGetApiKey()
    {
        $entity = $this->getUser();

        $this->assertEmpty($entity->getApiKeys(), 'Should return some key, even if is not present');

        $organization1 = new Organization();
        $organization1->setName('test1');

        $organization2 = new Organization();
        $organization2->setName('test2');

        $apiKey1 = new UserApi();
        $apiKey1->setApiKey($apiKey1->generateKey());
        $apiKey1->setOrganization($organization1);

        $apiKey2 = new UserApi();
        $apiKey2->setApiKey($apiKey2->generateKey());
        $apiKey2->setOrganization($organization2);

        $entity->addApiKey($apiKey1);
        $entity->addApiKey($apiKey2);

        $this->assertSame(
            $apiKey1->getApiKey(),
            $entity->getApiKeys()[0]->getApiKey(),
            'Should delegate call to userApi entity'
        );

        $this->assertEquals(
            new ArrayCollection([$apiKey1, $apiKey2]),
            $entity->getApiKeys()
        );

        $entity->removeApiKey($apiKey2);
        $this->assertEquals(
            new ArrayCollection([$apiKey1]),
            $entity->getApiKeys()
        );
    }

    public function testGetClass()
    {
        $user = $this->getUser();
        $this->assertInstanceOf($user->getClass(), $user);
    }

    public function testGetEmailFields()
    {
        $user = $this->getUser();
        $this->assertInternalType('array', $user->getEmailFields());
        $this->assertEquals(['email'], $user->getEmailFields());
    }

    public function testGetNotificationEmails()
    {
        $user = $this->getUser();
        $email = 'user@example.com';
        $user->setEmail($email);
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $user->getNotificationEmails());
        $this->assertEquals([$email], $user->getNotificationEmails()->toArray());
    }

    /**
     * @param bool $skipOrigin
     * @param string $accessToken
     * @param string $accountType
     *
     * @dataProvider setDataProviderAccountType
     */
    public function testGetAccountType($skipOrigin, $accessToken, $accountType)
    {
        $user = $this->getUser();
        $origin = $this->getMockBuilder('Oro\Bundle\ImapBundle\Entity\UserEmailOrigin')
            ->disableOriginalConstructor()
            ->getMock();

        $user->addEmailOrigin($origin);

        if ($skipOrigin) {
            $user->removeEmailOrigin($origin);
            $this->assertEmpty($user->getImapAccountType());
        } else {
            $origin->expects($this->once())->method('isActive')->willReturn(true);
            $origin->expects($this->once())->method('getMailbox')->willReturn(false);

            $origin->expects($this->any())->method('getAccessToken')->willReturn($accessToken);
            $this->assertEquals($accountType, $user->getImapAccountType()->getAccountType());
        }
    }

    /**
     * @return array
     */
    public function setDataProviderAccountType()
    {
        return [
            'empty origin' => [
                'skipOrigin' => true,
                'accessToken' => '',
                'accountType' => ''
            ],
            'expect Gmail account type' => [
                'skipOrigin' => false,
                'accessToken' => '12345',
                'accountType' => AccountTypeModel::ACCOUNT_TYPE_GMAIL
            ],
            'expect Other account type' => [
                'skipOrigin' => false,
                'accessToken' => '',
                'accountType' => AccountTypeModel::ACCOUNT_TYPE_OTHER
            ]
        ];
    }

    public function testOrganizations()
    {
        $user = $this->getUser();
        $disabledOrganization = new Organization();
        $organization = new Organization();
        $organization->setEnabled(true);

        $user->setOrganizations(new ArrayCollection([$organization]));
        $this->assertContains($organization, $user->getOrganizations());

        $user->removeOrganization($organization);
        $this->assertNotContains($organization, $user->getOrganizations());

        $user->addOrganization($organization);
        $this->assertContains($organization, $user->getOrganizations());

        $user->addOrganization($disabledOrganization);
        $result = $user->getOrganizations(true);
        $this->assertCount(1, $result);
        $this->assertSame($result->first(), $organization);
    }
}
