<?php

/* OroRFPBundle:layouts/default/imports/oro_rfp_request_grid:layout.html.twig */
class __TwigTemplate_f4cedb03e82db45e8a9175b8915edc0e5f8c1bd96ec2fcd6be220561acc540b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_page_title_widget' => array($this, 'block__page_title_widget'),
            '__oro_rfp_request_grid__button_container_create_new_quote_widget' => array($this, 'block___oro_rfp_request_grid__button_container_create_new_quote_widget'),
            '__oro_rfp_request_grid__additional_views_container_widget' => array($this, 'block___oro_rfp_request_grid__additional_views_container_widget'),
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
        $this->displayBlock('__oro_rfp_request_grid__button_container_create_new_quote_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('__oro_rfp_request_grid__additional_views_container_widget', $context, $blocks);
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
    public function block___oro_rfp_request_grid__button_container_create_new_quote_widget($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " page-title-actions")));
        // line 8
        echo "    ";
        $context["actionButtonClass"] = "btn btn--size-s";
        // line 9
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 10
        $this->displayBlock("combined_buttons_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 14
    public function block___oro_rfp_request_grid__additional_views_container_widget($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__aditional"));
        // line 18
        echo "
    <div ";
        // line 19
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:layouts/default/imports/oro_rfp_request_grid:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  79 => 19,  76 => 18,  73 => 15,  70 => 14,  63 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  42 => 3,  39 => 2,  36 => 1,  32 => 14,  29 => 13,  27 => 6,  24 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:layouts/default/imports/oro_rfp_request_grid:layout.html.twig", "");
    }
}
