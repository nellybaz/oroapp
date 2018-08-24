<?php

namespace Oro\Bundle\ApplicationBundle\Tests\Behat\Context;

use Behat\Gherkin\Node\TableNode;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\Symfony2Extension\Context\KernelDictionary;
use Oro\Bundle\DataGridBundle\Tests\Behat\Element\TableRow;
use Oro\Bundle\FormBundle\Tests\Behat\Element\OroForm;
use Oro\Bundle\TestFrameworkBundle\Behat\Element\EntityPage;
use Oro\Bundle\TestFrameworkBundle\Behat\Context\OroFeatureContext;
use Oro\Bundle\TestFrameworkBundle\Behat\Context\SessionAliasProviderAwareInterface;
use Oro\Bundle\TestFrameworkBundle\Behat\Context\SessionAliasProviderAwareTrait;
use Oro\Bundle\TestFrameworkBundle\Behat\Element\OroPageObjectAware;
use Oro\Bundle\TestFrameworkBundle\Behat\Element\Tabs;
use Oro\Bundle\TestFrameworkBundle\Tests\Behat\Context\PageObjectDictionary;

class CommerceMainContext extends OroFeatureContext implements
    OroPageObjectAware,
    KernelAwareContext,
    SessionAliasProviderAwareInterface
{
    use PageObjectDictionary, KernelDictionary, SessionAliasProviderAwareTrait;

    /**
     * This step used for login bayer from frontend of commerce
     * Example1: Given I login as AmandaRCole@example.org buyer
     * Example2: Given I signed in as AmandaRCole@example.org on the store frontend$/
     *
     * @Given /^I login as (?P<email>\S+) buyer$/
     * @Given /^I signed in as (?P<email>\S+) on the store frontend$/
     *
     * @param string $email
     */
    public function loginAsBuyer($email)
    {
        $this->visitPath($this->getUrl('oro_customer_customer_user_security_logout'));
        $this->visitPath($this->getUrl('oro_customer_customer_user_security_login'));
        $this->waitForAjax();
        /** @var OroForm $form */
        $form = $this->createElement('OroForm');
        $table = new TableNode([
            ['Email Address', $email],
            ['Password', $email]
        ]);
        $form->fill($table);
        $form->pressButton('Sign In');
        $this->waitForAjax();
    }

    /**
     * This step used for login bayer from frontend of commerce with given session alias to able to switch to later
     *
     * Example: Given I login as AmandaRCole@example.org the "Buyer" at "other_session" session
     *
     * @Given /^(?:|I )login as (?P<email>\S+) the "(?P<sessionAlias>[^"]*)" at "(?P<sessionName>\w+)" session$/
     *
     * @param string $email
     * @param string $sessionName
     * @param string $sessionAlias
     */
    public function loginAsBuyerOnNamedSession($email, $sessionName, $sessionAlias)
    {
        $this->sessionAliasProvider->setSessionAlias($this->getMink(), $sessionName, $sessionAlias);
        $this->sessionAliasProvider->switchSessionByAlias($this->getMink(), $sessionAlias);
        $this->loginAsBuyer($email);
    }

    /**
     * Assert text by label in page.
     * Example: Then I should see Call Frontend Page with data:
     *            | Subject             | Proposed Charlie to star in new film |
     *            | Additional comments | Charlie was in a good mood           |
     *            | Call date & time    | Aug 24, 2017, 11:00 AM               |
     *            | Phone number        | (310) 475-0859                       |
     *            | Direction           | Outgoing                             |
     *            | Duration            | 5:30                                 |
     *
     * @Then /^(?:|I )should see (?P<entity>[\w\s]+) with data:$/
     */
    public function assertValuesByLabels($entity, TableNode $table)
    {
        /** @var EntityPage $entityPage */
        $entityPage = $this->createElement($entity);

        foreach ($table->getRows() as $row) {
            list($label, $value) = $row;

            $entityPage->assertPageContainsValue($label, $value);
        }
    }

    /**
     * @param string $path
     * @return string
     */
    protected function getUrl($path)
    {
        return $this->getContainer()->get('router')->generate($path);
    }

    /**
     * Assert tab containing specified data on page.
     * Example: Then I should see "Product Group" tab containing data:
     *            | Color: Green |
     *            | Size: L      |
     *
     * @Then /^(?:|I )should see "(?P<tabName>[^"]*)" tab containing data:$/
     */
    public function assertTabContainsData($tabName, TableNode $table)
    {
        $tabContainer = null;
        $tabContainers = $this->findAllElements('Tab Container');
        /** @var Tabs $element */
        foreach ($tabContainers as $element) {
            if ($element->hasTab($tabName)) {
                $tabContainer = $element;
                break;
            }
        }
        self::assertNotEmpty($tabContainer);

        $tabContainer->switchToTab($tabName);

        $activeTab = $tabContainer->getActiveTab();
        self::assertNotEmpty($activeTab);

        foreach ($table->getRows() as $row) {
            self::assertContains($this->fixStepArgument($row[0]), $activeTab->getText());
        }
    }
}
