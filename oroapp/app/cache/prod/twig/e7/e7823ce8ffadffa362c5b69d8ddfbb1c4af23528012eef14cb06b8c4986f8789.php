<?php

/* OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_reset_check_email:customer_user_reset_password_success.html.twig */
class __TwigTemplate_d974954bc3556dfbc7327e019856fb3d7636594de382a88c68d145f9597d0a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_check_email_page_widget' => array($this, 'block__check_email_page_widget'),
            '_check_email_description_widget' => array($this, 'block__check_email_description_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_check_email_page_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('_check_email_description_widget', $context, $blocks);
    }

    // line 1
    public function block__check_email_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " check-email"));
        // line 5
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 8
    public function block__check_email_description_widget($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " notifications notifications--success"));
        // line 12
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_reset_check_email:customer_user_reset_password_success.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  46 => 9,  43 => 8,  36 => 5,  33 => 2,  30 => 1,  26 => 8,  23 => 7,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_reset_check_email:customer_user_reset_password_success.html.twig", "");
    }
}
