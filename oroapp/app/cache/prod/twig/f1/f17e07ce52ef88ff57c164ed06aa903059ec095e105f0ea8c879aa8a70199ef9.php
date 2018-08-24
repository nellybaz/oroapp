<?php

/* OroPromotionBundle:layouts/default/imports/oro_promotion_coupon_form:oro_promotion_coupon_form.html.twig */
class __TwigTemplate_843bcfe9a56514f3ab260b7a7d51007f686a1e9c994e665c67aedb111f9950f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_promotion_coupon_form__container_widget' => array($this, 'block___oro_promotion_coupon_form__container_widget'),
            '__oro_promotion_coupon_form__widget_container_widget' => array($this, 'block___oro_promotion_coupon_form__widget_container_widget'),
            '__oro_promotion_coupon_form__expand_link_widget' => array($this, 'block___oro_promotion_coupon_form__expand_link_widget'),
            '__oro_promotion_coupon_form__expandable_container_widget' => array($this, 'block___oro_promotion_coupon_form__expandable_container_widget'),
            '__oro_promotion_coupon_form__widget_header_widget' => array($this, 'block___oro_promotion_coupon_form__widget_header_widget'),
            '__oro_promotion_coupon_form__form_container_widget' => array($this, 'block___oro_promotion_coupon_form__form_container_widget'),
            '__oro_promotion_coupon_form__coupon_input_widget' => array($this, 'block___oro_promotion_coupon_form__coupon_input_widget'),
            '__oro_promotion_coupon_form__apply_button_widget' => array($this, 'block___oro_promotion_coupon_form__apply_button_widget'),
            '__oro_promotion_coupon_form__applied_coupons_list_container_widget' => array($this, 'block___oro_promotion_coupon_form__applied_coupons_list_container_widget'),
            '__oro_promotion_coupon_form__applied_coupons_list_header_widget' => array($this, 'block___oro_promotion_coupon_form__applied_coupons_list_header_widget'),
            '__oro_promotion_coupon_form__applied_coupons_list_rows_container_widget' => array($this, 'block___oro_promotion_coupon_form__applied_coupons_list_rows_container_widget'),
            '__oro_promotion_coupon_form__applied_coupons_list_row_container_widget' => array($this, 'block___oro_promotion_coupon_form__applied_coupons_list_row_container_widget'),
            '__oro_promotion_coupon_form__applied_coupons_list_row_text_container_widget' => array($this, 'block___oro_promotion_coupon_form__applied_coupons_list_row_text_container_widget'),
            '__oro_promotion_coupon_form__applied_coupons_list_row_coupon_code_widget' => array($this, 'block___oro_promotion_coupon_form__applied_coupons_list_row_coupon_code_widget'),
            '__oro_promotion_coupon_form__applied_coupons_list_row_promotion_name_widget' => array($this, 'block___oro_promotion_coupon_form__applied_coupons_list_row_promotion_name_widget'),
            '__oro_promotion_coupon_form__applied_coupons_list_row_delete_button_widget' => array($this, 'block___oro_promotion_coupon_form__applied_coupons_list_row_delete_button_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_promotion_coupon_form__container_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('__oro_promotion_coupon_form__widget_container_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('__oro_promotion_coupon_form__expand_link_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('__oro_promotion_coupon_form__expandable_container_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('__oro_promotion_coupon_form__widget_header_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('__oro_promotion_coupon_form__form_container_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('__oro_promotion_coupon_form__coupon_input_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('__oro_promotion_coupon_form__apply_button_widget', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('__oro_promotion_coupon_form__applied_coupons_list_container_widget', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('__oro_promotion_coupon_form__applied_coupons_list_header_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('__oro_promotion_coupon_form__applied_coupons_list_rows_container_widget', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('__oro_promotion_coupon_form__applied_coupons_list_row_container_widget', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('__oro_promotion_coupon_form__applied_coupons_list_row_text_container_widget', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('__oro_promotion_coupon_form__applied_coupons_list_row_coupon_code_widget', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('__oro_promotion_coupon_form__applied_coupons_list_row_promotion_name_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('__oro_promotion_coupon_form__applied_coupons_list_row_delete_button_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_promotion_coupon_form__container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["options"] = array("view" => "oropromotion/js/app/views/frontend-coupon-add-view", "entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 4
($context["entity"] ?? null)), "entityId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "selectors" => array("couponCodeSelector" => "[data-role=\"coupon-code\"]", "couponApplySelector" => "[data-role=\"apply-coupon\"]", "couponRemoveSelector" => "[data-role=\"remove-coupon\"]", "messagesContainer" => ".coupon-container"));
        // line 13
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "coupon-container", "data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" =>         // line 16
($context["options"] ?? null)));
        // line 18
        echo "
    <div ";
        // line 19
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 24
    public function block___oro_promotion_coupon_form__widget_container_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"collapse-view\" data-page-component-collapse=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("open" => ($context["opened"] ?? null))), "html", null, true);
        echo "\">
        ";
        // line 26
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 30
    public function block___oro_promotion_coupon_form__expand_link_widget($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"collapse-view__trigger hide-on-expand\" data-collapse-trigger>
        <i class=\"fa fa-file-text-o\"></i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.coupon.expand_link.label"), "html", null, true);
        echo "
    </div>
";
    }

    // line 36
    public function block___oro_promotion_coupon_form__expandable_container_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "coupon-container__content"));
        // line 40
        echo "
    <div class=\"collapse-view__container\" data-collapse-container>
        <div ";
        // line 42
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
            ";
        // line 43
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 48
    public function block___oro_promotion_coupon_form__widget_header_widget($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "page-title"));
        // line 52
        echo "
    <h3 ";
        // line 53
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.coupon.widget.header.label"), "html", null, true);
        echo "</h3>
";
    }

    // line 56
    public function block___oro_promotion_coupon_form__form_container_widget($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "coupon-container__form"));
        // line 60
        echo "
    <div ";
        // line 61
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 62
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 66
    public function block___oro_promotion_coupon_form__coupon_input_widget($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "coupon-container__input-wrap"));
        // line 70
        echo "
    <div ";
        // line 71
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <input data-role=\"coupon-code\" placeholder=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.coupon.widget.coupon_input.placeholder"), "html", null, true);
        echo "\" class=\"input input--full\">
    </div>
";
    }

    // line 76
    public function block___oro_promotion_coupon_form__apply_button_widget($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "btn btn--action", "data-role" => "apply-coupon"));
        // line 81
        echo "
    <button ";
        // line 82
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.coupon.widget.apply_button.label"), "html", null, true);
        echo "</button>
";
    }

    // line 85
    public function block___oro_promotion_coupon_form__applied_coupons_list_container_widget($context, array $blocks = array())
    {
        // line 86
        echo "    <div>
        ";
        // line 87
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 91
    public function block___oro_promotion_coupon_form__applied_coupons_list_header_widget($context, array $blocks = array())
    {
        // line 92
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "bold"));
        // line 95
        echo "
    <h4 ";
        // line 96
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.coupon.widget.applied_coupons_header.label"), "html", null, true);
        echo "</h4>
";
    }

    // line 99
    public function block___oro_promotion_coupon_form__applied_coupons_list_rows_container_widget($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " coupons-list"));
        // line 103
        echo "
    <ul ";
        // line 104
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["appliedCoupons"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["appliedCoupon"]) {
            // line 106
            echo "            ";
            $context["promotion"] = (($this->getAttribute(($context["appliedCouponsPromotions"] ?? null), $this->getAttribute($context["appliedCoupon"], "sourcePromotionId", array()), array(), "array", true, true)) ? ($this->getAttribute(($context["appliedCouponsPromotions"] ?? null), $this->getAttribute($context["appliedCoupon"], "sourcePromotionId", array()), array(), "array")) : (null));
            // line 107
            echo "            ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("appliedCoupon" =>             // line 108
$context["appliedCoupon"], "promotion" =>             // line 109
($context["promotion"] ?? null), "parent" => $this->getAttribute(            // line 110
($context["block"] ?? null), "vars", array()), "loop" =>             // line 111
$context["loop"]));
            // line 113
            echo "            ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appliedCoupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "    </ul>
";
    }

    // line 118
    public function block___oro_promotion_coupon_form__applied_coupons_list_row_container_widget($context, array $blocks = array())
    {
        // line 119
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "coupons-list__item"));
        // line 122
        echo "
    ";
        // line 123
        if (twig_test_empty(($context["promotion"] ?? null))) {
            // line 124
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "coupons-list__item", "data-item-can-remove-promotion" => ""));
            // line 128
            echo "
    ";
        }
        // line 130
        echo "
    <li ";
        // line 131
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 132
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </li>
";
    }

    // line 136
    public function block___oro_promotion_coupon_form__applied_coupons_list_row_text_container_widget($context, array $blocks = array())
    {
        // line 137
        echo "    <span>
        ";
        // line 138
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </span>
";
    }

    // line 142
    public function block___oro_promotion_coupon_form__applied_coupons_list_row_coupon_code_widget($context, array $blocks = array())
    {
        // line 143
        echo "    <span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["appliedCoupon"] ?? null), "couponCode", array()), "html", null, true);
        echo "</span>
";
    }

    // line 146
    public function block___oro_promotion_coupon_form__applied_coupons_list_row_promotion_name_widget($context, array $blocks = array())
    {
        // line 147
        echo "    ";
        if ( !(null === ($context["promotion"] ?? null))) {
            // line 148
            echo "        <span>";
            echo twig_escape_filter($this->env, (($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["promotion"] ?? null), "labels", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["promotion"] ?? null), "labels", array()))) : ($this->getAttribute($this->getAttribute(($context["promotion"] ?? null), "rule", array()), "name", array()))), "html", null, true);
            echo "</span>
    ";
        }
    }

    // line 152
    public function block___oro_promotion_coupon_form__applied_coupons_list_row_delete_button_widget($context, array $blocks = array())
    {
        // line 153
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("class" => "btn btn--plain btn--baseline", "data-object-id" => $this->getAttribute(        // line 155
($context["appliedCoupon"] ?? null), "id", array()), "data-role" => "remove-coupon"));
        // line 158
        echo "
    <button ";
        // line 159
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-trash-o fa--x-large fa--no-offset\"></i>
    </button>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:layouts/default/imports/oro_promotion_coupon_form:oro_promotion_coupon_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  435 => 159,  432 => 158,  430 => 155,  428 => 153,  425 => 152,  417 => 148,  414 => 147,  411 => 146,  404 => 143,  401 => 142,  394 => 138,  391 => 137,  388 => 136,  381 => 132,  377 => 131,  374 => 130,  370 => 128,  367 => 124,  365 => 123,  362 => 122,  359 => 119,  356 => 118,  351 => 115,  334 => 113,  332 => 111,  331 => 110,  330 => 109,  329 => 108,  327 => 107,  324 => 106,  307 => 105,  303 => 104,  300 => 103,  297 => 100,  294 => 99,  286 => 96,  283 => 95,  280 => 92,  277 => 91,  270 => 87,  267 => 86,  264 => 85,  256 => 82,  253 => 81,  250 => 77,  247 => 76,  240 => 72,  236 => 71,  233 => 70,  230 => 67,  227 => 66,  220 => 62,  216 => 61,  213 => 60,  210 => 57,  207 => 56,  199 => 53,  196 => 52,  193 => 49,  190 => 48,  182 => 43,  178 => 42,  174 => 40,  171 => 37,  168 => 36,  161 => 32,  158 => 31,  155 => 30,  148 => 26,  143 => 25,  140 => 24,  133 => 20,  129 => 19,  126 => 18,  124 => 16,  122 => 13,  120 => 5,  119 => 4,  117 => 2,  114 => 1,  110 => 152,  107 => 151,  105 => 146,  102 => 145,  100 => 142,  97 => 141,  95 => 136,  92 => 135,  90 => 118,  87 => 117,  85 => 99,  82 => 98,  80 => 91,  77 => 90,  75 => 85,  72 => 84,  70 => 76,  67 => 75,  65 => 66,  62 => 65,  60 => 56,  57 => 55,  55 => 48,  52 => 47,  50 => 36,  47 => 35,  45 => 30,  42 => 29,  40 => 24,  37 => 23,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:layouts/default/imports/oro_promotion_coupon_form:oro_promotion_coupon_form.html.twig", "");
    }
}
