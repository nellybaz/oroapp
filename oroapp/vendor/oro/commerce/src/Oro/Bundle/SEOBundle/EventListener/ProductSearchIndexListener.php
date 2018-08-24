<?php

namespace Oro\Bundle\SEOBundle\EventListener;

use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Entity\Repository\CategoryRepository;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\WebsiteSearchBundle\Engine\IndexDataProvider;
use Oro\Bundle\WebsiteBundle\Provider\AbstractWebsiteLocalizationProvider;
use Oro\Bundle\WebsiteSearchBundle\Manager\WebsiteContextManager;
use Oro\Bundle\WebsiteSearchBundle\Placeholder\LocalizationIdPlaceholder;
use Oro\Bundle\WebsiteSearchBundle\Event\IndexEntityEvent;
use Oro\Bundle\ProductBundle\Entity\Product;

class ProductSearchIndexListener
{
    /**
     * @var DoctrineHelper
     */
    private $doctrineHelper;

    /**
     * @var AbstractWebsiteLocalizationProvider
     */
    private $websiteLocalizationProvider;

    /**
     * @var WebsiteContextManager
     */
    private $websiteContextManager;

    /**
     * @param DoctrineHelper $doctrineHelper
     * @param AbstractWebsiteLocalizationProvider $websiteLocalizationProvider
     * @param WebsiteContextManager $websiteContextManager
     */
    public function __construct(
        DoctrineHelper $doctrineHelper,
        AbstractWebsiteLocalizationProvider $websiteLocalizationProvider,
        WebsiteContextManager $websiteContextManager
    ) {
        $this->doctrineHelper              = $doctrineHelper;
        $this->websiteLocalizationProvider = $websiteLocalizationProvider;
        $this->websiteContextManager       = $websiteContextManager;
    }

    /**
     * @param Product|Category $entity
     * @param Localization $localization
     * @return array
     */
    protected function getMetaFieldsForEntity($entity, $localization)
    {
        return [
            $entity->getMetaTitle($localization),
            $entity->getMetaDescription($localization),
            $entity->getMetaKeyword($localization)
        ];
    }

    /**
     * @param IndexEntityEvent $event
     * @param int $productId
     * @param string $metaField
     * @param int $localizationId
     */
    protected function addPlaceholderToEvent($event, $productId, $metaField, $localizationId)
    {
        $metaField = $this->cleanUpString($metaField);
        $event->addPlaceholderField(
            $productId,
            IndexDataProvider::ALL_TEXT_L10N_FIELD,
            $metaField,
            [LocalizationIdPlaceholder::NAME => $localizationId],
            true
        );
    }

    /**
     * @param IndexEntityEvent $event
     */
    public function onWebsiteSearchIndex(IndexEntityEvent $event)
    {
        $websiteId = $this->websiteContextManager->getWebsiteId($event->getContext());
        if (!$websiteId) {
            $event->stopPropagation();

            return;
        }

        /** @var Product[] $products */
        $products = $event->getEntities();

        $localizations = $this->websiteLocalizationProvider->getLocalizationsByWebsiteId($websiteId);
        $categoryMap = $this->getRepository()->getCategoryMapByProducts($products, $localizations);
        foreach ($products as $product) {
            // Localized fields
            $category = &$categoryMap[$product->getId()];
            foreach ($localizations as $localization) {
                if (!empty($category)) {
                    foreach ($this->getMetaFieldsForEntity($category, $localization) as $metaField) {
                        $this->addPlaceholderToEvent($event, $product->getId(), $metaField, $localization->getId());
                    }
                }
            }
        }
    }

    /**
     * Cleans up a unicode string from control characters.
     *
     * @param string $string
     * @return string
     */
    private function cleanUpString($string)
    {
        return preg_replace('/[[:cntrl:]]/', '', $string);
    }

    /**
     * @return CategoryRepository
     */
    protected function getRepository()
    {
        return $this->doctrineHelper->getEntityRepository(Category::class);
    }
}
