<?php

/* OroUIBundle:Default:threeColumn.html.twig */
class __TwigTemplate_073656607a598dfd25b6bc664cdd8ef8bc64675a72564517afc2396d9a8c4c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:threeColumn.html.twig", 1);
        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
            'sidebar_left' => array($this, 'block_sidebar_left'),
            'content' => array($this, 'block_content'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_container($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row-fluid\" id=\"wrapper\">
            <div class=\"span3\">
                ";
        // line 6
        $this->displayBlock('sidebar_left', $context, $blocks);
        // line 11
        echo "            </div>
            <div class=\"span6\">
                ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "            </div>
            <div class=\"span3\">
                ";
        // line 20
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 25
        echo "            </div>
        </div>
    </div>
";
    }

    // line 6
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 7
        echo "                <div id=\"sidebar\" class=\"test-box alert alert-success\">
                    sidebar
                </div>
                ";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "                <div id=\"content\" class=\"test-box alert alert-block\">
                    Content
                </div>
                ";
    }

    // line 20
    public function block_sidebar_right($context, array $blocks = array())
    {
        // line 21
        echo "                <div id=\"aside\" class=\"test-box alert alert-info\">
                    Second sidebar
                </div>
                ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:threeColumn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  80 => 20,  73 => 14,  70 => 13,  63 => 7,  60 => 6,  53 => 25,  51 => 20,  47 => 18,  45 => 13,  41 => 11,  39 => 6,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:threeColumn.html.twig", "");
    }
}
