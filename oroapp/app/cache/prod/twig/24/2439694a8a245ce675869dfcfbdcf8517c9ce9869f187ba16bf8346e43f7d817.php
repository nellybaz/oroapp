<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.html.twig */
class __TwigTemplate_3a4b21ffeb48f368d3a69ca208f7409428c69890569667c9529f2339909260cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_category_picture_widget' => array($this, 'block__category_picture_widget'),
            '_breadcrumbs_widget' => array($this, 'block__breadcrumbs_widget'),
            '_breadcrumbs_filters_widget' => array($this, 'block__breadcrumbs_filters_widget'),
            '_category_title_widget' => array($this, 'block__category_title_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_category_picture_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('_breadcrumbs_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_breadcrumbs_filters_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('_category_title_widget', $context, $blocks);
    }

    // line 1
    public function block__category_picture_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.html.twig", 2);
        // line 3
        echo "
    ";
        // line 4
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " category-picture__image", "alt" => $this->getAttribute(        // line 6
($context["category"] ?? null), "defaultTitle", array()), "itemprop" => "image"));
        // line 9
        echo "
    ";
        // line 10
        if ($this->getAttribute(($context["category"] ?? null), "largeImage", array())) {
            // line 11
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("src" =>             // line 12
$context["Image"]->geturl($this->getAttribute(($context["category"] ?? null), "largeImage", array()), "product_original")));
            // line 14
            echo "
        <div class=\"category-picture\" itemprop=\"hasOfferCatalog\" itemscope itemtype=\"http://schema.org/OfferCatalog\">
            <div itemprop=\"name\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "defaultTitle", array()), "html", null, true);
            echo "\">
                <img ";
            // line 17
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            </div>
        </div>
    ";
        }
    }

    // line 23
    public function block__breadcrumbs_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~data-page-component-module" => " oroproduct/js/app/components/breadcrumbs-navigation-block"));
        // line 27
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 30
    public function block__breadcrumbs_filters_widget($context, array $blocks = array())
    {
        // line 31
        echo "    <span class=\"filters-info\"></span>
";
    }

    // line 34
    public function block__category_title_widget($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " category-title"));
        // line 38
        echo "
    <h1 ";
        // line 39
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 40
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </h1>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  110 => 39,  107 => 38,  104 => 35,  101 => 34,  96 => 31,  93 => 30,  86 => 27,  83 => 24,  80 => 23,  71 => 17,  67 => 16,  63 => 14,  61 => 12,  59 => 11,  57 => 10,  54 => 9,  52 => 6,  51 => 4,  48 => 3,  45 => 2,  42 => 1,  38 => 34,  35 => 33,  33 => 30,  30 => 29,  28 => 23,  25 => 22,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.html.twig");
    }
}
