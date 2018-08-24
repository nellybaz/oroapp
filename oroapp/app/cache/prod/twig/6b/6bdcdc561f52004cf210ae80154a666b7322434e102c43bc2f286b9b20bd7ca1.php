<?php

/* OroCustomerBundle:layouts/default/imports/oro_customer_user_role_form:layout.html.twig */
class __TwigTemplate_5df47ad12352e5595dff71797e88a5a8836eb5547af032c5940a783ce8073d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_user_role_form__customer_user_role_container_widget' => array($this, 'block___oro_customer_user_role_form__customer_user_role_container_widget'),
            '__oro_customer_user_role_form__customer_user_role_form_actions_top_widget' => array($this, 'block___oro_customer_user_role_form__customer_user_role_form_actions_top_widget'),
            '__oro_customer_user_role_form__customer_user_role_form_container_widget' => array($this, 'block___oro_customer_user_role_form__customer_user_role_form_container_widget'),
            '__oro_customer_user_role_form__customer_user_role_form_users_widget' => array($this, 'block___oro_customer_user_role_form__customer_user_role_form_users_widget'),
            '__oro_customer_user_role_form__customer_user_role_form_actions_bottom_widget' => array($this, 'block___oro_customer_user_role_form__customer_user_role_form_actions_bottom_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_user_role_form__customer_user_role_container_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('__oro_customer_user_role_form__customer_user_role_form_actions_top_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('__oro_customer_user_role_form__customer_user_role_form_container_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('__oro_customer_user_role_form__customer_user_role_form_users_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('__oro_customer_user_role_form__customer_user_role_form_actions_bottom_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_customer_user_role_form__customer_user_role_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-focusable" => true));
        // line 5
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block___oro_customer_user_role_form__customer_user_role_form_actions_top_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " pull-right customer-user-role-edit__buttons-top"));
        // line 14
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 19
    public function block___oro_customer_user_role_form__customer_user_role_form_container_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid__row"));
        // line 23
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 24
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 28
    public function block___oro_customer_user_role_form__customer_user_role_form_users_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["grid_parameters"] = twig_array_merge(($context["grid_parameters"] ?? null), array("_parameters" => array("data_in" => _twig_default_filter(twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(        // line 30
($context["form"] ?? null), "appendUsers", array()), "vars", array()), "value", array()), ","), array()))));
        // line 32
        echo "
    ";
        // line 33
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 36
    public function block___oro_customer_user_role_form__customer_user_role_form_actions_bottom_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " pull-right mt2-md"));
        // line 40
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 41
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/imports/oro_customer_user_role_form:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  124 => 40,  121 => 37,  118 => 36,  112 => 33,  109 => 32,  107 => 30,  105 => 29,  102 => 28,  95 => 24,  90 => 23,  87 => 20,  84 => 19,  77 => 15,  72 => 14,  69 => 11,  66 => 10,  59 => 6,  54 => 5,  51 => 2,  48 => 1,  44 => 36,  41 => 35,  39 => 28,  36 => 27,  34 => 19,  31 => 18,  29 => 10,  26 => 9,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/imports/oro_customer_user_role_form:layout.html.twig", "");
    }
}
