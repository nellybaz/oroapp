<?php

/* OroOrderBundle:Order:macros.html.twig */
class __TwigTemplate_4ef694e959926dcbfbc2596c41ae83b6e016fcdf2105790e51e17b196d284c63 extends Twig_Template
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
        // line 41
        echo "
";
    }

    // line 1
    public function getrenderPossibleShippingMethods($__form__ = null, $__entity__ = null, $__events__ = array(), $__view__ = "oroorder/js/app/views/possible-shipping-methods-view", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "entity" => $__entity__,
            "events" => $__events__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    ";
            if ((($this->getAttribute(($context["entity"] ?? null), "shippingMethod", array()) && $this->getAttribute(($context["entity"] ?? null), "shippingMethodType", array())) && $this->getAttribute(($context["entity"] ?? null), "estimatedShippingCost", array()))) {
                // line 8
                echo "        ";
                $context["savedShippingMethod"] = array("method" => $this->getAttribute(                // line 9
($context["entity"] ?? null), "shippingMethod", array()), "type" => $this->getAttribute(                // line 10
($context["entity"] ?? null), "shippingMethodType", array()), "cost" => $this->getAttribute($this->getAttribute(                // line 11
($context["entity"] ?? null), "estimatedShippingCost", array()), "value", array()));
                // line 13
                echo "        ";
                $context["savedShippingMethodLabel"] = ((call_user_func_array($this->env->getFunction('oro_shipping_method_with_type_label')->getCallable(), array($this->getAttribute(($context["entity"] ?? null), "shippingMethod", array()), $this->getAttribute(($context["entity"] ?? null), "shippingMethodType", array()))) . ": ") . $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute(($context["entity"] ?? null), "estimatedShippingCost", array())));
                // line 14
                echo "    ";
            }
            // line 15
            echo "    ";
            $context["options"] = array("view" =>             // line 16
($context["view"] ?? null), "savedShippingMethodLabel" => ((            // line 17
array_key_exists("savedShippingMethodLabel", $context)) ? (_twig_default_filter(($context["savedShippingMethodLabel"] ?? null), null)) : (null)), "savedShippingMethod" => ((            // line 18
array_key_exists("savedShippingMethod", $context)) ? (_twig_default_filter(($context["savedShippingMethod"] ?? null), null)) : (null)));
            // line 20
            echo "    ";
            if ((twig_length_filter($this->env, ($context["events"] ?? null)) > 0)) {
                // line 21
                echo "        ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), array("events" => ($context["events"] ?? null)));
                // line 22
                echo "    ";
            }
            // line 23
            echo "    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
            echo "\"
         class=\"possible_shipping_methods_container\"
    >
        <div class=\"btn-group\">
            <span
                data-role=\"possible_shipping_methods_btn\"
                id=\"possible_shipping_methods_btn\"
                class=\"btn\"
            >";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.btn.calculate_shipping"), "html", null, true);
            echo "</span>
        </div>
        <div class=\"possible_shipping_methods_form\" data-content=\"possible_shipping_methods_form\"></div>
        ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calculateShipping", array()), 'row');
            echo "
        ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shippingMethod", array()), 'row');
            echo "
        ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shippingMethodType", array()), 'row');
            echo "
        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "estimatedShippingCostAmount", array()), 'row');
            echo "
    </div>
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

    // line 42
    public function gethiddenCollection($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    <div data-role=\"hidden-collection\"
         data-last-index=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
            echo "\"
         data-prototype-name=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array()), "html", null, true);
            echo "\"
         data-prototype=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype", array()), 'widget'));
            echo "\"
    >
        ";
            // line 48
            if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
                // line 49
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 50
                    echo "                ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "        ";
            }
            // line 53
            echo "    </div>
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
        return "OroOrderBundle:Order:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 53,  163 => 52,  154 => 50,  149 => 49,  147 => 48,  142 => 46,  138 => 45,  134 => 44,  131 => 43,  119 => 42,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  83 => 32,  72 => 24,  69 => 23,  66 => 22,  63 => 21,  60 => 20,  58 => 18,  57 => 17,  56 => 16,  54 => 15,  51 => 14,  48 => 13,  46 => 11,  45 => 10,  44 => 9,  42 => 8,  39 => 7,  24 => 1,  19 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order:macros.html.twig", "");
    }
}
