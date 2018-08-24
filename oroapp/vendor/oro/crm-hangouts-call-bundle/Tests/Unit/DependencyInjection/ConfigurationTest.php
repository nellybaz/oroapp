<?php

namespace Oro\Bundle\HangoutsCallBundle\Tests\Unit\DependencyInjection;

use Oro\Bundle\HangoutsCallBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProviderExceptionConfigTree
     */
    public function testExceptionConfigTree($options, $exception)
    {
        $this->expectException($exception);

        $processor = new Processor();
        $configuration = new Configuration([]);
        $processor->processConfiguration($configuration, [$options]);
    }

    public function dataProviderExceptionConfigTree()
    {
        return [
            [
                [
                    'initial_apps' => [
                        // missing application id
                        ['app_name' => 'myApp'],
                    ]
                ],
                '\Symfony\Component\Config\Definition\Exception\InvalidConfigurationException'
            ],
            [
                [
                    'initial_apps' => [
                        // incorrect application type
                        ['app_id' => '1000001', 'app_type' => 'MY_APP'],
                    ]
                ],
                '\Symfony\Component\Config\Definition\Exception\InvalidConfigurationException'
            ],
        ];
    }

    /**
     * @dataProvider dataProviderConfigTree
     */
    public function testConfigTree($options, $expects)
    {
        $processor = new Processor();
        $configuration = new Configuration(array());
        $result = $processor->processConfiguration($configuration, array($options));

        $this->assertEquals($expects, $result);
    }

    public function dataProviderConfigTree()
    {
        $settings = [
            'resolved' => true,
            'enable_google_hangouts_for_email' => [
                'value' => true,
                'scope' => 'app',
            ],
            'enable_google_hangouts_for_phone' => [
                'value' => true,
                'scope' => 'app',
            ]
        ];

        return [
            [
                [],
                [
                    'initial_apps' => [
                        [
                            'app_id' => '1088537665390',
                            'app_type' => 'LOCAL_APP',
                            'app_name' => 'OroHangoutsApp',
                            'base_path' => 'bundles/orohangoutscall/hangouts-app',
                        ]
                    ],
                    'settings' => $settings
                ]
            ],
            [
                [
                    'initial_apps' => [
                        [
                            'app_id' => '100000001'
                        ]
                    ],
                ],
                [
                    'initial_apps' => [
                        [
                            'app_id' => '100000001',
                            'app_type' => 'ROOM_APP',
                        ]
                    ],
                    'settings' => $settings
                ]
            ],
            [
                [
                    'initial_apps' => [
                        [
                            'app_id' => '100000001',
                            'app_type' => 'LOCAL_APP',
                            'app_name' => 'MyApp',
                            'base_path' => 'bundles/somebundle/my-hangouts-app',
                        ],
                        [
                            'app_id' => '100000002',
                            'app_type' => 'ROOM_APP',
                            'app_name' => 'ChessApp'
                        ]
                    ],
                ],
                [
                    'initial_apps' => [
                        [
                            'app_id' => '100000001',
                            'app_type' => 'LOCAL_APP',
                            'app_name' => 'MyApp',
                            'base_path' => 'bundles/somebundle/my-hangouts-app'
                        ],
                        [
                            'app_id' => '100000002',
                            'app_type' => 'ROOM_APP',
                            'app_name' => 'ChessApp'
                        ]
                    ],
                    'settings' => $settings
                ]
            ],
        ];
    }
}
