<?php

/* OroSecurityBundle:Organization:current_name.html.twig */
class __TwigTemplate_01332410d3b3fc54ed148dcc41749b02cf7f7dc33dd09be0e28e4ff00385d0c7 extends Twig_Template
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
        $context["current_organization"] = $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->getCurrentOrganization();
        // line 2
        if (($context["current_organization"] ?? null)) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current_organization"] ?? null), "name", array()), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Organization:current_name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSecurityBundle:Organization:current_name.html.twig", "");
    }
}
