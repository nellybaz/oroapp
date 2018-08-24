<?php

/* OroPromotionBundle:Form:fields.html.twig */
class __TwigTemplate_489fd2d1001e8a28031c4347fa22d76f1640b80a809e8160cfd5cdeb5aff3279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_promotion_discount_options_widget' => array($this, 'block_oro_promotion_discount_options_widget'),
            'oro_promotion_buy_x_get_y_discount_options_widget' => array($this, 'block_oro_promotion_buy_x_get_y_discount_options_widget'),
            'oro_promotion_line_item_discount_options_widget' => array($this, 'block_oro_promotion_line_item_discount_options_widget'),
            'oro_promotion_discount_configuration_widget' => array($this, 'block_oro_promotion_discount_configuration_widget'),
            'oro_promotion_coupon_add_row' => array($this, 'block_oro_promotion_coupon_add_row'),
            'oro_promotion_coupon_dashes_sequence_widget' => array($this, 'block_oro_promotion_coupon_dashes_sequence_widget'),
            'oro_promotion_applied_promotion_widget' => array($this, 'block_oro_promotion_applied_promotion_widget'),
            'oro_promotion_applied_coupon_collection_widget' => array($this, 'block_oro_promotion_applied_coupon_collection_widget'),
            'oro_promotion_applied_coupon_widget' => array($this, 'block_oro_promotion_applied_coupon_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_promotion_discount_options_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('oro_promotion_buy_x_get_y_discount_options_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('oro_promotion_line_item_discount_options_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('oro_promotion_discount_configuration_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('oro_promotion_coupon_add_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('oro_promotion_coupon_dashes_sequence_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('oro_promotion_applied_promotion_widget', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('oro_promotion_applied_coupon_collection_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('oro_promotion_applied_coupon_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_promotion_discount_options_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div
        data-page-component-module=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-page-component-module", array(), "array"), "html", null, true);
        echo "\"
        data-page-component-options=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-page-component-options", array(), "array"), "html", null, true);
        echo "\"
    >
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discount_type", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "amount_discount_value", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "percent_discount_value", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </div>
";
    }

    // line 13
    public function block_oro_promotion_buy_x_get_y_discount_options_widget($context, array $blocks = array())
    {
        // line 14
        echo "    <div
            data-page-component-module=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-page-component-module", array(), "array"), "html", null, true);
        echo "\"
            data-page-component-options=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-page-component-options", array(), "array"), "html", null, true);
        echo "\"
    >
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discount_type", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discount_product_unit_code", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "buy_x", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "get_y", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "amount_discount_value", array()), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "percent_discount_value", array()), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </div>
";
    }

    // line 28
    public function block_oro_promotion_line_item_discount_options_widget($context, array $blocks = array())
    {
        // line 29
        echo "    <div
            data-page-component-module=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-page-component-module", array(), "array"), "html", null, true);
        echo "\"
            data-page-component-options=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-page-component-options", array(), "array"), "html", null, true);
        echo "\"
    >
        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discount_type", array()), 'row');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "amount_discount_value", array()), 'row');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "percent_discount_value", array()), 'row');
        echo "
        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "apply_to", array()), 'row');
        echo "
        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discount_product_unit_code", array()), 'row');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </div>
    ";
    }

    // line 42
    public function block_oro_promotion_discount_configuration_widget($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $context["dataPrototypes"] = array();
        // line 44
        echo "
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prototypes"] ?? null));
        foreach ($context['_seq'] as $context["prototypeKey"] => $context["prototypeForm"]) {
            // line 46
            echo "        ";
            $context["dataPrototypes"] = twig_array_merge(($context["dataPrototypes"] ?? null), array($context["prototypeKey"] => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["prototypeForm"], 'widget')));
            // line 47
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['prototypeKey'], $context['prototypeForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    <div
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropromotion/js/app/views/discount-options-view", "discountFormPrototypes" =>         // line 53
($context["dataPrototypes"] ?? null))), "html", null, true);
        // line 54
        echo "\"
    >
        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row', array("attr" => array("data-role" => "discount-form-choice")));
        echo "

        <div data-role=\"discount-options-form\">
            ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "options", array()), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 64
    public function block_oro_promotion_coupon_add_row($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $context["addButtonId"] = ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "coupon", array()), "vars", array()), "id", array()) . "-add-button");
        // line 66
        echo "    ";
        $context["addedCouponsContainerId"] = ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "addedCoupons", array()), "vars", array()), "id", array()) . "-added-coupons-container");
        // line 67
        echo "    <fieldset class=\"form-horizontal\"
            data-page-component-view=\"oropromotion/js/app/views/coupon-add-view\"
            data-page-component-options=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("entityClass" =>         // line 70
($context["entityClass"] ?? null), "entityId" =>         // line 71
($context["entityId"] ?? null), "selectors" => array("couponAutocompleteSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 73
($context["form"] ?? null), "coupon", array()), "vars", array()), "id", array())), "couponAddButtonSelector" => ("#" .         // line 74
($context["addButtonId"] ?? null)), "addedIdsSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 75
($context["form"] ?? null), "addedCoupons", array()), "vars", array()), "id", array())), "addedCouponsContainerSelector" => ("#" .         // line 76
($context["addedCouponsContainerId"] ?? null)), "selectCouponValidationContainerSelector" => ".select-coupon-validation-container", "formSelector" => "form[name=\"oro_order_type\"]"))), "html", null, true);
        // line 80
        echo "\"
    >
        <div class=\"select-coupon-container\">
            ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "coupon", array()), 'row', array("attr" => array("class" => "coupon-select")));
        echo "
            <button id=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["addButtonId"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.form.add_type.add_button.label"), "html", null, true);
        echo "</button>
        </div>
        <div class=\"select-coupon-validation-container control-group\"></div>
        <div class=\"added-coupons-container\">
            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "addedCoupons", array()), 'row', array("attr" => array("data-role" => "added-coupons-field")));
        echo "
            <div id=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["addedCouponsContainerId"] ?? null), "html", null, true);
        echo "\"></div>
        </div>
    </fieldset>
";
    }

    // line 94
    public function block_oro_promotion_coupon_dashes_sequence_widget($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        ob_start();
        // line 96
        echo "        <label class=\"dashes-sequence-suffix-label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.generation.dashesSequence.suffix.label"), "html", null, true);
        echo "</label>
        ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 101
    public function block_oro_promotion_applied_promotion_widget($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())) {
            // line 103
            echo "        <div data-role=\"applied-promotion-element\" data-source-promotion-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "sourcePromotionId", array()), "html", null, true);
            echo "\">
            ";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "active", array()), 'widget', array("attr" => array("data-role" => "applied-promotion-active")));
            echo "
            ";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourcePromotionId", array()), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 110
    public function block_oro_promotion_applied_coupon_collection_widget($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPromotionBundle:Form:fields.html.twig", 111);
        // line 112
        echo "    <div class=\"oro-collection-table-heading\">
        <h5>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.all_label"), "html", null, true);
        echo "</h5>
        ";
        // line 114
        echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_action_widget_form", array("operationName" => "oro_promotion_add_coupon_form", "entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute($this->getAttribute(        // line 117
($context["form"] ?? null), "vars", array()), "entity", array())), "entityId" => array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 118
($context["form"] ?? null), "vars", array()), "entity", array()), "id", array())))), "aCss" => "btn", "dataAttributes" => array("role" => "add"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.ui.add_coupon_code.label"), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" =>         // line 129
($context["dialogWidgetAlias"] ?? null), "dialogOptions" => array("okText" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.ui.apply_button.label"), "width" => 600, "autoResize" => true, "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.ui.add_coupon_codes.title"), "allowMaximize" => true, "allowMinimize" => false, "dblclick" => false, "modal" => true, "maximizedHeightDecreaseBy" => "minimize-bar")))));
        // line 143
        echo "
    </div>

    ";
        // line 146
        $context["order_macros"] = $this->loadTemplate("OroOrderBundle:Order:macros.html.twig", "OroPromotionBundle:Form:fields.html.twig", 146);
        // line 147
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 148
        echo $context["order_macros"]->gethiddenCollection(($context["form"] ?? null));
        echo "
    </div>
";
    }

    // line 152
    public function block_oro_promotion_applied_coupon_widget($context, array $blocks = array())
    {
        // line 153
        echo "    <div
        data-role=\"applied-coupon-element\"
        data-source-coupon-id=\"";
        // line 155
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "sourceCouponId", array())) : (null)), "html", null, true);
        echo "\"
    >
        ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "couponCode", array()), 'widget', array("attr" => array("data-role" => "applied-coupon-code")));
        echo "
        ";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourcePromotionId", array()), 'widget', array("attr" => array("data-role" => "applied-coupon-source-promotion-id")));
        echo "
        ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourceCouponId", array()), 'widget', array("attr" => array("data-role" => "applied-coupon-source-coupon-id")));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  391 => 159,  387 => 158,  383 => 157,  378 => 155,  374 => 153,  371 => 152,  364 => 148,  359 => 147,  357 => 146,  352 => 143,  350 => 129,  349 => 118,  348 => 117,  347 => 114,  343 => 113,  340 => 112,  337 => 111,  334 => 110,  326 => 105,  322 => 104,  317 => 103,  314 => 102,  311 => 101,  304 => 97,  299 => 96,  296 => 95,  293 => 94,  285 => 89,  281 => 88,  272 => 84,  268 => 83,  263 => 80,  261 => 76,  260 => 75,  259 => 74,  258 => 73,  257 => 71,  256 => 70,  255 => 69,  251 => 67,  248 => 66,  245 => 65,  242 => 64,  234 => 59,  228 => 56,  224 => 54,  222 => 53,  221 => 51,  216 => 48,  210 => 47,  207 => 46,  203 => 45,  200 => 44,  197 => 43,  194 => 42,  187 => 38,  183 => 37,  179 => 36,  175 => 35,  171 => 34,  167 => 33,  162 => 31,  158 => 30,  155 => 29,  152 => 28,  145 => 24,  141 => 23,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  116 => 16,  112 => 15,  109 => 14,  106 => 13,  99 => 9,  95 => 8,  91 => 7,  87 => 6,  82 => 4,  78 => 3,  75 => 2,  72 => 1,  68 => 152,  65 => 151,  63 => 110,  60 => 109,  58 => 101,  55 => 100,  53 => 94,  50 => 93,  48 => 64,  45 => 63,  43 => 42,  40 => 41,  38 => 28,  35 => 27,  33 => 13,  30 => 12,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PromotionBundle/Resources/views/Form/fields.html.twig");
    }
}
