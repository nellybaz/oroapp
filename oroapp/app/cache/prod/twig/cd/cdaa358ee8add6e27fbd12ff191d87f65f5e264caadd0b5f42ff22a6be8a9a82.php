<?php

/* OroCustomerBundle:CustomerUserRole/Datagrid/Property:isRolePredifined.html.twig */
class __TwigTemplate_dc19419108be8a7b64e1dd3e1bbb6f33c183a238a8f04252dd1816611f5d3297 extends Twig_Template
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
        if ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "isRolePredefined"), "method")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.type.predefined.label"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.type.customizable.label"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUserRole/Datagrid/Property:isRolePredifined.html.twig";
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
        return new Twig_Source("", "OroCustomerBundle:CustomerUserRole/Datagrid/Property:isRolePredifined.html.twig", "");
    }
}
