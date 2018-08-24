<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Provider;

use Doctrine\ORM\EntityRepository;

use Oro\Bundle\AttachmentBundle\Entity\File;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\LayoutBundle\Model\ThemeImageTypeDimension;
use Oro\Bundle\ProductBundle\DependencyInjection\Configuration;
use Oro\Bundle\ProductBundle\Provider\WatermarkImageFilterProvider;

class WatermarkImageFilterProviderTest extends \PHPUnit_Framework_TestCase
{
    const IMAGE_ID = 1;
    const SIZE = 50;
    const POSITION = 'center';
    const FILENAME = 'file.jpg';
    const ATTACHMENT_DIR = 'attachment';

    /**
     * @var WatermarkImageFilterProvider
     */
    protected $provider;

    /**
     * @var ConfigManager
     */
    protected $configManager;

    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    public function setUp()
    {
        $this->configManager = $this->prophesize(ConfigManager::class);
        $this->doctrineHelper = $this->prophesize(DoctrineHelper::class);

        $this->provider = new WatermarkImageFilterProvider(
            $this->configManager->reveal(),
            $this->doctrineHelper->reveal(),
            self::ATTACHMENT_DIR
        );
    }

    public function testGetFilterConfig()
    {
        list($fileConfigKey, $sizeConfigKey, $positionConfigKey) = $this->prepareKeys();

        $this->configManager->get($fileConfigKey)->willReturn(self::IMAGE_ID);
        $this->configManager->get($sizeConfigKey)->willReturn(self::SIZE);
        $this->configManager->get($positionConfigKey)->willReturn(self::POSITION);

        $image = new File();
        $image->setFilename(self::FILENAME);

        $repo = $this->prophesize(EntityRepository::class);
        $repo->find(self::IMAGE_ID)->willReturn($image);

        $this->doctrineHelper->getEntityRepositoryForClass(File::class)->willReturn($repo->reveal());

        $expectedConfig = [
            'filters' => [
                'watermark' => [
                    'image' => self::ATTACHMENT_DIR . '/' . self::FILENAME,
                    'size' => round(self::SIZE/ 100, 2),
                    'position' => self::POSITION
                ]
            ]
        ];

        $this->assertEquals($expectedConfig, $this->provider->getFilterConfig());
    }

    public function testGetFilterConfigNoValue()
    {
        list($fileConfigKey, $sizeConfigKey, $positionConfigKey) = $this->prepareKeys();

        $this->configManager->get($fileConfigKey)->willReturn(null);
        $this->configManager->get($sizeConfigKey)->willReturn(null);
        $this->configManager->get($positionConfigKey)->willReturn(null);
        $this->doctrineHelper->getEntityRepositoryForClass(File::class)->shouldNotBeCalled();

        $this->assertEquals([], $this->provider->getFilterConfig());
    }

    public function testIsApplicable()
    {
        $dimension = $this->prophesize(ThemeImageTypeDimension::class);
        $dimension
            ->hasOption(WatermarkImageFilterProvider::APPLY_PRODUCT_IMAGE_WATERMARK_OPTION_NAME)
            ->willReturn(true);
        $dimension
            ->getOption(WatermarkImageFilterProvider::APPLY_PRODUCT_IMAGE_WATERMARK_OPTION_NAME)
            ->willReturn(true);
        $this->assertTrue($this->provider->isApplicable($dimension->reveal()));

        $dimension
            ->hasOption(WatermarkImageFilterProvider::APPLY_PRODUCT_IMAGE_WATERMARK_OPTION_NAME)
            ->willReturn(false);
        $this->assertFalse($this->provider->isApplicable($dimension->reveal()));
    }

    /**
     * @return array
     */
    protected function prepareKeys()
    {
        $fileConfigKey = Configuration::ROOT_NODE.'.'.Configuration::PRODUCT_IMAGE_WATERMARK_FILE;
        $sizeConfigKey = Configuration::ROOT_NODE.'.'.Configuration::PRODUCT_IMAGE_WATERMARK_SIZE;
        $positionConfigKey = Configuration::ROOT_NODE.'.'.Configuration::PRODUCT_IMAGE_WATERMARK_POSITION;

        return [$fileConfigKey, $sizeConfigKey, $positionConfigKey];
    }
}
