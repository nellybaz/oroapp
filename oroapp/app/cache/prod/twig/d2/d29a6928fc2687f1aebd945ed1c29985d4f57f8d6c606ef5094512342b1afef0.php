<?php

/* OroImportExportBundle:ImportExport:import-button.html.twig */
class __TwigTemplate_8c312a9ac996b8e86bff7cb2f246ab530bc31d935d8c85748a4dec4c5d59f79d extends Twig_Template
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
        $context["showImportButton"] = false;
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Oro\Bundle\ImportExportBundle\Twig\GetImportExportConfigurationExtension')->getConfiguration(($context["alias"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 4
            echo "    ";
            if ((($this->getAttribute($context["configuration"], "importProcessorAlias", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["configuration"], "importProcessorAlias", array()))) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_importexport_import"))) {
                // line 5
                echo "        ";
                $context["showImportButton"] = true;
                // line 6
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        if (($context["showImportButton"] ?? null)) {
            // line 10
            echo "    <div class=\"btn-group\">
        <a type=\"button\" href=\"#\"
           class=\"btn import-btn icons-holder-text no-hash\"
           data-page-component-module=\"oroui/js/app/components/view-component\"
           data-page-component-options=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroimportexport/js/app/views/import-button-view", "alias" =>             // line 16
($context["alias"] ?? null), "routeOptions" => ((            // line 17
array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array())))), "html", null, true);
            // line 18
            echo "\"
        >
            <i class=\"fa-download hide-text\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.label"), "html", null, true);
            echo "</i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.label"), "html", null, true);
            echo "
        </a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroImportExportBundle:ImportExport:import-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  56 => 18,  54 => 17,  53 => 16,  52 => 14,  46 => 10,  44 => 9,  41 => 8,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImportExportBundle:ImportExport:import-button.html.twig", "");
    }
}
