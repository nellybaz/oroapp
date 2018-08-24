<?php

/* OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig */
class __TwigTemplate_cffa63d59696d4bd5b6ef87667ce295a91833f92f893e69c2dc094305b705c28 extends Twig_Template
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
        echo "<div class=\"pull-left\">
    ";
        // line 2
        echo twig_include($this->env, $context, "@OroImportExport/ImportExport/export-buttons.html.twig");
        echo "
    ";
        // line 3
        echo twig_include($this->env, $context, "@OroImportExport/ImportExport/import-button.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig", "");
    }
}
