<?php

/* OroCustomerBundle:layouts/default/imports/oro_customer_user_role_permission_grid:layout.html.twig */
class __TwigTemplate_170f658a40d562e5010e078bf1f0b23159360f64d2ea1760a70b2d8738007f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_user_role_permission_grid__datagrid_widget' => array($this, 'block___oro_customer_user_role_permission_grid__datagrid_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_user_role_permission_grid__datagrid_widget', $context, $blocks);
    }

    public function block___oro_customer_user_role_permission_grid__datagrid_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCustomerBundle:layouts/default/imports/oro_customer_user_role_permission_grid:layout.html.twig", 2);
        // line 3
        echo "
    ";
        // line 4
        $context["tabsOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute(($context["options"] ?? null), "tabsOptions", array()), array("useDropdown" => true));
        // line 7
        echo "
    ";
        // line 8
        $context["capabilitySetOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute(($context["options"] ?? null), "capabilitySetOptions", array()), array("readonly" => (($this->getAttribute(        // line 9
($context["options"] ?? null), "readonly", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "readonly", array()), false)) : (false))));
        // line 11
        echo "
    <div ";
        // line 12
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orouser/js/components/role/entity-category-tabs-component", "options" =>         // line 14
($context["tabsOptions"] ?? null)));
        // line 15
        echo "></div>

    ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "

    <div class=\"role-capability-set\" ";
        // line 19
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orouser/js/components/role/capability-set-component", "options" =>         // line 21
($context["capabilitySetOptions"] ?? null)));
        // line 22
        echo "></div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/imports/oro_customer_user_role_permission_grid:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 22,  56 => 21,  55 => 19,  50 => 17,  46 => 15,  44 => 14,  43 => 12,  40 => 11,  38 => 9,  37 => 8,  34 => 7,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/imports/oro_customer_user_role_permission_grid:layout.html.twig", "");
    }
}
