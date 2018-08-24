<?php

/* OroCustomerBundle:Address/Js:address.js.twig */
class __TwigTemplate_2f5ce25e8760e9942671d1e78408021f6a3065754d1c9efb0a443dc5459f4ac9 extends Twig_Template
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
        if (( !$this->getAttribute($this->getAttribute(($context["options"] ?? null), "acl", array(), "any", false, true), "addressEdit", array(), "any", true, true) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($this->getAttribute(($context["options"] ?? null), "acl", array()), "addressEdit", array())))) {
            // line 4
            echo "            <button class=\"btn item-edit-button\" title=\"<%= _.__('oro.customer.address.edit') %>\"><i class=\"fa-pencil-square-o hide-text\"><%= _.__('oro.customer.address.edit') %></i></button>
        ";
        }
        // line 6
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute(($context["options"] ?? null), "acl", array(), "any", false, true), "addressRemove", array(), "any", true, true) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($this->getAttribute(($context["options"] ?? null), "acl", array()), "addressRemove", array())))) {
            // line 7
            echo "            <% if (!primary) { %><button class=\"btn item-remove-button\" title=\"<%= _.__('oro.customer.address.remove') %>\"><i class=\"fa-trash-o hide-text\"><%= _.__('oro.customer.address.remove') %></i></button><% } %>
        ";
        }
        // line 9
        echo "    </div>
    <div class=\"title-item\"><%= _.escape(label) %></div>
    <ul class=\"inline\">
        <% if (primary) { %> <li><span class=\"label label-info\"><%= _.__('oro.customer.address.primary') %></span></li> <% } %>
        <% _.each(types, function(type) { %>
        <li><span class=\"label\"><%= (_.findWhere(defaults, _.pick(type, 'name'))) ? _.__('oro.customer.address.default_type', {type_name: _.escape(type.label)}) : _.escape(type.label) %></span></li>
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
        return "OroCustomerBundle:Address/Js:address.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  32 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Address/Js:address.js.twig", "");
    }
}
