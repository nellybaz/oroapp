<?php

namespace Oro\Bundle\LocaleBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use JMS\Serializer\Annotation as Serializer;

use Oro\Bundle\EntityBundle\EntityProperty\DatesAwareInterface;
use Oro\Bundle\EntityBundle\EntityProperty\DatesAwareTrait;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;

use Oro\Bundle\LocaleBundle\Model\ExtendLocalization;
use Oro\Bundle\TranslationBundle\Entity\Language;

/**
 * @ORM\Entity(repositoryClass="Oro\Bundle\LocaleBundle\Entity\Repository\LocalizationRepository")
 * @ORM\Table(name="oro_localization")
 * @Config(
 *      routeName="oro_locale_localization_index",
 *      routeView="oro_locale_localization_view",
 *      routeUpdate="oro_locale_localization_update",
 *      defaultValues={
 *          "entity"={
 *              "icon"="fa-list"
 *          },
 *          "security"={
 *              "type"="ACL",
 *              "group_name"="",
 *              "category"="account_management"
 *          },
 *          "form"={
 *              "form_type"="oro_locale_localization_select",
 *              "grid_name"="oro-locale-localizations-select-grid",
 *          },
 *      }
 * )
 */
class Localization extends ExtendLocalization implements DatesAwareInterface
{
    use DatesAwareTrait;

    const DEFAULT_LOCALIZATION = 'default';

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "identity"=true
     *          }
     *      }
     * )
     */
    protected $name;

    /**
     * @var Collection|LocalizedFallbackValue[]
     *
     * @ORM\ManyToMany(
     *      targetEntity="Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue",
     *      cascade={"ALL"},
     *      orphanRemoval=true
     * )
     * @ORM\JoinTable(
     *      name="oro_localization_title",
     *      joinColumns={
     *          @ORM\JoinColumn(name="localization_id", referencedColumnName="id", onDelete="CASCADE")
     *      },
     *      inverseJoinColumns={
     *          @ORM\JoinColumn(name="localized_value_id", referencedColumnName="id", onDelete="CASCADE", unique=true)
     *      }
     * )
     */
    protected $titles;

    /**
     * @var Language
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\TranslationBundle\Entity\Language")
     * @ORM\JoinColumn(name="language_id", referencedColumnName="id", nullable=false, onDelete="RESTRICT")
     *
     * @Serializer\MaxDepth(1)
     */
    protected $language;

    /**
     * @var string
     *
     * @ORM\Column(name="formatting_code", type="string", length=16, nullable=false)
     */
    protected $formattingCode;

    /**
     * @var Localization
     *
     * @ORM\ManyToOne(targetEntity="Localization", inversedBy="childLocalizations")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     *
     * @Serializer\MaxDepth(3)
     */
    protected $parentLocalization;

    /**
     * @var Collection|Localization[]
     *
     * @ORM\OneToMany(targetEntity="Localization", mappedBy="parentLocalization")
     *
     * @Serializer\MaxDepth(3)
     */
    protected $childLocalizations;

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this->childLocalizations = new ArrayCollection();
        $this->titles = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getName();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Language $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language ? $this->language->getCode() : null;
    }

    /**
     * @param string $formattingCode
     *
     * @return $this
     */
    public function setFormattingCode($formattingCode)
    {
        $this->formattingCode = $formattingCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormattingCode()
    {
        return $this->formattingCode;
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Localization $parentLocalization
     *
     * @return $this
     */
    public function setParentLocalization(Localization $parentLocalization = null)
    {
        $this->parentLocalization = $parentLocalization;

        return $this;
    }

    /**
     * @return Localization|null
     */
    public function getParentLocalization()
    {
        return $this->parentLocalization;
    }

    /**
     * @return Collection|Localization[]
     */
    public function getChildLocalizations()
    {
        return $this->childLocalizations;
    }

    /**
     * @param Localization $childLocalization
     * @return $this
     */
    public function addChildLocalization(Localization $childLocalization)
    {
        if (!$this->childLocalizations->contains($childLocalization)) {
            $this->childLocalizations->add($childLocalization);
        }

        return $this;
    }

    /**
     * @param Localization $childLocalization
     * @return $this
     */
    public function removeChildLocalization(Localization $childLocalization)
    {
        if ($this->childLocalizations->contains($childLocalization)) {
            $this->childLocalizations->removeElement($childLocalization);
            $childLocalization->setParentLocalization(null);
        }

        return $this;
    }

    /**
     * @return Collection|LocalizedFallbackValue[]
     */
    public function getTitles()
    {
        return $this->titles;
    }

    /**
     * @param LocalizedFallbackValue $title
     *
     * @return $this
     */
    public function addTitle(LocalizedFallbackValue $title)
    {
        if (!$this->titles->contains($title)) {
            $this->titles->add($title);
        }

        return $this;
    }

    /**
     * @param LocalizedFallbackValue $title
     *
     * @return $this
     */
    public function removeTitle(LocalizedFallbackValue $title)
    {
        if ($this->titles->contains($title)) {
            $this->titles->removeElement($title);
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getHierarchy()
    {
        return $this->getLocaleHierarchy($this);
    }

    /**
     * @param Localization $localization
     * @return array
     */
    protected function getLocaleHierarchy(Localization $localization)
    {
        $localeHierarchy = [];

        $parent = $localization->getParentLocalization();
        if ($parent) {
            $localeHierarchy[] = $parent->getId();
            $localeHierarchy = array_merge($localeHierarchy, $this->getLocaleHierarchy($parent));
        } else {
            // For default value without locale
            $localeHierarchy = [null];
        }

        return $localeHierarchy;
    }

    /**
     * @param bool $includeOwnId
     * @return array
     */
    public function getChildrenIds($includeOwnId = false)
    {
        $ids = $this->processChildrenIds($this);
        if ($includeOwnId && $this->getId()) {
            $ids[] = $this->getId();
        }

        $ids = array_unique($ids);

        sort($ids);

        return $ids;
    }

    /**
     * @param Localization $localization
     * @return array
     */
    protected function processChildrenIds(Localization $localization)
    {
        $ids = [];
        foreach ($localization->getChildLocalizations() as $child) {
            foreach ($this->processChildrenIds($child) as $id) {
                $ids[] = $id;
            }

            $ids[] = $child->getId();
        }

        return $ids;
    }
}
