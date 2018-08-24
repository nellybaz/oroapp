<?php

/* OroCustomerBundle:layouts/default/page:main_menu_logged.html.twig */
class __TwigTemplate_8cd99f5e36b218ea96e3c2c95ea3adf39393d61385357c3d02ae31150b6d4b10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_header_row_customer_widget' => array($this, 'block__header_row_customer_widget'),
            '_header_row_customer_container_widget' => array($this, 'block__header_row_customer_container_widget'),
            '_header_row_customer_trigger_widget' => array($this, 'block__header_row_customer_trigger_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_header_row_customer_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_header_row_customer_container_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_header_row_customer_trigger_widget', $context, $blocks);
    }

    // line 1
    public function block__header_row_customer_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"header-row__container hidden-on-desktop\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 7
    public function block__header_row_customer_container_widget($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"header-row__dropdown\">
        ";
        // line 9
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 13
    public function block__header_row_customer_trigger_widget($context, array $blocks = array())
    {
        // line 14
        echo "    <button class=\"header-row__trigger hidden-on-desktop\"
            data-page-component-module=\"oroui/js/app/components/viewport-component\"
            data-page-component-options=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("viewport" => array("maxScreenType" => "tablet"), "component" => "oroui/js/app/components/view-component", "view" => "orofrontend/blank/js/app/views/fullscreen-popup-view", "popupIcon" => "fa-user", "popupBadge" => true, "popupLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.menu.customer_user.label"), "contentElement" => "[data-customer-menu-container]", "contentAttributes" => array("class" => "fullscreen-mode"))), "html", null, true);
        // line 29
        echo "\"
    >
        <span class=\"nav-trigger__icon\">
            <span class=\"fa-user fa--no-offset\"></span>
        </span>
    </button>
    <div class=\"header-row__toggle\">
        ";
        // line 36
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/page:main_menu_logged.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  71 => 29,  69 => 16,  65 => 14,  62 => 13,  55 => 9,  52 => 8,  49 => 7,  42 => 3,  39 => 2,  36 => 1,  32 => 13,  29 => 12,  27 => 7,  24 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/page:main_menu_logged.html.twig", "");
    }
}
