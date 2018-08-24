<?php

/* OroOrderBundle:layouts/default/imports/oro_order_grid:layout.html.twig */
class __TwigTemplate_4c85b8c4ec805c56e0f0f5cdb568ae815e06a8de09f8a5f9b4f53d82123fad33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_order_grid__datagrid_toolbar_button_container_create_order_widget' => array($this, 'block___oro_order_grid__datagrid_toolbar_button_container_create_order_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_order_grid__datagrid_toolbar_button_container_create_order_widget', $context, $blocks);
    }

    public function block___oro_order_grid__datagrid_toolbar_button_container_create_order_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "text-right")));
        // line 3
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 4
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:layouts/default/imports/oro_order_grid:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:layouts/default/imports/oro_order_grid:layout.html.twig", "");
    }
}
