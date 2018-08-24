<?php

/* OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_register:customer_user_register_form.html.twig */
class __TwigTemplate_fc3f28260cf8102fab4e00f5e5ffc286fc42f92b9c884c1edb0d678507bee590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_registration_page_widget' => array($this, 'block__registration_page_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_registration_page_widget', $context, $blocks);
    }

    public function block__registration_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " register-form"));
        // line 5
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_register:customer_user_register_form.html.twig";
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
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/oro_customer_frontend_customer_user_register:customer_user_register_form.html.twig", "");
    }
}
