<?php

/* OroCustomThemeBundle:layouts/custom/imports/oro_customer_menu:oro_customer_menu.html.twig */
class __TwigTemplate_adb9930d7fd7be1763777bc14125cd5bdcd6ee8dc6608c4804b66528bc3de21d extends Twig_Template
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
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " sidebar__menu sidebar__menu--collapsible customer-menu"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"collapse-view expanded\" data-page-component-collapse=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("storageKey" => ($context["id"] ?? null))), "html", null, true);
        echo "\">
            <a href=\"#\" class=\"main-menu__link main-menu__link--is-trigger\" data-collapse-trigger>
                <span class=\"badge customer-menu__badge\">
                    <i class=\"fa-cogs\"></i>
                </span>
                <span class=\"collapse-view__trigger collapse-view__trigger--icon\">
                    <i class=\"collapse-view__trigger-icon fa-caret-right\" data-toggle=\"collapse\"></i>
                </span>
                <span class=\"collapse-view__text\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.menu.customer_user_profile.label"), "html", null, true);
        echo "</span>
            </a>
            <div class=\"primary-collapse-container\" data-collapse-container data-customer-menu-container>
                ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomThemeBundle:layouts/custom/imports/oro_customer_menu:oro_customer_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  45 => 14,  34 => 6,  29 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomThemeBundle:layouts/custom/imports/oro_customer_menu:oro_customer_menu.html.twig", "");
    }
}
