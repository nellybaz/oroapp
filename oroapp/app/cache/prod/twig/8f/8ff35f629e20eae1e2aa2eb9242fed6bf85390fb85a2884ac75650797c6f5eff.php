<?php

/* OroFrontendBundle:layouts/default/page:middle_bar.html.twig */
class __TwigTemplate_c845ffa8584d9e3c3358018efb69141726a3b231f140579c359cf98ee8d02685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_middle_bar_widget' => array($this, 'block__middle_bar_widget'),
            '_middle_bar_search_widget' => array($this, 'block__middle_bar_search_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_middle_bar_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_middle_bar_search_widget', $context, $blocks);
    }

    // line 1
    public function block__middle_bar_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"page-area-container\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
    </div>
";
    }

    // line 7
    public function block__middle_bar_search_widget($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 9
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " search-widget-wrap")));
        // line 11
        echo "
    ";
        // line 12
        $context["dom_relocation_options"] = twig_jsonencode_filter(array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-header-row-search-container]"))));
        // line 22
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <form  id=\"oro_website_search_search\"
               action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("oro_website_search_results");
        echo "\"
               method=\"GET\"
               novalidate=\"novalidate\"
               class=\"search-widget\"
               data-dom-relocation-options=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["dom_relocation_options"] ?? null), "html", null, true);
        echo "\"
        >
            <input class=\"search-widget__input input input--full\" type=\"text\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.website_search.search_field_placeholder", array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "\" value=\"\" name=\"search\"/>
            <button name=\"oro_website_search_search_button\" class=\"search-widget__submit\" type=\"submit\">
                <i class=\"fa-search\"></i>
            </button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/default/page:middle_bar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  68 => 28,  61 => 24,  55 => 22,  53 => 12,  50 => 11,  48 => 9,  46 => 8,  43 => 7,  36 => 3,  33 => 2,  30 => 1,  26 => 7,  23 => 6,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/default/page:middle_bar.html.twig", "");
    }
}
