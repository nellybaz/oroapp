<?php

/* OroCustomerBundle:Address/Frontend/Datagrid:types.html.twig */
class __TwigTemplate_f594be0d864be56b572768b2ae2d079a7402bd739d302dfd498ce3a09b5fb68a extends Twig_Template
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
        $context["types"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "types"), "method"), "toArray", array(), "method");
        // line 2
        $context["defaultTypes"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "defaults"), "method"), "toArray", array(), "method");
        // line 3
        echo "
";
        // line 4
        $context["labels"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 6
            echo "    ";
            $context["label"] = ((twig_in_filter($context["type"], ($context["defaultTypes"] ?? null))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer_typed_address_with_default_type.choice.default_text", array("%type_name%" => $this->getAttribute($context["type"], "label", array())))) : ($this->getAttribute($context["type"], "label", array())));
            // line 7
            echo "    ";
            $context["labels"] = twig_array_merge(($context["labels"] ?? null), array(0 => ($context["label"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, twig_join_filter(($context["labels"] ?? null), ", "), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Address/Frontend/Datagrid:types.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  42 => 9,  35 => 7,  32 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Address/Frontend/Datagrid:types.html.twig", "");
    }
}
