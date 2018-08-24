<?php

namespace Oro\Bundle\ShoppingListBundle\Bundle\Tests\Unit\DependencyInjection;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ShoppingListBundle\DependencyInjection\Configuration;

use Symfony\Component\Config\Definition\Processor;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Configuration
     */
    public function testGetConfigTreeBuilder()
    {
        $configuration = new Configuration();
        $builder = $configuration->getConfigTreeBuilder();
        $this->assertInstanceOf('Symfony\Component\Config\Definition\Builder\TreeBuilder', $builder);
    }

    public function testProcessConfiguration()
    {
        $configuration = new Configuration();
        $processor     = new Processor();
        $expected =  [
            'settings' => [
                'resolved'  => true,
                'backend_product_visibility' => [
                    'value' => [
                        Product::INVENTORY_STATUS_IN_STOCK,
                        Product::INVENTORY_STATUS_OUT_OF_STOCK
                    ],
                    'scope' => 'app'
                ],
                'availability_for_guests' => [
                    'value' => false,
                    'scope' => 'app'
                ],
                Configuration::DEFAULT_GUEST_SHOPPING_LIST_OWNER => [
                    'value' => null,
                    'scope' => 'app'
                ],
                'shopping_list_limit' => [
                    'value' => 0,
                    'scope' => 'app'
                ],
                'mass_adding_on_product_listing_enabled' => [
                    'value' => true,
                    'scope' => 'app',
                ],
            ]
        ];
        $this->assertEquals($expected, $processor->processConfiguration($configuration, []));
    }
}
