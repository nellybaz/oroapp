<?php

/* OroMagentoBundle:Form:fields.html.twig */
class __TwigTemplate_84d5f95f7204bedd9d82b276f252f008f1031283e1cd6abca138ca139f7ce89f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_magento_transport_check_button_widget' => array($this, 'block_oro_magento_transport_check_button_widget'),
            'oro_magento_transport_check_button_row' => array($this, 'block_oro_magento_transport_check_button_row'),
            'oro_magento_website_select_row' => array($this, 'block_oro_magento_website_select_row'),
            'oro_magento_order_place_form_type_row' => array($this, 'block_oro_magento_order_place_form_type_row'),
            'oro_magento_customer_addresses_widget' => array($this, 'block_oro_magento_customer_addresses_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('oro_magento_transport_check_button_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('oro_magento_transport_check_button_row', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('oro_magento_website_select_row', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('oro_magento_order_place_form_type_row', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('oro_magento_customer_addresses_widget', $context, $blocks);
    }

    // line 25
    public function block_oro_magento_transport_check_button_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["oroBridgeExtension"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "oroBridgeExtension", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "oroBridgeExtension", array())) : (null));
        // line 27
        echo "    <div class=\"control-group\">
        <div class=\"controls\">
            <button type=\"";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</button>
            <script type=\"text/javascript\">
                require(['oro/magento/checker'], function (Checker) {
                    \"use strict\";
                    new Checker(";
        // line 33
        echo $this->getAttribute($this, "getCheckerOptions", array(0 => $this->getAttribute(($context["form"] ?? null), "parent", array()), 1 => ("#" . $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()))), "method");
        echo ");
                });
            </script>
            ";
        // line 36
        if ( !(null === ($context["oroBridgeExtension"] ?? null))) {
            // line 37
            echo "                ";
            if ($this->getAttribute(($context["oroBridgeExtension"] ?? null), "isExtensionInstalled", array())) {
                // line 38
                echo "                    ";
                if ( !$this->getAttribute(($context["oroBridgeExtension"] ?? null), "isSupportExtensionVersion", array())) {
                    // line 39
                    echo "                        ";
                    $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.magentotransport.message.outdated_bridge", array("%extension_version%" => $this->getAttribute(($context["oroBridgeExtension"] ?? null), "extensionVersion", array())));
                    // line 40
                    echo "                        ";
                    $context["messageType"] = "warning";
                    // line 41
                    echo "                    ";
                }
                // line 42
                echo "                ";
            } else {
                // line 43
                echo "                    ";
                $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.magentotransport.message.native_soap");
                // line 44
                echo "                    ";
                $context["messageType"] = "info";
                // line 45
                echo "                ";
            }
            // line 46
            echo "
                ";
            // line 47
            if ((array_key_exists("messageType", $context) && array_key_exists("message", $context))) {
                // line 48
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["messageType"] ?? null), "html", null, true);
                echo " connection-status\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</div>
                ";
            }
            // line 50
            echo "            ";
        }
        // line 51
        echo "        </div>
    </div>
";
    }

    // line 55
    public function block_oro_magento_transport_check_button_row($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 59
    public function block_oro_magento_website_select_row($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        ob_start();
        // line 61
        echo "        <div class=\"control-group";
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", array()), "html", null, true);
        }
        echo "\">
            ";
        // line 62
        if ( !(($context["label"] ?? null) === false)) {
            // line 63
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => ($context["label_attr"] ?? null)));
            echo "
                </div>
            ";
        }
        // line 67
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " validation-error";
        }
        echo " magento-website-selector-container\">
                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 69
        if ( !($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "disabled", array()) === true)) {
            // line 70
            echo "                    <a href=\"javascript:void(0)\" class=\"no-hash sync-website-list-link\">
                        <i class=\"fa-refresh\"></i>";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.magentotransport.website_refresh.label"), "html", null, true);
            echo "
                    </a>
                    <script type=\"text/javascript\">
                        require(['oro/magento/checker'], function (Checker) {
                            \"use strict\";
                            new Checker(";
            // line 76
            echo $this->getAttribute($this, "getCheckerOptions", array(0 => $this->getAttribute(($context["form"] ?? null), "parent", array()), 1 => ".sync-website-list-link"), "method");
            echo ");
                        });
                    </script>
                ";
        }
        // line 80
        echo "                <div class=\"clear-fix\"></div>
                ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_oro_magento_order_place_form_type_row($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $context["cartId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "cart_id", array()), "vars", array()), "data", array());
        // line 89
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "alias" => "order-place-widget", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_orderplace_cart", array("id" =>         // line 92
($context["cartId"] ?? null))), "loadingMaskEnabled" => true));
        // line 94
        echo "

    <script type=\"text/javascript\">
        require(['underscore', 'oroui/js/widget-manager'], function(_, widgetManager) {
            widgetManager.getWidgetInstanceByAlias('order-place-widget', function(widget) {
                widget._showLoading();

                widget.once('externalContentLoaded', _.bind(widget._hideLoading, widget));
            });
        });
    </script>
";
    }

    // line 107
    public function block_oro_magento_customer_addresses_widget($context, array $blocks = array())
    {
        // line 108
        echo "    <div ";
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "originId", array()))) {
            echo "class=\"collection-remove-disabled\"";
        }
        echo ">
        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 1
    public function getgetCheckerOptions($__form__ = null, $__elSelector__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "elSelector" => $__elSelector__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["modificationAreAllowed"] = ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "websiteId", array(), "any", false, true), "vars", array(), "any", false, true), "disabled", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "websiteId", array()), "vars", array()), "disabled", array()) == false));
            // line 3
            echo "    ";
            $context["transportEntityId"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) : (null));
            // line 4
            echo "    ";
            $context["soapCheckerOptions"] = array("el" =>             // line 5
($context["elSelector"] ?? null), "websiteSelectEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 6
($context["form"] ?? null), "websiteId", array()), "vars", array()), "id", array())), "websitesListEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 7
($context["form"] ?? null), "websites", array()), "vars", array()), "id", array())), "connectorsEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 8
($context["form"] ?? null), "parent", array()), "connectors", array()), "vars", array()), "id", array())), "isExtensionInstalledEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 9
($context["form"] ?? null), "isExtensionInstalled", array()), "vars", array()), "id", array())), "extensionVersionEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 10
($context["form"] ?? null), "extensionVersion", array()), "vars", array()), "id", array())), "magentoVersionEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 11
($context["form"] ?? null), "magentoVersion", array()), "vars", array()), "id", array())), "sharedGuestEmailListEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 12
($context["form"] ?? null), "sharedGuestEmailList", array()), "vars", array()), "id", array())), "isDisplayOrderNotesEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 13
($context["form"] ?? null), "isDisplayOrderNotes", array()), "vars", array()), "id", array())), "isOrderNoteSupportExtensionVersionEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 14
($context["form"] ?? null), "isOrderNoteSupportExtensionVersion", array()), "vars", array()), "id", array())), "websitesModificationAllowed" =>             // line 16
($context["modificationAreAllowed"] ?? null), "transportEntityId" =>             // line 17
($context["transportEntityId"] ?? null));
            // line 19
            echo "    ";
            if ($this->getAttribute(($context["form"] ?? null), "adminUrl", array(), "any", true, true)) {
                // line 20
                echo "        ";
                $context["soapCheckerOptions"] = twig_array_merge(($context["soapCheckerOptions"] ?? null), array("adminUrlEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "adminUrl", array()), "vars", array()), "id", array()))));
                // line 21
                echo "    ";
            }
            // line 22
            echo "    ";
            echo twig_jsonencode_filter(($context["soapCheckerOptions"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 22,  289 => 21,  286 => 20,  283 => 19,  281 => 17,  280 => 16,  279 => 14,  278 => 13,  277 => 12,  276 => 11,  275 => 10,  274 => 9,  273 => 8,  272 => 7,  271 => 6,  270 => 5,  268 => 4,  265 => 3,  262 => 2,  249 => 1,  242 => 109,  235 => 108,  232 => 107,  217 => 94,  215 => 92,  213 => 89,  210 => 88,  207 => 87,  198 => 81,  195 => 80,  188 => 76,  180 => 71,  177 => 70,  175 => 69,  171 => 68,  164 => 67,  158 => 64,  155 => 63,  153 => 62,  145 => 61,  142 => 60,  139 => 59,  132 => 56,  129 => 55,  123 => 51,  120 => 50,  112 => 48,  110 => 47,  107 => 46,  104 => 45,  101 => 44,  98 => 43,  95 => 42,  92 => 41,  89 => 40,  86 => 39,  83 => 38,  80 => 37,  78 => 36,  72 => 33,  61 => 29,  57 => 27,  54 => 26,  51 => 25,  47 => 107,  44 => 106,  42 => 87,  39 => 86,  37 => 59,  34 => 58,  32 => 55,  29 => 54,  27 => 25,  24 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm/src/Oro/Bundle/MagentoBundle/Resources/views/Form/fields.html.twig");
    }
}
