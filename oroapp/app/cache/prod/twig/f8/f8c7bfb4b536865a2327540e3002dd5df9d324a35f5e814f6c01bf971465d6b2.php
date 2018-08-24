<?php

/* OroDataAuditBundle:Audit/widget:history.html.twig */
class __TwigTemplate_1be3a24fcb95aa75fe2feb5c15847b8786c1183ac35cc5b7fb9c2f702bdb6308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroDataAuditBundle:Audit/widget:history.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $context["fieldName"] = ((array_key_exists("fieldName", $context)) ? (($context["fieldName"] ?? null)) : (""));
        // line 5
        echo "    ";
        $context["scope"] = ((($context["entityClass"] ?? null) . ($context["entityId"] ?? null)) . $this->getAttribute(twig_date_converter($this->env), "timestamp", array()));
        // line 6
        echo "
    <div class=\"container-fluid\">
        ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </div>
</div>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "            ";
        // line 10
        echo "            ";
        echo $context["dataGrid"]->getrenderGrid($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName(        // line 11
($context["gridName"] ?? null), ($context["scope"] ?? null)), array("object_class" =>         // line 12
($context["entityClass"] ?? null), "object_id" => ($context["entityId"] ?? null), "field_name" => ($context["fieldName"] ?? null)));
        // line 13
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:Audit/widget:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  51 => 12,  50 => 11,  48 => 10,  46 => 9,  43 => 8,  37 => 15,  35 => 8,  31 => 6,  28 => 5,  26 => 4,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataAuditBundle:Audit/widget:history.html.twig", "");
    }
}
