<?php

/* OroWorkflowBundle:Widget/widget:transitionComplete.html.twig */
class __TwigTemplate_cf41fc79352730fb0837bcdf057687f02acff85bc7746902761eb0063eed20a0 extends Twig_Template
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
        if (($context["transitionSuccess"] ?? null)) {
            // line 2
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("trigger" => array(0 => array("eventBroker" => "widget", "name" => "transitionSuccess", "args" => array(0 =>             // line 7
($context["response"] ?? null))))));
        } else {
            // line 12
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("trigger" => array(0 => array("eventBroker" => "widget", "name" => "transitionFailure", "args" => array(0 => array("status" =>             // line 18
($context["responseCode"] ?? null), "message" =>             // line 19
($context["responseMessage"] ?? null)))))));
        }
        // line 25
        echo "
";
        // line 26
        echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget/widget:transitionComplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 26,  32 => 25,  29 => 19,  28 => 18,  26 => 12,  23 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget/widget:transitionComplete.html.twig", "");
    }
}
