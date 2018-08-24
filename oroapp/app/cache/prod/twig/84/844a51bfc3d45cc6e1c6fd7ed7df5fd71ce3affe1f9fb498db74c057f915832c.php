<?php

/* OroUIBundle:Default:twoColumnRight.html.twig */
class __TwigTemplate_381443d65f587f8e274ad308cae44184af09957c9b990c56318dee7b79e41c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:twoColumnRight.html.twig", 1);
        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
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
            <div class=\"span9\">
                ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "            </div>
            <div class=\"span3\">
                ";
        // line 13
        $this->displayBlock('sidebar', $context, $blocks);
        // line 18
        echo "            </div>
        </div>
    </div>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "                <div id=\"content\" class=\"test-box alert alert-block\">
                    Content
                </div>
                ";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
        echo "                <div id=\"sidebar\" class=\"test-box alert alert-success\">
                    Sidebar
                </div>
                ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:twoColumnRight.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  63 => 13,  56 => 7,  53 => 6,  46 => 18,  44 => 13,  40 => 11,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:twoColumnRight.html.twig", "");
    }
}
