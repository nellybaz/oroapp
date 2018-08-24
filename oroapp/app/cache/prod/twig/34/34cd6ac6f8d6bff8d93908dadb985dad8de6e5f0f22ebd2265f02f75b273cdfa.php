<?php

/* OroMagentoBundle:OrderPlace/widget:place.html.twig */
class __TwigTemplate_63ebfe0438efd5232251f7b36fda65a77ee5a830322060a0737b5614f0842629 extends Twig_Template
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
        echo "    <div class=\"order-form-widget widget-content\">
        ";
        // line 3
        if ( !($context["error"] ?? null)) {
            // line 4
            echo "            <iframe id=\"orderPlaceFrame\" data-src=\"";
            echo twig_escape_filter($this->env, ($context["sourceUrl"] ?? null), "html", null, true);
            echo "\" src=\"\" width=\"1\" height=\"1\" frameborder=\"0\"></iframe>

            <script type=\"text/javascript\">
                var ORO_ORDER_EMBED_API = {};

                require(['jquery', 'underscore', 'oroui/js/mediator', 'oroui/js/widget-manager', 'oroui/js/messenger',
                    'orotranslation/js/translator'], function (\$, _, mediator, widgetManager, messenger, __) {
                    var \$frame = \$('#orderPlaceFrame'),
                        src = \$frame.data('src'),
                        modalWidgetAlias = 'transaction-dialog',
                        messageTemplate = _.template(\"<%= message %> <a href=\\\"<%= url %>\\\" class=\\\"order-link\\\"><%= urlLabel %></a> \");

                    \$frame.on('load', function() {
                        var offset = \$frame.closest('.ui-dialog').find('.ui-dialog-titlebar').outerHeight() || 0;
                        \$frame.addClass('loaded').parent().css({'top': offset});
                        widgetManager.getWidgetInstance(
                            ";
            // line 20
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ",
                            function(widget) {
                                widget.trigger('externalContentLoaded')
                            }
                        );
                    });
                    \$frame.attr('src', src.replace(/^https?:/gi, ''));
                    ORO_ORDER_EMBED_API.success = function () {
                        var showMessage = function(data) {
                                var message = data.message;
                                if (data.statusType == 'success') {
                                    message = messageTemplate(
                                            {
                                                message: data.message,
                                                url: data.url,
                                                urlLabel: __('oro.magento.view_order')
                                            }
                                    );
                                }
                                messenger.notificationFlashMessage(data.statusType, message);
                            },
                            chooseMessage = function (data) {
                                if (mediator.execute('isInAction')) {
                                    mediator.once('page:afterChange', function() {showMessage(data)});
                                } else {
                                    showMessage(data);
                                }
                            };

                        var performMessage = messenger.notificationFlashMessage('warning', __('oro.magento.performing_synchronization'));

                        widgetManager.getWidgetInstanceByAlias(modalWidgetAlias, function (widget) {
                            widget.trigger('formSave');
                            ";
            // line 53
            if (array_key_exists("cartId", $context)) {
                // line 54
                echo "                                ";
                $context["syncURL"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_orderplace_new_cart_order_sync", array("id" => ($context["cartId"] ?? null)));
                // line 55
                echo "                                \$.ajax({
                                    dataType: 'json',
                                    url: ";
                // line 57
                echo twig_jsonencode_filter(($context["syncURL"] ?? null));
                echo ",
                                    beforeSend: function() {
                                        widget.remove();
                                        mediator.execute('showLoading');
                                    },
                                    success: function(data) {
                                        if (mediator.execute('isInAction')) {
                                            mediator.once('page:afterChange', function() {showMessage(data)});
                                        } else {
                                            mediator.trigger('datagrid:doReset:magento-customer-orders-widget-grid');
                                            showMessage(data);
                                            mediator.execute('refreshPage');
                                        }
                                    }
                                }).always(function () {
                                    performMessage.close();
                                });
                            ";
            } elseif (            // line 74
array_key_exists("customerId", $context)) {
                // line 75
                echo "                                ";
                $context["syncURL"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_orderplace_new_customer_order_sync", array("id" => ($context["customerId"] ?? null)));
                // line 76
                echo "                                \$.ajax({
                                    dataType: 'json',
                                    url: ";
                // line 78
                echo twig_jsonencode_filter(($context["syncURL"] ?? null));
                echo ",
                                    beforeSend: function() {
                                        widget.remove();
                                    },
                                    success: function(data) {
                                        mediator.trigger('datagrid:doReset:magento-customer-orders-widget-grid');
                                        chooseMessage(data);
                                    },
                                    errorHandlerMessage: __('oro.magento.external_error')
                                }).always(function () {
                                    performMessage.close();
                                });
                            ";
            }
            // line 91
            echo "                        });
                    };
                    ORO_ORDER_EMBED_API.error = function () {
                        messenger.notificationFlashMessage('error', __('oro.magento.external_error'));
                        widgetManager.getWidgetInstanceByAlias(modalWidgetAlias, function (widget) {
                            widget.remove();
                        });
                    };
                });
            </script>
        ";
        } else {
            // line 102
            echo "            <script type=\"text/javascript\">
                require(['oroui/js/widget-manager', 'oroui/js/messenger'],
                function (widgetManager, messenger) {
                    messenger.notificationFlashMessage('error', ";
            // line 105
            echo twig_jsonencode_filter(($context["error"] ?? null));
            echo ");
                    widgetManager.getWidgetInstanceByAlias('transaction-dialog', function (widget) {
                        widget.remove();
                    });
                });
            </script>
        ";
        }
        // line 112
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:OrderPlace/widget:place.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 112,  159 => 105,  154 => 102,  141 => 91,  125 => 78,  121 => 76,  118 => 75,  116 => 74,  96 => 57,  92 => 55,  89 => 54,  87 => 53,  51 => 20,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:OrderPlace/widget:place.html.twig", "");
    }
}
