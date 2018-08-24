<?php

/* @OroUI/Default/logo.html.twig */
class __TwigTemplate_3fcd2fc4dc92aa7ea5779e8a7ebdce8530e8812ae823bc8f2848a4c950ed1a46 extends Twig_Template
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
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            // line 2
            echo "    <div id=\"organization-switcher\">";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("organization_selector", $context)) ? (_twig_default_filter(($context["organization_selector"] ?? null), "organization_selector")) : ("organization_selector")), array());
            echo "</div>
";
        } else {
            // line 4
            echo "    <span id=\"main-menu-toggle\">
        <i class=\"fa-bars\"></i>
    </span>
    <div id=\"organization-switcher\">";
            // line 7
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("organization_selector", $context)) ? (_twig_default_filter(($context["organization_selector"] ?? null), "organization_selector")) : ("organization_selector")), array());
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@OroUI/Default/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroUI/Default/logo.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/logo.html.twig");
    }
}
