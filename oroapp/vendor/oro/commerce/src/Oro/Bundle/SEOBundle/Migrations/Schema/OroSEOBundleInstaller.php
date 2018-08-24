<?php

namespace Oro\Bundle\SEOBundle\Migrations\Schema;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtension;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtensionAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Installation;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class OroSEOBundleInstaller implements Installation, ExtendExtensionAwareInterface
{
    const PRODUCT_TABLE_NAME = 'oro_product';
    const CATEGORY_TABLE_NAME = 'oro_catalog_category';
    const LANDING_PAGE_TABLE_NAME = 'oro_cms_page';
    const WEB_CATALOG_NODE_TABLE_NAME = 'oro_web_catalog_content_node';
    const FALLBACK_LOCALE_VALUE_TABLE_NAME = 'oro_fallback_localization_val';
    const BRAND_TABLE_NAME = 'oro_brand';

    const METAINFORMATION_TITLES = 'metaTitles';
    const METAINFORMATION_DESCRIPTIONS = 'metaDescriptions';
    const METAINFORMATION_KEYWORDS = 'metaKeywords';

    /** @var ExtendExtension */
    protected $extendExtension;

    /**
     * @inheritdoc
     */
    public function setExtendExtension(ExtendExtension $extendExtension)
    {
        $this->extendExtension = $extendExtension;
    }

    /**
     * @inheritdoc
     */
    public function getMigrationVersion()
    {
        return 'v1_5';
    }

    /**
     * @inheritdoc
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $this->addMetaInformation($schema, self::PRODUCT_TABLE_NAME);
        $this->addMetaInformation($schema, self::CATEGORY_TABLE_NAME);
        $this->addMetaInformation($schema, self::LANDING_PAGE_TABLE_NAME);
        $this->addMetaInformation($schema, self::WEB_CATALOG_NODE_TABLE_NAME);
        $this->addMetaInformation($schema, self::BRAND_TABLE_NAME);
        $this->createOroWebCatalogProductLimitTable($schema);
    }

    /**
     * Adds metaTitle, metaDescription and metaKeywords relations to entitiy.
     *
     * @param Schema $schema
     * @param string $ownerTable
     */
    private function addMetaInformation(Schema $schema, $ownerTable)
    {
        if ($schema->hasTable($ownerTable)) {
            $this->addMetaInformationField($schema, $ownerTable, self::METAINFORMATION_TITLES);
            $this->addMetaInformationField($schema, $ownerTable, self::METAINFORMATION_DESCRIPTIONS);
            $this->addMetaInformationField($schema, $ownerTable, self::METAINFORMATION_KEYWORDS);
        }
    }

    /**
     * Add a many-to-many relation between a given table and the table corresponding to the
     * LocalizedFallbackValue entity, with the given relation name.
     *
     * @param Schema $schema
     * @param string $ownerTable
     * @param string $relationName
     * @param bool $isString
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Schema\SchemaException
     */
    private function addMetaInformationField(Schema $schema, $ownerTable, $relationName, $isString = false)
    {
        $targetTable = $schema->getTable($ownerTable);

        // Column names are used to show a title of target entity
        $targetTitleColumnNames = $targetTable->getPrimaryKeyColumns();
        // Column names are used to show detailed info about target entity
        $targetDetailedColumnNames = $targetTable->getPrimaryKeyColumns();
        // Column names are used to show target entity in a grid
        $targetGridColumnNames = $targetTable->getPrimaryKeyColumns();

        $this->extendExtension->addManyToManyRelation(
            $schema,
            $targetTable,
            $relationName,
            self::FALLBACK_LOCALE_VALUE_TABLE_NAME,
            $targetTitleColumnNames,
            $targetDetailedColumnNames,
            $targetGridColumnNames,
            [
                'extend' => [
                    'owner' => ExtendScope::OWNER_CUSTOM,
                    'without_default' => true,
                    'cascade' => ['all'],
                ],
                'form' => ['is_enabled' => false],
                'view' => ['is_displayable' => false],
                'importexport' => [
                    'excluded' => false,
                    'fallback_field' => $isString ? 'string' : 'text',
                ],
            ]
        );
    }

    /**
     * Create oro_web_catalog_product_limit table
     *
     * @param Schema $schema
     */
    private function createOroWebCatalogProductLimitTable(Schema $schema)
    {
        $table = $schema->createTable('oro_web_catalog_product_limit');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('product_id', 'integer', []);
        $table->addColumn('version', 'integer', []);
        $table->setPrimaryKey(['id']);
    }
}
