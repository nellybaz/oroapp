<?php

/* OroFrontendBundle:layouts/blank/imports/style-book-sidebar:sidebar.html.twig */
class __TwigTemplate_378aab1da9d9d63e8a1c337d3f235d4137d93c538e6e91d24f1d53ff53942bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_style_book_sidebar_widget' => array($this, 'block__style_book_sidebar_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_style_book_sidebar_widget', $context, $blocks);
    }

    public function block__style_book_sidebar_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (($this->getAttribute(($context["block"] ?? null), "count", array()) > 0)) {
            // line 3
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-sidebar page-sidebar--right"));
            // line 6
            echo "
        <aside ";
            // line 7
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 8
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </aside>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/imports/style-book-sidebar:sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 7,  32 => 6,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/imports/style-book-sidebar:sidebar.html.twig", "");
    }
}
