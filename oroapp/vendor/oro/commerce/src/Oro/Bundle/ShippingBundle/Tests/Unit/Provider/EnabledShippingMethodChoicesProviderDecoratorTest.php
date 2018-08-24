<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Provider;

use Oro\Bundle\ShippingBundle\Method\ShippingMethodProviderInterface;
use Oro\Bundle\ShippingBundle\Provider\ShippingMethodChoicesProviderInterface;
use Oro\Bundle\ShippingBundle\Provider\EnabledShippingMethodChoicesProviderDecorator;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\ShippingBundle\Tests\Unit\Provider\Stub\ShippingMethodStub;

class EnabledShippingMethodChoicesProviderDecoratorTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var ShippingMethodProviderInterface|\PHPUnit_Framework_MockObject_MockObject phpdoc
     */
    protected $shippingMethodProvider;

    /**
     * @var ShippingMethodChoicesProviderInterface|\PHPUnit_Framework_MockObject_MockObject phpdoc
     */
    protected $choicesProvider;

    /**
     * @var ShippingMethodChoicesProviderInterface
     */
    protected $enabledChoicesProvider;

    protected function setUp()
    {
        $this->shippingMethodProvider = $this->createMock(ShippingMethodProviderInterface::class);
        $this->choicesProvider = $this->createMock(ShippingMethodChoicesProviderInterface::class);
        $this->enabledChoicesProvider = new EnabledShippingMethodChoicesProviderDecorator(
            $this->shippingMethodProvider,
            $this->choicesProvider
        );
    }

    /**
     * @param array $registryMap
     * @param array $choices
     * @param array $result
     *
     * @dataProvider methodsProvider
     */
    public function testGetMethods($registryMap, $choices, $result)
    {
        $this->shippingMethodProvider->expects($this->any())
            ->method('getShippingMethod')
            ->will($this->returnValueMap($registryMap));

        $this->choicesProvider->expects($this->once())
            ->method('getMethods')
            ->willReturn($choices);

        $this->assertEquals($this->enabledChoicesProvider->getMethods(), $result);
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @return array
     */
    public function methodsProvider()
    {
        return
            [
                'all_methods_enabled' =>
                    [
                        'methods_map' =>
                            [
                                [
                                    'flat_rate',
                                    $this->getEntity(
                                        ShippingMethodStub::class,
                                        [
                                            'identifier' => 'flat_rate',
                                            'sortOrder' => 1,
                                            'label' => 'flat rate',
                                            'isEnabled' => true,
                                            'types' => [],
                                        ]
                                    ),
                                ],
                                [
                                    'ups',
                                    $this->getEntity(
                                        ShippingMethodStub::class,
                                        [
                                            'identifier' => 'ups',
                                            'sortOrder' => 1,
                                            'label' => 'ups',
                                            'isEnabled' => true,
                                            'types' => [],
                                        ]
                                    ),
                                ],
                            ],
                        'choices' => ['flat_rate' => 'flat rate', 'ups' => 'ups'],
                        'result' => ['flat_rate' => 'flat rate', 'ups' => 'ups'],
                    ],
                'some_methods_disabled' =>
                    [
                        'methods_map' =>
                            [
                                [
                                    'flat_rate',
                                    $this->getEntity(
                                        ShippingMethodStub::class,
                                        [
                                            'identifier' => 'flat_rate',
                                            'sortOrder' => 1,
                                            'label' => 'flat rate',
                                            'isEnabled' => true,
                                            'types' => [],
                                        ]
                                    ),
                                ],
                                [
                                    'ups',
                                    $this->getEntity(
                                        ShippingMethodStub::class,
                                        [
                                            'identifier' => 'ups',
                                            'sortOrder' => 1,
                                            'label' => 'ups',
                                            'isEnabled' => false,
                                            'types' => [],
                                        ]
                                    ),
                                ],
                            ],
                        'choices' => ['flat_rate' => 'flat rate', 'ups' => 'ups'],
                        'result' => ['flat_rate' => 'flat rate'],
                    ],
                'all_disabled_methods' =>
                    [
                        'methods_map' =>
                            [
                                [
                                    'flat_rate',
                                    $this->getEntity(
                                        ShippingMethodStub::class,
                                        [
                                            'identifier' => 'flat_rate',
                                            'sortOrder' => 1,
                                            'label' => 'flat rate',
                                            'isEnabled' => false,
                                            'types' => [],
                                        ]
                                    ),
                                ],
                                [
                                    'ups',
                                    $this->getEntity(
                                        ShippingMethodStub::class,
                                        [
                                            'identifier' => 'ups',
                                            'sortOrder' => 1,
                                            'label' => 'ups',
                                            'isEnabled' => false,
                                            'types' => [],
                                        ]
                                    ),
                                ],
                            ],
                        'choices' => ['flat_rate' => 'flat rate', 'ups' => 'ups'],
                        'result' => [],
                    ],
                'no_methods' =>
                    [
                        'methods' => [],
                        'choices' => [],
                        'result' => [],
                    ],
            ];
    }
}
