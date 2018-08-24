<?php

namespace Oro\Bundle\AccountBundle\Tests\Behat\Context;

use Behat\Mink\Element\NodeElement;
use Oro\Bundle\TestFrameworkBundle\Behat\Context\OroFeatureContext;
use Oro\Bundle\TestFrameworkBundle\Behat\Element\OroPageObjectAware;
use Oro\Bundle\TestFrameworkBundle\Tests\Behat\Context\PageObjectDictionary;

class FeatureContext extends OroFeatureContext implements OroPageObjectAware
{
    use PageObjectDictionary;

    /**
     * @When /^(?:|I )select (?P<title>([\w\s]+)) as email attachment from record$/
     */
    public function selectEmailAttachment($title)
    {
        $page = $this->getPage();
        $page->find('css', '.attach-file')->click();
        $attachment = $page->findElementContains('AttachmentListRow', $title);
        self::assertTrue($attachment->isValid(), sprintf('"%s" attachment not found', $title));

        $attachment->find('css', 'input')->check();
        $page->find('css', 'a.attach')->click();
    }

    /**
     * @Then /^(?P<contactsCount>(?:|one|two|\d+)) contacts added to form$/
     */
    public function assertCountContactsAddedToForm($contactsCount)
    {
        self::assertCount($this->getCount($contactsCount), $this->getFormContacts());
    }

    /**
     * @When /^(?:|I should )see (?P<contactsCount>(?:|one|two|\d+)) contact(?:|s)$/
     */
    public function assertCountOfContacts($contactsCount)
    {
        self::assertCount(
            $this->getCount($contactsCount),
            $this->getSession()->getPage()->findAll('css', '.contact-box')
        );
    }

    /**
     * @When :name should be default contact
     */
    public function assertDefaultContact($name)
    {
        $contactBoxes = $this->getSession()->getPage()->findAll('css', '.contact-box');

        /** @var NodeElement $box */
        foreach ($contactBoxes as $box) {
            if (false !== strpos($box->getText(), $name)) {
                self::assertRegExp('/Default Contact/i', $box->getText());
                return;
            }
        }

        self::fail(sprintf('Can\'t find contact with "%s" name', $name));
    }


    /**
     * @Then /^(?:|I )select ([\w\s]*) contact as default$/
     */
    public function selectContactAsDefault($name)
    {
        foreach ($this->getFormContacts() as $contact) {
            if (false !== strpos($contact->getText(), $name)) {
                $contact->find('css', 'input[type="radio"]')->click();

                return;
            }
        }

        self::fail(sprintf('Can\'t find contact with "%s" name', $name));
    }

    /**
     * @Then delete :name contact
     */
    public function deleteContact($name)
    {
        foreach ($this->getFormContacts() as $contact) {
            if (false !== strpos($contact->getText(), $name)) {
                $contact->find('css', 'i.fa-close')->click();

                return;
            }
        }

        self::fail(sprintf('Can\'t find contact with "%s" name', $name));
    }

    /**
     * @return NodeElement[]
     */
    protected function getFormContacts()
    {
        $page = $this->getSession()->getPage();

        return $page->findAll('css', 'div[id^="oro_account_form_contacts"] .list-group-item');
    }

    /**
     * @param int|string $count
     * @return int
     */
    protected function getCount($count)
    {
        switch (trim($count)) {
            case '':
                return 1;
            case 'one':
                return 1;
            case 'two':
                return 2;
            default:
                return (int) $count;
        }
    }
}
