<?php

/* OroWebCatalogBundle:WebCatalog:view.html.twig */
class __TwigTemplate_320ea29cc23154d3d9b38da750e6b37429fa58b0244fd748288f6cb91a22ef06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroWebCatalogBundle:WebCatalog:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityLabel%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_web_catalog_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 10
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 12
        echo "
    ";
        // line 13
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_content_data($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 => $this->getAttribute(        // line 22
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.name.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "name", array())), "method"), 1 => $this->getAttribute(        // line 23
($context["UI"] ?? null), "renderSwitchableHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.description.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "description", array())), "method"))))));
        // line 27
        echo "
    ";
        // line 28
        $context["id"] = "web-catalog-view";
        // line 29
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 30
        echo "
    ";
        // line 31
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWebCatalogBundle:WebCatalog:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 31,  66 => 30,  63 => 29,  61 => 28,  58 => 27,  56 => 23,  55 => 22,  53 => 17,  50 => 16,  44 => 13,  41 => 12,  39 => 10,  38 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWebCatalogBundle:WebCatalog:view.html.twig", "");
    }
}
