<?php

/* OroNavigationBundle:HashNav:hashNavAjax.html.twig */
class __TwigTemplate_5ed5255aa239d876971c76586141c22d0c05ee22f95cd1a35fb749e4c6203d1d extends Twig_Template
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
        ob_start();
        // line 2
        echo "    ";
        echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->getContent(((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), array())) : (array()))));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:HashNav:hashNavAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:HashNav:hashNavAjax.html.twig", "");
    }
}
