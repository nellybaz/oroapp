<?php

/* OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/list:layout.html.twig */
class __TwigTemplate_c6efb6f4344f5af9d1a4a4ac4dc4fcc597f5c32cd1586d6a143b83ee5424349e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'attribute_group_rest_widget' => array($this, 'block_attribute_group_rest_widget'),
            'attribute_group_rest_attribute_group_widget' => array($this, 'block_attribute_group_rest_attribute_group_widget'),
            '_line_item_form_shopping_lists_widget' => array($this, 'block__line_item_form_shopping_lists_widget'),
            'attribute_label_widget' => array($this, 'block_attribute_label_widget'),
            '_product_main_container_widget' => array($this, 'block__product_main_container_widget'),
            '_product_aside_container_widget' => array($this, 'block__product_aside_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('attribute_group_rest_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('attribute_group_rest_attribute_group_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('_line_item_form_shopping_lists_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('attribute_label_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('_product_main_container_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('_product_aside_container_widget', $context, $blocks);
    }

    // line 1
    public function block_attribute_group_rest_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 7
    public function block_attribute_group_rest_attribute_group_widget($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["content"] = $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        // line 9
        echo "    ";
        if ((twig_length_filter($this->env, twig_trim_filter(($context["content"] ?? null))) > 0)) {
            // line 10
            echo "    <section ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " class=\"product-view__attribute-box\">
        ";
            // line 11
            echo ($context["content"] ?? null);
            echo "
    </section>
    ";
        }
    }

    // line 16
    public function block__line_item_form_shopping_lists_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " shopping-lists__wrapper form__col "));
        // line 20
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 21
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 25
    public function block_attribute_label_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if ((twig_first($this->env, ($context["label"] ?? null)) != "_")) {
            // line 27
            echo "        <h2 class=\"product-view__attribute-box-title\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</h2>
    ";
        }
    }

    // line 31
    public function block__product_main_container_widget($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__product-main-container "));
        // line 35
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 36
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 40
    public function block__product_aside_container_widget($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__product-aside-container "));
        // line 44
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 45
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/list:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 45,  147 => 44,  144 => 41,  141 => 40,  134 => 36,  129 => 35,  126 => 32,  123 => 31,  115 => 27,  112 => 26,  109 => 25,  102 => 21,  97 => 20,  94 => 17,  91 => 16,  83 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  62 => 3,  57 => 2,  54 => 1,  50 => 40,  47 => 39,  45 => 31,  42 => 30,  40 => 25,  37 => 24,  35 => 16,  32 => 15,  30 => 7,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/list:layout.html.twig", "");
    }
}
