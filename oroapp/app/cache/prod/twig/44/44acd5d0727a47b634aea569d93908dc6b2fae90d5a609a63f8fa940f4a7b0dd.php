<?php

/* OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_role_view:layout.html.twig */
class __TwigTemplate_ccb1e8d2ace82ea4cfad39787f7e029ec5f5a514338c26b17534f9c10b1dda73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_customer_user_role_view_container_wrap_widget' => array($this, 'block__customer_user_role_view_container_wrap_widget'),
            '_customer_user_role_back_link_widget' => array($this, 'block__customer_user_role_back_link_widget'),
            '_customer_user_role_top_actions_widget' => array($this, 'block__customer_user_role_top_actions_widget'),
            '_customer_user_role_items_view_users_widget' => array($this, 'block__customer_user_role_items_view_users_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_customer_user_role_view_container_wrap_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('_customer_user_role_back_link_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_customer_user_role_top_actions_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_customer_user_role_items_view_users_widget', $context, $blocks);
    }

    // line 1
    public function block__customer_user_role_view_container_wrap_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " box-toolbar")));
        // line 3
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 4
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 8
    public function block__customer_user_role_back_link_widget($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " box-toolbar__content")));
        // line 10
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 11
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 15
    public function block__customer_user_role_top_actions_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " box-toolbar__actions")));
        // line 17
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"controls-list\">
            ";
        // line 19
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 24
    public function block__customer_user_role_items_view_users_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <h3 class=\"customer-navigation-title\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.sections.customer_user_role.users.label"), "html", null, true);
        echo "
    </h3>
    ";
        // line 28
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_role_view:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  104 => 26,  101 => 25,  98 => 24,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  71 => 11,  66 => 10,  63 => 9,  60 => 8,  53 => 4,  48 => 3,  45 => 2,  42 => 1,  38 => 24,  35 => 23,  33 => 15,  30 => 14,  28 => 8,  25 => 7,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_role_view:layout.html.twig", "");
    }
}
