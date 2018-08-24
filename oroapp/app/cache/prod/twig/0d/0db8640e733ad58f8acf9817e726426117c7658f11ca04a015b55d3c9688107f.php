<?php

/* OroEmailBundle:Dashboard:recentEmailsGrid.html.twig */
class __TwigTemplate_23c7b03a9adbda369d8fea2ba8915311d1662b650eef7ba6e0b0e95f681c62a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("userId" => ($context["loggedUserId"] ?? null)), array("themeOptions" => array("disableStickedScrollbar" => true)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig", "");
    }
}
