<?php

/* OroEmailBundle:Mailbox/Datagrid/Property:origin.html.twig */
class __TwigTemplate_531f7f32b263c0f2f33965e0fe0d39518749c79c06eb4457298f47a37dabf906 extends Twig_Template
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
        $context["origin"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "origin"), "method");
        // line 2
        if (( !$this->getAttribute(($context["origin"] ?? null), "active", array(), "any", true, true) ||  !$this->getAttribute(($context["origin"] ?? null), "active", array()))) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"), "html", null, true);
            echo "
";
        } else {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Mailbox/Datagrid/Property:origin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Mailbox/Datagrid/Property:origin.html.twig", "");
    }
}
