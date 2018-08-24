<?php

namespace Oro\Bundle\SalesBundle\Tests\Functional\Dashboard;

use Oro\Bundle\DashboardBundle\Tests\Functional\AbstractWidgetTestCase;
use Oro\Bundle\FilterBundle\Form\Type\Filter\AbstractDateFilterType;
use Oro\Bundle\SalesBundle\Tests\Functional\Fixture\LoadForecastWidgetFixtures;

/**
 * @dbIsolationPerTest
 */
class ForecastWidgetTest extends AbstractWidgetTestCase
{
    private $originalTimezone;

    private $globalScopeManager;

    protected function setUp()
    {
        $this->initClient(
            ['debug' => false],
            array_merge($this->generateBasicAuthHeader(), array('HTTP_X-CSRF-Header' => 1))
        );

        $this->loadFixtures([
            LoadForecastWidgetFixtures::class
        ]);

        $this->globalScopeManager = $this->client->getContainer()->get('oro_config.global');
        $this->originalTimezone = $this->globalScopeManager->get('oro_locale.timezone');
    }

    protected function tearDown()
    {
        $this->globalScopeManager->set('oro_locale.timezone', $this->originalTimezone);
        $this->globalScopeManager->flush();
    }

    /**
     * @dataProvider getTimeFilter
     */
    public function testCloseDateFilterSuccess($dateRangeType, $timezone, array $value, $inProgressCount)
    {
        $widget = $this->getReference('widget_forecast');

        $this->globalScopeManager->set('oro_locale.timezone', $timezone);
        $this->globalScopeManager->flush();

        $this->configureWidget($widget, [
            'forecast_of_opportunities[dateRange][part]'  => 'value',
            'forecast_of_opportunities[dateRange][type]'  => $dateRangeType,
            'forecast_of_opportunities[subWidgets][items][0][id]' => 'in_progress',
            'forecast_of_opportunities[subWidgets][items][0][order]' => 0,
            'forecast_of_opportunities[subWidgets][items][0][show]' => 'on'
        ]);

        $crawler = $this->client->request(
            'GET',
            $this->getUrl(
                'oro_dashboard_itemized_data_widget',
                [
                    'widget' => 'forecast_of_opportunities',
                    'bundle' => 'OroDashboardBundle',
                    'name' => 'bigNumbers',
                    '_widgetId' => $widget->getId()
                ]
            )
        );
        $response = $this->client->getResponse();
        $this->assertEquals($response->getStatusCode(), 200, "Failed in gettting widget view !");

        $subWidgetValue = $crawler->filter('.sub-widget .value')->text();

        $this->assertEquals(
            $inProgressCount,
            $subWidgetValue,
            '"In progress" metric is not correct. Check calculation in ForecastProvider!'
        );
    }

    public function getTimeFilter()
    {
        return [
            'Close Date: All time' => [
                'date_range_type' => AbstractDateFilterType::TYPE_ALL_TIME,
                'timezone' => 'UTC',
                'value' => [],
                'in_progress_count' => 3,
            ],
            'Close Date: This month' => [
                'date_range_type' => AbstractDateFilterType::TYPE_THIS_MONTH,
                'timezone' => 'UTC',
                'value' => [],
                'in_progress_count' => 2,
            ],
            'Close Date: This month in custom timezone' => [
                'date_range_type' => AbstractDateFilterType::TYPE_THIS_MONTH,
                'timezone' => 'America/Los_Angeles',
                'value' => [],
                'in_progress_count' => 2,
            ]
        ];
    }
}
