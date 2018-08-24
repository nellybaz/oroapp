<?php

namespace Oro\Bundle\InstallerBundle\Tests\Selenium\Pages;

use Oro\Bundle\TestFrameworkBundle\Pages\AbstractPage;

/**
 * Class OroRequirements
 *
 * @package Oro\Bundle\InstallerBundle\Tests\Selenium\Pages
 */
class OroRequirements extends AbstractPage
{
    public function assertMandatoryRequirements()
    {
        $this->assertElementNotPresent(
            "//table[thead/tr/th[contains(text(), 'Mandatory requirements')]]//td[span[@class='icon-no']]",
            "Mandatory requirements are not met and the installation process cannot continue"
        );

        return $this;
    }

    public function assertOroRequirements()
    {
        $this->assertElementNotPresent(
            "//table[thead/tr/th[contains(text(), 'Oro specific requirements')]]//td[span[@class='icon-no']]",
            "Oro specific requirements are not met and the installation process cannot continue"
        );

        return $this;
    }

    public function assertPhpSettings()
    {
        $this->assertElementNotPresent(
            "//table[thead/tr/th[contains(text(), 'PHP settings')]]//td[span[@class='icon-no']]",
            "Php Settings are not met and the installation process cannot continue"
        );

        return $this;
    }

    public function next()
    {
        $this->test->moveto($this->test->byXpath("//a[@id = 'next-button']"));
        $this->test->byXpath("//a[@id = 'next-button']")->click();
        $this->waitPageToLoad();
        $this->waitForAjax();
        $this->assertTitle('Configuration - Oro Application installation');
        return new OroConfiguration($this->test);
    }
}
