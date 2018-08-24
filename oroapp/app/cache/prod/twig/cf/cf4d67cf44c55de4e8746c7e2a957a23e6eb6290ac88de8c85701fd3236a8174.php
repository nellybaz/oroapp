<?php

/* OroCustomerBundle:layouts/default/page:top_nav_anonymous.html.twig */
class __TwigTemplate_5365e140b58183d9367aa091416c5252a02e6d05151062f70e5623d6e97148bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_top_authorization_container_widget' => array($this, 'block__top_authorization_container_widget'),
            '_top_sign_in_link_widget' => array($this, 'block__top_sign_in_link_widget'),
            '_top_registration_link_widget' => array($this, 'block__top_registration_link_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_top_authorization_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_top_sign_in_link_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_top_registration_link_widget', $context, $blocks);
    }

    // line 1
    public function block__top_authorization_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " pull-left topbar-navigation__item"));
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
    public function block__top_sign_in_link_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation__link", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 14
($context["route_name"] ?? null))));
        // line 16
        echo "    <a ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-sign-in\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? null)), "html", null, true);
        echo "
    </a>
";
    }

    // line 21
    public function block__top_registration_link_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation__link", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 24
($context["route_name"] ?? null))));
        // line 26
        echo "    <span class=\"topbar-navigation__separator\">|</span>
    <a ";
        // line 27
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? null)), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/page:top_nav_anonymous.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  85 => 27,  82 => 26,  80 => 24,  78 => 22,  75 => 21,  68 => 17,  63 => 16,  61 => 14,  59 => 12,  56 => 11,  49 => 7,  45 => 6,  42 => 5,  39 => 2,  36 => 1,  32 => 21,  29 => 20,  27 => 11,  24 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/page:top_nav_anonymous.html.twig", "");
    }
}
