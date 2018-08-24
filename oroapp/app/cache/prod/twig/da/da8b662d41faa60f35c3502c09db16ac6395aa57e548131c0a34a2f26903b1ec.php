<?php

/* OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_password_reset:customer_user_reset_password_form.html.twig */
class __TwigTemplate_893371164c3bc5f3429724be7c2da353c3e51fe30c03d4ed6ecf895f33b5eba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_reset_password_page_widget' => array($this, 'block__reset_password_page_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_reset_password_page_widget', $context, $blocks);
    }

    public function block__reset_password_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " reset-password-form--size-m"));
        // line 5
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_password_reset:customer_user_reset_password_form.html.twig";
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
        return new Twig_Source("", "OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_password_reset:customer_user_reset_password_form.html.twig", "");
    }
}
