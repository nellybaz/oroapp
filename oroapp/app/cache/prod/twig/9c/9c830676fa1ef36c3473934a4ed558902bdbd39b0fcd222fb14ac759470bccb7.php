<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-header.html.twig */
class __TwigTemplate_afef2896d24c219b1499ba226b106309d3718ec058066aedf1b9f3602f852f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_page_header_widget' => array($this, 'block__page_header_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_page_header_widget', $context, $blocks);
    }

    public function block__page_header_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-header"));
        // line 5
        echo "
    <header ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </header>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  29 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-header.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-header.html.twig");
    }
}