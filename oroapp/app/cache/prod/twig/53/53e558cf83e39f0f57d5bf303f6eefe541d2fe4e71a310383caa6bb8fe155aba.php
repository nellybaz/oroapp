<?php

/* OroEmailBundle:Email/Datagrid/Property:recipients.html.twig */
class __TwigTemplate_5e2f4443cc5c185e456b8f77ce3780886db50ab8de15785a7a7cc0939678d3aa extends Twig_Template
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
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Datagrid/Property:recipients.html.twig", 1);
        // line 2
        $context["recipients"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "recipients"), "method");
        // line 3
        if ((twig_length_filter($this->env, ($context["recipients"] ?? null)) > 0)) {
            // line 4
            echo "    ";
            echo $context["EA"]->getrecipient_email_addresses(($context["recipients"] ?? null), false, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:recipients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Datagrid/Property:recipients.html.twig", "");
    }
}
