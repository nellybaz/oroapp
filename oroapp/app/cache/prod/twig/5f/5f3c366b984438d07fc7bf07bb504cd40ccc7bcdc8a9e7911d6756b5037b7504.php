<?php

/* OroImportExportBundle:ImportExport:export-buttons.html.twig */
class __TwigTemplate_2c1e811808c585b3a6031d69f5d636b9e030b8bfbf3b73f847b0736cca58d7c7 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroImportExportBundle:ImportExport:export-buttons.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["exportButtonsHtml"] = "";
        // line 4
        $context["showExportButtons"] = false;
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Oro\Bundle\ImportExportBundle\Twig\GetImportExportConfigurationExtension')->getConfiguration(($context["alias"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 7
            echo "    ";
            $context["hasExportProcessor"] = ($this->getAttribute($context["configuration"], "exportProcessorAlias", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["configuration"], "exportProcessorAlias", array())));
            // line 8
            echo "    ";
            $context["exportAllowed"] = (($context["hasExportProcessor"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_importexport_export"));
            // line 9
            echo "    ";
            $context["exportProcessor"] = ((twig_test_iterable($this->getAttribute($context["configuration"], "exportProcessorAlias", array()))) ? (twig_first($this->env, $this->getAttribute($context["configuration"], "exportProcessorAlias", array()))) : ($this->getAttribute($context["configuration"], "exportProcessorAlias", array())));
            // line 10
            echo "    ";
            $context["isExportPopupRequired"] = twig_test_iterable($this->getAttribute($context["configuration"], "exportProcessorAlias", array()));
            // line 11
            echo "    ";
            $context["exportLabel"] = (($this->getAttribute($context["configuration"], "exportButtonLabel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["configuration"], "exportButtonLabel", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export.label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export.label")));
            // line 12
            echo "
    ";
            // line 13
            if (($context["exportAllowed"] ?? null)) {
                // line 14
                echo "        ";
                $context["showExportButtons"] = true;
                // line 15
                echo "
        ";
                // line 16
                ob_start();
                // line 17
                echo "            <a type=\"button\"
               href=\"#\"
               class=\"btn export-btn icons-holder-text no-hash\"
               data-page-component-module=\"oroui/js/app/components/view-component\"
               data-page-component-options=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroimportexport/js/app/views/export-button-view", "entity" => $this->getAttribute(                // line 23
$context["configuration"], "entityClass", array()), "routeOptions" => twig_array_merge((($this->getAttribute(                // line 24
$context["configuration"], "routeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["configuration"], "routeOptions", array()), array())) : (array())), ((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array()))), "exportTitle" => (($this->getAttribute(                // line 25
$context["configuration"], "exportPopupTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["configuration"], "exportPopupTitle", array()), ($context["exportLabel"] ?? null))) : (($context["exportLabel"] ?? null))), "exportProcessor" => ((                // line 26
array_key_exists("exportProcessor", $context)) ? (_twig_default_filter(($context["exportProcessor"] ?? null), null)) : (null)), "exportJob" => (($this->getAttribute(                // line 27
$context["configuration"], "exportJobName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["configuration"], "exportJobName", array()), null)) : (null)), "isExportPopupRequired" => ((                // line 28
array_key_exists("isExportPopupRequired", $context)) ? (_twig_default_filter(($context["isExportPopupRequired"] ?? null), false)) : (false)), "filePrefix" => (($this->getAttribute(                // line 29
$context["configuration"], "filePrefix", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["configuration"], "filePrefix", array()), null)) : (null)))), "html", null, true);
                // line 30
                echo "\"
            >
                <i class=\"fa-upload hide-text\">";
                // line 32
                echo twig_escape_filter($this->env, ($context["exportLabel"] ?? null), "html", null, true);
                echo "</i>";
                echo twig_escape_filter($this->env, ($context["exportLabel"] ?? null), "html", null, true);
                echo "
            </a>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 35
                echo "
        ";
                // line 36
                $context["exportButtonsHtml"] = (($context["exportButtonsHtml"] ?? null) . ($context["html"] ?? null));
                // line 37
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if (($context["showExportButtons"] ?? null)) {
            // line 41
            echo "    <div class=\"btn-group\">
        ";
            // line 42
            echo $context["UI"]->getpinnedDropdownButton(array("html" =>             // line 43
($context["exportButtonsHtml"] ?? null)));
            // line 44
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroImportExportBundle:ImportExport:export-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  111 => 43,  110 => 42,  107 => 41,  105 => 40,  102 => 39,  95 => 37,  93 => 36,  90 => 35,  82 => 32,  78 => 30,  76 => 29,  75 => 28,  74 => 27,  73 => 26,  72 => 25,  71 => 24,  70 => 23,  69 => 21,  63 => 17,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImportExportBundle:ImportExport:export-buttons.html.twig", "");
    }
}
