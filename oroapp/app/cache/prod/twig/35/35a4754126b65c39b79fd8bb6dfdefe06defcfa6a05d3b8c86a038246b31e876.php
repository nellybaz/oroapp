<?php

/* OroCatalogBundle:Product:category_view.html.twig */
class __TwigTemplate_1d135411aaf840527a2934de59d200ab8defe7e88b971f20ced451ca0894e84e extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCatalogBundle:Product:category_view.html.twig", 1);
        // line 2
        $context["categoryTitle"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->env->getExtension('Oro\Bundle\CatalogBundle\Twig\CategoryExtension')->getProductCategoryTitle(($context["entity"] ?? null)));
        // line 4
        if ((($context["entity"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)))) {
            // line 5
            $context["categoryFullPath"] = $this->env->getExtension('Oro\Bundle\CatalogBundle\Twig\CategoryExtension')->getProductCategoryPath(($context["entity"] ?? null));
            // line 6
            echo "    ";
            $context["category"] = $context["UI"]->getrenderUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_catalog_category_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), ($context["categoryTitle"] ?? null), null, ($context["categoryFullPath"] ?? null));
        } else {
            // line 8
            $context["category"] = ($context["categoryTitle"] ?? null);
        }
        // line 10
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.entity_label"), ($context["category"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Product:category_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  31 => 8,  27 => 6,  25 => 5,  23 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Product:category_view.html.twig", "");
    }
}
