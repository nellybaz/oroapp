<?php

/* OroMarketingActivityBundle:MarketingActivity:summary.html.twig */
class __TwigTemplate_04fe921b343c3073a4afc427ddfe2d8c99870ec97bc2a93a0f8b8ffd032d1c78 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMarketingActivityBundle:MarketingActivity:summary.html.twig", 1);
        // line 2
        echo "
<div class=\"row-fluid form-horizontal\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["summary"] ?? null), (twig_length_filter($this->env, ($context["summary"] ?? null)) / 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            echo "        <div class=\"responsive-block\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                // line 7
                echo "                ";
                echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("oro.marketingactivity.summary." . $context["key"]) . ".label")), ((array_key_exists("data", $context)) ? (_twig_default_filter($context["data"], "0")) : ("0")));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroMarketingActivityBundle:MarketingActivity:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  45 => 9,  36 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingActivityBundle:MarketingActivity:summary.html.twig", "");
    }
}
