<?php

namespace Oro\Bundle\LayoutBundle\Tests\Functional\Layout\DataProvider;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Oro\Bundle\LayoutBundle\Tests\Functional\Layout\DataProvider\Stubs\FormProviderStub;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

use Oro\Component\Testing\Unit\Form\Type\Stub\FormStub;

class AbstractFormProviderTest extends WebTestCase
{
    /** @var FormFactoryInterface */
    protected $formFactory;

    /** @var UrlGeneratorInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $router;

    /** @var FormProviderStub */
    protected $formProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient();

        $this->router = $this->getMockBuilder(UrlGeneratorInterface::class)->getMock();

        $this->formFactory = $this->getContainer()->get('form.factory');
        $this->formProvider = new FormProviderStub($this->formFactory, $this->router);
    }

    /**
     * @dataProvider formDataProvider
     *
     * @param string $formName
     * @param string $routeName
     * @param mixed  $data
     * @param array  $options
     * @param array  $cacheKeyOptions
     * @param array  $expectedData
     * @param string $expectedCacheKey
     */
    public function testGetFormAndFormView(
        $formName,
        $routeName,
        $data,
        array $options,
        array $cacheKeyOptions,
        array $expectedData,
        $expectedCacheKey
    ) {
        $formAction = 'form_action';

        $options = array_merge($options, ['action' => $formAction]);

        $this->router
            ->expects($this->exactly(4))
            ->method('generate')
            ->with($routeName)
            ->willReturn($formAction);

        $resultForm = $this->formProvider->getTestForm($formName, $routeName, $data, $options, $cacheKeyOptions);

        $expectedForm = $this->getForm($expectedData['formName'], $expectedData['data'], $expectedData['options']);

        // check local cache
        $cachedForm = $this->formProvider->getTestForm($formName, $routeName, $data, $options, $cacheKeyOptions);

        // check local cache for form view
        $cachedFormView1 = $this->formProvider
            ->getTestFormView($formName, $routeName, $data, $options, $cacheKeyOptions);
        $cachedFormView2 = $this->formProvider
            ->getTestFormView($formName, $routeName, $data, $options, $cacheKeyOptions);

        $this->assertEquals($expectedForm, $resultForm);
        $this->assertSame($expectedForm->getData(), $resultForm->getData());
        $this->assertSame($resultForm, $cachedForm);
        $this->assertSame($cachedFormView1, $cachedFormView2);
        $this->assertSame(
            $expectedCacheKey,
            $this->formProvider->getTestCacheKey($formName, $options, $cacheKeyOptions)
        );
    }

    /**
     * @return array
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function formDataProvider()
    {
        return [
            'form' => [
                'formName' => 'form_name',
                'routeName' => 'form_name',
                'data' => null,
                'options' => [],
                'cacheKeyOptions' => [],
                'expectedData' => [
                    'formName' => 'form_name',
                    'data' => null,
                    'options' => [
                        'action' => 'form_action',
                    ],
                ],
                'expectedCacheKey' => $this->getCacheKey(FormStub::class, [
                    'action' => 'form_action'
                ])
            ],
            'form with data' => [
                'formName' => 'form_name',
                'routeName' => 'form_name',
                'data' => [
                    'test_data' => 'Test Data',
                ],
                'options' => [],
                'cacheKeyOptions' => [],
                'expectedData' => [
                    'formName' => 'form_name',
                    'data' => [
                        'test_data' => 'Test Data',
                    ],
                    'options' => [
                        'action' => 'form_action',
                    ],
                ],
                'expectedCacheKey' => $this->getCacheKey(FormStub::class, [
                    'action' => 'form_action'
                ])
            ],
            'form with options' => [
                'formName' => 'form_name',
                'routeName' => 'form_name',
                'data' => null,
                'options' => [
                    'attr' => [
                        'attr1' => 'Attr 1',
                        'attr2' => 'Attr 2',
                    ]
                ],
                'cacheKeyOptions' => [],
                'expectedData' => [
                    'formName' => 'form_name',
                    'data' => null,
                    'options' => [
                        'action' => 'form_action',
                        'attr' => [
                            'attr1' => 'Attr 1',
                            'attr2' => 'Attr 2',
                        ]
                    ],
                ],
                'expectedCacheKey' => $this->getCacheKey(FormStub::class, [
                    'action' => 'form_action',
                    'attr' => [
                        'attr1' => 'Attr 1',
                        'attr2' => 'Attr 2',
                    ]
                ])
            ],
            'form with cache options' => [
                'formName' => 'form_name',
                'routeName' => 'form_name',
                'data' => null,
                'options' => [
                    'attr' => [
                        'attr1' => 'Attr 1',
                        'attr2' => 'Attr 2',
                    ]
                ],
                'cacheKeyOptions' => [
                    'cache_option1' => 'Cache Option 1',
                ],
                'expectedData' => [
                    'formName' => 'form_name',
                    'data' => null,
                    'options' => [
                        'action' => 'form_action',
                        'attr' => [
                            'attr1' => 'Attr 1',
                            'attr2' => 'Attr 2',
                        ]
                    ]
                ],
                'expectedCacheKey' => $this->getCacheKey(FormStub::class, [
                    'action' => 'form_action',
                    'attr' => [
                        'attr1' => 'Attr 1',
                        'attr2' => 'Attr 2',
                    ],
                    'cache_option1' => 'Cache Option 1',
                ])
            ],
            'form with overridden options for cache' => [
                'formName' => 'form_name',
                'routeName' => 'form_name',
                'data' => null,
                'options' => [
                    'attr' => [
                        'attr1' => 'Attr 1',
                        'attr2' => 'Attr 2',
                    ]
                ],
                'cacheKeyOptions' => [
                    'attr' => [],
                    'cache_option1' => 'Cache Option 1',
                ],
                'expectedData' => [
                    'formName' => 'form_name',
                    'data' => null,
                    'options' => [
                        'action' => 'form_action',
                        'attr' => [
                            'attr1' => 'Attr 1',
                            'attr2' => 'Attr 2',
                        ]
                    ]
                ],
                'expectedCacheKey' => $this->getCacheKey(FormStub::class, [
                    'action' => 'form_action',
                    'attr' => [],
                    'cache_option1' => 'Cache Option 1',
                ])
            ]
        ];
    }

    /**
     * @param string $formName
     * @param mixed  $data
     * @param array  $options
     *
     * @return FormInterface
     */
    private function getForm($formName, $data = null, array $options = [])
    {
        $type = new FormStub($formName);

        return $this->formFactory->create($type, $data, $options);
    }

    /**
     * @param string $type
     * @param array  $options
     *
     * @return string
     */
    private function getCacheKey($type, array $options)
    {
        return sprintf('%s:%s', $type, md5(serialize($options)));
    }
}
