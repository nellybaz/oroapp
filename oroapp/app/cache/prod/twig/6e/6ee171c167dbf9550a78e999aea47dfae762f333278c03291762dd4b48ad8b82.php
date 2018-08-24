<?php

/* OroPaymentBundle:PaymentTransaction:method.html.twig */
class __TwigTemplate_8c1fe296be687487becfa290a560abad4af20d9bcb9e7d666b41692b6aea3149 extends Twig_Template
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
        echo "<div class=\"control-group\">
    <label class=\"control-label\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.methods.label"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
        <div class=\"control-label\">";
        // line 5
        if (( !twig_test_empty(($context["data"] ?? null)) && twig_test_iterable(($context["data"] ?? null)))) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
                // line 7
                echo "                    ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentMethodExtension')->formatPaymentMethodAdminLabel($context["paymentMethod"]));
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                // line 8
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
        }
        // line 12
        echo "</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentTransaction:method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  67 => 10,  52 => 8,  46 => 7,  29 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentTransaction:method.html.twig", "");
    }
}
