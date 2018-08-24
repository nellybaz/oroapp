<?php

/* OroCampaignBundle:CampaignEvent/widget:plot.html.twig */
class __TwigTemplate_cd6956676c67b38e9a38a052e4475f7661cb5d23e07d024c87daa331f80662dc extends Twig_Template
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
        echo "<div class=\"widget-content\">
    ";
        // line 2
        echo $this->getAttribute(($context["chartView"] ?? null), "render", array(), "method");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:CampaignEvent/widget:plot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:CampaignEvent/widget:plot.html.twig", "");
    }
}
