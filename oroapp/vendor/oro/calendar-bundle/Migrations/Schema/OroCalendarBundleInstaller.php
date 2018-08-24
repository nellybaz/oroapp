<?php

namespace Oro\Bundle\CalendarBundle\Migrations\Schema;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\EntityBundle\EntityConfig\DatagridScope;
use Oro\Bundle\CalendarBundle\Entity\Attendee;
use Oro\Bundle\EntityBundle\ORM\DatabasePlatformInterface;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtension;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtensionAwareInterface;
use Oro\Bundle\CommentBundle\Migration\Extension\CommentExtension;
use Oro\Bundle\CommentBundle\Migration\Extension\CommentExtensionAwareInterface;
use Oro\Bundle\ActivityBundle\Migration\Extension\ActivityExtension;
use Oro\Bundle\ActivityBundle\Migration\Extension\ActivityExtensionAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Extension\DatabasePlatformAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Installation;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
use Oro\Bundle\CalendarBundle\Migrations\Schema\v1_15\AddCommentAssociation;

class OroCalendarBundleInstaller implements
    Installation,
    ExtendExtensionAwareInterface,
    CommentExtensionAwareInterface,
    ActivityExtensionAwareInterface,
    DatabasePlatformAwareInterface
{
    /**
     * @var AbstractPlatform
     */
    protected $platform;

    /** @var ExtendExtension $extendExtension */
    protected $extendExtension;

    /** @var CommentExtension */
    protected $commentExtension;

    /** @var ActivityExtension */
    protected $activityExtension;


    /**
     * {@inheritdoc}
     */
    public function setDatabasePlatform(AbstractPlatform $platform)
    {
        $this->platform = $platform;
    }

    /**
     * @return bool
     */
    protected function isMysqlPlatform()
    {
        return $this->platform->getName() === DatabasePlatformInterface::DATABASE_MYSQL;
    }

    /**
     * {@inheritdoc}
     */
    public function setExtendExtension(ExtendExtension $extendExtension)
    {
        $this->extendExtension = $extendExtension;
    }

    /**
     * @param CommentExtension $commentExtension
     */
    public function setCommentExtension(CommentExtension $commentExtension)
    {
        $this->commentExtension = $commentExtension;
    }

    /**
     * {@inheritdoc}
     */
    public function setActivityExtension(ActivityExtension $activityExtension)
    {
        $this->activityExtension = $activityExtension;
    }

    /**
     * {@inheritdoc}
     */
    public function getMigrationVersion()
    {
        return 'v1_19';
    }

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        /** Tables generation **/
        $this->createOroCalendarTable($schema);
        $this->createOroSystemCalendarTable($schema);
        $this->createOroRecurrenceTable($schema);
        $this->createOroCalendarEventTable($schema, $queries);
        $this->createOroCalendarPropertyTable($schema);
        $this->createAttendeeEntity($schema);

        /** Foreign keys generation **/
        $this->addOroCalendarForeignKeys($schema);
        $this->addOroSystemCalendarForeignKeys($schema);
        $this->addOroCalendarEventForeignKeys($schema);
        $this->addOroCalendarPropertyForeignKeys($schema);
        $this->addAttendeeForeignKeys($schema);

        /** Enum generation **/
        $this->addAttendeeEnums($schema);

        /** Association generation */
        $this->addCommentToCalendarEvent($schema);
    }

    /**
     * @param Schema $schema
     */
    protected function createAttendeeEntity(Schema $schema)
    {
        $table = $schema->createTable('oro_calendar_event_attendee');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('user_id', 'integer', ['notnull' => false]);
        $table->addColumn('calendar_event_id', 'integer', ['notnull' => false]);
        $table->addColumn('email', 'string', ['notnull' => false, 'length' => 255]);
        $table->addColumn('display_name', 'string', ['notnull' => false, 'length' => 255]);
        $table->addColumn('created_at', 'datetime', ['notnull' => true]);
        $table->addColumn('updated_at', 'datetime', ['notnull' => true]);

        $table->setPrimaryKey(['id']);

        $table->addIndex(['user_id']);
        $table->addIndex(['calendar_event_id']);
    }

    /**
     * @param Schema $schema
     */
    protected function addAttendeeForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('oro_calendar_event_attendee');

        $table->addForeignKeyConstraint(
            $schema->getTable('oro_user'),
            ['user_id'],
            ['id'],
            ['onDelete' => 'SET NULL', 'onUpdate' => null]
        );

        $table->addForeignKeyConstraint(
            $schema->getTable('oro_calendar_event'),
            ['calendar_event_id'],
            ['id'],
            ['onDelete' => 'CASCADE', 'onUpdate' => null]
        );
    }

    /**
     * @param Schema $schema
     */
    protected function addAttendeeEnums(Schema $schema)
    {
        $table = $schema->getTable('oro_calendar_event_attendee');

        $this->extendExtension->addEnumField(
            $schema,
            $table,
            'status',
            Attendee::STATUS_ENUM_CODE,
            false,
            false,
            [
                'extend' => ['owner' => ExtendScope::OWNER_CUSTOM]
            ]
        );

        $this->extendExtension->addEnumField(
            $schema,
            $table,
            'type',
            Attendee::TYPE_ENUM_CODE,
            false,
            false,
            [
                'extend' => ['owner' => ExtendScope::OWNER_CUSTOM]
            ]
        );
    }

    /**
     * Create oro_calendar table
     *
     * @param Schema $schema
     */
    protected function createOroCalendarTable(Schema $schema)
    {
        $table = $schema->createTable('oro_calendar');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('organization_id', 'integer', ['notnull' => false]);
        $table->addColumn('user_owner_id', 'integer', ['notnull' => false]);
        $table->addColumn('name', 'string', ['notnull' => false, 'length' => 255]);
        $table->addIndex(['organization_id'], 'idx_1d1715132c8a3de', []);
        $table->addIndex(['user_owner_id'], 'idx_1d171519eb185f9', []);
        $table->setPrimaryKey(['id']);
    }

    /**
     * Create oro_system_calendar table
     *
     * @param Schema $schema
     */
    protected function createOroSystemCalendarTable(Schema $schema)
    {
        $table = $schema->createTable('oro_system_calendar');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('organization_id', 'integer', ['notnull' => false]);
        $table->addColumn('name', 'string', ['length' => 255]);
        $table->addColumn('background_color', 'string', ['notnull' => false, 'length' => 7]);
        $table->addColumn('is_public', 'boolean', []);
        $table->addColumn('created_at', 'datetime', []);
        $table->addColumn('updated_at', 'datetime', []);
        $table->addColumn(
            'extend_description',
            'text',
            [
                'oro_options' => [
                    'extend'    => ['is_extend' => true, 'owner' => ExtendScope::OWNER_CUSTOM],
                    'datagrid'  => ['is_visible' => DatagridScope::IS_VISIBLE_FALSE],
                    'merge'     => ['display' => true],
                    'dataaudit' => ['auditable' => true],
                    'form'      => ['type' => 'oro_resizeable_rich_text'],
                    'view'      => ['type' => 'html'],
                ]
            ]
        );
        $table->addIndex(['organization_id'], 'IDX_1DE3E2F032C8A3DE', []);
        $table->addIndex(['updated_at'], 'oro_system_calendar_up_idx', []);
        $table->setPrimaryKey(['id']);
    }

    /**
     * Create oro_calendar_event table
     *
     * @param Schema $schema
     * @param QueryBag $queries
     */
    protected function createOroCalendarEventTable(Schema $schema, QueryBag $queries)
    {
        $table = $schema->createTable('oro_calendar_event');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('uid', 'text', ['notnull' => false]);
        $table->addColumn('calendar_id', 'integer', ['notnull' => false]);
        $table->addColumn('system_calendar_id', 'integer', ['notnull' => false]);
        $table->addColumn('title', 'string', ['length' => 255]);
        $table->addColumn('description', 'text', ['notnull' => false]);
        $table->addColumn('start_at', 'datetime', ['comment' => '(DC2Type:datetime)']);
        $table->addColumn('end_at', 'datetime', ['comment' => '(DC2Type:datetime)']);
        $table->addColumn('all_day', 'boolean', []);
        $table->addColumn('background_color', 'string', ['notnull' => false, 'length' => 7]);
        $table->addColumn('created_at', 'datetime', []);
        $table->addColumn('updated_at', 'datetime', []);
        $table->addColumn('parent_id', 'integer', ['default' => null, 'notnull' => false]);
        $table->addColumn('related_attendee_id', 'integer', ['notnull' => false]);
        $table->addColumn('recurring_event_id', 'integer', ['notnull' => false]);
        $table->addColumn('recurrence_id', 'integer', ['notnull' => false]);
        $table->addColumn('original_start_at', 'datetime', ['notnull' => false]);
        $table->addColumn('is_cancelled', 'boolean', ['default' => false]);
        $table->addColumn('is_organizer', 'boolean', ['notnull' => false]);
        $table->addColumn('organizer_user_id', 'integer', ['notnull' => false]);
        $table->addColumn('organizer_email', 'string', ['notnull' => false, 'length' => 255]);
        $table->addColumn('organizer_display_name', 'string', ['notnull' => false, 'length' => 255]);

        $table->addIndex(['related_attendee_id']);
        $table->addIndex(['calendar_id', 'start_at', 'end_at'], 'oro_calendar_event_idx', []);
        $table->addIndex(['system_calendar_id', 'start_at', 'end_at'], 'oro_sys_calendar_event_idx', []);
        $table->addIndex(['system_calendar_id'], 'IDX_2DDC40DD55F0F9D0', []);
        $table->addIndex(['updated_at'], 'oro_calendar_event_up_idx', []);
        $table->addIndex(['original_start_at'], 'oro_calendar_event_osa_idx');

        $table->addUniqueIndex(['recurrence_id'], 'UNIQ_2DDC40DD2C414CE8');

        $table->setPrimaryKey(['id']);
        if ($this->isMysqlPlatform()) {
            $queries->addPostQuery(
                'ALTER TABLE `oro_calendar_event` ADD INDEX `oro_calendar_event_uid_idx` (calendar_id, uid(50))'
            );
        } else {
            $queries->addPostQuery(
                'CREATE INDEX oro_calendar_event_uid_idx ON oro_calendar_event(calendar_id, uid);'
            );
        }
    }

    /**
     * Add oro_calendar foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOroCalendarForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('oro_calendar');
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_organization'),
            ['organization_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'SET NULL']
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_user'),
            ['user_owner_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'SET NULL']
        );
    }

    /**
     * Add oro_system_calendar foreign keys
     *
     * @param Schema $schema
     */
    protected function addOroSystemCalendarForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('oro_system_calendar');
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_organization'),
            ['organization_id'],
            ['id'],
            ['onDelete' => 'SET NULL', 'onUpdate' => null]
        );
    }

    /**
     * Add oro_calendar_event foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOroCalendarEventForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('oro_calendar_event');
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_calendar'),
            ['calendar_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_system_calendar'),
            ['system_calendar_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
        $table->addForeignKeyConstraint(
            $table,
            ['parent_id'],
            ['id'],
            ['onDelete' => 'CASCADE']
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_calendar_event_attendee'),
            ['related_attendee_id'],
            ['id'],
            ['onDelete' => 'SET NULL', 'onUpdate' => null]
        );
        $table->addForeignKeyConstraint(
            $table,
            ['recurring_event_id'],
            ['id'],
            ['onDelete' => 'CASCADE']
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_calendar_recurrence'),
            ['recurrence_id'],
            ['id'],
            ['onDelete' => 'SET NULL', 'onUpdate' => null]
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_user'),
            ['organizer_user_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'SET NULL']
        );
    }

    /**
     * Create oro_calendar_property table
     *
     * @param Schema $schema
     */
    protected function createOroCalendarPropertyTable(Schema $schema)
    {
        $table = $schema->createTable('oro_calendar_property');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('target_calendar_id', 'integer', []);
        $table->addColumn('calendar_alias', 'string', ['length' => 32]);
        $table->addColumn('calendar_id', 'integer', []);
        $table->addColumn('position', 'integer', ['default' => 0]);
        $table->addColumn('visible', 'boolean', ['default' => true]);
        $table->addColumn('background_color', 'string', ['notnull' => false, 'length' => 7]);
        $table->setPrimaryKey(['id']);
        $table->addIndex(['target_calendar_id'], 'IDX_660946D18D7AEDC2', []);
        $table->addUniqueIndex(['calendar_alias', 'calendar_id', 'target_calendar_id'], 'oro_calendar_prop_uq');
    }

    /**
     * Add oro_calendar_property foreign keys.
     *
     * @param Schema $schema
     */
    protected function addOroCalendarPropertyForeignKeys(Schema $schema)
    {
        $table = $schema->getTable('oro_calendar_property');
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_calendar'),
            ['target_calendar_id'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => 'CASCADE']
        );
    }

    /**
     * Creates oro_calendar_recurrence table.
     *
     * @param Schema $schema
     */
    protected function createOroRecurrenceTable(Schema $schema)
    {
        $table = $schema->createTable('oro_calendar_recurrence');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('recurrence_type', 'string', ['notnull' => true, 'length' => 16]);
        $table->addColumn('interval', 'integer', []);
        $table->addColumn('instance', 'integer', ['notnull' => false]);
        $table->addColumn('day_of_week', 'array', ['notnull' => false,'comment' => '(DC2Type:array)']);
        $table->addColumn('day_of_month', 'integer', ['notnull' => false]);
        $table->addColumn('month_of_year', 'integer', ['notnull' => false]);
        $table->addColumn('start_time', 'datetime', []);
        $table->addColumn('end_time', 'datetime', ['notnull' => false]);
        $table->addColumn('calculated_end_time', 'datetime', []);
        $table->addColumn('occurrences', 'integer', ['notnull' => false]);
        $table->addColumn('timezone', 'string', ['notnull' => true, 'length' => 255]);
        $table->setPrimaryKey(['id']);
        $table->addIndex(['start_time'], 'oro_calendar_r_start_time_idx', []);
        $table->addIndex(['end_time'], 'oro_calendar_r_end_time_idx', []);
        $table->addIndex(['calculated_end_time'], 'oro_calendar_r_c_end_time_idx', []);
    }

    /**
     * Add association to comments
     *
     * @param Schema $schema
     */
    private function addCommentToCalendarEvent(Schema $schema)
    {
        AddCommentAssociation::addCalendarEventToComment($schema, $this->commentExtension);
    }
}
