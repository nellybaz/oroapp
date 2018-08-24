<?php

namespace Oro\Bundle\CMSBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\ScopeBundle\Entity\Scope;

/**
 * @ORM\Entity
 * @ORM\Table(name="oro_cms_text_content_variant")
 * @Config
 */
class TextContentVariant
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var ContentBlock
     *
     * @ORM\ManyToOne(
     *     targetEntity="Oro\Bundle\CMSBundle\Entity\ContentBlock",
     *     inversedBy="contentVariants"
     * )
     * @ORM\JoinColumn(name="content_block_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $contentBlock;

    /**
     * @var Collection|Scope[]
     *
     * @ORM\ManyToMany(
     *      targetEntity="Oro\Bundle\ScopeBundle\Entity\Scope"
     * )
     * @ORM\JoinTable(name="oro_cms_txt_cont_variant_scope",
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
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    protected $content;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean", options={"default"=false})
     */
    protected $default = false;

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        $this->scopes = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ContentBlock
     */
    public function getContentBlock()
    {
        return $this->contentBlock;
    }

    /**
     * @param ContentBlock $contentBlock
     *
     * @return $this
     */
    public function setContentBlock(ContentBlock $contentBlock)
    {
        $this->contentBlock = $contentBlock;

        return $this;
    }

    /**
     * {@inheritdoc}
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
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

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
