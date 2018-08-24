<?php

/* OroAnalyticsBundle::label.html.twig */
class __TwigTemplate_c8edeee4ea2b4792468f259236b64452f26f10f4f4451cb40aa7eb8c97abf16e extends Twig_Template
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
        if (((((((array_key_exists("entity", $context) && $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "dataChannel", array(), "any", false, true), "data", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(        // line 2
($context["entity"] ?? null), "dataChannel", array(), "any", false, true), "data", array(), "any", false, true), "rfm_enabled", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "dataChannel", array()), "data", array()), "rfm_enabled", array())) && $this->getAttribute(        // line 3
($context["entity"] ?? null), "recency", array(), "any", true, true)) && $this->getAttribute(($context["entity"] ?? null), "frequency", array(), "any", true, true)) && $this->getAttribute(($context["entity"] ?? null), "monetary", array(), "any", true, true))) {
            // line 5
            echo "    ";
            if (array_key_exists("vertical", $context)) {
                echo "<div class=\"rfm-analytics-label-wrapper\">";
            }
            // line 6
            echo "        <div class=\"pull-right label label-warning rfm-analytics-label";
            if (array_key_exists("vertical", $context)) {
                echo " rfm-analytics-label-vertical";
            }
            echo "\">
            ";
            // line 7
            $context["el"] = ((array_key_exists("vertical", $context)) ? ("p") : ("span"));
            // line 8
            echo "            <";
            echo twig_escape_filter($this->env, ($context["el"] ?? null), "html", null, true);
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.recency.title"), "html", null, true);
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.recency.label"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["entity"] ?? null), "recency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "recency", array()), "-")) : ("-")), "html", null, true);
            echo "
            </";
            // line 10
            echo twig_escape_filter($this->env, ($context["el"] ?? null), "html", null, true);
            echo ">
            <";
            // line 11
            echo twig_escape_filter($this->env, ($context["el"] ?? null), "html", null, true);
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.frequency.title"), "html", null, true);
            echo "\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.frequency.label"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["entity"] ?? null), "frequency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "frequency", array()), "-")) : ("-")), "html", null, true);
            echo "
            </";
            // line 13
            echo twig_escape_filter($this->env, ($context["el"] ?? null), "html", null, true);
            echo ">
            <";
            // line 14
            echo twig_escape_filter($this->env, ($context["el"] ?? null), "html", null, true);
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.monetary.title"), "html", null, true);
            echo "\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.monetary.label"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["entity"] ?? null), "monetary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "monetary", array()), "-")) : ("-")), "html", null, true);
            echo "
            </";
            // line 16
            echo twig_escape_filter($this->env, ($context["el"] ?? null), "html", null, true);
            echo ">
        </div>
        <div class=\"clearfix\"></div>
    ";
            // line 19
            if (array_key_exists("vertical", $context)) {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroAnalyticsBundle::label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  82 => 16,  76 => 15,  70 => 14,  66 => 13,  60 => 12,  54 => 11,  50 => 10,  44 => 9,  37 => 8,  35 => 7,  28 => 6,  23 => 5,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAnalyticsBundle::label.html.twig", "");
    }
}
