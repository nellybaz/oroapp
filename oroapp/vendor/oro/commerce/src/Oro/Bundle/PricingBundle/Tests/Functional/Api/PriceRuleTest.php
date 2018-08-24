<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Api;

use Oro\Bundle\ApiBundle\Tests\Functional\RestJsonApiTestCase;
use Oro\Bundle\PricingBundle\Async\Topics;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\PriceRule;
use Oro\Bundle\PricingBundle\Entity\PriceRuleLexeme;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceLists;
use Oro\Bundle\PricingBundle\Tests\Functional\DataFixtures\LoadPriceRules;
use Oro\Bundle\PricingBundle\Tests\Functional\Entity\EntityListener\MessageQueueTrait;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductUnits;
use Symfony\Component\HttpFoundation\Response;

/**
 * @dbIsolationPerTest
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class PriceRuleTest extends RestJsonApiTestCase
{
    use MessageQueueTrait;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->loadFixtures([
            LoadPriceRules::class,
        ]);
    }

    public function testGetList()
    {
        $parameters = [
            'filter' => [
                'id' => ['@price_list_1_price_rule_1->id', '@price_list_1_price_rule_2->id'],
            ],
            'sort' => 'id',
        ];

        $response = $this->cget(['entity' => 'pricerules'], $parameters);

        $this->assertResponseContains('price_rule/get_list.yml', $response);
    }

    public function testCreateMixValuesWithExpressions()
    {
        $routeParameters = self::processTemplateData(['entity' => 'pricerules']);
        $parameters = $this->getRequestData('price_rule/create_values_with_expressions.yml');
        $response = $this->request(
            'POST',
            $this->getUrl('oro_rest_api_post', $routeParameters),
            $parameters
        );

        static::assertResponseStatusCodeEquals($response, Response::HTTP_BAD_REQUEST);
        static::assertContains(
            'One of fields: Currency, Currency Expression should be blank',
            $response->getContent()
        );
        static::assertContains(
            'One of fields: Quantity, Quantity Expression should be blank',
            $response->getContent()
        );
        static::assertContains(
            'One of fields: Product Unit, Product Unit Expression should be blank',
            $response->getContent()
        );
    }

    public function testCreateRequiredFieldsBlank()
    {
        $routeParameters = self::processTemplateData(['entity' => 'pricerules']);
        $parameters = $this->getRequestData('price_rule/create_required_fields_blank.yml');
        $response = $this->request(
            'POST',
            $this->getUrl('oro_rest_api_post', $routeParameters),
            $parameters
        );

        static::assertResponseStatusCodeEquals($response, Response::HTTP_BAD_REQUEST);
        static::assertContains(
            'One of fields: Currency, Currency Expression is required',
            $response->getContent()
        );
    }

    public function testCreate()
    {
        $this->cleanScheduledMessages();

        $this->post(
            ['entity' => 'pricerules'],
            'price_rule/create.yml'
        );

        $priceRule = $this->getEntityManager()
            ->getRepository(PriceRule::class)
            ->findOneBy(['rule' => 'pricelist[0].prices.value * 0.8']);

        static::assertSame('EUR', $priceRule->getCurrency());
        static::assertNull($priceRule->getCurrencyExpression());
        static::assertEquals(1, $priceRule->getQuantity());
        static::assertNull($priceRule->getQuantityExpression());
        static::assertNull($priceRule->getProductUnitExpression());
        static::assertSame('product.category.id == 1', $priceRule->getRuleCondition());

        static::assertEquals(
            $this->getReference(LoadProductUnits::BOX),
            $priceRule->getProductUnit()
        );

        static::assertEquals(
            $this->getReference(LoadPriceLists::PRICE_LIST_3),
            $priceRule->getPriceList()
        );

        static::assertMessageSent(
            Topics::RESOLVE_PRICE_RULES,
            [
                'priceList' => $priceRule->getPriceList()->getId(),
                'product' => [],
            ]
        );

        $this->assertLexemesCreated($priceRule->getPriceList());
    }

    public function testCreateWithExpressions()
    {
        $this->cleanScheduledMessages();

        $this->post(
            ['entity' => 'pricerules'],
            'price_rule/create_with_expressions.yml'
        );

        $priceRule = $this->getEntityManager()
            ->getRepository(PriceRule::class)
            ->findOneBy(['rule' => 'pricelist[0].prices.value * 0.8']);

        static::assertSame('pricelist[0].prices.currency', $priceRule->getCurrencyExpression());
        static::assertEmpty($priceRule->getCurrency());
        static::assertSame('pricelist[0].prices.quantity + 3', $priceRule->getQuantityExpression());
        static::assertNull($priceRule->getQuantity());
        static::assertNull($priceRule->getProductUnit());
        static::assertSame('pricelist[0].prices.unit', $priceRule->getProductUnitExpression());
        static::assertSame('product.category.id == 1', $priceRule->getRuleCondition());

        static::assertEquals(
            $this->getReference(LoadPriceLists::PRICE_LIST_3),
            $priceRule->getPriceList()
        );

        static::assertMessageSent(
            Topics::RESOLVE_PRICE_RULES,
            [
                'priceList' => $priceRule->getPriceList()->getId(),
                'product' => [],
            ]
        );

        $this->assertLexemesCreated($priceRule->getPriceList());
    }

    public function testDeleteList()
    {
        $this->cleanScheduledMessages();

        $priceRuleId1 = $this->getFirstPriceRule()->getId();
        $priceList1 = $this->getFirstPriceRule()->getPriceList();

        $priceRuleId2 = $this->getReference(LoadPriceRules::PRICE_RULE_2)->getId();
        /** @var PriceList $priceList2 */
        $priceList2 = $this->getReference(LoadPriceRules::PRICE_RULE_2)->getPriceList();

        $this->cdelete(
            ['entity' => 'pricerules'],
            [
                'filter' => [
                    'id' => [$priceRuleId1, $priceRuleId2]
                ]
            ]
        );
        $this->assertNull(
            $this->getEntityManager()->find(PriceRule::class, $priceRuleId1)
        );
        $this->assertNull(
            $this->getEntityManager()->find(PriceRule::class, $priceRuleId2)
        );

        static::assertMessageSent(
            Topics::RESOLVE_PRICE_RULES,
            [
                'priceList' => $priceList1->getId(),
                'product' => [],
            ]
        );

        static::assertMessageSent(
            Topics::RESOLVE_PRICE_RULES,
            [
                'priceList' => $priceList2->getId(),
                'product' => [],
            ]
        );
    }

    public function testGet()
    {
        $priceRuleId = $this->getFirstPriceRule()->getId();

        $response = $this->get(
            ['entity' => 'pricerules', 'id' => $priceRuleId]
        );
        $this->assertResponseContains('price_rule/get.yml', $response);
    }

    public function testUpdate()
    {
        $this->cleanScheduledRelationMessages();

        $priceRuleId = $this->getFirstPriceRule()->getId();

        $this->patch(
            ['entity' => 'pricerules', 'id' => (string) $priceRuleId],
            'price_rule/update.yml'
        );

        $updatedPriceRule = $this->getEntityManager()
            ->getRepository(PriceRule::class)
            ->find($priceRuleId);

        static::assertNull($updatedPriceRule->getQuantity());
        static::assertSame('pricelist[0].prices.quantity + 4', $updatedPriceRule->getQuantityExpression());
        static::assertSame('product.category.id > 0', $updatedPriceRule->getRuleCondition());
        static::assertSame('pricelist[0].prices.value * 1', $updatedPriceRule->getRule());
        static::assertSame(5, $updatedPriceRule->getPriority());

        static::assertEquals(
            $this->getReference(LoadProductUnits::BOTTLE),
            $updatedPriceRule->getProductUnit()
        );

        static::assertMessageSent(
            Topics::RESOLVE_PRICE_RULES,
            [
                'priceList' => $updatedPriceRule->getPriceList()->getId(),
                'product' => [],
            ]
        );
    }

    public function testDelete()
    {
        $this->cleanScheduledMessages();

        $priceRuleId = $this->getFirstPriceRule()->getId();
        $priceList = $this->getFirstPriceRule()->getPriceList();

        $this->delete([
            'entity' => 'pricerules',
            'id' => $priceRuleId,
        ]);

        $this->assertNull(
            $this->getEntityManager()->find(PriceRule::class, $priceRuleId)
        );

        static::assertMessageSent(
            Topics::RESOLVE_PRICE_RULES,
            [
                'priceList' => $priceList->getId(),
                'product' => [],
            ]
        );
    }

    public function testGetSubResources()
    {
        $priceRule = $this->getFirstPriceRule();

        $this->assertGetSubResource(
            $priceRule->getId(),
            'priceList',
            $priceRule->getPriceList()->getId()
        );

        $this->assertGetSubResource(
            $priceRule->getId(),
            'productUnit',
            $priceRule->getProductUnit()->getCode()
        );
    }

    public function testGetRelationships()
    {
        $priceRule = $this->getFirstPriceRule();

        $response = $this->getRelationship([
            'entity' => 'pricerules',
            'id' => $priceRule->getId(),
            'association' => 'priceList',
        ]);

        $this->assertResponseContains(
            [
                'data' => [
                    'type' => 'pricelists',
                    'id' => (string) $priceRule->getPriceList()->getId(),
                ]
            ],
            $response
        );

        $response = $this->getRelationship([
            'entity' => 'pricerules',
            'id' => $priceRule->getId(),
            'association' => 'productUnit',
        ]);

        $this->assertResponseContains(
            [
                'data' => [
                    'type' => 'productunits',
                    'id' => (string) $priceRule->getProductUnit()->getCode(),
                ]
            ],
            $response
        );
    }

    /**
     * @return PriceRule
     */
    private function getFirstPriceRule()
    {
        return $this->getReference(LoadPriceRules::PRICE_RULE_1);
    }

    /**
     * @param PriceList $priceList
     */
    private function assertLexemesCreated(PriceList $priceList)
    {
        $lexeme = $this->getEntityManager()
            ->getRepository(PriceRuleLexeme::class)
            ->findOneBy(['priceList' => $priceList]);

        static::assertNotNull($lexeme);
    }

    /**
     * @param int    $entityId
     * @param string $associationName
     * @param string $expectedAssociationId
     */
    private function assertGetSubResource(
        int $entityId,
        string $associationName,
        string $expectedAssociationId
    ) {
        $response = $this->getSubresource(
            ['entity' => 'pricerules', 'id' => $entityId, 'association' => $associationName]
        );

        $result = json_decode($response->getContent(), true);

        self::assertEquals($expectedAssociationId, $result['data']['id']);
    }
}
