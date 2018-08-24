<?php

/* OroCustomerBundle:DataAudit:change_history_link.html.twig */
class __TwigTemplate_cf3c2ef328f35722df1837b4271d74e83d2611f1580dc3d5ce7318d00c306cba extends Twig_Template
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
        $context["audit_path"] = "oro_customer_frontend_dataaudit_history";
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("OroDataAuditBundle::change_history_link.html.twig", "OroCustomerBundle:DataAudit:change_history_link.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:DataAudit:change_history_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:DataAudit:change_history_link.html.twig", "");
    }
}
