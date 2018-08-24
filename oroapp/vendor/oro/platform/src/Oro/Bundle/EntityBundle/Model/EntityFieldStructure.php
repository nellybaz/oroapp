<?php

namespace Oro\Bundle\EntityBundle\Model;

class EntityFieldStructure
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $type;

    /** @var string */
    protected $label;

    /** @var string */
    protected $relationType;

    /** @var string */
    protected $relatedEntityName;

    /** @var array */
    protected $options = [];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
    public function getType()
    {
        return $this->type;
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
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * @param string $relationType
     *
     * @return $this
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedEntityName()
    {
        return $this->relatedEntityName;
    }

    /**
     * @param string $relatedEntityName
     *
     * @return $this
     */
    public function setRelatedEntityName($relatedEntityName)
    {
        $this->relatedEntityName = $relatedEntityName;

        return $this;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return $this
     */
    public function addOption($name, $value)
    {
        $this->options[$name] = $value;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function getOption($name)
    {
        if (!$this->hasOption($name)) {
            return null;
        }

        return $this->options[$name];
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasOption($name)
    {
        return isset($this->options[$name]);
    }
}
