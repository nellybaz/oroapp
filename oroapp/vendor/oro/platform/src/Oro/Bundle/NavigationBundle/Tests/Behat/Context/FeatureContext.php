<?php

namespace Oro\Bundle\NavigationBundle\Tests\Behat\Context;

use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Element\NodeElement;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\Symfony2Extension\Context\KernelDictionary;
use Doctrine\ORM\EntityManager;
use Oro\Bundle\NavigationBundle\Entity\NavigationHistoryItem;
use Oro\Bundle\NavigationBundle\Entity\Repository\HistoryItemRepository;
use Oro\Bundle\NavigationBundle\Tests\Behat\Element\MainMenu;
use Oro\Bundle\TestFrameworkBundle\Behat\Context\OroFeatureContext;
use Oro\Bundle\TestFrameworkBundle\Behat\Element\OroPageObjectAware;
use Oro\Bundle\TestFrameworkBundle\Behat\Isolation\MessageQueueIsolatorAwareInterface;
use Oro\Bundle\TestFrameworkBundle\Behat\Isolation\MessageQueueIsolatorInterface;
use Oro\Bundle\TestFrameworkBundle\Tests\Behat\Context\PageObjectDictionary;
use Oro\Bundle\UserBundle\Tests\Behat\Element\UserMenu;
use Symfony\Component\DomCrawler\Crawler;

class FeatureContext extends OroFeatureContext implements
    OroPageObjectAware,
    KernelAwareContext
{
    use PageObjectDictionary, KernelDictionary;

    /**
     * Save system configuration. It just press 'Save settings' button
     *
     * @When I save setting
     */
    public function iSaveSetting()
    {
        $this->getPage()->pressButton('Save settings');
    }

    /**
     * Assert that menu on left side
     *
     * @Then menu must be on left side
     * @Then menu is on the left side
     */
    public function menuMustBeOnLeftSide()
    {
        self::assertFalse($this->createElement('MainMenu')->hasClass('main-menu-top'));
    }

    /**
     * @Then menu must be at top
     * @Then menu is at the top
     */
    public function menuMustBeOnRightSide()
    {
        self::assertTrue($this->createElement('MainMenu')->hasClass('main-menu-top'));
    }

    /**
     * Click link in shortcuts search results
     * Example: And click "Create new user" in shortcuts search results
     * Example: And click "Compose Email" in shortcuts search results
     *
     * @When /^(?:|I )click "(?P<link>[^"]+)" in shortcuts search results$/
     */
    public function clickInShortcutsSearchResults($link)
    {
        $result = $this->spin(function (FeatureContext $context) use ($link) {
            $result = $context->getPage()->find('css', sprintf('li[data-value="%s"] a', $link));

            if ($result && $result->isVisible()) {
                return $result;
            }

            return false;
        });

        self::assertNotFalse($result, sprintf('Link "%s" not found', $link));

        $result->click();
    }

    /**
     * Pin or unpin page
     * Example: When I pin page
     * Example: And unpin page
     *
     * @When /^(?:|I )(?P<action>(pin|unpin)) page$/
     */
    public function iPinPage($action)
    {
        $button = $this->getPage()->findButton('Pin/unpin the page');
        self::assertNotNull($button, 'Pin/Unpin button not found on page');

        $activeClass = 'gold-icon';

        if ('pin' === $action) {
            if ($button->hasClass($activeClass)) {
                self::fail('Can\'t pin tab that already pinned');
            }

            $button->press();
        } elseif ('unpin' === $action) {
            if (!$button->hasClass($activeClass)) {
                self::fail('Can\'t unpin tab that not pinned before');
            }

            $button->press();
        }
    }

    /**
     * Assert that link present is NOT on pin bar
     * Example: And Users link must not be in pin holder
     * Example: And Create User link must not be in pin holder
     *
     * @Given /^(?P<link>[\w\s-]+) link must not be in pin holder$/
     * @Given /^"(?P<link>[\w\s-]+)" link must not be in pin holder$/
     */
    public function usersLinkMustNotBeInPinHolder($link)
    {
        $linkElement = $this->getPage()->findElementContains('PinBarLink', $link);
        self::assertFalse($linkElement->isValid(), "Link with '$link' anchor found, but it's not expected");
    }

    /**
     * Assert that link is present on pin bar
     * Example: Then Users link must be in pin holder
     * Example: Then Create User link must be in pin holder
     *
     * @Then /^(?P<link>[\w\s-]+) link must be in pin holder$/
     * @Then /^"(?P<link>[\w\s-]+)" link must be in pin holder$/
     */
    public function linkMustBeInPinHolder($link)
    {
        $linkElement = $this->getPage()->findElementContains('PinBarLink', $link);
        self::assertTrue($linkElement->isValid(), "Link with '$link' anchor not found");
    }

    /**
     * Click link in pin bar
     * Example: When follow Users link in pin holder
     * Example: When I follow Create User link in pin holder
     *
     * @When /^(?:|I )follow (?P<link>[\w\s-]+) link in pin holder$/
     * @When /^(?:|I )follow "(?P<link>[\w\s-]+)" link in pin holder$/
     */
    public function followUsersLinkInPinHolder($link)
    {
        $linkElement = $this->getPage()->findElementContains('PinBarLink', $link);
        self::assertTrue($linkElement->isValid(), "Link with '$link' anchor not found");

        $linkElement->click();
    }

    /**
     * @When press Create User button
     */
    public function pressCreateUserButton()
    {
        $this->getPage()->find('css', 'div.title-buttons-container a.btn-primary')->click();
    }

    /**
     * @When /^(?:|I )click icon bars$/
     */
    public function clickBarsIcon()
    {
        $this->getPage()->find('css', 'i.fa-bars')->click();
    }

    /**
     * Example: And go to next pages:
     *            | Reports & Segments/ Manage Custom Reports |
     *            | System/ User Management/ Users            |
     *            | Dashboards/ Manage Dashboards             |
     *            | System/ User Management/ Users            |
     *            | Dashboards/ Manage Dashboards             |
     *            | Dashboards/ Dashboard                     |
     *
     * @When /^(?:|I )go to next pages:$/
     */
    public function goToPages(TableNode $table)
    {
        /** @var MainMenu $menu */
        $menu = $this->createElement('MainMenu');
        /** @var EntityManager $em */
        $em = $this->getContainer()->get('doctrine')->getManager();
        $pages = $table->getColumn(0);

        $firstPage = array_shift($pages);
        $clicked = $menu->openAndClick($firstPage);

        $this->waitForAjax();

        $actualPage = $this->getLastPersistedPage($em);

        $clickedUrl = $clicked->getAttribute('href');
        $actualUrl = $actualPage->getUrl();

        self::assertEquals(
            $clickedUrl,
            $actualUrl,
            sprintf(
                "Clicked (%s) and persisted (%s) to the db links are different",
                $clickedUrl,
                $actualUrl
            )
        );

        $actualCount = $this->getPageTransitionCount($em);

        foreach ($pages as $page) {
            $crawler = new Crawler($this->getSession()->getPage()->getHtml());
            $actualTitle = $crawler->filter('head title')->first()->text();

            $clickedElement = $menu->openAndClick($page);
            $this->waitForAjax();
            $actualCount++;

            $result = $this->spin(function (FeatureContext $context) use ($actualCount, $em) {
                return $actualCount === $context->getPageTransitionCount($em);
            });

            self::assertNotFalse(
                $result,
                "New page '$actualTitle' was not persisted in the database"
            );

            $clickedUrl = $clickedElement->getAttribute('href');
            $actualUrl = '';

            $pageEquals = $this->spin(
                function (FeatureContext $context) use ($em, $clickedUrl, &$actualUrl) {
                    $actualUrl = $context->getLastPersistedPage($em)->getUrl();

                    return $clickedUrl === $actualUrl;
                }
            );

            self::assertNotFalse(
                $pageEquals,
                sprintf(
                    "Clicked (%s) and persisted (%s) to the db links are different",
                    $clickedUrl,
                    $actualUrl
                )
            );

            $result = $this->spin(function (FeatureContext $context) use ($actualTitle) {
                $lastHistoryLink = $context->getLastHistoryLink();
                $this->clickBarsIcon();

                if (false === strpos($actualTitle, $lastHistoryLink)) {
                    $context->getSession()->reload();

                    return false;
                }

                return true;
            });

            self::assertNotFalse($result, sprintf(
                'Page "%s" expected in last history link but got "%s"',
                $actualTitle,
                $this->getLastHistoryLink()
            ));
        }
    }

    /**
     * @param EntityManager $em
     * @return int
     */
    protected function getPageTransitionCount(EntityManager $em)
    {
        /** @var HistoryItemRepository $repository */
        $repository = $em->getRepository('OroNavigationBundle:NavigationHistoryItem');

        return array_sum(array_map(function (NavigationHistoryItem $item) use ($em) {
            $em->detach($item);

            return $item->getVisitCount();
        }, $repository->findAll()));
    }

    /**
     * Get last visited page (last updated item from history table)
     *
     * @param EntityManager $em
     * @return NavigationHistoryItem
     */
    protected function getLastPersistedPage(EntityManager $em)
    {
        /** @var HistoryItemRepository $repository */
        $repository = $em->getRepository('OroNavigationBundle:NavigationHistoryItem');
        $lastAddedPage = $repository->findOneBy([], ['visitedAt' => 'DESC']);

        return $lastAddedPage;
    }

    /**
     * @return string
     */
    private function getLastHistoryLink()
    {
        $this->chooseQuickMenuTab('History');
        $content = $this->createElement('History Content');

        return $content->find('css', 'ul li a')->getText();
    }

    /**
     * Assert history tab including links positions
     * Example: Then History must looks like:
     *            | Manage dashboards - Dashboards             |
     *            | Users - User Management - System           |
     *            | Manage Custom Reports - Reports & Segments |
     *
     * @Then /^(?P<tab>(History|Most Viewed|Favorites)) must looks like:$/
     */
    public function historyMustLooksLike($tab, TableNode $table)
    {
        $content = $this->createElement($tab.' Content');

        if (!$content->isVisible()) {
            $this->chooseQuickMenuTab($tab);
        }

        self::assertTrue($content->isVisible());

        /** @var NodeElement $item */
        foreach ($content->findAll('css', 'ul li a') as $key => $item) {
            self::assertEquals(
                $table->getRow($key)[0],
                trim($item->getText())
            );
        }
    }

    /**
     * @Then /^(?P<tab>(History|Most Viewed|Favorites)) must contain "(?P<link>(.*))"$/
     */
    public function historyMustContain($tab, $link)
    {
        self::assertTrue($this->isHistoryContain($tab, $link));
    }

    /**
     * @Then /^(?P<tab>(History|Most Viewed|Favorites)) must not contain "(?P<link>(.*))"$/
     */
    public function historyMustNotContain($tab, $link)
    {
        self::assertFalse($this->isHistoryContain($tab, $link));
    }

    /**
     * @param string $tab
     * @param string $link
     *
     * @return bool
     */
    protected function isHistoryContain($tab, $link)
    {
        $content = $this->createElement($tab . ' Content');

        if (!$content->isVisible()) {
            $this->chooseQuickMenuTab($tab);
        }

        self::assertTrue($content->isVisible());

        /** @var NodeElement $item */
        foreach ($content->findAll('css', 'ul li a') as $key => $item) {
            //Should be non strict comparison, because in behats we have something like non static "My Emails-John Doe"
            if (stripos(trim($item->getText()), trim($link)) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Assert that some of 'three minuses menu' tab is empty
     * Example: Then History is empty
     * Example: And Favorites is empty
     * Example: And Most Viewed is empty
     *
     * @Then /^(?P<tab>(History|Most Viewed|Favorites)) is empty$/
     */
    public function tabContentIsEmpty($tab)
    {
        $content = $this->createElement($tab.' Content');

        if (!$content->isVisible()) {
            $this->chooseQuickMenuTab($tab);
        }

        self::assertTrue($content->isVisible());
        self::assertCount(0, $content->findAll('css', 'ul li a'));
    }

    /**
     * Make active some of 'three minuses menu' tab
     * Example: Given I choose Most Viewed tab
     * Example: And choose Favorites tab
     * Example: And choose History tab
     *
     * @When /^(?:|I )choose (?P<link>[^"]*) tab$/
     * @When /^(?:|I )choose "(?P<link>[^"]*)" tab$/
     */
    public function chooseQuickMenuTab($link)
    {
        $linkElement = $this->getPage()->findLink($link);
        self::assertNotNull($linkElement);

        if (!$linkElement->isVisible()) {
            $this->clickBarsIcon();
        }

        $linkElement->click();
    }

    /**
     * Add or remove page from faborites
     * Example: Given I add page to favorites
     * Example: And I remove page from favorites
     *
     * @When /^(?:|I )(?P<action>(add|remove)) page (to|from) favorites$/
     */
    public function iAddOrRemovePageToFavorites($action)
    {
        $button = $this->createElement('AddToFavoritesButton');
        self::assertTrue($button->isVisible());

        $activeClass = 'gold-icon';

        if ('add' === $action) {
            if ($button->hasClass($activeClass)) {
                self::fail('Can\'t add page to favorites, it is already in favorites');
            }

            $button->press();
        } elseif ('remove' === $action) {
            if (!$button->hasClass($activeClass)) {
                self::fail('Can\'t remove page from favorites, it is not in favorites currently');
            }

            $button->press();
        }
    }

    /**
     * Removed record from favorites
     * Example: And I remove "Active Users - Users - User Management - System" from favorites
     *
     * @When /^(?:|I )remove "(?P<record>[^"]+)" from favorites$/
     */
    public function removeFromFavorites($record)
    {
        $content = $this->createElement('Favorites Content');
        self::assertTrue($content->isVisible());

        $item = $content->findElementContains('QuickMenuContentItem', $record);
        self::assertTrue($item->isVisible());

        $item->find('css', 'button.close')->press();
    }

    /**
     * @Then there are no pages in favorites
     */
    public function thereAreNoPagesInFavorites()
    {
        $content = $this->createElement('Favorites Content');
        self::assertTrue($content->isVisible());

        self::assertCount(0, $content->findAll('css', 'ul li'));
    }

    /**
     * Example: And I click on "Active Users - Users - User Management - System" in Favorites
     *
     * @Then /^(?:|I )click on "(?P<record>[^"]+)" in Favorites$/
     */
    public function iClickOnInFavorites($record)
    {
        $content = $this->createElement('Favorites Content');
        self::assertTrue($content->isVisible());

        $item = $content->findElementContains('QuickMenuContentItem', $record);
        self::assertTrue($item->isVisible());

        $item->find('css', 'a')->click();
    }

    /**
     * Assert main menu item existing
     *
     * @Given /^(?:|I )should(?P<negotiation>(\s| not ))see (?P<path>[\/\w\s]+) in main menu$/
     */
    public function iShouldSeeOrNotInMainMenu($negotiation, $path)
    {
        $isMenuItemVisibleExpectation = empty(trim($negotiation));
        /** @var MainMenu $mainMenu */
        $mainMenu = $this->createElement('MainMenu');
        $hasLink = $mainMenu->hasLink($path);

        self::assertSame($isMenuItemVisibleExpectation, $hasLink);
    }

    /**
     * Asserts that link with provided title exists in user menu
     *
     * @Given /^(?:|I )should(?P<negotiation>(\s| not ))see (?P<title>[\w\s]+) in user menu$/
     */
    public function iShouldSeeOrNotInUserMenu($title, $negotiation = null)
    {
        $isLinkVisibleInUserMenuExpectation = empty(trim($negotiation));
        /** @var UserMenu $userMenu */
        $userMenu = $this->createElement('UserMenu');
        self::assertTrue($userMenu->isValid());
        $userMenu->open();

        self::assertSame($isLinkVisibleInUserMenuExpectation, $userMenu->hasLink($title));
    }

    /**
     * Example: And I click Dashboards in menu tree
     *
     * @Given /^(?:|I )click (?P<record>[\w\s]+) in menu tree$/
     */
    public function iClickLinkInMenuTree($record)
    {
        $menuTree = $this->createElement('MenuTree');
        self::assertTrue($menuTree->isValid());
        $menuTree->clickLink($record);
    }
}
