<?php

/* OroNavigationBundle:Menu:vertical_tabs.html.twig */
class __TwigTemplate_84a8ed1ecefa82f63e1043e3c9833dccc887ff0e073d5530c5b0e846a1dc0636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:horizontal_tabs.html.twig", "OroNavigationBundle:Menu:vertical_tabs.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:horizontal_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"tabbable tabs-left\">
        ";
        // line 5
        $this->displayParentBlock("root", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:vertical_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:vertical_tabs.html.twig", "");
    }
}
