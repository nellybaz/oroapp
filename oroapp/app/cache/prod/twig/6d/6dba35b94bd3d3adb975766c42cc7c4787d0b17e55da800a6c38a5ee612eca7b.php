<?php

/* OroEntityExtendBundle:Datagrid/Property:multiEnum.html.twig */
class __TwigTemplate_84198ad9a3577c542f8b51d70fdab517a5fadefab9befa56ade45976767f0517 extends Twig_Template
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
            echo "<ul class=\"unstyled options\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Oro\Bundle\EntityExtendBundle\Twig\EnumExtension')->sortEnum(($context["value"] ?? null), ($context["entity_class"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 4
                echo "    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityExtendBundle\Twig\EnumExtension')->transEnum($context["id"], ($context["entity_class"] ?? null)), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:Datagrid/Property:multiEnum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityExtendBundle:Datagrid/Property:multiEnum.html.twig", "");
    }
}
