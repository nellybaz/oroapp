<?php

/* OroOrderBundle:Order/Datagrid:productQtySold.html.twig */
class __TwigTemplate_11aa3f82ea8cddcc0dca4a63c9690da92b4b977dbd66f0da9dacdc3b85839558 extends Twig_Template
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
        $context["qtySold"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "qtySold"), "method");
        // line 2
        $context["unitCode"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "unitCode"), "method");
        // line 3
        if (($context["qtySold"] ?? null)) {
            // line 4
            echo twig_escape_filter($this->env, ($context["qtySold"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format(($context["unitCode"] ?? null), false, (($context["qtySold"] ?? null) > 1))), "html", null, true);
        } else {
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:productQtySold.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:productQtySold.html.twig", "");
    }
}
