<?php

namespace Oro\Bundle\CampaignBundle\Tests\Unit\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\CampaignBundle\Form\Type\CampaignSelectType;

class CampaignSelectTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CampaignSelectType
     */
    protected $type;

    /**
     * Setup test env
     */
    protected function setUp()
    {
        $this->type = new CampaignSelectType();
    }

    public function testSetDefaultOptions()
    {
        /** @var OptionsResolverInterface $resolver */
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolverInterface');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with($this->isType('array'));
        $this->type->setDefaultOptions($resolver);
    }

    public function testGetParent()
    {
        $this->assertEquals('oro_entity_create_or_select_inline', $this->type->getParent());
    }

    public function testGetName()
    {
        $this->assertEquals('oro_campaign_select', $this->type->getName());
    }
}
