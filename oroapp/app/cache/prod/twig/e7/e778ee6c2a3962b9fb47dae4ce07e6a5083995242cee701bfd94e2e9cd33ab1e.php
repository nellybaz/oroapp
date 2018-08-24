<?php

/* OroCustomerBundle:layouts/default/page:top_nav_logged_dropdown.html.twig */
class __TwigTemplate_77c8cd15ddebef4825364bea45d0bd2ee7107d6c91892a4372788dd823dcc46d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_top_nav_controls_dropdown_container_widget' => array($this, 'block__top_nav_controls_dropdown_container_widget'),
            '_top_nav_customer_dropdown_sign_out_link_widget' => array($this, 'block__top_nav_customer_dropdown_sign_out_link_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_top_nav_controls_dropdown_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_top_nav_customer_dropdown_sign_out_link_widget', $context, $blocks);
    }

    // line 1
    public function block__top_nav_controls_dropdown_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " pull-left topbar-customer-menu dropdown"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 11
    public function block__top_nav_customer_dropdown_sign_out_link_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation__link sign-out-link", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 14
($context["route_name"] ?? null)), "data-dom-relocation-options" => array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-customer-menu-container]")))));
        // line 26
        echo "
    <a ";
        // line 27
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-sign-out\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? null)), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/page:top_nav_logged_dropdown.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 28,  60 => 27,  57 => 26,  55 => 14,  53 => 12,  50 => 11,  43 => 7,  39 => 6,  36 => 5,  33 => 2,  30 => 1,  26 => 11,  23 => 10,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/page:top_nav_logged_dropdown.html.twig", "");
    }
}
