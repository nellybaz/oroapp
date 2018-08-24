<?php

/* OroCustomerBundle:layouts/default/imports/oro_customer_user_grid:layout.html.twig */
class __TwigTemplate_b2fa90e2895fe6ae8b801e0809f377832574806209fb97cbc32d515dda0ce5f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_page_title_widget' => array($this, 'block__page_title_widget'),
            '__oro_customer_user_grid__button_container_create_customer_user_widget' => array($this, 'block___oro_customer_user_grid__button_container_create_customer_user_widget'),
            '__oro_customer_user_grid__additional_views_container_widget' => array($this, 'block___oro_customer_user_grid__additional_views_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_page_title_widget', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('__oro_customer_user_grid__button_container_create_customer_user_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('__oro_customer_user_grid__additional_views_container_widget', $context, $blocks);
    }

    // line 1
    public function block__page_title_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["hasActions"] = true;
        // line 3
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 6
    public function block___oro_customer_user_grid__button_container_create_customer_user_widget($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " page-title-actions")));
        // line 8
        echo "    ";
        $context["actionButtonClass"] = "btn btn--size-s";
        // line 9
        echo "
    <div";
        // line 10
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 11
        $this->displayBlock("combined_buttons_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 15
    public function block___oro_customer_user_grid__additional_views_container_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__aditional"));
        // line 19
        echo "
    <div ";
        // line 20
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 21
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/imports/oro_customer_user_grid:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  81 => 20,  78 => 19,  75 => 16,  72 => 15,  65 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  42 => 3,  39 => 2,  36 => 1,  32 => 15,  29 => 14,  27 => 6,  24 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/imports/oro_customer_user_grid:layout.html.twig", "");
    }
}
