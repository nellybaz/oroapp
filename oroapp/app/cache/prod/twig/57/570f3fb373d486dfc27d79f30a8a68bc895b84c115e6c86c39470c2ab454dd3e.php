<?php

/* OroIntegrationBundle:Autocomplete/integration:selection.html.twig */
class __TwigTemplate_83b6bc9ceb6deb29057e15c03ec9788132598fd5d0cbdfb761c551beb0cb5296 extends Twig_Template
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
        echo "<%
    var data = \$(element).data(),
        background;
    if (data.icon) {
        background = 'style=\"background: url(' + data.icon + ') no-repeat;\"';
    } else {
        background = 'style=\"display: none;\"';
    }
%>
<span class=\"aware-icon-block aware-icon-block-text aware-icon-block-selected\" <%= background %> ></span>
<span class=\"aware-icon-block-text\">
    <%= highlight(_.escape(text)) %>
    (<% if (data.status) { %>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.integration.integration.enabled.active.label"), "html", null, true);
        echo "<% } else { %>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.integration.integration.enabled.inactive.label"), "html", null, true);
        echo "<% } %>)
</span>
";
    }

    public function getTemplateName()
    {
        return "OroIntegrationBundle:Autocomplete/integration:selection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroIntegrationBundle:Autocomplete/integration:selection.html.twig", "");
    }
}
