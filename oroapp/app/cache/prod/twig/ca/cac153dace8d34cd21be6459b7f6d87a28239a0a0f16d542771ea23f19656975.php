<?php

/* OroUIBundle:Default:twoColumnLeft.html.twig */
class __TwigTemplate_f41f19885e572f2bcd04c0c96f4b708568275ad5e1a9e856722a60dd8af54158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:twoColumnLeft.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'page_container' => array($this, 'block_page_container'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_page_container($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row-fluid\" id=\"wrapper\">
            <div class=\"span3\">
                ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 14
        echo "            </div>
            <div class=\"span9\">
                ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "            </div>
        </div>
    </div>
";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "                <div id=\"sidebar\" class=\"test-box alert alert-success\">
                    sidebar
                </div>
                ";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "                <div id=\"content\" class=\"test-box alert alert-block\">
                    Content
                </div>
                ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:twoColumnLeft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  74 => 16,  67 => 10,  64 => 9,  57 => 21,  55 => 16,  51 => 14,  49 => 9,  44 => 6,  41 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:twoColumnLeft.html.twig", "");
    }
}
