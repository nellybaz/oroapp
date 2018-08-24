<?php

/* OroDataAuditBundle:Datagrid/Property:data.html.twig */
class __TwigTemplate_ca3996a2b1bd26be46d130c5e7f97996ceff1da40d30561219d3d605da8dacbc extends Twig_Template
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
        $context["dataAudit"] = $this->loadTemplate("OroDataAuditBundle::macros.html.twig", "OroDataAuditBundle:Datagrid/Property:data.html.twig", 1);
        // line 2
        echo "
<ul>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["fieldKey"] => $context["fieldValue"]) {
            // line 5
            echo "    ";
            if (($context["fieldKey"] == "auditData")) {
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fieldValue"], "new", array()));
                foreach ($context['_seq'] as $context["collKey"] => $context["collValue"]) {
                    // line 7
                    echo "        <li>
            <b>";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getFieldConfigValue($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "objectClass"), "method"), $context["collKey"], "label"), $context["collKey"])), "html", null, true);
                    echo ":</b>
            ";
                    // line 9
                    if (twig_length_filter($this->env, $this->getAttribute($context["fieldValue"], "old", array()))) {
                        // line 10
                        echo "                <s>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fieldValue"], "old", array()), $context["collKey"], array(), "array"), "html", null, true);
                        echo "</s>
            ";
                    }
                    // line 12
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["collValue"], "html", null, true);
                    echo "
        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['collKey'], $context['collValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        <li>
            <b>";
                // line 17
                echo $context["dataAudit"]->getrenderFieldName($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "objectClass"), "method"), $context["fieldKey"], $context["fieldValue"]);
                echo "</b>
            <s>";
                // line 18
                echo $context["dataAudit"]->getrenderFieldValue($this->getAttribute($context["fieldValue"], "old", array()), $context["fieldValue"]);
                echo "</s>
            ";
                // line 19
                echo $context["dataAudit"]->getrenderFieldValue($this->getAttribute($context["fieldValue"], "new", array()), $context["fieldValue"]);
                echo "
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldKey'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:Datagrid/Property:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  76 => 19,  72 => 18,  68 => 17,  65 => 16,  62 => 15,  52 => 12,  46 => 10,  44 => 9,  40 => 8,  37 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataAuditBundle:Datagrid/Property:data.html.twig", "");
    }
}
