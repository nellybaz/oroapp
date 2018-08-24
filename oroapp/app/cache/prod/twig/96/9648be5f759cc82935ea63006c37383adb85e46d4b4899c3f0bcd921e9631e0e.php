<?php

/* OroTranslationBundle:Translation/Datagrid:englishTranslation.html.twig */
class __TwigTemplate_7088f34f60ed87c24e06a0ab9aa3c7fb18c86754e4828f00b830d54cc2a2663b extends Twig_Template
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
        $context["originalValue"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "englishValue"), "method");
        // line 2
        if ((null === ($context["originalValue"] ?? null))) {
            // line 3
            echo "    <span class=\"no-english-translation\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "</span>
";
        } else {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, ($context["originalValue"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Translation/Datagrid:englishTranslation.html.twig";
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
        return new Twig_Source("", "OroTranslationBundle:Translation/Datagrid:englishTranslation.html.twig", "");
    }
}
