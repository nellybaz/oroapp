<?php

/* OroPaymentBundle:PaymentMethodsConfigsRule:macros.html.twig */
class __TwigTemplate_85f8008724966c181c32d98004f7acd74b2125fa440df6552244fccf5d1a9691 extends Twig_Template
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
    }

    // line 1
    public function getrenderPaymentMethodsConfigs($__methodConfigs__ = null, $__currency__ = null, ...$__varargs__)
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
                echo "<li>";
                // line 6
                $context["paymentMethodData"] = array("type" => $this->getAttribute(                // line 7
$context["methodConfig"], "type", array()), "options" => $this->getAttribute(                // line 8
$context["methodConfig"], "options", array()));
                // line 10
                $this->loadTemplate($this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentMethodExtension')->getPaymentMethodConfigRenderData($this->getAttribute($context["methodConfig"], "type", array())), "OroPaymentBundle:PaymentMethodsConfigsRule:macros.html.twig", 10)->display(array_merge($context, array("currency" =>                 // line 11
($context["currency"] ?? null), "methodData" =>                 // line 12
($context["paymentMethodData"] ?? null))));
                // line 14
                echo "</li>";
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
            // line 16
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

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentMethodsConfigsRule:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  65 => 14,  63 => 12,  62 => 11,  61 => 10,  59 => 8,  58 => 7,  57 => 6,  55 => 5,  38 => 4,  36 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentMethodsConfigsRule:macros.html.twig", "");
    }
}
