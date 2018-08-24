<?php

/* OroCustomerBundle:layouts/blank/imports/oro_customer_user_address_list:layout.html.twig */
class __TwigTemplate_0b54d66990243c7c48c3d6c452a5d4195c11a435a84dab2c497f415a10737b1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_user_address_list__user_addresses_create_button_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_create_button_widget'),
            '__oro_customer_user_address_list__user_addresses_list_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_item_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_item_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_item_address_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_item_address_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_item_type_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_item_type_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_item_primary_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_item_primary_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_item_actions_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_item_actions_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_item_actions_open_map_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_item_actions_open_map_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_item_actions_edit_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_item_actions_edit_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template_item_actions_remove_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template_item_actions_remove_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template__manage_addresses_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template__manage_addresses_widget'),
            '__oro_customer_user_address_list__user_addresses_list_template__manage_addresses_link_widget' => array($this, 'block___oro_customer_user_address_list__user_addresses_list_template__manage_addresses_link_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_create_button_widget', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_item_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_item_address_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_item_type_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_item_primary_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_item_actions_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_item_actions_open_map_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_item_actions_edit_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template_item_actions_remove_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template__manage_addresses_widget', $context, $blocks);
        // line 123
        echo "
";
        // line 124
        $this->displayBlock('__oro_customer_user_address_list__user_addresses_list_template__manage_addresses_link_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_customer_user_address_list__user_addresses_create_button_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " btn-info pull-right"));
        // line 3
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 6
    public function block___oro_customer_user_address_list__user_addresses_list_widget($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "orocustomer/js/app/components/frontend-customer-address-book-component", "data-page-component-options" => twig_array_merge(        // line 9
($context["componentOptions"] ?? null), array("template" => "#customer-address-book-addresses-list-template", "manageAddressesLink" => "[data-role=\"manage-adresses-link\"]", "mapViewport" => array("minScreenType" => "tablet"))), "~class" => " address-list"));
        // line 18
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 19
        $this->loadTemplate("OroUIBundle::view_loading.html.twig", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_address_list:layout.html.twig", 19)->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block___oro_customer_user_address_list__user_addresses_list_template_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "customer-address-book-addresses-list-template"));
        // line 27
        echo "    <script";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo " type=\"text/template\">
        ";
        // line 28
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </script>
";
    }

    // line 32
    public function block___oro_customer_user_address_list__user_addresses_list_template_item_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__item"));
        // line 36
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 37
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 41
    public function block___oro_customer_user_address_list__user_addresses_list_template_item_address_widget($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__address"));
        // line 43
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div><%= _.escape(street) %></div>
        <div><%= _.escape(city) %>, <%= _.escape(postalCode) %>, <%= _.escape(combinedCode) %></div>
    </div>
";
    }

    // line 49
    public function block___oro_customer_user_address_list__user_addresses_list_template_item_type_widget($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__type"));
        // line 51
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <% _.each(types, function(type, index) { %>
            <span><%= (_.findWhere(defaults, _.pick(type, 'name'))) ? _.__('oro.customer.address.default_type', {type_name: _.escape(type.label)}) : _.escape(type.label) %></span>
            <% if (index !== types.length - 1) { %>
            <span class=\"divider\">/</span>
            <% } %>
        <% }) %>
    </div>
";
    }

    // line 61
    public function block___oro_customer_user_address_list__user_addresses_list_template_item_primary_widget($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__primary"));
        // line 63
        echo "    <% if (primary) { %>
    <span ";
        // line 64
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "><%= _.__('oro.customer.address.primary') %></span>
    <% } %>
";
    }

    // line 68
    public function block___oro_customer_user_address_list__user_addresses_list_template_item_actions_widget($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__actions actions"));
        // line 70
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 73
    public function block___oro_customer_user_address_list__user_addresses_list_template_item_actions_open_map_widget($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_address_list:layout.html.twig", 74);
        // line 75
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__button item-map-button", "data-page-component-module" => "oroui/js/app/components/viewport-component", "~data-page-component-options" => array("viewport" => array("maxScreenType" => "tablet-small"), "component" => "oroui/js/app/components/view-component", "view" => "orofrontend/blank/js/app/views/fullscreen-popup-view", "popupIcon" => "fa-chevron-left", "contentView" => "oroaddress/js/mapservice/googlemaps", "contentOptions" => array("address" => array("address" => "<%= _.escape(searchable_string) %>", "label" => "<%= _.escape(label) %>")))));
        // line 94
        echo "    <button ";
        $this->displayBlock("block_attributes_underscore", $context, $blocks);
        echo ">
        <i class=\"fa-map-o\"></i>
    </button>
";
    }

    // line 99
    public function block___oro_customer_user_address_list__user_addresses_list_template_item_actions_edit_widget($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__button item-edit-button"));
        // line 101
        echo "    <button ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-pencil\"></i>
    </button>
";
    }

    // line 106
    public function block___oro_customer_user_address_list__user_addresses_list_template_item_actions_remove_widget($context, array $blocks = array())
    {
        // line 107
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__button item-remove-button"));
        // line 108
        echo "    <button ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-trash-o\"></i>
    </button>
";
    }

    // line 113
    public function block___oro_customer_user_address_list__user_addresses_list_template__manage_addresses_widget($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__manage hidden", "data-role" => "manage-adresses-link"));
        // line 118
        echo "
    <div";
        // line 119
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 120
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 124
    public function block___oro_customer_user_address_list__user_addresses_list_template__manage_addresses_link_widget($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-list__manage-link"));
        // line 128
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/imports/oro_customer_user_address_list:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  305 => 128,  302 => 125,  299 => 124,  292 => 120,  288 => 119,  285 => 118,  282 => 114,  279 => 113,  270 => 108,  267 => 107,  264 => 106,  255 => 101,  252 => 100,  249 => 99,  240 => 94,  237 => 75,  234 => 74,  231 => 73,  222 => 70,  219 => 69,  216 => 68,  209 => 64,  206 => 63,  203 => 62,  200 => 61,  186 => 51,  183 => 50,  180 => 49,  170 => 43,  167 => 42,  164 => 41,  157 => 37,  152 => 36,  149 => 33,  146 => 32,  139 => 28,  134 => 27,  131 => 24,  128 => 23,  123 => 20,  121 => 19,  116 => 18,  114 => 9,  112 => 7,  109 => 6,  102 => 3,  99 => 2,  96 => 1,  92 => 124,  89 => 123,  87 => 113,  84 => 112,  82 => 106,  79 => 105,  77 => 99,  74 => 98,  72 => 73,  69 => 72,  67 => 68,  64 => 67,  62 => 61,  59 => 60,  57 => 49,  54 => 48,  52 => 41,  49 => 40,  47 => 32,  44 => 31,  42 => 23,  39 => 22,  37 => 6,  34 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_address_list:layout.html.twig", "");
    }
}
