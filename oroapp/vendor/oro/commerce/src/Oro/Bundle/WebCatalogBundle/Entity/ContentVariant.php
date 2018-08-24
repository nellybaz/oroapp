<?php

namespace Oro\Bundle\WebCatalogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\RedirectBundle\Entity\SlugAwareInterface;
use Oro\Bundle\RedirectBundle\Entity\SlugAwareTrait;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\ScopeBundle\Entity\ScopeCollectionAwareInterface;
use Oro\Bundle\WebCatalogBundle\Model\ExtendContentVariant;
use Oro\Component\WebCatalog\Entity\ContentNodeAwareInterface;
use Oro\Component\WebCatalog\Entity\ContentVariantInterface;

/**
 * @ORM\Entity(repositoryClass="Oro\Bundle\WebCatalogBundle\Entity\Repository\ContentVariantRepository")
 * @ORM\AssociationOverrides({
 *     @ORM\AssociationOverride(
 *          name="slugs",
 *          joinTable=@ORM\JoinTable(
 *              name="oro_web_catalog_variant_slug",
 *              joinColumns={
 *                  @ORM\JoinColumn(name="content_variant_id", referencedColumnName="id", onDelete="CASCADE")
 *              },
 *              inverseJoinColumns={
 *                  @ORM\JoinColumn(name="slug_id", referencedColumnName="id", unique=true, onDelete="CASCADE")
 *              }
 *          )
 *      )
 * })
 * @ORM\Table(name="oro_web_catalog_variant")
 * @Config
 */
class ContentVariant extends ExtendContentVariant implements
    ContentVariantInterface,
    ContentNodeAwareInterface,
    SlugAwareInterface,
    ScopeCollectionAwareInterface
{
    use SlugAwareTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="system_page_route", type="string", length=255, nullable=true)
     */
    protected $systemPageRoute;

    /**
     * @var ContentNode
     *
     * @ORM\ManyToOne(
     *     targetEntity="Oro\Bundle\WebCatalogBundle\Entity\ContentNode",
     *     inversedBy="contentVariants"
     * )
     * @ORM\JoinColumn(name="node_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $node;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean", options={"default"=false})
     */
    protected $default = false;

    /**
     * @var Collection|Scope[]
     *
     * @ORM\ManyToMany(
     *      targetEntity="Oro\Bundle\ScopeBundle\Entity\Scope"
     * )
     * @ORM\JoinTable(name="oro_web_catalog_variant_scope",
     *      joinColumns={
     *          @ORM\JoinColumn(name="variant_id", referencedColumnName="id", onDelete="CASCADE")
     *      },
     *      inverseJoinColumns={
     *          @ORM\JoinColumn(name="scope_id", referencedColumnName="id", onDelete="CASCADE")
     *      }
     * )
     */
    protected $scopes;

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this->scopes = new ArrayCollection();
        $this->slugs = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getSystemPageRoute()
    {
        return $this->systemPageRoute;
    }

    /**
     * @param string $systemPageRoute
     *
     * @return $this
     */
    public function setSystemPageRoute($systemPageRoute)
    {
        $this->systemPageRoute = $systemPageRoute;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @param ContentNode $node
     *
     * @return $this
     */
    public function setNode(ContentNode $node)
    {
        $this->node = $node;

        return $this;
    }

    /**
     * @return Collection|Scope[]
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @return $this
     */
    public function resetScopes()
    {
        $this->scopes->clear();

        return $this;
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
     * @param bool $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = (bool)$default;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->default;
    }
}
