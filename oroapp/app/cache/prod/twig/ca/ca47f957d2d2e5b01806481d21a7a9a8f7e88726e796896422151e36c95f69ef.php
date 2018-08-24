<?php

/* OroCheckoutBundle:layouts/default:layout.html.twig */
class __TwigTemplate_93f3c573d3ff460325433c1b97fc3d2d89e550eac87e8e27172a31521512681d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'checkout_transition_back_widget' => array($this, 'block_checkout_transition_back_widget'),
            'checkout_transition_continue_widget' => array($this, 'block_checkout_transition_continue_widget'),
            'checkout_transition_step_edit_widget' => array($this, 'block_checkout_transition_step_edit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        echo "
";
        // line 36
        echo "
";
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('checkout_transition_back_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkout_transition_continue_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('checkout_transition_step_edit_widget', $context, $blocks);
    }

    // line 46
    public function block_checkout_transition_back_widget($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        if ((array_key_exists("transitionData", $context) && ($context["transitionData"] ?? null))) {
            // line 48
            echo "    ";
            $context["transitionUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_checkout_frontend_checkout", array("id" => $this->getAttribute(            // line 51
($context["checkout"] ?? null), "id", array()), "transition" => $this->getAttribute($this->getAttribute(            // line 52
($context["transitionData"] ?? null), "transition", array()), "name", array())));
            // line 55
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["transitionUrl"] ?? null), "html", null, true);
            echo "\"
        ";
            // line 56
            echo $this->getAttribute($this, "transitionAttrbiutes", array(0 => ($context["transitionData"] ?? null), 1 => ($context["checkout"] ?? null)), "method");
            echo "
        ";
            // line 57
            echo $this->getAttribute($this, "conditionMessages", array(0 => ($context["transitionData"] ?? null)), "method");
            echo "
    >
        <i class=\"fa-angle-left\"></i>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.transition.back.label"), "html", null, true);
            echo "
    </a>
    ";
        }
    }

    // line 64
    public function block_checkout_transition_continue_widget($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        if ((array_key_exists("transitionData", $context) && ($context["transitionData"] ?? null))) {
            // line 66
            echo "        <div class=\"tooltip-container\" ";
            echo $this->getAttribute($this, "conditionMessages", array(0 => ($context["transitionData"] ?? null)), "method");
            echo ">
            <button type=\"submit\"
                class=\"btn ";
            // line 68
            if ($this->getAttribute(($context["transitionData"] ?? null), "isAllowed", array())) {
                echo "btn--info";
            }
            echo " btn--size-m checkout-form__submit\"
                disabled=\"disabled\"
                autocomplete=\"off\"
                ";
            // line 71
            echo $this->getAttribute($this, "transitionAttrbiutes", array(0 => ($context["transitionData"] ?? null), 1 => ($context["checkout"] ?? null)), "method");
            echo "
            >
                ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["transitionData"] ?? null), "transition", array()), "label", array()), array(), "workflows"), "html", null, true);
            echo "&nbsp;<i class=\"fa-angle-right\"></i>
            </button>
        </div>
    ";
        }
    }

    // line 79
    public function block_checkout_transition_step_edit_widget($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        if ((array_key_exists("transitionData", $context) && ($context["transitionData"] ?? null))) {
            // line 81
            echo "    ";
            $context["transitionUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_checkout_frontend_checkout", array("id" => $this->getAttribute(            // line 84
($context["checkout"] ?? null), "id", array()), "transition" => $this->getAttribute($this->getAttribute(            // line 85
($context["transitionData"] ?? null), "transition", array()), "name", array())));
            // line 88
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["transitionData"] ?? null), "errors", array())) > 0)) {
                // line 89
                echo "        ";
                $context["transitionLabel"] = $this->getAttribute($this, "transitionConditionMessages", array(0 => ($context["transitionData"] ?? null)), "method");
                // line 90
                echo "    ";
            } else {
                // line 91
                echo "        ";
                $context["transitionLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["transitionData"] ?? null), "transition", array()), "label", array()), array(), "workflows");
                // line 92
                echo "    ";
            }
            // line 93
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["transitionUrl"] ?? null), "html", null, true);
            echo "\" class=\"button--plain\"
       data-toggle=\"tooltip\"
       data-title=\"";
            // line 95
            echo twig_escape_filter($this->env, ($context["transitionLabel"] ?? null), "html", null, true);
            echo "\"
       data-html=\"true\"
       data-container=\"body\"
       ";
            // line 98
            echo $this->getAttribute($this, "transitionAttrbiutes", array(0 => ($context["transitionData"] ?? null), 1 => ($context["checkout"] ?? null)), "method");
            echo "
    >
        <i class=\"fa-pencil fa--no-offset tooltip-trigger\"></i>
    </a>
    ";
        }
    }

    // line 1
    public function gettransitionAttrbiutes($__transitionData__ = null, $__checkout__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "transitionData" => $__transitionData__,
            "checkout" => $__checkout__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCheckoutBundle:layouts/default:layout.html.twig", 3);
            // line 4
            echo "    ";
            // line 5
            echo "    ";
            $context["transition"] = $this->getAttribute(($context["transitionData"] ?? null), "transition", array());
            // line 6
            echo "
    ";
            // line 7
            $context["pageComponentModule"] = (($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page_component_module", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page_component_module", array()), "orocheckout/js/app/components/transition-button-component")) : ("orocheckout/js/app/components/transition-button-component"));
            // line 8
            echo "    ";
            $context["pageComponentOptions"] = (($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page_component_options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page_component_options", array()), array())) : (array()));
            // line 9
            echo "    
    ";
            // line 10
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" =>             // line 11
($context["pageComponentModule"] ?? null), "options" => twig_array_merge(            // line 12
($context["pageComponentOptions"] ?? null), array("enabled" => $this->getAttribute(            // line 13
($context["transitionData"] ?? null), "isAllowed", array()), "hasForm" => $this->getAttribute(            // line 14
($context["transition"] ?? null), "hasForm", array(), "method"), "transitionUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_checkout_frontend_checkout", array("id" => $this->getAttribute(            // line 18
($context["checkout"] ?? null), "id", array()), "transition" => $this->getAttribute(            // line 19
($context["transition"] ?? null), "name", array())))))));
            // line 23
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function getconditionMessages($__transitionData__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "transitionData" => $__transitionData__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            echo "    ";
            $context["hasErrors"] = (twig_length_filter($this->env, $this->getAttribute(($context["transitionData"] ?? null), "errors", array())) > 0);
            // line 29
            echo "    ";
            if (($context["hasErrors"] ?? null)) {
                // line 30
                echo "        data-toggle=\"tooltip\"
        data-title=\"";
                // line 31
                echo $this->getAttribute($this, "transitionConditionMessages", array(0 => ($context["transitionData"] ?? null)), "method");
                echo "\"
        data-html=\"true\"
        data-container=\"body\"
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function gettransitionConditionMessages($__transitionData__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "transitionData" => $__transitionData__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.unavailable_transition.message"), "html", null, true);
            echo "</div>
    <ul>
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["transitionData"] ?? null), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 41
                echo "            <li>";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array()), $this->getAttribute($context["error"], "parameters", array())), "html", null, true));
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </ul>
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
        return "OroCheckoutBundle:layouts/default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 43,  282 => 41,  278 => 40,  272 => 38,  260 => 37,  240 => 31,  237 => 30,  234 => 29,  231 => 28,  219 => 27,  202 => 23,  200 => 19,  199 => 18,  198 => 14,  197 => 13,  196 => 12,  195 => 11,  194 => 10,  191 => 9,  188 => 8,  186 => 7,  183 => 6,  180 => 5,  178 => 4,  175 => 3,  173 => 2,  160 => 1,  150 => 98,  144 => 95,  138 => 93,  135 => 92,  132 => 91,  129 => 90,  126 => 89,  123 => 88,  121 => 85,  120 => 84,  118 => 81,  115 => 80,  112 => 79,  103 => 73,  98 => 71,  90 => 68,  84 => 66,  81 => 65,  78 => 64,  70 => 59,  65 => 57,  61 => 56,  56 => 55,  54 => 52,  53 => 51,  51 => 48,  48 => 47,  45 => 46,  41 => 79,  38 => 78,  36 => 64,  33 => 63,  31 => 46,  28 => 45,  25 => 36,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default:layout.html.twig", "");
    }
}
