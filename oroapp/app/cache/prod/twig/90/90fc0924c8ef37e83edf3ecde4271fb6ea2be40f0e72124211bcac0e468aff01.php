<?php

/* OroUPSBundle:Form:fields.html.twig */
class __TwigTemplate_0b958283f0a976bbff08e73fd4fe0ca9443fb2261df8e305bbd964fe06e8542d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_ups_transport_settings_widget' => array($this, 'block_oro_ups_transport_settings_widget'),
            'oro_ups_shipping_method_config_options_widget' => array($this, 'block_oro_ups_shipping_method_config_options_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_ups_transport_settings_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('oro_ups_shipping_method_config_options_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_ups_transport_settings_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div data-page-component-module=\"oroups/js/app/components/ups-transport-settings-component\"
         data-page-component-options=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("countrySelector" => sprintf("select[name=\"%s\"]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
($context["form"] ?? null), "upsCountry", array()), "vars", array()), "full_name", array())), "shippingServicesSelector" => sprintf("select[name=\"%s\"]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
($context["form"] ?? null), "applicableShippingServices", array()), "vars", array()), "full_name", array())), "shippingServicesClosestParentSelector" => ".control-group", "shippingServiceByCountryRoute" => "oro_ups_country_shipping_services")), "html", null, true);
        // line 8
        echo "\"
    >
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>

    <div class=\"control-group control-group-text\">
        <div class=\"controls\">
            <button type=\"button\"
                    class=\"btn btn-primary\"
                    data-page-component-module=\"orointegration/js/app/components/integration-connection-checker-component\"
                    data-page-component-options=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("formSelector" => "[name=\"oro_integration_channel_form\"]", "backendUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_ups_validate_connection", array("channelId" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 20
($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array()), 0)) : (0)))))), "html", null, true);
        // line 21
        echo "\"
            >
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ups.connection_validation.button.text"), "html", null, true);
        echo "
            </button>
        </div>
    </div>
";
    }

    // line 29
    public function block_oro_ups_shipping_method_config_options_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUPSBundle:Form:fields.html.twig", 30);
        // line 31
        echo "    ";
        echo $context["UI"]->gettooltip("oro.ups.form.shipping_method_config_options.surcharge.tooltip", array(), "right");
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUPSBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  77 => 31,  74 => 30,  71 => 29,  62 => 23,  58 => 21,  56 => 20,  55 => 18,  44 => 10,  40 => 8,  38 => 5,  37 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 29,  23 => 28,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUPSBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/UPSBundle/Resources/views/Form/fields.html.twig");
    }
}
