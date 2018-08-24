<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Type;

use Oro\Bundle\FormBundle\Form\Extension\SortableExtension;
use Oro\Bundle\PricingBundle\Form\Extension\PriceListFormExtension;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Form\Type\PriceListCollectionType;
use Oro\Bundle\PricingBundle\Form\Type\PriceListSelectWithPriorityType;
use Oro\Bundle\PricingBundle\Entity\PriceListToWebsite;

class PriceListCollectionTypeTest extends FormIntegrationTestCase
{
    use EntityTrait;

    /**
     * @var PriceListCollectionType
     */
    protected $type;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->type = new PriceListCollectionType();
    }

    /**
     * @dataProvider submitDataProvider
     *
     * @param array|PriceListToWebsite[] $existing
     * @param array $submitted
     * @param array|PriceListToWebsite $expected
     */
    public function testSubmit(array $existing, array $submitted, array $expected = null)
    {
        $options = [
            'options' => [
                'data_class' => 'Oro\Bundle\PricingBundle\Entity\PriceListToWebsite'
            ]
        ];

        $form = $this->factory->create($this->type, $existing, $options);
        $form->submit($submitted);

        $this->assertTrue($form->isValid());
        $this->assertEquals($expected, $form->getData());
    }

    /**
     * @return array
     */
    public function submitDataProvider()
    {
        /** @var PriceList $pl1 */
        $pl1 = $this->getEntity('Oro\Bundle\PricingBundle\Entity\PriceList', ['id' => 1]);

        /** @var PriceList $pl2 */
        $pl2 = $this->getEntity('Oro\Bundle\PricingBundle\Entity\PriceList', ['id' => 2]);

        /** @var PriceList $pl3 */
        $pl3 = $this->getEntity('Oro\Bundle\PricingBundle\Entity\PriceList', ['id' => 3]);

        return [
            'test' => [
                'existing' => [
                    (new PriceListToWebsite())->setSortOrder(100)->setPriceList($pl1)->setMergeAllowed(true),
                    (new PriceListToWebsite())->setSortOrder(200)->setPriceList($pl2)->setMergeAllowed(false),
                    (new PriceListToWebsite())->setSortOrder(300)->setPriceList($pl3)->setMergeAllowed(true)
                ],
                'submitted' => [
                    [
                        PriceListSelectWithPriorityType::PRICE_LIST_FIELD => '3',
                        SortableExtension::POSITION_FIELD_NAME => '500',
                        PriceListFormExtension::MERGE_ALLOWED_FIELD => true
                    ],
                    [
                        PriceListSelectWithPriorityType::PRICE_LIST_FIELD => '1',
                        SortableExtension::POSITION_FIELD_NAME => '400',
                        PriceListFormExtension::MERGE_ALLOWED_FIELD => false
                    ],
                    [
                        PriceListSelectWithPriorityType::PRICE_LIST_FIELD => '2',
                        SortableExtension::POSITION_FIELD_NAME => '600',
                        PriceListFormExtension::MERGE_ALLOWED_FIELD => true
                    ],
                    [
                        PriceListSelectWithPriorityType::PRICE_LIST_FIELD => '',
                        SortableExtension::POSITION_FIELD_NAME => '',
                        PriceListFormExtension::MERGE_ALLOWED_FIELD => true
                    ]
                ],
                'expected' => [
                    (new PriceListToWebsite())->setSortOrder(400)->setPriceList($pl1)->setMergeAllowed(false),
                    (new PriceListToWebsite())->setSortOrder(600)->setPriceList($pl2)->setMergeAllowed(true),
                    (new PriceListToWebsite())->setSortOrder(500)->setPriceList($pl3)->setMergeAllowed(true)
                ]
            ]
        ];
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        $provider = new PriceListCollectionTypeExtensionsProvider();

        return $provider->getExtensions();
    }

    public function testGetName()
    {
        $this->assertSame(PriceListCollectionType::NAME, $this->type->getName());
    }

    public function testGetParent()
    {
        $this->assertSame(CollectionType::NAME, $this->type->getParent());
    }

    public function testFinishView()
    {
        $view = new FormView();
        $this->type->finishView($view, $this->getFormMock(), ['render_as_widget' => true]);

        $this->assertArrayHasKey('render_as_widget', $view->vars);
        $this->assertTrue($view->vars['render_as_widget']);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|FormInterface
     */
    protected function getFormMock()
    {
        return $this->createMock('Symfony\Component\Form\FormInterface');
    }
}
