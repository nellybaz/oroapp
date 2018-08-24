<?php

/* OroNoteBundle:Note/dialog:update.html.twig */
class __TwigTemplate_f148ef5b65b590168364ff5d896a9abf0387834ccfaa05329e6518615a3d802a extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNoteBundle:Note/dialog:update.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        if (($context["saved"] ?? null)) {
            // line 5
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.note_saved"), "triggerSuccess" => true, "remove" => true));
            // line 12
            echo "
    ";
            // line 13
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
";
        } else {
            // line 15
            echo "    <div class=\"widget-content\">
        <div class=\"form-container\">
            <form id=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\" class=\"note-form\">
                <fieldset class=\"form-horizontal control-group\">
                    <label>
                        ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'widget');
            echo "
                        ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'errors');
            echo "
                    </label>
                    <div class=\"pull-left\">
                        ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachment", array()), 'widget');
            echo "
                    </div>
                </fieldset>
                <fieldset class=\"form-horizontal\">
                    ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 31
            echo twig_escape_filter($this->env, ($context["submitLabel"] ?? null), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 35
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    </div>
";
        }
        // line 39
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNoteBundle:Note/dialog:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 39,  86 => 35,  79 => 31,  75 => 30,  70 => 28,  63 => 24,  57 => 21,  53 => 20,  43 => 17,  39 => 15,  34 => 13,  31 => 12,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNoteBundle:Note/dialog:update.html.twig", "");
    }
}
