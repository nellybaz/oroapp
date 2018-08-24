<?php

namespace Oro\Bundle\SalesBundle\Tests\Unit\Entity;

use Oro\Bundle\SalesBundle\Entity\B2bCustomer;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Util\ClassUtils;
use Oro\Bundle\SalesBundle\Entity\B2bCustomerEmail;
use Oro\Bundle\SalesBundle\Entity\B2bCustomerPhone;

class B2bCustomerTest extends \PHPUnit_Framework_TestCase
{
    const TEST_ID = 12;
    const TEST_NAME = 'test name';

    /** @var B2bCustomer */
    protected $entity;

    protected function setUp()
    {
        $this->entity = new B2bCustomer();
    }

    protected function tearDown()
    {
        unset($this->entity);
    }

    /**
     * @dataProvider getSetDataProvider
     */
    public function testGetSet($property, $value, $expected = null)
    {
        if (null !== $value) {
            call_user_func_array([$this->entity, 'set' . ucfirst($property)], [$value]);
        }
        $this->assertSame($expected, call_user_func([$this->entity, 'get' . ucfirst($property)]));
    }

    /**
     * @return array
     */
    public function getSetDataProvider()
    {
        $name         = uniqid('name');
        $address      = $this->createMock('Oro\Bundle\AddressBundle\Entity\Address');
        $account      = $this->createMock('Oro\Bundle\AccountBundle\Entity\Account');
        $contact      = $this->createMock('Oro\Bundle\ContactBundle\Entity\Contact');
        $channel      = $this->createMock('Oro\Bundle\ChannelBundle\Entity\Channel');
        $owner        = $this->createMock('Oro\Bundle\UserBundle\Entity\User');
        $organization = $this->createMock('Oro\Bundle\OrganizationBundle\Entity\Organization');
        $date         = new \DateTime();
        $lifetime     = 12.22;

        return [
            'id'              => ['id', null, null],
            'name'            => ['name', $name, $name],
            '$lifetime'       => ['lifetime', $lifetime, $lifetime],
            'shippingAddress' => ['shippingAddress', $address, $address],
            'billingAddress'  => ['billingAddress', $address, $address],
            'account'         => ['account', $account, $account],
            'contact'         => ['contact', $contact, $contact],
            'dataChannel'     => ['dataChannel', $channel, $channel],
            'owner'           => ['owner', $owner, $owner],
            'organization'    => ['organization', $organization, $organization],
            'createdAt'       => ['createdAt', $date, $date],
            'updatedAt'       => ['updatedAt', $date, $date],
        ];
    }
    
    public function testPrePersist()
    {
        $this->assertNull($this->entity->getCreatedAt());

        $this->entity->prePersist();

        $this->assertInstanceOf('DateTime', $this->entity->getCreatedAt());
        $this->assertLessThan(3, $this->entity->getCreatedAt()->diff(new \DateTime())->s);
    }

    public function testPreUpdate()
    {
        $this->assertNull($this->entity->getUpdatedAt());

        $this->entity->preUpdate();

        $this->assertInstanceOf('DateTime', $this->entity->getUpdatedAt());
        $this->assertLessThan(3, $this->entity->getUpdatedAt()->diff(new \DateTime())->s);
    }

    public function testToSting()
    {
        $this->entity->setName(self::TEST_NAME);
        $this->assertSame(self::TEST_NAME, (string)$this->entity);
    }

    public function testAddDuplicatePhone()
    {
        $customer = new B2bCustomer();
        $firstPhone = new B2bCustomerPhone('06001122334455');
        $secondPhone = new B2bCustomerPhone('07001122334455');
        $customerPhones = [$firstPhone, $secondPhone];

        $customer->resetPhones($customerPhones);

        $actual = $customer->getPhones();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $actual);
        $this->assertEquals($customerPhones, $actual->toArray());
        $customer->addPhone($secondPhone);

        $actual = $customer->getPhones();
        $this->assertEquals($customerPhones, $actual->toArray());
    }

    public function testAddNewPhone()
    {
        $customer       = new B2bCustomer();
        $firstPhone     = new B2bCustomerPhone('06001122334455');
        $secondPhone    = new B2bCustomerPhone('07001122334455');
        $thirdPhone     = new B2bCustomerPhone('08001122334455');
        $customerPhones = [$firstPhone, $secondPhone];

        $customer->resetPhones($customerPhones);
        $customer->addPhone($thirdPhone);
        $actual = $customer->getPhones();
        $this->assertEquals([$firstPhone, $secondPhone, $thirdPhone], $actual->toArray());
    }

    public function testRemoveExistingPhone()
    {
        $customer       = new B2bCustomer();
        $firstPhone     = new B2bCustomerPhone('06001122334455');
        $secondPhone    = new B2bCustomerPhone('07001122334455');
        $customerPhones = [$firstPhone, $secondPhone];

        $customer->resetPhones($customerPhones);
        $customer->removePhone($secondPhone);
        $actual = $customer->getPhones();
        $this->assertEquals([$firstPhone], $actual->toArray());
    }

    public function testRemoveNonExistingPhone()
    {
        $customer       = new B2bCustomer();
        $firstPhone     = new B2bCustomerPhone('06001122334455');
        $secondPhone    = new B2bCustomerPhone('07001122334455');
        $thirdPhone     = new B2bCustomerPhone('08001122334455');
        $customerPhones = [$firstPhone, $secondPhone];

        $customer->resetPhones($customerPhones);
        $customer->removePhone($thirdPhone);
        $actual = $customer->getPhones();
        $this->assertEquals([$firstPhone, $secondPhone], $actual->toArray());
    }

    public function testGetPrimaryPhone()
    {
        $firstPhone = new B2bCustomerPhone('06001122334455');
        $secondPhone = new B2bCustomerPhone('07001122334455');
        $customer = new B2bCustomer();
        $this->assertNull($customer->getPrimaryPhone());
        $customer->addPhone($firstPhone);
        $this->assertNull($customer->getPrimaryPhone());
        $customer->setPrimaryPhone($firstPhone);
        $this->assertSame($firstPhone, $customer->getPrimaryPhone());
        $customer->addPhone($secondPhone);
        $customer->setPrimaryPhone($secondPhone);
        $this->assertSame($secondPhone, $customer->getPrimaryPhone());
        $this->assertFalse($firstPhone->isPrimary());
    }

    public function testAddDuplicateEmail()
    {
        $customer = new B2bCustomer();
        $firstEmail = new B2bCustomerEmail('email-one@example.com');
        $secondEmail = new B2bCustomerEmail('email-two@example.com');
        $customerEmails = [$firstEmail, $secondEmail];

        $customer->resetEmails($customerEmails);

        $actual = $customer->getEmails();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $actual);
        $this->assertEquals($customerEmails, $actual->toArray());
        $customer->addEmail($secondEmail);

        $actual = $customer->getEmails();
        $this->assertEquals($customerEmails, $actual->toArray());
    }

    public function testAddNewEmail()
    {
        $customer       = new B2bCustomer();
        $firstEmail = new B2bCustomerEmail('email-one@example.com');
        $secondEmail = new B2bCustomerEmail('email-two@example.com');
        $thirdEmail     = new B2bCustomerEmail('email-three@example.com');
        $customerEmails = [$firstEmail, $secondEmail];

        $customer->resetEmails($customerEmails);
        $customer->addEmail($thirdEmail);
        $actual = $customer->getEmails();
        $this->assertEquals([$firstEmail, $secondEmail, $thirdEmail], $actual->toArray());
    }

    public function testRemoveExistingEmail()
    {
        $customer       = new B2bCustomer();
        $firstEmail     = new B2bCustomerEmail('email-one@example.com');
        $secondEmail    = new B2bCustomerEmail('email-two@example.com');
        $customerEmails = [$firstEmail, $secondEmail];

        $customer->resetEmails($customerEmails);
        $customer->removeEmail($secondEmail);
        $actual = $customer->getEmails();
        $this->assertEquals([$firstEmail], $actual->toArray());
    }

    public function testRemoveNonExistingEmail()
    {
        $customer       = new B2bCustomer();
        $firstEmail     = new B2bCustomerEmail('email-one@example.com');
        $secondEmail    = new B2bCustomerEmail('email-two@example.com');
        $thirdEmail     = new B2bCustomerEmail('email-three@example.com');
        $customerEmails = [$firstEmail, $secondEmail];

        $customer->resetEmails($customerEmails);
        $customer->removeEmail($thirdEmail);
        $actual = $customer->getEmails();
        $this->assertEquals([$firstEmail, $secondEmail], $actual->toArray());
    }

    public function testGetPrimaryEmail()
    {
        $customer = new B2bCustomer();
        $this->assertNull($customer->getPrimaryEmail());
        $email = new B2bCustomerEmail('email-one@example.com');
        $customer->addEmail($email);
        $this->assertNull($customer->getPrimaryEmail());
        $customer->setPrimaryEmail($email);
        $this->assertSame($email, $customer->getPrimaryEmail());
        $email2 = new B2bCustomerEmail('email-two@example.com');
        $customer->addEmail($email2);
        $customer->setPrimaryEmail($email2);
        $this->assertSame($email2, $customer->getPrimaryEmail());
        $this->assertFalse($email->isPrimary());
    }
}
