<?php

namespace Oro\Bundle\WorkflowBundle\Entity;

use Symfony\Component\Security\Acl\Model\DomainObjectInterface;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

use JMS\Serializer\Annotation as JMS;

use Oro\Bundle\ActionBundle\Provider\CurrentApplicationProviderInterface;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\WorkflowBundle\Configuration\WorkflowConfiguration;
use Oro\Bundle\WorkflowBundle\Exception\WorkflowException;

/**
 * @ORM\Table(name="oro_workflow_definition")
 * @ORM\Entity(repositoryClass="Oro\Bundle\WorkflowBundle\Entity\Repository\WorkflowDefinitionRepository")
 * @Config(
 *      mode="hidden",
 *      routeName="oro_workflow_definition_index",
 *      routeView="oro_workflow_definition_view",
 *      defaultValues={
 *          "entity"={
 *              "icon"="fa-exchange"
 *          },
 *          "security"={
 *              "type"="ACL",
 *              "group_name"="",
 *              "category"="account_management"
 *          },
 *          "note"={
 *              "immutable"=true
 *          },
 *          "activity"={
 *              "immutable"=true
 *          },
 *          "attachment"={
 *              "immutable"=true
 *          }
 *      }
 * )
 * @ORM\HasLifecycleCallbacks()
 *
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class WorkflowDefinition implements DomainObjectInterface
{
    const CONFIG_SCOPES = 'scopes';
    const CONFIG_DATAGRIDS = 'datagrids';
    const CONFIG_FORCE_AUTOSTART = 'force_autostart';

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $label;

    /**
     * @var string
     *
     * @ORM\Column(name="related_entity", type="string", length=255)
     */
    protected $relatedEntity;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_attribute_name", type="string", length=255)
     */
    protected $entityAttributeName;

    /**
     * @var bool
     * @ORM\Column(name="steps_display_ordered", type="boolean")
     */
    protected $stepsDisplayOrdered = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="system", type="boolean")
     */
    protected $system = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", options={"default"=false})
     */
    protected $active = false;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", options={"default"=0})
     */
    protected $priority = 0;

    /**
     * @var array
     *
     * @ORM\Column(name="configuration", type="array")
     */
    protected $configuration = [];

    /**
     * @var Scope[]|Collection
     *
     * @ORM\ManyToMany(targetEntity="Oro\Bundle\ScopeBundle\Entity\Scope")
     * @ORM\JoinTable(
     *      name="oro_workflow_scopes",
     *      joinColumns={
     *          @ORM\JoinColumn(name="workflow_name", referencedColumnName="name", onDelete="CASCADE")
     *      },
     *      inverseJoinColumns={
     *          @ORM\JoinColumn(name="scope_id", referencedColumnName="id", onDelete="CASCADE")
     *      }
     * )
     */
    protected $scopes;

    /**
     * @var WorkflowStep[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="WorkflowStep",
     *      mappedBy="definition",
     *      orphanRemoval=true,
     *      cascade={"all"}
     * )
     */
    protected $steps;

    /**
     * @var WorkflowStep
     *
     * @ORM\ManyToOne(targetEntity="WorkflowStep")
     * @ORM\JoinColumn(name="start_step_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $startStep;

    /**
     * @var WorkflowEntityAcl[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="WorkflowEntityAcl",
     *      mappedBy="definition",
     *      orphanRemoval=true,
     *      cascade={"all"}
     * )
     */
    protected $entityAcls;

    /**
     * @var WorkflowRestriction[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="WorkflowRestriction",
     *      mappedBy="definition",
     *      orphanRemoval=true,
     *      cascade={"all"}
     * )
     * @JMS\Exclude
     */
    protected $restrictions;

    /**
     * @var array
     *
     * @ORM\Column(name="exclusive_active_groups", type="simple_array", nullable=true)
     */
    protected $exclusiveActiveGroups = [];

    /**
     * @var array
     *
     * @ORM\Column(name="exclusive_record_groups", type="simple_array", nullable=true)
     */
    protected $exclusiveRecordGroups = [];

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @ConfigField(
     *      defaultValues={
     *          "entity"={
     *              "label"="oro.ui.created_at"
     *          }
     *      }
     * )
     */
    protected $createdAt;

    /**
     * @var \DateTime $updated
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @ConfigField(
     *      defaultValues={
     *          "entity"={
     *              "label"="oro.ui.updated_at"
     *          }
     *      }
     * )
     */
    protected $updatedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="applications", type="simple_array", nullable=false)
     */
    protected $applications = [CurrentApplicationProviderInterface::DEFAULT_APPLICATION];

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->scopes = new ArrayCollection();
        $this->steps = new ArrayCollection();
        $this->entityAcls = new ArrayCollection();
        $this->restrictions = new ArrayCollection();
    }

    public function __clone()
    {
        if ($this->name) {
            $this->setName($this->getName() . uniqid('_clone_', false));
            $this->setSystem(false);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getLabel();
    }

    /**
     * @return bool
     */
    public function isForceAutostart()
    {
        return array_key_exists(self::CONFIG_FORCE_AUTOSTART, $this->configuration)
            ? (bool)$this->configuration[self::CONFIG_FORCE_AUTOSTART]
            : false;
    }

    /**
     * @param array $scopesConfig
     * @return $this
     */
    public function setScopesConfig(array $scopesConfig)
    {
        $this->configuration[self::CONFIG_SCOPES] = $scopesConfig;

        return $this;
    }

    /**
     * @return array
     */
    public function getScopesConfig()
    {
        return array_key_exists(self::CONFIG_SCOPES, $this->configuration) ?
            (array)$this->configuration[self::CONFIG_SCOPES] : [];
    }

    /**
     * @return boolean
     */
    public function hasScopesConfig()
    {
        return !empty($this->configuration[self::CONFIG_SCOPES]);
    }

    /**
     * @return array
     */
    public function getDisabledOperations()
    {
        return array_key_exists(WorkflowConfiguration::NODE_DISABLE_OPERATIONS, $this->configuration) ?
            $this->configuration[WorkflowConfiguration::NODE_DISABLE_OPERATIONS] : [];
    }

    /**
     * @return bool
     */
    public function hasDisabledOperations()
    {
        return !empty($this->configuration[WorkflowConfiguration::NODE_DISABLE_OPERATIONS]);
    }

    /**
     * @return array
     */
    public function getVirtualAttributes()
    {
        $virtualAttributes = [];

        $attributes = $this->getConfiguration()['attributes'];
        foreach ($attributes as $attributeName => $attributeOptions) {
            if (!isset($attributeOptions['options']['virtual']) || !$attributeOptions['options']['virtual']) {
                continue;
            }

            $virtualAttributes[$attributeName] = $attributeOptions;
        }

        return $virtualAttributes;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return WorkflowDefinition
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return WorkflowDefinition
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $relatedEntity
     * @return WorkflowDefinition
     */
    public function setRelatedEntity($relatedEntity)
    {
        $this->relatedEntity = $relatedEntity;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedEntity()
    {
        return $this->relatedEntity;
    }

    /**
     * @param string $entityAttributeName
     * @return WorkflowDefinition
     */
    public function setEntityAttributeName($entityAttributeName)
    {
        $this->entityAttributeName = $entityAttributeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntityAttributeName()
    {
        return $this->entityAttributeName;
    }

    /**
     * @return boolean
     */
    public function isStepsDisplayOrdered()
    {
        return $this->stepsDisplayOrdered;
    }

    /**
     * @param boolean $stepsDisplayOrdered
     * @return WorkflowDefinition
     */
    public function setStepsDisplayOrdered($stepsDisplayOrdered)
    {
        $this->stepsDisplayOrdered = $stepsDisplayOrdered;

        return $this;
    }

    /**
     * @return Scope[]|Collection
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @param Scope $scope
     * @return $this
     */
    public function addScope(Scope $scope)
    {
        if (!$this->scopes->contains($scope)) {
            $this->scopes->add($scope);
        }

        return $this;
    }

    /**
     * @param Scope $scope
     * @return $this
     */
    public function removeScope(Scope $scope)
    {
        if ($this->scopes->contains($scope)) {
            $this->scopes->removeElement($scope);
        }

        return $this;
    }

    /**
     * Set configuration
     *
     * @param array $configuration
     * @return WorkflowDefinition
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get configuration
     *
     * @return array
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param WorkflowStep $startStep
     * @return WorkflowDefinition
     * @throws WorkflowException
     */
    public function setStartStep($startStep)
    {
        if (null !== $startStep) {
            $stepName = $startStep->getName();

            if (!$this->hasStepByName($stepName)) {
                throw new WorkflowException(
                    sprintf('Workflow "%s" does not contain step "%s"', $this->getName(), $stepName)
                );
            }

            $this->startStep = $this->getStepByName($stepName);
        } else {
            $this->startStep = null;
        }

        return $this;
    }

    /**
     * @return WorkflowStep
     */
    public function getStartStep()
    {
        return $this->startStep;
    }

    /**
     * @return WorkflowStep[]|Collection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param WorkflowStep[]|Collection $steps
     * @return WorkflowDefinition
     */
    public function setSteps($steps)
    {
        $newStepNames = [];
        foreach ($steps as $step) {
            $newStepNames[] = $step->getName();
        }

        foreach ($this->steps as $step) {
            if (!in_array($step->getName(), $newStepNames)) {
                $this->removeStep($step);
            }
        }

        foreach ($steps as $step) {
            $this->addStep($step);
        }

        return $this;
    }

    /**
     * @param WorkflowStep $step
     * @return WorkflowDefinition
     */
    public function addStep(WorkflowStep $step)
    {
        $stepName = $step->getName();

        if (!$this->hasStepByName($stepName)) {
            $step->setDefinition($this);
            $this->steps->add($step);
        } else {
            $this->getStepByName($stepName)->import($step);
        }

        return $this;
    }

    /**
     * @param WorkflowStep $step
     * @return WorkflowDefinition
     */
    public function removeStep(WorkflowStep $step)
    {
        $stepName = $step->getName();

        if ($this->hasStepByName($stepName)) {
            $step = $this->getStepByName($stepName);
            $this->steps->removeElement($step);
        }

        return $this;
    }

    /**
     * @param string $stepName
     * @return bool
     */
    public function hasStepByName($stepName)
    {
        return $this->getStepByName($stepName) !== null;
    }

    /**
     * @param string $stepName
     * @return null|WorkflowStep
     */
    public function getStepByName($stepName)
    {
        foreach ($this->steps as $step) {
            if ($step->getName() == $stepName) {
                return $step;
            }
        }

        return null;
    }

    /**
     * @return WorkflowEntityAcl[]|Collection
     */
    public function getEntityAcls()
    {
        return $this->entityAcls;
    }

    /**
     * @param WorkflowEntityAcl[]|Collection $entityAcl
     * @return WorkflowDefinition
     */
    public function setEntityAcls($entityAcl)
    {
        $newAttributeSteps = [];
        foreach ($entityAcl as $acl) {
            $newAttributeSteps[] = $acl->getAttributeStepKey();
        }

        foreach ($this->entityAcls as $acl) {
            if (!in_array($acl->getAttributeStepKey(), $newAttributeSteps)) {
                $this->removeEntityAcl($acl);
            }
        }

        foreach ($entityAcl as $acl) {
            $this->addEntityAcl($acl);
        }

        return $this;
    }

    /**
     * @param WorkflowRestriction[]|ArrayCollection $restrictions
     *
     * @return WorkflowDefinition
     */
    public function setRestrictions($restrictions)
    {
        $newRestrictions = [];
        foreach ($restrictions as $restriction) {
            $newRestrictions[$restriction->getHashKey()] = $restriction;
        }

        $oldRestrictions = $this->restrictions;
        foreach ($oldRestrictions as $old) {
            $hashKey = $old->getHashKey();
            if (isset($newRestrictions[$hashKey])) {
                $old->setValues($newRestrictions[$hashKey]->getValues());
                unset($newRestrictions[$hashKey]);
            } else {
                $this->restrictions->removeElement($old);
            }
        }

        foreach ($newRestrictions as $newRestriction) {
            $this->addRestriction($newRestriction);
        }

        return $this;
    }

    /**
     * @return Collection|WorkflowRestriction[]
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * @param WorkflowRestriction $restriction
     *
     * @return $this
     */
    public function addRestriction(WorkflowRestriction $restriction)
    {
        $restriction->setDefinition($this);
        if ($restriction->getStep()) {
            $restriction->setStep($this->getStepByName($restriction->getStep()->getName()));
        }

        $this->restrictions->add($restriction);

        return $this;
    }

    /**
     * @param WorkflowEntityAcl $acl
     * @return WorkflowDefinition
     */
    public function addEntityAcl(WorkflowEntityAcl $acl)
    {
        $attributeStep = $acl->getAttributeStepKey();

        if (!$this->hasEntityAclByAttributeStep($attributeStep)) {
            $acl->setDefinition($this)
                ->setStep($this->getStepByName($acl->getStep()->getName()));
            $this->entityAcls->add($acl);
        } else {
            $this->getEntityAclByAttributeStep($attributeStep)->import($acl);
        }

        return $this;
    }

    /**
     * @param WorkflowEntityAcl $acl
     * @return WorkflowDefinition
     */
    public function removeEntityAcl(WorkflowEntityAcl $acl)
    {
        $attributeStep = $acl->getAttributeStepKey();

        if ($this->hasEntityAclByAttributeStep($attributeStep)) {
            $acl = $this->getEntityAclByAttributeStep($attributeStep);
            $this->entityAcls->removeElement($acl);
        }

        return $this;
    }

    /**
     * @param string $attributeStep
     * @return bool
     */
    public function hasEntityAclByAttributeStep($attributeStep)
    {
        return $this->getEntityAclByAttributeStep($attributeStep) !== null;
    }

    /**
     * @param string $attributeStep
     * @return null|WorkflowEntityAcl
     */
    public function getEntityAclByAttributeStep($attributeStep)
    {
        foreach ($this->entityAcls as $acl) {
            if ($acl->getAttributeStepKey() == $attributeStep) {
                return $acl;
            }
        }

        return null;
    }

    /**
     * @return boolean
     */
    public function isSystem()
    {
        return $this->system;
    }

    /**
     * @param boolean $system
     * @return WorkflowDefinition
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get created date/time
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $created
     * @return WorkflowDefinition
     */
    public function setCreatedAt($created)
    {
        $this->createdAt = $created;

        return $this;
    }

    /**
     * Get last update date/time
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updated
     * @return WorkflowDefinition
     */
    public function setUpdatedAt($updated)
    {
        $this->updatedAt = $updated;

        return $this;
    }

    /**
     * Pre persist event listener
     *
     * @ORM\PrePersist
     */
    public function beforeSave()
    {
        $this->createdAt = new \DateTime('now', new \DateTimeZone('UTC'));
        $this->updatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
    }

    /**
     * Pre update event handler
     * @ORM\PreUpdate
     */
    public function beforeUpdate()
    {
        $this->updatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
    }

    /**
     * Returns a unique identifier for this domain object.
     *
     * @return string
     */
    public function getObjectIdentifier()
    {
        return $this->getName();
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param mixed $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasExclusiveActiveGroups()
    {
        return !empty($this->exclusiveActiveGroups);
    }

    /**
     * @return array
     */
    public function getExclusiveActiveGroups()
    {
        return $this->exclusiveActiveGroups;
    }

    /**
     * @param array $groups
     * @return $this
     */
    public function setExclusiveActiveGroups(array $groups)
    {
        $this->exclusiveActiveGroups = $groups;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasExclusiveRecordGroups()
    {
        return !empty($this->exclusiveRecordGroups);
    }

    /**
     * @return array
     */
    public function getExclusiveRecordGroups()
    {
        return $this->exclusiveRecordGroups;
    }

    /**
     * @param array $groups
     * @return $this
     */
    public function setExclusiveRecordGroups(array $groups)
    {
        $this->exclusiveRecordGroups = $groups;

        return $this;
    }

    /**
     * @return array
     */
    public function getDatagrids()
    {
        return array_key_exists(self::CONFIG_DATAGRIDS, $this->configuration)
            ? (array)$this->configuration[self::CONFIG_DATAGRIDS]
            : [];
    }
    /**
     * @return array
     */
    public function getApplications()
    {
        return $this->applications;
    }

    /**
     * @param array $applications
     *
     * @return $this
     */
    public function setApplications(array $applications)
    {
        $this->applications = array_map('strtolower', $applications);

        return $this;
    }
}
