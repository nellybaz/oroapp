<?php

namespace Oro\Bundle\ProductBundle\Provider;

use Oro\Bundle\AttachmentBundle\Entity\File;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\LayoutBundle\Model\ThemeImageTypeDimension;
use Oro\Bundle\LayoutBundle\Provider\CustomImageFilterProviderInterface;
use Oro\Bundle\ProductBundle\DependencyInjection\Configuration;

class WatermarkImageFilterProvider implements CustomImageFilterProviderInterface
{
    const APPLY_PRODUCT_IMAGE_WATERMARK_OPTION_NAME = 'applyProductImageWatermark';

    /**
     * @var ConfigManager
     */
    protected $configManager;

    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @var string
     */
    protected $attachmentDir;

    /**
     * @param ConfigManager $configManager
     * @param DoctrineHelper $doctrineHelper
     * @param string $attachmentDir
     */
    public function __construct(ConfigManager $configManager, DoctrineHelper $doctrineHelper, $attachmentDir)
    {
        $this->configManager = $configManager;
        $this->doctrineHelper = $doctrineHelper;
        $this->attachmentDir = $attachmentDir;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilterConfig()
    {
        $config = [];
        $fileConfigKey = Configuration::ROOT_NODE . '.' . Configuration::PRODUCT_IMAGE_WATERMARK_FILE;
        $sizeConfigKey = Configuration::ROOT_NODE . '.' . Configuration::PRODUCT_IMAGE_WATERMARK_SIZE;
        $positionConfigKey = Configuration::ROOT_NODE . '.' . Configuration::PRODUCT_IMAGE_WATERMARK_POSITION;

        $imageId = $this->configManager->get($fileConfigKey);
        $size = $this->configManager->get($sizeConfigKey);
        $position = $this->configManager->get($positionConfigKey);

        if ($imageId && $image = $this->doctrineHelper->getEntityRepositoryForClass(File::class)->find($imageId)) {
            /** @var File $image */
            $filePath = $this->attachmentDir . '/' . $image->getFilename();

            $config = [
                'filters' => [
                    'watermark' => [
                        'image' => $filePath,
                        'size' => round($size / 100, 2),
                        'position' => $position
                    ]
                ]
            ];
        }

        return $config;
    }

    /**
     * @param ThemeImageTypeDimension $dimension
     * @return bool
     */
    public function isApplicable(ThemeImageTypeDimension $dimension)
    {
        return $dimension->hasOption(self::APPLY_PRODUCT_IMAGE_WATERMARK_OPTION_NAME) &&
            $dimension->getOption(self::APPLY_PRODUCT_IMAGE_WATERMARK_OPTION_NAME);
    }
}
