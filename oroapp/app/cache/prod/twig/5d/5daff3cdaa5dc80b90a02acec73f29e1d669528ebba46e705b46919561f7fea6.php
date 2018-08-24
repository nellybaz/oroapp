<?php

/* OroDataAuditBundle:Datagrid/Property:action.html.twig */
class __TwigTemplate_fbe4a6235f58be541ebf14b376084b57fec3e05ff04ac38ecbee381f4150f85f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.dataaudit.action." . ($context["value"] ?? null))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:Datagrid/Property:action.html.twig";
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
        return new Twig_Source("", "OroDataAuditBundle:Datagrid/Property:action.html.twig", "");
    }
}
