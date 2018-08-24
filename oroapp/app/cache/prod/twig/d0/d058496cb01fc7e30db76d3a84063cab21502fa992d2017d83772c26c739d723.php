<?php

/* OroInventoryBundle:Product:decrementQuantityFormWidget.html.twig */
class __TwigTemplate_37d87daf0532c20b2aec27537f09d7f80d660fdea1cfb0799bbe44cc637b1ffc extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "decrementQuantity", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:decrementQuantityFormWidget.html.twig";
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
        return new Twig_Source("", "OroInventoryBundle:Product:decrementQuantityFormWidget.html.twig", "");
    }
}
