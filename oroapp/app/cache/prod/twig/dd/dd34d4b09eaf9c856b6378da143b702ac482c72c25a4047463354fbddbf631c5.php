<?php

/* OroDataGridBundle:Extension/Formatter/Property:linkProperty.html.twig */
class __TwigTemplate_de8fbb7db258032fbb5f50db3ca0512b9fcc3867ec3e2b0907a5a74aa69708e5 extends Twig_Template
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
        if ( !twig_test_empty(($context["url"] ?? null))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 3
            echo twig_escape_filter($this->env, ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.grid.open_link"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.grid.open_link"))), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:Extension/Formatter/Property:linkProperty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle:Extension/Formatter/Property:linkProperty.html.twig", "");
    }
}
