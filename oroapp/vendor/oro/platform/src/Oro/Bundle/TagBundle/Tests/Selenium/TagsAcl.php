<?php

namespace Oro\Bundle\TagBundle\Tests\Selenium;

use Oro\Bundle\TagBundle\Tests\Selenium\Pages\Tags;
use Oro\Bundle\TestFrameworkBundle\Test\Selenium2TestCase;
use Oro\Bundle\UserBundle\Tests\Selenium\Pages\Roles;
use Oro\Bundle\UserBundle\Tests\Selenium\Pages\Users;

class TagsAcl extends Selenium2TestCase
{
    public function testCreateRole()
    {
        $randomPrefix = mt_rand();
        $login = $this->login();
        /** @var Roles $login*/
        $login->openRoles('Oro\Bundle\UserBundle')
            ->add()
            ->setLabel('Label_' . $randomPrefix)
            ->setEntity('Tag', array('Create', 'Edit', 'Delete', 'View'), 'Organization')
            ->setEntity('User', array('Create', 'Edit', 'Delete', 'View', 'Assign'), 'Organization')
            ->setEntity('Group', array('Create', 'Edit', 'Delete', 'View', 'Assign'), 'Organization')
            ->setEntity('Role', array('Create', 'Edit', 'Delete', 'View', 'Assign'), 'Organization')
            ->setCapability(
                array(
                    'Tag assign/unassign',
                    'Unassign all tags from entities'),
                'System'
            )
            ->save()
            ->assertMessage('Role saved')
            ->close();

        return ($randomPrefix);
    }

    /**
     * @depends testCreateRole
     * @param $role
     * @return string
     */
    public function testCreateUser($role)
    {
        $userName = 'User_'.mt_rand();

        $login = $this->login();
        /** @var Users $login*/
        $login->openUsers('Oro\Bundle\UserBundle')
            ->add()
            ->assertTitle('Create User - Users - User Management - System')
            ->setUsername($userName)
            ->setOwner('Main')
            ->enable()
            ->setFirstPassword('123123q')
            ->setSecondPassword('123123q')
            ->setFirstName('First_'.$userName)
            ->setLastName('Last_'.$userName)
            ->setEmail($userName.'@mail.com')
            ->setRoles(array('Label_' . $role))
            ->setOrganization('OroCRM')
            ->uncheckInviteUser()
            ->save()
            ->assertMessage('User saved')
            ->toGrid()
            ->close()
            ->assertTitle('All - Users - User Management - System');

        return $userName;
    }

    /**
     * @depends testCreateUser
     * @return string
     */
    public function testCreateTag()
    {
        $tagName = 'Tag_'.mt_rand();

        $login = $this->login();
        /** @var Tags $login*/
        $login->openTags('Oro\Bundle\TagBundle')
            ->add()
            ->assertTitle('Create Tag - Tags - System')
            ->setTagName($tagName)
            ->setOwner('admin')
            ->save()
            ->assertMessage('Tag saved')
            ->assertTitle('All - Tags - System')
            ->close();

        return $tagName;
    }

    /**
     * @depends testCreateUser
     * @depends testCreateRole
     * @depends testCreateTag
     * @param $username
     * @param $role
     * @param $tagName
     * @param string $aclCase
     * @dataProvider columnTitle
     */
    public function testTagAcl($aclCase, $username, $role, $tagName)
    {
        $roleName = 'Label_' .  $role;
        $login = $this->login();
        switch ($aclCase) {
            case 'delete':
                $this->deleteAcl($login, $roleName, $username, $tagName);
                break;
            case 'update':
                $this->updateAcl($login, $roleName, $username, $tagName);
                break;
            case 'create':
                $this->createAcl($login, $roleName, $username);
                break;
            case 'view list':
                $this->viewListAcl($login, $roleName, $username);
                break;
            case 'assign unassign':
                $this->assignAcl($login, $roleName, $username);
                break;
        }
    }

    public function deleteAcl($login, $role, $username, $tagName)
    {
        /** @var Roles $login*/
        $login->openRoles('Oro\Bundle\UserBundle')
            ->filterBy('Label', $role)
            ->open(array($role))
            ->setEntity('Tag', array('Delete'), 'None')
            ->save()
            ->logout()
            ->setUsername($username)
            ->setPassword('123123q')
            ->submit()
            ->openTags('Oro\Bundle\TagBundle')
            ->checkContextMenu($tagName, 'Delete');
    }

    public function updateAcl($login, $role, $username, $tagName)
    {
        /** @var Roles $login*/
        $login->openRoles('Oro\Bundle\UserBundle')
            ->filterBy('Label', $role)
            ->open(array($role))
            ->setEntity('Tag', array('Edit'), 'None')
            ->save()
            ->logout()
            ->setUsername($username)
            ->setPassword('123123q')
            ->submit()
            ->openTags('Oro\Bundle\TagBundle')
            ->checkContextMenu($tagName, 'Update');
    }

    public function createAcl($login, $role, $username)
    {
        /** @var Roles $login*/
        $login->openRoles('Oro\Bundle\UserBundle')
            ->filterBy('Label', $role)
            ->open(array($role))
            ->setEntity('Tag', array('Create'), 'None')
            ->save()
            ->logout()
            ->setUsername($username)
            ->setPassword('123123q')
            ->submit()
            ->openTags('Oro\Bundle\TagBundle')
            ->assertElementNotPresent("//div[@class = 'container-fluid']//a[contains(., 'Create Tag')]");
    }

    public function viewListAcl($login, $role, $username)
    {
        /** @var Roles $login*/
        $login->openRoles('Oro\Bundle\UserBundle')
            ->filterBy('Label', $role)
            ->open(array($role))
            ->setEntity('Tag', array('View'), 'None')
            ->save()
            ->logout()
            ->setUsername($username)
            ->setPassword('123123q')
            ->submit()
            ->openTags('Oro\Bundle\TagBundle')
            ->assertTitle('403 - Forbidden');
    }

    public function assignAcl($login, $role, $username)
    {
        /** @var Roles $login*/
        $login->openRoles('Oro\Bundle\UserBundle')
            ->filterBy('Label', $role)
            ->open(array($role))
            ->setCapability(array('Tag assign/unassign'), 'None')
            ->save()
            ->logout()
            ->setUsername($username)
            ->setPassword('123123q')
            ->submit()
            ->openUsers('Oro\Bundle\UserBundle')
            ->add()
            ->assertElementNotPresent(
                "//div[@class='select2-container select2-container-multi select2-container-disabled']"
            );
    }

    /**
     * Data provider for Tags ACL test
     *
     * @return array
     */
    public function columnTitle()
    {
        return array(
            'assign unassign' => array('assign unassign'),
            'delete' => array('delete'),
            'update' => array('update'),
            'create' => array('create'),
            'view list' => array('view list'),
        );
    }
}
