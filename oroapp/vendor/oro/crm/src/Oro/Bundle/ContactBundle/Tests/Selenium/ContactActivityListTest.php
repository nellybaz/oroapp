<?php

namespace Oro\Bundle\ContactBundle\Tests\Selenium\Contacts;

use Oro\Bundle\TestFrameworkBundle\Test\Selenium2TestCase;
use Oro\Bundle\CallBundle\Tests\Selenium\Pages\Call;
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
    public function testLogCallActivity($contactName)
    {
        $callSubject = 'Call_'.mt_rand();
        $phoneNumber = mt_rand(100, 999).'-'.mt_rand(100, 999).'-'.mt_rand(1000, 9999);

        $login = $this->login();
        /** @var Contacts $login */
        $call = $login->openContacts('Oro\Bundle\ContactBundle')
            ->filterBy('Email', $contactName . '@mail.com')
            ->open([$contactName])
            ->assertTitle($contactName . '_first ' . $contactName . '_last' . ' - Contacts - Customers')
            ->runActionInGroup('Log call')
            ->openCall('Oro\Bundle\CallBundle');

        /** @var Call $call */
        $call
            ->setCallSubject($callSubject)
            ->setPhoneNumber($phoneNumber)
            ->logCall()
            ->assertMessage('Call saved')
            ->verifyActivity('Call', $callSubject);
    }

    public function testCloseWidgetWindow()
    {
        $login = $this->login();
        $login->closeWidgetWindow();
    }
}
