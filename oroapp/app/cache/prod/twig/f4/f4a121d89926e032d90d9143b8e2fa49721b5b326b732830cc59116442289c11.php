<?php

/* OroNavigationBundle:Menu:dots_menu.html.twig */
class __TwigTemplate_41507134ef0a348b47e0f89ba12ee8c9e0cb58e6347f492013a9c2da7f3ae8f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:dots_tabs.html.twig", "OroNavigationBundle:Menu:dots_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:dots_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (((($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->getAttribute(($context["item"] ?? null), "hasChildren", array())) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 5
            echo "    <li class=\"dot-menu dropdown\">
        <a href=\"#\" class=\"oro-dropdown-toggle\">
            <i class=\"fa-bars\"></i>
        </a>
        <div class=\"dropdown-menu pull-right\" tabindex=\"0\">
            <div class=\"tabbable tabs-left\">
                ";
            // line 11
            $this->displayBlock("navbar_tabs", $context, $blocks);
            echo "
                ";
            // line 12
            $this->displayBlock("navbar_tabs_content", $context, $blocks);
            echo "
            </div>
        </div>
    </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dots_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  42 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:dots_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/dots_menu.html.twig");
    }
}
