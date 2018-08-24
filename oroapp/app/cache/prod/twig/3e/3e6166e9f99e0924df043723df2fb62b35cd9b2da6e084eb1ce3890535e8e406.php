<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:shipping_method.html.twig */
class __TwigTemplate_88f58ca7b3441dc8969fdb8ff98ea8708d5987d2d5a8429c423a5315e6ff776c extends Twig_Template
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
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shipping_method", array()), 'errors');
        echo "
    <div class=\"hidden\">
        <fieldset class=\"grid__row grid__row--offset-none\">
            ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shipping_method", array()), 'widget');
        echo "
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shipping_method_type", array()), 'widget');
        echo "
            ";
        // line 7
        if ($this->getAttribute(($context["form"] ?? null), "state_token", array(), "any", true, true)) {
            // line 8
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state_token", array()), 'row');
            echo "
            ";
        }
        // line 10
        echo "        </fieldset>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:shipping_method.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 8,  41 => 7,  37 => 6,  33 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:shipping_method.html.twig", "");
    }
}
