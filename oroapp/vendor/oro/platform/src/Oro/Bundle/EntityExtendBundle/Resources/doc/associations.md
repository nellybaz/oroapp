Associations
============

The Oro EntityExtendBundle allows to create a special type of relation between entities named **association**. The association allows you to create a unidirectional relation between some entity(s) and different kind of other entities when types of target entities are not known or can be changed.

Introduction
------------

Let's consider an example when you have an Email entity which can be owned either by a user or a contact. To implement such a relation you have two choices:

 - The first approach can be to use two regular Doctrine many-to-one relations, one for a user and another one for a contact. Also, to generalize how to work with the owner, you can create several helper methods in the Email entity, like `getOwner` and `setOwner`.

	``` php
	public function getOwner()
	{
	    if (null !== $this->user) {
	        return $this->user;
	    }
	    if (null !== $this->contact) {
	        return $this->contact;
	    }
	
	    return null;
	}
	
	public function setOwner($owner)
	{
	    if (null === $owner) {
	        $this->user = null;
	        $this->contact = null;
	    } elseif ($owner instanceof Oro\Bundle\UserBundle\Entity\User) {
	        $this->contact = null;
	        $this->user = $owner;
	    } elseif ($owner instanceof Oro\Bundle\ContactBundle\Entity\Contact) {
	        $this->user = null;
	        $this->contact = $owner;
	    } else {
	        throw new \RuntimeException(
	            sprintf(
	                'Invalid owner type: %s.',
	                \Doctrine\Common\Util\ClassUtils::getClass($owner)
	            )
	        );
	    }
	
	    return $this;
	}
	```

 - The second approach can be to use associations. In this case, you just need to properly configure the association and the Oro EntityExtendBundle will create Doctrine relations and helper methods automatically for you. The [configuration of an association](#configure-many-to-one-associations) will be described later in this article.

Pros and cons of both approaches:

 - Regular Doctrine relations

    Pros:

     - You have full control over the program logic. For example, you can implement helper methods as you need, or you can create bidirectional relations.

    Cons:

     - You need to create a bit more code than with the association based approach.
     - If you heed to add other types of owners, you have to modify the Email entity to add new relations and to update the `getOwner` and `setOwner` methods.
     - There is no way for other modules to add new types of owners, but to ask you as the developer to modify the Email entity.
     - It is not possible to use custom entities (entities created by an administrator using the entity management UI) as an owner.

 - Associations

    Pros:

     - Associations provide a common and well tested approach in the Oro Platform to add relations between entities when types of target entities are unknown in design stage or when you need unified access to relations to different entities.
     - It is easy to add other types of owners from any external bundle or even by an administrator using the entity management UI.

    Cons:

     - An entity which is the owning side of an association, in this example the Email entity, must be extendable.
     - An entity which is the target side of an association must be configurable (or extendable since extendable entities are already configurable).
     - Associations use unidirectional Doctrine relations only. It is not possible to use bidirectional relations.

Supported association types
---------------------------

1. Many-to-one associations
This is association type is used to associate an entity with a single target entity of the same association kind: e.g. an Email can be associated with either one Account or one Contact

2. Multiple many-to-one associations
This is association type is used to associate an entity with one of each possible target entity types of the same association kind: e.g. an Email can be associated with one Account and one Contact

3. Many-to-many associations
This is association type is used to associate an entity with many target entities of the same association kind: e.g. an Email can be associated with many Accounts and many Contacts


Association kind
----------------

Any type of association can have an additional attribute named as "Association Kind". This attribute is optional and can be used to distinguish between different associations of the same type. E.g. an entity may have several many-to-one associations and in this case each association should have its own Association Kind. Actually Association Kind is a string and it is included in names of methods related to an association. The following sections describe it in more detail for each type of association.


Configure many-to-one associations
----------------------------------

Please note that it is possible to [create many-to-many associations](#configure-many-to-many-associations) or multiple many-to-one associations.

At first you need to make an entity which is the owning side of association extendable. To do this you need to create a class which name starts with `Extend` prefix and put in in Model folder of you bundle. Also you need to declare several empty helper methods in this class like `supportTarget`, `getTarget` and `setTarget` (the implementation of these methods will be generated by the Oro EntityExtendBundle and you can find it in `app/cache/dev/oro_entities/Extend/Entity` folder). The names of these methods are predefined, and in the general case, they are `support{AssociationKind}Target`, `get{AssociationKind}Target` and `set{AssociationKind}Target`. For more details see [AbstractAssociationEntityGeneratorExtension](../../Tools/GeneratorExtensions/AbstractAssociationEntityGeneratorExtension.php).

``` php
namespace Oro\Bundle\NoteBundle\Model;

class ExtendNote
{
    /**
     * Constructor
     *
     * The real implementation of this method is auto generated.
     *
     * IMPORTANT: If the derived class has own constructor it must call parent constructor.
     */
    public function __construct()
    {
    }

    /**
     * Checks if this note can be associated with the given target entity type
     *
     * The real implementation of this method is auto generated.
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportTarget($targetClass)
    {
        return false;
    }

    /**
     * Gets the entity this note is associated with
     *
     * The real implementation of this method is auto generated.
     *
     * @return object|null Any configurable entity
     */
    public function getTarget()
    {
        return null;
    }

    /**
     * Sets the entity this note is associated with
     *
     * The real implementation of this method is auto generated.
     *
     * @param object $target Any configurable entity that can have notes
     *
     * @return object This object
     */
    public function setTarget($target)
    {
        return $this;
    }
}
```

And your entity must extend the created `Extend` class.

``` php
namespace Oro\Bundle\NoteBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="oro_note")
 * @Config
 */
class Note extends ExtendNote
{
}
```

After that you entity is ready to be the owning side of an association, but you need to do some more configuration of your association. Add `Resources/config/oro/entity_config.yml` file in your bundle:

``` yaml
entity_config:
    note:
        entity:
            items:
                # indicates whether the entity can have notes or not
                enabled: # boolean
                    options:
                        require_schema_update: true
                        priority:           250
                        default_value:      false
                    form:
                        type:               oro_entity_extend_association_choice
                        options:
                            block:          associations
                            required:       true
                            label:          oro.note.enabled
                            association_class: 'OroNoteBundle:Note'

                # this attribute can be used to prohibit changing the note association state (no matter whether
                # it is enabled or not) for the entity
                # if TRUE than the current state cannot be changed
                immutable: # boolean
                    options:
                        auditable:          false
```

As you can see this configuration file declares new entity config scope named `note` and two attributes on entity level in this scope (both of these attributes are applicable for target side of association):

 - **enabled** - this attribute indicates whether the note can be added to a target entity.
 - **immutable** - this attribute can be used to prohibit changing the association state. This attribute can be used to prohibit disable already enabled association and vise versa.

You can use both of these attributes for your own associations and they will automatically have the same behaviour. The implementation of **enabled** attribute can be found in [AssociationChoiceType](../../Form/Type/AssociationChoiceType.php) (please note that this form type has been configured to be used with this attribute). You can find the implementation of the **immutable** attribute in [AbstractConfigType](../../../EntityConfigBundle/Form/Type/AbstractConfigType.php).

For example, if you want to prohibit to create notes for some entity, you just need to set the **immutable** attribute to true for this entity (in the following code we use annotations, but the can be done using migrations):

``` php
namespace Acme\Bundle\AcmeBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="acme_my_entity")
 * @Config(
 *      defaultValues={
 *          "note"={
 *              "immutable"=true
 *          }
 *      }
 * )
 */
class MyEntity
{
}
```

The last thing to finish the configuration of your association is to create extensions for the entity config dumper, the entity generator (these extensions instruct the Oro EntityExtendBundle how to generate Doctrine mapping and PHP code for your association) and migrations (this extension will help to add your association using migration scripts, more details you can find in [Oro MigrationBundle](../../../MigrationBundle/README.md#create-own-extensions-for-database-structure-migrations)). The following examples show how it can be done:

``` php
namespace Oro\Bundle\NoteBundle\Tools;

use Oro\Bundle\EntityExtendBundle\Tools\DumperExtensions\AssociationEntityConfigDumperExtension;

class NoteEntityConfigDumperExtension extends AssociationEntityConfigDumperExtension
{
    /**
     * {@inheritdoc}
     */
    protected function getAssociationEntityClass()
    {
        return 'Oro\Bundle\NoteBundle\Entity\Note';
    }

    /**
     * {@inheritdoc}
     */
    protected function getAssociationScope()
    {
        return 'note';
    }
}
```

``` php
namespace Oro\Bundle\NoteBundle\Tools;

use Oro\Bundle\EntityExtendBundle\Tools\GeneratorExtensions\AbstractAssociationEntityGeneratorExtension;

class NoteEntityGeneratorExtension extends AbstractAssociationEntityGeneratorExtension
{
    /**
     * {@inheritdoc}
     */
    public function supports(array $schema)
    {
        return
            $schema['class'] === 'Oro\Bundle\NoteBundle\Entity\Note'
            && parent::supports($schema);
    }
}
```

``` php
namespace Oro\Bundle\NoteBundle\Migration\Extension;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtension;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtensionAwareInterface;
use Oro\Bundle\EntityExtendBundle\Migration\OroOptions;
use Oro\Bundle\EntityExtendBundle\Tools\ExtendHelper;

class NoteExtension implements ExtendExtensionAwareInterface
{
    const NOTE_TABLE_NAME = 'oro_note';

    /** @var ExtendExtension */
    protected $extendExtension;

    /**
     * {@inheritdoc}
     */
    public function setExtendExtension(ExtendExtension $extendExtension)
    {
        $this->extendExtension = $extendExtension;
    }

    /**
     * Adds the association between the target table and the note table
     *
     * @param Schema $schema
     * @param string $targetTableName  Target entity table name
     * @param string $targetColumnName A column name is used to show related entity
     */
    public function addNoteAssociation(
        Schema $schema,
        $targetTableName,
        $targetColumnName = null
    ) {
        $noteTable   = $schema->getTable(self::NOTE_TABLE_NAME);
        $targetTable = $schema->getTable($targetTableName);

        if (empty($targetColumnName)) {
            $primaryKeyColumns = $targetTable->getPrimaryKeyColumns();
            $targetColumnName  = array_shift($primaryKeyColumns);
        }

        $options = new OroOptions();
        $options->set('note', 'enabled', true);
        $targetTable->addOption(OroOptions::KEY, $options);

        $associationName = ExtendHelper::buildAssociationName(
            $this->extendExtension->getEntityClassByTableName($targetTableName)
        );

        $this->extendExtension->addManyToOneRelation(
            $schema,
            $noteTable,
            $associationName,
            $targetTable,
            $targetColumnName
        );
    }
}
```


Configure many-to-many associations
-----------------------------------

In this section we will use the [Oro ActivityBundle](../../../ActivityBundle/README.md) and the Oro [Email](../../../EmailBundle/Entity/Email.php) entity, which is one of activity entities provided by the Oro Platform, as an example of configuration of a many-to-many association. An activity association has two important features:

 - the owning side of this association can be any entity marked as an activity (it means that an entity is included in *activity* group).
 - it is "named" association. It means that the association name is included in names of Doctrine relations as well as in names of generated helper methods.

The first thing you need to do is to make sure that your entity is extendable and has empty implementation of helper methods required for the access to associated data. To achieve this you need to create a class which name starts with `Extend` prefix and put in in Model folder of you bundle. Also you need to declare several empty helper methods in this class like `supportActivityTarget`, `getActivityTargets`, `hasActivityTarget`, `addActivityTarget` and `removeActivityTarget` (the implementation of these methods will be generated by the Oro EntityExtendBundle and you can find it in `app/cache/dev/oro_entities/Extend/Entity` folder). Here `Activity` is the name of named association. More details you can find in [AbstractAssociationEntityGeneratorExtension](../../Tools/GeneratorExtensions/AbstractAssociationEntityGeneratorExtension.php).

``` php
namespace Oro\Bundle\EmailBundle\Model;

class ExtendEmail
{
    /**
     * Constructor
     *
     * The real implementation of this method is auto generated.
     *
     * IMPORTANT: If the derived class has own constructor it must call parent constructor.
     */
    public function __construct()
    {
    }

    /**
     * Checks if an entity of the given type can be associated with this activity entity
     *
     * The real implementation of this method is auto generated.
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
    {
        return false;
    }

    /**
     * Gets entities of the given type associated with this activity entity
     *
     * The real implementation of this method is auto generated.
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass = null)
    {
        return [];
    }

    /**
     * Checks is the given entity is associated with this activity entity
     *
     * The real implementation of this method is auto generated.
     *
     * @param object $target Any configurable entity that can be associated with this activity
     *
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        return false;
    }

    /**
     * Associates the given entity with this activity entity
     *
     * The real implementation of this method is auto generated.
     *
     * @param object $target Any configurable entity that can be associated with this activity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        return $this;
    }

    /**
     * Removes the association of the given entity with this activity entity
     *
     * The real implementation of this method is auto generated.
     *
     * @param object $target Any configurable entity that can be associated with this activity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        return $this;
    }
}
```

Next make sure that your entity extends created `Extend` class.

``` php
/**
 * @ORM\Entity
 * @ORM\Table(name="oro_email")
 * @Config
 */
class Email extends ExtendEmail
{
}
```

The second step you need to do is to declare possible entity configuration attributes. To do this you need to create `Resources/config/oro/entity_config.yml` file in your bundle. Usually you need to declare only several attributes like **enabled** and **immutable**. But it detends of your needs. For example the Oro ActivityBundle declares **activities** attribute instead of **enabled** attribute because as it was mentioned above the owning side of activity association can be any entity marked as an activity.

``` yaml
entity_config:
    activity:
        entity:
            items:
                # the list of activities that can be assigned to the entity
                activities: # array of class names
                    options:
                        require_schema_update: true
                        priority:           250
                    form:
                        type:               oro_entity_extend_multiple_association_choice
                        options:
                            block:          associations
                            required:       false
                            label:          oro.activity.activities
                            association_class: activity

                # this attribute can be used to prohibit changing activity state (no matter whether
                # it is enabled or not) for the entity
                # if TRUE than no one activity state can be changed
                # also it can be an array with the list of class names of activities which state cannot be changed
                immutable: # boolean or array
                    options:
                        auditable:          false
```

As you can see this configuration file declares new entity config scope named `activity` and two attributes on entity level in this scope (both of these attributes are applicable for target side of association):

 - **activities** - this attribute indicates which activity entities can be associated with a target entity.
 - **immutable** - this attribute can be used to prohibit changing the association state. This attribute can be used to prohibit disable already enabled association and vise versa.

You can find the implementation of both attributes in [MultipleAssociationChoiceType](../../Form/Type/MultipleAssociationChoiceType.php) (please note that this form type has been configured to be used with this attribute).

For example, if you want to prohibit to associate any activity with some entity, you just need to set the **immutable** attribute to true for this entity (in the following code we use annotations, but the can be done using migrations):

``` php
namespace Acme\Bundle\AcmeBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="acme_my_entity")
 * @Config(
 *      defaultValues={
 *          "activity"={
 *              "immutable"=true
 *          }
 *      }
 * )
 */
class MyEntity
{
}
```

The last thing to finish the configuration of your association is to create extensions for the entity config dumper, the entity generator (these extensions instruct the Oro EntityExtendBundle how to generate Doctrine mapping and PHP code for your association) and migrations (this extension will help to add your association using migration scripts, more details you can find in [Oro MigrationBundle](../../../MigrationBundle/README.md#create-own-extensions-for-database-structure-migrations)). The following examples show how it can be done:

``` php
namespace Oro\Bundle\ActivityBundle\Tools;

use Oro\Bundle\ActivityBundle\EntityConfig\ActivityScope;
use Oro\Bundle\EntityExtendBundle\Tools\DumperExtensions\MultipleAssociationEntityConfigDumperExtension;

class ActivityEntityConfigDumperExtension extends MultipleAssociationEntityConfigDumperExtension
{
    /**
     * {@inheritdoc}
     */
    protected function getAssociationScope()
    {
        return 'activity';
    }

    /**
     * {@inheritdoc}
     */
    protected function getAssociationAttributeName()
    {
        return 'activities';
    }

    /**
     * {@inheritdoc}
     */
    protected function getAssociationKind()
    {
        return ActivityScope::ASSOCIATION_KIND;
    }
}
```

``` php
namespace Oro\Bundle\ActivityBundle\Tools;

use CG\Generator\PhpClass;

use Oro\Bundle\ActivityBundle\EntityConfig\ActivityScope;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\EntityExtendBundle\Extend\RelationType;
use Oro\Bundle\EntityExtendBundle\Tools\GeneratorExtensions\AbstractAssociationEntityGeneratorExtension;

class ActivityEntityGeneratorExtension extends AbstractAssociationEntityGeneratorExtension
{
    /** @var ConfigProvider */
    protected $groupingConfigProvider;

    /**
     * @param ConfigProvider $groupingConfigProvider
     */
    public function __construct(ConfigProvider $groupingConfigProvider)
    {
        $this->groupingConfigProvider = $groupingConfigProvider;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(array $schema)
    {
        if (!$this->groupingConfigProvider->hasConfig($schema['class'])) {
            return false;
        }

        $groups = $this->groupingConfigProvider->getConfig($schema['class'])->get('groups');

        return
            !empty($groups)
            && in_array(ActivityScope::GROUP_ACTIVITY, $groups);
    }

    /**
     * {@inheritdoc}
     */
    public function generate(array $schema, PhpClass $class)
    {
        $class->addInterfaceName('Oro\Bundle\ActivityBundle\Model\ActivityInterface');

        parent::generate($schema, $class);
    }

    /**
     * {@inheritdoc}
     */
    protected function getAssociationKind()
    {
        return ActivityScope::ASSOCIATION_KIND;
    }

    /**
     * {@inheritdoc}
     */
    protected function getAssociationType()
    {
        return RelationType::MANY_TO_MANY;
    }
}
```

``` php
namespace Oro\Bundle\ActivityBundle\Migration\Extension;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\ActivityBundle\EntityConfig\ActivityScope;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtension;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtensionAwareInterface;
use Oro\Bundle\EntityExtendBundle\Migration\OroOptions;
use Oro\Bundle\EntityExtendBundle\Tools\ExtendHelper;

class ActivityExtension implements ExtendExtensionAwareInterface
{
    /** @var ExtendExtension */
    protected $extendExtension;

    /**
     * {@inheritdoc}
     */
    public function setExtendExtension(ExtendExtension $extendExtension)
    {
        $this->extendExtension = $extendExtension;
    }

    /**
     * Adds the association between the given table and the table contains activity records
     *
     * The activity entity must be included in 'activity' group ('groups' attribute of 'grouping' scope)
     *
     * @param Schema $schema
     * @param string $activityTableName Activity entity table name. It is owning side of the association
     * @param string $targetTableName   Target entity table name
     * @param bool   $immutable         Set TRUE to prohibit disabling the activity association from UI
     */
    public function addActivityAssociation(
        Schema $schema,
        $activityTableName,
        $targetTableName,
        $immutable = false
    ) {
        $targetTable = $schema->getTable($targetTableName);

        // Column names are used to show a title of target entity
        $targetTitleColumnNames = $targetTable->getPrimaryKeyColumns();
        // Column names are used to show detailed info about target entity
        $targetDetailedColumnNames = $targetTable->getPrimaryKeyColumns();
        // Column names are used to show target entity in a grid
        $targetGridColumnNames = $targetTable->getPrimaryKeyColumns();

        $activityClassName = $this->extendExtension->getEntityClassByTableName($activityTableName);

        $options = new OroOptions();
        $options->append(
            'activity',
            'activities',
            $activityClassName
        );
        if ($immutable) {
            $options->append(
                'activity',
                'immutable',
                $activityClassName
            );
        }

        $targetTable->addOption(OroOptions::KEY, $options);

        $associationName = ExtendHelper::buildAssociationName(
            $this->extendExtension->getEntityClassByTableName($targetTableName),
            ActivityScope::ASSOCIATION_KIND
        );

        $this->extendExtension->addManyToManyRelation(
            $schema,
            $activityTableName,
            $associationName,
            $targetTable,
            $targetTitleColumnNames,
            $targetDetailedColumnNames,
            $targetGridColumnNames,
            [
                'extend' => [
                    'without_default' => true
                ]
            ]
        );
    }
}
```
