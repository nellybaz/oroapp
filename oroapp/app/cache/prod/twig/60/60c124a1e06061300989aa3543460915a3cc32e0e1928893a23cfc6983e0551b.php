<?php

/* OroWorkflowBundle:Widget/widget:entityWorkflows.html.twig */
class __TwigTemplate_70a7c5f2dc2066fd45f4fae688c8181d7284add9c502f29742254507193a94d5 extends Twig_Template
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
        $context["workflowMacros"] = $this->loadTemplate("OroWorkflowBundle::macros.html.twig", "OroWorkflowBundle:Widget/widget:entityWorkflows.html.twig", 1);
        // line 2
        if ((twig_length_filter($this->env, ($context["workflows"] ?? null)) > 0)) {
            // line 3
            echo "<div class=\"widget-content widget-content-bordered\">
    <div ";
            // line 4
            if ((twig_length_filter($this->env, ($context["workflows"] ?? null)) > 1)) {
                // line 5
                echo "        class=\"workflow-collapse\"
        data-page-component-collapse=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("storageKey" => ("entityWorkflow" . ($context["entityId"] ?? null)))), "html", null, true);
                echo "\"
    ";
            }
            // line 7
            echo ">
        ";
            // line 8
            if ((twig_length_filter($this->env, ($context["workflows"] ?? null)) > 1)) {
                // line 9
                echo "        <span class=\"workflow-collapse-button\" data-collapse-trigger></span>
        ";
            }
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["workflows"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["workflow"]) {
                // line 12
                echo "            ";
                if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                    // line 13
                    echo "            <div class=\"workflow-collapse-container\" data-collapse-container>
            ";
                }
                // line 15
                echo "                <table class=\"workflow-entity\">
                    <tr>
                        <td class=\"workflow-label\">
                            <div class=\"workflow-label-text\" title=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["workflow"], "label", array()), array(), "workflows"), "html", null, true);
                echo "\">
                                ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["workflow"], "label", array()), array(), "workflows"), "html", null, true);
                echo "
                            </div>
                        </td>
                        <td class=\"workflow-content-container\">
                            <table class=\"workflow-content\">
                                <tr>
                                    <td class=\"workflow-steps\">
                                        ";
                // line 26
                $context["isOrdered"] = $this->getAttribute($this->getAttribute($context["workflow"], "stepsData", array()), "isOrdered", array());
                // line 27
                echo "                                        ";
                $context["steps"] = $this->getAttribute($this->getAttribute($context["workflow"], "stepsData", array()), "steps", array());
                // line 28
                echo "
                                        ";
                // line 29
                if (( !$this->getAttribute($context["workflow"], "isStarted", array()) && (twig_length_filter($this->env, $this->getAttribute($context["workflow"], "transitionsData", array())) > 1))) {
                    // line 30
                    echo "                                            ";
                    $context["steps"] = array(0 => array("active" => false, "label" => "...", "possibleStepsCount" => 0, "final" => false));
                    // line 31
                    echo "                                        ";
                }
                // line 32
                echo "
                                        <div class=\"workflow-scroller\">
                                            <ul class=\"workflow-steps-list ";
                // line 34
                if ( !$this->getAttribute($context["workflow"], "isStarted", array())) {
                    echo "workflow-not-started";
                }
                echo "\">
                                                ";
                // line 35
                $context["activeRendered"] =  !$this->getAttribute($context["workflow"], "isStarted", array());
                // line 36
                echo "                                                ";
                $context["manyVariantsFound"] = false;
                // line 37
                echo "                                                ";
                $context["manyVariantsRendered"] = false;
                // line 38
                echo "
                                                ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                    if ( !($context["manyVariantsRendered"] ?? null)) {
                        // line 40
                        echo "                                                    ";
                        $context["final"] = $this->getAttribute($context["step"], "final", array());
                        // line 41
                        echo "                                                    ";
                        if (($context["isOrdered"] ?? null)) {
                            // line 42
                            echo "                                                        ";
                            $context["active"] = $this->getAttribute($context["step"], "active", array());
                            // line 43
                            echo "
                                                        ";
                            // line 44
                            if ((($context["activeRendered"] ?? null) && ($context["manyVariantsFound"] ?? null))) {
                                // line 45
                                echo "                                                            ";
                                $context["manyVariantsRendered"] = true;
                                // line 46
                                echo "                                                            ";
                                $context["step"] = twig_array_merge($context["step"], array("label" => "..."));
                                // line 47
                                echo "                                                        ";
                            }
                            // line 48
                            echo "
                                                        ";
                            // line 49
                            if ((($context["active"] ?? null) &&  !($context["activeRendered"] ?? null))) {
                                // line 50
                                echo "                                                            ";
                                $context["activeRendered"] = true;
                                // line 51
                                echo "                                                        ";
                            }
                            // line 52
                            echo "
                                                        ";
                            // line 53
                            if ((($this->getAttribute($context["step"], "possibleStepsCount", array()) > 1) && ($context["activeRendered"] ?? null))) {
                                // line 54
                                echo "                                                            ";
                                $context["manyVariantsFound"] = true;
                                // line 55
                                echo "                                                        ";
                            }
                            // line 56
                            echo "
                                                        <li class=\"workflow-steps-item workflow-ordered-steps ";
                            // line 57
                            if (($context["active"] ?? null)) {
                                echo "active";
                            }
                            echo " ";
                            if (($context["final"] ?? null)) {
                                echo "workflow-step-final";
                            }
                            echo "\">
                                                            <div class=\"workflow-steps-item-arrow-container\" title=\"";
                            // line 58
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["step"], "label", array()), array(), "workflows"), "html", null, true);
                            echo "\">
                                                                <span class=\"workflow-step-arrow-left\"></span>
                                                                <span class=\"workflow-step-arrow-right\"></span>
                                                                <span class=\"workflow-step-name\">";
                            // line 61
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["step"], "label", array()), array(), "workflows"), "html", null, true);
                            echo "</span>
                                                            </div>
                                                        </li>
                                                    ";
                        } else {
                            // line 65
                            echo "                                                        <li class=\"workflow-steps-item workflow-unordered-steps\">
                                                            <span class=\"workflow-unordered-step-name  ";
                            // line 66
                            if (($context["final"] ?? null)) {
                                echo "workflow-step-final";
                            }
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["step"], "label", array()), array(), "workflows"), "html", null, true);
                            echo "</span>
                                                        </li>
                                                    ";
                        }
                        // line 69
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                                            </ul>
                                        </div>
                                    </td>
                                    ";
                // line 73
                if ((twig_length_filter($this->env, $this->getAttribute($context["workflow"], "transitionsData", array())) != 0)) {
                    // line 74
                    echo "                                        <td class=\"workflow-controls\">
                                            <div class=\"workflow-buttons-scroller\">
                                                ";
                    // line 76
                    $this->loadTemplate("OroWorkflowBundle::Widget/widget/button.html.twig", "OroWorkflowBundle:Widget/widget:entityWorkflows.html.twig", 76)->display(array_merge($context, array("workflow" => $context["workflow"], "entity_id" => ($context["entityId"] ?? null), "originalUrl" => ($context["originalUrl"] ?? null))));
                    // line 77
                    echo "                                            </div>
                                        </td>
                                    ";
                }
                // line 80
                echo "                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            ";
                // line 85
                if ((($this->getAttribute($context["loop"], "index", array()) > 1) && $this->getAttribute($context["loop"], "last", array()))) {
                    // line 86
                    echo "            </div>
            ";
                }
                // line 88
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workflow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget/widget:entityWorkflows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 89,  253 => 88,  249 => 86,  247 => 85,  240 => 80,  235 => 77,  233 => 76,  229 => 74,  227 => 73,  222 => 70,  215 => 69,  205 => 66,  202 => 65,  195 => 61,  189 => 58,  179 => 57,  176 => 56,  173 => 55,  170 => 54,  168 => 53,  165 => 52,  162 => 51,  159 => 50,  157 => 49,  154 => 48,  151 => 47,  148 => 46,  145 => 45,  143 => 44,  140 => 43,  137 => 42,  134 => 41,  131 => 40,  126 => 39,  123 => 38,  120 => 37,  117 => 36,  115 => 35,  109 => 34,  105 => 32,  102 => 31,  99 => 30,  97 => 29,  94 => 28,  91 => 27,  89 => 26,  79 => 19,  75 => 18,  70 => 15,  66 => 13,  63 => 12,  45 => 11,  41 => 9,  39 => 8,  36 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget/widget:entityWorkflows.html.twig", "");
    }
}
