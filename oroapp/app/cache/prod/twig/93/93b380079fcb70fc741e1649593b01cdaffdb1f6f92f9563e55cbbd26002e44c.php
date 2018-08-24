<?php

/* OroActionBundle:Widget:buttons.html.twig */
class __TwigTemplate_a764901a33e98067f3a153613d4d460ade46464767d8e36c95745c44a010fb7f extends Twig_Template
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
        $context["params"] = $this->env->getExtension('Oro\Bundle\ActionBundle\Twig\OperationExtension')->getActionParameters($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("OroActionBundle:Widget:_widget.html.twig", "OroActionBundle:Widget:buttons.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Widget:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Widget:buttons.html.twig", "");
    }
}
