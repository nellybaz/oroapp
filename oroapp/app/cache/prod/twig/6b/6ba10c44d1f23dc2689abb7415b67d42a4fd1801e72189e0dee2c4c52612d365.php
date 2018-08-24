<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.html.twig */
class __TwigTemplate_ab56bbcf5db28dea4bdd0cc6707d4f985783552a4ff52122c40226b4a5b9b711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title_widget' => array($this, 'block_title_widget'),
            '_cms_page_content_widget' => array($this, 'block__cms_page_content_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_cms_page_content_widget', $context, $blocks);
    }

    // line 1
    public function block_title_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "        <title>";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</title>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 7
    public function block__cms_page_content_widget($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 9
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " cms-page")));
        // line 11
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 12
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  50 => 11,  48 => 9,  46 => 8,  43 => 7,  35 => 3,  33 => 2,  30 => 1,  26 => 7,  23 => 6,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.html.twig");
    }
}
