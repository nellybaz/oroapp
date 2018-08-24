<?php

namespace Oro\Bundle\UserBundle\Tests\Selenium;

use Oro\Bundle\TestFrameworkBundle\Test\Selenium2TestCase;
use Oro\Bundle\UserBundle\Tests\Selenium\Pages\Users;

class UsersTest extends Selenium2TestCase
{
    /**
     * @return string
     */
    public function testCreateUser()
    {
        $username = 'User_'.mt_rand();

        $login = $this->login();
        /** @var Users $login */
        $login->openUsers('Oro\Bundle\UserBundle')
            ->assertTitle('All - Users - User Management - System')
            ->add()
            ->assertTitle('Create User - Users - User Management - System')
            ->setUsername($username)
            ->enable()
            ->setOwner('Main')
            ->setFirstPassword('123123q')
            ->setSecondPassword('123123q')
            ->setFirstName('First_'.$username)
            ->setLastName('Last_'.$username)
            ->setEmail($username.'@mail.com')
            ->setRoles(array('Manager', 'Marketing Manager'), true)
            ->setOrganization('OroCRM')
            ->uncheckInviteUser()
            ->save()
            ->assertMessage('User saved')
            ->toGrid()
            ->close()
            ->assertTitle('All - Users - User Management - System');

        return $username;
    }

    /**
     * @depends testCreateUser
     * @param $username
     * @return string
     */
    public function testUpdateUser($username)
    {
        $newUsername = 'Update_' . $username;

        $login = $this->login();
        /** @var Users $login */
        $login->openUsers('Oro\Bundle\UserBundle')
            ->filterBy('Username', $username)
            ->open(array($username))
            ->edit()
            ->assertTitle('First_' . $username . ' Last_' . $username . ' - Edit - Users - User Management - System')
            ->setUsername($newUsername)
            ->setFirstName('First_' . $newUsername)
            ->setLastName('Last_' . $newUsername)
            ->save()
            ->assertMessage('User saved')
            ->toGrid()
            ->assertTitle('All - Users - User Management - System')
            ->close();

        return $newUsername;
    }

    /**
     * @depends testUpdateUser
     * @param $username
     */
    public function testHistoryWindow($username)
    {
        $login = $this->login();
        /** @var Users $login */
        $login->openUsers('Oro\Bundle\UserBundle')
            ->filterBy('Username', $username)
            ->open(array($username))
            ->checkHistoryWindow()
            ->close();
    }

    /**
     * @depends testUpdateUser
     * @param $username
     */
    public function testDeleteUser($username)
    {
        $login = $this->login();
        /** @var Users $login */
        $login->openUsers('Oro\Bundle\UserBundle')
            ->filterBy('Username', $username)
            ->open(array($username))
            ->delete()
            ->assertTitle('All - Users - User Management - System')
            ->assertMessage('User deleted');

        $login->openUsers('Oro\Bundle\UserBundle')
            ->filterBy('Username', $username)
            ->assertNoDataMessage('No user was found to match your search');
    }
}
