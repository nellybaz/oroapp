<?php

/* OroRFPBundle:layouts/default/imports/oro_rfp_frontend_request_edit:layout.html.twig */
class __TwigTemplate_4cb0287fe037f42d0ca355d9c8c4e06dc42ba8472281896f97ed3547c1bb813b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_rfp_frontend_request_edit__rfp_form_container_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_container_widget'),
            '__oro_rfp_frontend_request_edit__rfp_page_title_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_page_title_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_start_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_start_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_edit_container_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_edit_container_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_fields_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_fields_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_field_assigned_to_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_field_assigned_to_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_lineitems_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_lineitems_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_actions_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_actions_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_actions_back_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_actions_back_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_lineitems_container_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_lineitems_container_widget'),
            '__oro_rfp_frontend_request_edit__rfp_form_lineitems_view_js_widget' => array($this, 'block___oro_rfp_frontend_request_edit__rfp_form_lineitems_view_js_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_container_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_page_title_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_start_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_edit_container_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_fields_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_field_assigned_to_widget', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_lineitems_widget', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_actions_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_actions_back_widget', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_lineitems_container_widget', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('__oro_rfp_frontend_request_edit__rfp_form_lineitems_view_js_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_rfp_frontend_request_edit__rfp_form_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-focusable" => true));
        // line 5
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block___oro_rfp_frontend_request_edit__rfp_page_title_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__title"));
        // line 14
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 17
    public function block___oro_rfp_frontend_request_edit__rfp_form_start_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " {{ class_prefix }}__form {{ class_prefix }}__form_register"));
        // line 21
        echo "    ";
        $this->displayBlock("form_start_widget", $context, $blocks);
        echo "
";
    }

    // line 24
    public function block___oro_rfp_frontend_request_edit__rfp_form_edit_container_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " request-form-container"));
        // line 28
        echo "
    <div";
        // line 29
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"request-form-grid\">
            ";
        // line 31
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 36
    public function block___oro_rfp_frontend_request_edit__rfp_form_fields_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "

    <div class=\"request-form-grid__row\">
        <div class=\"request-form-grid__column grid__column--6\">
            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row');
        echo "
        </div>
        <div class=\"request-form-grid__column grid__column--6\">
            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"request-form-grid__row\">
        <div class=\"request-form-grid__column grid__column--6\">
            ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row');
        echo "
        </div>
        <div class=\"request-form-grid__column grid__column--6\">
            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"request-form-grid__row\">
        <div class=\"request-form-grid__column grid__column--6\">
            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "company", array()), 'row');
        echo "
        </div>
        <div class=\"request-form-grid__column grid__column--6\">
            ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "role", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"request-form-grid__row\">
        <div class=\"request-form-grid__column grid__column--12\">
            ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "note", array()), 'row', array("attr" => array("rows" => 5)));
        echo "
        </div>
    </div>
    <div class=\"request-form-grid__row\">
        <div class=\"request-form-grid__column grid__column--6\">
            ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "poNumber", array()), 'row');
        echo "
        </div>
        <div class=\"request-form-grid__column grid__column--6\">
            <div class=\"datepicker-box datepicker-box--form-mode\">
                <span class=\"datepicker-box__icon\"><i class=\"fa-calendar\"></i></span>
                ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shipUntil", array()), 'row', array("attr" => array("class" => "datepicker-input input"), "parentClass" => "", "datePickerOptions" => array("minDate" => 0)));
        // line 83
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 89
    public function block___oro_rfp_frontend_request_edit__rfp_form_field_assigned_to_widget($context, array $blocks = array())
    {
        // line 90
        echo "    <div class=\"request-form-grid__row\">
        <div class=\"request-form-grid__column grid__column--6\">
            ";
        // line 92
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 97
    public function block___oro_rfp_frontend_request_edit__rfp_form_lineitems_widget($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "requestProducts", array()), 'widget');
        echo "
    ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "requestProducts", array()), 'errors');
        echo "
";
    }

    // line 102
    public function block___oro_rfp_frontend_request_edit__rfp_form_actions_widget($context, array $blocks = array())
    {
        // line 103
        echo "    <div class=\"request-form-actions\">
        ";
        // line 104
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 108
    public function block___oro_rfp_frontend_request_edit__rfp_form_actions_back_widget($context, array $blocks = array())
    {
        // line 109
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " btn"));
        // line 112
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 115
    public function block___oro_rfp_frontend_request_edit__rfp_form_lineitems_container_widget($context, array $blocks = array())
    {
        // line 116
        echo "    <div data-page-component-view=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "ororfp/js/app/views/line-items-view", "tierPrices" => ((        // line 118
array_key_exists("tierPrices", $context)) ? (_twig_default_filter(($context["tierPrices"] ?? null), array())) : (array())), "tierPricesRoute" => "oro_pricing_frontend_price_by_customer")), "html", null, true);
        // line 120
        echo "\">
        ";
        // line 121
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 125
    public function block___oro_rfp_frontend_request_edit__rfp_form_lineitems_view_js_widget($context, array $blocks = array())
    {
        // line 126
        echo "    <script type=\"text/template\" id=\"rfp-form-line-item-view-template\">
        <% _.each(lines, function(line, index){ %>
            <div class=\"request-form-product__inner\">
                <% if (!index) { %>
                <div class=\"request-form-product__item request-form-product__item--link\">
                    <span class=\"request-form-link\"><%- product['defaultName.string'] %></span>
                </div>
                <% } %>
                <div class=\"request-form-product__item request-form-product__item--quantity\">
                    <span class=\"request-form-quantity\">
                        <span class=\"request-form-quantity__label\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.qty"), "html");
        echo ":</span>
                        <span class=\"request-form-quantity__total\"><%- line.quantity %></span>
                        <span class=\"request-form-quantity__units\"><%- line.unit %></span>
                    </span>
                </div>
                <div class=\"request-form-product__item request-form-product__item--target\">
                    <dl class=\"request-form-amount\">
                        <dt class=\"request-form-amount__piece\">
                            <span class=\"request-form-amount__label\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.requestproductitem.price.label"), "html");
        echo "</span>
                            <span class=\"request-form-amount__total\"><%- formatter.formatCurrency(line.price, line.currency) %></span>
                        </dt>
                    </dl>
                </div>
                <div class=\"request-form-product__item request-form-product__item--listed\">
                    <dl class=\"request-form-amount\">
                        <dt class=\"request-form-amount__piece\">
                            <span class=\"request-form-amount__label\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.frontend.pricelist.index.listed_price"), "html");
        echo "</span>
                            <span class=\"request-form-amount__total\">
                            <% if (line.found_price) { %>
                                <%- formatter.formatCurrency(line.found_price.price, line.currency) %>
                            <% } else { %>
                                <%- _.__(\"N/A\") %>
                            <% } %>
                            </span>
                        </dt>
                    </dl>
                </div>
            </div>
        <% }) %>
        <% if (!_.isEmpty(_.trim(comment))) { %>
            <div class=\"request-form-product__item request-form-product__item--comment\">
                <p class=\"request-form-note\">Note: <%- comment %></p>
            </div>
        <% } %>
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:layouts/default/imports/oro_rfp_frontend_request_edit:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  340 => 152,  329 => 144,  318 => 136,  306 => 126,  303 => 125,  296 => 121,  293 => 120,  291 => 118,  289 => 116,  286 => 115,  279 => 112,  276 => 109,  273 => 108,  266 => 104,  263 => 103,  260 => 102,  254 => 99,  249 => 98,  246 => 97,  238 => 92,  234 => 90,  231 => 89,  223 => 83,  221 => 75,  213 => 70,  205 => 65,  197 => 60,  191 => 57,  183 => 52,  177 => 49,  169 => 44,  163 => 41,  155 => 37,  152 => 36,  144 => 31,  139 => 29,  136 => 28,  133 => 25,  130 => 24,  123 => 21,  120 => 18,  117 => 17,  108 => 14,  105 => 11,  102 => 10,  95 => 6,  90 => 5,  87 => 2,  84 => 1,  80 => 125,  77 => 124,  75 => 115,  72 => 114,  70 => 108,  67 => 107,  65 => 102,  62 => 101,  60 => 97,  57 => 96,  55 => 89,  52 => 88,  50 => 36,  47 => 35,  45 => 24,  42 => 23,  40 => 17,  37 => 16,  35 => 10,  32 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:layouts/default/imports/oro_rfp_frontend_request_edit:layout.html.twig", "");
    }
}
