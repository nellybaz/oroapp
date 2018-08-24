<?php

/* OroActivityContactBundle:ActivityContact:metrics.html.twig */
class __TwigTemplate_a4f10ea77dac5428ec48e82eca80329760df5dad207248625e79aee94b71e5b9 extends Twig_Template
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
        echo "<li>
";
        // line 2
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_activity_contact_metrics", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 4
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "alias" => "activity-contact-widget"));
        // line 6
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "OroActivityContactBundle:ActivityContact:metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  23 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityContactBundle:ActivityContact:metrics.html.twig", "");
    }
}
