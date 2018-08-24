<?php

namespace Oro\Bundle\DataGridBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

use Oro\Bundle\DataGridBundle\Extension\GridViews\ViewInterface;
use Oro\Bundle\DataGridBundle\Extension\GridViews\View;
use Oro\Bundle\UserBundle\Entity\AbstractUser;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\OrganizationBundle\Entity\OrganizationInterface;

/**
 * @ORM\Entity()
 * @ORM\Table(
 *     name="oro_grid_view",
 *     indexes={
 *         @ORM\Index(name="idx_oro_grid_view_discr_type", columns={"discr_type"})
 *     }
 * )
 *
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr_type", type="string")
 * @ORM\DiscriminatorMap({"grid_view" = "Oro\Bundle\DataGridBundle\Entity\GridView"})
 */
abstract class AbstractGridView implements ViewInterface
{
    const TYPE_PRIVATE = 'private';
    const TYPE_PUBLIC  = 'public';

    /** @var array */
    protected static $types = [
        self::TYPE_PRIVATE => self::TYPE_PRIVATE,
        self::TYPE_PUBLIC  => self::TYPE_PUBLIC,
    ];

    /**
     * @var int $id
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     * @Assert\Choice(callback={"Oro\Bundle\DataGridBundle\Entity\GridView", "getTypes"})
     */
    protected $type = self::TYPE_PRIVATE;

    /**
     * @var array
     *
     * @ORM\Column(type="array")
     */
    protected $filtersData = [];

    /**
     * @var array of ['column name' => -1|1, ... ].
     * Contains information about sorters ('-1' for 'ASC', '1' for 'DESC').
     *
     * @ORM\Column(type="array")
     */
    protected $sortersData = [];

    /**
     * @var array of ['column name' => ['renderable' => true|false, 'order' = int(0)], ... ].
     * Contains information about columns orders in the grid.
     *
     * @ORM\Column(type="array", nullable=true)
     */
    protected $columnsData = [];

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    protected $gridName;

    /**
     * @var AppearanceType
     *
     * @ORM\ManyToOne(targetEntity="AppearanceType")
     * @ORM\JoinColumn(name="appearanceType", referencedColumnName="name")
     **/
    protected $appearanceType;

    /**
     * @var array
     * Contains data related to appearance, e.g. board id for boards
     *
     * @ORM\Column(type="array", nullable=true)
     */
    protected $appearanceData = [];

    /**
     * @var Organization
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\OrganizationBundle\Entity\Organization")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $organization;

    /**
     * Collection of users who have chosen this grid view as default.
     *
     * @var ArrayCollection|AbstractGridViewUser[]
     */
    protected $users;

    /**
     * GridView constructor.
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function getFiltersData()
    {
        return $this->filtersData;
    }

    /**
     * {@inheritdoc}
     */
    public function getSortersData()
    {
        return $this->sortersData;
    }

    /**
     * {@inheritdoc}
     */
    public function getGridName()
    {
        return $this->gridName;
    }

    /**
     * @return AbstractUser
     */
    abstract public function getOwner();

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFiltersData(array $filtersData = [])
    {
        $this->filtersData = $filtersData;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSortersData(array $sortersData = [])
    {
        $this->sortersData = $sortersData;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnsData()
    {
        if ($this->columnsData === null) {
            $this->columnsData = [];
        }

        return $this->columnsData;
    }

    /**
     * {@inheritdoc}
     */
    public function setColumnsData(array $columnsData = [])
    {
        $this->columnsData = $columnsData;
    }

    /**
     * {@inheritdoc}
     */
    public function setGridName($gridName)
    {
        $this->gridName = $gridName;

        return $this;
    }

    /**
     * @param AbstractUser $owner
     *
     * @return $this
     */
    abstract public function setOwner(AbstractUser $owner = null);

    /**
     * @return View
     */
    public function createView()
    {
        $view = new View(
            $this->id,
            $this->filtersData,
            $this->sortersData,
            $this->type,
            $this->getColumnsData(),
            (string) $this->appearanceType
        );
        $view->setAppearanceData($this->getAppearanceData());
        $view->setLabel($this->name);

        return $view;
    }

    /**
     * @return AppearanceType
     */
    public function getAppearanceType()
    {
        return $this->appearanceType;
    }

    /**
     * @param AppearanceType $appearanceType
     * @return $this
     */
    public function setAppearanceType($appearanceType)
    {
        $this->appearanceType = $appearanceType;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppearanceTypeName()
    {
        return (string) $this->appearanceType;
    }

    /**
     * @return array
     */
    public function getAppearanceData()
    {
        if ($this->appearanceData === null) {
            $this->appearanceData = [];
        }

        return $this->appearanceData;
    }

    /**
     * @param array $appearanceData
     * @return $this
     */
    public function setAppearanceData(array $appearanceData = [])
    {
        $this->appearanceData = $appearanceData;

        return $this;
    }

    /**
     * @return array
     */
    public static function getTypes()
    {
        return static::$types;
    }

    /**
     * Set organization
     *
     * @param OrganizationInterface $organization
     *
     * @return $this
     */
    public function setOrganization(OrganizationInterface $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return OrganizationInterface
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @return ArrayCollection|AbstractGridViewUser[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param AbstractGridViewUser $user
     *
     * @return $this
     */
    public function addUser(AbstractGridViewUser $user)
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
        }

        return $this;
    }

    /**
     * @param AbstractGridViewUser $user
     *
     * @return $this
     */
    public function removeUser(AbstractGridViewUser $user)
    {
        $this->users->removeElement($user);

        return $this;
    }
}
