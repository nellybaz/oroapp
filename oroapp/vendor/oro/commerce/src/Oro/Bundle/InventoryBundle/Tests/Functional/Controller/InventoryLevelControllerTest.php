<?php

namespace Oro\Bundle\InventoryBundle\Tests\Functional\Controller;

use Symfony\Component\Routing\RouterInterface;

use Doctrine\ORM\EntityRepository;

use Oro\Bundle\InventoryBundle\Entity\InventoryLevel;
use Oro\Bundle\InventoryBundle\Tests\Functional\DataFixtures\UpdateInventoryLevelsQuantities;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

/**
 * @group CommunityEdition
 */
class InventoryLevelControllerTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
        $this->loadFixtures([UpdateInventoryLevelsQuantities::class]);
    }

    public function testIndexAction()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_inventory_level_index'));
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('inventory-grid', $crawler->html());
    }

    public function testUpdateAction()
    {
        /** @var Product $product */
        $product = $this->getReference('product-1');

        // open product view page
        $crawler = $this->client->request('GET', $this->getUrl('oro_product_view', ['id' => $product->getId()]));
        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

        $inventoryButton = $crawler->filterXPath('//a[@title="Manage Inventory"]');
        $this->assertEquals(1, $inventoryButton->count());

        $updateUrl = $inventoryButton->attr('data-url');
        $this->assertNotEmpty($updateUrl);

        // open dialog with levels edit form
        list($route, $parameters) = $this->parseUrl($updateUrl);
        $parameters['_widgetContainer'] = 'dialog';
        $parameters['_wid'] = uniqid('abc', true);

        $crawler = $this->client->request('GET', $this->getUrl($route, $parameters));
        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

        // check levels grid
        $levelsGrid = $crawler->filterXPath('//div[starts-with(@id,"grid-inventory-level-grid")]');
        $this->assertEquals(1, $levelsGrid->count());

        $gridConfig = json_decode($levelsGrid->attr('data-page-component-options'), true);
        $gridData = $gridConfig['data']['data'];
        $this->assertLevelsGridData($product, $gridData);

        // change quantities and submit form
        $changeSet = [];
        $gridQuantities = $this->getGridQuantities($gridData);
        foreach ($gridQuantities as $combinedId => $quantity) {
            if ($quantity) {
                $changeSet[$combinedId]['levelQuantity'] = null;
            } else {
                $changeSet[$combinedId]['levelQuantity'] = mt_rand(1, 100);
            }
        }

        $form = $crawler->selectButton('Save')->form();
        $form['oro_inventory_level_grid'] = json_encode($changeSet);
        $this->client->submit($form);
        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

        // assert data saved successfully
        $this->assertLevelsData($changeSet);
    }

    /**
     * @param array $data
     */
    protected function assertLevelsData(array $data)
    {
        $repository = $this->getRepository('OroInventoryBundle:InventoryLevel');

        foreach ($data as $combinedId => $row) {
            list($precisionId) = explode('_', $combinedId, 2);
            $quantity = $row['levelQuantity'];

            /** @var InventoryLevel|null $level */
            $level = $repository->createQueryBuilder('level')
                ->andWhere('IDENTITY(level.productUnitPrecision) = :precisionId')
                ->setParameter('precisionId', $precisionId)
                ->getQuery()
                ->getOneOrNullResult();

            if ($quantity) {
                $this->assertNotNull($level);
                $this->assertEquals($quantity, $level->getQuantity());
            } else {
                $this->assertNull($level);
            }
        }
    }

    /**
     * @param array $data
     * @return array
     */
    protected function getGridQuantities(array $data)
    {
        $quantities = [];
        foreach ($data as $row) {
            $this->assertArrayHasKey('levelQuantity', $row);
            $this->assertArrayHasKey('combinedId', $row);
            $quantities[$row['combinedId']] = $row['levelQuantity'];
        }
        return $quantities;
    }

    /**
     * @param Product $product
     * @param array $data
     */
    protected function assertLevelsGridData(Product $product, array $data)
    {
        $expectedCombinedIds = [];
        foreach ($product->getUnitPrecisions() as $precision) {
            $expectedCombinedIds[] = sprintf('%s', $precision->getId());
        }

        $this->assertSameSize($expectedCombinedIds, $data);
        foreach ($data as $row) {
            $this->assertArrayHasKey('combinedId', $row);
            $this->assertContains($row['combinedId'], $expectedCombinedIds);
        }
    }

    /**
     * @param string $url
     * @return array
     */
    protected function parseUrl($url)
    {
        /** @var RouterInterface $router */
        $router = $this->getContainer()->get('router');
        $parameters = $router->match($url);

        $route = $parameters['_route'];
        unset($parameters['_route'], $parameters['_controller']);

        return [$route, $parameters];
    }

    /**
     * @param string $class
     * @return EntityRepository
     */
    protected function getRepository($class)
    {
        return $this->getContainer()->get('doctrine')->getManagerForClass($class)->getRepository($class);
    }
}
