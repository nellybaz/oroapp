<?php

namespace Oro\Bundle\SalesBundle\Tests\Functional\ImportExport\Strategy;

use Akeneo\Bundle\BatchBundle\Entity\JobExecution;
use Akeneo\Bundle\BatchBundle\Entity\StepExecution;

use Oro\Bundle\AddressBundle\Entity\Address;
use Oro\Bundle\AddressBundle\Entity\Country;
use Oro\Bundle\ImportExportBundle\Context\StepExecutionProxyContext;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\AccountBundle\Entity\Account;
use Oro\Bundle\ChannelBundle\Entity\Channel;
use Oro\Bundle\SalesBundle\Entity\B2bCustomer;
use Oro\Bundle\SalesBundle\ImportExport\Strategy\B2bConfigurableAddOrReplaceStrategy;

/**
 * @dbIsolationPerTest
 */
class B2bConfigurableAddOrReplaceStrategyTest extends WebTestCase
{
    /**
     * @var B2bConfigurableAddOrReplaceStrategy
     */
    protected $strategy;

    /**
     * @var StepExecutionProxyContext
     */
    protected $context;

    /**
     * @var StepExecution
     */
    protected $stepExecution;

    protected function setUp()
    {
        $this->initClient(
            ['debug' => false],
            array_merge($this->generateBasicAuthHeader(), array('HTTP_X-CSRF-Header' => 1))
        );
        $this->client->useHashNavigation(true);

        $this->loadFixtures(
            [
                'Oro\Bundle\SalesBundle\Tests\Functional\Fixture\LoadSalesBundleFixtures'
            ]
        );

        $container = $this->getContainer();

        $this->strategy = new B2bConfigurableAddOrReplaceStrategy(
            $container->get('event_dispatcher'),
            $container->get('oro_importexport.strategy.import.helper'),
            $container->get('oro_entity.helper.field_helper'),
            $container->get('oro_importexport.field.database_helper'),
            $container->get('oro_entity.entity_class_name_provider'),
            $container->get('translator'),
            $container->get('oro_importexport.strategy.new_entities_helper'),
            $container->get('oro_entity.doctrine_helper'),
            $container->get('oro_security.owner.checker')
        );

        $this->stepExecution = new StepExecution('step', new JobExecution());
        $this->context = new StepExecutionProxyContext($this->stepExecution);
        $this->strategy->setImportExportContext($this->context);
        $this->strategy->setEntityName(
            $container->getParameter('oro_sales.b2bcustomer.entity.class')
        );
    }

    public function testUpdateAddress()
    {
        $address = new Address();
        $address->setStreet('Test1');
        $address->setCity('test_city');
        $country = new Country('US');
        $address->setCountry($country);

        $account = new Account();
        $account->setName('some account name');

        $channel = new Channel();
        $channel->setName('b2b Channel');

        $newB2bCustomer = new B2bCustomer();
        $newB2bCustomer->setName('b2bCustomer name');
        $newB2bCustomer->setShippingAddress($address);
        $newB2bCustomer->setBillingAddress($address);
        $newB2bCustomer->setAccount($account);
        $newB2bCustomer->setDataChannel($channel);

        /** @var B2bCustomer $existedCustomer */
        $existedCustomer = $this->getReference('default_b2bcustomer');
        self::assertEquals('1215 Caldwell Road', $existedCustomer->getShippingAddress()->getStreet());
        $this->strategy->process($newB2bCustomer);
        self::assertEquals('Test1', $existedCustomer->getShippingAddress()->getStreet());
    }

    public function testUpdateCustomerByEmptyAddress()
    {
        $account = new Account();
        $account->setName('some account name');

        $channel = new Channel();
        $channel->setName('b2b Channel');

        $newB2bCustomer = new B2bCustomer();
        $newB2bCustomer->setName('b2bCustomer name');
        $newB2bCustomer->setAccount($account);
        $newB2bCustomer->setDataChannel($channel);

        /** @var B2bCustomer $existedCustomer */
        $existedCustomer = $this->getReference('default_b2bcustomer');
        self::assertEquals('1215 Caldwell Road', $existedCustomer->getShippingAddress()->getStreet());
        $this->strategy->process($newB2bCustomer);
        self::assertNull($existedCustomer->getShippingAddress());
    }

    public function testUpdateRegionText()
    {
        $address = new Address();
        $address->setStreet('1215 Caldwell Road');
        $address->setCity('Rochester');
        $address->setPostalCode('14608');
        $country = new Country('US');
        $address->setCountry($country);
        $address->setRegionText('test');

        $account = new Account();
        $account->setName('some account name');

        $channel = new Channel();
        $channel->setName('b2b Channel');

        $newB2bCustomer = new B2bCustomer();
        $newB2bCustomer->setName('b2bCustomer name');
        $newB2bCustomer->setAccount($account);
        $newB2bCustomer->setDataChannel($channel);
        $newB2bCustomer->setBillingAddress($address);
        $newB2bCustomer->setShippingAddress($address);

        $this->context->setValue('itemData', [
            'shippingAddress' => ['regionText' => 'test'],
            'billingAddress' => ['regionText' => 'test']
        ]);

        /** @var B2bCustomer $existedCustomer */
        $existedCustomer = $this->getReference('default_b2bcustomer');
        self::assertEquals('Arizona1', $existedCustomer->getShippingAddress()->getRegionText());
        $this->strategy->process($newB2bCustomer);
        self::assertEquals('test', $existedCustomer->getShippingAddress()->getRegionText());
        self::assertEquals('test', $existedCustomer->getBillingAddress()->getRegionText());
    }

    public function testConvertRegionTextToRegion()
    {
        $country = new Country('US');

        $address = new Address();
        $address->setStreet('1215 Caldwell Road');
        $address->setCity('Rochester');
        $address->setPostalCode('14608');
        $address->setCountry($country);
        $address->setRegionText('Arizona');

        $account = new Account();
        $account->setName('some account name');

        $channel = new Channel();
        $channel->setName('b2b Channel');

        $newB2bCustomer = new B2bCustomer();
        $newB2bCustomer->setName('b2bCustomer name');
        $newB2bCustomer->setAccount($account);
        $newB2bCustomer->setDataChannel($channel);
        $newB2bCustomer->setBillingAddress($address);
        $newB2bCustomer->setShippingAddress($address);

        $this->context->setValue('itemData', [
            'shippingAddress' => ['regionText' => 'Arizona'],
            'billingAddress' => ['regionText' => 'Arizona']
        ]);

        /** @var B2bCustomer $existedCustomer */
        $existedCustomer = $this->getReference('default_b2bcustomer');
        self::assertEquals('Arizona1', $existedCustomer->getShippingAddress()->getRegionText());
        self::assertNull($existedCustomer->getShippingAddress()->getRegion());
        $this->strategy->process($newB2bCustomer);
        self::assertNull($existedCustomer->getShippingAddress()->getRegionText());
        self::assertNull($existedCustomer->getBillingAddress()->getRegionText());

        $exceptedRegion = $this->getContainer()->get('doctrine')->getRepository('OroAddressBundle:Region')
            ->findOneBy(
                [
                    'country' => $country,
                    'name'    => 'Arizona'
                ]
            );

        self::assertEquals($exceptedRegion, $existedCustomer->getShippingAddress()->getRegion());
    }

    public function testNewB2bCustomerWithRegionText()
    {
        $country = new Country('US');

        $address = new Address();
        $address->setStreet('1215 Caldwell Road');
        $address->setCity('Rochester');
        $address->setPostalCode('14608');
        $address->setCountry($country);
        $address->setRegionText('Arizona');

        $account = new Account();
        $account->setName('some account name 1');

        $channel = new Channel();
        $channel->setName('b2b Channel');

        $newB2bCustomer = new B2bCustomer();
        $newB2bCustomer->setName('b2bCustomer name1');
        $newB2bCustomer->setAccount($account);
        $newB2bCustomer->setDataChannel($channel);
        $newB2bCustomer->setBillingAddress($address);
        $newB2bCustomer->setShippingAddress($address);

        $this->context->setValue('itemData', [
            'shippingAddress' => ['regionText' => 'Arizona'],
            'billingAddress' => ['regionText' => 'Arizona']
        ]);

        /** @var B2bCustomer $existedCustomer */
        $entity = $this->strategy->process($newB2bCustomer);
        self::assertNull($entity->getShippingAddress()->getRegionText());
        self::assertNull($entity->getBillingAddress()->getRegionText());

        $exceptedRegion = $this->getContainer()->get('doctrine')->getRepository('OroAddressBundle:Region')
            ->findOneBy(
                [
                    'country' => $country,
                    'name'    => 'Arizona'
                ]
            );

        self::assertEquals($exceptedRegion, $entity->getShippingAddress()->getRegion());
        self::assertNull($entity->getId());
    }
}
