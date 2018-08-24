<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\DataGrid\Extension\Action\MassAction;

use Oro\Bundle\DataGridBundle\Extension\Action\ActionConfiguration;
use Oro\Bundle\ProductBundle\DataGrid\Extension\MassAction\Action\TriggerEventForSelectedProductIdsMassAction;

class TriggerEventForSelectedProductIdsMassActionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TriggerEventForSelectedProductIdsMassAction
     */
    private $action;

    protected function setUp()
    {
        $this->action = new TriggerEventForSelectedProductIdsMassAction();
    }

    /**
     * @param array $source
     * @param array $expected
     * @dataProvider setOptionsDataProvider
     */
    public function testSetOptions(array $source, array $expected)
    {
        $this->action->setOptions(ActionConfiguration::create($source));

        $this->assertEquals($expected, $this->action->getOptions()->toArray());
    }

    /**
     * @return array
     */
    public function setOptionsDataProvider()
    {
        $handler =
            'oro_product.datagrid.extension.mass_action.trigger_event_for_selected_product_ids_mass_action_handler';

        return [
            'with custom options' => [
                'source' => [
                    'handler' => 'test.handler',
                    'frontend_type' => 'test_type',
                    'frontend_handle' => 'test_frontend_handle',
                    'data_identifier' => 'some.id',
                    'event_name' => 'event_name',
                ],
                'expected' => [
                    'handler' => 'test.handler',
                    'frontend_type' => 'test_type',
                    'frontend_handle' => 'test_frontend_handle',
                    'confirmation' => false,
                    'data_identifier' => 'some.id',
                    'event_name' => 'event_name',
                    'reloadData' => false,
                    'route' => 'oro_datagrid_mass_action',
                    'route_parameters' => [],
                    'allowedRequestTypes' => ['POST'],
                    'requestType' => 'POST'
                ],
            ],
            'just default options' => [
                'source' => [
                    'data_identifier' => 'product.id',
                    'event_name' => 'event_name',
                ],
                'expected' => [
                    'handler' => $handler,
                    'frontend_type' => 'trigger-event-for-selected-product-ids-mass',
                    'frontend_handle' => 'ajax',
                    'confirmation' => false,
                    'data_identifier' => 'product.id',
                    'event_name' => 'event_name',
                    'reloadData' => false,
                    'route' => 'oro_datagrid_mass_action',
                    'route_parameters' => [],
                    'allowedRequestTypes' => ['POST'],
                    'requestType' => 'POST'
                ],
            ],
        ];
    }
}
