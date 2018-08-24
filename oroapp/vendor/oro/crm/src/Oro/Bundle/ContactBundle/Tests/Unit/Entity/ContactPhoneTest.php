<?php

namespace Oro\Bundle\ContactBundle\Tests\Unit\Entity;

use Oro\Bundle\ContactBundle\Entity\Contact;
use Oro\Bundle\ContactBundle\Entity\ContactPhone;

class ContactPhoneTest extends \PHPUnit_Framework_TestCase
{
    protected $phone;

    protected function setUp()
    {
        $this->phone = new ContactPhone();
    }

    public function testOwner()
    {
        $this->assertNull($this->phone->getOwner());

        $contact = new Contact();
        $this->phone->setOwner($contact);

        $this->assertEquals($contact, $this->phone->getOwner());
    }
}
