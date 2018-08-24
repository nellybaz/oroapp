<?php

/* OroActionBundle:Widget:viewNavButtons.html.twig */
class __TwigTemplate_d130312d17689a70adca4d1f8f99afc88b666e5c4f1daeea3e5ffe8f46a96627 extends Twig_Template
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
        $context["params"] = twig_array_merge($this->env->getExtension('Oro\Bundle\ActionBundle\Twig\OperationExtension')->getActionParameters($context), array("group" => "view_navButtons"));
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("OroActionBundle:Widget:_widget.html.twig", "OroActionBundle:Widget:viewNavButtons.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Widget:viewNavButtons.html.twig";
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
        return new Twig_Source("", "OroActionBundle:Widget:viewNavButtons.html.twig", "");
    }
}
