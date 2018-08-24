<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Method\Handler;

use Oro\Bundle\RuleBundle\Entity\Rule;
use Oro\Bundle\ShippingBundle\Entity\Repository\ShippingMethodsConfigsRuleRepository;
use Oro\Bundle\ShippingBundle\Entity\ShippingMethodConfig;
use Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule;
use Oro\Bundle\ShippingBundle\Method\Handler\ShippingMethodDisableHandlerInterface;
use Oro\Bundle\ShippingBundle\Method\Handler\RulesShippingMethodDisableHandlerDecorator;
use Oro\Bundle\ShippingBundle\Method\ShippingMethodInterface;
use Oro\Bundle\ShippingBundle\Method\ShippingMethodProviderInterface;

class RulesShippingMethodDisableHandlerDecoratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ShippingMethodDisableHandlerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $handler;

    /**
     * @var ShippingMethodsConfigsRuleRepository|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $repository;

    /**
     * @var ShippingMethodProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $shippingMethodProvider;

    /**
     * @var RulesShippingMethodDisableHandlerDecorator
     */
    protected $decorator;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->handler = $this->createMock(ShippingMethodDisableHandlerInterface::class);
        $this->repository = $this->createMock(ShippingMethodsConfigsRuleRepository::class);
        $this->shippingMethodProvider = $this->createMock(ShippingMethodProviderInterface::class);

        $this->decorator = new RulesShippingMethodDisableHandlerDecorator(
            $this->handler,
            $this->repository,
            $this->shippingMethodProvider
        );
    }

    /**
     * @param string $disabledMethodId
     * @param array  $configs
     * @param array  $registryMap
     *
     * @dataProvider testHandleMethodDisableProvider
     */
    public function testHandleMethodDisable($disabledMethodId, $configs, $registryMap)
    {
        $this->handler->expects(self::once())->method('handleMethodDisable')->with($disabledMethodId);

        $configMocks = [];
        $registryMapValues = [];
        $methods = [];
        foreach ($registryMap as $methodId => $enabled) {
            $methods[$methodId] = $this->createMock(ShippingMethodInterface::class);
            $methods[$methodId]->expects(self::any())->method('isEnabled')->willReturn($enabled);
            $registryMapValues[] = [$methodId, $methods[$methodId]];
        }

        $rules = [];
        foreach ($configs as $configName => $config) {
            $methodConfigs = [];
            foreach ($config['methods'] as $methodId) {
                $methodConfig = $this->createMock(ShippingMethodConfig::class);
                $methodConfig->expects(self::once())->method('getMethod')->willReturn($methodId);
                $methodConfigs[] =  $methodConfig;
            }
            $rules[$configName] = $this->createMock(Rule::class);
            $rules[$configName]->expects(self::exactly($config['rule_disabled']))->method('setEnabled')->with(false);

            $configMock = $this->createMock(ShippingMethodsConfigsRule::class);
            $configMock->expects(self::once())
                ->method('getMethodConfigs')
                ->willReturn($methodConfigs);
            $configMock->expects(self::any())
                ->method('getRule')
                ->willReturn($rules[$configName]);
            $configMocks[] = $configMock;
        }

        $this->shippingMethodProvider
            ->method('getShippingMethod')
            ->will($this->returnValueMap($registryMapValues));

        $this->repository->expects(self::once())
             ->method('getEnabledRulesByMethod')
             ->willReturn($configMocks);

        $this->decorator->handleMethodDisable($disabledMethodId);
    }

    /**
     * @return array
     */
    public function testHandleMethodDisableProvider()
    {
        return [
            'a_few_methods' =>
                [
                    'methodId' => 'method1',
                    'configs' =>
                        [
                            'config1' =>
                                [
                                    'methods' => ['method1', 'method2'],
                                    'rule_disabled' => 1,
                                ],
                            'config2' =>
                                [
                                    'methods' => ['method1', 'method3'],
                                    'rule_disabled' => 0,
                                ]
                        ],
                    'registry_map' =>
                        [
                            'method1' => true,
                            'method2' => false,
                            'method3' => true,
                        ],
                ],
            'only_method' =>
                [
                    'methodId' => 'method1',
                    'configs' =>
                        [
                            'config1' =>
                                [
                                    'methods' => ['method1'],
                                    'rule_disabled' => 1,
                                ],
                        ],
                    'registry_map' =>
                        [
                            'method1' => true,
                        ],
                ],
        ];
    }
}
