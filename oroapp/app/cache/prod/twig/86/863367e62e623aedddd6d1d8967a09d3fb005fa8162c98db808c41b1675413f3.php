<?php

/* OroImportExportBundle:ImportExport/widget:configurableExport.html.twig */
class __TwigTemplate_d95b5f537d87324610f68f913d1afdfcb577c0ed8bd82699a0d698da291212a6 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroImportExportBundle:ImportExport/widget:configurableExport.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["exportConfigurableWidgetViewOptions"] = array("view" => array("view" => "oroimportexport/js/app/views/export-configurable-widget-view", "wid" => $this->getAttribute($this->getAttribute(        // line 6
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "errorMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Errors occured during file export.")));
        // line 10
        echo "
<div class=\"widget-content import-widget-content\">
    <div class=\"form-container\" ";
        // line 12
        echo $context["UI"]->getrenderPageComponentAttributes(($context["exportConfigurableWidgetViewOptions"] ?? null));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_importexport_export_config", array("entity" => ($context["entityName"] ?? null), "options" => ($context["options"] ?? null), "exportJob" => ($context["exportJob"] ?? null))), "html", null, true);
        echo "\"
              class=\"form-horizontal\"
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo ">

            <fieldset class=\"form\">
                <div>
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "processorAlias", array()), 'row');
        echo "
                </div>
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" type=\"submit\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export"), "html", null, true);
        echo "
                </button>
            </div>
        </form>
        ";
        // line 35
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroImportExportBundle:ImportExport/widget:configurableExport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  74 => 31,  69 => 29,  62 => 25,  57 => 23,  50 => 19,  45 => 17,  41 => 16,  37 => 15,  31 => 12,  27 => 10,  25 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImportExportBundle:ImportExport/widget:configurableExport.html.twig", "");
    }
}
