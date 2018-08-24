<?php

namespace Oro\Bundle\InventoryBundle\Migrations\Schema\v1_2;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\CatalogBundle\Fallback\Provider\CategoryFallbackProvider;
use Oro\Bundle\CatalogBundle\Fallback\Provider\ParentCategoryFallbackProvider;
use Oro\Bundle\CatalogBundle\Migrations\Schema\OroCatalogBundleInstaller;
use Oro\Bundle\EntityBundle\Fallback\EntityFallbackResolver;
use Oro\Bundle\InventoryBundle\Provider\ProductUpcomingProvider;
use Oro\Bundle\EntityBundle\Migration\AddFallbackRelationTrait;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtension;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtensionAwareInterface;
use Oro\Bundle\EntityExtendBundle\Migration\OroOptions;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
use Oro\Bundle\ProductBundle\Migrations\Schema\OroProductBundleInstaller;

class AddUpcomingOptions implements Migration, ExtendExtensionAwareInterface
{
    use AddFallbackRelationTrait;

    /**
     * @var ExtendExtension
     */
    protected $extendExtension;

    /**
     * {@inheritdoc}
     */
    public function setExtendExtension(ExtendExtension $extendExtension)
    {
        $this->extendExtension = $extendExtension;
    }

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $this->addUpcomingFieldToProduct($schema);
        $this->addUpcomingFieldToCategory($schema);
        $this->addAvailabilityDateToProduct($schema);
        $this->addAvailabilityDateToCategory($schema);
    }

    /**
     * @param Schema $schema
     */
    protected function addUpcomingFieldToProduct(Schema $schema)
    {
        $this->addFallbackRelation(
            $schema,
            $this->extendExtension,
            OroProductBundleInstaller::PRODUCT_TABLE_NAME,
            ProductUpcomingProvider::IS_UPCOMING,
            'oro.inventory.is_upcoming.label',
            [
                CategoryFallbackProvider::FALLBACK_ID => ['fieldName' => ProductUpcomingProvider::IS_UPCOMING],
            ],
            EntityFallbackResolver::TYPE_BOOLEAN
        );
    }

    /**
     * @param Schema $schema
     */
    protected function addUpcomingFieldToCategory(Schema $schema)
    {
        $this->addFallbackRelation(
            $schema,
            $this->extendExtension,
            OroCatalogBundleInstaller::ORO_CATALOG_CATEGORY_TABLE_NAME,
            ProductUpcomingProvider::IS_UPCOMING,
            'oro.inventory.is_upcoming.label',
            [
                ParentCategoryFallbackProvider::FALLBACK_ID => ['fieldName' => ProductUpcomingProvider::IS_UPCOMING],
            ],
            EntityFallbackResolver::TYPE_BOOLEAN
        );
    }

    /**
     * @param Schema $schema
     */
    protected function addAvailabilityDateToProduct(Schema $schema)
    {
        $table = $schema->getTable(OroProductBundleInstaller::PRODUCT_TABLE_NAME);
        $table->addColumn(
            'availability_date',
            'datetime',
            [
                'notnull' => false,
                'comment' => '(DC2Type:datetime)',
                OroOptions::KEY => [
                    'entity' => ['label' => 'oro.inventory.availability_date.label'],
                    'extend' => [
                        'owner' => ExtendScope::OWNER_CUSTOM,
                        'is_extend' => true,
                    ],
                    'datagrid' => ['is_visible' => false],
                    'form' => ['is_enabled' => false,],
                    'view' => ['is_displayable' => false],
                    'merge' => ['display' => false],
                    'dataaudit' => ['auditable' => true],
                    'importexport' => ['full' => true]
                ],
            ]
        );
    }

    /**
     * @param Schema $schema
     */
    protected function addAvailabilityDateToCategory(Schema $schema)
    {
        $table = $schema->getTable(OroCatalogBundleInstaller::ORO_CATALOG_CATEGORY_TABLE_NAME);
        $table->addColumn(
            'availability_date',
            'datetime',
            [
                'notnull' => false,
                'comment' => '(DC2Type:datetime)',
                OroOptions::KEY => [
                    'entity' => ['label' => 'oro.inventory.availability_date.label'],
                    'extend' => [
                        'owner' => ExtendScope::OWNER_CUSTOM,
                        'is_extend' => true,
                    ],
                    'datagrid' => ['is_visible' => false],
                    'form' => ['is_enabled' => false,],
                    'view' => ['is_displayable' => false],
                    'merge' => ['display' => false],
                    'dataaudit' => ['auditable' => true],
                    'importexport' => ['full' => true]
                ],
            ]
        );
    }
}
