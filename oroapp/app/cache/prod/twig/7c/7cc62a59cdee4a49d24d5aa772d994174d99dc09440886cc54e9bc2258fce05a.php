<?php

/* OroTaskBundle:Task/widget:update.html.twig */
class __TwigTemplate_4ba16196a7107b6160d2291a8a7791fd8239dff1e6e8831da523fc95594d7bc7 extends Twig_Template
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
                    messenger.notificationFlashMessage('success', __('Task created successfully'));
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'row');
            echo "
                        ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row');
            echo "
                    </div>
                    <div class=\"span6\">
                        ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dueDate", array()), 'row');
            echo "
                        ";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "taskPriority", array()), 'row');
            echo "
                        ";
            // line 33
            if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
                // line 34
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row');
                echo "
                        ";
            }
            // line 36
            echo "                    </div>
                    <div class=\"span6\">
                        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    </div>
                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        ";
            // line 42
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
                // line 43
                echo "                        <button class=\"btn btn-primary\" type=\"submit\">
                            ";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.update_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_label"))), "html", null, true);
                echo "
                        </button>
                        ";
            } else {
                // line 47
                echo "                        <button class=\"btn btn-primary\" type=\"submit\">
                            ";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_label"))), "html", null, true);
                echo "
                        </button>
                        ";
            }
            // line 51
            echo "                    </div>
                </fieldset>
            </form>
            ";
            // line 54
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    ";
        }
        // line 57
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  134 => 54,  129 => 51,  123 => 48,  120 => 47,  114 => 44,  111 => 43,  109 => 42,  105 => 41,  99 => 38,  95 => 36,  89 => 34,  87 => 33,  83 => 32,  79 => 31,  73 => 28,  69 => 27,  59 => 24,  56 => 23,  49 => 19,  45 => 17,  42 => 16,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task/widget:update.html.twig", "");
    }
}
