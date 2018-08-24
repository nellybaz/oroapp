<?php

/* OroMagentoBundle:Js:address.js.twig */
class __TwigTemplate_3e33fa6c96ff54716c7682bbf21dac86d298dfa87ba8a4f525df602377d8cdb2 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-addressbook-item\">
    <div class=\"title-item\"><%= _.escape(label) %></div>
    <ul class=\"inline\">
        <% if (primary) { %> <li><span class=\"label label-info\"><%= _.__('Primary') %></span></li> <% } %>
        <% _.each(types, function(type) { %>
        <li><span class=\"label\"><%= _.escape(type.label) %></span></li>
        <% }) %>
    </ul>
    <address>
        <%= _.escape(formatted_address).replace(/\\n/g, \"<br/>\") %>
    </address>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Js:address.js.twig";
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
        return new Twig_Source("", "OroMagentoBundle:Js:address.js.twig", "");
    }
}
