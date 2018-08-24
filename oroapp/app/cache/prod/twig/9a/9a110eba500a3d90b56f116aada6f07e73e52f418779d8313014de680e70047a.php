<?php

/* OroInventoryBundle:Product:inventoryThresholdFormWidget.html.twig */
class __TwigTemplate_9352051e7bcfd07d5fd946b2ea52347a72e75b3f628c82b6b804e9553f51a24e extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "inventoryThreshold", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:inventoryThresholdFormWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:Product:inventoryThresholdFormWidget.html.twig", "");
    }
}
