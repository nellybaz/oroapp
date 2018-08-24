<?php

/* OroAddressBundle:Js:address.js.twig */
class __TwigTemplate_2866f0c48a92bba1723470232fa4ef39e36eb684651580bdf46bc1402d6f2673 extends Twig_Template
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
    <div class=\"actions\">
        ";
        // line 3
        if (( !array_key_exists("address_edit_acl_resource", $context) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(($context["address_edit_acl_resource"] ?? null)))) {
            // line 4
            echo "        <button class=\"btn item-edit-button\" title=\"<%= _.__('Edit') %>\"><i class=\"fa-pencil-square-o hide-text\"><%= _.__('Edit') %></i></button>
        <% if (!primary) { %><button class=\"btn item-remove-button\" title=\"<%= _.__('Remove') %>\"><i class=\"fa-trash-o hide-text\"><%= _.__('Remove') %></i></button><% } %>
        ";
        }
        // line 7
        echo "    </div>
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
        return "OroAddressBundle:Js:address.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAddressBundle:Js:address.js.twig", "");
    }
}
