<?php

namespace Oro\Bundle\EntityExtendBundle\Tests\Unit\Form\Type;

use Oro\Bundle\EntityConfigBundle\Config\Id\EntityConfigId;
use Oro\Bundle\EntityConfigBundle\Form\Util\ConfigTypeHelper;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\EntityExtendBundle\Form\Type\TextType;

class TextTypeTest extends AbstractConfigTypeTestCase
{
    /** @var TextType */
    protected $type;

    protected function setUp()
    {
        parent::setUp();

        $this->type = new TextType(
            new ConfigTypeHelper($this->configManager),
            $this->configManager
        );
    }

    /**
     * @dataProvider submitProvider
     */
    public function testSubmit($newVal, $oldVal, $state, $isSetStateExpected)
    {
        $this->doTestSubmit(
            'testAttr',
            $this->type,
            [
                'config_id' => new EntityConfigId('test', 'Test\Entity'),
            ],
            [],
            $newVal,
            $oldVal,
            $state,
            $isSetStateExpected
        );
    }

    public function submitProvider()
    {
        return [
            ['', null, ExtendScope::STATE_ACTIVE, false],
            ['', '', ExtendScope::STATE_ACTIVE, false],
            ['', 'old', ExtendScope::STATE_ACTIVE, true],
            ['new', '', ExtendScope::STATE_ACTIVE, true],
            ['new', 'old', ExtendScope::STATE_ACTIVE, true],
            ['new', 'old', ExtendScope::STATE_UPDATE, false],
        ];
    }

    public function testGetName()
    {
        $this->assertEquals(
            'oro_entity_extend_text',
            $this->type->getName()
        );
    }

    public function testGetParent()
    {
        $this->assertEquals(
            'text',
            $this->type->getParent()
        );
    }
}
