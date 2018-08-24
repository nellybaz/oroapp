<?php

/* OroEntityExtendBundle:Datagrid/Property:enum.html.twig */
class __TwigTemplate_c0cb66831671b7224968c3b58699d0ded34edec65f34a0f771dd45d2b4dbdaac extends Twig_Template
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
        if ( !twig_test_empty(($context["value"] ?? null))) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityExtendBundle\Twig\EnumExtension')->transEnum(($context["value"] ?? null), ($context["entity_class"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:Datagrid/Property:enum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityExtendBundle:Datagrid/Property:enum.html.twig", "");
    }
}
