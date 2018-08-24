<?php

namespace Oro\Bundle\CatalogBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\ActivityBundle\Migration\Extension\ActivityExtension;
use Oro\Bundle\ActivityBundle\Migration\Extension\ActivityExtensionAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class OroCatalogBundle implements Migration, ActivityExtensionAwareInterface
{
    /**
     * @var ActivityExtension
     */
    protected $activityExtension;

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        /** Tables generation **/
        $this->createOroCatalogCategoryTable($schema);
        $this->createOroCatalogCategoryTitleTable($schema);
        $this->createOrob2BCategoryToProductTable($schema);

        /** Foreign keys generation **/
        $this->addOroCatalogCategoryForeignKeys($schema);
        $this->addOroCatalogCategoryTitleForeignKeys($schema);
        $this->addOrob2BCategoryToProductForeignKeys($schema);
    }

    /**
     * Create orob2b_catalog_category table
     *
     * @param Schema $schema
     */
    protected function createOroCatalogCategoryTable(Schema $schema)
    {
        $table = $schema->createTable('orob2b_catalog_category');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('parent_id', 'integer', ['notnull' => false]);
        $table->addColumn('tree_left', 'integer', []);
        $table->addColumn('tree_level', 'integer', []);
        $table->addColumn('tree_right', 'integer', []);
        $table->addColumn('tree_root', 'integer', ['notnull' => false]);
        $table->addColumn('created_at', 'datetime', ['comment' => '(DC2Type:datetime)']);
        $table->addColumn('updated_at', 'datetime', ['comment' => '(DC2Type:datetime)']);
        $table->setPrimaryKey(['id']);


        $this->activityExtension->addActivityAssociation($schema, 'oro_note', 'orob2b_catalog_category');
    }

    /**
     * Create orob2b_catalog_category_title table
     *
     * @param Schema $schema
     */
    protected function createOroCatalogCategoryTitleTable(Schema $schema)
    {
        $table = $schema->createTable('orob2b_catalog_category_title');
        $table->addColumn('category_id', 'integer', []);
        $table->addColumn('localized_value_id', 'integer', []);
        $table->setPrimaryKey(['category_id', 'localized_value_id']);
        $table->addUniqueIndex(['localized_value_id']);
    }

    /**
     * Create orob2b_category_to_product table
     *
     * @param Schema $schema
     */
    protected function createOrob2BCategoryToProductTable(Schema $schema)
    {
        $table = $schema->createTable('orob2b_category_to_product');
        $table->addColumn('category_id', 'integer', []);
        $table->addColumn('product_id', 'integer', []);
        $table->setPrimaryKey(['category_id', 'product_id']);
        $table->addUniqueIndex(['product_id']);
    }

    /**
     * Add orob2b_catalog_category foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOroCatalogCategoryForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('orob2b_catalog_category');
        $table->addForeignKeyConstraint(
            $schema->getTable('orob2b_catalog_category'),
            ['parent_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
    }

    /**
     * Add orob2b_catalog_category_title foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOroCatalogCategoryTitleForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('orob2b_catalog_category_title');
        $table->addForeignKeyConstraint(
            $schema->getTable('orob2b_fallback_locale_value'),
            ['localized_value_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('orob2b_catalog_category'),
            ['category_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
    }

    /**
     * Add orob2b_category_to_product foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOrob2BCategoryToProductForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('orob2b_category_to_product');
        $table->addForeignKeyConstraint(
            $schema->getTable('orob2b_catalog_category'),
            ['category_id'],
            ['id'],
            ['onDelete' => 'CASCADE', 'onUpdate' => null]
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('orob2b_product'),
            ['product_id'],
            ['id'],
            ['onDelete' => 'CASCADE', 'onUpdate' => null]
        );
    }

    /**
     * Sets the ActivityExtension
     *
     * @param ActivityExtension $activityExtension
     */
    public function setActivityExtension(ActivityExtension $activityExtension)
    {
        $this->activityExtension = $activityExtension;
    }
}
