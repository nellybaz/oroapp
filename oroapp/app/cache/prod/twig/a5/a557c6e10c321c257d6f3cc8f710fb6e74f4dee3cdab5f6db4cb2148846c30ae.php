<?php

/* OroMagentoBundle:Customer/widget:placeOrder.html.twig */
class __TwigTemplate_9ebf0ecb50db45bf618520220d3e752df4665731220e894f3eece60550c89b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('page_container', $context, $blocks);
    }

    public function block_page_container($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"widget-content form-dialog\">
        ";
        // line 3
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "alias" => "order-place-widget", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_widget_customer_orderplace", array("id" => $this->getAttribute(        // line 6
($context["entity"] ?? null), "id", array()))), "loadingMaskEnabled" => true));
        // line 8
        echo "

        <script type=\"text/javascript\">
            require(['underscore', 'oroui/js/widget-manager'], function(_, widgetManager) {
                widgetManager.getWidgetInstanceByAlias('order-place-widget', function(widget) {
                    widget._showLoading();
                    widget.once('externalContentLoaded', _.bind(widget._hideLoading, widget));
                });
            });
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer/widget:placeOrder.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  30 => 6,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer/widget:placeOrder.html.twig", "");
    }
}
