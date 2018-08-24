<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:payment.html.twig */
class __TwigTemplate_34952138f009de3fdd66dcaf299fa0dea33b0e77da05ae882362cb3d705a9cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_checkout_form_fields_widget' => array($this, 'block__checkout_form_fields_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_checkout_form_fields_widget', $context, $blocks);
    }

    public function block__checkout_form_fields_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"hidden\">
        <fieldset class=\"grid__row grid__row--offset-none\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "payment_method", array()), 'widget');
        echo "
        </fieldset>

        ";
        // line 7
        if ($this->getAttribute(($context["form"] ?? null), "payment_save_for_later", array(), "any", true, true)) {
            // line 8
            echo "            <div data-page-component-module=\"orocheckout/js/app/components/payment-save-for-later-component\">
                ";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "payment_save_for_later", array()), 'widget');
            echo "
            </div>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if ($this->getAttribute(($context["form"] ?? null), "payment_validate", array(), "any", true, true)) {
            // line 14
            echo "            <div data-page-component-module=\"orocheckout/js/app/components/payment-validate-component\">
                ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "payment_validate", array()), 'widget');
            echo "
            </div>
        ";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute(($context["form"] ?? null), "state_token", array(), "any", true, true)) {
            // line 19
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state_token", array()), 'row');
            echo "
        ";
        }
        // line 21
        echo "        ";
        if ($this->getAttribute(($context["form"] ?? null), "additional_data", array(), "any", true, true)) {
            // line 22
            echo "            <div data-page-component-module=\"orocheckout/js/app/components/payment-additional-data-component\">
                ";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "additional_data", array()), 'row');
            echo "
            </div>
        ";
        }
        // line 26
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:payment.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  76 => 23,  73 => 22,  70 => 21,  64 => 19,  61 => 18,  55 => 15,  52 => 14,  50 => 13,  47 => 12,  41 => 9,  38 => 8,  36 => 7,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:payment.html.twig", "");
    }
}
