<?php

/* OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_role_update:form.html.twig */
class __TwigTemplate_d735c8289cc5f1b50a400eeec4fdc56e83e29e9b3c3c6502f5dff1c46366b4b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_oro_customer_frontend_customer_user_role_widget' => array($this, 'block__oro_customer_frontend_customer_user_role_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_oro_customer_frontend_customer_user_role_widget', $context, $blocks);
    }

    public function block__oro_customer_frontend_customer_user_role_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("enableConfirmation" => true));
        // line 5
        echo "    ";
        $this->displayBlock("oro_customer_frontend_customer_user_role_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_role_update:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_role_update:form.html.twig", "");
    }
}
