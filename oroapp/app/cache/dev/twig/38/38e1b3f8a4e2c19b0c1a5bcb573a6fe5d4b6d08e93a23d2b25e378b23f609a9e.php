<?php

/* OroCustomerBundle:layouts:default/addressBook.html.twig */
class __TwigTemplate_fb76eedd83e10aa31a8817ed8ad4299cbfb75fd2a1c439664588c21e9afe9ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'address_book_widget' => array($this, 'block_address_book_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroCustomerBundle:layouts:default/addressBook.html.twig"));

        // line 1
        $this->displayBlock('address_book_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_address_book_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "address_book_widget"));

        // line 2
        echo "    ";
        $context["componentOptions"] = twig_array_merge(($context["componentOptions"] ?? $this->getContext($context, "componentOptions")), array("useFormDialog" =>         // line 3
($context["useFormDialog"] ?? $this->getContext($context, "useFormDialog"))));
        // line 5
        echo "
    <div>
        ";
        // line 8
        echo "        <script type=\"text/html\" id=\"template-addressbook-item\">
            <div class=\"actions pull-right\">
                ";
        // line 10
        if (( !array_key_exists("addressUpdateAclResource", $context) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(($context["addressUpdateAclResource"] ?? $this->getContext($context, "addressUpdateAclResource"))))) {
            // line 11
            echo "                    <a class=\"item-edit-button\" title=\"<%= _.__('oro.customer.address.edit') %>\"><i class=\"fa-pencil hide-text\"><%= _.__('oro.customer.address.edit') %></i></a>
                    <% if (!primary) { %><a class=\"item-remove-button\" title=\"<%= _.__('oro.customer.address.remove') %>\"><i class=\"fa-trash-o mml2-md mml2-sm hide-text\"><%= _.__('oro.customer.address.remove') %></i></a><% } %>
                ";
        }
        // line 14
        echo "            </div>

            <div class=\"title-item pull-left\"><%= _.escape(label) %></div>

            <div class=\"grid__row\">
                <address>
                    <%= _.escape(formatted_address).replace(/\\n/g, \"<br/>\") %>
                </address>
            </div>

            <% if (primary || !_.isEmpty(types)) { %>
                <ul class=\"list-unstyled\">
                    <% if (primary) { %> <li><span class=\"label label-info\"><%= _.__('oro.customer.address.primary') %></span></li> <% } %>
                    <% _.each(types, function(type) { %>
                    <li><span class=\"label\"><%= (_.findWhere(defaults, _.pick(type, 'name'))) ? _.__('oro.customer.address.default_type', {type_name: _.escape(type.label)}) : _.escape(type.label) %></span></li>
                    <% }) %>
                </ul>
            <% } %>
        </script>

        <div id=\"address-book\"
             class=\"list-box map-box\"
             data-page-component-module=\"orocustomer/js/app/components/frontend-customer-address-book-component\"
             data-page-component-options=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? $this->getContext($context, "componentOptions"))), "html", null, true);
        echo "\">
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts:default/addressBook.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 37,  54 => 14,  49 => 11,  47 => 10,  43 => 8,  39 => 5,  37 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block address_book_widget %}
    {% set componentOptions = componentOptions|merge({
        useFormDialog: useFormDialog
    }) %}

    <div>
        {# JS template for address view #}
        <script type=\"text/html\" id=\"template-addressbook-item\">
            <div class=\"actions pull-right\">
                {% if addressUpdateAclResource is not defined or is_granted(addressUpdateAclResource) %}
                    <a class=\"item-edit-button\" title=\"<%= _.__('oro.customer.address.edit') %>\"><i class=\"fa-pencil hide-text\"><%= _.__('oro.customer.address.edit') %></i></a>
                    <% if (!primary) { %><a class=\"item-remove-button\" title=\"<%= _.__('oro.customer.address.remove') %>\"><i class=\"fa-trash-o mml2-md mml2-sm hide-text\"><%= _.__('oro.customer.address.remove') %></i></a><% } %>
                {% endif %}
            </div>

            <div class=\"title-item pull-left\"><%= _.escape(label) %></div>

            <div class=\"grid__row\">
                <address>
                    <%= _.escape(formatted_address).replace(/\\n/g, \"<br/>\") %>
                </address>
            </div>

            <% if (primary || !_.isEmpty(types)) { %>
                <ul class=\"list-unstyled\">
                    <% if (primary) { %> <li><span class=\"label label-info\"><%= _.__('oro.customer.address.primary') %></span></li> <% } %>
                    <% _.each(types, function(type) { %>
                    <li><span class=\"label\"><%= (_.findWhere(defaults, _.pick(type, 'name'))) ? _.__('oro.customer.address.default_type', {type_name: _.escape(type.label)}) : _.escape(type.label) %></span></li>
                    <% }) %>
                </ul>
            <% } %>
        </script>

        <div id=\"address-book\"
             class=\"list-box map-box\"
             data-page-component-module=\"orocustomer/js/app/components/frontend-customer-address-book-component\"
             data-page-component-options=\"{{ componentOptions|json_encode }}\">
        </div>
    </div>
{% endblock %}
", "OroCustomerBundle:layouts:default/addressBook.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/addressBook.html.twig");
    }
}
