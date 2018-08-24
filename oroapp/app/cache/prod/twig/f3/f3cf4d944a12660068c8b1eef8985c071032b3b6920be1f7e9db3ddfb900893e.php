<?php

/* OroCatalogBundle:layouts/blank/imports/oro_allproducts_grid:grid.html.twig */
class __TwigTemplate_b5faa2bc2a191aa2a894e0886de891588c5fe4380b9a4ad89bee9d77439e5395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_grid__datagrid_widget' => array($this, 'block___oro_product_grid__datagrid_widget'),
            '_product_datagrid_category_product_list_widget' => array($this, 'block__product_datagrid_category_product_list_widget'),
            '_product_datagrid_category_title_widget' => array($this, 'block__product_datagrid_category_title_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_grid__datagrid_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_product_datagrid_category_product_list_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('_product_datagrid_category_title_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_product_grid__datagrid_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["compact_view"] = "";
        // line 3
        echo "    ";
        $context["buttonsId"] = "datagrid_row_product_line_item_form_buttons";
        // line 4
        echo "    ";
        $context["themeOptions"] = twig_array_merge((($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array()), array())) : (array())), array("headerHide" => true, "disableGridScrollbar" => true, "disableStickedScrollbar" => true, "currentRowView" =>         // line 8
($context["current_row_view"] ?? null), "bodyClassName" => ("grid-body product-list product-list--" .         // line 9
($context["current_row_view"] ?? null)), "rowClassName" => (("grid-row product-item product-item--" .         // line 10
($context["current_row_view"] ?? null)) . ($context["compact_view"] ?? null)), "rowAttributes" => array("data-layout-model" => "productModel"), "categoryTitleClassName" => "category-title category-title--divide-content"));
        // line 16
        echo "    ";
        $context["grid_render_parameters"] = twig_array_merge(($context["grid_render_parameters"] ?? null), array("themeOptions" => ($context["themeOptions"] ?? null)));
        // line 17
        echo "
    ";
        // line 18
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 21
    public function block__product_datagrid_category_product_list_widget($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["themeOptions"] ?? null), "bodyClassName", array()), "html", null, true);
        echo "\">
        ";
        // line 23
        $context["categoryId"] = 0;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datagridData"] ?? null), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["datagrid_row"]) {
            // line 25
            echo "            ";
            $context["child"] = $this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_row"), array(), "array");
            // line 26
            echo "
            ";
            // line 27
            $context["childAttr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute($this->getAttribute(($context["child"] ?? null), "vars", array()), "attr", array()), array("class" => $this->getAttribute(            // line 28
($context["themeOptions"] ?? null), "rowClassName", array())));
            // line 30
            echo "
            ";
            // line 31
            $context["childAttr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["childAttr"] ?? null), $this->getAttribute(($context["themeOptions"] ?? null), "rowAttributes", array()));
            // line 32
            echo "
            ";
            // line 33
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["child"] ?? null), array("datagrid_row" =>             // line 34
$context["datagrid_row"], "themeOptions" =>             // line 35
($context["themeOptions"] ?? null)));
            // line 37
            echo "
            ";
            // line 38
            if ((($context["categoryId"] ?? null) != $this->getAttribute($context["datagrid_row"], "categoryId", array()))) {
                // line 39
                echo "                ";
                echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_category_title"), array(), "array"), 'widget', array("datagrid_row" =>                 // line 40
$context["datagrid_row"], "themeOptions" =>                 // line 41
($context["themeOptions"] ?? null)));
                // line 42
                echo "
            ";
            }
            // line 44
            echo "            ";
            $context["categoryId"] = $this->getAttribute($context["datagrid_row"], "categoryId", array());
            // line 45
            echo "
            ";
            // line 46
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'widget', array("attr" => ($context["childAttr"] ?? null)));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datagrid_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>
";
    }

    // line 51
    public function block__product_datagrid_category_title_widget($context, array $blocks = array())
    {
        // line 52
        echo "    <h1 class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["themeOptions"] ?? null), "categoryTitleClassName", array()), "html", null, true);
        echo "\">
        ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datagrid_row"] ?? null), "categoryTitle", array()), "html", null, true);
        echo "
    </h1>
";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:layouts/blank/imports/oro_allproducts_grid:grid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 53,  135 => 52,  132 => 51,  127 => 48,  119 => 46,  116 => 45,  113 => 44,  109 => 42,  107 => 41,  106 => 40,  104 => 39,  102 => 38,  99 => 37,  97 => 35,  96 => 34,  95 => 33,  92 => 32,  90 => 31,  87 => 30,  85 => 28,  84 => 27,  81 => 26,  78 => 25,  73 => 24,  71 => 23,  66 => 22,  63 => 21,  57 => 18,  54 => 17,  51 => 16,  49 => 10,  48 => 9,  47 => 8,  45 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 51,  29 => 50,  27 => 21,  24 => 20,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:layouts/blank/imports/oro_allproducts_grid:grid.html.twig", "");
    }
}
