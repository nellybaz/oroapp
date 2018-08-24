<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Filter;

use Oro\Bundle\FilterBundle\Form\Type\Filter\ChoiceFilterType;
use Oro\Bundle\FilterBundle\Form\Type\Filter\EntityFilterType;
use Oro\Bundle\FilterBundle\Tests\Unit\Form\Type\AbstractTypeTestCase;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Form\Type\Filter\DefaultPriceListFilterType;
use Oro\Bundle\PricingBundle\Provider\PriceListProvider;
use Oro\Bundle\PricingBundle\Sharding\ShardManager;

class DefaultPriceListFilterTypeTest extends AbstractTypeTestCase
{
    /**
     * @var PriceListProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $provider;

    /**
     * @var ShardManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $shardManager;

    /**
     * @var string
     */
    protected $priceListClass;

    /**
     * @var DefaultPriceListFilterType
     */
    private $type;

    protected function setUp()
    {
        $translator = $this->createMockTranslator();
        $this->shardManager = $this->createMock(ShardManager::class);
        $this->provider = $this->createMock(PriceListProvider::class);
        $this->priceListClass = 'Oro\Bundle\PricingBundle\Entity\PriceList';
        $this->type = new DefaultPriceListFilterType(
            $translator,
            $this->provider,
            $this->shardManager,
            $this->priceListClass
        );

        parent::setUp();
    }

    /**
     * @return EntityFilterType
     */
    protected function getTestFormType()
    {
        return $this->type;
    }

    public function testGetName()
    {
        $this->assertEquals(DefaultPriceListFilterType::NAME, $this->type->getName());
    }

    public function testGetParent()
    {
        $this->assertEquals(ChoiceFilterType::NAME, $this->type->getParent());
    }

    /**
     * @dataProvider setDefaultOptionsDataProvider
     *
     * @param array $parentDefaultOptions
     * @param array $requiredOptions
     */
    public function testSetDefaultOptions(array $parentDefaultOptions, array $requiredOptions = array())
    {
        $defaultOptions = [
            'field_options' => [
                'class' => $this->priceListClass,
                'property' => 'name'
            ],
            'required' => true,
        ];

        $this->shardManager
            ->expects($this->once())
            ->method('isShardingEnabled')
            ->willReturn(true);

        $resolver = $this->createMockOptionsResolver();
        $resolver
            ->expects($this->exactly(2))
            ->method('setDefaults')
            ->withConsecutive([$parentDefaultOptions], [$defaultOptions])
            ->willReturnSelf();

        $this->getTestFormType()->setDefaultOptions($resolver);
    }


    /**
     * @dataProvider setDefaultOptionsDataProvider
     *
     * @param array $parentDefaultOptions
     */
    public function testSetDefaultOptionsWhenEntityNotSharded(array $parentDefaultOptions)
    {
        $defaultOptions = [
            'field_options' => [
                'class' => $this->priceListClass,
                'property' => 'name'
            ],
            'required' => false,
        ];

        $this->shardManager
            ->expects($this->once())
            ->method('isShardingEnabled')
            ->willReturn(false);

        $resolver = $this->createMockOptionsResolver();

        $resolver
            ->expects($this->exactly(2))
            ->method('setDefaults')
            ->withConsecutive([$parentDefaultOptions], [$defaultOptions])
            ->willReturnSelf();

        $this->getTestFormType()->setDefaultOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultOptionsDataProvider()
    {
        return [
            [
                'parentDefaultOptions' => [
                    'field_type' => 'entity',
                    'field_options' => [],
                    'translatable'  => false,
                ],
            ],
        ];
    }

    /**
     * @dataProvider bindDataProvider
     * @param array $bindData
     * @param array $formData
     * @param array $viewData
     * @param array $customOptions
     */
    public function testBindData(
        array $bindData,
        array $formData,
        array $viewData,
        array $customOptions = array()
    ) {
        // bind method should be tested in functional test
    }

    /**
     * {@inheritDoc}
     */
    public function bindDataProvider()
    {
        return array(
            'empty' => array(
                'bindData' => array(),
                'formData' => array(),
                'viewData' => array(),
            ),
        );
    }
}
