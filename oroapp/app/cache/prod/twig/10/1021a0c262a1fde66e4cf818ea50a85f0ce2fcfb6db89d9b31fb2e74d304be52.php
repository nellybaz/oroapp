<?php

/* OroCustomerBundle:layouts/blank/imports/oro_customer_user_form:form.html.twig */
class __TwigTemplate_0e5b1369030ce178114b7cb9a9b96eea20e84bde6bb04e2ef223afc6f357c463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_customer_frontend_owner_select_widget' => array($this, 'block_oro_customer_frontend_owner_select_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_customer_frontend_owner_select_widget', $context, $blocks);
    }

    public function block_oro_customer_frontend_owner_select_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/imports/oro_customer_user_form:form.html.twig";
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
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_form:form.html.twig", "");
    }
}
