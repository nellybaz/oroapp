<?php

/* OroMarketingCRMBridgeBundle:Customer:websiteActivity.html.twig */
class __TwigTemplate_e2c20727b67811dbf44554cc66731eb6d9b1f658d37a71287ef89b4992c4c4c3 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    <div class=\"scrollspy-nav-target\"></div>
    <div class=\"row-fluid row-fluid-divider\">
        ";
        // line 4
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_website_summary", $context)) ? (_twig_default_filter(($context["oro_website_summary"] ?? null), "oro_website_summary")) : ("oro_website_summary")), array("customers" => ($context["customers"] ?? null), "byChannel" => ($context["byChannel"] ?? null)));
        // line 5
        echo "    </div>
";
        $context["websiteActivityContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
";
        // line 8
        $context["customerIds"] = array();
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 10
            echo "    ";
            $context["customerIds"] = twig_array_merge(($context["customerIds"] ?? null), array(0 => $this->getAttribute($context["customer"], "id", array())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context["tabs"] = array(0 => array("alias" => "oro_magento_customer_website_metrics", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.summary.label"), "url" => "#", "content" =>         // line 19
($context["websiteActivityContent"] ?? null)), 1 => array("alias" => "oro_magento_customer_website_events", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.events.label"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_widget_tracking_events", array("customerIds" =>         // line 27
($context["customerIds"] ?? null)))));
        // line 31
        echo "
<div class=\"responsive-cell customer-without-border-tabs\">
    ";
        // line 33
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMarketingCRMBridgeBundle:Customer:websiteActivity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 33,  54 => 31,  52 => 27,  51 => 19,  50 => 13,  47 => 12,  40 => 10,  36 => 9,  34 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingCRMBridgeBundle:Customer:websiteActivity.html.twig", "");
    }
}
