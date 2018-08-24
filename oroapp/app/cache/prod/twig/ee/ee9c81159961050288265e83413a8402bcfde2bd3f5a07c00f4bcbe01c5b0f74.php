<?php

/* OroPaymentBundle:Form:fields.html.twig */
class __TwigTemplate_89b3670c5c003c87b682d26f15037f6bb25a16d4317f48d45f0324685fde59cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_payment_method_config_widget' => array($this, 'block_oro_payment_method_config_widget'),
            'oro_payment_methods_configs_rule_destination_widget' => array($this, 'block_oro_payment_methods_configs_rule_destination_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_payment_method_config_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('oro_payment_methods_configs_rule_destination_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_payment_method_config_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "type", array()), "vars", array()), "value", array())) {
            // line 3
            echo "        <div class=\"control-group control-group-choice\">
            <div class=\"control-label wrap\">
                ";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'label');
            echo "
            </div>
            <div class=\"controls\">
                <input type=\"text\" disabled=\"disabled\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["methods_labels"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "type", array()), "vars", array()), "value", array()), array(), "array")), "html", null, true);
            echo "\"/>
                ";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "options", array()), 'widget');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 17
    public function block_oro_payment_methods_configs_rule_destination_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'row');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region", array()), 'row');
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "postalCodes", array()), 'row');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  80 => 20,  76 => 19,  71 => 18,  68 => 17,  62 => 14,  57 => 13,  50 => 9,  46 => 8,  40 => 5,  36 => 3,  33 => 2,  30 => 1,  26 => 17,  23 => 16,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentBundle/Resources/views/Form/fields.html.twig");
    }
}
