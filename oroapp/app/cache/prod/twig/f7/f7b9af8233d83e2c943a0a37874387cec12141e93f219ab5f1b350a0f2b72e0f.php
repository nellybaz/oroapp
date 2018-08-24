<?php

/* OroEmailBundle:Email/Datagrid/Property:from.html.twig */
class __TwigTemplate_75797dfd4a3ae026af3bba4a355e7256baea00db6f82a5f44e6c48343c1e8d2b extends Twig_Template
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
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Datagrid/Property:from.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["isNew"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "is_new"), "method");
        // line 4
        $context["fromEmailAddressOwnerClass"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "fromEmailAddressOwnerClass"), "method");
        // line 5
        $context["fromEmailAddressOwnerId"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "fromEmailAddressOwnerId"), "method");
        // line 6
        echo "
";
        // line 7
        if (($context["isNew"] ?? null)) {
            echo "<strong>";
        }
        // line 8
        if (($context["fromEmailAddressOwnerId"] ?? null)) {
            // line 9
            echo $context["EA"]->getrenderEmailAddressLink(($context["value"] ?? null), ($context["fromEmailAddressOwnerClass"] ?? null), ($context["fromEmailAddressOwnerId"] ?? null));
        } else {
            // line 11
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        }
        // line 13
        if (($context["isNew"] ?? null)) {
            echo "</strong>";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:from.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  42 => 11,  39 => 9,  37 => 8,  33 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Datagrid/Property:from.html.twig", "");
    }
}
