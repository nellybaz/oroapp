<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Provider;

use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\ProductBundle\Provider\DefaultProductUnitProviderInterface;
use Oro\Bundle\ProductBundle\Provider\SingleUnitDefaultProductUnitProvider;
use Oro\Bundle\ProductBundle\Service\SingleUnitModeServiceInterface;

class SingleUnitDefaultProductUnitProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SingleUnitModeServiceInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $singleUnitService;

    /**
     * @var DefaultProductUnitProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $enabledProvider;

    /**
     * @var SingleUnitDefaultProductUnitProvider
     */
    private $provider;

    protected function setUp()
    {
        $this->singleUnitService = $this->getMockBuilder(SingleUnitModeServiceInterface::class)
            ->disableOriginalConstructor()->getMock();

        $this->enabledProvider = $this->getMockBuilder(DefaultProductUnitProviderInterface::class)
            ->disableOriginalConstructor()->getMock();

        $this->provider = new SingleUnitDefaultProductUnitProvider($this->singleUnitService, $this->enabledProvider);
    }

    public function testGetDefaultProductUnitPrecisionDisabled()
    {
        $this->singleUnitService->expects($this->once())
            ->method('isSingleUnitMode')
            ->willReturn(false);

        $this->enabledProvider->expects($this->never())
            ->method('getDefaultProductUnitPrecision');

        $this->assertNull($this->provider->getDefaultProductUnitPrecision());
    }

    public function testGetDefaultProductUnitPrecision()
    {
        $this->singleUnitService->expects($this->once())
            ->method('isSingleUnitMode')
            ->willReturn(true);

        $unitPrecision = $this->createMock(ProductUnitPrecision::class);

        $this->enabledProvider->expects($this->once())
            ->method('getDefaultProductUnitPrecision')
            ->willReturn($unitPrecision);

        $this->assertSame($unitPrecision, $this->provider->getDefaultProductUnitPrecision());
    }
}
