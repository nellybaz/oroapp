<?php

/* OroEmailBundle:Email/Datagrid/Property:date_long.html.twig */
class __TwigTemplate_6ed281be52f7caf2f1e2edd2c9d53ce9328db864c557f7e2c1f14192526c97cb extends Twig_Template
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
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Datagrid/Property:date_long.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["date"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "receivedAt"), "method");
        // line 4
        $context["isNew"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "is_new"), "method");
        // line 5
        echo "
<span class=\"nowrap\">";
        // line 7
        if (($context["isNew"] ?? null)) {
            echo "<strong>";
        }
        // line 8
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime(($context["date"] ?? null));
        // line 9
        if (($context["isNew"] ?? null)) {
            echo "</strong>";
        }
        // line 10
        echo "</span>

";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:date_long.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  37 => 9,  35 => 8,  31 => 7,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Datagrid/Property:date_long.html.twig", "");
    }
}
