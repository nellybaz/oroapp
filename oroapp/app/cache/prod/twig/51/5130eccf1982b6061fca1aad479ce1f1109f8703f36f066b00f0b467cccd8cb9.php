<?php

/* OroWorkflowBundle:Widget/widget:button.html.twig */
class __TwigTemplate_aeb1809746b76acc00905467d830f043ecebe0f7b8bbdd16c2cd9edc723871cb extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getAttribute(($context["workflow"] ?? null), "transitionsData", array())) || (($this->getAttribute(($context["workflow"] ?? null), "resetAllowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["workflow"] ?? null), "resetAllowed", array()), false)) : (false)))) {
            // line 2
            echo "    ";
            $context["blockId"] = ("entity-transitions-container-" . twig_random($this->env));
            // line 3
            echo "    <div class=\"btn-group\" id=\"";
            echo twig_escape_filter($this->env, ($context["blockId"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["workflow"] ?? null), "transitionsData", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 5
                echo "            ";
                // line 6
                echo "            ";
                $context["transitionLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["data"], "transition", array()), "label", array()), array(), "workflows");
                // line 7
                echo "
            ";
                // line 8
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "transition", array(), "any", false, true), "frontendOptions", array(), "any", false, true), "message", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "transition", array(), "any", false, true), "frontendOptions", array(), "any", false, true), "message", array(), "any", false, true), "content", array(), "any", true, true))) {
                    // line 9
                    echo "                ";
                    $context["frontendMessage"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "transition", array()), "frontendOptions", array()), "message", array());
                    // line 10
                    echo "
                ";
                    // line 11
                    $context["transitionMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["frontendMessage"] ?? null), "content", array()), (($this->getAttribute(($context["frontendMessage"] ?? null), "message_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["frontendMessage"] ?? null), "message_parameters", array()), array())) : (array())), "workflows");
                    // line 12
                    echo "                ";
                    if ((($context["transitionMessage"] ?? null) && (($context["transitionMessage"] ?? null) != $this->getAttribute(($context["frontendMessage"] ?? null), "content", array())))) {
                        // line 13
                        echo "                    ";
                        // line 14
                        echo "                    ";
                        $context["message"] = array("content" => nl2br(twig_escape_filter($this->env,                         // line 15
($context["transitionMessage"] ?? null), "html", null, true)), "title" => (($this->getAttribute(                        // line 16
($context["frontendMessage"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["frontendMessage"] ?? null), "title", array()), ($context["transitionLabel"] ?? null))) : (($context["transitionLabel"] ?? null))));
                        // line 18
                        echo "                ";
                    }
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "
            ";
                // line 21
                $context["transitionData"] = array("enabled" => $this->getAttribute(                // line 22
$context["data"], "isAllowed", array()), "transition-label" =>                 // line 23
($context["transitionLabel"] ?? null), "message" => twig_jsonencode_filter(((                // line 24
array_key_exists("message", $context)) ? (_twig_default_filter(($context["message"] ?? null), array())) : (array()))), "confirmation" => twig_jsonencode_filter((($this->getAttribute($this->getAttribute($this->getAttribute(                // line 25
$context["data"], "transition", array(), "any", false, true), "frontendOptions", array(), "any", false, true), "confirmation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "transition", array(), "any", false, true), "frontendOptions", array(), "any", false, true), "confirmation", array()), array())) : (array()))), "transition-condition-messages" => $this->getAttribute(                // line 26
$context["data"], "errors", array()));
                // line 28
                echo "
            ";
                // line 29
                if (($this->getAttribute($this->getAttribute($context["data"], "transition", array()), "displayType", array()) == "dialog")) {
                    // line 30
                    echo "                ";
                    if ( !$this->getAttribute($context["data"], "workflowItem", array(), "any", true, true)) {
                        // line 31
                        echo "                    ";
                        $context["data"] = twig_array_merge($context["data"], array("workflowItem" => null));
                        // line 32
                        echo "                    ";
                        if ($this->getAttribute($this->getAttribute($context["data"], "transition", array()), "hasForm", array(), "method")) {
                            // line 33
                            echo "                        ";
                            $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("dialog-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_widget_start_transition_form", array("workflowName" => $this->getAttribute($this->getAttribute(                            // line 37
$context["data"], "workflow", array()), "name", array()), "transitionName" => $this->getAttribute($this->getAttribute(                            // line 38
$context["data"], "transition", array()), "name", array()), "entityId" =>                             // line 39
($context["entity_id"] ?? null))), "jsDialogWidget" => twig_constant("Oro\\Bundle\\WorkflowBundle\\Button\\AbstractTransitionButton::TRANSITION_JS_DIALOG_WIDGET")));
                            // line 44
                            echo "                    ";
                        }
                        // line 45
                        echo "
                    ";
                        // line 47
                        echo "                    ";
                        $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_start", array("workflowName" => $this->getAttribute($this->getAttribute(                        // line 50
$context["data"], "workflow", array()), "name", array()), "transitionName" => $this->getAttribute($this->getAttribute(                        // line 51
$context["data"], "transition", array()), "name", array()), "entityId" =>                         // line 52
($context["entity_id"] ?? null)))));
                        // line 55
                        echo "                ";
                    }
                    // line 56
                    echo "            ";
                } else {
                    // line 57
                    echo "                ";
                    if ( !$this->getAttribute($context["data"], "workflowItem", array(), "any", true, true)) {
                        // line 58
                        echo "                    ";
                        $context["data"] = twig_array_merge($context["data"], array("workflowItem" => null));
                        // line 59
                        echo "                    ";
                        $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_start_transition_form", array("workflowName" => $this->getAttribute($this->getAttribute(                        // line 62
$context["data"], "workflow", array()), "name", array()), "transitionName" => $this->getAttribute($this->getAttribute(                        // line 63
$context["data"], "transition", array()), "name", array()), "entityId" =>                         // line 64
($context["entity_id"] ?? null), "originalUrl" =>                         // line 65
($context["originalUrl"] ?? null)))));
                        // line 68
                        echo "                ";
                    } else {
                        // line 69
                        echo "                    ";
                        $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_transition_form", array("transitionName" => $this->getAttribute($this->getAttribute(                        // line 72
$context["data"], "transition", array()), "name", array()), "workflowItemId" => $this->getAttribute($this->getAttribute(                        // line 73
$context["data"], "workflowItem", array()), "id", array()), "originalUrl" =>                         // line 74
($context["originalUrl"] ?? null)))));
                        // line 77
                        echo "                ";
                    }
                    // line 78
                    echo "            ";
                }
                // line 79
                echo "
            ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute(($context["workflowMacros"] ?? null), "renderTransitionButton", array(0 => $this->getAttribute(                // line 81
$context["data"], "workflow", array()), 1 => $this->getAttribute(                // line 82
$context["data"], "transition", array()), 2 => $this->getAttribute(                // line 83
$context["data"], "workflowItem", array()), 3 =>                 // line 84
($context["transitionData"] ?? null)), "method"), "html", null, true);
                // line 85
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget/widget:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 87,  152 => 85,  150 => 84,  149 => 83,  148 => 82,  147 => 81,  146 => 80,  143 => 79,  140 => 78,  137 => 77,  135 => 74,  134 => 73,  133 => 72,  131 => 69,  128 => 68,  126 => 65,  125 => 64,  124 => 63,  123 => 62,  121 => 59,  118 => 58,  115 => 57,  112 => 56,  109 => 55,  107 => 52,  106 => 51,  105 => 50,  103 => 47,  100 => 45,  97 => 44,  95 => 39,  94 => 38,  93 => 37,  91 => 33,  88 => 32,  85 => 31,  82 => 30,  80 => 29,  77 => 28,  75 => 26,  74 => 25,  73 => 24,  72 => 23,  71 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  59 => 16,  58 => 15,  56 => 14,  54 => 13,  51 => 12,  49 => 11,  46 => 10,  43 => 9,  41 => 8,  38 => 7,  35 => 6,  33 => 5,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget/widget:button.html.twig", "");
    }
}
