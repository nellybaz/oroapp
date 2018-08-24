<?php

namespace Oro\Bridge\CustomerSales\Tests\Unit\Provider;

use Oro\Bridge\CustomerSales\Provider\Customer\CustomerIconProvider;
use Oro\Bundle\UIBundle\Model\Image;
use Oro\Bundle\CustomerBundle\Entity\Customer as Customer;

class CustomerIconProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var CustomerIconProvider */
    protected $customerIconProvider;

    public function setUp()
    {
        $this->customerIconProvider = new CustomerIconProvider();
    }

    public function testShouldReturnIconForMagentoCustomer()
    {
        $icon = $this->customerIconProvider->getIcon(new Customer());
        $this->assertEquals(
            new Image(Image::TYPE_FILE_PATH, ['path' => '/' . CustomerIconProvider::CUSTOMER_ICON_FILE]),
            $icon
        );
    }

    public function testShouldReturnNullForOtherEntities()
    {
        $icon = $this->customerIconProvider->getIcon(new \StdClass());
        $this->assertEquals(
            null,
            $icon
        );
    }
}
