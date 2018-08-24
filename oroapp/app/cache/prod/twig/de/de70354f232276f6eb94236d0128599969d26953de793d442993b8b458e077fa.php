<?php

/* OroUIBundle:actions/dialog:move.html.twig */
class __TwigTemplate_98b34e3a6b02cc640fc9c2641998a985e59ed51545179e24a4eb44fb3be10aa4 extends Twig_Template
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
            $context["widgetResponse"] = array("widget" => array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.jstree.move.success.label", array("%nodes%" =>             // line 4
($context["nodesName"] ?? null))), "triggerSuccess" => true, "trigger" => array(0 => array("eventBroker" => "widget", "name" => "formSave", "args" => array(0 =>             // line 9
($context["changed"] ?? null)))), "remove" => true));
            // line 14
            echo "
    ";
            // line 15
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
";
        } else {
            // line 17
            echo "    ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => $this));
            // line 18
            echo "    <div class=\"widget-content\">
        <div class=\"form-container\">
            ";
            // line 20
            $context["formAction"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array());
            // line 21
            echo "            <form id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    ";
            // line 23
            $context["formErrors"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 24
            echo "
                    ";
            // line 25
            if (($context["formErrors"] ?? null)) {
                // line 26
                echo "                        <div class=\"alert alert-error\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                            ";
                // line 28
                echo ($context["formErrors"] ?? null);
                echo "
                        </div>
                    ";
            }
            // line 31
            echo "                    <div class=\"span6\">
                        <div class=\"control-group control-group-hidden\">
                            <div class=\"control-label wrap\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.jstree.move.source.label"), "html", null, true);
            echo "</div>
                            <div class=\"controls\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "source", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 36
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["source"], "parents", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
                    // line 37
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "label", array()), "html", null, true);
                    echo "&nbsp;&gt;&nbsp;
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "label", array()), "html", null, true);
                echo "
                                    <br />
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </div>
                        </div>
                        ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    </div>

                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 53
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions/dialog:move.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  122 => 49,  118 => 48,  111 => 44,  107 => 42,  97 => 39,  88 => 37,  83 => 36,  79 => 35,  74 => 33,  70 => 31,  64 => 28,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  43 => 21,  41 => 20,  37 => 18,  34 => 17,  29 => 15,  26 => 14,  24 => 9,  23 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:actions/dialog:move.html.twig", "");
    }
}
