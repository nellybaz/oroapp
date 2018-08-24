<?php

/* OroTaxBundle:layouts/blank/page:templates.html.twig */
class __TwigTemplate_2c4344fc1be3b222309e083296ebd00068400355be9e54c696c8a34543ead018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_order_taxes_template_widget' => array($this, 'block__order_taxes_template_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_order_taxes_template_widget', $context, $blocks);
    }

    public function block__order_taxes_template_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->loadTemplate("OroTaxBundle:Js:totals.html.twig", "OroTaxBundle:layouts/blank/page:templates.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:layouts/blank/page:templates.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:layouts/blank/page:templates.html.twig", "");
    }
}
