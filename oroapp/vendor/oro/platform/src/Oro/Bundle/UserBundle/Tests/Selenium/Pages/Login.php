<?php

namespace Oro\Bundle\UserBundle\Tests\Selenium\Pages;

use Oro\Bundle\TestFrameworkBundle\Pages\AbstractPage;

class Login extends AbstractPage
{
    public function __construct($testCase, $args = array('url' => '/'))
    {
        if (array_key_exists('url', $args)) {
            $this->redirectUrl = $args['url'];
        }
        parent::__construct($testCase);

        if (array_key_exists('remember', $args)) {
            $this->test->byId('remember_me')->click();
        }

        $this->username = $this->test->byId('prependedInput');
        $this->password = $this->test->byId('prependedInput2');
    }

    public function setUsername($value)
    {
        $this->username->clear();
        $this->username->value($value);
        return $this;
    }

    public function setPassword($value)
    {
        $this->password->clear();
        $this->password->value($value);
        return $this;
    }

    public function submit()
    {
        $this->test->byId('_submit')->click();
        $this->waitPageToLoad();
        $this->waitForAjax();
        return $this;
    }

    public function loggedIn()
    {
        if (strtolower($this->getTest()->title()) == 'login' or $this->getTest()->url()=='user/login') {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Method returns login form error message
     * @return string
     */
    public function getErrorLoginMessage()
    {
        $this->assertElementPresent("//form[@id='login-form']", 'No login form available');
        return $this->test->byXPath("//div[@class='alert alert-error']/div")->text();
    }
}
