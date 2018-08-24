<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\Test\FormIntegrationTestCase;

use Oro\Bundle\ProductBundle\Entity\Brand;
use Oro\Bundle\ProductBundle\Form\Type\BrandStatusType;
use Oro\Bundle\ProductBundle\Provider\BrandStatusProvider;

class BrandStatusTypeTest extends FormIntegrationTestCase
{
    /** @var  BrandStatusType $brandStatusType */
    protected $brandStatusType;

    /** @var \PHPUnit_Framework_MockObject_MockObject|BrandStatusProvider $brandStatusProvider */
    protected $brandStatusProvider;

    public function setup()
    {
        parent::setUp();
        $this->brandStatusProvider =
            $this->getMockBuilder('Oro\Bundle\ProductBundle\Provider\BrandStatusProvider')
                ->disableOriginalConstructor()
                ->getMock();

        $this->brandStatusProvider
            ->method('getAvailableBrandStatuses')
            ->willReturn([
                Brand::STATUS_DISABLED => 'Disabled',
                Brand::STATUS_ENABLED => 'Enabled'
            ]);

        $this->brandStatusType = new BrandStatusType($this->brandStatusProvider);
    }

    public function testGetName()
    {
        $this->assertEquals(BrandStatusType::class, $this->brandStatusType->getName());
    }

    public function testGetParent()
    {
        $this->assertEquals(
            \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class,
            $this->brandStatusType->getParent()
        );
    }

    public function testChoices()
    {
        $form = $this->factory->create($this->brandStatusType);
        $availableBrandStatuses = $this->brandStatusProvider->getAvailableBrandStatuses();
        $choices = [];

        foreach ($availableBrandStatuses as $key => $value) {
            $choices[] = new ChoiceView($key, $key, $value);
        }

        $this->assertEquals(
            $choices,
            $form->createView()->vars['choices']
        );

        $this->assertEquals(
            Brand::STATUS_DISABLED,
            $form->getConfig()->getOptions()['preferred_choices']
        );
    }
}
