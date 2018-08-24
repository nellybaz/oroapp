<?php

/* OroUPSBundle::UPSMethodWithOptions.html.twig */
class __TwigTemplate_2ed9ee663e8204d28b45ea647b13a06300cdefd447a0707a08ae80d1c7745a88 extends Twig_Template
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
        $context["ShipRuleMacro"] = $this->loadTemplate("OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig", "OroUPSBundle::UPSMethodWithOptions.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $context["methodLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(call_user_func_array($this->env->getFunction('get_shipping_method_label')->getCallable(), array($this->getAttribute(($context["methodData"] ?? null), "identifier", array()))));
        // line 5
        echo "    ";
        if ((twig_length_filter($this->env, ($context["methodLabel"] ?? null)) > 0)) {
            // line 6
            echo "    <li>";
            echo twig_escape_filter($this->env, ($context["methodLabel"] ?? null), "html", null, true);
            echo " ";
            echo $context["ShipRuleMacro"]->getrenderShippingMethodDisabledFlag($this->getAttribute(($context["methodData"] ?? null), "identifier", array()));
            // line 7
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["methodData"] ?? null), "options", array()), "surcharge", array()))) {
                // line 8
                echo "&nbsp;(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ups.form.shipping_method_config_options.surcharge.label"), "html", null, true);
                echo ": ";
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(($context["methodData"] ?? null), "options", array()), "surcharge", array()), array("currency" => ($context["currency"] ?? null)));
                echo ")";
            }
            // line 10
            echo "<ul>
    ";
        }
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["methodData"] ?? null), "types", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 13
            if ($this->getAttribute($context["type"], "enabled", array())) {
                // line 14
                echo "<li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(call_user_func_array($this->env->getFunction('get_shipping_method_type_label')->getCallable(), array($this->getAttribute(($context["methodData"] ?? null), "identifier", array()), $this->getAttribute($context["type"], "identifier", array())))), "html", null, true);
                // line 15
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["type"], "options", array()), "surcharge", array()))) {
                    // line 16
                    echo "&nbsp;(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ups.form.shipping_method_config_options.surcharge.label"), "html", null, true);
                    echo ": ";
                    echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute($context["type"], "options", array()), "surcharge", array()), array("currency" => ($context["currency"] ?? null)));
                    echo ")";
                }
                // line 18
                echo "</li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        if ((twig_length_filter($this->env, ($context["methodLabel"] ?? null)) > 0)) {
            // line 22
            echo "        </ul>
    </li>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroUPSBundle::UPSMethodWithOptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  75 => 21,  68 => 18,  61 => 16,  59 => 15,  56 => 14,  54 => 13,  50 => 12,  46 => 10,  39 => 8,  37 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUPSBundle::UPSMethodWithOptions.html.twig", "");
    }
}
