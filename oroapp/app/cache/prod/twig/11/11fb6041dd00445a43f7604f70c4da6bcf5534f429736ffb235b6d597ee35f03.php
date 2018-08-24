<?php

/* OroCommerceMenuBundle:menuUpdate/widget:contextIndex.html.twig */
class __TwigTemplate_a506d81d1722a59fb0589e8aa867f6c1a8dfdae825abf5dc28f9a5079f19ad35 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCommerceMenuBundle:menuUpdate/widget:contextIndex.html.twig", 1);
        // line 2
        $context["params"] = array("viewLinkRoute" => ($context["gridViewLinkRoute"] ?? null), "viewLinkParams" => array("context" => ($context["context"] ?? null)));
        // line 3
        $context["gridName"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName(($context["gridName"] ?? null), twig_random($this->env));
        // line 4
        echo "
<div class=\"widget-content\">
    ";
        // line 6
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["params"] ?? null), array("enableFullScreenLayout" => true, "enableViews" => true, "showViewsInNavbar" => true));
        // line 10
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:menuUpdate/widget:contextIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:menuUpdate/widget:contextIndex.html.twig", "");
    }
}
