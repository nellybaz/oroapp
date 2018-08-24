<?php

namespace Oro\Bundle\InventoryBundle\Tests\Unit\Form\Extension;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;

use Oro\Bundle\CatalogBundle\Fallback\Provider\ParentCategoryFallbackProvider;
use Oro\Bundle\EntityBundle\Entity\EntityFieldFallbackValue;
use Oro\Bundle\InventoryBundle\Form\Extension\CategoryUpcomingFormExtension;
use Oro\Bundle\InventoryBundle\Tests\Unit\Form\Extension\Stub\CategoryStub;

class CategoryUpcomingFormExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CategoryUpcomingFormExtension
     */
    protected $categoryFormExtension;

    /** @var FormBuilderInterface|\PHPUnit_Framework_MockObject_MockObject $builder * */
    protected $builder;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->categoryFormExtension = new CategoryUpcomingFormExtension();
        $this->builder = $this->createMock(FormBuilderInterface::class);
    }

    public function testBuildForm()
    {
        $this->builder->expects($this->exactly(2))
            ->method('add')
            ->will($this->returnSelf());
        $this->builder->expects($this->exactly(2))
            ->method('addEventListener')
            ->will($this->returnSelf());

        $this->categoryFormExtension->buildForm($this->builder, []);
    }

    public function testOnPreSetData()
    {
        $category = new CategoryStub();
        $category->setParentCategory(new CategoryStub());

        $event = new FormEvent($this->createMock(FormInterface::class), $category);
        $this->categoryFormExtension->onPreSetData($event);

        $this->assertInstanceOf(EntityFieldFallbackValue::class, $category->getIsUpcoming());
        $this->assertEquals(ParentCategoryFallbackProvider::FALLBACK_ID, $category->getIsUpcoming()->getFallback());
    }

    public function testOnPostSubmitDateUnchanged()
    {
        $fallbackValue = new EntityFieldFallbackValue();
        $fallbackValue->setScalarValue(1);

        $category = new CategoryStub();
        $category->setIsUpcoming($fallbackValue);
        $date = new \DateTime();
        $category->setAvailabilityDate($date);

        $event = new FormEvent($this->createMock(FormInterface::class), $category);
        $this->categoryFormExtension->onPostSubmit($event);

        $this->assertSame($date, $category->getAvailabilityDate());
    }

    public function testOnPostSubmit()
    {
        $fallbackValue = new EntityFieldFallbackValue();
        $fallbackValue->setFallback(ParentCategoryFallbackProvider::FALLBACK_ID);

        $category = new CategoryStub();
        $category->setIsUpcoming($fallbackValue);
        $date = new \DateTime();
        $category->setAvailabilityDate($date);

        $event = new FormEvent($this->createMock(FormInterface::class), $category);
        $this->categoryFormExtension->onPostSubmit($event);

        $this->assertNull($category->getAvailabilityDate());
    }
}
