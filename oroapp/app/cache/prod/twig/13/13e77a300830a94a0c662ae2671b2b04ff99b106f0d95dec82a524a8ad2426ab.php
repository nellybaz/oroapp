<?php

/* OroDashboardBundle:Dashboard:bigNumberSubwidget.html.twig */
class __TwigTemplate_2840284d48b47502256e1643d2695c16b3327d66c5b747ef171c15341fd1845e extends Twig_Template
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
        echo "<span class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? null), "label", array())), "html", null, true);
        echo "</span>
<h3 class=\"value\">";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "value", array());
        echo "</h3>
";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array(), "any", false, true), "deviation", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array(), "any", false, true), "previousRange", array(), "any", true, true))) {
            // line 4
            echo "<div class=\"deviation\">
    <span class=\"deviation ";
            // line 5
            if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array(), "any", false, true), "isPositive", array(), "any", true, true)) {
                if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "isPositive", array())) {
                    echo "positive";
                } else {
                    echo "negative";
                }
            }
            echo "\">
        ";
            // line 6
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "deviation", array()))) {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.widget.big_number.no_changes"), "html", null, true);
                echo "
        ";
            } else {
                // line 9
                echo "            ";
                echo $this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "deviation", array());
                echo "
        ";
            }
            // line 11
            echo "    </span>
</div>
<div class=\"deviation\">
    <span class=\"deviation\">
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.widget.big_number.compare_to.label"), "html", null, true);
            echo ":
    </span>
    ";
            // line 17
            $context["range"] = $this->env->getExtension('Oro\Bundle\DashboardBundle\Twig\DashboardExtension')->getViewValue($this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "previousRange", array()));
            // line 18
            echo "    <span class=\"date-range\" title=\"";
            echo twig_escape_filter($this->env, ($context["range"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["range"] ?? null), "html", null, true);
            echo "</span>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:bigNumberSubwidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  68 => 17,  63 => 15,  57 => 11,  51 => 9,  45 => 7,  43 => 6,  33 => 5,  30 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Dashboard:bigNumberSubwidget.html.twig", "");
    }
}
