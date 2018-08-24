<?php

/* OroOrderBundle:layouts/default/imports/oro_line_items_grid:layout.html.twig */
class __TwigTemplate_570c5e564ea69af96af522be05ea1a3c4586f597c4d291dc4af21351a180c223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_line_items_grid__grid_container_head_title_widget' => array($this, 'block___oro_line_items_grid__grid_container_head_title_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_line_items_grid__grid_container_head_title_widget', $context, $blocks);
    }

    public function block___oro_line_items_grid__grid_container_head_title_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "customer-line-items__title")));
        // line 5
        echo "    <h3";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </h3>
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:layouts/default/imports/oro_line_items_grid:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:layouts/default/imports/oro_line_items_grid:layout.html.twig", "");
    }
}
