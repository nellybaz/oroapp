<?php

/* OroProductBundle:layouts/blank/imports/oro_product_variant_form:oro_product_variant_form.html.twig */
class __TwigTemplate_67f22ad437961d645fa9255b957a9b27d3af1d6ee2ecaf0e4926a42fce7b0cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_variant_form__variant_field_form_widget' => array($this, 'block___oro_product_variant_form__variant_field_form_widget'),
            '__oro_product_variant_form__variant_field_form_fields_widget' => array($this, 'block___oro_product_variant_form__variant_field_form_fields_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_variant_form__variant_field_form_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('__oro_product_variant_form__variant_field_form_fields_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_product_variant_form__variant_field_form_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroproduct/js/app/views/base-product-variants-view")));
        // line 8
        echo "
    <div ";
        // line 9
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 10
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 14
    public function block___oro_product_variant_form__variant_field_form_fields_widget($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 18
        $this->displayBlock("form_rows", $context, $blocks);
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/imports/oro_product_variant_form:oro_product_variant_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  58 => 18,  55 => 16,  53 => 15,  50 => 14,  43 => 10,  39 => 9,  36 => 8,  33 => 2,  30 => 1,  26 => 14,  23 => 13,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/imports/oro_product_variant_form:oro_product_variant_form.html.twig", "");
    }
}
