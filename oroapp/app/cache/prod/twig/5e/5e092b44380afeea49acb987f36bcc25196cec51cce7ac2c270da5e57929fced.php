<?php

/* OroMarketingActivityBundle:MarketingActivity:marketingActivitiesSection.html.twig */
class __TwigTemplate_0cbaa1b8817ed513edfc70d2a4a3168fb1744b5b079f4a591f6eafec1261be48 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMarketingActivityBundle:MarketingActivity:marketingActivitiesSection.html.twig", 1);
        // line 2
        ob_start();
        // line 3
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_activity_widget_marketing_activities", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 6
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 7
($context["entity"] ?? null), "id", array()))), "title" => "", "alias" => "marketing-activities-widget", "cssClass" => "list-widget activity-list-widget marketing-activities-list-widget standard-action-buttons"));
        // line 12
        echo "
";
        $context["widgetContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo $context["UI"]->getscrollSubblock(null, array(0 => ($context["widgetContent"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMarketingActivityBundle:MarketingActivity:marketingActivitiesSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  28 => 12,  26 => 7,  25 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingActivityBundle:MarketingActivity:marketingActivitiesSection.html.twig", "");
    }
}
