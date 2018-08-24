<?php

/* OroSaleBundle:Quote/widget:info.html.twig */
class __TwigTemplate_b10516b2bd7c9139f0e59a8cd0058fdccaa2a162b2a44c42c59ea16987eb6906 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSaleBundle:Quote/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroSaleBundle:Quote/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.qid.label"), $this->getAttribute(($context["entity"] ?? null), "qid", array()));
        echo "
            ";
        // line 8
        if ($this->getAttribute(($context["entity"] ?? null), "customerUser", array())) {
            // line 9
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.customer_user.label"), $context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customerUser", array()), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customerUser", array()), "fullName", array()), "oro_customer_customer_user_view"));
            echo "
            ";
        }
        // line 11
        echo "            ";
        if ($this->getAttribute(($context["entity"] ?? null), "customer", array())) {
            // line 12
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.customer.label"), $context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customer", array()), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "name", array()), "oro_customer_customer_view"));
            echo "
            ";
        }
        // line 14
        echo "
            ";
        // line 15
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.internal_status.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "internalStatus", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "internalStatus", array(), "any", false, true), "name", array()), "")) : ("")));
        echo "
            ";
        // line 16
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.customer_status.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customerStatus", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customerStatus", array(), "any", false, true), "name", array()), "")) : ("")));
        echo "
            
            ";
        // line 18
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.valid_until.label"), (($this->getAttribute(($context["entity"] ?? null), "validUntil", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "validUntil", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        echo "
            ";
        // line 19
        if ($this->getAttribute(($context["entity"] ?? null), "request", array())) {
            // line 20
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.request.label"), $context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "request", array()), $this->getAttribute(($context["entity"] ?? null), "request", array()), "oro_rfp_request_view"));
            echo "
            ";
        }
        // line 22
        echo "            ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.po_number.label"), (($this->getAttribute(($context["entity"] ?? null), "poNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "poNumber", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        echo "
            ";
        // line 23
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.ship_until.label"), _twig_default_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "shipUntil", array())), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")));
        echo "

            ";
        // line 25
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "assignedUsers", array()))) {
            // line 26
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.assigned_users.label"), $context["UI"]->getentityViewLinks($this->getAttribute(($context["entity"] ?? null), "assignedUsers", array()), "fullName", "oro_user_view"));
            echo "
            ";
        }
        // line 28
        echo "            ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "assignedCustomerUsers", array()))) {
            // line 29
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.assigned_customer_users.label"), $context["UI"]->getentityViewLinks($this->getAttribute(($context["entity"] ?? null), "assignedCustomerUsers", array()), "fullName", "oro_customer_customer_user_view"));
            echo "
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"responsive-block\">
            ";
        // line 33
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:Quote/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  101 => 31,  95 => 29,  92 => 28,  86 => 26,  84 => 25,  79 => 23,  74 => 22,  68 => 20,  66 => 19,  62 => 18,  57 => 16,  53 => 15,  50 => 14,  44 => 12,  41 => 11,  35 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:Quote/widget:info.html.twig", "");
    }
}
