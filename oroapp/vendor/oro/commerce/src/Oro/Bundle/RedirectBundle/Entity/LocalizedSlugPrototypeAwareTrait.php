<?php

namespace Oro\Bundle\RedirectBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;

trait LocalizedSlugPrototypeAwareTrait
{
    /**
     * @var Collection|LocalizedFallbackValue[]
     *
     * @ORM\ManyToMany(
     *      targetEntity="Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue",
     *      cascade={"ALL"},
     *      orphanRemoval=true
     * )
     */
    protected $slugPrototypes;

    /**
     * @return Collection|LocalizedFallbackValue[]
     */
    public function getSlugPrototypes()
    {
        return $this->slugPrototypes;
    }

    /**
     * @param LocalizedFallbackValue $slugPrototype
     * @return $this
     */
    public function addSlugPrototype(LocalizedFallbackValue $slugPrototype)
    {
        if (!$this->hasSlugPrototype($slugPrototype)) {
            $this->slugPrototypes->add($slugPrototype);
        }

        return $this;
    }

    /**
     * @param LocalizedFallbackValue $slugPrototype
     * @return $this
     */
    public function removeSlugPrototype(LocalizedFallbackValue $slugPrototype)
    {
        if ($this->hasSlugPrototype($slugPrototype)) {
            $this->slugPrototypes->removeElement($slugPrototype);
        }

        return $this;
    }

    /**
     * @param LocalizedFallbackValue $slugPrototype
     * @return bool
     */
    public function hasSlugPrototype(LocalizedFallbackValue $slugPrototype)
    {
        return $this->slugPrototypes->contains($slugPrototype);
    }
}
