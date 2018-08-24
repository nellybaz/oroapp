<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\EventListener;

use Doctrine\ORM\EntityRepository;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\EntityConfigBundle\Entity\EntityConfigModel;
use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;
use Oro\Bundle\EntityExtendBundle\Event\ValidateBeforeRemoveFieldEvent;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\EventListener\ValidateBeforeRemoveFieldListener;

use Symfony\Component\Translation\TranslatorInterface;

class ValidateBeforeRemoveFieldListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject */
    private $doctrineHelper;

    /** @var EntityRepository|\PHPUnit_Framework_MockObject_MockObject */
    private $entityRepository;

    /** @var ValidateBeforeRemoveFieldListener */
    private $listener;

    /** @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $translator;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->doctrineHelper = $this->createMock(DoctrineHelper::class);
        $this->entityRepository = $this->createMock(EntityRepository::class);
        $this->translator = $this->createMock(TranslatorInterface::class);
        $this->listener = new ValidateBeforeRemoveFieldListener($this->doctrineHelper, $this->translator);
    }

    /**
     * {@inheritdoc}
     */
    public function tearDown()
    {
        unset(
            $this->doctrineHelper,
            $this->entityRepository,
            $this->translator,
            $this->listener
        );
    }

    public function testOnBeforeRemoveFieldUnsupportedClass()
    {
        $configField = new FieldConfigModel('test');
        $configField->setEntity(new EntityConfigModel(\stdClass::class));

        $event = new ValidateBeforeRemoveFieldEvent($configField);

        $this->entityRepository->expects($this->never())->method('findBy');

        $this->listener->onValidateBeforeRemoveField($event);
    }

    public function testOnBeforeRemoveFieldIsUsed()
    {
        $configField = (new FieldConfigModel('color'))->setEntity(new EntityConfigModel(Product::class));
        $event = new ValidateBeforeRemoveFieldEvent($configField);

        $this->assertEquals([], $event->getValidationMessages());

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepository')
            ->with(Product::class)
            ->willReturn($this->entityRepository);

        $this->entityRepository->expects($this->once())
            ->method('findBy')
            ->with([
                'type' => Product::TYPE_CONFIGURABLE
            ])
            ->willReturn($this->getConfigurableProducts());

        // @codingStandardsIgnoreStart
        $message = 'Cannot remove field because it\'s used as a variant field in the following configurable products: CNFPRD1, CNFPRD3';
        // @codingStandardsIgnoreEnd

        $this->translator->expects($this->once())
            ->method('trans')
            ->with('oro.product.field_is_used_as_variant_field.message', [
                '%skuList%' => 'CNFPRD1, CNFPRD3',
            ])
            ->willReturn($message);

        $this->listener->onValidateBeforeRemoveField($event);

        $this->assertEquals([$message], $event->getValidationMessages());
    }

    public function testOnBeforeRemoveFieldNotUsed()
    {
        $configField = (new FieldConfigModel('unused_field'))->setEntity(new EntityConfigModel(Product::class));
        $event = new ValidateBeforeRemoveFieldEvent($configField);

        $this->assertEquals([], $event->getValidationMessages());

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepository')
            ->with(Product::class)
            ->willReturn($this->entityRepository);

        $this->entityRepository->expects($this->once())
            ->method('findBy')
            ->with([
                'type' => Product::TYPE_CONFIGURABLE
            ])
            ->willReturn($this->getConfigurableProducts());

        $this->translator->expects($this->never())->method('trans');
        $this->listener->onValidateBeforeRemoveField($event);

        $this->assertEquals([], $event->getValidationMessages());
    }

    /**
     * @return Product[]
     */
    private function getConfigurableProducts()
    {
        $product1 = new Product();
        $product1->setSku('CNFPRD1');
        $product1->setType(Product::TYPE_CONFIGURABLE);
        $product1->setVariantFields([
            'size',
            'color',
            'new_collection',
        ]);

        $product2 = new Product();
        $product2->setSku('CNFPRD2');
        $product2->setType(Product::TYPE_CONFIGURABLE);
        $product2->setVariantFields([
            'size',
            'new_collection',
        ]);

        $product3 = new Product();
        $product3->setSku('CNFPRD3');
        $product3->setType(Product::TYPE_CONFIGURABLE);
        $product3->setVariantFields([
            'size',
            'color',
            'new_collection',
        ]);

        return [
            $product1,
            $product2,
            $product3,
        ];
    }
}
