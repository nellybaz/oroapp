<?php

/* OroEmailBundle:Dashboard:recentEmailsGrid.html.twig */
class __TwigTemplate_eea3fb16df9184ef8a288445c7a1350bcfad48bdb89eb60d989acdd77865c3e9 extends Twig_Template
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
        return new Twig_Source("", "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Dashboard/recentEmailsGrid.html.twig");
    }
}
