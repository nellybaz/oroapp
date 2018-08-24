<?php

/* OroTranslationBundle:Language/Datagrid:translationStatus.html.twig */
class __TwigTemplate_10f325ad7c0457c4d86cb808154cc136dcb2041d451f54e2da3d21d8f7d29502 extends Twig_Template
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
        echo "<div class=\"translation-status\">
    ";
        // line 2
        if ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "translationAvailableInstall"), "method")) {
            // line 3
            echo "        <span class=\"status-available-install\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.translation.language.translation_status.install_available"), "html", null, true);
            echo "</span>
    ";
        } elseif ($this->getAttribute(        // line 4
($context["record"] ?? null), "getValue", array(0 => "translationAvailableUpdate"), "method")) {
            // line 5
            echo "        <span class=\"status-available-update\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.translation.language.translation_status.update_available"), "html", null, true);
            echo "</span>
    ";
        } elseif ($this->getAttribute(        // line 6
($context["record"] ?? null), "getValue", array(0 => "translationInstalled"), "method")) {
            // line 7
            echo "        <span class=\"status-up-to-date\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.translation.language.translation_status.up_to_date"), "html", null, true);
            echo "</span>
    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Language/Datagrid:translationStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  38 => 7,  36 => 6,  31 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTranslationBundle:Language/Datagrid:translationStatus.html.twig", "");
    }
}
