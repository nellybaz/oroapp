<?php

namespace Proxies\__CG__\Oro\Bundle\SearchBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Item extends \Oro\Bundle\SearchBundle\Entity\Item implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'entity', 'alias', 'recordId', 'title', 'changed', 'createdAt', 'updatedAt', 'textFields', 'integerFields', 'decimalFields', 'datetimeFields'];
        }

        return ['__isInitialized__', 'id', 'entity', 'alias', 'recordId', 'title', 'changed', 'createdAt', 'updatedAt', 'textFields', 'integerFields', 'decimalFields', 'datetimeFields'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Item $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function saveItemData($objectData)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'saveItemData', [$objectData]);

        return parent::saveItemData($objectData);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntity($entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntity', [$entity]);

        return parent::setEntity($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntity', []);

        return parent::getEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecordId($recordId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecordId', [$recordId]);

        return parent::setRecordId($recordId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecordId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecordId', []);

        return parent::getRecordId();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanged($changed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanged', [$changed]);

        return parent::setChanged($changed);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanged', []);

        return parent::getChanged();
    }

    /**
     * {@inheritDoc}
     */
    public function addIntegerField(\Oro\Bundle\SearchBundle\Entity\AbstractIndexInteger $integerField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIntegerField', [$integerField]);

        return parent::addIntegerField($integerField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIntegerField(\Oro\Bundle\SearchBundle\Entity\AbstractIndexInteger $integerField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIntegerField', [$integerField]);

        return parent::removeIntegerField($integerField);
    }

    /**
     * {@inheritDoc}
     */
    public function addDecimalField(\Oro\Bundle\SearchBundle\Entity\AbstractIndexDecimal $decimalField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDecimalField', [$decimalField]);

        return parent::addDecimalField($decimalField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDecimalField(\Oro\Bundle\SearchBundle\Entity\AbstractIndexDecimal $decimalField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDecimalField', [$decimalField]);

        return parent::removeDecimalField($decimalField);
    }

    /**
     * {@inheritDoc}
     */
    public function addDatetimeField(\Oro\Bundle\SearchBundle\Entity\AbstractIndexDatetime $datetimeField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDatetimeField', [$datetimeField]);

        return parent::addDatetimeField($datetimeField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDatetimeField(\Oro\Bundle\SearchBundle\Entity\AbstractIndexDatetime $datetimeField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDatetimeField', [$datetimeField]);

        return parent::removeDatetimeField($datetimeField);
    }

    /**
     * {@inheritDoc}
     */
    public function addTextField(\Oro\Bundle\SearchBundle\Entity\AbstractIndexText $textField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTextField', [$textField]);

        return parent::addTextField($textField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTextField(\Oro\Bundle\SearchBundle\Entity\AbstractIndexText $textField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTextField', [$textField]);

        return parent::removeTextField($textField);
    }

    /**
     * {@inheritDoc}
     */
    public function beforeSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'beforeSave', []);

        return parent::beforeSave();
    }

    /**
     * {@inheritDoc}
     */
    public function beforeUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'beforeUpdate', []);

        return parent::beforeUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', [$alias]);

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', []);

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function getRecordText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecordText', []);

        return parent::getRecordText();
    }

    /**
     * {@inheritDoc}
     */
    public function getIntegerFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegerFields', []);

        return parent::getIntegerFields();
    }

    /**
     * {@inheritDoc}
     */
    public function getDecimalFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecimalFields', []);

        return parent::getDecimalFields();
    }

    /**
     * {@inheritDoc}
     */
    public function getDatetimeFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatetimeFields', []);

        return parent::getDatetimeFields();
    }

    /**
     * {@inheritDoc}
     */
    public function getTextFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTextFields', []);

        return parent::getTextFields();
    }

}