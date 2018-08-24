<?php

/* OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_reset_check_email:customer_user_reset_password_success.html.twig */
class __TwigTemplate_7041d4a5b2a9f7e1347d0de1251b3fe04c75f87839aab8288c3cd6529b6acac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_check_email_page_widget' => array($this, 'block__check_email_page_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_check_email_page_widget', $context, $blocks);
        // line 7
        echo "
";
    }

    // line 1
    public function block__check_email_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " check-email--size-m"));
        // line 5
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_reset_check_email:customer_user_reset_password_success.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  30 => 2,  27 => 1,  22 => 7,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/oro_customer_frontend_customer_user_reset_check_email:customer_user_reset_password_success.html.twig", "");
    }
}
