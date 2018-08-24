<?php

/* OroCaseBundle:Comment/dialog:update.html.twig */
class __TwigTemplate_ecfda3842b4135f0e924aa128bc411f952240b33699327f1a35a050d3d326a0a extends Twig_Template
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => $this));
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        if (($context["saved"] ?? null)) {
            // line 5
            echo "        <script type=\"text/javascript\">
        require(['oroui/js/widget-manager'],
        function(widgetManager) {
            widgetManager.getWidgetInstance(";
            // line 8
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function(widget) {
                widget.trigger('formSave', ";
            // line 9
            echo twig_jsonencode_filter(($context["data"] ?? null));
            echo ");
            });
        });
        </script>
    ";
        } else {
            // line 14
            echo "        <div class=\"form-container\">
            <form id=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\" class=\"note-form\">
                <fieldset class=\"form-horizontal\">
                    ";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                    ";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'row');
            echo "
                    ";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 26
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Comment/dialog:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  80 => 26,  73 => 22,  69 => 21,  64 => 19,  60 => 18,  56 => 17,  47 => 15,  44 => 14,  36 => 9,  32 => 8,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Comment/dialog:update.html.twig", "");
    }
}
