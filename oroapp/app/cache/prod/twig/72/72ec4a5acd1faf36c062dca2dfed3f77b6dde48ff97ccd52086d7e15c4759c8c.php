<?php

/* OroWorkflowBundle::macros.html.twig */
class __TwigTemplate_6ac75a9884ed556bea0231e7c49bf4844002831329f1fee2933c85c607b5c55e extends Twig_Template
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
        // line 106
        echo "
";
    }

    // line 1
    public function getrenderTransitionButton($__workflow__ = null, $__transition__ = null, $__workflowItem__ = null, $__transitionData__ = null, $__onlyLink__ = null, $__noIcon__ = null, $__noIconText__ = null, $__aClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "workflow" => $__workflow__,
            "transition" => $__transition__,
            "workflowItem" => $__workflowItem__,
            "transitionData" => $__transitionData__,
            "onlyLink" => $__onlyLink__,
            "noIcon" => $__noIcon__,
            "noIconText" => $__noIconText__,
            "aClass" => $__aClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWorkflowBundle::macros.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            if ((($this->getAttribute(($context["transition"] ?? null), "displayType", array()) == "dialog") && $this->getAttribute(($context["transition"] ?? null), "hasForm", array(), "method"))) {
                // line 5
                echo "        ";
                if (( !$this->getAttribute(($context["transitionData"] ?? null), "dialog-url", array(), "array", true, true) ||  !$this->getAttribute(($context["transitionData"] ?? null), "dialog-url", array(), "array"))) {
                    // line 6
                    echo "            ";
                    $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("dialog-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_widget_transition_form", array("workflowItemId" => $this->getAttribute(                    // line 10
($context["workflowItem"] ?? null), "id", array()), "transitionName" => $this->getAttribute(                    // line 11
($context["transition"] ?? null), "name", array())))));
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "        ";
                if (( !$this->getAttribute(($context["transitionData"] ?? null), "jsDialogWidget", array(), "array", true, true) ||  !$this->getAttribute(($context["transitionData"] ?? null), "jsDialogWidget", array(), "array"))) {
                    // line 17
                    echo "            ";
                    $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("jsDialogWidget" => twig_constant("Oro\\Bundle\\WorkflowBundle\\Button\\AbstractTransitionButton::TRANSITION_JS_DIALOG_WIDGET")));
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    ";
            // line 23
            if (( !$this->getAttribute(($context["transitionData"] ?? null), "transition-url", array(), "array", true, true) ||  !$this->getAttribute(($context["transitionData"] ?? null), "transition-url", array(), "array"))) {
                // line 24
                echo "        ";
                $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_transit", array("workflowItemId" => $this->getAttribute(                // line 28
($context["workflowItem"] ?? null), "id", array()), "transitionName" => $this->getAttribute(                // line 29
($context["transition"] ?? null), "name", array())))));
                // line 33
                echo "    ";
            }
            // line 34
            echo "
    ";
            // line 35
            if ($this->getAttribute(($context["transitionData"] ?? null), "transition-condition-messages", array(), "array", true, true)) {
                // line 36
                echo "        ";
                $context["conditionMessages"] = array();
                // line 37
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["transitionData"] ?? null), "transition-condition-messages", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 38
                    echo "            ";
                    $context["conditionMessages"] = twig_array_merge(($context["conditionMessages"] ?? null), array(0 => (("<li>" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array()), $this->getAttribute($context["error"], "parameters", array()))) . "</li>")));
                    // line 39
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        ";
                if (twig_length_filter($this->env, ($context["conditionMessages"] ?? null))) {
                    // line 41
                    echo "            ";
                    $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-condition-messages" => (("<ol>" . twig_join_filter(                    // line 42
($context["conditionMessages"] ?? null))) . "</ol>")));
                    // line 44
                    echo "        ";
                } else {
                    // line 45
                    echo "            ";
                    $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-condition-messages" => ""));
                    // line 48
                    echo "        ";
                }
                // line 49
                echo "    ";
            }
            // line 50
            echo "
    ";
            // line 51
            $context["data"] = twig_array_merge(($context["transitionData"] ?? null), array("page-component-module" => (($this->getAttribute(            // line 52
($context["transitionData"] ?? null), "page-component-module", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["transitionData"] ?? null), "page-component-module", array(), "array"), "oroworkflow/js/app/components/button-component")) : ("oroworkflow/js/app/components/button-component")), "page-component-options" => twig_jsonencode_filter(twig_array_merge((($this->getAttribute(            // line 53
($context["transitionData"] ?? null), "page-component-options", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["transitionData"] ?? null), "page-component-options", array(), "array"), array())) : (array())), array("displayType" => $this->getAttribute(($context["transition"] ?? null), "displayType", array()))))));
            // line 55
            echo "
    ";
            // line 56
            if (($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "dialog", array(), "any", true, true))) {
                // line 57
                echo "        ";
                $context["data"] = twig_array_merge(($context["data"] ?? null), array("dialog-options" => twig_jsonencode_filter($this->getAttribute($this->getAttribute(                // line 58
($context["transition"] ?? null), "frontendOptions", array()), "dialog", array()))));
                // line 60
                echo "    ";
            }
            // line 61
            echo "
    ";
            // line 62
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["transition"] ?? null), "buttonLabel", array()), array(), "workflows");
            // line 63
            echo "    ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["transition"] ?? null), "buttonTitle", array()), array(), "workflows");
            // line 64
            echo "
    ";
            // line 65
            if (($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "message", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "message", array(), "any", false, true), "content", array(), "any", true, true))) {
                // line 66
                echo "        ";
                $context["frontendMessage"] = $this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array()), "message", array());
                // line 67
                echo "
        ";
                // line 68
                $context["transitionMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["frontendMessage"] ?? null), "content", array()), $this->getAttribute(($context["frontendMessage"] ?? null), "message_parameters", array()), "workflows");
                // line 69
                echo "        ";
                if ((($context["transitionMessage"] ?? null) && (($context["transitionMessage"] ?? null) != $this->getAttribute(($context["frontendMessage"] ?? null), "content", array())))) {
                    // line 70
                    echo "            ";
                    // line 71
                    echo "            ";
                    $context["message"] = twig_array_merge(($context["frontendMessage"] ?? null), array("content" => nl2br(twig_escape_filter($this->env,                     // line 72
($context["transitionMessage"] ?? null), "html", null, true)), "title" => (($this->getAttribute(                    // line 73
($context["frontendMessage"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["frontendMessage"] ?? null), "title", array()), ($context["title"] ?? null))) : (($context["title"] ?? null)))));
                    // line 75
                    echo "        ";
                }
                // line 76
                echo "    ";
            }
            // line 77
            echo "    
    ";
            // line 78
            $context["data"] = twig_array_merge(($context["data"] ?? null), array("message" => twig_jsonencode_filter(((            // line 79
array_key_exists("message", $context)) ? (_twig_default_filter(($context["message"] ?? null), array())) : (array()))), "transition-label" =>             // line 80
($context["label"] ?? null)));
            // line 82
            echo "    
    ";
            // line 83
            ob_start();
            // line 84
            echo "        ";
            echo twig_escape_filter($this->env, ($context["aClass"] ?? null), "html", null, true);
            echo "
        icons-holder-text
        ";
            // line 86
            if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter(($context["onlyLink"] ?? null), false)) : (false))) {
                echo "btn workflow-transition-buttons";
            }
            // line 87
            echo "        ";
            if (($this->getAttribute(($context["transition"] ?? null), "displayType", array()) == "dialog")) {
                echo "no-hash";
            }
            // line 88
            echo "        ";
            if ( !$this->getAttribute(($context["transitionData"] ?? null), "enabled", array())) {
                echo "disabled";
            }
            // line 89
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "class", array()), "")) : ("")), "html", null, true);
            echo "
    ";
            $context["class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 91
            echo "
    ";
            // line 92
            $context["iCss"] = ((((array_key_exists("noIcon", $context)) ? (_twig_default_filter(($context["noIcon"] ?? null), false)) : (false))) ? (false) : ((($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "icon", array()), "")) : (""))));
            // line 93
            echo "
    ";
            // line 95
            echo "    ";
            echo $context["ui"]->getlink(array("path" => "javascript:void(0);", "id" => sprintf("transition-%s-%s", $this->getAttribute(            // line 97
($context["workflow"] ?? null), "name", array()), $this->getAttribute(($context["transition"] ?? null), "name", array())), "iCss" =>             // line 98
($context["iCss"] ?? null), "title" =>             // line 99
($context["title"] ?? null), "class" =>             // line 100
($context["class"] ?? null), "data" =>             // line 101
($context["data"] ?? null), "label" =>             // line 102
($context["label"] ?? null), "noIconText" => ((            // line 103
array_key_exists("noIconText", $context)) ? (_twig_default_filter(($context["noIconText"] ?? null), false)) : (false))));
            // line 104
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 107
    public function getrenderGoToTranslationsIconByLink($__link__ = null, $__large__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "link" => $__link__,
            "large" => $__large__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "    <span class=\"workflow-translatable-field\">
        <a target=\"_blank\" href=\"";
            // line 109
            echo ($context["link"] ?? null);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.action.workflow.go_to_translations"), "html", null, true);
            echo "\">
            <i class=\"fa fa-language";
            // line 110
            if (($context["large"] ?? null)) {
                echo " large-icon";
            }
            echo "\"></i>
        </a>
    </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 110,  272 => 109,  269 => 108,  256 => 107,  240 => 104,  238 => 103,  237 => 102,  236 => 101,  235 => 100,  234 => 99,  233 => 98,  232 => 97,  230 => 95,  227 => 93,  225 => 92,  222 => 91,  216 => 89,  211 => 88,  206 => 87,  202 => 86,  196 => 84,  194 => 83,  191 => 82,  189 => 80,  188 => 79,  187 => 78,  184 => 77,  181 => 76,  178 => 75,  176 => 73,  175 => 72,  173 => 71,  171 => 70,  168 => 69,  166 => 68,  163 => 67,  160 => 66,  158 => 65,  155 => 64,  152 => 63,  150 => 62,  147 => 61,  144 => 60,  142 => 58,  140 => 57,  138 => 56,  135 => 55,  133 => 53,  132 => 52,  131 => 51,  128 => 50,  125 => 49,  122 => 48,  119 => 45,  116 => 44,  114 => 42,  112 => 41,  109 => 40,  103 => 39,  100 => 38,  95 => 37,  92 => 36,  90 => 35,  87 => 34,  84 => 33,  82 => 29,  81 => 28,  79 => 24,  77 => 23,  74 => 22,  71 => 21,  68 => 20,  65 => 17,  62 => 16,  59 => 15,  57 => 11,  56 => 10,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  43 => 2,  24 => 1,  19 => 106,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle::macros.html.twig", "");
    }
}
