<?php

/* OroProductBundle:Product:index.html.twig */
class __TwigTemplate_8fd1cb2a1add31ad133dc8d43c0eec412a3da830a533c01478710f53e01d41dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroProductBundle:Product:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'content_datagrid' => array($this, 'block_content_datagrid'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Product:index.html.twig", 2);
        // line 3
        $context["gridName"] = "products-grid";
        // line 4
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        $this->loadTemplate("OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig", "OroProductBundle:Product:index.html.twig", 8)->display(array_merge($context, array("alias" => "oro_product_index")));
        // line 11
        echo "
    ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_product_create")) {
            // line 13
            echo "        <div class=\"btn-group pull-right\">
            ";
            // line 14
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label")));
            // line 17
            echo "
        </div>
    ";
        }
    }

    // line 22
    public function block_content_datagrid($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["componentOptions"] = array("sidebarAlias" => "products-sidebar", "widgetAlias" => "products-grid-widget", "widgetRouteParameters" =>         // line 26
($context["widgetRouteParameters"] ?? null));
        // line 28
        echo "
    <div class=\"product-container\" data-role=\"grid-sidebar-component-container\">
        ";
        // line 30
        $this->loadTemplate("OroProductBundle:Product:index.html.twig", "OroProductBundle:Product:index.html.twig", 30, "225707415")->display($context);
        // line 47
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 47,  72 => 30,  68 => 28,  66 => 26,  64 => 23,  61 => 22,  54 => 17,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  42 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:index.html.twig", "");
    }
}


/* OroProductBundle:Product:index.html.twig */
class __TwigTemplate_8fd1cb2a1add31ad133dc8d43c0eec412a3da830a533c01478710f53e01d41dd_225707415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("OroUIBundle::content_sidebar.html.twig", "OroProductBundle:Product:index.html.twig", 30);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle::content_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_sidebar($context, array $blocks = array())
    {
        // line 32
        echo "                <div data-page-component-module=\"orodatagrid/js/app/components/grid-sidebar-component\"
                     data-page-component-options=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
        echo "\"
                >
                    ";
        // line 35
        $this->loadTemplate("@OroProduct/Product/Sidebar/sidebar.html.twig", "OroProductBundle:Product:index.html.twig", 35)->display($context);
        // line 36
        echo "                </div>
            ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "                ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_datagrid_widget", twig_array_merge(        // line 42
($context["widgetRouteParameters"] ?? null), array("route" => "oro_product_index"))), "alias" => "products-grid-widget"));
        // line 44
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 44,  157 => 42,  155 => 40,  152 => 39,  147 => 36,  145 => 35,  140 => 33,  137 => 32,  134 => 31,  116 => 30,  74 => 47,  72 => 30,  68 => 28,  66 => 26,  64 => 23,  61 => 22,  54 => 17,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  42 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:index.html.twig", "");
    }
}
