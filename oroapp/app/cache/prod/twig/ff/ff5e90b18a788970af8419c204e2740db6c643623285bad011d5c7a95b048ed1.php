<?php

/* OroMagentoBundle:Customer:customerStats.html.twig */
class __TwigTemplate_9e49c03f94730c27951046df58db166695cdfb43e07bd56d8567fe6fae5fd1fe extends Twig_Template
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
        echo "<li class=\"magento-customer-info\">
    <div class=\"pull-left label label-info orocrm-channel-lifetime-value-label\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.lifetime.label"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "lifetime", array()));
        echo "
    </div>
    ";
        // line 5
        $this->loadTemplate("OroAnalyticsBundle::label.html.twig", "OroMagentoBundle:Customer:customerStats.html.twig", 5)->display($context);
        // line 6
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer:customerStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer:customerStats.html.twig", "");
    }
}
