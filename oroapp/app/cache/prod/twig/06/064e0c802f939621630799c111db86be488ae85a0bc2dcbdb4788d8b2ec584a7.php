<?php

/* OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add.html.twig */
class __TwigTemplate_e251d491b66130bd214664e964809794cc343219600a038fe0da4c36a8162ec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_page_title_widget' => array($this, 'block__page_title_widget'),
            '_quick_add_container_widget' => array($this, 'block__quick_add_container_widget'),
            '_quick_add_form_widget' => array($this, 'block__quick_add_form_widget'),
            '_quick_add_form_start_widget' => array($this, 'block__quick_add_form_start_widget'),
            '_quick_add_form_fields_widget' => array($this, 'block__quick_add_form_fields_widget'),
            '_quick_add_form_buttons_wrapper_widget' => array($this, 'block__quick_add_form_buttons_wrapper_widget'),
            '_quick_add_form_clear_button_widget' => array($this, 'block__quick_add_form_clear_button_widget'),
            '_quick_add_form_buttons_widget' => array($this, 'block__quick_add_form_buttons_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_page_title_widget', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('_quick_add_container_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_quick_add_form_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('_quick_add_form_start_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('_quick_add_form_fields_widget', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('_quick_add_form_buttons_wrapper_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('_quick_add_form_clear_button_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('_quick_add_form_buttons_widget', $context, $blocks);
    }

    // line 1
    public function block__page_title_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["titleIcon"] = "fa-flash";
        // line 3
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 6
    public function block__quick_add_container_widget($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " quick-order", "data-focusable" => true, "data-page-component-view" => "oroproduct/js/app/views/quick-add-view"));
        // line 12
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 13
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 17
    public function block__quick_add_form_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " quick-order-add", "data-role" => "quick-order-add-container"));
        // line 22
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 23
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 27
    public function block__quick_add_form_start_widget($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $context["pageComponentOptions"] = array("componentSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["form"] ?? null), "component", array()), "vars", array()), "id", array())), "additionalSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 30
($context["form"] ?? null), "additional", array()), "vars", array()), "id", array())));
        // line 32
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroproduct/js/app/components/quick-add-component", "~data-page-component-options" =>         // line 34
($context["pageComponentOptions"] ?? null), "name" => "oro_product_quick_add"));
        // line 37
        echo "    ";
        $this->displayBlock("form_start_widget", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block__quick_add_form_fields_widget($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " quick-order-add__content row-oro"));
        // line 44
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "products", array()), 'widget');
        echo "
    </div>
    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "component", array()), 'row');
        echo "
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "additional", array()), 'row');
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
";
    }

    // line 52
    public function block__quick_add_form_buttons_wrapper_widget($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " quick-order-add__buttons-wrapper", "data-role" => "quick-order-add-buttons"));
        // line 57
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 58
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 62
    public function block__quick_add_form_clear_button_widget($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " btn btn--action quick-order-add__clear-button hidden", "data-role" => "quick-order-add-clear"));
        // line 67
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 70
    public function block__quick_add_form_buttons_widget($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " quick-order-add__buttons"));
        // line 74
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 75
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_product_quick_add_buttons", $context)) ? (_twig_default_filter(($context["oro_product_quick_add_buttons"] ?? null), "oro_product_quick_add_buttons")) : ("oro_product_quick_add_buttons")), array());
        // line 76
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 76,  206 => 75,  201 => 74,  198 => 71,  195 => 70,  188 => 67,  185 => 63,  182 => 62,  175 => 58,  170 => 57,  167 => 53,  164 => 52,  158 => 49,  154 => 48,  150 => 47,  145 => 45,  140 => 44,  137 => 41,  134 => 40,  127 => 37,  125 => 34,  123 => 32,  121 => 30,  120 => 29,  118 => 28,  115 => 27,  108 => 23,  103 => 22,  100 => 18,  97 => 17,  90 => 13,  85 => 12,  82 => 7,  79 => 6,  72 => 3,  69 => 2,  66 => 1,  62 => 70,  59 => 69,  57 => 62,  54 => 61,  52 => 52,  49 => 51,  47 => 40,  44 => 39,  42 => 27,  39 => 26,  37 => 17,  34 => 16,  32 => 6,  29 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add.html.twig", "");
    }
}
