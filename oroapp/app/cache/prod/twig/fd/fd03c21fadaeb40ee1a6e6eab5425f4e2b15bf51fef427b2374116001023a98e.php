<?php

/* OroActivityListBundle:Merge:value.html.twig */
class __TwigTemplate_481bec0c6a6b381684258a9b4238e2bcc4bae2c7da1d1759074fcc933e54ae03 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    <span class=\"empty\">-- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_merge.form.empty"), "html", null, true);
        echo " --</span>
";
        $context["empty_cell"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
";
        // line 5
        if (twig_length_filter($this->env, ($context["convertedValue"] ?? null))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, ($context["convertedValue"] ?? null), "html", null, true);
            echo "
    ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.activitylist.merge.items.label", ($context["convertedValue"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, ($context["empty_cell"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroActivityListBundle:Merge:value.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  37 => 7,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityListBundle:Merge:value.html.twig", "");
    }
}
