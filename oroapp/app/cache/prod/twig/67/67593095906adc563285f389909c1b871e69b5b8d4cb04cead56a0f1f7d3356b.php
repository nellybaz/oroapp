<?php

/* OroImportExportBundle:ImportExport/widget:importForm.html.twig */
class __TwigTemplate_82b71d26461781f372a29aa15214490bc7240d8c267abd6b207aac5d8d5905bb extends Twig_Template
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
        echo "<div class=\"widget-content import-widget-content\">
    <div class=\"alert alert-info import-notice\">
        <strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.importance"), "html", null, true);
        echo "</strong>:
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.columns_notice"), "html", null, true);
        echo "
        ";
        // line 5
        if ($this->getAttribute(($context["options"] ?? null), "additionalNotices", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["options"] ?? null), "additionalNotices", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["additionalNotice"]) {
                // line 7
                echo "                ";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["additionalNotice"]), "html", null, true));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['additionalNotice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        ";
        }
        // line 10
        echo "    </div>
    <div class=\"form-container\">
        <form method=\"post\"
              data-nohash=\"true\"
              id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
              name=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
              action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_importexport_import_form", array("entity" => ($context["entityName"] ?? null), "importJob" => ($context["importJob"] ?? null), "importValidateJob" => ($context["importValidateJob"] ?? null), "options" => ($context["options"] ?? null))), "html", null, true);
        echo "\"
              class=\"form-horizontal\"
              ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo ">

            <fieldset class=\"form\">
                <div class=\"import-file\">
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'row', array("label" => "oro.importexport.import.file"));
        echo "
                </div>
                <div ";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "processorAlias", array()), "vars", array()), "choices", array())) <= 1)) {
            echo "style=\"display: none;\"";
        }
        echo ">
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "processorAlias", array()), 'row', array("label" => "oro.importexport.import.strategy"));
        echo "
                </div>
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" type=\"submit\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit"), "html", null, true);
        echo "</button>
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
        return "OroImportExportBundle:ImportExport/widget:importForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  103 => 32,  99 => 31,  92 => 27,  87 => 25,  81 => 24,  76 => 22,  69 => 18,  64 => 16,  60 => 15,  56 => 14,  50 => 10,  47 => 9,  38 => 7,  33 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImportExportBundle:ImportExport/widget:importForm.html.twig", "");
    }
}
