<?php

namespace Oro\Bundle\MagentoBundle\Tests\Functional\Command;

use Oro\Bundle\MagentoBundle\Tests\Functional\Fixture\CopyCustomerAddressToContact\LoadMagentoChannel;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

/**
 * @dbIsolationPerTest
 */
class AddContactsToMagentoCustomersCommandTest extends WebTestCase
{
    public function setUp()
    {
        $this->initClient();
        $this->loadFixtures([LoadMagentoChannel::class]);
        $entityManager = $this->getContainer()->get('doctrine')->getManager();

        //remove contact from customer and delete it
        $customer = $this->getReference('customer_1');

        $contact = $customer->getContact();
        $entityManager->remove($contact);

        $customer->setContact(null);
        $entityManager->persist($customer);
        $entityManager->flush();
    }

    public function testCommand()
    {
        $customer = $this->getReference('customer_1');
        self::assertNull($customer->getContact());

        $result = $this->runCommand('oro:magento:customer:add-contacts', ['--batch-size=2']);

        self::assertNotNull($customer->getContact());

        $this->assertContains('Executing command started.', $result);
        $this->assertContains('Executing command finished.', $result);
    }
}
