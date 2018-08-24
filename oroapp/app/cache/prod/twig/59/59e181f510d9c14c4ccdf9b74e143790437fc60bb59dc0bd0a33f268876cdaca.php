<?php

/* OroCustomerBundle:layouts/default/imports/oro_customer_menu:oro_customer_menu.html.twig */
class __TwigTemplate_395d9cf957c51ad7724806ca219a0645b79857d730f2086d167544d0ed6e212c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_menu__container_widget' => array($this, 'block___oro_customer_menu__container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_menu__container_widget', $context, $blocks);
    }

    public function block___oro_customer_menu__container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu-container primary-menu-container__hidden-on-tablet"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <h3 class=\"primary-menu-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.menu.customer_user_profile.label"), "html", null, true);
        echo "</h3>
        <div class=\"primary-menu-container__hidden-on-tablet\" data-customer-menu-container>
            ";
        // line 8
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/imports/oro_customer_menu:oro_customer_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/imports/oro_customer_menu:oro_customer_menu.html.twig", "");
    }
}
