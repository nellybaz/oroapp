<?php

/* OroImportExportBundle:ImportExport:buttons.html.twig */
class __TwigTemplate_3c69d413a3ef5329805263b94db2b599f685a2d966814cf8a1f45c396f856ea4 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroImportExportBundle:ImportExport:buttons.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["hasImportProcessor"] = (array_key_exists("importProcessor", $context) &&  !twig_test_empty(($context["importProcessor"] ?? null)));
        // line 4
        $context["importAllowed"] = (($context["hasImportProcessor"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_importexport_import"));
        // line 5
        $context["importLabel"] = ((array_key_exists("importLabel", $context)) ? (_twig_default_filter(($context["importLabel"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.label")));
        // line 6
        $context["importValidationLabel"] = ((array_key_exists("importValidationLabel", $context)) ? (_twig_default_filter(($context["importValidationLabel"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.validation_label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.validation_label")));
        // line 7
        echo "
";
        // line 8
        $context["hasExportProcessor"] = (array_key_exists("exportProcessor", $context) &&  !twig_test_empty(($context["exportProcessor"] ?? null)));
        // line 9
        $context["exportAllowed"] = (($context["hasExportProcessor"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_importexport_export"));
        // line 10
        if (($context["exportAllowed"] ?? null)) {
            // line 11
            echo "    ";
            $context["isExportPopupRequired"] = (twig_test_iterable(($context["exportProcessor"] ?? null)) && (twig_length_filter($this->env, ($context["exportProcessor"] ?? null)) > 1));
        }
        // line 13
        $context["exportLabel"] = ((array_key_exists("exportLabel", $context)) ? (_twig_default_filter(($context["exportLabel"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export.label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export.label")));
        // line 14
        echo "
";
        // line 15
        $context["hasExportTemplateProcessor"] = (array_key_exists("exportTemplateProcessor", $context) &&  !twig_test_empty(($context["exportTemplateProcessor"] ?? null)));
        // line 16
        if (($context["hasExportTemplateProcessor"] ?? null)) {
            // line 17
            echo "    ";
            $context["isExportTemplatePopupRequired"] = twig_test_iterable(($context["exportTemplateProcessor"] ?? null));
            // line 18
            echo "    ";
            $context["exportTemplateProcessor"] = ((twig_test_iterable(($context["exportTemplateProcessor"] ?? null))) ? ($this->getAttribute(($context["exportTemplateProcessor"] ?? null), 0, array(), "array")) : (($context["exportTemplateProcessor"] ?? null)));
        }
        // line 20
        echo "
";
        // line 21
        $context["exportTemplateLabel"] = ((array_key_exists("exportTemplateLabel", $context)) ? (_twig_default_filter(($context["exportTemplateLabel"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export_template.label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export_template.label")));
        // line 22
        echo "
";
        // line 23
        if ((($context["exportAllowed"] ?? null) || ($context["importAllowed"] ?? null))) {
            // line 24
            echo "    <span class=\"pull-left\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroimportexport/js/app/views/import-export-buttons-view", "data" => array("entity" =>             // line 29
($context["entity_class"] ?? null), "routeOptions" => ((            // line 30
array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array())), "importTitle" => ((            // line 32
array_key_exists("importTitle", $context)) ? (_twig_default_filter(($context["importTitle"] ?? null), ($context["importLabel"] ?? null))) : (($context["importLabel"] ?? null))), "importJob" => ((            // line 33
array_key_exists("importJob", $context)) ? (_twig_default_filter(($context["importJob"] ?? null), null)) : (null)), "importValidateJob" => ((            // line 34
array_key_exists("importValidateJob", $context)) ? (_twig_default_filter(($context["importValidateJob"] ?? null), null)) : (null)), "exportTitle" => ((            // line 36
array_key_exists("exportTitle", $context)) ? (_twig_default_filter(($context["exportTitle"] ?? null), ($context["exportLabel"] ?? null))) : (($context["exportLabel"] ?? null))), "exportJob" => ((            // line 37
array_key_exists("exportJob", $context)) ? (_twig_default_filter(($context["exportJob"] ?? null), null)) : (null)), "exportProcessor" => ((            // line 38
array_key_exists("exportProcessor", $context)) ? (_twig_default_filter(($context["exportProcessor"] ?? null), null)) : (null)), "isExportPopupRequired" => ((            // line 39
array_key_exists("isExportPopupRequired", $context)) ? (_twig_default_filter(($context["isExportPopupRequired"] ?? null), false)) : (false)), "exportTemplateTitle" => ((            // line 41
array_key_exists("exportTemplateTitle", $context)) ? (_twig_default_filter(($context["exportTemplateTitle"] ?? null), ($context["exportLabel"] ?? null))) : (($context["exportLabel"] ?? null))), "exportTemplateJob" => ((            // line 42
array_key_exists("exportTemplateJob", $context)) ? (_twig_default_filter(($context["exportTemplateJob"] ?? null), null)) : (null)), "exportTemplateProcessor" => ((            // line 43
array_key_exists("exportTemplateProcessor", $context)) ? (_twig_default_filter(($context["exportTemplateProcessor"] ?? null), null)) : (null)), "isExportTemplatePopupRequired" => ((            // line 44
array_key_exists("isExportTemplatePopupRequired", $context)) ? (_twig_default_filter(($context["isExportTemplatePopupRequired"] ?? null), false)) : (false)), "filePrefix" => ((            // line 46
array_key_exists("filePrefix", $context)) ? (_twig_default_filter(($context["filePrefix"] ?? null), null)) : (null)), "datagridName" => ((            // line 47
array_key_exists("datagridName", $context)) ? (_twig_default_filter(($context["datagridName"] ?? null), null)) : (null)), "afterRefreshPageMessage" => ((            // line 48
array_key_exists("afterRefreshPageMessage", $context)) ? (_twig_default_filter(($context["afterRefreshPageMessage"] ?? null), null)) : (null)), "refreshPageOnSuccess" => ((            // line 49
array_key_exists("refreshPageOnSuccess", $context)) ? (_twig_default_filter(($context["refreshPageOnSuccess"] ?? null), false)) : (false))))), "html", null, true);
            // line 51
            echo "\"
    >
    ";
            // line 53
            if (($context["exportAllowed"] ?? null)) {
                // line 54
                echo "        <div class=\"btn-group\">
            <a type=\"button\" class=\"btn export-btn icons-holder-text no-hash\" href=\"#\">
                <i class=\"fa-upload hide-text\">";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export.label"), "html", null, true);
                echo "</i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export.label"), "html", null, true);
                echo "
            </a>
        </div>
    ";
            }
            // line 60
            echo "
    ";
            // line 61
            if (($context["importAllowed"] ?? null)) {
                // line 62
                echo "        <div class=\"btn-group\">
            ";
                // line 63
                ob_start();
                // line 64
                echo "                <a type=\"button\" class=\"btn import-btn icons-holder-text no-hash\" href=\"#\">
                    <i class=\"fa-download hide-text\">";
                // line 65
                echo twig_escape_filter($this->env, ($context["importLabel"] ?? null), "html", null, true);
                echo "</i>";
                echo twig_escape_filter($this->env, ($context["importLabel"] ?? null), "html", null, true);
                echo "
                </a>
                <a type=\"button\" class=\"btn import-validation-btn icons-holder-text no-hash\" href=\"#\">
                    <i class=\"icon-download-alt hide-text\">";
                // line 68
                echo twig_escape_filter($this->env, ($context["importValidationLabel"] ?? null), "html", null, true);
                echo "</i>";
                echo twig_escape_filter($this->env, ($context["importValidationLabel"] ?? null), "html", null, true);
                echo "
                </a>
                ";
                // line 70
                if (($context["hasExportTemplateProcessor"] ?? null)) {
                    // line 71
                    echo "                    <a type=\"button\" class=\"btn template-btn icons-holder-text no-hash\" href=\"#\">
                        <i class=\"fa-file-o hide-text\"></i>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.tempate"), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 75
                echo "            ";
                $context["buttonsHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 76
                echo "
            ";
                // line 77
                $context["parameters"] = array("html" =>                 // line 78
($context["buttonsHtml"] ?? null));
                // line 80
                echo "            ";
                echo $context["UI"]->getpinnedDropdownButton(($context["parameters"] ?? null));
                echo "
        </div>
    ";
            }
            // line 83
            echo "    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "OroImportExportBundle:ImportExport:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 83,  161 => 80,  159 => 78,  158 => 77,  155 => 76,  152 => 75,  146 => 72,  143 => 71,  141 => 70,  134 => 68,  126 => 65,  123 => 64,  121 => 63,  118 => 62,  116 => 61,  113 => 60,  104 => 56,  100 => 54,  98 => 53,  94 => 51,  92 => 49,  91 => 48,  90 => 47,  89 => 46,  88 => 44,  87 => 43,  86 => 42,  85 => 41,  84 => 39,  83 => 38,  82 => 37,  81 => 36,  80 => 34,  79 => 33,  78 => 32,  77 => 30,  76 => 29,  75 => 26,  71 => 24,  69 => 23,  66 => 22,  64 => 21,  61 => 20,  57 => 18,  54 => 17,  52 => 16,  50 => 15,  47 => 14,  45 => 13,  41 => 11,  39 => 10,  37 => 9,  35 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImportExportBundle:ImportExport:buttons.html.twig", "");
    }
}
