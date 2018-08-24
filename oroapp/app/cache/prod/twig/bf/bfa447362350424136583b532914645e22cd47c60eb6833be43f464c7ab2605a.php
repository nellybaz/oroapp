<?php

/* OroCatalogBundle:Product:sidebar.html.twig */
class __TwigTemplate_9c572295caa7b5e68cc88dd31a74ce579c3b930b4f40d296d9a75b976e2988d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCatalogBundle:Product:sidebar.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["treeOptions"] = array("data" => $this->env->getExtension('Oro\Bundle\CatalogBundle\Twig\CategoryExtension')->getCategoryList(), "defaultCategoryId" =>         // line 5
($context["defaultCategoryId"] ?? null), "nodeId" =>         // line 6
($context["defaultCategoryId"] ?? null), "view" => "orocatalog/js/app/views/product-sidebar-view");
        // line 9
        echo "
";
        // line 10
        $this->loadTemplate("OroCatalogBundle:Product:sidebar.html.twig", "OroCatalogBundle:Product:sidebar.html.twig", 10, "1346305143")->display(array_merge($context, array("data" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.entity_plural_label"), "treeOptions" =>         // line 13
($context["treeOptions"] ?? null)))));
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Product:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 13,  31 => 10,  28 => 9,  26 => 6,  25 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Product:sidebar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/Product/sidebar.html.twig");
    }
}


/* OroCatalogBundle:Product:sidebar.html.twig */
class __TwigTemplate_9c572295caa7b5e68cc88dd31a74ce579c3b930b4f40d296d9a75b976e2988d6_1346305143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("OroUIBundle::jstree.html.twig", "OroCatalogBundle:Product:sidebar.html.twig", 10);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle::jstree.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->displayBlock("search", $context, $blocks);
        echo "
        <div class=\"include-sub-categories-choice\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["includeSubcategoriesForm"] ?? null), 'row');
        echo "</div>
        <div class=\"include-not-categorized-product-choice\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["includeNotCategorizedProductForm"] ?? null), 'row');
        echo "</div>
        ";
        // line 20
        $this->displayBlock("tree", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Product:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  102 => 19,  98 => 18,  93 => 17,  90 => 16,  73 => 10,  32 => 13,  31 => 10,  28 => 9,  26 => 6,  25 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Product:sidebar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/Product/sidebar.html.twig");
    }
}
