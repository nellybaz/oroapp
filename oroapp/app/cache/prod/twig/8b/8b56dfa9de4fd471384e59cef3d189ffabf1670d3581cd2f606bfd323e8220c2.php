<?php

/* OroCustomerBundle:Customer/widget:info.html.twig */
class __TwigTemplate_2b1641bd5d96c295aee0205a75fdc8481df1bdb1b71e1964a107e7556b33c051 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCustomerBundle:Customer/widget:info.html.twig", 1);
        // line 2
        $context["EmailActions"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroCustomerBundle:Customer/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCustomerBundle:Customer/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
            ";
        // line 9
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A")));
        echo "
            ";
        // line 10
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A")));
        echo "

            ";
        // line 12
        if ($this->getAttribute(($context["entity"] ?? null), "group", array())) {
            // line 13
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.group.label"),             // line 15
$context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "group", array()), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "group", array()), "name", array()), "oro_customer_customer_group_view"));
            // line 16
            echo "
            ";
        }
        // line 18
        echo "
            ";
        // line 19
        if ($this->getAttribute(($context["entity"] ?? null), "parent", array())) {
            // line 20
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.parent.label"),             // line 22
$context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "parent", array()), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "parent", array()), "name", array()), "oro_customer_customer_view"));
            // line 23
            echo "
            ";
        }
        // line 25
        echo "
            ";
        // line 26
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "users", array()))) {
            // line 27
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.users.label"), $context["UI"]->getentityViewLinks($this->getAttribute(($context["entity"] ?? null), "users", array()), "fullName", "oro_customer_customer_user_view"));
            echo "
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "salesRepresentatives", array()))) {
            // line 31
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.sales_representatives.label"), $context["UI"]->getentityViewLinks($this->getAttribute(($context["entity"] ?? null), "salesRepresentatives", array()), "fullName", "oro_user_view"));
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "children", array()), "count", array(), "method")) {
            // line 35
            echo "                ";
            ob_start();
            // line 36
            echo "                    <div class=\"customer-children\">
                        ";
            // line 37
            echo $context["UI"]->getrenderJsTree(array("disableSearch" => true, "disableActions" => true, "treeOptions" => array("data" =>             // line 41
($context["treeData"] ?? null))));
            // line 43
            echo "
                    </div>
                ";
            $context["customerTree"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.children.label"), ($context["customerTree"] ?? null));
            echo "
            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if (($this->getAttribute(($context["entity"] ?? null), "getInternalRating", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["entity"] ?? null), "getInternalRating", array())))) {
            // line 50
            echo "                ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.internal_rating.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "getInternalRating", array()), "name", array()));
            echo "
            ";
        }
        // line 52
        echo "
            ";
        // line 53
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Customer/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  125 => 52,  119 => 50,  117 => 49,  114 => 48,  108 => 46,  103 => 43,  101 => 41,  100 => 37,  97 => 36,  94 => 35,  92 => 34,  89 => 33,  83 => 31,  81 => 30,  78 => 29,  72 => 27,  70 => 26,  67 => 25,  63 => 23,  61 => 22,  59 => 20,  57 => 19,  54 => 18,  50 => 16,  48 => 15,  46 => 13,  44 => 12,  39 => 10,  35 => 9,  31 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Customer/widget:info.html.twig", "");
    }
}
