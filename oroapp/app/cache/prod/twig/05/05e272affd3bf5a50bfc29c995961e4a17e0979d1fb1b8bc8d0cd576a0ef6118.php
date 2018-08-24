<?php

/* OroInventoryBundle:Product:upcoming_edit.html.twig */
class __TwigTemplate_6b52092c28d2e3c1e6ff2a26e7a19029263a5c7203504d379a08844095465dcb extends Twig_Template
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
        echo "<div
    data-page-component-module=\"oroui/js/app/components/view-component\"
    data-page-component-options=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroentity/js/app/views/form-hide-related-field", "trackedFields" => "oro_product[isUpcoming]", "hideField" => "oro_product[availabilityDate]")), "html", null, true);
        // line 7
        echo "\"
>
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "isUpcoming", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "availabilityDate", array()), 'row');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:upcoming_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  29 => 9,  25 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:Product:upcoming_edit.html.twig", "");
    }
}
