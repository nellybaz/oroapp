<?php

/* OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/two-columns:layout.html.twig */
class __TwigTemplate_a15f989d59ec1baa6d3fb29f77f9233d29669dd5d239388b9a961b9d9fb0ebe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'attribute_group_rest_widget' => array($this, 'block_attribute_group_rest_widget'),
            'attribute_group_rest_attribute_group_widget' => array($this, 'block_attribute_group_rest_attribute_group_widget'),
            'attribute_label_widget' => array($this, 'block_attribute_label_widget'),
            '_product_view_related_items_container_widget' => array($this, 'block__product_view_related_items_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('attribute_group_rest_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('attribute_group_rest_attribute_group_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('attribute_label_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('_product_view_related_items_container_widget', $context, $blocks);
    }

    // line 1
    public function block_attribute_group_rest_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__attribute-box-wrapper"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 11
    public function block_attribute_group_rest_attribute_group_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["content"] = $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        // line 13
        echo "    ";
        if ((twig_length_filter($this->env, twig_trim_filter(($context["content"] ?? null))) > 0)) {
            // line 14
            echo "    <section ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " class=\"product-view__attribute-box\">
        ";
            // line 15
            echo ($context["content"] ?? null);
            echo "
    </section>
    ";
        }
    }

    // line 20
    public function block_attribute_label_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if ((twig_first($this->env, ($context["label"] ?? null)) != "_")) {
            // line 22
            echo "        <h2 class=\"product-view__attribute-box-title\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</h2>
    ";
        }
    }

    // line 26
    public function block__product_view_related_items_container_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view__attribute-box-wrapper"));
        // line 30
        echo "
    <div ";
        // line 31
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 32
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/two-columns:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  107 => 31,  104 => 30,  101 => 27,  98 => 26,  90 => 22,  87 => 21,  84 => 20,  76 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  55 => 7,  51 => 6,  48 => 5,  45 => 2,  42 => 1,  38 => 26,  35 => 25,  33 => 20,  30 => 19,  28 => 11,  25 => 10,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/two-columns:layout.html.twig", "");
    }
}
