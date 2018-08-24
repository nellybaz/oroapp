<?php

namespace Oro\Bundle\InvoiceBundle\Tests\Unit\Entity;

use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\InvoiceBundle\Entity\Invoice;
use Oro\Bundle\InvoiceBundle\Entity\InvoiceLineItem;
use Oro\Bundle\WebsiteBundle\Entity\Website;

class InvoiceEntityTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testProperties()
    {
        $now = new \DateTime('now');
        $properties = [
            ['id', '123'],
            ['invoiceNumber', 'invoice-test'],
            ['owner', new User()],
            ['organization', new Organization()],
            ['createdAt', $now, false],
            ['updatedAt', $now, false],
            ['invoiceDate', $now, false],
            ['paymentDueDate', $now, false],
            ['currency', 'USD'],
            ['poNumber', 'po-test'],
            ['customer', new Customer()],
            ['customerUser', new CustomerUser()],
            ['website', new Website()],
            ['subtotal', 12.55]
        ];

        $invoice = new Invoice();
        $this->assertPropertyAccessors($invoice, $properties);
        $this->assertPropertyCollection($invoice, 'lineItems', new InvoiceLineItem());
    }
}
