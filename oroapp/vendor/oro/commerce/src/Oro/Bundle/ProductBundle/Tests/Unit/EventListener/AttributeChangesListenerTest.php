<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\EventListener;

use Oro\Bundle\EntityConfigBundle\Config\Config;
use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityConfigBundle\Config\Id\ConfigIdInterface;
use Oro\Bundle\EntityConfigBundle\Entity\EntityConfigModel;
use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;
use Oro\Bundle\EntityConfigBundle\Event\PostFlushConfigEvent;
use Oro\Bundle\EntityConfigBundle\Layout\DataProvider\ConfigProvider;
use Oro\Bundle\EntityConfigBundle\Tests\Unit\ReflectionUtil;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\ProductBundle\Async\Topics;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\EventListener\AttributeChangesListener;
use Oro\Component\MessageQueue\Client\MessageProducerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class AttributeChangesListenerTest extends \PHPUnit_Framework_TestCase
{
    const FIELD_NAME = 'test_field';

    /** @var RequestStack */
    protected $requestStack;

    /** @var AttributeChangesListener */
    protected $listener;

    /** @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $configManager;

    /** @var MessageProducerInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $producer;

    protected function setUp()
    {
        $this->requestStack = new RequestStack();
        $this->producer = $this->createMock(MessageProducerInterface::class);
        $this->listener = new AttributeChangesListener($this->requestStack, $this->producer);

        $this->configManager = $this->createMock(ConfigManager::class);
    }

    public function testPostFlushUnsupportedModel()
    {
        $this->producer->expects($this->never())->method($this->anything());

        $model = new \stdClass();

        $this->listener->postFlush(new PostFlushConfigEvent([$model], $this->configManager));

        $attributeChangeSet = ['searchable' => [false, false]];

        $this->assertTrue(isset($attributeChangeSet['searchable'][1]));
    }

    public function testPostFlushUnsupportedModelEntityClass()
    {
        $this->producer->expects($this->never())->method($this->anything());

        $model = $this->getFieldConfigModel(\stdClass::class);

        $this->listener->postFlush(new PostFlushConfigEvent([$model], $this->configManager));
    }

    public function testPostFlushWithoutRequest()
    {
        $this->producer->expects($this->never())
            ->method('send');

        $this->listener->postFlush(new PostFlushConfigEvent([new FieldConfigModel()], $this->configManager));
    }

    /**
     * @dataProvider postFlushDataProvider
     *
     * @param \PHPUnit_Framework_MockObject_Matcher_InvokedCount $expected
     * @param array $extendConfigValues
     * @param array $extendChangeSet
     * @param array $attributeConfigValues
     * @param array $attributeChangeSet
     */
    public function testPostFlush(
        \PHPUnit_Framework_MockObject_Matcher_InvokedCount $expected,
        array $extendConfigValues = [],
        array $extendChangeSet = [],
        array $attributeConfigValues = [],
        array $attributeChangeSet = []
    ) {
        $this->requestStack->push(new Request());

        $this->setUpConfigManager($extendConfigValues, $extendChangeSet, $attributeConfigValues, $attributeChangeSet);

        $model = $this->getFieldConfigModel(Product::class);

        $this->producer->expects($expected)
            ->method('send')
            ->with(Topics::REINDEX_PRODUCTS_BY_ATTRIBUTE, ['attributeId' => 1]);

        $this->listener->postFlush(new PostFlushConfigEvent([$model], $this->configManager));
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     *
     * @return \Generator
     */
    public function postFlushDataProvider()
    {
        yield 'state not active and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_NEW]
        ];

        yield 'state changed from not active to not active' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_DELETE]]
        ];
        //searchable
        yield 'state changed from active to not active, searchable and not changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['searchable' => true]
        ];

        yield 'state changed from active to not active, searchable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['searchable' => true],
            'attributeChangeSet' => ['searchable' => [false, true]]
        ];

        yield 'state changed from active to not active, not searchable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['searchable' => false]
        ];

        yield 'state changed from active to not active, not searchable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['searchable' => false],
            'attributeChangeSet' => ['searchable' => [true, false]]
        ];
        // ----
        yield 'state changed from not active to active, searchable and not changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['searchable' => true]
        ];

        yield 'state changed from not active to active, searchable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['searchable' => true],
            'attributeChangeSet' => ['searchable' => [false, true]]
        ];

        yield 'state changed from not active to active, not searchable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['searchable' => false]
        ];

        yield 'state changed from not active to active, not searchable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['searchable' => false],
            'attributeChangeSet' => ['searchable' => [true, false]]
        ];
        // ----
        yield 'state active and not changed, searchable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['searchable' => true]
        ];

        yield 'state active and not changed, searchable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['searchable' => true],
            'attributeChangeSet' => ['searchable' => [false, true]]
        ];

        yield 'state active and not changed, not searchable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['searchable' => false]
        ];

        yield 'state active and not changed, not searchable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['searchable' => false],
            'attributeChangeSet' => ['searchable' => [true, false]]
        ];
        // ----
        yield 'state update and not changed, searchable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['searchable' => true]
        ];

        yield 'state update and not changed, searchable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['searchable' => true],
            'attributeChangeSet' => ['searchable' => [false, true]]
        ];

        yield 'state update and not changed, not searchable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['searchable' => false]
        ];

        yield 'state update and not changed, not searchable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['searchable' => false],
            'attributeChangeSet' => ['searchable' => [true, false]]
        ];
        // ----
        yield 'state changed from active to update, searchable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['searchable' => true]
        ];

        yield 'state changed from active to update, searchable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['searchable' => true],
            'attributeChangeSet' => ['searchable' => [false, true]]
        ];

        yield 'state changed from active to update, not searchable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['searchable' => false]
        ];

        yield 'state changed from active to update, not searchable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['searchable' => false],
            'attributeChangeSet' => ['searchable' => [true, false]]
        ];
        //filterable
        yield 'state changed from active to not active, filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['filterable' => true]
        ];

        yield 'state changed from active to not active, filterable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['filterable' => true],
            'attributeChangeSet' => ['filterable' => [false, true]]
        ];

        yield 'state changed from active to not active, not filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['filterable' => false]
        ];

        yield 'state changed from active to not active, not filterable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['filterable' => false],
            'attributeChangeSet' => ['filterable' => [true, false]]
        ];
        // ----
        yield 'state changed from not active to active, filterable and not changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['filterable' => true]
        ];

        yield 'state changed from not active to active, filterable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['filterable' => true],
            'attributeChangeSet' => ['filterable' => [false, true]]
        ];

        yield 'state changed from not active to active, not filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['filterable' => false]
        ];

        yield 'state changed from not active to active, not filterable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['filterable' => false],
            'attributeChangeSet' => ['filterable' => [true, false]]
        ];
        // ----
        yield 'state active and not changed, filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['filterable' => true]
        ];

        yield 'state active and not changed, filterable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['filterable' => true],
            'attributeChangeSet' => ['filterable' => [false, true]]
        ];

        yield 'state active and not changed, not filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['filterable' => false]
        ];

        yield 'state active and not changed, not filterable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['filterable' => false],
            'attributeChangeSet' => ['filterable' => [true, false]]
        ];
        // ----
        yield 'state update and not changed, filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['filterable' => true]
        ];

        yield 'state update and not changed, filterable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['filterable' => true],
            'attributeChangeSet' => ['filterable' => [false, true]]
        ];

        yield 'state update and not changed, not filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['filterable' => false]
        ];

        yield 'state update and not changed, not filterable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['filterable' => false],
            'attributeChangeSet' => ['filterable' => [true, false]]
        ];
        // ----
        yield 'state changed from active to update, filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['filterable' => true]
        ];

        yield 'state changed from active to update, filterable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['filterable' => true],
            'attributeChangeSet' => ['filterable' => [false, true]]
        ];

        yield 'state changed from active to update, not filterable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['filterable' => false]
        ];

        yield 'state changed from active to update, not filterable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['filterable' => false],
            'attributeChangeSet' => ['filterable' => [true, false]]
        ];
        //sortable
        yield 'state changed from active to not active, sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['sortable' => true]
        ];

        yield 'state changed from active to not active, sortable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['sortable' => true],
            'attributeChangeSet' => ['sortable' => [false, true]]
        ];

        yield 'state changed from active to not active, not sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['sortable' => false]
        ];

        yield 'state changed from active to not active, not sortable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['sortable' => false],
            'attributeChangeSet' => ['sortable' => [true, false]]
        ];
        // ----
        yield 'state changed from not active to active, sortable and not changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['sortable' => true]
        ];

        yield 'state changed from not active to active, sortable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['sortable' => true],
            'attributeChangeSet' => ['sortable' => [false, true]]
        ];

        yield 'state changed from not active to active, not sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['sortable' => false]
        ];

        yield 'state changed from not active to active, not sortable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['sortable' => false],
            'attributeChangeSet' => ['sortable' => [true, false]]
        ];
        // ----
        yield 'state active and not changed, sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['sortable' => true]
        ];

        yield 'state active and not changed, sortable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['sortable' => true],
            'attributeChangeSet' => ['sortable' => [false, true]]
        ];

        yield 'state active and not changed, not sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['sortable' => false]
        ];

        yield 'state active and not changed, not sortable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['sortable' => false],
            'attributeChangeSet' => ['sortable' => [true, false]]
        ];
        // ----
        yield 'state update and not changed, sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['sortable' => true]
        ];

        yield 'state update and not changed, sortable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['sortable' => true],
            'attributeChangeSet' => ['sortable' => [false, true]]
        ];

        yield 'state update and not changed, not sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['sortable' => false]
        ];

        yield 'state update and not changed, not sortable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['sortable' => false],
            'attributeChangeSet' => ['sortable' => [true, false]]
        ];
        // ----
        yield 'state changed from active to update, sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['sortable' => true]
        ];

        yield 'state changed from active to update, sortable and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['sortable' => true],
            'attributeChangeSet' => ['sortable' => [false, true]]
        ];

        yield 'state changed from active to update, not sortable and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['sortable' => false]
        ];

        yield 'state changed from active to update, not sortable and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['sortable' => false],
            'attributeChangeSet' => ['sortable' => [true, false]]
        ];
        //visible
        yield 'state changed from active to not active, visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['visible' => true]
        ];

        yield 'state changed from active to not active, visible and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['visible' => true],
            'attributeChangeSet' => ['visible' => [false, true]]
        ];

        yield 'state changed from active to not active, not visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['visible' => false]
        ];

        yield 'state changed from active to not active, not visible and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_DELETE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_DELETE]],
            'attributeConfigValues' => ['visible' => false],
            'attributeChangeSet' => ['visible' => [true, false]]
        ];
        // ----
        yield 'state changed from not active to active, visible and not changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['visible' => true]
        ];

        yield 'state changed from not active to active, visible and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['visible' => true],
            'attributeChangeSet' => ['visible' => [false, true]]
        ];

        yield 'state changed from not active to active, not visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['visible' => false]
        ];

        yield 'state changed from not active to active, not visible and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_NEW, ExtendScope::STATE_ACTIVE]],
            'attributeConfigValues' => ['visible' => false],
            'attributeChangeSet' => ['visible' => [true, false]]
        ];
        // ----
        yield 'state active and not changed, visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['visible' => true]
        ];

        yield 'state active and not changed, visible and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['visible' => true],
            'attributeChangeSet' => ['visible' => [false, true]]
        ];

        yield 'state active and not changed, not visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['visible' => false]
        ];

        yield 'state active and not changed, not visible and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_ACTIVE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['visible' => false],
            'attributeChangeSet' => ['visible' => [true, false]]
        ];
        // ----
        yield 'state update and not changed, visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['visible' => true]
        ];

        yield 'state update and not changed, visible and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['visible' => true],
            'attributeChangeSet' => ['visible' => [false, true]]
        ];

        yield 'state update and not changed, not visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['visible' => false]
        ];

        yield 'state update and not changed, not visible and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => [],
            'attributeConfigValues' => ['visible' => false],
            'attributeChangeSet' => ['visible' => [true, false]]
        ];
        // ----
        yield 'state changed from active to update, visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['visible' => true]
        ];

        yield 'state changed from active to update, visible and changed' => [
            'expected' => $this->once(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['visible' => true],
            'attributeChangeSet' => ['visible' => [false, true]]
        ];

        yield 'state changed from active to update, not visible and not changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['visible' => false]
        ];

        yield 'state changed from active to update, not visible and changed' => [
            'expected' => $this->never(),
            'extendConfigValues' => ['state' => ExtendScope::STATE_UPDATE],
            'extendChangeSet' => ['state' => [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE]],
            'attributeConfigValues' => ['visible' => false],
            'attributeChangeSet' => ['visible' => [true, false]]
        ];
    }

    /**
     * @param string $className
     * @return FieldConfigModel
     */
    protected function getFieldConfigModel($className)
    {
        $entityModel = new EntityConfigModel();
        $entityModel->setClassName($className);

        $fieldModel = new FieldConfigModel();
        $fieldModel->setFieldName(self::FIELD_NAME)->setEntity($entityModel);
        ReflectionUtil::setId($fieldModel, 1);

        return $fieldModel;
    }

    /**
     * @param array $extendConfigValues
     * @param array $extendChangeSet
     * @param array $attributeConfigValues
     * @param array $attributeChangeSet
     */
    protected function setUpConfigManager(
        array $extendConfigValues,
        array $extendChangeSet,
        array $attributeConfigValues,
        array $attributeChangeSet
    ) {
        /** @var ConfigIdInterface|\PHPUnit_Framework_MockObject_MockObject $extendConfigId */
        $extendConfigId = $this->createMock(ConfigIdInterface::class);
        $extendConfig = new Config($extendConfigId, $extendConfigValues);

        /** @var ConfigProvider|\PHPUnit_Framework_MockObject_MockObject $extendConfigProvider */
        $extendConfigProvider = $this->createMock(ConfigProvider::class);
        $extendConfigProvider->expects($this->any())
            ->method('getConfig')
            ->with(Product::class, self::FIELD_NAME)
            ->willReturn($extendConfig);

        /** @var ConfigIdInterface|\PHPUnit_Framework_MockObject_MockObject $attributeConfigId */
        $attributeConfigId = $this->createMock(ConfigIdInterface::class);
        $attributeConfig = new Config($attributeConfigId, $attributeConfigValues);

        /** @var ConfigProvider|\PHPUnit_Framework_MockObject_MockObject $attributeConfigProvider */
        $attributeConfigProvider = $this->createMock(ConfigProvider::class);
        $attributeConfigProvider->expects($this->any())
            ->method('getConfig')
            ->with(Product::class, self::FIELD_NAME)
            ->willReturn($attributeConfig);

        $this->configManager->expects($this->any())
            ->method('getProvider')
            ->willReturnMap(
                [
                    ['extend', $extendConfigProvider],
                    ['attribute', $attributeConfigProvider]
                ]
            );
        $this->configManager->expects($this->any())
            ->method('getConfigChangeSet')
            ->willReturnMap(
                [
                    [$extendConfig, $extendChangeSet],
                    [$attributeConfig, $attributeChangeSet]
                ]
            );
    }
}
