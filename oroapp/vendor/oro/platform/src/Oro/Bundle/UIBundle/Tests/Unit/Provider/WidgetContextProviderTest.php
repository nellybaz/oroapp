<?php

namespace Oro\Bundle\UIBundle\Tests\Unit\Provider;

use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\UIBundle\Provider\WidgetContextProvider;

class WidgetContextProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var WidgetContextProvider */
    protected $provider;

    protected function setUp()
    {
        $this->provider = new WidgetContextProvider();
    }

    protected function tearDown()
    {
        unset($this->provider);
    }

    /**
     * @dataProvider isActiveProvider
     *
     * @param bool    $expectedValue
     * @param Request $request
     */
    public function testIsActive($expectedValue, Request $request = null)
    {
        $this->provider->setRequest($request);

        $this->assertSame($expectedValue, $this->provider->isActive());
    }

    /**
     * @return array
     */
    public function isActiveProvider()
    {
        return [
            'normal request, should be inactive'                   => [
                '$expectedValue' => false,
                '$request'       => Request::create('')
            ],
            'widget request, should be active'                     => [
                '$expectedValue' => true,
                '$request'       => Request::create('', 'GET', ['_wid' => '123-321-123-321'])
            ],
            'unset request before sub-request, should be inactive' => [
                '$expectedValue' => false,
                '$request'       => null
            ]
        ];
    }

    /**
     * @dataProvider widgetIdentifierProvider
     *
     * @param bool    $expectedValue
     * @param Request $request
     */
    public function testGetWid($expectedValue, Request $request = null)
    {
        $this->provider->setRequest($request);

        $this->assertSame($expectedValue, $this->provider->getWid());
    }

    /**
     * @return array
     */
    public function widgetIdentifierProvider()
    {
        return [
            'normal request, should return false'                   => [
                '$expectedValue' => false,
                '$request'       => Request::create('')
            ],
            'widget request, should return wid'                     => [
                '$expectedValue' => '123-321-123-321',
                '$request'       => Request::create('', 'GET', ['_wid' => '123-321-123-321'])
            ],
            'unset request before sub-request, should return false' => [
                '$expectedValue' => false,
                '$request'       => null
            ]
        ];
    }
}
