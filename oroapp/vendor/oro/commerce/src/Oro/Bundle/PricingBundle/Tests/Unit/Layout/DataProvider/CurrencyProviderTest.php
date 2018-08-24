<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Layout\DataProvider;

use Oro\Bundle\PricingBundle\Layout\DataProvider\CurrencyProvider;
use Oro\Bundle\PricingBundle\Manager\UserCurrencyManager;

class CurrencyProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CurrencyProvider
     */
    protected $provider;

    /**
     * @var UserCurrencyManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $userCurrencyManager;

    protected function setUp()
    {
        $this->userCurrencyManager = $this->createMock(UserCurrencyManager::class);
        $this->provider = new CurrencyProvider($this->userCurrencyManager);
    }

    public function testGetDefaultCurrency()
    {
        $this->userCurrencyManager
            ->expects($this->once())
            ->method('getDefaultCurrency')
            ->willReturn('USD');

        $this->assertEquals('USD', $this->provider->getDefaultCurrency());
    }

    public function testGetAvailableCurrencies()
    {
        $this->userCurrencyManager
            ->expects($this->once())
            ->method('getAvailableCurrencies')
            ->willReturn(['EUR']);

        $this->assertEquals(['EUR'], $this->provider->getAvailableCurrencies());
    }

    public function testGetUserCurrency()
    {
        $this->userCurrencyManager
            ->expects($this->once())
            ->method('getUserCurrency')
            ->willReturn('UAH');

        $this->assertEquals('UAH', $this->provider->getUserCurrency());
    }
}
