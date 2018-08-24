<?php

/* OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_reset_request:customer_user_forgot_password_form.html.twig */
class __TwigTemplate_88d23cf981d2c1c333d83a932d0bab78bdfe07616a4e08e44d67c392010d8d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_forgot_password_page_widget' => array($this, 'block__forgot_password_page_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_forgot_password_page_widget', $context, $blocks);
    }

    public function block__forgot_password_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " forgot-password-form"));
        // line 5
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_reset_request:customer_user_forgot_password_form.html.twig";
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
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_reset_request:customer_user_forgot_password_form.html.twig", "");
    }
}
