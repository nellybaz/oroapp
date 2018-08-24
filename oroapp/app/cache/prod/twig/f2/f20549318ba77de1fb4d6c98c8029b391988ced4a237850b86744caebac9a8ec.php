<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:order_review.html.twig */
class __TwigTemplate_1ed5d9dd7969fb610b287164227fa4230dabc46f34e912a7c18f4f699ea6cb5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_checkout_additional_options_widget' => array($this, 'block__checkout_additional_options_widget'),
            '_checkout_form_fields_widget' => array($this, 'block__checkout_form_fields_widget'),
            '_checkout_information_body_widget' => array($this, 'block__checkout_information_body_widget'),
            '_payment_additional_data_widget' => array($this, 'block__payment_additional_data_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_checkout_additional_options_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('_checkout_form_fields_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('_checkout_information_body_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('_payment_additional_data_widget', $context, $blocks);
    }

    // line 1
    public function block__checkout_additional_options_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-collapse" => twig_jsonencode_filter(array("storageKey" =>         // line 3
($context["id"] ?? null))), "~class" => " collapse-view order-review-options__wrapper"));
        // line 6
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <span class=\"collapse-view__trigger collapse-view__trigger--icon\" data-collapse-trigger>
            <i class=\"collapse-view__trigger-icon fa-caret-right\" data-toggle=\"collapse\" data-target=\"#orderOptionsContainer\"></i>
        </span>
        <a href=\"#\" class=\"collapse-view__trigger\" data-collapse-trigger>
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.order_options.label"), "html", null, true);
        echo "
        </a>
        <div class=\"order-review-options collapse-view__container\" data-collapse-container>
            <fieldset class=\"grid__row grid__row--offset-none\"
                      data-trigger-selector=\"#addShipDate\"
                      data-page-component-module=\"orocheckout/js/app/components/clear-field-data-component\">
                <div class=\"grid__column grid__column--6\">
                    <label class=\"label label--full\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.order_review.shipping_date"), "html", null, true);
        echo "</label>
                    <div class=\"checkout-form__datepicker datepicker-box\">
                        <span class=\"datepicker-box__icon\"><i class=\"fa-calendar\"></i></span>
                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ship_until", array()), 'widget');
        echo "
                    </div>
                </div>
            </fieldset>
            <fieldset class=\"grid__row grid__row--offset-none\"
                      data-trigger-selector=\"#addPoNumber\"
                      data-page-component-module=\"orocheckout/js/app/components/clear-field-data-component\">
                <div class=\"grid__column grid__column--6\">
                    <label class=\"label label--full\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.order_review.po_number"), "html", null, true);
        echo "</label>
                    <div class=\"checkout-form__optional-ref-number\">
                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "po_number", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.order_review.po_number_placeholder"))));
        echo "
                    </div>
                </div>
            </fieldset>
            <fieldset class=\"grid__row grid__row--offset-none\"
                      data-trigger-selector=\"#addNote\"
                      data-page-component-module=\"orocheckout/js/app/components/clear-field-data-component\">
                <div class=\"grid__column grid__column--12\">
                    <label class=\"label label--full\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.order_review.note"), "html", null, true);
        echo "</label>
                    <div class=\"checkout-form__order-notes\">
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer_notes", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.order_review.note_placeholder"), "data-page-component-elastic-area" => "")));
        // line 44
        echo "
                    </div>
                </div>
            </fieldset>

            ";
        // line 49
        if ($this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "allow_manual_source_remove"), "method")) {
            // line 50
            echo "                ";
            $context["removeElementOptions"] = array();
            // line 51
            echo "                ";
            $context["removeLabel"] = $this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "source_remove_label"), "method");
            // line 52
            echo "                ";
            if (($context["removeLabel"] ?? null)) {
                // line 53
                echo "                    ";
                $context["removeElementOptions"] = twig_array_merge(($context["removeElementOptions"] ?? null), array("label" => ($context["removeLabel"] ?? null)));
                // line 54
                echo "                ";
            }
            // line 55
            echo "                <fieldset class=\"grid__row grid__row--offset-none\">
                    <div class=\"grid__column grid__column--6\">
                        ";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "remove_source", array()), 'row', ($context["removeElementOptions"] ?? null));
            echo "
                    </div>
                </fieldset>
            ";
        }
        // line 61
        echo "            ";
        if ($this->getAttribute(($context["form"] ?? null), "state_token", array(), "any", true, true)) {
            // line 62
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state_token", array()), 'row');
            echo "
            ";
        }
        // line 64
        echo "        </div>
    </div>
";
    }

    // line 68
    public function block__checkout_form_fields_widget($context, array $blocks = array())
    {
        // line 69
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
    }

    // line 72
    public function block__checkout_information_body_widget($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " checkout__body--offset-none"));
        // line 76
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 79
    public function block__payment_additional_data_widget($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "views", array(), "any", false, true), $this->getAttribute(($context["options"] ?? null), "payment_method", array()), array(), "array", true, true)) {
            // line 81
            echo "        ";
            $context["view"] = $this->getAttribute($this->getAttribute(($context["options"] ?? null), "views", array()), $this->getAttribute(($context["options"] ?? null), "payment_method", array()), array(), "array");
            // line 82
            echo "        ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:order_review.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 82,  184 => 81,  181 => 80,  178 => 79,  171 => 76,  168 => 73,  165 => 72,  161 => 69,  158 => 68,  152 => 64,  146 => 62,  143 => 61,  136 => 57,  132 => 55,  129 => 54,  126 => 53,  123 => 52,  120 => 51,  117 => 50,  115 => 49,  108 => 44,  106 => 41,  101 => 39,  90 => 31,  85 => 29,  74 => 21,  68 => 18,  58 => 11,  49 => 6,  47 => 3,  45 => 2,  42 => 1,  38 => 79,  35 => 78,  33 => 72,  30 => 71,  28 => 68,  25 => 67,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:order_review.html.twig", "");
    }
}
