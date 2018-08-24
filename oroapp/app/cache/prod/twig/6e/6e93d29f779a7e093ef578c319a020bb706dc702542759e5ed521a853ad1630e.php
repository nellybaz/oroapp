<?php

/* OroProductBundle:layouts/blank/imports/line_item_buttons:line_item_buttons.html.twig */
class __TwigTemplate_5392c94844d49e30b5f814c75ffd91a7dd02ce900c247d7e076432df71678b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__line_item_buttons__line_item_buttons_widget' => array($this, 'block___line_item_buttons__line_item_buttons_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__line_item_buttons__line_item_buttons_widget', $context, $blocks);
    }

    public function block___line_item_buttons__line_item_buttons_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:layouts/blank/imports/line_item_buttons:line_item_buttons.html.twig", 2);
        // line 3
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("html" =>         // line 4
$this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget'), "mobileEnabled" => true, "~dataAttributes" => array("layout" => "deferred-initialize"), "~options" => array("widgetModule" => "oroproduct/js/content-processor/product-add-to-dropdown-button", "widgetName" => "productAddToDropdownButtonProcessor", "truncateLength" => 25, "groupContainer" => "<div class=\"btn-group full\"></div>", "decoreClass" => " btn--info")));
        // line 17
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["block"] ?? null), "children", array()))) {
            // line 18
            echo "        ";
            echo $context["UI"]->getpinnedDropdownButton(($context["attr"] ?? null));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/imports/line_item_buttons:line_item_buttons.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 18,  33 => 17,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/imports/line_item_buttons:line_item_buttons.html.twig", "");
    }
}
