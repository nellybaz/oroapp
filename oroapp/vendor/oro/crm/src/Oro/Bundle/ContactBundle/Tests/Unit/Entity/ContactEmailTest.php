<?php

namespace Oro\Bundle\ContactBundle\Tests\Unit\Entity;

use Oro\Bundle\ContactBundle\Entity\Contact;
use Oro\Bundle\ContactBundle\Entity\ContactEmail;

class ContactEmailTest extends \PHPUnit_Framework_TestCase
{
    protected $email;

    protected function setUp()
    {
        $this->email = new ContactEmail();
    }

    public function testOwner()
    {
        $this->assertNull($this->email->getOwner());

        $contact = new Contact();
        $this->email->setOwner($contact);

        $this->assertEquals($contact, $this->email->getOwner());
    }
}
