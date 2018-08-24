<?php

/* OroWorkflowBundle:Widget/widget:buttons.html.twig */
class __TwigTemplate_5849c7b3c41f67cd35518ee93c8a3babf77eec9b1a24f6b2f670a5ec46e3b9a0 extends Twig_Template
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
        $context["workflowMacros"] = $this->loadTemplate("OroWorkflowBundle::macros.html.twig", "OroWorkflowBundle:Widget/widget:buttons.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workflowsData"] ?? null));
        foreach ($context['_seq'] as $context["workflowName"] => $context["workflow"]) {
            // line 5
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["workflow"], "transitionsData", array())) || $this->getAttribute($context["workflow"], "resetAllowed", array()))) {
                // line 6
                echo "            ";
                $context["blockId"] = ("entity-transitions-container-" . twig_random($this->env));
                // line 7
                echo "            <div class=\"btn-group\" id=\"";
                echo twig_escape_filter($this->env, ($context["blockId"] ?? null), "html", null, true);
                echo "\">
                ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["workflow"], "transitionsData", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 9
                    echo "                    ";
                    // line 10
                    echo "                    ";
                    // line 11
                    echo "                    ";
                    $context["transitionData"] = array("enabled" => $this->getAttribute(                    // line 12
$context["data"], "isAllowed", array()), "message" => nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(                    // line 13
$context["data"], "transition", array()), "message", array()), array(), "workflows"), "html", null, true)), "transition-condition-messages" => $this->getAttribute(                    // line 14
$context["data"], "errors", array()));
                    // line 16
                    echo "
                    ";
                    // line 17
                    if (($this->getAttribute($this->getAttribute($context["data"], "transition", array()), "displayType", array()) == "dialog")) {
                        // line 18
                        echo "                        ";
                        if ( !$this->getAttribute($context["data"], "workflowItem", array(), "any", true, true)) {
                            // line 19
                            echo "                            ";
                            $context["data"] = twig_array_merge($context["data"], array("workflowItem" => null));
                            // line 20
                            echo "                            ";
                            if ($this->getAttribute($this->getAttribute($context["data"], "transition", array()), "hasForm", array(), "method")) {
                                // line 21
                                echo "                                ";
                                $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("dialog-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_widget_start_transition_form", array("workflowName" => $this->getAttribute($this->getAttribute(                                // line 24
$context["data"], "workflow", array()), "name", array()), "transitionName" => $this->getAttribute($this->getAttribute(                                // line 25
$context["data"], "transition", array()), "name", array()), "entityId" =>                                 // line 26
($context["entity_id"] ?? null)))));
                                // line 29
                                echo "                            ";
                            }
                            // line 30
                            echo "
                            ";
                            // line 32
                            echo "                            ";
                            $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_workflow_start", array("workflowName" => $this->getAttribute($this->getAttribute(                            // line 35
$context["data"], "workflow", array()), "name", array()), "transitionName" => $this->getAttribute($this->getAttribute(                            // line 36
$context["data"], "transition", array()), "name", array()), "entityId" =>                             // line 37
($context["entity_id"] ?? null)))));
                            // line 40
                            echo "                        ";
                        }
                        // line 41
                        echo "                    ";
                    } else {
                        // line 42
                        echo "                        ";
                        if ( !$this->getAttribute($context["data"], "workflowItem", array(), "any", true, true)) {
                            // line 43
                            echo "                            ";
                            $context["data"] = twig_array_merge($context["data"], array("workflowItem" => null));
                            // line 44
                            echo "                            ";
                            $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_start_transition_form", array("workflowName" => $this->getAttribute($this->getAttribute(                            // line 47
$context["data"], "workflow", array()), "name", array()), "transitionName" => $this->getAttribute($this->getAttribute(                            // line 48
$context["data"], "transition", array()), "name", array()), "entityId" =>                             // line 49
($context["entity_id"] ?? null)))));
                            // line 52
                            echo "                        ";
                        } else {
                            // line 53
                            echo "                            ";
                            $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_transition_form", array("transitionName" => $this->getAttribute($this->getAttribute(                            // line 56
$context["data"], "transition", array()), "name", array()), "workflowItemId" => $this->getAttribute($this->getAttribute(                            // line 57
$context["data"], "workflowItem", array()), "id", array())))));
                            // line 60
                            echo "                        ";
                        }
                        // line 61
                        echo "                    ";
                    }
                    // line 62
                    echo "
                    ";
                    // line 63
                    echo $context["workflowMacros"]->getrenderTransitionButton($this->getAttribute(                    // line 64
$context["data"], "workflow", array()), $this->getAttribute(                    // line 65
$context["data"], "transition", array()), $this->getAttribute(                    // line 66
$context["data"], "workflowItem", array()),                     // line 67
($context["transitionData"] ?? null));
                    // line 68
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            </div>
        ";
            }
            // line 72
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['workflowName'], $context['workflow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget/widget:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 73,  138 => 72,  134 => 70,  127 => 68,  125 => 67,  124 => 66,  123 => 65,  122 => 64,  121 => 63,  118 => 62,  115 => 61,  112 => 60,  110 => 57,  109 => 56,  107 => 53,  104 => 52,  102 => 49,  101 => 48,  100 => 47,  98 => 44,  95 => 43,  92 => 42,  89 => 41,  86 => 40,  84 => 37,  83 => 36,  82 => 35,  80 => 32,  77 => 30,  74 => 29,  72 => 26,  71 => 25,  70 => 24,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  57 => 17,  54 => 16,  52 => 14,  51 => 13,  50 => 12,  48 => 11,  46 => 10,  44 => 9,  40 => 8,  35 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget/widget:buttons.html.twig", "");
    }
}
