<?php

/* OroNavigationBundle:Menu:application_menu.html.twig */
class __TwigTemplate_ef56da5876b17712150161f874f6cbdd1163458d367ae992ddaacb76bc0c4b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile() || ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_ui.navbar_position") == "top"))) {
            // line 2
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", "OroNavigationBundle:Menu:application_menu.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:Menu:application_menu_desktop_sided.html.twig", "OroNavigationBundle:Menu:application_menu.html.twig", 4)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:application_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:application_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/application_menu.html.twig");
    }
}
