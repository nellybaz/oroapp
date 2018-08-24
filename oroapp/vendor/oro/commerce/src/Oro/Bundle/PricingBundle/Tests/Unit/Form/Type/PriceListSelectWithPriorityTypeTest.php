<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\Validator\Validation;

use Oro\Component\Testing\Unit\Form\Type\Stub\EntityType;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Form\Type\PriceListSelectType;
use Oro\Bundle\PricingBundle\Form\Type\PriceListSelectWithPriorityType;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Stub\PriceListSelectTypeStub;
use Oro\Bundle\FormBundle\Form\Extension\SortableExtension;
use Oro\Bundle\PricingBundle\Entity\BasePriceListRelation;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\PricingBundle\Form\Extension\PriceListFormExtension;
use Oro\Bundle\PricingBundle\PricingStrategy\MergePricesCombiningStrategy;

class PriceListSelectWithPriorityTypeTest extends FormIntegrationTestCase
{
    /**
     * @return array
     */
    protected function getExtensions()
    {
        $entityType = new EntityType([]);

        $configManager = $this->getMockBuilder(ConfigManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $configManager->expects($this->any())
            ->method('get')
            ->with('oro_pricing.price_strategy')
            ->willReturn(MergePricesCombiningStrategy::NAME);

        return [
            new PreloadedExtension(
                [
                    PriceListSelectWithPriorityType::NAME => new PriceListSelectWithPriorityType(),
                    $entityType->getName() => $entityType,
                    PriceListSelectType::NAME => new PriceListSelectTypeStub(),
                ],
                [
                    'form' => [new SortableExtension()],
                    PriceListSelectWithPriorityType::NAME => [new PriceListFormExtension($configManager)]
                ]
            ),
            new ValidatorExtension(Validation::createValidator()),
        ];
    }

    /**
     * @dataProvider submitDataProvider
     * @param mixed $defaultData
     * @param array $submittedData
     * @param array $expectedData
     */
    public function testSubmit($defaultData, array $submittedData, $expectedData)
    {
        $form = $this->factory->create(PriceListSelectWithPriorityType::NAME, $defaultData);

        $this->assertEquals($defaultData, $form->getData());

        $form->submit($submittedData);
        $this->assertTrue($form->isValid());
        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($expectedData, $form->getData());
    }

    /**
     * @return array
     */
    public function submitDataProvider()
    {
        $existingPriceList = $this->getPriceList(PriceListSelectTypeStub::PRICE_LIST_1);

        /** @var PriceList $expectedPriceList */
        $expectedPriceList = $this->getPriceList(PriceListSelectTypeStub::PRICE_LIST_2);

        return [
            'without default data' => [
                'defaultData' => null,
                'submittedData' => [
                    'priceList' => PriceListSelectTypeStub::PRICE_LIST_2,
                    '_position' => 100,
                    PriceListFormExtension::MERGE_ALLOWED_FIELD => true,
                ],
                'expectedData' => (new BasePriceListRelation())
                    ->setSortOrder(100)
                    ->setMergeAllowed(true)
                    ->setPriceList($expectedPriceList),
            ],
            'without default data merge off' => [
                'defaultData' => null,
                'submittedData' => [
                    'priceList' => PriceListSelectTypeStub::PRICE_LIST_2,
                    '_position' => 100,
                    PriceListFormExtension::MERGE_ALLOWED_FIELD => false,
                ],
                'expectedData' => (new BasePriceListRelation())
                    ->setSortOrder(100)
                    ->setMergeAllowed(false)
                    ->setPriceList($expectedPriceList),
            ],
            'with default data' => [
                'defaultData' => (new BasePriceListRelation())
                    ->setSortOrder(10)
                    ->setMergeAllowed(true)
                    ->setPriceList($existingPriceList),

                'submittedData' => [
                    'priceList' => PriceListSelectTypeStub::PRICE_LIST_2,
                    '_position' => 100,
                    PriceListFormExtension::MERGE_ALLOWED_FIELD => true,
                ],

                'expectedData' => (new BasePriceListRelation())
                    ->setSortOrder(100)
                    ->setMergeAllowed(true)
                    ->setPriceList($expectedPriceList),
            ],
            'with default data merge off' => [
                'defaultData' => (new BasePriceListRelation())
                    ->setSortOrder(10)
                    ->setMergeAllowed(false)
                    ->setPriceList($existingPriceList),

                'submittedData' => [
                    'priceList' => PriceListSelectTypeStub::PRICE_LIST_2,
                    '_position' => 100,
                    PriceListFormExtension::MERGE_ALLOWED_FIELD => false,
                ],
                'expectedData' => (new BasePriceListRelation())
                    ->setSortOrder(100)
                    ->setMergeAllowed(false)
                    ->setPriceList($expectedPriceList),
            ],
        ];
    }

    /**
     * Test getName
     */
    public function testGetName()
    {
        $type = new PriceListSelectWithPriorityType();
        $this->assertEquals(PriceListSelectWithPriorityType::NAME, $type->getName());
    }

    /**
     * @param int $id
     * @return PriceList
     */
    protected function getPriceList($id)
    {
        $priceList = new PriceList();
        $reflectionClass = new \ReflectionClass($priceList);
        $method = $reflectionClass->getProperty('id');
        $method->setAccessible(true);
        $method->setValue($priceList, $id);

        return $priceList;
    }
}
