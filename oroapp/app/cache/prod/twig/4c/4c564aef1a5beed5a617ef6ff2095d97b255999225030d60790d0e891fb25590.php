<?php

/* OroActionBundle:Operation:form.html.twig */
class __TwigTemplate_978ec5717b44c4b714dc6d222b1c4660447081e736f4b0f7a268b3efc13e6d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget_content' => array($this, 'block_widget_content'),
            'widget_content_class' => array($this, 'block_widget_content_class'),
            'widget_content_inner' => array($this, 'block_widget_content_inner'),
            'messages' => array($this, 'block_messages'),
            'errors' => array($this, 'block_errors'),
            'errors_inner' => array($this, 'block_errors_inner'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_errors_inner' => array($this, 'block_form_errors_inner'),
            'form' => array($this, 'block_form'),
            'form_inner' => array($this, 'block_form_inner'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_actions' => array($this, 'block_form_actions'),
            'form_actions_inner' => array($this, 'block_form_actions_inner'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('widget_content', $context, $blocks);
    }

    public function block_widget_content($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (array_key_exists("response", $context)) {
            // line 3
            echo "        ";
            $context["widgetResponse"] = array("widget" => array("trigger" => array(0 => array("eventBroker" => "widget", "name" => "formSave", "args" => array(0 =>             // line 8
($context["response"] ?? null))))));
            // line 12
            echo "
        ";
            // line 13
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
    ";
        } else {
            // line 15
            echo "        <div class=\"";
            $this->displayBlock('widget_content_class', $context, $blocks);
            echo "\">
            ";
            // line 16
            $this->displayBlock('widget_content_inner', $context, $blocks);
            // line 86
            echo "        </div>
    ";
        }
    }

    // line 15
    public function block_widget_content_class($context, array $blocks = array())
    {
        echo "widget-content";
    }

    // line 16
    public function block_widget_content_inner($context, array $blocks = array())
    {
        // line 17
        echo "                ";
        $this->displayBlock('messages', $context, $blocks);
        // line 30
        echo "                ";
        $this->displayBlock('errors', $context, $blocks);
        // line 43
        echo "                ";
        if (array_key_exists("form", $context)) {
            // line 44
            echo "                    ";
            $this->displayBlock('form_errors', $context, $blocks);
            // line 53
            echo "
                    ";
            // line 54
            $this->displayBlock('form', $context, $blocks);
            // line 83
            echo "                ";
        }
        // line 84
        echo "
            ";
    }

    // line 17
    public function block_messages($context, array $blocks = array())
    {
        // line 18
        echo "                    ";
        if ((array_key_exists("messages", $context) && twig_length_filter($this->env, ($context["messages"] ?? null)))) {
            // line 19
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["items"]) {
                // line 20
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <ul>
                                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["items"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                            </ul>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    ";
        }
        // line 29
        echo "                ";
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        // line 31
        echo "                    ";
        if ((array_key_exists("errors", $context) && twig_length_filter($this->env, ($context["errors"] ?? null)))) {
            // line 32
            echo "                        <div class=\"alert alert-error\">
                            <ul>
                            ";
            // line 34
            $this->displayBlock('errors_inner', $context, $blocks);
            // line 39
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 42
        echo "                ";
    }

    // line 34
    public function block_errors_inner($context, array $blocks = array())
    {
        // line 35
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 36
            echo "                                    <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array()), (($this->getAttribute($context["error"], "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["error"], "parameters", array()), array())) : (array()))), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                            ";
    }

    // line 44
    public function block_form_errors($context, array $blocks = array())
    {
        // line 45
        echo "                        ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 46
            echo "                            <div class=\"alert alert-error\">
                                ";
            // line 47
            $this->displayBlock('form_errors_inner', $context, $blocks);
            // line 50
            echo "                            </div>
                        ";
        }
        // line 52
        echo "                    ";
    }

    // line 47
    public function block_form_errors_inner($context, array $blocks = array())
    {
        // line 48
        echo "                                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                                ";
    }

    // line 54
    public function block_form($context, array $blocks = array())
    {
        // line 55
        echo "                        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "POST", "action" => $this->getAttribute($this->getAttribute(        // line 57
($context["app"] ?? null), "request", array()), "uri", array()), "attr" => array("class" => "form-dialog", "data-nohash" => "true", "data-disable-autofocus" => "true", "id" => $this->getAttribute($this->getAttribute(        // line 62
($context["form"] ?? null), "vars", array()), "id", array()))));
        // line 64
        echo "
                            ";
        // line 65
        $this->displayBlock('form_inner', $context, $blocks);
        // line 80
        echo "                        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        ";
        // line 81
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
                    ";
    }

    // line 65
    public function block_form_inner($context, array $blocks = array())
    {
        // line 66
        echo "                                ";
        $this->displayBlock('form_widget', $context, $blocks);
        // line 69
        echo "
                                ";
        // line 70
        $this->displayBlock('form_actions', $context, $blocks);
        // line 79
        echo "                            ";
    }

    // line 66
    public function block_form_widget($context, array $blocks = array())
    {
        // line 67
        echo "                                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                                ";
    }

    // line 70
    public function block_form_actions($context, array $blocks = array())
    {
        // line 71
        echo "                                    ";
        $context["options"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array(), "any", false, true), "frontendOptions", array(), "any", false, true), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array(), "any", false, true), "frontendOptions", array(), "any", false, true), "options", array()), array())) : (array()));
        // line 72
        echo "                                    <div class=\"widget-actions form-actions\">
                                        ";
        // line 73
        $this->displayBlock('form_actions_inner', $context, $blocks);
        // line 77
        echo "                                    </div>
                                ";
    }

    // line 73
    public function block_form_actions_inner($context, array $blocks = array())
    {
        // line 74
        echo "                                            <button class=\"btn\" type=\"reset\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["options"] ?? null), "cancelText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "cancelText", array()), "Cancel")) : ("Cancel"))), "html", null, true);
        echo "</button>
                                            <button class=\"btn btn-success\" type=\"submit\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["options"] ?? null), "okText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "okText", array()), "Submit")) : ("Submit"))), "html", null, true);
        echo "</button>
                                        ";
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Operation:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  289 => 75,  284 => 74,  281 => 73,  276 => 77,  274 => 73,  271 => 72,  268 => 71,  265 => 70,  258 => 67,  255 => 66,  251 => 79,  249 => 70,  246 => 69,  243 => 66,  240 => 65,  234 => 81,  229 => 80,  227 => 65,  224 => 64,  222 => 62,  221 => 57,  219 => 55,  216 => 54,  209 => 48,  206 => 47,  202 => 52,  198 => 50,  196 => 47,  193 => 46,  190 => 45,  187 => 44,  183 => 38,  174 => 36,  169 => 35,  166 => 34,  162 => 42,  157 => 39,  155 => 34,  151 => 32,  148 => 31,  145 => 30,  141 => 29,  138 => 28,  130 => 25,  121 => 23,  117 => 22,  111 => 20,  106 => 19,  103 => 18,  100 => 17,  95 => 84,  92 => 83,  90 => 54,  87 => 53,  84 => 44,  81 => 43,  78 => 30,  75 => 17,  72 => 16,  66 => 15,  60 => 86,  58 => 16,  53 => 15,  48 => 13,  45 => 12,  43 => 8,  41 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Operation:form.html.twig", "");
    }
}
