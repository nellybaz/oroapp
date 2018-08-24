<?php

/* OroDataAuditBundle:Datagrid/Property:new.html.twig */
class __TwigTemplate_a570bb84d88fce0bdd5bdc8cc0bf1ed4e79051e672cc0ded664a2708c242d4ee extends Twig_Template
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
        $context["dataAudit"] = $this->loadTemplate("OroDataAuditBundle::macros.html.twig", "OroDataAuditBundle:Datagrid/Property:new.html.twig", 1);
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
                if (twig_length_filter($this->env, $this->getAttribute($context["fieldValue"], "new", array()))) {
                    // line 7
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fieldValue"], "new", array()));
                    foreach ($context['_seq'] as $context["collKey"] => $context["collValue"]) {
                        // line 8
                        echo "            <li>
                <b>";
                        // line 9
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getFieldConfigValue($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "objectClass"), "method"), $context["collKey"], "label"), $context["collKey"])), "html", null, true);
                        echo ":</b>
                ";
                        // line 10
                        echo twig_escape_filter($this->env, $context["collValue"], "html", null, true);
                        echo "
            </li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['collKey'], $context['collValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "        ";
                }
                // line 14
                echo "    ";
            } else {
                // line 15
                echo "        <li>
            <b>";
                // line 16
                echo $context["dataAudit"]->getrenderFieldName($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "objectClass"), "method"), $context["fieldKey"], $context["fieldValue"]);
                echo "</b>
            ";
                // line 17
                echo $context["dataAudit"]->getrenderFieldValue($this->getAttribute($context["fieldValue"], "new", array()), $context["fieldValue"]);
                echo "
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldKey'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:Datagrid/Property:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  69 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  47 => 10,  43 => 9,  40 => 8,  35 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataAuditBundle:Datagrid/Property:new.html.twig", "");
    }
}
