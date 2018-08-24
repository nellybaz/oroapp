<?php

/* OroFormBundle:Autocomplete:icon/selection.html.twig */
class __TwigTemplate_3c72c9abcfbff62a763ebe93103408f964001b5ab0ce3536d52207d4f4f06745 extends Twig_Template
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
        echo "<% if (text.indexOf('fa') !== -1) { text = text.replace('fa-', '').replace(/-/g, ' '); } %>
<i class=\"<%= id %> hide-text\"></i>&nbsp;<%= text %>
";
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Autocomplete:icon/selection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFormBundle:Autocomplete:icon/selection.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/Autocomplete/icon/selection.html.twig");
    }
}
