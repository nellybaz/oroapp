<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Entity\EntityListener;

use Doctrine\ORM\EntityManagerInterface;
use Oro\Bundle\PricingBundle\Model\PriceListTriggerFactory;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\PricingBundle\Async\Topics;
use Oro\Bundle\PricingBundle\Entity\PriceRule;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceRules;

class PriceRuleEntityListenerTest extends WebTestCase
{
    use MessageQueueTrait;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient();
        $this->loadFixtures([
            LoadPriceRules::class
        ]);
        $this->cleanScheduledMessages();
    }

    public function testPreUpdate()
    {
        /** @var EntityManagerInterface $em */
        $em = $this->getContainer()->get('doctrine')->getManagerForClass(PriceRule::class);

        /** @var PriceRule $rule */
        $rule = $this->getReference(LoadPriceRules::PRICE_RULE_1);
        $rule->setRuleCondition('product.id > 42');
        $em->persist($rule);
        $em->flush();

        $this->sendScheduledMessages();

        self::assertMessageSent(
            Topics::RESOLVE_PRICE_RULES,
            [
                PriceListTriggerFactory::PRICE_LIST => $rule->getPriceList()->getId(),
                PriceListTriggerFactory::PRODUCT => []
            ]
        );
    }

    public function testPreRemove()
    {
        /** @var EntityManagerInterface $em */
        $em = $this->getContainer()->get('doctrine')->getManagerForClass(PriceRule::class);

        /** @var PriceRule $rule */
        $rule = $this->getReference(LoadPriceRules::PRICE_RULE_1);
        $em->remove($rule);
        $em->flush();

        $this->sendScheduledMessages();

        self::assertMessageSent(
            Topics::RESOLVE_PRICE_RULES,
            [
                PriceListTriggerFactory::PRICE_LIST => $rule->getPriceList()->getId(),
                PriceListTriggerFactory::PRODUCT => []
            ]
        );
    }
}
