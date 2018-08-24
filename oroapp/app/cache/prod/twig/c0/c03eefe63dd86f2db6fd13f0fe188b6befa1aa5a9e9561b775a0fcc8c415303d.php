<?php

/* OroVisibilityBundle:Product:customer_product_visibility_edit.html.twig */
class __TwigTemplate_84fd71cbf374349d19bd7b3c270ac43daf9f1f4014430b8f154cac65b82685c1 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroVisibilityBundle:Product:customer_product_visibility_edit.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "visibility", array()), "all", array()), 'row');
        echo "

";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "visibility", array()), "customerGroup", array()), 'row', array("id" => "customergroup-product-visibility-changeset"));
        echo "
";
        // line 6
        echo $context["dataGrid"]->getrenderGrid("customer-group-product-visibility-grid", array("target_entity_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "

";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "visibility", array()), "customer", array()), 'row', array("id" => "customer-product-visibility-changeset"));
        echo "
";
        // line 9
        echo $context["dataGrid"]->getrenderGrid("customer-product-visibility-grid", array("target_entity_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroVisibilityBundle:Product:customer_product_visibility_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 8,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroVisibilityBundle:Product:customer_product_visibility_edit.html.twig", "");
    }
}
