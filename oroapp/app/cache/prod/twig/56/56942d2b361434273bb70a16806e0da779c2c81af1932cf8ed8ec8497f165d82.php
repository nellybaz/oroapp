<?php

/* OroSalesBundle:B2bCustomer/widget:info.html.twig */
class __TwigTemplate_73f81127cdcaf48890376220cc6a7a6aea600add80a1dce0efb9f826e332db5d extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:B2bCustomer/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroSalesBundle:B2bCustomer/widget:info.html.twig", 2);
        // line 3
        $context["address"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroSalesBundle:B2bCustomer/widget:info.html.twig", 3);
        // line 4
        $context["channel"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroSalesBundle:B2bCustomer/widget:info.html.twig", 4);
        // line 5
        $context["sales"] = $this->loadTemplate("OroSalesBundle::macros.html.twig", "OroSalesBundle:B2bCustomer/widget:info.html.twig", 5);
        // line 6
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 10
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "

            ";
        // line 12
        echo $context["channel"]->getrenderChannelProperty(($context["entity"] ?? null), "oro.sales.b2bcustomer.data_channel.label");
        // line 14
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_account_view") && $this->getAttribute(($context["entity"] ?? null), "account", array()))) {
            // line 15
            $context["accountView"] = (((("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "account", array()), "id", array())))) . "\">") . $context["UI"]->getrenderEntityViewLabel($this->getAttribute(($context["entity"] ?? null), "account", array()), "name", "oro.account.entity_label")) . "</a>");
        } else {
            // line 17
            $context["accountView"] = $context["UI"]->getrenderEntityViewLabel($this->getAttribute(($context["entity"] ?? null), "account", array()), "name");
        }
        // line 19
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.account.label"), ($context["accountView"] ?? null));
        echo "
            ";
        // line 20
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.phones.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "phones", array()), "count", array())) ? ($context["sales"]->getrenderCollectionWithPrimaryElement($this->getAttribute(($context["entity"] ?? null), "phones", array()), false, ($context["entity"] ?? null))) : (null)));
        echo "
            ";
        // line 21
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.emails.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emails", array()), "count", array())) ? ($context["sales"]->getrenderCollectionWithPrimaryElement($this->getAttribute(($context["entity"] ?? null), "emails", array()), true, ($context["entity"] ?? null))) : (null)));
        echo "
            ";
        // line 22
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.contact.label"),         // line 24
$context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "contact", array()), (($this->getAttribute(($context["entity"] ?? null), "contact", array())) ? ($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "contact", array()))) : ("")), "oro_contact_view"));
        // line 25
        echo "

            ";
        // line 27
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "billingAddress", array()))) {
            // line 28
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.billing_address.label"), $context["address"]->getrenderAddress($this->getAttribute(($context["entity"] ?? null), "billingAddress", array())));
            echo "
            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()))) {
            // line 32
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.shipping_address.label"), $context["address"]->getrenderAddress($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array())));
            echo "
            ";
        }
        // line 34
        echo "        </div>
        <div class=\"responsive-block\">
            ";
        // line 36
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:B2bCustomer/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  88 => 34,  82 => 32,  80 => 31,  77 => 30,  71 => 28,  69 => 27,  65 => 25,  63 => 24,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  47 => 17,  44 => 15,  42 => 14,  40 => 12,  35 => 10,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:B2bCustomer/widget:info.html.twig", "");
    }
}
