<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Duplicator;

use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Connection;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\AttachmentBundle\Entity\Attachment;
use Oro\Bundle\AttachmentBundle\Entity\File;
use Oro\Bundle\AttachmentBundle\Manager\FileManager;
use Oro\Bundle\AttachmentBundle\Provider\AttachmentProvider;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\ProductBundle\Duplicator\ProductDuplicator;
use Oro\Bundle\ProductBundle\Duplicator\SkuIncrementorInterface;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\Product;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\StubProductImage;
use Oro\Bundle\RedirectBundle\Entity\Slug;

class ProductDuplicatorTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    const PRODUCT_SKU = 'SKU-1';
    const PRODUCT_COPY_SKU = 'SKU-2';
    const PRODUCT_STATUS = Product::STATUS_DISABLED;
    const UNIT_PRECISION_CODE_1 = 'kg';
    const UNIT_PRECISION_DEFAULT_PRECISION_1 = 2;
    const UNIT_PRECISION_CODE_2 = 'mg';
    const UNIT_PRECISION_DEFAULT_PRECISION_2 = 4;
    const NAME_DEFAULT_LOCALE = 'name default';
    const NAME_CUSTOM_LOCALE = 'name custom';
    const DESCRIPTION_DEFAULT_LOCALE = 'description default';
    const DESCRIPTION_CUSTOM_LOCALE = 'description custom';
    const SHORT_DESCRIPTION_DEFAULT_LOCALE = 'short description default';
    const SHORT_DESCRIPTION_CUSTOM_LOCALE = 'short description custom';

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|EntityManager
     */
    protected $objectManager;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|SkuIncrementorInterface
     */
    protected $skuIncrementor;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|FileManager
     */
    protected $fileManager;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|AttachmentProvider
     */
    protected $attachmentProvider;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|Connection
     */
    protected $connection;

    /**
     * @var ProductDuplicator
     */
    protected $duplicator;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->objectManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->doctrineHelper = $this->getMockBuilder('Oro\Bundle\EntityBundle\ORM\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();
        $this->eventDispatcher = $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcherInterface')
            ->disableOriginalConstructor()
            ->getMock();
        $this->skuIncrementor = $this->getMockBuilder('Oro\Bundle\ProductBundle\Duplicator\SkuIncrementorInterface')
            ->disableOriginalConstructor()
            ->getMock();
        $this->fileManager = $this->getMockBuilder('Oro\Bundle\AttachmentBundle\Manager\FileManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->attachmentProvider = $this->getMockBuilder('Oro\Bundle\AttachmentBundle\Provider\AttachmentProvider')
            ->disableOriginalConstructor()
            ->getMock();
        $this->connection = $this->getMockBuilder('Doctrine\DBAL\Connection')
            ->disableOriginalConstructor()
            ->getMock();

        $this->doctrineHelper->expects($this->any())
            ->method('getEntityManager')
            ->with($this->anything())
            ->will($this->returnValue($this->objectManager));

        $this->objectManager->expects($this->any())
            ->method('getConnection')
            ->will($this->returnValue($this->connection));

        $this->duplicator = new ProductDuplicator(
            $this->doctrineHelper,
            $this->eventDispatcher,
            $this->fileManager,
            $this->attachmentProvider
        );

        $this->duplicator->setSkuIncrementor($this->skuIncrementor);
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testDuplicate()
    {
        $image = new File();
        $imageCopy = new File();

        $productImage = new StubProductImage();
        $productImage->setImage($image);
        $productImageCopy = new StubProductImage();
        $productImageCopy->setImage($imageCopy);

        $productSlug = new Slug();
        $productSlug->setUrl('/url');
        $productSlug->setRouteName('route_name');

        $attachmentFile1 = new File();
        $attachmentFileCopy1 = new File();
        $attachmentFile2 = new File();
        $attachmentFileCopy2 = new File();

        $attachment1 = (new Attachment())
            ->setFile($attachmentFile1);
        $attachment2 = (new Attachment())
            ->setFile($attachmentFile2);

        /** @var Product $product */
        $product = $this->getEntity(Product::class, ['id' => 42]);
        $product->setSku(self::PRODUCT_SKU)
            ->setPrimaryUnitPrecision($this->prepareUnitPrecision(
                self::UNIT_PRECISION_CODE_1,
                self::UNIT_PRECISION_DEFAULT_PRECISION_1
            ))
            ->addAdditionalUnitPrecision($this->prepareUnitPrecision(
                self::UNIT_PRECISION_CODE_2,
                self::UNIT_PRECISION_DEFAULT_PRECISION_2
            ))
            ->addSlug($productSlug)
            ->addName($this->prepareLocalizedValue(self::NAME_DEFAULT_LOCALE))
            ->addName($this->prepareLocalizedValue(self::NAME_CUSTOM_LOCALE))
            ->addDescription($this->prepareLocalizedValue(null, self::DESCRIPTION_DEFAULT_LOCALE))
            ->addDescription($this->prepareLocalizedValue(null, self::DESCRIPTION_CUSTOM_LOCALE))
            ->addShortDescription($this->prepareLocalizedValue(null, self::SHORT_DESCRIPTION_DEFAULT_LOCALE))
            ->addShortDescription($this->prepareLocalizedValue(null, self::SHORT_DESCRIPTION_CUSTOM_LOCALE))
            ->addImage($productImage);

        $this->skuIncrementor->expects($this->once())
            ->method('increment')
            ->with(self::PRODUCT_SKU)
            ->will($this->returnValue(self::PRODUCT_COPY_SKU));

        $this->attachmentProvider->expects($this->once())
            ->method('getEntityAttachments')
            ->with($product)
            ->will($this->returnValue([$attachment1, $attachment2]));

        $this->fileManager->expects($this->any())
            ->method('cloneFileEntity')
            ->with($image)
            ->will($this->returnValue($imageCopy));
        $this->fileManager->expects($this->any())
            ->method('cloneFileEntity')
            ->with($attachmentFile1)
            ->will($this->returnValue($attachmentFileCopy1));
        $this->fileManager->expects($this->any())
            ->method('cloneFileEntity')
            ->with($attachmentFile2)
            ->will($this->returnValue($attachmentFileCopy2));

        $this->connection->expects($this->once())
            ->method('beginTransaction');
        $this->connection->expects($this->once())
            ->method('commit');

        $productCopy = $this->duplicator->duplicate($product);
        $productCopyUnitPrecisions = $productCopy->getUnitPrecisions();

        $this->assertEmpty($productCopy->getSlugPrototypes());
        $this->assertEmpty($productCopy->getSlugs());

        $this->assertEquals(self::PRODUCT_COPY_SKU, $productCopy->getSku());
        $this->assertEquals(self::PRODUCT_STATUS, $productCopy->getStatus());
        $this->assertCount(2, $productCopyUnitPrecisions);
        $this->assertEquals(self::UNIT_PRECISION_CODE_1, $productCopyUnitPrecisions[0]->getUnit()->getCode());
        $this->assertEquals(
            self::UNIT_PRECISION_DEFAULT_PRECISION_1,
            $productCopyUnitPrecisions[0]->getUnit()->getDefaultPrecision()
        );
        $this->assertEquals(self::UNIT_PRECISION_CODE_2, $productCopyUnitPrecisions[1]->getUnit()->getCode());
        $this->assertEquals(
            self::UNIT_PRECISION_DEFAULT_PRECISION_2,
            $productCopyUnitPrecisions[1]->getUnit()->getDefaultPrecision()
        );

        $productCopyNames = $productCopy->getNames();
        $this->assertEquals(self::NAME_DEFAULT_LOCALE, $productCopyNames[0]->getString());
        $this->assertEquals(self::NAME_CUSTOM_LOCALE, $productCopyNames[1]->getString());

        $productCopyDescriptions = $productCopy->getDescriptions();
        $this->assertEquals(self::DESCRIPTION_DEFAULT_LOCALE, $productCopyDescriptions[0]->getText());
        $this->assertEquals(self::DESCRIPTION_CUSTOM_LOCALE, $productCopyDescriptions[1]->getText());

        $productCopyShortDescriptions = $productCopy->getShortDescriptions();
        $this->assertEquals(self::SHORT_DESCRIPTION_DEFAULT_LOCALE, $productCopyShortDescriptions[0]->getText());
        $this->assertEquals(self::SHORT_DESCRIPTION_CUSTOM_LOCALE, $productCopyShortDescriptions[1]->getText());

        $this->assertEquals($imageCopy, $productImageCopy->getImage());
    }

    /**
     * @expectedException \Exception
     */
    public function testDuplicateFailed()
    {
        $product = (new Product())
            ->setSku(self::PRODUCT_SKU)
            ->setPrimaryUnitPrecision($this->prepareUnitPrecision(
                self::UNIT_PRECISION_CODE_1,
                self::UNIT_PRECISION_DEFAULT_PRECISION_1
            ));

        $this->skuIncrementor->expects($this->once())
            ->method('increment')
            ->with(self::PRODUCT_SKU)
            ->will($this->returnValue(self::PRODUCT_COPY_SKU));

        $this->attachmentProvider->expects($this->once())
            ->method('getEntityAttachments')
            ->with($product)
            ->will($this->returnValue([]));

        $this->connection->expects($this->once())
            ->method('beginTransaction');
        $this->connection->expects($this->once())
            ->method('commit')
            ->will($this->throwException(new \Exception()));
        $this->connection->expects($this->once())
            ->method('rollback');

        $this->duplicator->duplicate($product);
    }

    /**
     * @param string $code
     * @param int $defaultPrecision
     * @return ProductUnitPrecision
     */
    protected function prepareUnitPrecision($code, $defaultPrecision)
    {
        $productUnit = (new ProductUnit())
            ->setCode($code)
            ->setDefaultPrecision($defaultPrecision);

        return (new ProductUnitPrecision())
            ->setUnit($productUnit);
    }

    /**
     * @param string|null $string
     * @param string|null $text
     * @return LocalizedFallbackValue
     */
    protected function prepareLocalizedValue($string = null, $text = null)
    {
        $value = new LocalizedFallbackValue();
        $value->setString($string)
            ->setText($text);

        return $value;
    }
}
