<?php

/* OroUIBundle::content_sidebar.html.twig */
class __TwigTemplate_a49c6e314d7e5e5a767b348bb834286c73184fc82883e315f26cbff37bacc0e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_wrapper' => array($this, 'block_header_wrapper'),
            'header' => array($this, 'block_header'),
            'controls_wrapper' => array($this, 'block_controls_wrapper'),
            'sidebar_wrapper' => array($this, 'block_sidebar_wrapper'),
            'sidebar' => array($this, 'block_sidebar'),
            'content_wrapper' => array($this, 'block_content_wrapper'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["options"] = twig_array_merge(((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array())), array("view" => "oroui/js/app/views/content-sidebar-view"));
        // line 4
        $context["class"] = "content-with-sidebar--";
        // line 5
        echo "<div data-page-component-view=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"
     class=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "container\">
    <div data-role=\"sidebar\" class=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "sidebar\">
        <div class=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "header\">
            ";
        // line 9
        $this->displayBlock('header_wrapper', $context, $blocks);
        // line 25
        echo "        </div>
        ";
        // line 26
        $this->displayBlock('sidebar_wrapper', $context, $blocks);
        // line 32
        echo "    </div>
    ";
        // line 33
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 39
        echo "</div>
";
    }

    // line 9
    public function block_header_wrapper($context, array $blocks = array())
    {
        // line 10
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "header-content\">
                    ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "                </div>
                ";
        // line 14
        $this->displayBlock('controls_wrapper', $context, $blocks);
        // line 24
        echo "            ";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "                    ";
    }

    // line 14
    public function block_controls_wrapper($context, array $blocks = array())
    {
        // line 15
        echo "                    <div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "controls\">
                        <div data-role=\"sidebar-maximize\" class=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "control ";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "maximize\">
                            <i class=\"fa-forward \"></i>
                        </div>
                        <div data-role=\"sidebar-minimize\" class=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "control ";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "minimize\">
                            <i class=\"fa-backward \"></i>
                        </div>
                    </div>
                ";
    }

    // line 26
    public function block_sidebar_wrapper($context, array $blocks = array())
    {
        // line 27
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "sidebar-content\">
            ";
        // line 28
        $this->displayBlock('sidebar', $context, $blocks);
        // line 30
        echo "        </div>
        ";
    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        // line 29
        echo "            ";
    }

    // line 33
    public function block_content_wrapper($context, array $blocks = array())
    {
        // line 34
        echo "    <div data-role=\"content\" class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "content\">
        ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "    </div>
    ";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "        ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::content_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 36,  154 => 35,  149 => 37,  147 => 35,  142 => 34,  139 => 33,  135 => 29,  132 => 28,  127 => 30,  125 => 28,  120 => 27,  117 => 26,  106 => 19,  98 => 16,  93 => 15,  90 => 14,  86 => 12,  83 => 11,  79 => 24,  77 => 14,  74 => 13,  72 => 11,  67 => 10,  64 => 9,  59 => 39,  57 => 33,  54 => 32,  52 => 26,  49 => 25,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  30 => 5,  28 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::content_sidebar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/content_sidebar.html.twig");
    }
}
