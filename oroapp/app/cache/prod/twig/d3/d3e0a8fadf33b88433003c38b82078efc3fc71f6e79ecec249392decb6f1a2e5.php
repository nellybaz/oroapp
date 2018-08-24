<?php

/* OroEmailBundle:AutoResponseRule/dialog:update.html.twig */
class __TwigTemplate_736286cf7c27f54097b82c461e6adc5427ec4cba25e2f6cd50ca3a909748a337 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:AutoResponseRule/dialog:update.html.twig", 1);
        // line 2
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroEmailBundle:AutoResponseRule/dialog:update.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        if (($context["saved"] ?? null)) {
            // line 5
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("triggerSuccess" => true, "trigger" => array(0 => array("name" => "auto_response_rule:save", "args" => array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 10
($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))), "remove" => true));
            // line 15
            echo "
    ";
            // line 16
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
";
        } else {
            // line 18
            echo "    <div class=\"widget-content\">
        ";
            // line 19
            $context["pageComponent"] = array("view" => "oroemail/js/app/views/email-template-editor-view", "layout" => "separate");
            // line 23
            echo "        <div class=\"form-container\" ";
            echo $context["UI"]->getrenderPageComponentAttributes(($context["pageComponent"] ?? null));
            echo ">
            ";
            // line 24
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(            // line 25
($context["form"] ?? null), 'form_start', array("attr" => array("id" => $this->getAttribute($this->getAttribute(            // line 28
($context["form"] ?? null), "vars", array()), "id", array())), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(            // line 31
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 32
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"))));
            // line 35
            echo "
                <fieldset class=\"form form-horizontal\">
                    <div>
                        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "active", array()), 'row');
            echo "
                        ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
            echo "
                        <div class=\"control-group\">
                            <label class=\"required control-label\">
                                ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.autoresponserule.conditions.label"), "html", null, true);
            echo "
                            </label>
                            <div class=\"controls\">
                                ";
            // line 45
            echo $context["QD"]->getquery_designer_condition_builder(array("id" => "oro_email_autoresponserule-condition-builder", "fieldConditionModule" => "oroemail/js/app/views/email-field-condition-view", "fieldConditionOptions" => array("entityData" =>             // line 49
($context["emailEntityData"] ?? null)), "metadata" =>             // line 51
($context["metadata"] ?? null)));
            // line 52
            echo "
                            </div>
                        </div>
                        ";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    </div>
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        ";
            // line 59
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "data", array()), "id", array())) ? ("Update") : ("Add"));
            // line 60
            echo "                        <button class=\"btn btn-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            ";
            // line 63
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
            ";
            // line 64
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
            <div";
            // line 65
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroemail/js/app/components/auto-response-rule-component"));
            // line 67
            echo "></div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:AutoResponseRule/dialog:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 67,  113 => 65,  109 => 64,  105 => 63,  98 => 60,  96 => 59,  92 => 58,  86 => 55,  81 => 52,  79 => 51,  78 => 49,  77 => 45,  71 => 42,  65 => 39,  61 => 38,  56 => 35,  54 => 32,  53 => 31,  52 => 28,  51 => 25,  50 => 24,  45 => 23,  43 => 19,  40 => 18,  35 => 16,  32 => 15,  30 => 10,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:AutoResponseRule/dialog:update.html.twig", "");
    }
}
