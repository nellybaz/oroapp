<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Extension;

use Symfony\Component\Form\PreloadedExtension;

use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\PricingBundle\Form\Extension\CustomerFormExtension;
use Oro\Bundle\CustomerBundle\Form\Type\CustomerType;
use Oro\Bundle\PricingBundle\EventListener\CustomerListener;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Extension\Stub\CustomerTypeStub;
use Oro\Bundle\PricingBundle\Form\Type\PriceListsSettingsType;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\PriceListCollectionTypeExtensionsProvider;
use Oro\Bundle\WebsiteBundle\Form\Type\WebsiteScopedDataType;
use Oro\Bundle\PricingBundle\Entity\PriceListToCustomer;
use Oro\Bundle\PricingBundle\EventListener\AbstractPriceListCollectionAwareListener;
use Oro\Bundle\PricingBundle\Form\Type\PriceListSelectWithPriorityType;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Stub\PriceListSelectTypeStub;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\FormBundle\Form\Extension\SortableExtension;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\PricingBundle\Form\Extension\PriceListFormExtension;
use Oro\Bundle\PricingBundle\PricingStrategy\MergePricesCombiningStrategy;

class CustomerFormExtensionTest extends FormIntegrationTestCase
{
    use EntityTrait;

    /**
     * @return array
     */
    protected function getExtensions()
    {
        /** @var CustomerListener $listener */
        $listener = $this->getMockBuilder('Oro\Bundle\PricingBundle\EventListener\CustomerListener')
            ->disableOriginalConstructor()
            ->getMock();

        $provider = new PriceListCollectionTypeExtensionsProvider();
        $websiteScopedDataType = (new WebsiteScopedTypeMockProvider())->getWebsiteScopedDataType();

        $configManager = $this->getMockBuilder(ConfigManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $configManager->expects($this->any())
            ->method('get')
            ->with('oro_pricing.price_strategy')
            ->willReturn(MergePricesCombiningStrategy::NAME);

        $extensions = [
            new PreloadedExtension(
                [
                    PriceListsSettingsType::NAME => new PriceListsSettingsType(),
                    WebsiteScopedDataType::NAME => $websiteScopedDataType,
                    CustomerType::NAME => new CustomerTypeStub()
                ],
                [
                    CustomerType::NAME => [new CustomerFormExtension($listener)],
                    'form' => [new SortableExtension()],
                    PriceListSelectWithPriorityType::NAME => [new PriceListFormExtension($configManager)]

                ]
            )
        ];

        return array_merge($provider->getExtensions(), $extensions);
    }

    /**
     * @dataProvider submitDataProvider
     *
     * @param array $submitted
     * @param array $expected
     */
    public function testSubmit(array $submitted, array $expected)
    {
        $form = $this->factory->create(CustomerType::NAME, [], []);
        $form->submit([AbstractPriceListCollectionAwareListener::PRICE_LISTS_COLLECTION_FORM_FIELD_NAME => $submitted]);
        $data = $form->get(CustomerListener::PRICE_LISTS_COLLECTION_FORM_FIELD_NAME)->getData();
        $this->assertTrue($form->isValid());
        $this->assertEquals($expected, $data);
    }

    /**
     * @return array
     */
    public function submitDataProvider()
    {
        return [
            [
                'submitted' => [
                    1 => [
                        PriceListsSettingsType::FALLBACK_FIELD => '0',
                        PriceListsSettingsType::PRICE_LIST_COLLECTION_FIELD =>
                            [
                                [
                                    PriceListSelectWithPriorityType::PRICE_LIST_FIELD
                                        => (string)PriceListSelectTypeStub::PRICE_LIST_1,
                                    SortableExtension::POSITION_FIELD_NAME => '200',
                                    PriceListFormExtension::MERGE_ALLOWED_FIELD => true,
                                ],
                                [
                                    PriceListSelectWithPriorityType::PRICE_LIST_FIELD
                                        => (string)PriceListSelectTypeStub::PRICE_LIST_2,
                                    SortableExtension::POSITION_FIELD_NAME => '100',
                                    PriceListFormExtension::MERGE_ALLOWED_FIELD => false,
                                ]
                            ],
                    ],
                ],
                'expected' => [
                    1 => [
                        PriceListsSettingsType::FALLBACK_FIELD => 0,
                        PriceListsSettingsType::PRICE_LIST_COLLECTION_FIELD =>
                            [
                                (new PriceListToCustomer())
                                    ->setPriceList($this->getPriceList(PriceListSelectTypeStub::PRICE_LIST_1))
                                    ->setSortOrder(200)
                                    ->setMergeAllowed(true),
                                (new PriceListToCustomer())
                                    ->setPriceList($this->getPriceList(PriceListSelectTypeStub::PRICE_LIST_2))
                                    ->setSortOrder(100)
                                    ->setMergeAllowed(false)
                            ],
                    ],
                ]
            ]
        ];
    }

    /**
     * @param int $id
     * @return PriceList
     */
    protected function getPriceList($id)
    {
        return $this->getEntity(PriceList::class, [
            'id' => $id
        ]);
    }
}
