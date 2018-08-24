<?php

/* OroCustomerBundle:CustomerUser/Frontend/Datagrid:status.html.twig */
class __TwigTemplate_43445b7f8acb186fe13f29d103fbbbbb1672aa36327bcb722834ab7946bc9ded extends Twig_Template
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
        if ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "status"), "method")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.customer_user.status_active.label"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.customer_user.status_inactive.label"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUser/Frontend/Datagrid:status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUser/Frontend/Datagrid:status.html.twig", "");
    }
}
