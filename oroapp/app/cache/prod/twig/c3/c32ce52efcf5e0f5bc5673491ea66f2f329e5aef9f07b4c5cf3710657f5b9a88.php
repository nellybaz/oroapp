<?php

/* OroFedexShippingBundle:Form:fields.html.twig */
class __TwigTemplate_e420889cd0ec70cc3861bb28815d3af5a4d62eae7f756613a7d3c5805070e3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_fedex_settings_widget' => array($this, 'block_oro_fedex_settings_widget'),
            'oro_fedex_shipping_method_options_widget' => array($this, 'block_oro_fedex_shipping_method_options_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_fedex_settings_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('oro_fedex_shipping_method_options_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_fedex_settings_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    <div class=\"control-group control-group-text\">
        <div class=\"controls\">
            <button type=\"button\"
                    class=\"btn btn-primary\"
                    data-page-component-module=\"orointegration/js/app/components/integration-connection-checker-component\"
                    data-page-component-options=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("formSelector" => "[name=\"oro_integration_channel_form\"]", "backendUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_fedex_validate_connection", array("channelId" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array()), 0)) : (0)))))), "html", null, true);
        // line 12
        echo "\"
            >
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.fedex.connection_validation.button.text"), "html", null, true);
        echo "
            </button>
        </div>
    </div>
";
    }

    // line 20
    public function block_oro_fedex_shipping_method_options_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroFedexShippingBundle:Form:fields.html.twig", 21);
        // line 22
        echo "    ";
        echo $context["UI"]->gettooltip("oro.fedex.shipping_method_options.surcharge.tooltip", array(), "right");
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroFedexShippingBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  66 => 22,  63 => 21,  60 => 20,  51 => 14,  47 => 12,  45 => 11,  44 => 9,  33 => 2,  30 => 1,  26 => 20,  23 => 19,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFedexShippingBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FedexShippingBundle/Resources/views/Form/fields.html.twig");
    }
}
