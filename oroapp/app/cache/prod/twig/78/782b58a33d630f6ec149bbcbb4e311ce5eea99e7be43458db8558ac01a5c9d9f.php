<?php

/* OroTranslationBundle:Operation:loadLanguage.html.twig */
class __TwigTemplate_e9f0cf08922b14e68299c095e93caa8b4bd01a81b840166bbc416f93ac92190d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroTranslationBundle:Operation:loadLanguage.html.twig", 1);
        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActionBundle:Operation:form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["translationCompleteness"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "stat", array(), "any", false, true), "translationStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "stat", array(), "any", false, true), "translationStatus", array()), null)) : (null));
        // line 5
        echo "
    <div>
        <div class=\"pull-left\">
            <i class=\"fa-info-circle tooltip-icon\"
               data-toggle=\"popover\"
               data-content=\"<div class='oro-popover-content'>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.translation.form.tooltip.translation_completeness"), "html", null, true);
        echo "</div>\"
            ></i>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.translation.action.translation_completeness.label"), "html", null, true);
        echo "&nbsp;</div>
        <div class=\"\">
            ";
        // line 14
        if ( !(null === ($context["translationCompleteness"] ?? null))) {
            // line 15
            echo "                <div class=\"oro-translation-languages\">
                    <div class=\"translation-completeness\">
                        <div class=\"progress\">
                            <div class=\"bar bar-success\" style=\"width: ";
            // line 18
            echo twig_escape_filter($this->env, ($context["translationCompleteness"] ?? null), "html", null, true);
            echo "%;\"></div>
                        </div>
                        <b>";
            // line 20
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent((($context["translationCompleteness"] ?? null) / 100));
            echo "</b>
                    </div>
                </div>
            ";
        } else {
            // line 24
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
            ";
        }
        // line 26
        echo "        </div>
    </div>
    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Operation:loadLanguage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  76 => 26,  70 => 24,  63 => 20,  58 => 18,  53 => 15,  51 => 14,  46 => 12,  41 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTranslationBundle:Operation:loadLanguage.html.twig", "");
    }
}
