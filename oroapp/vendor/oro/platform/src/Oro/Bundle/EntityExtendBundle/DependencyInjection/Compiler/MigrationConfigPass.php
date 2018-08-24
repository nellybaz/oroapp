<?php

namespace Oro\Bundle\EntityExtendBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MigrationConfigPass implements CompilerPassInterface
{
    const EXTEND_OPTIONS_MANAGER_SERVICE        = 'oro_entity_extend.migration.options_manager';
    const MIGRATIONS_EXECUTOR_SERVICE           = 'oro_migration.migrations.executor';
    const MIGRATIONS_EXECUTOR_CLASS_PARAM       = 'oro_migration.migrations.executor.class';
    const MIGRATIONS_NAME_GENERATOR_CLASS_PARAM = 'oro_migration.db_id_name_generator.class';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasParameter(self::MIGRATIONS_NAME_GENERATOR_CLASS_PARAM)) {
            $container->setParameter(
                self::MIGRATIONS_NAME_GENERATOR_CLASS_PARAM,
                'Oro\Bundle\EntityExtendBundle\Tools\ExtendDbIdentifierNameGenerator'
            );
        }
        if ($container->hasDefinition(self::MIGRATIONS_EXECUTOR_SERVICE)
            && $container->hasParameter(self::MIGRATIONS_EXECUTOR_CLASS_PARAM)
        ) {
            $container->setParameter(
                self::MIGRATIONS_EXECUTOR_CLASS_PARAM,
                'Oro\Bundle\EntityExtendBundle\Migration\ExtendMigrationExecutor'
            );
            $serviceDef = $container->getDefinition(self::MIGRATIONS_EXECUTOR_SERVICE);
            $serviceDef->addMethodCall(
                'setExtendOptionsManager',
                [new Reference(self::EXTEND_OPTIONS_MANAGER_SERVICE)]
            );
        }
    }
}
