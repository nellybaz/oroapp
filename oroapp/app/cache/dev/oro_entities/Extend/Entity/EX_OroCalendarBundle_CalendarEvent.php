<?php

namespace Extend\Entity;

abstract class EX_OroCalendarBundle_CalendarEvent implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    protected $use_hangout;
    protected $serialized_data;
    protected $request_d1d045e1;
    protected $quote_54e154f7;
    protected $order_5f6f5774;
    protected $order_5726bf8f;
    protected $opportunity_6b9fac9c;
    protected $lead_23c40e3e;
    protected $customer_user_d5622eff;
    protected $customer_11e85188;
    protected $contact_a6d273bd;
    protected $case_entity_eafc92f2;
    protected $b2b_customer_88d7394f;
    protected $account_638472a8;

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    public function setUseHangout($value)
    {
        $this->use_hangout = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setRequestD1d045e1($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->request_d1d045e1 instanceof \Doctrine\Common\Collections\Collection) {
            $this->request_d1d045e1 = $value;
            return $this;
        }
        foreach ($this->request_d1d045e1 as $item) {
            $this->removeRequestD1d045e1($item);
        }
        foreach ($value as $item) {
            $this->addRequestD1d045e1($item);
        }
        return $this;
    }

    public function setQuote54e154f7($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->quote_54e154f7 instanceof \Doctrine\Common\Collections\Collection) {
            $this->quote_54e154f7 = $value;
            return $this;
        }
        foreach ($this->quote_54e154f7 as $item) {
            $this->removeQuote54e154f7($item);
        }
        foreach ($value as $item) {
            $this->addQuote54e154f7($item);
        }
        return $this;
    }

    public function setOrder5f6f5774($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->order_5f6f5774 instanceof \Doctrine\Common\Collections\Collection) {
            $this->order_5f6f5774 = $value;
            return $this;
        }
        foreach ($this->order_5f6f5774 as $item) {
            $this->removeOrder5f6f5774($item);
        }
        foreach ($value as $item) {
            $this->addOrder5f6f5774($item);
        }
        return $this;
    }

    public function setOrder5726bf8f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->order_5726bf8f instanceof \Doctrine\Common\Collections\Collection) {
            $this->order_5726bf8f = $value;
            return $this;
        }
        foreach ($this->order_5726bf8f as $item) {
            $this->removeOrder5726bf8f($item);
        }
        foreach ($value as $item) {
            $this->addOrder5726bf8f($item);
        }
        return $this;
    }

    public function setOpportunity6b9fac9c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_6b9fac9c instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_6b9fac9c = $value;
            return $this;
        }
        foreach ($this->opportunity_6b9fac9c as $item) {
            $this->removeOpportunity6b9fac9c($item);
        }
        foreach ($value as $item) {
            $this->addOpportunity6b9fac9c($item);
        }
        return $this;
    }

    public function setLead23c40e3e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_23c40e3e instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_23c40e3e = $value;
            return $this;
        }
        foreach ($this->lead_23c40e3e as $item) {
            $this->removeLead23c40e3e($item);
        }
        foreach ($value as $item) {
            $this->addLead23c40e3e($item);
        }
        return $this;
    }

    public function setCustomerUserD5622eff($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_user_d5622eff instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_user_d5622eff = $value;
            return $this;
        }
        foreach ($this->customer_user_d5622eff as $item) {
            $this->removeCustomerUserD5622eff($item);
        }
        foreach ($value as $item) {
            $this->addCustomerUserD5622eff($item);
        }
        return $this;
    }

    public function setCustomer11e85188($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_11e85188 instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_11e85188 = $value;
            return $this;
        }
        foreach ($this->customer_11e85188 as $item) {
            $this->removeCustomer11e85188($item);
        }
        foreach ($value as $item) {
            $this->addCustomer11e85188($item);
        }
        return $this;
    }

    public function setContactA6d273bd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_a6d273bd instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_a6d273bd = $value;
            return $this;
        }
        foreach ($this->contact_a6d273bd as $item) {
            $this->removeContactA6d273bd($item);
        }
        foreach ($value as $item) {
            $this->addContactA6d273bd($item);
        }
        return $this;
    }

    public function setCaseEntityEafc92f2($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_eafc92f2 instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_eafc92f2 = $value;
            return $this;
        }
        foreach ($this->case_entity_eafc92f2 as $item) {
            $this->removeCaseEntityEafc92f2($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntityEafc92f2($item);
        }
        return $this;
    }

    public function setB2bCustomer88d7394f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_88d7394f instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_88d7394f = $value;
            return $this;
        }
        foreach ($this->b2b_customer_88d7394f as $item) {
            $this->removeB2bCustomer88d7394f($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomer88d7394f($item);
        }
        return $this;
    }

    public function setAccount638472a8($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_638472a8 instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_638472a8 = $value;
            return $this;
        }
        foreach ($this->account_638472a8 as $item) {
            $this->removeAccount638472a8($item);
        }
        foreach ($value as $item) {
            $this->addAccount638472a8($item);
        }
        return $this;
    }

    public function removeRequestD1d045e1($value)
    {
        if ($this->request_d1d045e1 && $this->request_d1d045e1->contains($value)) {
            $this->request_d1d045e1->removeElement($value);
        }
    }

    public function removeQuote54e154f7($value)
    {
        if ($this->quote_54e154f7 && $this->quote_54e154f7->contains($value)) {
            $this->quote_54e154f7->removeElement($value);
        }
    }

    public function removeOrder5f6f5774($value)
    {
        if ($this->order_5f6f5774 && $this->order_5f6f5774->contains($value)) {
            $this->order_5f6f5774->removeElement($value);
        }
    }

    public function removeOrder5726bf8f($value)
    {
        if ($this->order_5726bf8f && $this->order_5726bf8f->contains($value)) {
            $this->order_5726bf8f->removeElement($value);
        }
    }

    public function removeOpportunity6b9fac9c($value)
    {
        if ($this->opportunity_6b9fac9c && $this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->removeElement($value);
        }
    }

    public function removeLead23c40e3e($value)
    {
        if ($this->lead_23c40e3e && $this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->removeElement($value);
        }
    }

    public function removeCustomerUserD5622eff($value)
    {
        if ($this->customer_user_d5622eff && $this->customer_user_d5622eff->contains($value)) {
            $this->customer_user_d5622eff->removeElement($value);
        }
    }

    public function removeCustomer11e85188($value)
    {
        if ($this->customer_11e85188 && $this->customer_11e85188->contains($value)) {
            $this->customer_11e85188->removeElement($value);
        }
    }

    public function removeContactA6d273bd($value)
    {
        if ($this->contact_a6d273bd && $this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->removeElement($value);
        }
    }

    public function removeCaseEntityEafc92f2($value)
    {
        if ($this->case_entity_eafc92f2 && $this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->removeElement($value);
        }
    }

    public function removeB2bCustomer88d7394f($value)
    {
        if ($this->b2b_customer_88d7394f && $this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->removeElement($value);
        }
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') {
            if ($this->customer_user_d5622eff->contains($target)) { $this->customer_user_d5622eff->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_638472a8->contains($target)) { $this->account_638472a8->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') {
            if ($this->request_d1d045e1->contains($target)) { $this->request_d1d045e1->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') {
            if ($this->customer_11e85188->contains($target)) { $this->customer_11e85188->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') {
            if ($this->order_5f6f5774->contains($target)) { $this->order_5f6f5774->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') {
            if ($this->order_5726bf8f->contains($target)) { $this->order_5726bf8f->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') {
            if ($this->quote_54e154f7->contains($target)) { $this->quote_54e154f7->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function removeAccount638472a8($value)
    {
        if ($this->account_638472a8 && $this->account_638472a8->contains($value)) {
            $this->account_638472a8->removeElement($value);
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return $this->customer_user_d5622eff->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8->contains($target); }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return $this->request_d1d045e1->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_11e85188->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_5f6f5774->contains($target); }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return $this->order_5726bf8f->contains($target); }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return $this->quote_54e154f7->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2->contains($target); }
        return false;
    }

    public function getUseHangout()
    {
        return $this->use_hangout;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getRequestD1d045e1()
    {
        return $this->request_d1d045e1;
    }

    public function getQuote54e154f7()
    {
        return $this->quote_54e154f7;
    }

    public function getOrder5f6f5774()
    {
        return $this->order_5f6f5774;
    }

    public function getOrder5726bf8f()
    {
        return $this->order_5726bf8f;
    }

    public function getOpportunity6b9fac9c()
    {
        return $this->opportunity_6b9fac9c;
    }

    public function getLead23c40e3e()
    {
        return $this->lead_23c40e3e;
    }

    public function getCustomerUserD5622eff()
    {
        return $this->customer_user_d5622eff;
    }

    public function getCustomer11e85188()
    {
        return $this->customer_11e85188;
    }

    public function getContactA6d273bd()
    {
        return $this->contact_a6d273bd;
    }

    public function getCaseEntityEafc92f2()
    {
        return $this->case_entity_eafc92f2;
    }

    public function getB2bCustomer88d7394f()
    {
        return $this->b2b_customer_88d7394f;
    }

    /**
     * Gets entities associated with this entity
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass = NULL)
    {
        if (null === $targetClass) {
            $targets = [];
            $entities = $this->contact_a6d273bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_user_d5622eff->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_638472a8->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->request_d1d045e1->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->b2b_customer_88d7394f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_23c40e3e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_6b9fac9c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_11e85188->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->order_5f6f5774->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->order_5726bf8f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->quote_54e154f7->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_eafc92f2->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return $this->customer_user_d5622eff; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8; }
            if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return $this->request_d1d045e1; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_11e85188; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_5f6f5774; }
            if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return $this->order_5726bf8f; }
            if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return $this->quote_54e154f7; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2; }
            throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
        }
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     * @deprecated since 2.0. Method "getActivityTargets" without parameters should be used instead of "getActivityTargetEntities"
     */
    public function getActivityTargetEntities()
    {
        $associationEntities = [];
        $entities = $this->contact_a6d273bd->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_user_d5622eff->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->account_638472a8->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->request_d1d045e1->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->b2b_customer_88d7394f->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->lead_23c40e3e->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->opportunity_6b9fac9c->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_11e85188->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->order_5f6f5774->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->order_5726bf8f->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->quote_54e154f7->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->case_entity_eafc92f2->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        return $associationEntities;
    }

    public function getAccount638472a8()
    {
        return $this->account_638472a8;
    }

    public function addRequestD1d045e1($value)
    {
        if (!$this->request_d1d045e1->contains($value)) {
            $this->request_d1d045e1->add($value);
        }
    }

    public function addQuote54e154f7($value)
    {
        if (!$this->quote_54e154f7->contains($value)) {
            $this->quote_54e154f7->add($value);
        }
    }

    public function addOrder5f6f5774($value)
    {
        if (!$this->order_5f6f5774->contains($value)) {
            $this->order_5f6f5774->add($value);
        }
    }

    public function addOrder5726bf8f($value)
    {
        if (!$this->order_5726bf8f->contains($value)) {
            $this->order_5726bf8f->add($value);
        }
    }

    public function addOpportunity6b9fac9c($value)
    {
        if (!$this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->add($value);
        }
    }

    public function addLead23c40e3e($value)
    {
        if (!$this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->add($value);
        }
    }

    public function addCustomerUserD5622eff($value)
    {
        if (!$this->customer_user_d5622eff->contains($value)) {
            $this->customer_user_d5622eff->add($value);
        }
    }

    public function addCustomer11e85188($value)
    {
        if (!$this->customer_11e85188->contains($value)) {
            $this->customer_11e85188->add($value);
        }
    }

    public function addContactA6d273bd($value)
    {
        if (!$this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->add($value);
        }
    }

    public function addCaseEntityEafc92f2($value)
    {
        if (!$this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->add($value);
        }
    }

    public function addB2bCustomer88d7394f($value)
    {
        if (!$this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->add($value);
        }
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') {
            if (!$this->customer_user_d5622eff->contains($target)) { $this->customer_user_d5622eff->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_638472a8->contains($target)) { $this->account_638472a8->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') {
            if (!$this->request_d1d045e1->contains($target)) { $this->request_d1d045e1->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') {
            if (!$this->customer_11e85188->contains($target)) { $this->customer_11e85188->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') {
            if (!$this->order_5f6f5774->contains($target)) { $this->order_5f6f5774->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') {
            if (!$this->order_5726bf8f->contains($target)) { $this->order_5726bf8f->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') {
            if (!$this->quote_54e154f7->contains($target)) { $this->quote_54e154f7->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function addAccount638472a8($value)
    {
        if (!$this->account_638472a8->contains($value)) {
            $this->account_638472a8->add($value);
        }
    }

    public function __construct()
    {
        $this->contact_a6d273bd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_user_d5622eff = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_638472a8 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->request_d1d045e1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_88d7394f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_23c40e3e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_6b9fac9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_11e85188 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->order_5f6f5774 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->order_5726bf8f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->quote_54e154f7 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_eafc92f2 = new \Doctrine\Common\Collections\ArrayCollection();
    }
}