<?php

namespace Oro\Bundle\CaseBundle\Tests\Unit\EventListener;

use Doctrine\Common\Collections\Collection;
use Oro\Bundle\CaseBundle\Entity\CaseMailboxProcessSettings;
use Oro\Bundle\CaseBundle\EventListener\MailboxSavedListener;
use Oro\Bundle\EmailBundle\Entity\Mailbox;
use Oro\Bundle\EmailBundle\Event\MailboxSaved;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\TagBundle\Entity\TagManager;

class MailboxSavedListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TagManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $tagManager;

    /**
     * @var MailboxSavedListener
     */
    private $listener;

    protected function setUp()
    {
        $this->tagManager = $this->createMock(TagManager::class);

        $this->listener = new MailboxSavedListener($this->tagManager);
    }

    public function testOnMailboxSave()
    {
        $event = $this->createMailboxSavedEventMock();

        $mailbox = $this->createMailboxMock();

        $settings = $this->createCaseMailboxProcessSettingsMock();

        $mailbox->method('getProcessSettings')
            ->willReturn($settings);

        $event->method('getMailbox')
            ->willReturn($mailbox);

        $organization = $this->createOrganizationMock();

        $mailbox->method('getOrganization')
            ->willReturn($organization);

        $tags = $this->createCollectionMock();

        $settings->method('getTags')
            ->willReturn($tags);

        $this->tagManager
            ->expects(static::once())
            ->method('setTags')
            ->with($settings, $tags);

        $this->tagManager
            ->expects(static::once())
            ->method('saveTagging')
            ->with($settings, true, $organization);

        $this->listener->onMailboxSave($event);
    }

    public function testOnMailboxSaveNotCaseSettings()
    {
        $event = $this->createMailboxSavedEventMock();

        $mailbox = $this->createMailboxMock();

        $mailbox->method('getProcessSettings')
            ->willReturn(new \stdClass());

        $event->method('getMailbox')
            ->willReturn($mailbox);

        $this->tagManager
            ->expects(static::never())
            ->method('saveTagging');

        $this->listener->onMailboxSave($event);
    }

    /**
     * @return MailboxSaved|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createMailboxSavedEventMock()
    {
        return $this->createMock(MailboxSaved::class);
    }

    /**
     * @return Mailbox|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createMailboxMock()
    {
        return $this->createMock(Mailbox::class);
    }

    /**
     * @return Organization|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createOrganizationMock()
    {
        return $this->createMock(Organization::class);
    }

    /**
     * @return CaseMailboxProcessSettings|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createCaseMailboxProcessSettingsMock()
    {
        return $this->createMock(CaseMailboxProcessSettings::class);
    }

    /**
     * @return Collection|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createCollectionMock()
    {
        return $this->createMock(Collection::class);
    }
}
