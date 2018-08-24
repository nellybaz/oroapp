<?php

namespace Oro\Bundle\ContactBundle\Tests\Unit\Entity;

use Oro\Bundle\SalesBundle\Entity\B2bCustomer;
use Oro\Bundle\SalesBundle\Entity\B2bCustomerPhone;

class B2bCustomerPhoneTest extends \PHPUnit_Framework_TestCase
{
    protected $phone;

    protected function setUp()
    {
        $this->phone = new B2bCustomerPhone();
    }

    public function testOwner()
    {
        $this->assertNull($this->phone->getOwner());

        $contact = new B2bCustomer();
        $this->phone->setOwner($contact);

        $this->assertEquals($contact, $this->phone->getOwner());
    }
}
