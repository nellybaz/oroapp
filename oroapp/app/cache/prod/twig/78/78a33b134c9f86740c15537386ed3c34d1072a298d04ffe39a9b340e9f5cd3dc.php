<?php

/* OroImportExportBundle:ImportExport/widget:configurableTemplateExport.html.twig */
class __TwigTemplate_86c58e384acf1a7626eed5ce15f70128eebd2300cef99f08f2b221cc34312908 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroImportExportBundle:ImportExport/widget:configurableTemplateExport.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["exportConfigurableTemplateWidgetViewOptions"] = array("view" => array("view" => "oroimportexport/js/app/views/export-configurable-template-widget-view", "wid" => $this->getAttribute($this->getAttribute(        // line 6
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "downloadMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Downloading data template...")));
        // line 10
        echo "
<div class=\"widget-content import-widget-content\">
    <div class=\"form-container\" ";
        // line 12
        echo $context["UI"]->getrenderPageComponentAttributes(($context["exportConfigurableTemplateWidgetViewOptions"] ?? null));
        echo ">
        <form method=\"post\"
              data-nohash=\"true\"
              id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
              name=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
              action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_importexport_export_template_config", array("entity" => ($context["entityName"] ?? null), "options" => ($context["options"] ?? null))), "html", null, true);
        echo "\"
              class=\"form-horizontal\"
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo ">

            <fieldset class=\"form\">
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" type=\"submit\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download"), "html", null, true);
        echo "
                </button>
            </div>
        </form>
        ";
        // line 32
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroImportExportBundle:ImportExport/widget:configurableTemplateExport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 32,  68 => 28,  63 => 26,  56 => 22,  50 => 19,  45 => 17,  41 => 16,  37 => 15,  31 => 12,  27 => 10,  25 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImportExportBundle:ImportExport/widget:configurableTemplateExport.html.twig", "");
    }
}
