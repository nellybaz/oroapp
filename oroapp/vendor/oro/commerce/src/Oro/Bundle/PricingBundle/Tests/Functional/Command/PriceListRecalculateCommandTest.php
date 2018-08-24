<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Command;

use Oro\Bundle\EntityBundle\Manager\Db\EntityTriggerManager;
use Oro\Bundle\MessageQueueBundle\Test\Functional\MessageQueueAssertTrait;
use Oro\Bundle\PricingBundle\Command\PriceListRecalculateCommand;
use Oro\Bundle\PricingBundle\PricingStrategy\MinimalPricesCombiningStrategy;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadDependentPriceListRelations;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadDependentPriceLists;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceListFallbackSettings;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceListRelations;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceLists;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadProductPrices;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\WebsiteBundle\Tests\Functional\DataFixtures\LoadWebsiteData;

class PriceListRecalculateCommandTest extends WebTestCase
{
    use MessageQueueAssertTrait;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        self::getContainer()->get('oro_config.global')
            ->set('oro_pricing.price_strategy', MinimalPricesCombiningStrategy::NAME);
        $this->loadFixtures([
            LoadPriceListRelations::class,
            LoadProductPrices::class,
            LoadDependentPriceLists::class,
            LoadDependentPriceListRelations::class,
            LoadPriceListFallbackSettings::class,
        ]);
    }

    /**
     * @dataProvider commandDataProvider
     * @param $expectedMessage
     * @param array $params
     * @param int $expectedCount
     * @param int $expectedMesssages
     * @param array $websites
     * @param array $customerGroups
     * @param array $customers
     * @param array $priceLists
     */
    public function testCommand(
        $expectedMessage,
        array $params,
        $expectedCount,
        $expectedMesssages,
        array $websites = [],
        array $customerGroups = [],
        array $customers = [],
        array $priceLists = []
    ) {
        $this->clearCombinedPrices();
        $this->assertCombinedPriceCount(0);

        $this->getMessageCollector()->clear();
        $this->assertCount(0, $this->getSentMessages());

        $this->getContainer()->get('oro_pricing.builder.combined_price_list_builder')->resetCache();
        $this->getContainer()->get('oro_pricing.builder.website_combined_price_list_builder')->resetCache();
        $this->getContainer()->get('oro_pricing.builder.customer_group_combined_price_list_builder')->resetCache();
        $this->getContainer()->get('oro_pricing.builder.customer_combined_price_list_builder')->resetCache();
        $this->getContainer()->get('oro_pricing.pricing_strategy.strategy_register')
            ->getCurrentStrategy()
            ->resetCache();

        foreach ($websites as $websiteName) {
            $params[] = '--website='.$this->getReference($websiteName)->getId();
        }

        foreach ($customerGroups as $customerGroupName) {
            $params[] = '--customer-group='.$this->getReference($customerGroupName)->getId();
        }

        foreach ($customers as $customerName) {
            $params[] = '--customer='.$this->getReference($customerName)->getId();
        }

        foreach ($priceLists as $priceListName) {
            $params[] = '--price-list='.$this->getReference($priceListName)->getId();
        }

        if (false !== array_search('--disable-triggers', $params, true)) {
            $databaseTriggerManager = $this->createMock(EntityTriggerManager::class);
            $databaseTriggerManager->expects($this->once())
                ->method('disable');
            $databaseTriggerManager->expects($this->once())
                ->method('enable');
            $this->getContainer()->set(
                'oro_pricing.database_triggers.manager.combined_prices',
                $databaseTriggerManager
            );
        }

        $result = $this->runCommand(PriceListRecalculateCommand::NAME, $params);
        $this->assertContains($expectedMessage, $result);
        $this->assertCombinedPriceCount($expectedCount);

        $this->assertCount($expectedMesssages, $this->getSentMessages());
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     *
     * @return array
     */
    public function commandDataProvider()
    {
        return [
            'all' => [
                'expected_message' => 'Start processing',
                'params' => ['--all'],
                'expectedCount' => 64, // 2 + 52 + 8 + 2 = config + all levels for website1, website2 & website3
                'expectedMessages' => 5,
            ],
            'all with triggers off' => [
                'expected_message' => 'Start processing',
                'params' => ['--all', '--disable-triggers'],
                'expectedCount' => 64, // 2 + 52 + 8 + 2 = config + all levels for website1, website2 & website3
                'expectedMessages' => 5,
            ],
            'empty run' => [
                'expected_message' => 'ATTENTION',
                'params' => [],
                'expectedCount' => 0,
                'expectedMessages' => 0,
            ],
            'website 1' => [
                'expected_message' => 'Start processing',
                'params' => [],
                'expectedCount' => 38,
                'expectedMessages' => 3,
                'website' => [LoadWebsiteData::WEBSITE1],
                'customerGroup' => [],
                'customer' => []
            ],
            'customer.level_1_1' => [
                'expected_message' => 'Start processing',
                'params' => [],
                'expectedCount' => 22,  // 14 + 8 = customer.level_1_1 + website2
                'expectedMessages' => 2,
                'website' => [],
                'customerGroup' => [],
                'customer' => ['customer.level_1_1']
            ],
            'customer.level_1.2' => [
                'expected_message' => 'Start processing',
                'params' => [],
                'expectedCount' => 4,
                'expectedMessages' => 2,
                'website' => [],
                'customerGroup' => [],
                'customer' => ['customer.level_1.2']
            ],
            'customer.level_1.3' => [
                'expected_message' => 'Start processing',
                'params' => [],
                'expectedCount' => 14,
                'expectedMessages' => 2,
                'website' => [],
                'customerGroup' => [],
                'customer' => ['customer.level_1.3']
            ],
            'customer_group' => [
                'expected_message' => 'Start processing',
                'params' => [],
                'expectedCount' => 24, // 6 + 4 + 14 = customer.level_1_1 + customer.level_1.2 + customer.level_1.3
                'expectedMessages' => 2,
                'website' => [],
                'customerGroup' => ['customer_group.group1'], // doesn't has own price list
                'customer' => []
            ],
            'price_list_1' => [
                'expected_message' => 'Start the process',
                'params' => [],
                'expectedCount' => 60,
                'expectedMessages' => 4,
                'website' => [],
                'customerGroup' => [],
                'customer' => [],
                'priceLists'=> [LoadPriceLists::PRICE_LIST_1]
            ],
            'price_list_1 with dependant' => [
                'expected_message' => 'Start the process',
                'params' => ['--include-dependent'],
                'expectedCount' => 62,
                'expectedMessages' => 4,
                'website' => [],
                'customerGroup' => [],
                'customer' => [],
                'priceLists'=> [LoadPriceLists::PRICE_LIST_1]
            ],
            'verbosity_verbose' => [
                'expected_message' => 'Processing combined price list id:',
                'params' => ['--all', '-v'],
                'expectedCount' => 64,
                'expectedMessages' => 5,
            ],
            'verbosity_very_verbose' => [
                'expected_message' => 'Processing price list:',
                'params' => ['--all', '-vv'],
                'expectedCount' => 64,
                'expectedMessages' => 5,
            ],
        ];
    }

    /**
     * @param int $expectedCount
     */
    protected function assertCombinedPriceCount($expectedCount)
    {
        $combinedPrices = $this->getContainer()->get('doctrine')
            ->getRepository('OroPricingBundle:CombinedProductPrice')
            ->createQueryBuilder('a')->getQuery()->getResult();

        $this->assertCount($expectedCount, $combinedPrices);
    }

    protected function clearCombinedPrices()
    {
        $this->getContainer()->get('doctrine')
            ->getManagerForClass('OroPricingBundle:CombinedProductPrice')
            ->getRepository('OroPricingBundle:CombinedProductPrice')
            ->createQueryBuilder('combinedProductPrice')
            ->delete('OroPricingBundle:CombinedProductPrice', 'combinedProductPrice')
            ->getQuery()
            ->execute();
    }
}
