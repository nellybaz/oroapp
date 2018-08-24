<?php

/* OroUIBundle:Default:user_dots_menu.html.twig */
class __TwigTemplate_773fe1e8faa5a6ae3fe7746b0e1c9561cada65c243673c8c5a63429817fc7afa extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("dots_menu", $context)) ? (_twig_default_filter(($context["dots_menu"] ?? null), "dots_menu")) : ("dots_menu")), array());
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:user_dots_menu.html.twig";
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
        return new Twig_Source("", "OroUIBundle:Default:user_dots_menu.html.twig", "");
    }
}
