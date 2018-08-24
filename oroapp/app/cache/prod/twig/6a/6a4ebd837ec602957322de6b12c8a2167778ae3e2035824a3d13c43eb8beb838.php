<?php

/* OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig */
class __TwigTemplate_e98ce55b2624528f762df2a5266b6b5b1856fe8c7144a80812dbd53c103cd29b extends Twig_Template
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
        // line 26
        echo "
";
    }

    // line 1
    public function getrenderShippingMethodsConfigs($__methodConfigs__ = null, $__currency__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "methodConfigs" => $__methodConfigs__,
            "currency" => $__currency__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "<ol>";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["methodConfigs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["methodConfig"]) {
                // line 5
                $context["typeConfigData"] = array();
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["methodConfig"], "typeConfigs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["typeConfig"]) {
                    // line 7
                    $context["typeConfigData"] = twig_array_merge(($context["typeConfigData"] ?? null), array(0 => array("identifier" => $this->getAttribute(                    // line 8
$context["typeConfig"], "type", array()), "options" => $this->getAttribute(                    // line 9
$context["typeConfig"], "options", array()), "enabled" => $this->getAttribute(                    // line 10
$context["typeConfig"], "enabled", array()))));
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeConfig'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                $context["shippingMethodData"] = array("identifier" => $this->getAttribute(                // line 14
$context["methodConfig"], "method", array()), "types" =>                 // line 15
($context["typeConfigData"] ?? null), "options" => $this->getAttribute(                // line 16
$context["methodConfig"], "options", array()));
                // line 18
                $this->loadTemplate($this->env->getExtension('Oro\Bundle\ShippingBundle\Twig\ShippingMethodExtension')->getShippingMethodConfigRenderData($this->getAttribute($context["methodConfig"], "method", array())), "OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig", 18)->display(array_merge($context, array("currency" =>                 // line 19
($context["currency"] ?? null), "methodData" =>                 // line 20
($context["shippingMethodData"] ?? null))));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['methodConfig'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "</ol>";
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
    public function getrenderShippingMethodDisabledFlag($__identifier__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "identifier" => $__identifier__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            echo "    ";
            if (($this->env->getExtension('Oro\Bundle\ShippingBundle\Twig\ShippingMethodExtension')->isShippingMethodEnabled(($context["identifier"] ?? null)) == false)) {
                // line 29
                echo "        <span class=\"label\">Disabled</span>
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

    public function getTemplateName()
    {
        return "OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 29,  122 => 28,  110 => 27,  94 => 23,  80 => 20,  79 => 19,  78 => 18,  76 => 16,  75 => 15,  74 => 14,  73 => 13,  67 => 10,  66 => 9,  65 => 8,  64 => 7,  60 => 6,  58 => 5,  41 => 4,  39 => 3,  37 => 2,  24 => 1,  19 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig", "");
    }
}
