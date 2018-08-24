<?php

/* OroMagentoBundle:Order:searchResult.html.twig */
class __TwigTemplate_6a8402faa2c3bb09a73ab021ddc3577ca1b2f9380fdea620092255624bece2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroMagentoBundle:Order:searchResult.html.twig", 6);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        $context["showImage"] = false;
        // line 10
        $context["recordUrl"] = $this->getAttribute(($context["indexer_item"] ?? null), "recordUrl", array());
        // line 11
        $context["title"] = ((($context["entity"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.entity_number", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_label"), "%entityNumber%" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "incrementId", array())))) : ($this->getAttribute(        // line 13
($context["indexer_item"] ?? null), "recordTitle", array())));
        // line 16
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_label");
        // line 18
        ob_start();
        // line 19
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "customer", array())) {
            // line 20
            echo "        ";
            $context["customerViewGranted"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_magento_customer_view");
            // line 21
            if (($context["customerViewGranted"] ?? null)) {
                // line 22
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "customer", array())), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")));
                echo "</a>";
            } else {
                // line 24
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "customer", array())), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")));
            }
        } else {
            // line 27
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("N/A", array(), "messages");
            // line 28
            echo "    ";
        }
        $context["customerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        $context["entityInfo"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.channel.label"), "value" => (((($this->getAttribute($this->getAttribute(        // line 32
($context["entity"] ?? null), "customer", array(), "any", false, true), "channel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array(), "any", false, true), "channel", array()), false)) : (false))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "channel", array()), "name", array())) : ("N/A"))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.website.label"), "value" => (((($this->getAttribute($this->getAttribute(        // line 33
($context["entity"] ?? null), "customer", array(), "any", false, true), "website", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array(), "any", false, true), "website", array()), false)) : (false))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "website", array()), "name", array())) : ("N/A"))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.store.label"), "value" => (((($this->getAttribute($this->getAttribute(        // line 34
($context["entity"] ?? null), "customer", array(), "any", false, true), "store", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array(), "any", false, true), "store", array()), false)) : (false))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "store", array()), "name", array())) : ("N/A"))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.customer.label"), "value" =>         // line 35
($context["customerData"] ?? null)), 4 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "value" => (($this->getAttribute(        // line 36
($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"))), 5 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "value" => (($this->getAttribute(        // line 37
($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"))), 6 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.grand_total.label"), "value" => (($this->getAttribute(        // line 38
($context["entity"] ?? null), "totalAmount", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "totalAmount", array()))) : ("N/A"))), 7 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.sub_total.label"), "value" => (($this->getAttribute(        // line 39
($context["entity"] ?? null), "subtotalAmount", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "subtotalAmount", array()))) : ("N/A"))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  70 => 39,  69 => 38,  68 => 37,  67 => 36,  66 => 35,  65 => 34,  64 => 33,  63 => 32,  62 => 31,  58 => 28,  55 => 27,  51 => 24,  44 => 22,  42 => 21,  39 => 20,  36 => 19,  34 => 18,  32 => 16,  30 => 13,  29 => 12,  28 => 11,  26 => 10,  24 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order:searchResult.html.twig", "");
    }
}
