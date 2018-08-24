<?php

/* OroMagentoBundle:Cart/widget:info.html.twig */
class __TwigTemplate_cb1f0cc970ca8bbe26e6502253c7493d247173481f854df0c6fb065aaa9dd411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Cart/widget:info.html.twig", 1);
        // line 2
        $context["address"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroMagentoBundle:Cart/widget:info.html.twig", 2);
        // line 3
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroMagentoBundle:Cart/widget:info.html.twig", 3);
        // line 4
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroMagentoBundle:Cart/widget:info.html.twig", 4);
        // line 5
        $context["channel"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroMagentoBundle:Cart/widget:info.html.twig", 5);
        // line 6
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 10
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.email.label"), $context["email"]->getrenderEmailWithActions($this->getAttribute(($context["entity"] ?? null), "email", array()), (($this->getAttribute(($context["entity"] ?? null), "customer", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "contact", array())) : (null))));
        echo "

            ";
        // line 12
        echo $context["channel"]->getrenderChannelProperty(($context["entity"] ?? null), "oro.magento.cart.data_channel.label");
        echo "

            ";
        // line 14
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.items_qty.label"), $this->getAttribute(($context["entity"] ?? null), "itemsQty", array()));
        echo "
            ";
        // line 15
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.status.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "status", array())));
        echo "
            ";
        // line 16
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.website.label"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "website", array()), "name", array()));
        echo "
            ";
        // line 17
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.store.label"), nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "name", array()))));
        echo "
            ";
        // line 18
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.imported_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "importedAt", array())));
        echo "
            ";
        // line 19
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.synced_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "syncedAt", array())));
        echo "

            ";
        // line 21
        if ($this->getAttribute(($context["entity"] ?? null), "opportunity", array())) {
            // line 22
            if (($this->getAttribute(($context["entity"] ?? null), "opportunity", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["entity"] ?? null), "opportunity", array())))) {
                // line 23
                $context["opportunityView"] = $context["ui"]->getrenderUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "opportunity", array()), "id", array()))), $context["ui"]->getrenderEntityViewLabel($this->getAttribute(($context["entity"] ?? null), "opportunity", array()), "name", "oro.sales.oportunity.entity_label"));
            } else {
                // line 25
                $context["opportunityView"] = $context["ui"]->getrenderEntityViewLabel($this->getAttribute(($context["entity"] ?? null), "opportunity", array()), "name");
            }
            // line 28
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.opportunity.label"), ($context["opportunityView"] ?? null));
            echo "
            ";
        }
        // line 30
        echo "            ";
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 34
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "billingAddress", array()))) {
            // line 35
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.billing_address.label"), $context["address"]->getrenderAddress($this->getAttribute(($context["entity"] ?? null), "billingAddress", array())));
            echo "
            ";
        }
        // line 37
        echo "            ";
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()))) {
            // line 38
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.shipping_address.label"), $context["address"]->getrenderAddress($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array())));
            echo "
            ";
        }
        // line 40
        echo "            ";
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "notes", array()))) {
            // line 41
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.notes.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "notes", array())));
            echo "
            ";
        }
        // line 43
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Cart/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  113 => 41,  110 => 40,  104 => 38,  101 => 37,  95 => 35,  93 => 34,  85 => 30,  80 => 28,  77 => 25,  74 => 23,  72 => 22,  70 => 21,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  40 => 12,  35 => 10,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Cart/widget:info.html.twig", "");
    }
}
