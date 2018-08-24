<?php

namespace Oro\Bundle\CustomerBundle\Tests\Selenium\Pages;

use Oro\Bundle\CustomerBundle\Tests\Selenium\Entity\SeleniumAddress;
use Oro\Bundle\CustomerBundle\Tests\Selenium\Helper\SeleniumTestHelper;
use Oro\Bundle\TestFrameworkBundle\Pages\AbstractPage;

class AddAddressPage extends AbstractPage
{
    use SeleniumTestHelper;

    const ADD_ACCOUNT_ADDRESS_URL = '/customer/user/address/customer/%s/create';
    const ADDRESS_TYPE_XPATH = "//span[starts-with(text(),'%s')]";

    /**
     * @param int $customerId
     */
    public function openAddCustomerAddressPage($customerId)
    {
        $this->getTest()->url(sprintf(self::ADD_ACCOUNT_ADDRESS_URL, $customerId));
        $this->waitPageToLoad();
        $this->waitForAjax();
    }

    /**
     * @param SeleniumAddress $address
     */
    public function addNewAddress(SeleniumAddress $address)
    {
        $this->getTest()->byName('oro_customer_typed_address[street]')->value($address->street);
        $this->getTest()->byName('oro_customer_typed_address[city]')->value($address->city);
        $this->getTest()->byName('oro_customer_typed_address[postalCode]')->value($address->zip);

        $this->getElement("//div[starts-with(@id, 's2id_oro_customer_typed_address_country-')]")->click();
        $this->waitForAjax();
        $this->getTest()->keys($address->county . \PHPUnit_Extensions_Selenium2TestCase_Keys::ENTER);
        $this->waitForAjax();
        $this->getElement("//div[starts-with(@id, 's2id_oro_customer_typed_address_region-')]")->click();
        $this->waitForAjax();
        $this->getTest()->keys($address->state . \PHPUnit_Extensions_Selenium2TestCase_Keys::ENTER);
        $this->getTest()->execute(['script' => "window.scrollBy(0,500)", 'args' => []]);
        $this->waitPageToLoad();
        $this->waitForAjax();

        if ($address->isBilling) {
            $this->getElement($this->getAddressTypeXpath('Billing'))->click();
        }
        if ($address->isShipping) {
            $this->getElement($this->getAddressTypeXpath('Shipping'))->click();
        }
        if ($address->isDefaultBilling) {
            $this->getElement($this->getAddressTypeXpath('Default Billing'))->click();
        }
        if ($address->isDefaultShipping) {
            $this->getElement($this->getAddressTypeXpath('Default Shipping'))->click();
        }

        $this->getElement("//button[@type='submit']")->click();
        $this->waitPageToLoad();
        $this->waitForAjax();
    }

    /**
     * @param string $typeName
     * @return string
     */
    protected function getAddressTypeXpath($typeName)
    {
        return sprintf("//span[starts-with(text(),'%s')]/parent::label", $typeName);
    }
}
