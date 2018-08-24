<?php

/* OroDashboardBundle:Dashboard:tabbedWidget.html.twig */
class __TwigTemplate_8cec60d7b50c0730bb9a758f5cdbb0c2221882b025b96baf95161f300e1abf6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroDashboardBundle:Dashboard:tabbedWidget.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'tab_content' => array($this, 'block_tab_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"tab-container\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "                <li";
            if ((($context["activeTab"] ?? null) == $this->getAttribute($context["tab"], "name", array()))) {
                echo " class=\"active\"";
            }
            echo "><a
                    href=\"javascript:void(0);\" class=\"no-hash tab-button\"
                    data-name=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "url", array()), "html", null, true);
            echo "\">
                        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "label", array()), "html", null, true);
            echo "
                        ";
            // line 11
            if ($this->getAttribute($context["tab"], "afterHtml", array(), "any", true, true)) {
                // line 12
                echo "                            ";
                echo $this->getAttribute($context["tab"], "afterHtml", array());
                echo "
                        ";
            }
            // line 14
            echo "                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
        <div class=\"tab-content\">
            <div class=\"content\">
                ";
        // line 20
        $this->displayBlock('tab_content', $context, $blocks);
        // line 23
        echo "            </div>
        </div>
    </div>

    ";
        // line 27
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Dashboard:tabbedWidget.html.twig", 27);
        // line 28
        echo "
    <div ";
        // line 29
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "orodashboard/js/app/views/widget-tabs-view", "options" => array("_sourceElement" => ("#" .         // line 32
($context["widgetContentId"] ?? null)))));
        // line 34
        echo "></div>

    ";
        // line 36
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_tab_content($context, array $blocks = array())
    {
        // line 21
        echo "                    ";
        echo ($context["activeTabContent"] ?? null);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:tabbedWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 21,  105 => 20,  99 => 36,  95 => 34,  93 => 32,  92 => 29,  89 => 28,  87 => 27,  81 => 23,  79 => 20,  74 => 17,  66 => 14,  60 => 12,  58 => 11,  54 => 10,  48 => 9,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Dashboard:tabbedWidget.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Dashboard/tabbedWidget.html.twig");
    }
}
