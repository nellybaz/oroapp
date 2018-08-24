<?php

/* OroTranslationBundle:Language/Datagrid:translationCompleteness.html.twig */
class __TwigTemplate_d1b1b042a6077feb591cd520c6fa971a98d5923fba59a72c9e84b282dd3484f8 extends Twig_Template
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
        $context["translationCompleteness"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "translationCompleteness"), "method");
        // line 2
        echo "
";
        // line 3
        if ( !(null === ($context["translationCompleteness"] ?? null))) {
            // line 4
            echo "    <div class=\"translation-completeness\">
        <div class=\"progress\">
            <div class=\"bar bar-success\" style=\"width: ";
            // line 6
            echo twig_escape_filter($this->env, (($context["translationCompleteness"] ?? null) * 100), "html", null, true);
            echo "%;\"></div>
        </div>
        <b>";
            // line 8
            echo twig_escape_filter($this->env, twig_round((($context["translationCompleteness"] ?? null) * 100), 0, "floor"), "html", null, true);
            echo "%</b>
    </div>
";
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Language/Datagrid:translationCompleteness.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  35 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTranslationBundle:Language/Datagrid:translationCompleteness.html.twig", "");
    }
}
