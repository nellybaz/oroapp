<?php

namespace Extend\Entity;

abstract class EX_OroActivityListBundle_ActivityList implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $website_ce03e960;
    protected $web_catalog_417b3f1e;
    protected $user_10c9f691;
    protected $task_dec81c8b;
    protected $shipping_methods_configs_rule_ac4a88bd;
    protected $serialized_data;
    protected $request_ead8a7c0;
    protected $quote_3223bdd7;
    protected $promotion_28e348c7;
    protected $product_d11d8526;
    protected $price_list_e9fb82b7;
    protected $payment_term_65600a36;
    protected $payment_methods_configs_rule_3bf8215;
    protected $order_9df4facb;
    protected $order_6c2e5dae;
    protected $opportunity_18f1cc2e;
    protected $lead_4506e71e;
    protected $email_876d0578;
    protected $customer_user_role_29160e3b;
    protected $customer_user_18bc0561;
    protected $customer_group_58e0c3ec;
    protected $customer_a39e600f;
    protected $customer_2a5d7b7;
    protected $credit_memo_f88048b4;
    protected $content_node_aab19b9c;
    protected $contact_request_aeac8609;
    protected $contact_6de8dc04;
    protected $category_b9857d64;
    protected $case_entity_21c63d4b;
    protected $cart_b792365;
    protected $b2b_customer_fbb959fd;
    protected $account_a8bedd11;

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityListTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return true; }
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return true; }
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
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return true; }
        if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') { return true; }
        if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') { return true; }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return true; }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return true; }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') { return true; }
        if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') { return true; }
        return false;
    }

    public function setWebsiteCe03e960($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->website_ce03e960 instanceof \Doctrine\Common\Collections\Collection) {
            $this->website_ce03e960 = $value;
            return $this;
        }
        foreach ($this->website_ce03e960 as $item) {
            $this->removeWebsiteCe03e960($item);
        }
        foreach ($value as $item) {
            $this->addWebsiteCe03e960($item);
        }
        return $this;
    }

    public function setWebCatalog417b3f1e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->web_catalog_417b3f1e instanceof \Doctrine\Common\Collections\Collection) {
            $this->web_catalog_417b3f1e = $value;
            return $this;
        }
        foreach ($this->web_catalog_417b3f1e as $item) {
            $this->removeWebCatalog417b3f1e($item);
        }
        foreach ($value as $item) {
            $this->addWebCatalog417b3f1e($item);
        }
        return $this;
    }

    public function setUser10c9f691($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->user_10c9f691 instanceof \Doctrine\Common\Collections\Collection) {
            $this->user_10c9f691 = $value;
            return $this;
        }
        foreach ($this->user_10c9f691 as $item) {
            $this->removeUser10c9f691($item);
        }
        foreach ($value as $item) {
            $this->addUser10c9f691($item);
        }
        return $this;
    }

    public function setTaskDec81c8b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->task_dec81c8b instanceof \Doctrine\Common\Collections\Collection) {
            $this->task_dec81c8b = $value;
            return $this;
        }
        foreach ($this->task_dec81c8b as $item) {
            $this->removeTaskDec81c8b($item);
        }
        foreach ($value as $item) {
            $this->addTaskDec81c8b($item);
        }
        return $this;
    }

    public function setShippingMethodsConfigsRuleAc4a88bd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->shipping_methods_configs_rule_ac4a88bd instanceof \Doctrine\Common\Collections\Collection) {
            $this->shipping_methods_configs_rule_ac4a88bd = $value;
            return $this;
        }
        foreach ($this->shipping_methods_configs_rule_ac4a88bd as $item) {
            $this->removeShippingMethodsConfigsRuleAc4a88bd($item);
        }
        foreach ($value as $item) {
            $this->addShippingMethodsConfigsRuleAc4a88bd($item);
        }
        return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setRequestEad8a7c0($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->request_ead8a7c0 instanceof \Doctrine\Common\Collections\Collection) {
            $this->request_ead8a7c0 = $value;
            return $this;
        }
        foreach ($this->request_ead8a7c0 as $item) {
            $this->removeRequestEad8a7c0($item);
        }
        foreach ($value as $item) {
            $this->addRequestEad8a7c0($item);
        }
        return $this;
    }

    public function setQuote3223bdd7($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->quote_3223bdd7 instanceof \Doctrine\Common\Collections\Collection) {
            $this->quote_3223bdd7 = $value;
            return $this;
        }
        foreach ($this->quote_3223bdd7 as $item) {
            $this->removeQuote3223bdd7($item);
        }
        foreach ($value as $item) {
            $this->addQuote3223bdd7($item);
        }
        return $this;
    }

    public function setPromotion28e348c7($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->promotion_28e348c7 instanceof \Doctrine\Common\Collections\Collection) {
            $this->promotion_28e348c7 = $value;
            return $this;
        }
        foreach ($this->promotion_28e348c7 as $item) {
            $this->removePromotion28e348c7($item);
        }
        foreach ($value as $item) {
            $this->addPromotion28e348c7($item);
        }
        return $this;
    }

    public function setProductD11d8526($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->product_d11d8526 instanceof \Doctrine\Common\Collections\Collection) {
            $this->product_d11d8526 = $value;
            return $this;
        }
        foreach ($this->product_d11d8526 as $item) {
            $this->removeProductD11d8526($item);
        }
        foreach ($value as $item) {
            $this->addProductD11d8526($item);
        }
        return $this;
    }

    public function setPriceListE9fb82b7($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->price_list_e9fb82b7 instanceof \Doctrine\Common\Collections\Collection) {
            $this->price_list_e9fb82b7 = $value;
            return $this;
        }
        foreach ($this->price_list_e9fb82b7 as $item) {
            $this->removePriceListE9fb82b7($item);
        }
        foreach ($value as $item) {
            $this->addPriceListE9fb82b7($item);
        }
        return $this;
    }

    public function setPaymentTerm65600a36($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->payment_term_65600a36 instanceof \Doctrine\Common\Collections\Collection) {
            $this->payment_term_65600a36 = $value;
            return $this;
        }
        foreach ($this->payment_term_65600a36 as $item) {
            $this->removePaymentTerm65600a36($item);
        }
        foreach ($value as $item) {
            $this->addPaymentTerm65600a36($item);
        }
        return $this;
    }

    public function setPaymentMethodsConfigsRule3bf8215($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->payment_methods_configs_rule_3bf8215 instanceof \Doctrine\Common\Collections\Collection) {
            $this->payment_methods_configs_rule_3bf8215 = $value;
            return $this;
        }
        foreach ($this->payment_methods_configs_rule_3bf8215 as $item) {
            $this->removePaymentMethodsConfigsRule3bf8215($item);
        }
        foreach ($value as $item) {
            $this->addPaymentMethodsConfigsRule3bf8215($item);
        }
        return $this;
    }

    public function setOrder9df4facb($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->order_9df4facb instanceof \Doctrine\Common\Collections\Collection) {
            $this->order_9df4facb = $value;
            return $this;
        }
        foreach ($this->order_9df4facb as $item) {
            $this->removeOrder9df4facb($item);
        }
        foreach ($value as $item) {
            $this->addOrder9df4facb($item);
        }
        return $this;
    }

    public function setOrder6c2e5dae($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->order_6c2e5dae instanceof \Doctrine\Common\Collections\Collection) {
            $this->order_6c2e5dae = $value;
            return $this;
        }
        foreach ($this->order_6c2e5dae as $item) {
            $this->removeOrder6c2e5da($item);
        }
        foreach ($value as $item) {
            $this->addOrder6c2e5da($item);
        }
        return $this;
    }

    public function setOpportunity18f1cc2e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_18f1cc2e instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_18f1cc2e = $value;
            return $this;
        }
        foreach ($this->opportunity_18f1cc2e as $item) {
            $this->removeOpportunity18f1cc2e($item);
        }
        foreach ($value as $item) {
            $this->addOpportunity18f1cc2e($item);
        }
        return $this;
    }

    public function setLead4506e71e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_4506e71e instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_4506e71e = $value;
            return $this;
        }
        foreach ($this->lead_4506e71e as $item) {
            $this->removeLead4506e71e($item);
        }
        foreach ($value as $item) {
            $this->addLead4506e71e($item);
        }
        return $this;
    }

    public function setEmail876d0578($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->email_876d0578 instanceof \Doctrine\Common\Collections\Collection) {
            $this->email_876d0578 = $value;
            return $this;
        }
        foreach ($this->email_876d0578 as $item) {
            $this->removeEmail876d0578($item);
        }
        foreach ($value as $item) {
            $this->addEmail876d0578($item);
        }
        return $this;
    }

    public function setCustomerUserRole29160e3b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_user_role_29160e3b instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_user_role_29160e3b = $value;
            return $this;
        }
        foreach ($this->customer_user_role_29160e3b as $item) {
            $this->removeCustomerUserRole29160e3b($item);
        }
        foreach ($value as $item) {
            $this->addCustomerUserRole29160e3b($item);
        }
        return $this;
    }

    public function setCustomerUser18bc0561($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_user_18bc0561 instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_user_18bc0561 = $value;
            return $this;
        }
        foreach ($this->customer_user_18bc0561 as $item) {
            $this->removeCustomerUser18bc0561($item);
        }
        foreach ($value as $item) {
            $this->addCustomerUser18bc0561($item);
        }
        return $this;
    }

    public function setCustomerGroup58e0c3ec($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_group_58e0c3ec instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_group_58e0c3ec = $value;
            return $this;
        }
        foreach ($this->customer_group_58e0c3ec as $item) {
            $this->removeCustomerGroup58e0c3ec($item);
        }
        foreach ($value as $item) {
            $this->addCustomerGroup58e0c3ec($item);
        }
        return $this;
    }

    public function setCustomerA39e600f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_a39e600f instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_a39e600f = $value;
            return $this;
        }
        foreach ($this->customer_a39e600f as $item) {
            $this->removeCustomerA39e600f($item);
        }
        foreach ($value as $item) {
            $this->addCustomerA39e600f($item);
        }
        return $this;
    }

    public function setCustomer2a5d7b7($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->customer_2a5d7b7 instanceof \Doctrine\Common\Collections\Collection) {
            $this->customer_2a5d7b7 = $value;
            return $this;
        }
        foreach ($this->customer_2a5d7b7 as $item) {
            $this->removeCustomer2a5d7b7($item);
        }
        foreach ($value as $item) {
            $this->addCustomer2a5d7b7($item);
        }
        return $this;
    }

    public function setCreditMemoF88048b4($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->credit_memo_f88048b4 instanceof \Doctrine\Common\Collections\Collection) {
            $this->credit_memo_f88048b4 = $value;
            return $this;
        }
        foreach ($this->credit_memo_f88048b4 as $item) {
            $this->removeCreditMemoF88048b4($item);
        }
        foreach ($value as $item) {
            $this->addCreditMemoF88048b4($item);
        }
        return $this;
    }

    public function setContentNodeAab19b9c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->content_node_aab19b9c instanceof \Doctrine\Common\Collections\Collection) {
            $this->content_node_aab19b9c = $value;
            return $this;
        }
        foreach ($this->content_node_aab19b9c as $item) {
            $this->removeContentNodeAab19b9c($item);
        }
        foreach ($value as $item) {
            $this->addContentNodeAab19b9c($item);
        }
        return $this;
    }

    public function setContactRequestAeac8609($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_request_aeac8609 instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_request_aeac8609 = $value;
            return $this;
        }
        foreach ($this->contact_request_aeac8609 as $item) {
            $this->removeContactRequestAeac8609($item);
        }
        foreach ($value as $item) {
            $this->addContactRequestAeac8609($item);
        }
        return $this;
    }

    public function setContact6de8dc04($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_6de8dc04 instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_6de8dc04 = $value;
            return $this;
        }
        foreach ($this->contact_6de8dc04 as $item) {
            $this->removeContact6de8dc04($item);
        }
        foreach ($value as $item) {
            $this->addContact6de8dc04($item);
        }
        return $this;
    }

    public function setCategoryB9857d64($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->category_b9857d64 instanceof \Doctrine\Common\Collections\Collection) {
            $this->category_b9857d64 = $value;
            return $this;
        }
        foreach ($this->category_b9857d64 as $item) {
            $this->removeCategoryB9857d64($item);
        }
        foreach ($value as $item) {
            $this->addCategoryB9857d64($item);
        }
        return $this;
    }

    public function setCaseEntity21c63d4b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_21c63d4b instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_21c63d4b = $value;
            return $this;
        }
        foreach ($this->case_entity_21c63d4b as $item) {
            $this->removeCaseEntity21c63d4b($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntity21c63d4b($item);
        }
        return $this;
    }

    public function setCartB792365($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->cart_b792365 instanceof \Doctrine\Common\Collections\Collection) {
            $this->cart_b792365 = $value;
            return $this;
        }
        foreach ($this->cart_b792365 as $item) {
            $this->removeCartB792365($item);
        }
        foreach ($value as $item) {
            $this->addCartB792365($item);
        }
        return $this;
    }

    public function setB2bCustomerFbb959fd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_fbb959fd instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_fbb959fd = $value;
            return $this;
        }
        foreach ($this->b2b_customer_fbb959fd as $item) {
            $this->removeB2bCustomerFbb959fd($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomerFbb959fd($item);
        }
        return $this;
    }

    public function setAccountA8bedd11($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_a8bedd11 instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_a8bedd11 = $value;
            return $this;
        }
        foreach ($this->account_a8bedd11 as $item) {
            $this->removeAccountA8bedd11($item);
        }
        foreach ($value as $item) {
            $this->addAccountA8bedd11($item);
        }
        return $this;
    }

    public function removeWebsiteCe03e960($value)
    {
        if ($this->website_ce03e960 && $this->website_ce03e960->contains($value)) {
            $this->website_ce03e960->removeElement($value);
        }
    }

    public function removeWebCatalog417b3f1e($value)
    {
        if ($this->web_catalog_417b3f1e && $this->web_catalog_417b3f1e->contains($value)) {
            $this->web_catalog_417b3f1e->removeElement($value);
        }
    }

    public function removeUser10c9f691($value)
    {
        if ($this->user_10c9f691 && $this->user_10c9f691->contains($value)) {
            $this->user_10c9f691->removeElement($value);
        }
    }

    public function removeTaskDec81c8b($value)
    {
        if ($this->task_dec81c8b && $this->task_dec81c8b->contains($value)) {
            $this->task_dec81c8b->removeElement($value);
        }
    }

    public function removeShippingMethodsConfigsRuleAc4a88bd($value)
    {
        if ($this->shipping_methods_configs_rule_ac4a88bd && $this->shipping_methods_configs_rule_ac4a88bd->contains($value)) {
            $this->shipping_methods_configs_rule_ac4a88bd->removeElement($value);
        }
    }

    public function removeRequestEad8a7c0($value)
    {
        if ($this->request_ead8a7c0 && $this->request_ead8a7c0->contains($value)) {
            $this->request_ead8a7c0->removeElement($value);
        }
    }

    public function removeQuote3223bdd7($value)
    {
        if ($this->quote_3223bdd7 && $this->quote_3223bdd7->contains($value)) {
            $this->quote_3223bdd7->removeElement($value);
        }
    }

    public function removePromotion28e348c7($value)
    {
        if ($this->promotion_28e348c7 && $this->promotion_28e348c7->contains($value)) {
            $this->promotion_28e348c7->removeElement($value);
        }
    }

    public function removeProductD11d8526($value)
    {
        if ($this->product_d11d8526 && $this->product_d11d8526->contains($value)) {
            $this->product_d11d8526->removeElement($value);
        }
    }

    public function removePriceListE9fb82b7($value)
    {
        if ($this->price_list_e9fb82b7 && $this->price_list_e9fb82b7->contains($value)) {
            $this->price_list_e9fb82b7->removeElement($value);
        }
    }

    public function removePaymentTerm65600a36($value)
    {
        if ($this->payment_term_65600a36 && $this->payment_term_65600a36->contains($value)) {
            $this->payment_term_65600a36->removeElement($value);
        }
    }

    public function removePaymentMethodsConfigsRule3bf8215($value)
    {
        if ($this->payment_methods_configs_rule_3bf8215 && $this->payment_methods_configs_rule_3bf8215->contains($value)) {
            $this->payment_methods_configs_rule_3bf8215->removeElement($value);
        }
    }

    public function removeOrder9df4facb($value)
    {
        if ($this->order_9df4facb && $this->order_9df4facb->contains($value)) {
            $this->order_9df4facb->removeElement($value);
        }
    }

    /**
     * @deprecated since 1.10. Use removeOrder6c2e5da instead
     */
    public function removeOrder6c2e5dae($value)
    {
        $this->removeOrder6c2e5da($value);
    }

    public function removeOrder6c2e5da($value)
    {
        if ($this->order_6c2e5dae && $this->order_6c2e5dae->contains($value)) {
            $this->order_6c2e5dae->removeElement($value);
        }
    }

    public function removeOpportunity18f1cc2e($value)
    {
        if ($this->opportunity_18f1cc2e && $this->opportunity_18f1cc2e->contains($value)) {
            $this->opportunity_18f1cc2e->removeElement($value);
        }
    }

    public function removeLead4506e71e($value)
    {
        if ($this->lead_4506e71e && $this->lead_4506e71e->contains($value)) {
            $this->lead_4506e71e->removeElement($value);
        }
    }

    public function removeEmail876d0578($value)
    {
        if ($this->email_876d0578 && $this->email_876d0578->contains($value)) {
            $this->email_876d0578->removeElement($value);
        }
    }

    public function removeCustomerUserRole29160e3b($value)
    {
        if ($this->customer_user_role_29160e3b && $this->customer_user_role_29160e3b->contains($value)) {
            $this->customer_user_role_29160e3b->removeElement($value);
        }
    }

    public function removeCustomerUser18bc0561($value)
    {
        if ($this->customer_user_18bc0561 && $this->customer_user_18bc0561->contains($value)) {
            $this->customer_user_18bc0561->removeElement($value);
        }
    }

    public function removeCustomerGroup58e0c3ec($value)
    {
        if ($this->customer_group_58e0c3ec && $this->customer_group_58e0c3ec->contains($value)) {
            $this->customer_group_58e0c3ec->removeElement($value);
        }
    }

    public function removeCustomerA39e600f($value)
    {
        if ($this->customer_a39e600f && $this->customer_a39e600f->contains($value)) {
            $this->customer_a39e600f->removeElement($value);
        }
    }

    public function removeCustomer2a5d7b7($value)
    {
        if ($this->customer_2a5d7b7 && $this->customer_2a5d7b7->contains($value)) {
            $this->customer_2a5d7b7->removeElement($value);
        }
    }

    public function removeCreditMemoF88048b4($value)
    {
        if ($this->credit_memo_f88048b4 && $this->credit_memo_f88048b4->contains($value)) {
            $this->credit_memo_f88048b4->removeElement($value);
        }
    }

    public function removeContentNodeAab19b9c($value)
    {
        if ($this->content_node_aab19b9c && $this->content_node_aab19b9c->contains($value)) {
            $this->content_node_aab19b9c->removeElement($value);
        }
    }

    public function removeContactRequestAeac8609($value)
    {
        if ($this->contact_request_aeac8609 && $this->contact_request_aeac8609->contains($value)) {
            $this->contact_request_aeac8609->removeElement($value);
        }
    }

    public function removeContact6de8dc04($value)
    {
        if ($this->contact_6de8dc04 && $this->contact_6de8dc04->contains($value)) {
            $this->contact_6de8dc04->removeElement($value);
        }
    }

    public function removeCategoryB9857d64($value)
    {
        if ($this->category_b9857d64 && $this->category_b9857d64->contains($value)) {
            $this->category_b9857d64->removeElement($value);
        }
    }

    public function removeCaseEntity21c63d4b($value)
    {
        if ($this->case_entity_21c63d4b && $this->case_entity_21c63d4b->contains($value)) {
            $this->case_entity_21c63d4b->removeElement($value);
        }
    }

    public function removeCartB792365($value)
    {
        if ($this->cart_b792365 && $this->cart_b792365->contains($value)) {
            $this->cart_b792365->removeElement($value);
        }
    }

    public function removeB2bCustomerFbb959fd($value)
    {
        if ($this->b2b_customer_fbb959fd && $this->b2b_customer_fbb959fd->contains($value)) {
            $this->b2b_customer_fbb959fd->removeElement($value);
        }
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') {
            if ($this->email_876d0578->contains($target)) { $this->email_876d0578->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if ($this->user_10c9f691->contains($target)) { $this->user_10c9f691->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') {
            if ($this->website_ce03e960->contains($target)) { $this->website_ce03e960->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_6de8dc04->contains($target)) { $this->contact_6de8dc04->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') {
            if ($this->content_node_aab19b9c->contains($target)) { $this->content_node_aab19b9c->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') {
            if ($this->web_catalog_417b3f1e->contains($target)) { $this->web_catalog_417b3f1e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') {
            if ($this->product_d11d8526->contains($target)) { $this->product_d11d8526->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') {
            if ($this->category_b9857d64->contains($target)) { $this->category_b9857d64->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') {
            if ($this->customer_2a5d7b7->contains($target)) { $this->customer_2a5d7b7->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') {
            if ($this->customer_group_58e0c3ec->contains($target)) { $this->customer_group_58e0c3ec->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') {
            if ($this->customer_user_18bc0561->contains($target)) { $this->customer_user_18bc0561->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') {
            if ($this->customer_user_role_29160e3b->contains($target)) { $this->customer_user_role_29160e3b->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_a8bedd11->contains($target)) { $this->account_a8bedd11->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') {
            if ($this->payment_methods_configs_rule_3bf8215->contains($target)) { $this->payment_methods_configs_rule_3bf8215->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') {
            if ($this->task_dec81c8b->contains($target)) { $this->task_dec81c8b->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') {
            if ($this->payment_term_65600a36->contains($target)) { $this->payment_term_65600a36->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') {
            if ($this->price_list_e9fb82b7->contains($target)) { $this->price_list_e9fb82b7->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') {
            if ($this->request_ead8a7c0->contains($target)) { $this->request_ead8a7c0->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_fbb959fd->contains($target)) { $this->b2b_customer_fbb959fd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_4506e71e->contains($target)) { $this->lead_4506e71e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_18f1cc2e->contains($target)) { $this->opportunity_18f1cc2e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') {
            if ($this->contact_request_aeac8609->contains($target)) { $this->contact_request_aeac8609->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') {
            if ($this->cart_b792365->contains($target)) { $this->cart_b792365->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') {
            if ($this->credit_memo_f88048b4->contains($target)) { $this->credit_memo_f88048b4->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') {
            if ($this->customer_a39e600f->contains($target)) { $this->customer_a39e600f->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') {
            if ($this->order_9df4facb->contains($target)) { $this->order_9df4facb->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') {
            if ($this->order_6c2e5dae->contains($target)) { $this->order_6c2e5dae->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') {
            if ($this->quote_3223bdd7->contains($target)) { $this->quote_3223bdd7->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_21c63d4b->contains($target)) { $this->case_entity_21c63d4b->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') {
            if ($this->promotion_28e348c7->contains($target)) { $this->promotion_28e348c7->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') {
            if ($this->shipping_methods_configs_rule_ac4a88bd->contains($target)) { $this->shipping_methods_configs_rule_ac4a88bd->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function removeAccountA8bedd11($value)
    {
        if ($this->account_a8bedd11 && $this->account_a8bedd11->contains($value)) {
            $this->account_a8bedd11->removeElement($value);
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return $this->email_876d0578->contains($target); }
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_10c9f691->contains($target); }
        if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') { return $this->website_ce03e960->contains($target); }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_6de8dc04->contains($target); }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') { return $this->content_node_aab19b9c->contains($target); }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') { return $this->web_catalog_417b3f1e->contains($target); }
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') { return $this->product_d11d8526->contains($target); }
        if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') { return $this->category_b9857d64->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { return $this->customer_2a5d7b7->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') { return $this->customer_group_58e0c3ec->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return $this->customer_user_18bc0561->contains($target); }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') { return $this->customer_user_role_29160e3b->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_a8bedd11->contains($target); }
        if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') { return $this->payment_methods_configs_rule_3bf8215->contains($target); }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return $this->task_dec81c8b->contains($target); }
        if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') { return $this->payment_term_65600a36->contains($target); }
        if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') { return $this->price_list_e9fb82b7->contains($target); }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return $this->request_ead8a7c0->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_fbb959fd->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_4506e71e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_18f1cc2e->contains($target); }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return $this->contact_request_aeac8609->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') { return $this->cart_b792365->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') { return $this->credit_memo_f88048b4->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_a39e600f->contains($target); }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_9df4facb->contains($target); }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return $this->order_6c2e5dae->contains($target); }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return $this->quote_3223bdd7->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_21c63d4b->contains($target); }
        if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') { return $this->promotion_28e348c7->contains($target); }
        if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') { return $this->shipping_methods_configs_rule_ac4a88bd->contains($target); }
        return false;
    }

    public function getWebsiteCe03e960()
    {
        return $this->website_ce03e960;
    }

    public function getWebCatalog417b3f1e()
    {
        return $this->web_catalog_417b3f1e;
    }

    public function getUser10c9f691()
    {
        return $this->user_10c9f691;
    }

    public function getTaskDec81c8b()
    {
        return $this->task_dec81c8b;
    }

    public function getShippingMethodsConfigsRuleAc4a88bd()
    {
        return $this->shipping_methods_configs_rule_ac4a88bd;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getRequestEad8a7c0()
    {
        return $this->request_ead8a7c0;
    }

    public function getQuote3223bdd7()
    {
        return $this->quote_3223bdd7;
    }

    public function getPromotion28e348c7()
    {
        return $this->promotion_28e348c7;
    }

    public function getProductD11d8526()
    {
        return $this->product_d11d8526;
    }

    public function getPriceListE9fb82b7()
    {
        return $this->price_list_e9fb82b7;
    }

    public function getPaymentTerm65600a36()
    {
        return $this->payment_term_65600a36;
    }

    public function getPaymentMethodsConfigsRule3bf8215()
    {
        return $this->payment_methods_configs_rule_3bf8215;
    }

    public function getOrder9df4facb()
    {
        return $this->order_9df4facb;
    }

    public function getOrder6c2e5dae()
    {
        return $this->order_6c2e5dae;
    }

    public function getOpportunity18f1cc2e()
    {
        return $this->opportunity_18f1cc2e;
    }

    public function getLead4506e71e()
    {
        return $this->lead_4506e71e;
    }

    public function getEmail876d0578()
    {
        return $this->email_876d0578;
    }

    public function getCustomerUserRole29160e3b()
    {
        return $this->customer_user_role_29160e3b;
    }

    public function getCustomerUser18bc0561()
    {
        return $this->customer_user_18bc0561;
    }

    public function getCustomerGroup58e0c3ec()
    {
        return $this->customer_group_58e0c3ec;
    }

    public function getCustomerA39e600f()
    {
        return $this->customer_a39e600f;
    }

    public function getCustomer2a5d7b7()
    {
        return $this->customer_2a5d7b7;
    }

    public function getCreditMemoF88048b4()
    {
        return $this->credit_memo_f88048b4;
    }

    public function getContentNodeAab19b9c()
    {
        return $this->content_node_aab19b9c;
    }

    public function getContactRequestAeac8609()
    {
        return $this->contact_request_aeac8609;
    }

    public function getContact6de8dc04()
    {
        return $this->contact_6de8dc04;
    }

    public function getCategoryB9857d64()
    {
        return $this->category_b9857d64;
    }

    public function getCaseEntity21c63d4b()
    {
        return $this->case_entity_21c63d4b;
    }

    public function getCartB792365()
    {
        return $this->cart_b792365;
    }

    public function getB2bCustomerFbb959fd()
    {
        return $this->b2b_customer_fbb959fd;
    }

    /**
     * Gets entities associated with this entity
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityListTargets($targetClass = NULL)
    {
        if (null === $targetClass) {
            $targets = [];
            $entities = $this->email_876d0578->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->user_10c9f691->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->website_ce03e960->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_6de8dc04->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->content_node_aab19b9c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->web_catalog_417b3f1e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->product_d11d8526->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->category_b9857d64->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_2a5d7b7->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_group_58e0c3ec->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_user_18bc0561->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_user_role_29160e3b->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_a8bedd11->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->payment_methods_configs_rule_3bf8215->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->task_dec81c8b->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->payment_term_65600a36->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->price_list_e9fb82b7->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->request_ead8a7c0->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->b2b_customer_fbb959fd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_4506e71e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_18f1cc2e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_request_aeac8609->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->cart_b792365->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->credit_memo_f88048b4->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->customer_a39e600f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->order_9df4facb->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->order_6c2e5dae->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->quote_3223bdd7->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_21c63d4b->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->promotion_28e348c7->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->shipping_methods_configs_rule_ac4a88bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return $this->email_876d0578; }
            if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_10c9f691; }
            if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') { return $this->website_ce03e960; }
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_6de8dc04; }
            if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') { return $this->content_node_aab19b9c; }
            if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') { return $this->web_catalog_417b3f1e; }
            if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') { return $this->product_d11d8526; }
            if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') { return $this->category_b9857d64; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') { return $this->customer_2a5d7b7; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') { return $this->customer_group_58e0c3ec; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') { return $this->customer_user_18bc0561; }
            if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') { return $this->customer_user_role_29160e3b; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_a8bedd11; }
            if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') { return $this->payment_methods_configs_rule_3bf8215; }
            if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return $this->task_dec81c8b; }
            if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') { return $this->payment_term_65600a36; }
            if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') { return $this->price_list_e9fb82b7; }
            if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') { return $this->request_ead8a7c0; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_fbb959fd; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_4506e71e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_18f1cc2e; }
            if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return $this->contact_request_aeac8609; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') { return $this->cart_b792365; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') { return $this->credit_memo_f88048b4; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') { return $this->customer_a39e600f; }
            if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') { return $this->order_9df4facb; }
            if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') { return $this->order_6c2e5dae; }
            if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') { return $this->quote_3223bdd7; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_21c63d4b; }
            if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') { return $this->promotion_28e348c7; }
            if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') { return $this->shipping_methods_configs_rule_ac4a88bd; }
            throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
        }
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     * @deprecated since 2.0. Method "getActivityListTargets" without parameters should be used instead of "getActivityListTargetEntities"
     */
    public function getActivityListTargetEntities()
    {
        $associationEntities = [];
        $entities = $this->email_876d0578->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->user_10c9f691->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->website_ce03e960->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->contact_6de8dc04->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->content_node_aab19b9c->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->web_catalog_417b3f1e->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->product_d11d8526->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->category_b9857d64->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_2a5d7b7->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_group_58e0c3ec->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_user_18bc0561->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_user_role_29160e3b->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->account_a8bedd11->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->payment_methods_configs_rule_3bf8215->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->task_dec81c8b->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->payment_term_65600a36->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->price_list_e9fb82b7->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->request_ead8a7c0->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->b2b_customer_fbb959fd->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->lead_4506e71e->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->opportunity_18f1cc2e->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->contact_request_aeac8609->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->cart_b792365->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->credit_memo_f88048b4->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->customer_a39e600f->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->order_9df4facb->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->order_6c2e5dae->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->quote_3223bdd7->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->case_entity_21c63d4b->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->promotion_28e348c7->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        $entities = $this->shipping_methods_configs_rule_ac4a88bd->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        return $associationEntities;
    }

    public function getAccountA8bedd11()
    {
        return $this->account_a8bedd11;
    }

    public function addWebsiteCe03e960($value)
    {
        if (!$this->website_ce03e960->contains($value)) {
            $this->website_ce03e960->add($value);
        }
    }

    public function addWebCatalog417b3f1e($value)
    {
        if (!$this->web_catalog_417b3f1e->contains($value)) {
            $this->web_catalog_417b3f1e->add($value);
        }
    }

    public function addUser10c9f691($value)
    {
        if (!$this->user_10c9f691->contains($value)) {
            $this->user_10c9f691->add($value);
        }
    }

    public function addTaskDec81c8b($value)
    {
        if (!$this->task_dec81c8b->contains($value)) {
            $this->task_dec81c8b->add($value);
        }
    }

    public function addShippingMethodsConfigsRuleAc4a88bd($value)
    {
        if (!$this->shipping_methods_configs_rule_ac4a88bd->contains($value)) {
            $this->shipping_methods_configs_rule_ac4a88bd->add($value);
        }
    }

    public function addRequestEad8a7c0($value)
    {
        if (!$this->request_ead8a7c0->contains($value)) {
            $this->request_ead8a7c0->add($value);
        }
    }

    public function addQuote3223bdd7($value)
    {
        if (!$this->quote_3223bdd7->contains($value)) {
            $this->quote_3223bdd7->add($value);
        }
    }

    public function addPromotion28e348c7($value)
    {
        if (!$this->promotion_28e348c7->contains($value)) {
            $this->promotion_28e348c7->add($value);
        }
    }

    public function addProductD11d8526($value)
    {
        if (!$this->product_d11d8526->contains($value)) {
            $this->product_d11d8526->add($value);
        }
    }

    public function addPriceListE9fb82b7($value)
    {
        if (!$this->price_list_e9fb82b7->contains($value)) {
            $this->price_list_e9fb82b7->add($value);
        }
    }

    public function addPaymentTerm65600a36($value)
    {
        if (!$this->payment_term_65600a36->contains($value)) {
            $this->payment_term_65600a36->add($value);
        }
    }

    public function addPaymentMethodsConfigsRule3bf8215($value)
    {
        if (!$this->payment_methods_configs_rule_3bf8215->contains($value)) {
            $this->payment_methods_configs_rule_3bf8215->add($value);
        }
    }

    public function addOrder9df4facb($value)
    {
        if (!$this->order_9df4facb->contains($value)) {
            $this->order_9df4facb->add($value);
        }
    }

    /**
     * @deprecated since 1.10. Use addOrder6c2e5da instead
     */
    public function addOrder6c2e5dae($value)
    {
        $this->addOrder6c2e5da($value);
    }

    public function addOrder6c2e5da($value)
    {
        if (!$this->order_6c2e5dae->contains($value)) {
            $this->order_6c2e5dae->add($value);
        }
    }

    public function addOpportunity18f1cc2e($value)
    {
        if (!$this->opportunity_18f1cc2e->contains($value)) {
            $this->opportunity_18f1cc2e->add($value);
        }
    }

    public function addLead4506e71e($value)
    {
        if (!$this->lead_4506e71e->contains($value)) {
            $this->lead_4506e71e->add($value);
        }
    }

    public function addEmail876d0578($value)
    {
        if (!$this->email_876d0578->contains($value)) {
            $this->email_876d0578->add($value);
        }
    }

    public function addCustomerUserRole29160e3b($value)
    {
        if (!$this->customer_user_role_29160e3b->contains($value)) {
            $this->customer_user_role_29160e3b->add($value);
        }
    }

    public function addCustomerUser18bc0561($value)
    {
        if (!$this->customer_user_18bc0561->contains($value)) {
            $this->customer_user_18bc0561->add($value);
        }
    }

    public function addCustomerGroup58e0c3ec($value)
    {
        if (!$this->customer_group_58e0c3ec->contains($value)) {
            $this->customer_group_58e0c3ec->add($value);
        }
    }

    public function addCustomerA39e600f($value)
    {
        if (!$this->customer_a39e600f->contains($value)) {
            $this->customer_a39e600f->add($value);
        }
    }

    public function addCustomer2a5d7b7($value)
    {
        if (!$this->customer_2a5d7b7->contains($value)) {
            $this->customer_2a5d7b7->add($value);
        }
    }

    public function addCreditMemoF88048b4($value)
    {
        if (!$this->credit_memo_f88048b4->contains($value)) {
            $this->credit_memo_f88048b4->add($value);
        }
    }

    public function addContentNodeAab19b9c($value)
    {
        if (!$this->content_node_aab19b9c->contains($value)) {
            $this->content_node_aab19b9c->add($value);
        }
    }

    public function addContactRequestAeac8609($value)
    {
        if (!$this->contact_request_aeac8609->contains($value)) {
            $this->contact_request_aeac8609->add($value);
        }
    }

    public function addContact6de8dc04($value)
    {
        if (!$this->contact_6de8dc04->contains($value)) {
            $this->contact_6de8dc04->add($value);
        }
    }

    public function addCategoryB9857d64($value)
    {
        if (!$this->category_b9857d64->contains($value)) {
            $this->category_b9857d64->add($value);
        }
    }

    public function addCaseEntity21c63d4b($value)
    {
        if (!$this->case_entity_21c63d4b->contains($value)) {
            $this->case_entity_21c63d4b->add($value);
        }
    }

    public function addCartB792365($value)
    {
        if (!$this->cart_b792365->contains($value)) {
            $this->cart_b792365->add($value);
        }
    }

    public function addB2bCustomerFbb959fd($value)
    {
        if (!$this->b2b_customer_fbb959fd->contains($value)) {
            $this->b2b_customer_fbb959fd->add($value);
        }
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') {
            if (!$this->email_876d0578->contains($target)) { $this->email_876d0578->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if (!$this->user_10c9f691->contains($target)) { $this->user_10c9f691->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebsiteBundle\Entity\Website') {
            if (!$this->website_ce03e960->contains($target)) { $this->website_ce03e960->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_6de8dc04->contains($target)) { $this->contact_6de8dc04->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\ContentNode') {
            if (!$this->content_node_aab19b9c->contains($target)) { $this->content_node_aab19b9c->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\WebCatalogBundle\Entity\WebCatalog') {
            if (!$this->web_catalog_417b3f1e->contains($target)) { $this->web_catalog_417b3f1e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ProductBundle\Entity\Product') {
            if (!$this->product_d11d8526->contains($target)) { $this->product_d11d8526->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CatalogBundle\Entity\Category') {
            if (!$this->category_b9857d64->contains($target)) { $this->category_b9857d64->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\Customer') {
            if (!$this->customer_2a5d7b7->contains($target)) { $this->customer_2a5d7b7->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerGroup') {
            if (!$this->customer_group_58e0c3ec->contains($target)) { $this->customer_group_58e0c3ec->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUser') {
            if (!$this->customer_user_18bc0561->contains($target)) { $this->customer_user_18bc0561->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CustomerBundle\Entity\CustomerUserRole') {
            if (!$this->customer_user_role_29160e3b->contains($target)) { $this->customer_user_role_29160e3b->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_a8bedd11->contains($target)) { $this->account_a8bedd11->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule') {
            if (!$this->payment_methods_configs_rule_3bf8215->contains($target)) { $this->payment_methods_configs_rule_3bf8215->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') {
            if (!$this->task_dec81c8b->contains($target)) { $this->task_dec81c8b->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm') {
            if (!$this->payment_term_65600a36->contains($target)) { $this->payment_term_65600a36->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PricingBundle\Entity\PriceList') {
            if (!$this->price_list_e9fb82b7->contains($target)) { $this->price_list_e9fb82b7->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\RFPBundle\Entity\Request') {
            if (!$this->request_ead8a7c0->contains($target)) { $this->request_ead8a7c0->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_fbb959fd->contains($target)) { $this->b2b_customer_fbb959fd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_4506e71e->contains($target)) { $this->lead_4506e71e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_18f1cc2e->contains($target)) { $this->opportunity_18f1cc2e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') {
            if (!$this->contact_request_aeac8609->contains($target)) { $this->contact_request_aeac8609->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Cart') {
            if (!$this->cart_b792365->contains($target)) { $this->cart_b792365->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\CreditMemo') {
            if (!$this->credit_memo_f88048b4->contains($target)) { $this->credit_memo_f88048b4->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Customer') {
            if (!$this->customer_a39e600f->contains($target)) { $this->customer_a39e600f->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\MagentoBundle\Entity\Order') {
            if (!$this->order_9df4facb->contains($target)) { $this->order_9df4facb->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\OrderBundle\Entity\Order') {
            if (!$this->order_6c2e5dae->contains($target)) { $this->order_6c2e5dae->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SaleBundle\Entity\Quote') {
            if (!$this->quote_3223bdd7->contains($target)) { $this->quote_3223bdd7->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_21c63d4b->contains($target)) { $this->case_entity_21c63d4b->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\PromotionBundle\Entity\Promotion') {
            if (!$this->promotion_28e348c7->contains($target)) { $this->promotion_28e348c7->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule') {
            if (!$this->shipping_methods_configs_rule_ac4a88bd->contains($target)) { $this->shipping_methods_configs_rule_ac4a88bd->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function addAccountA8bedd11($value)
    {
        if (!$this->account_a8bedd11->contains($value)) {
            $this->account_a8bedd11->add($value);
        }
    }

    public function __construct()
    {
        $this->email_876d0578 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_10c9f691 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->website_ce03e960 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_6de8dc04 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->content_node_aab19b9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->web_catalog_417b3f1e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product_d11d8526 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category_b9857d64 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_2a5d7b7 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_group_58e0c3ec = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_user_18bc0561 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_user_role_29160e3b = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_a8bedd11 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->payment_methods_configs_rule_3bf8215 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->task_dec81c8b = new \Doctrine\Common\Collections\ArrayCollection();
        $this->payment_term_65600a36 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->price_list_e9fb82b7 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->request_ead8a7c0 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_fbb959fd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_4506e71e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_18f1cc2e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_request_aeac8609 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cart_b792365 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->credit_memo_f88048b4 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer_a39e600f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->order_9df4facb = new \Doctrine\Common\Collections\ArrayCollection();
        $this->order_6c2e5dae = new \Doctrine\Common\Collections\ArrayCollection();
        $this->quote_3223bdd7 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_21c63d4b = new \Doctrine\Common\Collections\ArrayCollection();
        $this->promotion_28e348c7 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shipping_methods_configs_rule_ac4a88bd = new \Doctrine\Common\Collections\ArrayCollection();
    }
}