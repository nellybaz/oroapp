<?php

/* OroVisibilityBundle:ProductVisibility:button.html.twig */
class __TwigTemplate_88fabcda8f448e522a82a0847d9a4c41b8a0f7e9d2a44c7240e2bc3a9b16f41a extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroVisibilityBundle:ProductVisibility:button.html.twig", 1);
        // line 2
        echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_visibility_edit", array("id" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "id", array()))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.visibility.product.visibility.label"), "iCss" => "fa-eye"));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroVisibilityBundle:ProductVisibility:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroVisibilityBundle:ProductVisibility:button.html.twig", "");
    }
}
