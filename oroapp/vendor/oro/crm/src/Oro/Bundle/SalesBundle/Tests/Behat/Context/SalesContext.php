<?php

namespace Oro\Bundle\SalesBundle\Tests\Behat\Context;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\Symfony2Extension\Context\KernelDictionary;
use Oro\Bundle\ChannelBundle\Entity\Channel;
use Oro\Bundle\DataGridBundle\Tests\Behat\Element\Grid;
use Oro\Bundle\DataGridBundle\Tests\Behat\Element\GridRow;
use Oro\Bundle\EntityExtendBundle\Tools\ExtendHelper;
use Oro\Bundle\FormBundle\Tests\Behat\Element\OroForm;
use Oro\Bundle\NavigationBundle\Tests\Behat\Element\MainMenu;
use Oro\Bundle\SalesBundle\Entity\B2bCustomer;
use Oro\Bundle\SalesBundle\Entity\Lead;
use Oro\Bundle\SalesBundle\Entity\Opportunity;
use Oro\Bundle\TestFrameworkBundle\Behat\Context\OroFeatureContext;
use Oro\Bundle\TestFrameworkBundle\Behat\Element\OroPageObjectAware;
use Oro\Bundle\TestFrameworkBundle\Behat\Fixtures\FixtureLoaderAwareInterface;
use Oro\Bundle\TestFrameworkBundle\Behat\Fixtures\FixtureLoaderDictionary;
use Oro\Bundle\TestFrameworkBundle\Tests\Behat\Context\PageObjectDictionary;
use Oro\Bundle\UserBundle\Entity\User;

class SalesContext extends OroFeatureContext implements
    FixtureLoaderAwareInterface,
    OroPageObjectAware,
    KernelAwareContext
{
    use FixtureLoaderDictionary, PageObjectDictionary, KernelDictionary;

    /**
     * Load account_with_customers.yml alice fixture
     *
     * @Given crm has (Acme) Account with (Charlie) and (Samantha) customers
     */
    public function crmHasAcmeAccountWithCharlieAndSamanthaCustomers()
    {
        $this->fixtureLoader->loadFixtureFile('account_with_customers.yml');
    }

    /**
     * @Given /^two users (charlie) and (samantha) exists in the system$/
     */
    public function twoUsersExistsInTheSystem()
    {
        $this->fixtureLoader->loadFixtureFile('OroUserBundle:samantha_and_charlie_users.yml');
    }

    /**
     * Create Channel with enabled entities from frontend
     * Example: And "First Sales Channel" is a channel with enabled Business Customer entity
     * Example: And "First Sales Channel" is a channel with enabled Business Customer, Magento Customer entities
     *
     * @Given /^"(?P<channelName>([\w\s]+))" is a channel with enabled (?P<entities>(.+)) (entities|entity)$/
     */
    public function createChannelWithEnabledEntities($channelName, $entities)
    {
        /** @var MainMenu $menu */
        $menu = $this->createElement('MainMenu');
        $menu->openAndClick('System/ Channels');
        $this->waitForAjax();
        $this->getPage()->clickLink('Create Channel');
        $this->waitForAjax();

        /** @var OroForm $form */
        $form = $this->createElement('OroForm');
        $form->fillField('Name', $channelName);
        $form->fillField('Channel Type', 'Sales');
        $this->waitForAjax();

        /** @var Grid $grid */
        $grid = $this->createElement('Grid');
        $channelEntities = array_map('trim', explode(',', $entities));
        $rowsForDelete = [];

        foreach ($grid->getRows() as $row) {
            foreach ($channelEntities as $key => $channelEntity) {
                if (false !== stripos($row->getText(), $channelEntity)) {
                    unset($channelEntities[$key]);
                    continue 2;
                }
            }

            $rowsForDelete[] = $row;
        }

        /** @var GridRow $row */
        foreach ($rowsForDelete as $row) {
            $row->getActionLink('Delete')->click();
        }

        $entitySelector = $this->elementFactory->findElementContains('EntitySelector', 'Please select entity');

        foreach ($channelEntities as $channelEntity) {
            $entitySelector->click();

            $entityOption = $this->elementFactory->findElementContains('SelectToResultLabel', $channelEntity);
            self::assertTrue(
                $entityOption->isIsset(),
                sprintf('Entity "%s" was not found in entity selector', $channelEntity)
            );
            $entityOption->click();

            $this->getPage()->clickLink('Add');
        }

        $form->saveAndClose();
    }

    /**
     * Load accounts_with_customers.yml alice fixture
     *
     * @Given they has their own Accounts and Customers
     */
    public function accountHasBusinessCustomers()
    {
        $this->fixtureLoader->loadFixtureFile('OroMagentoBundle:accounts_with_customers.yml');
    }
}
