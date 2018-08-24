<?php

/* OroIntegrationBundle:Autocomplete/integration:result.html.twig */
class __TwigTemplate_2f61aaed7e8a197cc63971f5d8d9d827206620fee27e28d27e1ef22041352987 extends Twig_Template
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
<span class=\"aware-icon-block aware-icon-block-text\" <%= background %> ></span>
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
        return "OroIntegrationBundle:Autocomplete/integration:result.html.twig";
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
        return new Twig_Source("", "OroIntegrationBundle:Autocomplete/integration:result.html.twig", "");
    }
}
