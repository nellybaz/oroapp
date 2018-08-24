<?php

namespace Oro\Bundle\EmailBundle\Tests\Unit\Builder;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Oro\Bundle\EmailBundle\Builder\EmailEntityBatchProcessor;
use Oro\Bundle\EmailBundle\Builder\EmailEntityBuilder;
use Oro\Bundle\EmailBundle\Entity\Manager\EmailAddressManager;
use Oro\Bundle\EmailBundle\Entity\Email;
use Oro\Bundle\EmailBundle\Entity\EmailAddress;
use Oro\Bundle\EmailBundle\Entity\EmailFolder;
use Oro\Bundle\EmailBundle\Entity\EmailRecipient;
use Oro\Bundle\EmailBundle\Exception\EmailAddressParseException;
use Oro\Bundle\EmailBundle\Tools\EmailAddressHelper;

class EmailEntityBuilderTest extends \PHPUnit_Framework_TestCase
{
    /** @var EmailEntityBuilder */
    private $builder;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $batch;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $doctrine;

    protected function setUp()
    {
        $this->batch = $this->createMock(EmailEntityBatchProcessor::class);
        $addrManager = new EmailAddressManager('Oro\Bundle\EmailBundle\Tests\Unit\Entity\TestFixtures', 'Test%sProxy');
        $this->doctrine = $this->createMock(ManagerRegistry::class);

        $this->builder = new EmailEntityBuilder($this->batch, $addrManager, new EmailAddressHelper(), $this->doctrine);
    }

    private function initEmailStorage()
    {
        $storage = array();
        $this->batch->expects($this->any())
            ->method('getAddress')
            ->will(
                $this->returnCallback(
                    function ($email) use (&$storage) {
                        return isset($storage[$email]) ? $storage[$email] : null;
                    }
                )
            );
        $this->batch->expects($this->any())
            ->method('addAddress')
            ->will(
                $this->returnCallback(
                    function ($obj) use (&$storage) {
                        /** @var EmailAddress $obj */
                        $storage[$obj->getEmail()] = $obj;
                    }
                )
            );
    }

    public function testEmailUser()
    {
        $emailMetadata = $this->createMock(ClassMetadata::class);
        $emailMetadata->expects(self::once())
            ->method('getFieldMapping')
            ->with('fromName')
            ->willReturn(['length' => 100]);
        $emailRecipientMetadata = $this->createMock(ClassMetadata::class);
        $emailRecipientMetadata->expects(self::once())
            ->method('getFieldMapping')
            ->with('name')
            ->willReturn(['length' => 100]);
        $em = $this->createMock(EntityManager::class);
        $em->expects(self::exactly(2))
            ->method('getClassMetadata')
            ->willReturnMap([
                [Email::class, $emailMetadata],
                [EmailRecipient::class, $emailRecipientMetadata]
            ]);
        $this->doctrine->expects(self::exactly(2))
            ->method('getManagerForClass')
            ->willReturn($em);

        $this->initEmailStorage();

        $date = new \DateTime('now');
        $emailUser = $this->builder->emailUser(
            'testSubject',
            '"Test" <test@example.com>',
            '"Test1" <test1@example.com>',
            $date,
            $date,
            $date,
            Email::NORMAL_IMPORTANCE,
            ['"Test2" <test2@example.com>', 'test1@example.com'],
            ['"Test3" <test3@example.com>', 'test4@example.com']
        );

        $this->assertEquals('testSubject', $emailUser->getEmail()->getSubject());
        $this->assertEquals('"Test" <test@example.com>', $emailUser->getEmail()->getFromName());
        $this->assertEquals('test@example.com', $emailUser->getEmail()->getFromEmailAddress()->getEmail());
        $this->assertEquals($date, $emailUser->getEmail()->getSentAt());

        $this->assertEquals($date, $emailUser->getEmail()->getInternalDate());
        $this->assertEquals(Email::NORMAL_IMPORTANCE, $emailUser->getEmail()->getImportance());
        $to = $emailUser->getEmail()->getRecipients(EmailRecipient::TO);
        $this->assertEquals('"Test1" <test1@example.com>', $to[0]->getName());
        $this->assertEquals('test1@example.com', $to[0]->getEmailAddress()->getEmail());
        $cc = $emailUser->getEmail()->getRecipients(EmailRecipient::CC);
        $this->assertEquals('"Test2" <test2@example.com>', $cc[1]->getName());
        $this->assertEquals('test2@example.com', $cc[1]->getEmailAddress()->getEmail());
        $this->assertEquals('test1@example.com', $cc[2]->getName());
        $this->assertEquals('test1@example.com', $cc[2]->getEmailAddress()->getEmail());
        $bcc = $emailUser->getEmail()->getRecipients(EmailRecipient::BCC);
        $this->assertEquals('"Test3" <test3@example.com>', $bcc[3]->getName());
        $this->assertEquals('test3@example.com', $bcc[3]->getEmailAddress()->getEmail());
        $this->assertEquals('test4@example.com', $bcc[4]->getName());
        $this->assertEquals('test4@example.com', $bcc[4]->getEmailAddress()->getEmail());
        $this->assertCount(2, $bcc);
        $this->assertTrue($emailUser->getEmail()->getEmailUsers()->contains($emailUser));
    }

    public function testToRecipient()
    {
        $metadata = $this->createMock(ClassMetadata::class);
        $metadata->expects(self::once())
            ->method('getFieldMapping')
            ->with('name')
            ->willReturn(['length' => 100]);
        $em = $this->createMock(EntityManager::class);
        $em->expects(self::once())
            ->method('getClassMetadata')
            ->with(EmailRecipient::class)
            ->willReturn($metadata);
        $this->doctrine->expects(self::once())
            ->method('getManagerForClass')
            ->with(EmailRecipient::class)
            ->willReturn($em);

        $this->initEmailStorage();
        $result = $this->builder->recipientTo('"Test" <test@example.com>');

        $this->assertEquals(EmailRecipient::TO, $result->getType());
        $this->assertEquals('"Test" <test@example.com>', $result->getName());
        $this->assertEquals('test@example.com', $result->getEmailAddress()->getEmail());
    }

    public function testCcRecipient()
    {
        $metadata = $this->createMock(ClassMetadata::class);
        $metadata->expects(self::once())
            ->method('getFieldMapping')
            ->with('name')
            ->willReturn(['length' => 100]);
        $em = $this->createMock(EntityManager::class);
        $em->expects(self::once())
            ->method('getClassMetadata')
            ->with(EmailRecipient::class)
            ->willReturn($metadata);
        $this->doctrine->expects(self::once())
            ->method('getManagerForClass')
            ->with(EmailRecipient::class)
            ->willReturn($em);

        $this->initEmailStorage();
        $result = $this->builder->recipientCc('"Test" <test@example.com>');

        $this->assertEquals(EmailRecipient::CC, $result->getType());
        $this->assertEquals('"Test" <test@example.com>', $result->getName());
        $this->assertEquals('test@example.com', $result->getEmailAddress()->getEmail());
    }

    public function testBccRecipient()
    {
        $metadata = $this->createMock(ClassMetadata::class);
        $metadata->expects(self::once())
            ->method('getFieldMapping')
            ->with('name')
            ->willReturn(['length' => 100]);
        $em = $this->createMock(EntityManager::class);
        $em->expects(self::once())
            ->method('getClassMetadata')
            ->with(EmailRecipient::class)
            ->willReturn($metadata);
        $this->doctrine->expects(self::once())
            ->method('getManagerForClass')
            ->with(EmailRecipient::class)
            ->willReturn($em);

        $this->initEmailStorage();
        $result = $this->builder->recipientBcc('"Test" <test@example.com>');

        $this->assertEquals(EmailRecipient::BCC, $result->getType());
        $this->assertEquals('"Test" <test@example.com>', $result->getName());
        $this->assertEquals('test@example.com', $result->getEmailAddress()->getEmail());
    }

    public function testFolder()
    {
        $storage = array();
        $this->batch->expects($this->exactly(10))
            ->method('getFolder')
            ->will(
                $this->returnCallback(
                    function ($type, $name) use (&$storage) {
                        return isset($storage[$type . $name]) ? $storage[$type . $name] : null;
                    }
                )
            );
        $this->batch->expects($this->exactly(5))
            ->method('addFolder')
            ->will(
                $this->returnCallback(
                    function ($obj) use (&$storage) {
                        /** @var EmailFolder $obj */
                        $storage[$obj->getType() . $obj->getFullName()] = $obj;
                    }
                )
            );

        $inbox = $this->builder->folderInbox('test', 'test');
        $sent = $this->builder->folderSent('test', 'test');
        $drafts = $this->builder->folderDrafts('test', 'test');
        $trash = $this->builder->folderTrash('test', 'test');
        $other = $this->builder->folderOther('test', 'test');

        $this->assertEquals('test', $inbox->getName());
        $this->assertEquals('test', $inbox->getFullName());
        $this->assertEquals('test', $sent->getName());
        $this->assertEquals('test', $sent->getFullName());
        $this->assertEquals('test', $drafts->getName());
        $this->assertEquals('test', $drafts->getFullName());
        $this->assertEquals('test', $trash->getName());
        $this->assertEquals('test', $trash->getFullName());
        $this->assertEquals('test', $other->getName());
        $this->assertEquals('test', $other->getFullName());
        $this->assertTrue($inbox === $this->builder->folderInbox('test', 'test'));
        $this->assertTrue($sent === $this->builder->folderSent('test', 'test'));
        $this->assertTrue($drafts === $this->builder->folderDrafts('test', 'test'));
        $this->assertTrue($trash === $this->builder->folderTrash('test', 'test'));
        $this->assertTrue($other === $this->builder->folderOther('test', 'test'));
    }

    public function testBody()
    {
        $body = $this->builder->body('testContent', true, true);

        $this->assertEquals('testContent', $body->getBodyContent());
        $this->assertEquals('testContent', $body->getTextBody());
        $this->assertFalse($body->getBodyIsText());
        $this->assertTrue($body->getPersistent());
    }

    public function testAttachment()
    {
        $attachment = $this->builder->attachment('testFileName', 'testContentType');

        $this->assertEquals('testFileName', $attachment->getFileName());
        $this->assertEquals('testContentType', $attachment->getContentType());
    }

    public function testAttachmentContent()
    {
        $attachmentContent = $this->builder->attachmentContent('testContent', 'testEncoding');

        $this->assertEquals('testContent', $attachmentContent->getContent());
        $this->assertEquals('testEncoding', $attachmentContent->getContentTransferEncoding());
    }

    public function testGetBatch()
    {
        $this->assertTrue($this->batch === $this->builder->getBatch());
    }

    public function testGetEmailAddressEntityClass()
    {
        $this->assertEquals(
            'Oro\Bundle\EmailBundle\Tests\Unit\Entity\TestFixtures\TestEmailAddressProxy',
            $this->builder->getEmailAddressEntityClass()
        );
    }

    /**
     * @dataProvider validateEmailDataProvider
     */
    public function testValidateEmailAddress($email, $expectedException, $message)
    {
        if ($expectedException) {
            $this->expectException($expectedException);
            $this->expectExceptionMessage($message);
        }
        $this->builder->address($email);
    }

    public function validateEmailDataProvider()
    {
        return [
            [
                'email' => 'testemail',
                'expectedException' => EmailAddressParseException::class,
                'expectedExceptionMessage' => 'Not valid email address'
            ],
            [
                'email' => str_repeat('domain', 50).'@mail.com',
                'expectedException' => EmailAddressParseException::class,
                'expectedExceptionMessage' => 'Email address is too long'
            ],
            [
                'email' => 'test@example.com',
                'expectedException' => null,
                'expectedExceptionMessage' => ''
            ]
        ];
    }
}
