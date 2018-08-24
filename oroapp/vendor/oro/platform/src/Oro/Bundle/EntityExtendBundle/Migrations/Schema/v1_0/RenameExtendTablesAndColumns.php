<?php

namespace Oro\Bundle\EntityExtendBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\Table;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityConfigBundle\Config\Id\EntityConfigId;
use Oro\Bundle\EntityConfigBundle\Config\Id\FieldConfigId;

use Oro\Bundle\EntityExtendBundle\Migration\EntityMetadataHelper;
use Oro\Bundle\EntityExtendBundle\Extend\RelationType;
use Oro\Bundle\EntityExtendBundle\Tools\ExtendHelper;
use Oro\Bundle\EntityExtendBundle\Tools\ExtendDbIdentifierNameGenerator;

use Oro\Bundle\MigrationBundle\Migration\Extension\NameGeneratorAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
use Oro\Bundle\MigrationBundle\Migration\Extension\RenameExtension;
use Oro\Bundle\MigrationBundle\Migration\Extension\RenameExtensionAwareInterface;
use Oro\Bundle\MigrationBundle\Tools\DbIdentifierNameGenerator;

class RenameExtendTablesAndColumns implements
    Migration,
    RenameExtensionAwareInterface,
    NameGeneratorAwareInterface,
    ContainerAwareInterface
{
    const OLD_CUSTOM_TABLE_PREFIX = 'oro_extend_';

    /**
     * @var RenameExtension
     */
    protected $renameExtension;

    /**
     * @var ExtendDbIdentifierNameGenerator
     */
    protected $nameGenerator;

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @inheritdoc
     */
    public function setRenameExtension(RenameExtension $renameExtension)
    {
        $this->renameExtension = $renameExtension;
    }

    /**
     * @inheritdoc
     */
    public function setNameGenerator(DbIdentifierNameGenerator $nameGenerator)
    {
        $this->nameGenerator = $nameGenerator;
    }

    /**
     * @inheritdoc
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @inheritdoc
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        /** @var ConfigManager $configManager */
        $configManager = $this->container->get('oro_entity_config.config_manager');

        $this->renameExtendColumns($schema, $queries, $configManager);
        $this->renameCustomManyToManyRelationTables($schema, $queries, $configManager);
        $this->renameCustomEntityTables($schema, $queries, $configManager);
    }

    protected function renameCustomEntityTables(Schema $schema, QueryBag $queries)
    {
        $tables = $schema->getTables();
        foreach ($tables as $table) {
            if (strpos($table->getName(), self::OLD_CUSTOM_TABLE_PREFIX) === 0) {
                $oldTableName = $table->getName();
                $oldTablePrefix = strpos($oldTableName, self::OLD_CUSTOM_TABLE_PREFIX . 'extendentity') === 0
                    ? self::OLD_CUSTOM_TABLE_PREFIX . 'extendentity'
                    : self::OLD_CUSTOM_TABLE_PREFIX;
                $newTableName = ExtendDbIdentifierNameGenerator::CUSTOM_TABLE_PREFIX
                    . substr($oldTableName, strlen($oldTablePrefix));
                $this->renameExtension->renameTable(
                    $schema,
                    $queries,
                    $oldTableName,
                    $newTableName
                );
            }
        }
    }

    protected function renameCustomManyToManyRelationTables(
        Schema $schema,
        QueryBag $queries,
        ConfigManager $configManager
    ) {
        /** @var EntityConfigId[] $entityConfigIds */
        $entityConfigIds = $configManager->getIds('extend');
        foreach ($entityConfigIds as $entityConfigId) {
            if ($configManager->getConfig($entityConfigId)->is('is_extend')) {
                /** @var FieldConfigId[] $fieldConfigIds */
                $fieldConfigIds = $configManager->getIds('extend', $entityConfigId->getClassName());
                foreach ($fieldConfigIds as $fieldConfigId) {
                    if ($fieldConfigId->getFieldType() === RelationType::MANY_TO_MANY) {
                        $fieldConfig = $configManager->getConfig($fieldConfigId);
                        $targetClassName = $fieldConfig->get('target_entity');
                        $oldTableName = $this->generateOldManyToManyJoinTableName(
                            $fieldConfigId->getClassName(),
                            $fieldConfigId->getFieldName(),
                            $targetClassName
                        );
                        if ($schema->hasTable($oldTableName)) {
                            $newTableName = $this->nameGenerator->generateManyToManyJoinTableName(
                                $fieldConfigId->getClassName(),
                                $fieldConfigId->getFieldName(),
                                $targetClassName
                            );
                            $this->renameExtension->renameTable(
                                $schema,
                                $queries,
                                $oldTableName,
                                $newTableName
                            );
                        }
                    }
                }
            }
        }
    }

    protected function renameExtendColumns(
        Schema $schema,
        QueryBag $queries,
        ConfigManager $configManager
    ) {
        /** @var EntityMetadataHelper $entityMetadataHelper */
        $entityMetadataHelper = $this->container->get('oro_entity_extend.migration.entity_metadata_helper');

        $configManager->clearConfigurableCache();

        /** @var EntityConfigId[] $entityConfigIds */
        $entityConfigIds = $configManager->getIds('extend');
        foreach ($entityConfigIds as $entityConfigId) {
            if ($configManager->getConfig($entityConfigId)->is('is_extend')) {
                $tableName = $entityMetadataHelper->getTableNameByEntityClass($entityConfigId->getClassName());
                if ($tableName && $schema->hasTable($tableName)) {
                    $table = $schema->getTable($tableName);
                    /** @var FieldConfigId[] $fieldConfigIds */
                    $fieldConfigIds = $configManager->getIds('extend', $entityConfigId->getClassName());
                    foreach ($fieldConfigIds as $fieldConfigId) {
                        if ($configManager->getConfig($fieldConfigId)->is('extend')) {
                            $this->renameExtendField(
                                $schema,
                                $queries,
                                $table,
                                $fieldConfigId,
                                $configManager,
                                $entityMetadataHelper
                            );
                        }
                    }
                }
            }
        }
    }

    protected function renameExtendField(
        Schema $schema,
        QueryBag $queries,
        Table $table,
        FieldConfigId $fieldConfigId,
        ConfigManager $configManager,
        EntityMetadataHelper $entityMetadataHelper
    ) {
        switch ($fieldConfigId->getFieldType()) {
            case RelationType::MANY_TO_ONE:
                $this->renameManyToOneExtendField(
                    $schema,
                    $queries,
                    $table,
                    $fieldConfigId->getFieldName()
                );
                break;
            case RelationType::ONE_TO_MANY:
                $config = $configManager->getConfig($fieldConfigId);
                $targetEntityClassName = $config->get('target_entity');
                $this->renameOneToManyExtendField(
                    $schema,
                    $queries,
                    $table,
                    $fieldConfigId->getFieldName(),
                    $targetEntityClassName,
                    $entityMetadataHelper
                );
                break;
            case RelationType::MANY_TO_MANY:
                break;
            default:
                $oldColumnName = 'field_' . $fieldConfigId->getFieldName();
                if ($table->hasColumn($oldColumnName)) {
                    $this->renameExtension->renameColumn(
                        $schema,
                        $queries,
                        $table,
                        $oldColumnName,
                        $fieldConfigId->getFieldName()
                    );
                }
                break;
        }
    }

    protected function renameManyToOneExtendField(
        Schema $schema,
        QueryBag $queries,
        Table $table,
        $associationName
    ) {
        $oldColumnName = 'field_' . $associationName . '_id';
        if ($table->hasColumn($oldColumnName)) {
            $newColumnName = $this->nameGenerator->generateRelationColumnName($associationName);
            $this->renameExtension->renameColumn(
                $schema,
                $queries,
                $table,
                $oldColumnName,
                $newColumnName
            );
        }
    }

    protected function renameOneToManyExtendField(
        Schema $schema,
        QueryBag $queries,
        Table $table,
        $associationName,
        $targetEntityClassName,
        EntityMetadataHelper $entityMetadataHelper
    ) {
        $entityClassName = $entityMetadataHelper->getEntityClassByTableName($table->getName());
        $targetTableName = $entityMetadataHelper->getTableNameByEntityClass($targetEntityClassName);
        if ($schema->hasTable($targetTableName)) {
            $targetTable = $schema->getTable($targetTableName);
            $oldTargetColumnName = sprintf(
                'field_%s_%s_id',
                strtolower(ExtendHelper::getShortClassName($entityClassName)),
                $associationName
            );
            if ($targetTable->hasColumn($oldTargetColumnName)) {
                $newTargetColumnName = $this->nameGenerator
                    ->generateOneToManyRelationColumnName($entityClassName, $associationName);
                $oldIndexName = $this->nameGenerator->generateIndexName(
                    $targetTableName,
                    [$oldTargetColumnName],
                    false,
                    true
                );
                if ($targetTable->hasIndex($oldIndexName)) {
                    $targetTable->dropIndex($oldIndexName);
                }
                $oldForeignKeyName = $this->nameGenerator->generateForeignKeyConstraintName(
                    $targetTableName,
                    [$oldTargetColumnName],
                    true
                );
                if ($targetTable->hasForeignKey($oldForeignKeyName)) {
                    $targetTable->removeForeignKey($oldForeignKeyName);
                }
                $this->renameExtension->renameColumn(
                    $schema,
                    $queries,
                    $targetTable,
                    $oldTargetColumnName,
                    $newTargetColumnName
                );
                $this->renameExtension->addIndex(
                    $schema,
                    $queries,
                    $targetTable->getName(),
                    [$newTargetColumnName]
                );
                $this->renameExtension->addForeignKeyConstraint(
                    $schema,
                    $queries,
                    $targetTable->getName(),
                    $table->getName(),
                    [$newTargetColumnName],
                    $table->getPrimaryKeyColumns(),
                    ['onDelete' => 'SET NULL']
                );
            }
        }
    }

    /**
     * Builds old table name for many-to-many relation
     *
     * @param string $entityClassName
     * @param string $fieldName
     * @param string $targetEntityClassName
     * @return string
     */
    protected function generateOldManyToManyJoinTableName($entityClassName, $fieldName, $targetEntityClassName)
    {
        $parts     = explode('\\', $entityClassName);
        $className = array_pop($parts);

        $targetParts     = explode('\\', $targetEntityClassName);
        $targetClassName = array_pop($targetParts);

        return strtolower('oro_' . $className . '_' . $targetClassName . '_' . $fieldName);
    }
}
