<?php

/* OroCatalogBundle:Form:fields.html.twig */
class __TwigTemplate_98989d91e8b4bff1339b2d4aef6527a7f0352c939c8fe659c917050445097563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_catalog_category_unit_precision_widget' => array($this, 'block_oro_catalog_category_unit_precision_widget'),
            'oro_catalog_category_page_variant_widget' => array($this, 'block_oro_catalog_category_page_variant_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_catalog_category_unit_precision_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('oro_catalog_category_page_variant_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_catalog_category_unit_precision_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"control-group\">
        <table
            class=\"category-precision-holder\"
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocatalog/js/app/views/category-unit-limitations-view")), "html", null, true);
        // line 8
        echo "\"
        >
            <tr>
                <td>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget', array("attr" => array("class" => "unit")));
        echo "</td>
                <td><div class=\"control-label\"><label>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.precision.label"), "html", null, true);
        echo "&nbsp;</label></div></td>
                <td>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "precision", array()), 'widget', array("attr" => array("class" => "precision")));
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'errors');
        echo "</td>
                <td>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "precision", array()), 'errors');
        echo "</td>
            </tr>
        </table>
    </div>
";
    }

    // line 23
    public function block_oro_catalog_category_page_variant_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "excludeSubcategories", array()), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categoryPageCategory", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  76 => 24,  73 => 23,  64 => 17,  60 => 16,  54 => 13,  50 => 12,  46 => 11,  41 => 8,  39 => 6,  33 => 2,  30 => 1,  26 => 23,  23 => 22,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/Form/fields.html.twig");
    }
}
