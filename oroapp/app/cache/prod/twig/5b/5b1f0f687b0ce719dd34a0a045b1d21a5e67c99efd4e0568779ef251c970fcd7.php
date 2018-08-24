<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:widget_checkout.html.twig */
class __TwigTemplate_ca92166e33072b9b368cdfb0785b7622ff03be7d748800dd45788948a69148ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_raw_notification_widget' => array($this, 'block__raw_notification_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_raw_notification_widget', $context, $blocks);
    }

    public function block__raw_notification_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    echo "                <div data-role=\"checkout-flash-notifications\" data-type=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\" data-message=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]);
                    echo "\"></div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:widget_checkout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  50 => 7,  39 => 5,  34 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:widget_checkout.html.twig", "");
    }
}
