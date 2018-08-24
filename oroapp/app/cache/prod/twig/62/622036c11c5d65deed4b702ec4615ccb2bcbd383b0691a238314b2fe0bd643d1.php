<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:billing_information.html.twig */
class __TwigTemplate_14b7e711ddeca4f5362d6c3bbff2ebb66fe4ba461484e9db24e5924a45cf65a7 extends Twig_Template
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
        $context["__internal_bd517ae6fac693266cebd92e4e5ca69d6102b518871d730cb5a8081da3bcc750"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:billing_information.html.twig", 2);
        // line 3
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "disallow_billing_address_edit"), "method")) {
            // line 4
            echo "        ";
            $context["billingAddress"] = $this->getAttribute(($context["checkout"] ?? null), "billingAddress", array());
            // line 5
            echo "        <fieldset class=\"grid__row grid__row--offset-none\">
            <div class=\"grid__column grid__column--offset-y grid__column--6\">
                ";
            // line 7
            echo $context["__internal_bd517ae6fac693266cebd92e4e5ca69d6102b518871d730cb5a8081da3bcc750"]->getrenderAddress($this->getAttribute(($context["checkout"] ?? null), "billingAddress", array()));
            echo "
            </div>
        </fieldset>
    ";
        } else {
            // line 11
            echo "        ";
            $context["address"] = $this->loadTemplate("OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:address.html.twig", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:billing_information.html.twig", 11);
            // line 12
            echo "        ";
            $context["hasCustomAddress"] = false;
            // line 13
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "billing_address", array()), "id", array()), "vars", array()), "value", array())) {
                // line 14
                echo "            ";
                $context["hasCustomAddress"] = ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "billing_address", array()), "vars", array()), "value", array()), "customerUserAddress", array()) &&  !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "billing_address", array()), "vars", array()), "value", array()), "customerAddress", array()));
                // line 15
                echo "        ";
            }
            // line 16
            echo "        ";
            $context["billingAddress"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "billing_address", array()), "vars", array()), "value", array());
            // line 17
            echo "        <div data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocheckout/js/app/views/address-view", "selectors" => array("address" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
($context["form"] ?? null), "billing_address", array()), "customerAddress", array()), "vars", array()), "id", array())), "region" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
($context["form"] ?? null), "billing_address", array()), "region", array()), "vars", array()), "id", array())), "shipToBillingCheckbox" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 23
($context["form"] ?? null), "ship_to_billing_address", array()), "vars", array()), "id", array())), "fieldsContainer" => "#checkout-address-fields-container"))), "html", null, true);
            // line 26
            echo "\">

            <div class=\"grid\">
                <div class=\"grid__row grid__row--offset-none\">
                    <div class=\"grid__column grid__column--6\">
                        ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "billing_address", array()), "customerAddress", array()), 'row');
            echo "
                    </div>
                </div>
            </div>

            <div class=\"grid\">
                <div class=\"grid__row grid__row--offset-none\">
                    <div class=\"grid__column grid__column--6\">
                        ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "visitor_email", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.visitor.email"))));
            echo "
                    </div>
                </div>
            </div>

            ";
            // line 44
            echo $context["address"]->getaddress_form($this->getAttribute(($context["form"] ?? null), "billing_address", array()), $this->getAttribute(($context["form"] ?? null), "save_billing_address", array()), ($context["hasCustomAddress"] ?? null));
            echo "

            ";
            // line 46
            $context["hideShipping"] = false;
            // line 47
            echo "            ";
            if (($context["billingAddress"] ?? null)) {
                // line 48
                echo "                ";
                $context["typedAddress"] = $this->getAttribute(($context["billingAddress"] ?? null), "customerAddress", array());
                // line 49
                echo "                ";
                if (twig_test_empty(($context["typedAddress"] ?? null))) {
                    // line 50
                    echo "                    ";
                    $context["typedAddress"] = $this->getAttribute(($context["billingAddress"] ?? null), "customerUserAddress", array());
                    // line 51
                    echo "                ";
                }
                // line 52
                echo "
                ";
                // line 53
                $context["hideShipping"] = ( !twig_test_empty(($context["typedAddress"] ?? null)) &&  !$this->getAttribute(($context["typedAddress"] ?? null), "hasTypeWithName", array(0 => "shipping"), "method"));
                // line 54
                echo "            ";
            }
            // line 55
            echo "
            ";
            // line 56
            if ( !$this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "disallow_shipping_address_edit"), "method")) {
                // line 57
                echo "                <fieldset class=\"grid__row grid__row--offset-none ";
                if (($context["hideShipping"] ?? null)) {
                    echo "hidden";
                }
                echo "\">
                    <div class=\"grid__column grid__column--offset-y\">
                        ";
                // line 59
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ship_to_billing_address", array()), 'row');
                echo "
                    </div>
                </fieldset>
            ";
            }
            // line 63
            echo "        </div>
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if ($this->getAttribute(($context["form"] ?? null), "state_token", array(), "any", true, true)) {
            // line 67
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state_token", array()), 'row');
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:billing_information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  156 => 67,  154 => 66,  151 => 65,  147 => 63,  140 => 59,  132 => 57,  130 => 56,  127 => 55,  124 => 54,  122 => 53,  119 => 52,  116 => 51,  113 => 50,  110 => 49,  107 => 48,  104 => 47,  102 => 46,  97 => 44,  89 => 39,  78 => 31,  71 => 26,  69 => 23,  68 => 22,  67 => 21,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:billing_information.html.twig", "");
    }
}
