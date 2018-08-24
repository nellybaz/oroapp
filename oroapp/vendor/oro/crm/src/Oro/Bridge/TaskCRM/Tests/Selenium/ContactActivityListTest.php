<?php

namespace Oro\Bridge\CrmTask\Tests\Selenium;

use Oro\Bundle\TestFrameworkBundle\Test\Selenium2TestCase;
use Oro\Bundle\TaskBundle\Tests\Selenium\Pages\Task;
use Oro\Bundle\ContactBundle\Tests\Selenium\Pages\Contacts;

class ContactActivityListTest extends Selenium2TestCase
{
    /**
     * @return string
     */
    public function testCreateContact()
    {
        $contactName = 'Contact_'.mt_rand();

        $login = $this->login();
        /** @var Contacts $login */
        $login->openContacts('Oro\Bundle\ContactBundle')
            ->assertTitle('All - Contacts - Customers')
            ->add()
            ->assertTitle('Create Contact - Contacts - Customers')
            ->setFirstName($contactName . '_first')
            ->setLastName($contactName . '_last')
            ->setOwner('admin')
            ->setEmail($contactName . '@mail.com')
            ->save();

        return $contactName;
    }

    /**
     * @depends testCreateContact
     * @param $contactName
     */
    public function testAddTaskActivity($contactName)
    {
        $subject = 'Tasks_' . mt_rand();

        $login = $this->login();
        /** @var Contacts $login */
        $task = $login->openContacts('Oro\Bundle\ContactBundle')
            ->filterBy('Email', $contactName . '@mail.com')
            ->open([$contactName])
            ->runActionInGroup('Add task')
            ->openTask('Oro\Bundle\TaskBundle');

        /** @var Task $task */
        $task
            ->setSubject($subject)
            ->setDescription($subject)
            ->createTask()
            ->assertMessage('Task created successfully')
            ->verifyActivity('Task', $subject);
    }

    public function testCloseWidgetWindow()
    {
        $login = $this->login();
        $login->closeWidgetWindow();
    }
}
