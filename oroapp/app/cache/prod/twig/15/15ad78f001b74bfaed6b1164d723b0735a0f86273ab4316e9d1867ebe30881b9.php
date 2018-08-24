<?php

/* OroCatalogBundle:layouts/blank/oro_frontend_root:default.html.twig */
class __TwigTemplate_b56becf7964c3c28ed07a0c9b59a2c4d9f48915636315dc73d0d0470e3ef830e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_featured_categories_container_widget' => array($this, 'block__featured_categories_container_widget'),
            '_featured_category_widget' => array($this, 'block__featured_category_widget'),
            '_featured_category_link_widget' => array($this, 'block__featured_category_link_widget'),
            '_featured_category_image_widget' => array($this, 'block__featured_category_image_widget'),
            '_featured_category_desc_widget' => array($this, 'block__featured_category_desc_widget'),
            '_featured_category_label_widget' => array($this, 'block__featured_category_label_widget'),
            '_featured_category_products_widget' => array($this, 'block__featured_category_products_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_featured_categories_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_featured_category_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('_featured_category_link_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_featured_category_image_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('_featured_category_desc_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('_featured_category_label_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('_featured_category_products_widget', $context, $blocks);
    }

    // line 1
    public function block__featured_categories_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " featured-categories"));
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
    public function block__featured_category_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " featured-category__item"));
        // line 15
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 16
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 20
    public function block__featured_category_link_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " featured-category"));
        // line 24
        echo "    <a ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "
        href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute(($context["category"] ?? null), "id", array()), "includeSubcategories" => true)), "html", null, true);
        echo "\">
        ";
        // line 26
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </a>
";
    }

    // line 30
    public function block__featured_category_image_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "OroCatalogBundle:layouts/blank/oro_frontend_root:default.html.twig", 31);
        // line 32
        echo "
    ";
        // line 33
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " featured-category__image", "alt" => $this->getAttribute(        // line 35
($context["category"] ?? null), "title", array())));
        // line 37
        echo "
    ";
        // line 38
        if ($this->getAttribute(($context["category"] ?? null), "small_image", array())) {
            // line 39
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("src" =>             // line 40
$context["Image"]->geturl($this->getAttribute(($context["category"] ?? null), "small_image", array()), "category_medium")));
            // line 42
            echo "    ";
        } else {
            // line 43
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("src" =>             // line 44
$context["Image"]->geturlFromString("/bundles/orocatalog/default/images/no_image_315x260.png", "category_medium")));
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    <img ";
        // line 48
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
";
    }

    // line 51
    public function block__featured_category_desc_widget($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " featured-category__desc"));
        // line 55
        echo "    <dl ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 56
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </dl>
";
    }

    // line 60
    public function block__featured_category_label_widget($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " featured-category__name"));
        // line 64
        echo "    <dt ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "title", array()), "html", null, true);
        echo "</dt>
";
    }

    // line 67
    public function block__featured_category_products_widget($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " featured-category__qty"));
        // line 71
        echo "    <dd ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.catalog.featured_categories.view.items.label", ($context["categoryProductsCount"] ?? null)), "html", null, true);
        echo "</dd>
";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:layouts/blank/oro_frontend_root:default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 71,  196 => 68,  193 => 67,  184 => 64,  181 => 61,  178 => 60,  171 => 56,  166 => 55,  163 => 52,  160 => 51,  154 => 48,  151 => 47,  148 => 46,  146 => 44,  144 => 43,  141 => 42,  139 => 40,  137 => 39,  135 => 38,  132 => 37,  130 => 35,  129 => 33,  126 => 32,  123 => 31,  120 => 30,  113 => 26,  109 => 25,  104 => 24,  101 => 21,  98 => 20,  91 => 16,  86 => 15,  83 => 12,  80 => 11,  73 => 7,  69 => 6,  66 => 5,  63 => 2,  60 => 1,  56 => 67,  53 => 66,  51 => 60,  48 => 59,  46 => 51,  43 => 50,  41 => 30,  38 => 29,  36 => 20,  33 => 19,  31 => 11,  28 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:layouts/blank/oro_frontend_root:default.html.twig", "");
    }
}
