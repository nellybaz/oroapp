<?php

/* OroTranslationBundle:Translation/Datagrid:current.html.twig */
class __TwigTemplate_42525ec29257825fc8dce92d218f071be7c28bec75018558c683f69e8ea79291 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "key"), "method"), array(), $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "domain"), "method"), $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "code"), "method")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Translation/Datagrid:current.html.twig";
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
        return new Twig_Source("", "OroTranslationBundle:Translation/Datagrid:current.html.twig", "");
    }
}
