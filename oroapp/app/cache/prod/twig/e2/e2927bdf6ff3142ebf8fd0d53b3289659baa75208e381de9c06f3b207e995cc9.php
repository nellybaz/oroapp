<?php

/* OroCustomerBundle:CustomerUser/Frontend/Datagrid:email.html.twig */
class __TwigTemplate_772c90d7603dfb7a1efde8bf4c3f0046eeae85358ea92150a4fce19a0dcc86f0 extends Twig_Template
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
        echo "<span class=\"";
        if ( !$this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "status"), "method")) {
            echo " gray ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "email"), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUser/Frontend/Datagrid:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUser/Frontend/Datagrid:email.html.twig", "");
    }
}
