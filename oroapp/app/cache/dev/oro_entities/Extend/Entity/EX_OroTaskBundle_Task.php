<?php

namespace Extend\Entity;

abstract class EX_OroTaskBundle_Task implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    protected $status;
    protected $serialized_data;
    protected $order_5f6f5774;
    protected $opportunity_6b9fac9c;
    protected $lead_23c40e3e;
    protected $email_bc65e759;
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
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return true; }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
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

    public function setEmailBc65e759($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->email_bc65e759 instanceof \Doctrine\Common\Collections\Collection) {
            $this->email_bc65e759 = $value;
            return $this;
        }
        foreach ($this->email_bc65e759 as $item) {
            $this->removeEmailBc65e759($item);
        }
        foreach ($value as $item) {
            $this->addEmailBc65e759($item);
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

    public function removeOrder5f6f5774($value)
    {
        if ($this->order_5f6f5774 && $this->order_5f6f5774->contains($value)) {
            $this->order_5f6f5774->removeElement($value);
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

    public function removeEmailBc65e759($value)
    {
        if ($this->email_bc65e759 && $this->email_bc65e759->contains($value)) {
            $this->email_bc65e759->removeElement($value);
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
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') {
            if ($this->email_bc65e759->contains($target)) { $this->email_bc65e759->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_638472a8->contains($target)) { $this->account_638472a8->removeElement($target); }
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
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return $this->email_bc65e759->contains($target); }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_11e85188->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_5f6f5774->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2->contains($target); }
        return false;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getOrder5f6f5774()
    {
        return $this->order_5f6f5774;
    }

    public function getOpportunity6b9fac9c()
    {
        return $this->opportunity_6b9fac9c;
    }

    public function getLead23c40e3e()
    {
        return $this->lead_23c40e3e;
    }

    public function getEmailBc65e759()
    {
        return $this->email_bc65e759;
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
            $entities = $this->email_bc65e759->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_a6d273bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_638472a8->toArray();
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
            $entities = $this->case_entity_eafc92f2->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return $this->email_bc65e759; }
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_11e85188; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_5f6f5774; }
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
        $entities = $this->email_bc65e759->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->contact_a6d273bd->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->account_638472a8->toArray();
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

    public function addOrder5f6f5774($value)
    {
        if (!$this->order_5f6f5774->contains($value)) {
            $this->order_5f6f5774->add($value);
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

    public function addEmailBc65e759($value)
    {
        if (!$this->email_bc65e759->contains($value)) {
            $this->email_bc65e759->add($value);
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
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') {
            if (!$this->email_bc65e759->contains($target)) { $this->email_bc65e759->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_638472a8->contains($target)) { $this->account_638472a8->add($target); }
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
        $this->email_bc65e759 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_a6d273bd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_638472a8 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_88d7394f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_23c40e3e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_6b9fac9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_11e85188 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->order_5f6f5774 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_eafc92f2 = new \Doctrine\Common\Collections\ArrayCollection();
    }
}