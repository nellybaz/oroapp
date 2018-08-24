<?php

/* OroUIBundle:Default/navbar:sided.html.twig */
class __TwigTemplate_232aa93976fdf41865bbbe925fa51f6a493ad5a2868737511c6789d6abb67f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default/navbar:sided.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroUIBundle:Default/navbar:blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default/navbar:sided.html.twig"));

        // line 1
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_ui.navbar_position") == ($context["placement"] ?? $this->getContext($context, "placement"))))) {
            // line 2
            echo "    ";
            // line 3
            echo "
    ";
            // line 4
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:Default/navbar:sided.html.twig", 4);
            // line 5
            echo "
    <div class=\"main-menu-sided minimized\" ";
            // line 6
            echo $context["UI"]->getrenderPageComponentAttributes(array("jquery" => array("widgetModule" => "oroui/js/desktop/side-menu", "toggleSelector" => "#main-menu-toggler")));
            // line 11
            echo ">
        <div class=\"scroller\" id=\"main-menu\">
            ";
            // line 13
            $this->displayBlock("application_menu", $context, $blocks);
            echo "
        </div>
        <div id=\"main-menu-toggler\" class=\"menu-toggler\" ></div>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:sided.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 11,  46 => 6,  43 => 5,  41 => 4,  38 => 3,  36 => 2,  34 => 1,  14 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isDesktopVersion() and oro_config_value('oro_ui.navbar_position') == placement %}
    {% use 'OroUIBundle:Default/navbar:blocks.html.twig' %}

    {% import 'OroUIBundle::macros.html.twig' as UI %}

    <div class=\"main-menu-sided minimized\" {{ UI.renderPageComponentAttributes({
        jquery: {
            widgetModule: 'oroui/js/desktop/side-menu',
            toggleSelector: '#main-menu-toggler'
        }
    }) }}>
        <div class=\"scroller\" id=\"main-menu\">
            {{ block('application_menu') }}
        </div>
        <div id=\"main-menu-toggler\" class=\"menu-toggler\" ></div>
    </div>
{% endif %}
", "OroUIBundle:Default/navbar:sided.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/navbar/sided.html.twig");
    }
}
