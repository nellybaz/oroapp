<?php

namespace Oro\Bundle\TaxBundle\Tests\Unit\EventListener\Config;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ConfigBundle\Event\ConfigSettingsUpdateEvent;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;

use Oro\Bundle\TaxBundle\Entity\ProductTaxCode;
use Oro\Bundle\TaxBundle\Entity\Repository\AbstractTaxCodeRepository;
use Oro\Bundle\TaxBundle\EventListener\Config\ProductTaxCodeEventListener;

class ProductTaxCodeEventListenerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var ProductTaxCodeEventListener */
    protected $listener;

    /** @var \PHPUnit_Framework_MockObject_MockObject|DoctrineHelper */
    protected $doctrineHelper;

    /** @var ConfigManager */
    protected $configManager;

    /**
     * @var array
     */
    protected $data = [];

    protected function setUp()
    {
        $this->doctrineHelper = $this->createMock(DoctrineHelper::class);
        $this->configManager = $this->createMock(ConfigManager::class);

        $this->listener = new ProductTaxCodeEventListener(
            $this->doctrineHelper,
            ProductTaxCode::class,
            'digital_products_eu'
        );

        $this->data = ['CODE1', null, 1, new \stdClass(), '', 'CODE2', '2'];
    }

    public function testFormPreSetWithoutKey()
    {
        $event = new ConfigSettingsUpdateEvent($this->configManager, []);

        $this->doctrineHelper->expects($this->never())->method($this->anything());

        $this->listener->formPreSet($event);
        $this->assertEquals([], $event->getSettings());
    }

    public function testFormPreSet()
    {
        $settings = ['oro_tax___digital_products_eu' => ['value' => $this->data]];
        $event = new ConfigSettingsUpdateEvent($this->configManager, $settings);

        /** @var \PHPUnit_Framework_MockObject_MockObject|AbstractTaxCodeRepository $repository */
        $repository = $this->getMockBuilder(AbstractTaxCodeRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $taxCodes = [
            $this->getEntity(ProductTaxCode::class, ['code' => 'CODE1']),
            $this->getEntity(ProductTaxCode::class, ['code' => 'CODE2']),
            $this->getEntity(ProductTaxCode::class, ['code' => '2']),
        ];
        $repository->expects($this->once())->method('findByCodes')->with(['CODE1', 'CODE2', '2'])
            ->willReturn($taxCodes);

        $this->doctrineHelper
            ->expects($this->once())
            ->method('getEntityRepository')
            ->willReturn($repository);

        $this->listener->formPreSet($event);

        $this->assertEquals(['oro_tax___digital_products_eu' => ['value' => $taxCodes]], $event->getSettings());
    }

    public function testBeforeSaveWithoutValueKey()
    {
        $settings = [];

        $event = new ConfigSettingsUpdateEvent($this->configManager, $settings);
        $this->listener->beforeSave($event);

        $this->assertEquals($settings, $event->getSettings());
    }

    public function testBeforeSave()
    {
        $settings = [
            'value' => $this->data
        ];

        $event = new ConfigSettingsUpdateEvent($this->configManager, $settings);

        /** @var \PHPUnit_Framework_MockObject_MockObject|AbstractTaxCodeRepository $repository */
        $repository = $this->getMockBuilder(AbstractTaxCodeRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $taxCodes = [
            $this->getEntity(ProductTaxCode::class, ['id' => 1, 'code' => 'CODE1']),
            $this->getEntity(ProductTaxCode::class, ['id' => 2, 'code' => 'CODE2']),
        ];

        $repository->expects($this->once())->method('findBy')->with(['id' => [1, 2]])->willReturn($taxCodes);

        $this->doctrineHelper
            ->expects($this->once())
            ->method('getEntityRepository')
            ->willReturn($repository);

        $this->listener->beforeSave($event);

        $this->assertEquals(['value' => ['CODE1', 'CODE2']], $event->getSettings());
    }
}
