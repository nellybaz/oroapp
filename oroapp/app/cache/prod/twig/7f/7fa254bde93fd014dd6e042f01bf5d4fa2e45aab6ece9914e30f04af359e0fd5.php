<?php

/* OroChannelBundle:ChannelIntegration/widget:update.html.twig */
class __TwigTemplate_45a62914f1a401f3dde55be266f9169d0e2e63b574ced65ce67f8c7307217d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OroIntegrationBundle:Integration:update.html.twig", "OroChannelBundle:ChannelIntegration/widget:update.html.twig", 3);
        $this->blocks = array(
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroIntegrationBundle:Integration:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["isWidgetContext"] = true;
        // line 2
        $context["formAction"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array());
        // line 4
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroChannelBundle:ChannelIntegration/widget:update.html.twig", 4);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content_data($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Done"), "html", null, true);
        echo "</button>
    </div>

    <script type=\"text/javascript\">
        require(['jquery', 'oroui/js/mediator', 'oroui/js/widget-manager'],
        function(\$, mediator, widgetManager) {
            widgetManager.getWidgetInstance(";
        // line 16
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
        echo ", function (widget) {
                mediator.on('integrationFormReload:before', function(event) {
                    event.reloadManually = false;
                    widget.loadContent(\$.param(event.data), event.formEl.attr('method'));
                });

                widget.on('contentLoad', function(event) {
                    var dataField = \$('[data-ftid=oro_channel_form_dataSource_data]');
                    var apiKeyField = \$('[data-ftid=oro_integration_channel_form_transport_apiKey]');
                    if (dataField.val() && !apiKeyField.val()) {
                        data = JSON.parse(dataField.val());
                        if (data.transport.apiKey) {
                            apiKeyField.val(data.transport.apiKey);
                        }
                    }
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroChannelBundle:ChannelIntegration/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  48 => 10,  44 => 9,  38 => 7,  35 => 6,  31 => 3,  29 => 4,  27 => 2,  25 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChannelBundle:ChannelIntegration/widget:update.html.twig", "");
    }
}
