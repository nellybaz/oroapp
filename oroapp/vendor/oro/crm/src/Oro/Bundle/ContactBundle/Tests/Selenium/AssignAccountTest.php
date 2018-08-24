<?php

namespace Oro\Bundle\ContactBundle\Tests\Selenium;

use Oro\Bundle\TestFrameworkBundle\Test\Selenium2TestCase;
use Oro\Bundle\AccountBundle\Tests\Selenium\Pages\Accounts;
use Oro\Bundle\ContactBundle\Tests\Selenium\Pages\Contacts;

/**
 * Class AssignAccountTest
 *
 * @package Oro\Bundle\ContactBundle\Tests\Selenium\Contacts
 */
class AssignAccountTest extends Selenium2TestCase
{
    /**
     * @return string
     */
    public function testCreateAccount()
    {
        $accountName = 'Account_'.mt_rand();

        $login = $this->login();
        /** @var Accounts $login */
        $login->openAccounts('Oro\Bundle\AccountBundle')
            ->assertTitle('All - Accounts - Customers')
            ->add()
            ->assertTitle('Create Account - Accounts - Customers')
            ->setName($accountName)
            ->setOwner('admin')
            ->save()
            ->assertMessage('Account saved');

        return $accountName;
    }

    /**
     * @depends testCreateAccount
     * @param $accountName
     */
    public function testAssignAccountToContact($accountName)
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
            ->assignEntityFromEmbeddedGrid('Account name', $accountName)
            ->save()
            ->assertMessage('Contact saved')
            ->openContacts('Oro\Bundle\ContactBundle')
            ->filterBy('Email', $contactName . '@mail.com')
            ->open(array($contactName))
            ->assertTitle($contactName . '_first ' . $contactName . '_last' . ' - Contacts - Customers')
            ->checkEntityFieldData('Account', $accountName);
    }
}
