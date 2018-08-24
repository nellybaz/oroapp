<?php

/* OroCMSBundle:Page:view.html.twig */
class __TwigTemplate_d3fc616bb167e5cec14837e580d611fe8def073fda5ae056c6b04c98eb42882e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCMSBundle:Page:view.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute($this->getAttribute(        // line 3
($context["entity"] ?? null), "defaultTitle", array()), "string", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_page_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.page.entity_plural_label"), "entityTitle" => (($this->getAttribute($this->getAttribute(        // line 10
($context["entity"] ?? null), "defaultTitle", array(), "any", false, true), "string", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultTitle", array(), "any", false, true), "string", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 12
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_content_data($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_page_info", array("id" => $this->getAttribute(        // line 19
($context["entity"] ?? null), "id", array()))), "alias" => "page-info-widget"));
        // line 21
        echo "
    ";
        $context["pageInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 27
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "content", array()));
        echo "
            </div>
        </div>
    ";
        $context["pageContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "
    ";
        // line 32
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 36
($context["pageInfo"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.sections.content"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 41
($context["pageContent"] ?? null))))));
        // line 44
        echo "
    ";
        // line 45
        $context["id"] = "page-view";
        // line 46
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 47
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:Page:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 47,  90 => 46,  88 => 45,  85 => 44,  83 => 41,  82 => 36,  81 => 32,  78 => 31,  71 => 27,  67 => 25,  65 => 24,  62 => 23,  58 => 21,  56 => 19,  54 => 17,  51 => 16,  48 => 15,  41 => 12,  39 => 10,  38 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:Page:view.html.twig", "");
    }
}
