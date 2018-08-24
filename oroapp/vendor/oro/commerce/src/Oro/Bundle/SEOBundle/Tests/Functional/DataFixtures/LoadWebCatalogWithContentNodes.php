<?php

namespace Oro\Bundle\SEOBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\ProductBundle\ContentVariantType\ProductPageContentVariantType;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadFrontendProductData;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\SEOBundle\Migrations\Schema\OroSEOBundleInstaller;
use Oro\Bundle\WebCatalogBundle\Entity\ContentNode;
use Oro\Bundle\WebCatalogBundle\Entity\ContentVariant;
use Oro\Bundle\WebCatalogBundle\Entity\WebCatalog;

class LoadWebCatalogWithContentNodes extends AbstractFixture implements DependentFixtureInterface
{
    use SEOMetaDataFieldsTrait;
    
    const WEB_CATALOG_NAME = 'web_catalog_name';
    const CONTENT_NODE_1 = 'content_node_1';
    const CONTENT_NODE_2 = 'content_node_2';
    const CONTENT_VARIANT_1 = 'content_variant_1';
    const CONTENT_VARIANT_2 = 'content_variant_2';

    const META_DESCRTIPTION = 'web_catalog_meta_description';
    const META_KEYWORDS = 'web_catalog_meta_keywords';
    
    private static $contentVariants = [
        self::CONTENT_NODE_1 => self::CONTENT_VARIANT_1,
        self::CONTENT_NODE_2 => self::CONTENT_VARIANT_2,
    ];
    
    private static $productsForVariant = [
        self::CONTENT_VARIANT_1 => LoadProductData::PRODUCT_1,
        self::CONTENT_VARIANT_2 => LoadProductData::PRODUCT_2,
    ];
    
    private static $contentNodeMeta = [
        self::CONTENT_NODE_1 => [
            OroSEOBundleInstaller::METAINFORMATION_DESCRIPTIONS => self::META_DESCRTIPTION,
            OroSEOBundleInstaller::METAINFORMATION_KEYWORDS => self::META_KEYWORDS,
        ]
    ];
    
    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [
            LoadFrontendProductData::class,
            LoadProductMetaData::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $webCatalog = new WebCatalog();
        $webCatalog->setName(self::WEB_CATALOG_NAME);
        $manager->persist($webCatalog);
        $this->setReference(self::WEB_CATALOG_NAME, $webCatalog);
        
        foreach (self::$contentVariants as $nodeReference => $variantReference) {
            $product = $this->getReference(self::$productsForVariant[$variantReference]);

            $productContentVariant = new ContentVariant();
            $productContentVariant->setType(ProductPageContentVariantType::TYPE);
            $productContentVariant->setProductPageProduct($product);
            $productContentVariant->setDefault(true);

            $contentNode = new ContentNode();
            $contentNode->setWebCatalog($webCatalog);
            $contentNode->addContentVariant($productContentVariant);
            if (isset(self::$contentNodeMeta[$nodeReference])) {
                $this->loadLocalizedFallbackValues($manager, $contentNode, self::$contentNodeMeta[$nodeReference]);
            }

            $manager->persist($productContentVariant);
            $manager->persist($contentNode);
            $this->setReference($variantReference, $productContentVariant);
            $this->setReference($nodeReference, $contentNode);
        }

        $manager->flush();
    }
}
