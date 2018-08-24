<?php

/* OroWorkflowBundle:Widget/widget:transitionForm.html.twig */
class __TwigTemplate_e38ca48099388fcce958107b4c5e2e3bc384eaadbea6d03e2fbc622cc40921b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'transition_widget_class' => array($this, 'block_transition_widget_class'),
            'transition_widget' => array($this, 'block_transition_widget'),
            'transition_form' => array($this, 'block_transition_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWorkflowBundle:Widget/widget:transitionForm.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (($context["saved"] ?? null)) {
            // line 4
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("trigger" => array(0 => array("eventBroker" => "widget", "name" => "formSave", "args" => array(0 => ((            // line 9
array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), null)) : (null)))))));
            // line 13
            echo "
    ";
            // line 14
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
";
        } else {
            // line 16
            echo "    <div class=\"";
            $this->displayBlock('transition_widget_class', $context, $blocks);
            echo "\">
        ";
            // line 17
            $this->displayBlock('transition_widget', $context, $blocks);
            // line 54
            echo "    </div>
";
        }
    }

    // line 16
    public function block_transition_widget_class($context, array $blocks = array())
    {
        echo "widget-content";
    }

    // line 17
    public function block_transition_widget($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 19
            echo "                <div class=\"alert alert-error\" ";
            echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroworkflow/js/app/views/transition/transition-error-view", "options" => array("wid" => $this->getAttribute($this->getAttribute(            // line 22
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"))));
            // line 24
            echo ">
                    ";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('transition_form', $context, $blocks);
        // line 53
        echo "        ";
    }

    // line 29
    public function block_transition_form($context, array $blocks = array())
    {
        // line 30
        echo "                ";
        $context["frontendMessage"] = $this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array()), "message", array());
        // line 31
        echo "                ";
        $context["transitionMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["frontendMessage"] ?? null), "content", array()), $this->getAttribute(($context["frontendMessage"] ?? null), "message_parameters", array()), "workflows");
        // line 32
        echo "                ";
        if ((($context["transitionMessage"] ?? null) == $this->getAttribute(($context["frontendMessage"] ?? null), "content", array()))) {
            // line 33
            echo "                    ";
            // line 34
            echo "                    ";
            $context["transitionMessage"] = "";
            // line 35
            echo "                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if (($context["transitionMessage"] ?? null)) {
            // line 38
            echo "                    <div class=\"alert\">";
            echo twig_escape_filter($this->env, ($context["transitionMessage"] ?? null), "html", null, true);
            echo "</div>
                ";
        }
        // line 40
        echo "                <form method=\"post\"
                      data-nohash=\"true\"
                      data-disable-autofocus=\"true\"
                      ";
        // line 43
        if (($this->getAttribute(($context["transition"] ?? null), "displayType", array()) != "dialog")) {
            echo "data-collect=\"true\"";
        }
        // line 44
        echo "                      id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
                      name=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
                      action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\"
                      class=\"form-dialog oro-workflow-transition-form\"
                      ";
        // line 48
        if ($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "pageComponent", array(), "any", true, true)) {
            echo $context["UI"]->getrenderPageComponentAttributes($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array()), "pageComponent", array()));
        }
        echo ">
                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
                </form>
                ";
        // line 51
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget/widget:transitionForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 51,  148 => 49,  142 => 48,  137 => 46,  133 => 45,  128 => 44,  124 => 43,  119 => 40,  113 => 38,  111 => 37,  108 => 36,  105 => 35,  102 => 34,  100 => 33,  97 => 32,  94 => 31,  91 => 30,  88 => 29,  84 => 53,  82 => 29,  79 => 28,  73 => 25,  70 => 24,  68 => 22,  66 => 19,  63 => 18,  60 => 17,  54 => 16,  48 => 54,  46 => 17,  41 => 16,  36 => 14,  33 => 13,  31 => 9,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget/widget:transitionForm.html.twig", "");
    }
}
