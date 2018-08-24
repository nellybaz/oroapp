<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:shipping_information.html.twig */
class __TwigTemplate_bcf1c2dbe6ddf021eb9ed50c4b90da272bbeb858f2415f63ffb1080023fe9b79 extends Twig_Template
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
        $context["__internal_563e72cc97cd5813a5e76b3228ec37712e21c2fd1d1fd0bae0a820a70f9b0141"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:shipping_information.html.twig", 2);
        // line 3
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "disallow_shipping_address_edit"), "method")) {
            // line 4
            echo "        <fieldset class=\"grid__row grid__row--offset-none\">
            <div class=\"grid__column grid__column--offset-y grid__column--6\">
                ";
            // line 6
            echo $context["__internal_563e72cc97cd5813a5e76b3228ec37712e21c2fd1d1fd0bae0a820a70f9b0141"]->getrenderAddress($this->getAttribute(($context["checkout"] ?? null), "shippingAddress", array()));
            echo "
            </div>
        </fieldset>
    ";
        } else {
            // line 10
            echo "        ";
            $context["address"] = $this->loadTemplate("OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:address.html.twig", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:shipping_information.html.twig", 10);
            // line 11
            echo "        ";
            $context["hasCustomAddress"] = false;
            // line 12
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "shipping_address", array()), "id", array()), "vars", array()), "value", array())) {
                // line 13
                echo "            ";
                $context["hasCustomAddress"] = ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "shipping_address", array()), "vars", array()), "value", array()), "customerUserAddress", array()) &&  !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "shipping_address", array()), "vars", array()), "value", array()), "customerAddress", array()));
                // line 14
                echo "        ";
            }
            // line 15
            echo "
        <div data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocheckout/js/app/views/address-view", "hideNewAddressForm" => true, "selectors" => array("address" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
($context["form"] ?? null), "shipping_address", array()), "customerAddress", array()), "vars", array()), "id", array())), "region" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
($context["form"] ?? null), "shipping_address", array()), "region", array()), "vars", array()), "id", array())), "fieldsContainer" => "#checkout-address-fields-container", "shipToBillingCheckbox" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
($context["form"] ?? null), "ship_to_billing_address", array()), "vars", array()), "id", array()))))), "html", null, true);
            // line 26
            echo "\">

            <div class=\"grid\">
                <div class=\"grid__row grid__row--offset-none\">
                    <div class=\"grid__column grid__column--6\">
                        ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "shipping_address", array()), "customerAddress", array()), 'row');
            echo "
                    </div>
                </div>
            </div>

            ";
            // line 36
            echo $context["address"]->getaddress_form($this->getAttribute(($context["form"] ?? null), "shipping_address", array()), $this->getAttribute(($context["form"] ?? null), "save_shipping_address", array()), ($context["hasCustomAddress"] ?? null));
            echo "

            ";
            // line 38
            if ($this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "billing_address_has_shipping"), "method")) {
                // line 39
                echo "                <fieldset class=\"grid__row grid__row--offset-none\">
                    <div class=\"grid__column grid__column--offset-y\">
                        ";
                // line 41
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ship_to_billing_address", array()), 'row');
                echo "
                    </div>
                </fieldset>
            ";
            }
            // line 45
            echo "            ";
            if ($this->getAttribute(($context["form"] ?? null), "state_token", array(), "any", true, true)) {
                // line 46
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state_token", array()), 'row');
                echo "
            ";
            }
            // line 48
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:shipping_information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  102 => 46,  99 => 45,  92 => 41,  88 => 39,  86 => 38,  81 => 36,  73 => 31,  66 => 26,  64 => 24,  63 => 22,  62 => 21,  61 => 17,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:shipping_information.html.twig", "");
    }
}
