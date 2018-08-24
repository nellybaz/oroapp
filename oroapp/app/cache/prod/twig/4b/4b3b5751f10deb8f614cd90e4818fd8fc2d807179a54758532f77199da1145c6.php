<?php

/* OroCallBundle:Call/widget:update.html.twig */
class __TwigTemplate_d704121106cb81028aee050dec928fa6e5d4251ef451805a57ce2c59f06b9a07 extends Twig_Template
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
        echo "<div class=\"widget-content\">
    ";
        // line 2
        if ((array_key_exists("saved", $context) && ($context["saved"] ?? null))) {
            // line 3
            echo "        <script type=\"text/javascript\">
            require(['underscore', 'orotranslation/js/translator', 'oroui/js/widget-manager',
                'oroui/js/messenger', 'oroui/js/mediator'],
            function(_, __, widgetManager, messenger, mediator) {
                widgetManager.getWidgetInstance(";
            // line 7
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function(widget) {
                    messenger.notificationFlashMessage('success', __('Call logged successfully'));
                    mediator.trigger('widget_success:' + widget.getAlias());
                    mediator.trigger('widget_success:' + widget.getWid());
                    widget.remove();
                });
            });
        </script>
    ";
        } else {
            // line 16
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array()) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())))) {
                // line 17
                echo "            <div class=\"alert alert-error\">
                <div class=\"message\">
                    ";
                // line 19
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
                </div>
            </div>
        ";
            }
            // line 23
            echo "        <div class=\"form-container\">
            <form id=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    <div class=\"span6\">
                        ";
            // line 27
            if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row');
            }
            // line 28
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'row');
            echo "
                        ";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notes", array()), 'row');
            echo "
                    </div>
                    <div class=\"span6\">
                        ";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "callDateTime", array()), 'row');
            echo "
                        ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phoneNumber", array()), 'row');
            echo "
                        ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "direction", array()), 'row');
            echo "
                        ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "duration", array()), 'row');
            echo "
                        <div class=\"hide\">
                            ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "callStatus", array()), 'row');
            echo "
                        </div>
                    </div>
                    <div class=\"span6\">
                        ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    </div>
                    <div class=\"span6\">
                        ";
            // line 44
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("call_log_widget_additional_properties", $context)) ? (_twig_default_filter(($context["call_log_widget_additional_properties"] ?? null), "call_log_widget_additional_properties")) : ("call_log_widget_additional_properties")), array("entity" => ($context["entity"] ?? null), "form" => ($context["form"] ?? null), "formAction" => ($context["formAction"] ?? null), "saved" => ($context["saved"] ?? null)));
            // line 45
            echo "                    </div>
                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        ";
            // line 48
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
                // line 49
                echo "                        <button class=\"btn btn-primary\" type=\"submit\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.update_log_call"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 51
                echo "                        <button class=\"btn btn-primary\" type=\"submit\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.log_call"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 53
            echo "                        ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("call_log_widget_update_actions", $context)) ? (_twig_default_filter(($context["call_log_widget_update_actions"] ?? null), "call_log_widget_update_actions")) : ("call_log_widget_update_actions")), array("entity" => ($context["entity"] ?? null), "form" => ($context["form"] ?? null), "formAction" => ($context["formAction"] ?? null), "saved" => ($context["saved"] ?? null)));
            // line 54
            echo "                    </div>
                </fieldset>
            </form>
            ";
            // line 57
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    ";
        }
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 60,  146 => 57,  141 => 54,  138 => 53,  132 => 51,  126 => 49,  124 => 48,  120 => 47,  116 => 45,  114 => 44,  108 => 41,  101 => 37,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  78 => 29,  73 => 28,  69 => 27,  59 => 24,  56 => 23,  49 => 19,  45 => 17,  42 => 16,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call/widget:update.html.twig", "");
    }
}
