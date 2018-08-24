<?php

namespace Oro\Bundle\CustomerBundle\Tests\Unit\Entity\Ownership;

use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\Ownership\FrontendCustomerAwareTrait;

class FrontendCustomerAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FrontendCustomerAwareTrait
     */
    protected $frontendCustomerAwareTrait;

    protected function setUp()
    {
        $this->frontendCustomerAwareTrait = $this->getMockForTrait(FrontendCustomerAwareTrait::class);
    }

    public function testSetCustomer()
    {
        /** @var Customer|\PHPUnit_Framework_MockObject_MockObject $customer **/
        $customer = $this->createMock(Customer::class);
        $this->frontendCustomerAwareTrait->setCustomer($customer);

        $this->assertSame($customer, $this->frontendCustomerAwareTrait->getCustomer());
    }
}
