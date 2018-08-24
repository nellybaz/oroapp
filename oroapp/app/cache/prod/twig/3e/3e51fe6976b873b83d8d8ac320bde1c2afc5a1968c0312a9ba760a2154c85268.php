<?php

/* OroDashboardBundle:Dashboard/dialog:configure.html.twig */
class __TwigTemplate_403ac9a4bf970b9c6410b7cc17fdea274378d5c87cdea8a6668a95a3f7b22344 extends Twig_Template
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
        if ((array_key_exists("saved", $context) && ($context["saved"] ?? null))) {
            // line 2
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.widget.configuration.success"), "triggerSuccess" => true, "remove" => true));
            // line 9
            echo "
    ";
            // line 10
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
";
        } else {
            // line 12
            echo "    <div class=\"widget-content widget-configuration\">
        <div class=\"form-container\">
            ";
            // line 14
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("action" => ($context["formAction"] ?? null), "attr" => array("id" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()))));
            echo "
                <fieldset class=\"form form-horizontal\">
                    ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            ";
            // line 22
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
            ";
            // line 23
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    </div>
";
        }
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard/dialog:configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  60 => 23,  56 => 22,  50 => 19,  46 => 18,  41 => 16,  36 => 14,  32 => 12,  27 => 10,  24 => 9,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Dashboard/dialog:configure.html.twig", "");
    }
}
