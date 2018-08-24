<?php

namespace Extend\Entity;

abstract class EX_OroNoteBundle_Note implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    protected $website_53946d9;
    protected $web_catalog_8ca51480;
    protected $shipping_methods_configs_rule_9177d60;
    protected $serialized_data;
    protected $request_d1d045e1;
    protected $quote_54e154f7;
    protected $promotion_b3a296cb;
    protected $product_1a272a9f;
    protected $price_list_9a95e205;
    protected $payment_term_261e993c;
    protected $payment_methods_configs_rule_2bbc8061;
    protected $order_5f6f5774;
    protected $order_5726bf8f;
    protected $opportunity_6b9fac9c;
    protected $lead_23c40e3e;
    protected $customer_user_role_baff6731;
    protected $customer_user_d5622eff;
    protected $customer_group_4f9aa384;
    protected $customer_71cbb705;
    protected $credit_memo_dd9cf474;
    protected $content_node_bdcbfbf4;
    protected $contact_a6d273bd;
    protected $category_bf34ce3;
    protected $case_entity_eafc92f2;
    protected $attachment;
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
        if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') { return true; }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') { return true; }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') { return true; }
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') { return true; }
        if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') { return true; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { return true; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') { return true; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return true; }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') { return true; }
        if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') { return true; }
        if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') { return true; }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') { return true; }
        if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') { return true; }
        return false;
    }

    public function setWebsite53946d9($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->website_53946d9 instanceof \Doctrine\Common\Collections\Collection) {
            $this->website_53946d9 = $value;
            return $this;
        }
        foreach ($this->website_53946d9 as $item) {
            $this->removeWebsite53946d9($item);
        }
        foreach ($value as $item) {
            $this->addWebsite53946d9($item);
        }
        return $this;
    }

    public function setWebCatalog8ca51480($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->web_catalog_8ca51480 instanceof \Doctrine\Common\Collections\Collection) {
            $this->web_catalog_8ca51480 = $value;
            return $this;
        }
        foreach ($this->web_catalog_8ca51480 as $item) {
            $this->removeWebCatalog8ca51480($item);
        }
        foreach ($value as $item) {
            $this->addWebCatalog8ca51480($item);
        }
        return $this;
    }

    public function setShippingMethodsConfigsRule9177d60($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->shipping_methods_configs_rule_9177d60 instanceof \Doctrine\Common\Collections\Collection) {
            $this->shipping_methods_configs_rule_9177d60 = $value;
            return $this;
        }
        foreach ($this->shipping_methods_configs_rule_9177d60 as $item) {
            $this->removeShippingMethodsConfigsRule9177d60($item);
        }
        foreach ($value as $item) {
            $this->addShippingMethodsConfigsRule9177d60($item);
        }
        return $this;
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

    public function setPromotionB3a296cb($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->promotion_b3a296cb instanceof \Doctrine\Common\Collections\Collection) {
            $this->promotion_b3a296cb = $value;
            return $this;
        }
        foreach ($this->promotion_b3a296cb as $item) {
            $this->removePromotionB3a296cb($item);
        }
        foreach ($value as $item) {
            $this->addPromotionB3a296cb($item);
        }
        return $this;
    }

    public function setProduct1a272a9f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->product_1a272a9f instanceof \Doctrine\Common\Collections\Collection) {
            $this->product_1a272a9f = $value;
            return $this;
        }
        foreach ($this->product_1a272a9f as $item) {
            $this->removeProduct1a272a9f($item);
        }
        foreach ($value as $item) {
            $this->addProduct1a272a9f($item);
        }
        return $this;
    }

    public function setPriceList9a95e205($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->price_list_9a95e205 instanceof \Doctrine\Common\Collections\Collection) {
            $this->price_list_9a95e205 = $value;
            return $this;
        }
        foreach ($this->price_list_9a95e205 as $item) {
            $this->removePriceList9a95e205($item);
        }
        foreach ($value as $item) {
            $this->addPriceList9a95e205($item);
        }
        return $this;
    }

    public function setPaymentTerm261e993c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->payment_term_261e993c instanceof \Doctrine\Common\Collections\Collection) {
            $this->payment_term_261e993c = $value;
            return $this;
        }
        foreach ($this->payment_term_261e993c as $item) {
            $this->removePaymentTerm261e993c($item);
        }
        foreach ($value as $item) {
            $this->addPaymentTerm261e993c($item);
        }
        return $this;
    }

    public function setPaymentMethodsConfigsRule2bbc8061($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->payment_methods_configs_rule_2bbc8061 instanceof \Doctrine\Common\Collections\Collection) {
            $this->payment_methods_configs_rule_2bbc8061 = $value;
            return $this;
        }
        foreach ($this->payment_methods_configs_rule_2bbc8061 as $item) {
            $this->removePaymentMethodsConfigsRule2bbc8061($item);
        }
        foreach ($value as $item) {
            $this->addPaymentMethodsConfigsRule2bbc8061($item);
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

    public function setCustomerUserRoleBaff6731($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_user_role_baff6731 instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_user_role_baff6731 = $value;
            return $this;
        }
        foreach ($this->customer_user_role_baff6731 as $item) {
            $this->removeCustomerUserRoleBaff6731($item);
        }
        foreach ($value as $item) {
            $this->addCustomerUserRoleBaff6731($item);
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

    public function setCustomerGroup4f9aa384($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_group_4f9aa384 instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_group_4f9aa384 = $value;
            return $this;
        }
        foreach ($this->customer_group_4f9aa384 as $item) {
            $this->removeCustomerGroup4f9aa384($item);
        }
        foreach ($value as $item) {
            $this->addCustomerGroup4f9aa384($item);
        }
        return $this;
    }

    public function setCustomer71cbb705($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_71cbb705 instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_71cbb705 = $value;
            return $this;
        }
        foreach ($this->customer_71cbb705 as $item) {
            $this->removeCustomer71cbb705($item);
        }
        foreach ($value as $item) {
            $this->addCustomer71cbb705($item);
        }
        return $this;
    }

    public function setCreditMemoDd9cf474($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->credit_memo_dd9cf474 instanceof \Doctrine\Common\Collections\Collection) {
            $this->credit_memo_dd9cf474 = $value;
            return $this;
        }
        foreach ($this->credit_memo_dd9cf474 as $item) {
            $this->removeCreditMemoDd9cf474($item);
        }
        foreach ($value as $item) {
            $this->addCreditMemoDd9cf474($item);
        }
        return $this;
    }

    public function setContentNodeBdcbfbf4($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->content_node_bdcbfbf4 instanceof \Doctrine\Common\Collections\Collection) {
            $this->content_node_bdcbfbf4 = $value;
            return $this;
        }
        foreach ($this->content_node_bdcbfbf4 as $item) {
            $this->removeContentNodeBdcbfbf4($item);
        }
        foreach ($value as $item) {
            $this->addContentNodeBdcbfbf4($item);
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

    public function setCategoryBf34ce3($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->category_bf34ce3 instanceof \Doctrine\Common\Collections\Collection) {
            $this->category_bf34ce3 = $value;
            return $this;
        }
        foreach ($this->category_bf34ce3 as $item) {
            $this->removeCategoryBf34ce3($item);
        }
        foreach ($value as $item) {
            $this->addCategoryBf34ce3($item);
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

    public function setAttachment($value)
    {
        $this->attachment = $value; return $this;
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

    public function removeWebsite53946d9($value)
    {
        if ($this->website_53946d9 && $this->website_53946d9->contains($value)) {
            $this->website_53946d9->removeElement($value);
        }
    }

    public function removeWebCatalog8ca51480($value)
    {
        if ($this->web_catalog_8ca51480 && $this->web_catalog_8ca51480->contains($value)) {
            $this->web_catalog_8ca51480->removeElement($value);
        }
    }

    public function removeShippingMethodsConfigsRule9177d60($value)
    {
        if ($this->shipping_methods_configs_rule_9177d60 && $this->shipping_methods_configs_rule_9177d60->contains($value)) {
            $this->shipping_methods_configs_rule_9177d60->removeElement($value);
        }
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

    public function removePromotionB3a296cb($value)
    {
        if ($this->promotion_b3a296cb && $this->promotion_b3a296cb->contains($value)) {
            $this->promotion_b3a296cb->removeElement($value);
        }
    }

    public function removeProduct1a272a9f($value)
    {
        if ($this->product_1a272a9f && $this->product_1a272a9f->contains($value)) {
            $this->product_1a272a9f->removeElement($value);
        }
    }

    public function removePriceList9a95e205($value)
    {
        if ($this->price_list_9a95e205 && $this->price_list_9a95e205->contains($value)) {
            $this->price_list_9a95e205->removeElement($value);
        }
    }

    public function removePaymentTerm261e993c($value)
    {
        if ($this->payment_term_261e993c && $this->payment_term_261e993c->contains($value)) {
            $this->payment_term_261e993c->removeElement($value);
        }
    }

    public function removePaymentMethodsConfigsRule2bbc8061($value)
    {
        if ($this->payment_methods_configs_rule_2bbc8061 && $this->payment_methods_configs_rule_2bbc8061->contains($value)) {
            $this->payment_methods_configs_rule_2bbc8061->removeElement($value);
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

    public function removeCustomerUserRoleBaff6731($value)
    {
        if ($this->customer_user_role_baff6731 && $this->customer_user_role_baff6731->contains($value)) {
            $this->customer_user_role_baff6731->removeElement($value);
        }
    }

    public function removeCustomerUserD5622eff($value)
    {
        if ($this->customer_user_d5622eff && $this->customer_user_d5622eff->contains($value)) {
            $this->customer_user_d5622eff->removeElement($value);
        }
    }

    public function removeCustomerGroup4f9aa384($value)
    {
        if ($this->customer_group_4f9aa384 && $this->customer_group_4f9aa384->contains($value)) {
            $this->customer_group_4f9aa384->removeElement($value);
        }
    }

    public function removeCustomer71cbb705($value)
    {
        if ($this->customer_71cbb705 && $this->customer_71cbb705->contains($value)) {
            $this->customer_71cbb705->removeElement($value);
        }
    }

    public function removeCreditMemoDd9cf474($value)
    {
        if ($this->credit_memo_dd9cf474 && $this->credit_memo_dd9cf474->contains($value)) {
            $this->credit_memo_dd9cf474->removeElement($value);
        }
    }

    public function removeContentNodeBdcbfbf4($value)
    {
        if ($this->content_node_bdcbfbf4 && $this->content_node_bdcbfbf4->contains($value)) {
            $this->content_node_bdcbfbf4->removeElement($value);
        }
    }

    public function removeContactA6d273bd($value)
    {
        if ($this->contact_a6d273bd && $this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->removeElement($value);
        }
    }

    public function removeCategoryBf34ce3($value)
    {
        if ($this->category_bf34ce3 && $this->category_bf34ce3->contains($value)) {
            $this->category_bf34ce3->removeElement($value);
        }
    }

    public function removeCaseEntityEafc92f2($value)
    {
        if ($this->case_entity_eafc92f2 && $this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->removeElement($value);
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
        if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') {
            if ($this->website_53946d9->contains($target)) { $this->website_53946d9->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') {
            if ($this->content_node_bdcbfbf4->contains($target)) { $this->content_node_bdcbfbf4->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') {
            if ($this->web_catalog_8ca51480->contains($target)) { $this->web_catalog_8ca51480->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') {
            if ($this->product_1a272a9f->contains($target)) { $this->product_1a272a9f->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') {
            if ($this->category_bf34ce3->contains($target)) { $this->category_bf34ce3->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') {
            if ($this->customer_71cbb705->contains($target)) { $this->customer_71cbb705->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') {
            if ($this->customer_group_4f9aa384->contains($target)) { $this->customer_group_4f9aa384->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') {
            if ($this->customer_user_d5622eff->contains($target)) { $this->customer_user_d5622eff->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') {
            if ($this->customer_user_role_baff6731->contains($target)) { $this->customer_user_role_baff6731->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_638472a8->contains($target)) { $this->account_638472a8->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') {
            if ($this->payment_methods_configs_rule_2bbc8061->contains($target)) { $this->payment_methods_configs_rule_2bbc8061->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') {
            if ($this->payment_term_261e993c->contains($target)) { $this->payment_term_261e993c->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') {
            if ($this->price_list_9a95e205->contains($target)) { $this->price_list_9a95e205->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') {
            if ($this->request_d1d045e1->contains($target)) { $this->request_d1d045e1->removeElement($target); }
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
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') {
            if ($this->credit_memo_dd9cf474->contains($target)) { $this->credit_memo_dd9cf474->removeElement($target); }
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
        if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') {
            if ($this->promotion_b3a296cb->contains($target)) { $this->promotion_b3a296cb->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') {
            if ($this->shipping_methods_configs_rule_9177d60->contains($target)) { $this->shipping_methods_configs_rule_9177d60->removeElement($target); }
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
        if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') { return $this->website_53946d9->contains($target); }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd->contains($target); }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') { return $this->content_node_bdcbfbf4->contains($target); }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') { return $this->web_catalog_8ca51480->contains($target); }
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') { return $this->product_1a272a9f->contains($target); }
        if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') { return $this->category_bf34ce3->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { return $this->customer_71cbb705->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') { return $this->customer_group_4f9aa384->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return $this->customer_user_d5622eff->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') { return $this->customer_user_role_baff6731->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8->contains($target); }
        if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') { return $this->payment_methods_configs_rule_2bbc8061->contains($target); }
        if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') { return $this->payment_term_261e993c->contains($target); }
        if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') { return $this->price_list_9a95e205->contains($target); }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return $this->request_d1d045e1->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') { return $this->credit_memo_dd9cf474->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_5f6f5774->contains($target); }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return $this->order_5726bf8f->contains($target); }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return $this->quote_54e154f7->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2->contains($target); }
        if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') { return $this->promotion_b3a296cb->contains($target); }
        if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') { return $this->shipping_methods_configs_rule_9177d60->contains($target); }
        return false;
    }

    public function getWebsite53946d9()
    {
        return $this->website_53946d9;
    }

    public function getWebCatalog8ca51480()
    {
        return $this->web_catalog_8ca51480;
    }

    public function getShippingMethodsConfigsRule9177d60()
    {
        return $this->shipping_methods_configs_rule_9177d60;
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

    public function getPromotionB3a296cb()
    {
        return $this->promotion_b3a296cb;
    }

    public function getProduct1a272a9f()
    {
        return $this->product_1a272a9f;
    }

    public function getPriceList9a95e205()
    {
        return $this->price_list_9a95e205;
    }

    public function getPaymentTerm261e993c()
    {
        return $this->payment_term_261e993c;
    }

    public function getPaymentMethodsConfigsRule2bbc8061()
    {
        return $this->payment_methods_configs_rule_2bbc8061;
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

    public function getCustomerUserRoleBaff6731()
    {
        return $this->customer_user_role_baff6731;
    }

    public function getCustomerUserD5622eff()
    {
        return $this->customer_user_d5622eff;
    }

    public function getCustomerGroup4f9aa384()
    {
        return $this->customer_group_4f9aa384;
    }

    public function getCustomer71cbb705()
    {
        return $this->customer_71cbb705;
    }

    public function getCreditMemoDd9cf474()
    {
        return $this->credit_memo_dd9cf474;
    }

    public function getContentNodeBdcbfbf4()
    {
        return $this->content_node_bdcbfbf4;
    }

    public function getContactA6d273bd()
    {
        return $this->contact_a6d273bd;
    }

    public function getCategoryBf34ce3()
    {
        return $this->category_bf34ce3;
    }

    public function getCaseEntityEafc92f2()
    {
        return $this->case_entity_eafc92f2;
    }

    public function getAttachment()
    {
        return $this->attachment;
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
            $entities = $this->website_53946d9->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_a6d273bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->content_node_bdcbfbf4->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->web_catalog_8ca51480->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->product_1a272a9f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->category_bf34ce3->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_71cbb705->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_group_4f9aa384->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_user_d5622eff->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_user_role_baff6731->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_638472a8->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->payment_methods_configs_rule_2bbc8061->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->payment_term_261e993c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->price_list_9a95e205->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->request_d1d045e1->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_23c40e3e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_6b9fac9c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->credit_memo_dd9cf474->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->order_5f6f5774->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->order_5726bf8f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->quote_54e154f7->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_eafc92f2->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->promotion_b3a296cb->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->shipping_methods_configs_rule_9177d60->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') { return $this->website_53946d9; }
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd; }
            if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') { return $this->content_node_bdcbfbf4; }
            if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') { return $this->web_catalog_8ca51480; }
            if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') { return $this->product_1a272a9f; }
            if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') { return $this->category_bf34ce3; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { return $this->customer_71cbb705; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') { return $this->customer_group_4f9aa384; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return $this->customer_user_d5622eff; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') { return $this->customer_user_role_baff6731; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8; }
            if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') { return $this->payment_methods_configs_rule_2bbc8061; }
            if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') { return $this->payment_term_261e993c; }
            if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') { return $this->price_list_9a95e205; }
            if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return $this->request_d1d045e1; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') { return $this->credit_memo_dd9cf474; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_5f6f5774; }
            if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return $this->order_5726bf8f; }
            if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return $this->quote_54e154f7; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2; }
            if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') { return $this->promotion_b3a296cb; }
            if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') { return $this->shipping_methods_configs_rule_9177d60; }
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
        $entities = $this->website_53946d9->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->contact_a6d273bd->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->content_node_bdcbfbf4->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->web_catalog_8ca51480->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->product_1a272a9f->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->category_bf34ce3->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_71cbb705->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_group_4f9aa384->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_user_d5622eff->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_user_role_baff6731->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->account_638472a8->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->payment_methods_configs_rule_2bbc8061->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->payment_term_261e993c->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->price_list_9a95e205->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->request_d1d045e1->toArray();
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
        $entities = $this->credit_memo_dd9cf474->toArray();
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
        $entities = $this->promotion_b3a296cb->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->shipping_methods_configs_rule_9177d60->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        return $associationEntities;
    }

    public function getAccount638472a8()
    {
        return $this->account_638472a8;
    }

    public function addWebsite53946d9($value)
    {
        if (!$this->website_53946d9->contains($value)) {
            $this->website_53946d9->add($value);
        }
    }

    public function addWebCatalog8ca51480($value)
    {
        if (!$this->web_catalog_8ca51480->contains($value)) {
            $this->web_catalog_8ca51480->add($value);
        }
    }

    public function addShippingMethodsConfigsRule9177d60($value)
    {
        if (!$this->shipping_methods_configs_rule_9177d60->contains($value)) {
            $this->shipping_methods_configs_rule_9177d60->add($value);
        }
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

    public function addPromotionB3a296cb($value)
    {
        if (!$this->promotion_b3a296cb->contains($value)) {
            $this->promotion_b3a296cb->add($value);
        }
    }

    public function addProduct1a272a9f($value)
    {
        if (!$this->product_1a272a9f->contains($value)) {
            $this->product_1a272a9f->add($value);
        }
    }

    public function addPriceList9a95e205($value)
    {
        if (!$this->price_list_9a95e205->contains($value)) {
            $this->price_list_9a95e205->add($value);
        }
    }

    public function addPaymentTerm261e993c($value)
    {
        if (!$this->payment_term_261e993c->contains($value)) {
            $this->payment_term_261e993c->add($value);
        }
    }

    public function addPaymentMethodsConfigsRule2bbc8061($value)
    {
        if (!$this->payment_methods_configs_rule_2bbc8061->contains($value)) {
            $this->payment_methods_configs_rule_2bbc8061->add($value);
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

    public function addCustomerUserRoleBaff6731($value)
    {
        if (!$this->customer_user_role_baff6731->contains($value)) {
            $this->customer_user_role_baff6731->add($value);
        }
    }

    public function addCustomerUserD5622eff($value)
    {
        if (!$this->customer_user_d5622eff->contains($value)) {
            $this->customer_user_d5622eff->add($value);
        }
    }

    public function addCustomerGroup4f9aa384($value)
    {
        if (!$this->customer_group_4f9aa384->contains($value)) {
            $this->customer_group_4f9aa384->add($value);
        }
    }

    public function addCustomer71cbb705($value)
    {
        if (!$this->customer_71cbb705->contains($value)) {
            $this->customer_71cbb705->add($value);
        }
    }

    public function addCreditMemoDd9cf474($value)
    {
        if (!$this->credit_memo_dd9cf474->contains($value)) {
            $this->credit_memo_dd9cf474->add($value);
        }
    }

    public function addContentNodeBdcbfbf4($value)
    {
        if (!$this->content_node_bdcbfbf4->contains($value)) {
            $this->content_node_bdcbfbf4->add($value);
        }
    }

    public function addContactA6d273bd($value)
    {
        if (!$this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->add($value);
        }
    }

    public function addCategoryBf34ce3($value)
    {
        if (!$this->category_bf34ce3->contains($value)) {
            $this->category_bf34ce3->add($value);
        }
    }

    public function addCaseEntityEafc92f2($value)
    {
        if (!$this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->add($value);
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
        if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') {
            if (!$this->website_53946d9->contains($target)) { $this->website_53946d9->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') {
            if (!$this->content_node_bdcbfbf4->contains($target)) { $this->content_node_bdcbfbf4->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') {
            if (!$this->web_catalog_8ca51480->contains($target)) { $this->web_catalog_8ca51480->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') {
            if (!$this->product_1a272a9f->contains($target)) { $this->product_1a272a9f->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') {
            if (!$this->category_bf34ce3->contains($target)) { $this->category_bf34ce3->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') {
            if (!$this->customer_71cbb705->contains($target)) { $this->customer_71cbb705->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') {
            if (!$this->customer_group_4f9aa384->contains($target)) { $this->customer_group_4f9aa384->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') {
            if (!$this->customer_user_d5622eff->contains($target)) { $this->customer_user_d5622eff->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') {
            if (!$this->customer_user_role_baff6731->contains($target)) { $this->customer_user_role_baff6731->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_638472a8->contains($target)) { $this->account_638472a8->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') {
            if (!$this->payment_methods_configs_rule_2bbc8061->contains($target)) { $this->payment_methods_configs_rule_2bbc8061->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') {
            if (!$this->payment_term_261e993c->contains($target)) { $this->payment_term_261e993c->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') {
            if (!$this->price_list_9a95e205->contains($target)) { $this->price_list_9a95e205->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') {
            if (!$this->request_d1d045e1->contains($target)) { $this->request_d1d045e1->add($target); }
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
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') {
            if (!$this->credit_memo_dd9cf474->contains($target)) { $this->credit_memo_dd9cf474->add($target); }
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
        if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') {
            if (!$this->promotion_b3a296cb->contains($target)) { $this->promotion_b3a296cb->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') {
            if (!$this->shipping_methods_configs_rule_9177d60->contains($target)) { $this->shipping_methods_configs_rule_9177d60->add($target); }
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
        $this->website_53946d9 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_a6d273bd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->content_node_bdcbfbf4 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->web_catalog_8ca51480 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product_1a272a9f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category_bf34ce3 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_71cbb705 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_group_4f9aa384 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_user_d5622eff = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_user_role_baff6731 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_638472a8 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->payment_methods_configs_rule_2bbc8061 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->payment_term_261e993c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->price_list_9a95e205 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->request_d1d045e1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_23c40e3e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_6b9fac9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->credit_memo_dd9cf474 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->order_5f6f5774 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->order_5726bf8f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->quote_54e154f7 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_eafc92f2 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->promotion_b3a296cb = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shipping_methods_configs_rule_9177d60 = new \Doctrine\Common\Collections\ArrayCollection();
    }
}