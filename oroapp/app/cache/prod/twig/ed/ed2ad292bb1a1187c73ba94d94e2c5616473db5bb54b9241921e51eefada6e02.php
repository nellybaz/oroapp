<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig */
class __TwigTemplate_fad07efd0c29d3f9ee786ab7a2a33e7e1b6de07927673012ccc9c7d1eeb1b4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__product_shopping_lists__shopping_lists_widget' => array($this, 'block___product_shopping_lists__shopping_lists_widget'),
            '__product_shopping_lists__shopping_lists_template_widget' => array($this, 'block___product_shopping_lists__shopping_lists_template_widget'),
            '__product_shopping_lists__shopping_lists_template_preview_widget' => array($this, 'block___product_shopping_lists__shopping_lists_template_preview_widget'),
            '__product_shopping_lists__shopping_lists_popup_widget' => array($this, 'block___product_shopping_lists__shopping_lists_popup_widget'),
            '__product_shopping_lists__shopping_lists_popup_template_widget' => array($this, 'block___product_shopping_lists__shopping_lists_popup_template_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__product_shopping_lists__shopping_lists_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('__product_shopping_lists__shopping_lists_template_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('__product_shopping_lists__shopping_lists_template_preview_widget', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('__product_shopping_lists__shopping_lists_popup_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('__product_shopping_lists__shopping_lists_popup_template_widget', $context, $blocks);
    }

    // line 1
    public function block___product_shopping_lists__shopping_lists_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !$this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->isConfigurableType($this->getAttribute(($context["product"] ?? null), "type", array()))) {
            // line 3
            echo "        ";
            $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig", 3);
            // line 4
            echo "        ";
            ob_start();
            // line 5
            echo "            ";
            ob_start();
            // line 6
            echo "                ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 8
            echo "        ";
            $context["shoppingListsTemplate"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
        ";
            // line 10
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroshoppinglist/js/app/views/product-shopping-lists-view", "modelAttr" => array("shopping_lists" =>             // line 15
($context["productShoppingLists"] ?? null)), "template" =>             // line 17
$context["utils"]->getunderscoreRaw((("<%#" . ($context["shoppingListsTemplate"] ?? null)) . "#%>"))), "data-product-shopping-lists" => "", "data-layout" => "separate"));
            // line 22
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo "></div>
    ";
        }
    }

    // line 26
    public function block___product_shopping_lists__shopping_lists_template_widget($context, array $blocks = array())
    {
        // line 27
        echo "    <% if (shoppingListsCount) { %>
        <div class=\"shopping-lists\">
            <div class=\"shopping-lists__content\">
                ";
        // line 30
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
            </div>
        </div>
    <% } %>
";
    }

    // line 36
    public function block___product_shopping_lists__shopping_lists_template_preview_widget($context, array $blocks = array())
    {
        // line 37
        echo "    <i class=\"shopping-lists__cart\"></i>
    <div class=\"shopping-lists__content-wrapper\">
        <div class=\"shopping-lists__text\">
            <% if (shoppingListsCount == 1) { %>
                <%= _.__('oro.shoppinglist.actions.in_shopping_list') %>
            <% } else { %>
                <%= _.__('oro.shoppinglist.actions.in_shopping_lists') %>
            <% } %>
        </div>
    </div>
    ";
        // line 47
        if ( !call_user_func_array($this->env->getFunction('is_one_shopping_list_enabled')->getCallable(), array())) {
            // line 48
            echo "        <i class=\"shopping-lists__edit\"></i>
    ";
        }
    }

    // line 52
    public function block___product_shopping_lists__shopping_lists_popup_widget($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig", 53);
        // line 54
        echo "    ";
        ob_start();
        // line 55
        echo "        ";
        ob_start();
        // line 56
        echo "            ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 58
        echo "    ";
        $context["shoppingListsTemplate"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "    ";
        if ( !call_user_func_array($this->env->getFunction('is_one_shopping_list_enabled')->getCallable(), array())) {
            // line 60
            echo "    ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/widget-component", "~data-page-component-options" => array("type" => "product-shopping-lists", "createOnEvent" => "click", "options" => array("template" =>             // line 66
$context["utils"]->getunderscoreRaw((("<%#" . ($context["shoppingListsTemplate"] ?? null)) . "#%>")), "shoppingLists" =>             // line 67
($context["shoppingLists"] ?? null), "quantityComponentOptions" => array("dataKey" => twig_constant("Oro\\Bundle\\ProductBundle\\Form\\Type\\FrontendLineItemType::NAME"), "enable" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_shopping_list_frontend_update")), "singleUnitMode" =>             // line 72
($context["singleUnitMode"] ?? null), "singleUnitModeCodeVisible" =>             // line 73
($context["singleUnitModeCodeVisible"] ?? null), "configDefaultUnit" =>             // line 74
($context["defaultUnitCode"] ?? null))), "~class" => " shopping-lists__area-trigger"));
            // line 79
            echo "    ";
        }
        // line 80
        echo "    <a ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></a>
";
    }

    // line 83
    public function block___product_shopping_lists__shopping_lists_popup_template_widget($context, array $blocks = array())
    {
        // line 84
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig", 84);
        // line 85
        echo "    ";
        $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig", 85);
        // line 86
        echo "    <div class=\"shopping-lists-outer\">
        <table class=\"shopping-lists-popup\">
            <thead class=\"shopping-lists-popup__headline\">
            <tr class=\"shopping-lists-popup__item\">
                <th class=\"shopping-lists-popup__list\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.entity_label"), "html", null, true);
        echo "</th>
                <th class=\"shopping-lists-popup__quantity\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.view.qty.label"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody class=\"shopping-lists-popup__content\">
            <% var applySingleUnitMode = isProductApplySingleUnitMode(_.keys(productUnits)) %>
            <% _.each(shoppingLists, function(list) { %>
            <tr class=\"shopping-lists-popup__item\">
                <td class=\"shopping-lists-popup__list\">
                    <% if (_.isString(list.href)) { %>
                        <a class=\"shopping-lists-popup__link\" href=\"<%- list.href %>\">
                            <%= _.escape(list.label) %>
                        </a>
                    <% } else { %>
                        <span class=\"shopping-lists-popup__link\">
                            <%= _.escape(list.label) %>
                        </span>
                    <% } %>
                </td>
                <td class=\"shopping-lists-popup__quantity\">
                    <% var ListLineItems = list.line_items; %>
                    <% if (!_.isEmpty(ListLineItems)) { %>
                    <% _.each(ListLineItems, function(lineItem, i) { %>
                        <div class=\"shopping-lists-units\"
                             data-role=\"line-item\"
                            ";
        // line 115
        echo $context["utils"]->getunderscoreRaw($context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroproduct/js/app/views/product-quantity-editable-view", "dataKey" => twig_constant("Oro\\Bundle\\ProductBundle\\Form\\Type\\FrontendLineItemType::NAME"), "enable" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_shopping_list_frontend_update"), "elements" => array("saveButton" => "[data-role=\"accept\"]", "quantity" => "[data-role=\"field__quantity\"]", "unit" => "[data-role=\"field__unit\"]"), "save_api_accessor" => array("default_route_parameters" => array("id" => "<%=lineItem.id %>"), "route" => "oro_api_shopping_list_frontend_put_line_item"), "validation" => array("showErrorsHandler" => "oroshoppinglist/js/shopping-list-item-errors-handler"), "triggerData" => array("lineItemId" => "<%= lineItem.id %>", "shoppingListId" => "<%= list.id %>")))));
        // line 140
        echo ">
                            <form action=\"#\">
                                <div class=\"shopping-lists-units__static\"
                                     data-role=\"line-item-view\">
                                    <span class=\"shopping-lists-units__number\"><%= lineItem.quantity %></span>
                                    <% if (!isProductApplySingleUnitMode([lineItem.unit]) || singleUnitModeCodeVisible) { %>
                                        <span class=\"shopping-lists-units__separate\"></span>
                                        <span class=\"shopping-lists-units__measurements\"><%= _.__(
                                            'oro.product.product_unit.' + lineItem.unit + '.value.label',
                                            {count: lineItem.quantity},
                                            lineItem.quantity
                                        ) %></span>
                                    <% } %>
                                    <div class=\"shopping-lists-units__actions\">
                                            <button class=\"button\" type=\"button\" title=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "\" data-role=\"edit\">
                                                <i class=\"fa-pencil\"></i>
                                            </button>
                                            <button class=\"button\" type=\"button\" title=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
        echo "\"
                                                ";
        // line 158
        echo $context["utils"]->getunderscoreRaw($context["UI"]->getrenderPageComponentAttributes(array("module" => "orofrontend/js/app/components/delete-item-component", "options" => array("route" => "oro_api_shopping_list_frontend_delete_line_item", "routeParams" => array("id" => "<%= lineItem.id %>"), "triggerData" => array("lineItemId" => "<%= lineItem.id %>"), "confirmMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.messages.line_item_delete_confirm"), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.messages.line_item_deleted")))));
        // line 171
        echo ">
                                                <i class=\"fa-trash-o\"></i>
                                            </button>
                                    </div>
                                </div>
                                <ul class=\"shopping-lists-modify hidden\"
                                    data-role=\"line-item-edit\">
                                    <li class=\"shopping-lists-modify__text\">
                                        <input class=\"shopping-lists-modify__input input input--size-x-s\"
                                               type=\"number\"
                                               min=\"1\"
                                               value=\"<%= lineItem.quantity %>\"
                                               name=\"quantity\"
                                               data-role=\"field__quantity\"
                                               disabled=\"disabled\" required>
                                    </li>
                                    <li class=\"shopping-lists-modify__select\">
                                        <% if (applySingleUnitMode && isProductApplySingleUnitMode([lineItem.unit])) { %>
                                            <input type=\"hidden\" name=\"unit\" value=\"<%= lineItem.unit %>\" data-role=\"field__unit\" required />

                                            <% if (singleUnitModeCodeVisible) { %>
                                                <%= lineItem.unit %>
                                            <% } %>
                                        <% } else { %>
                                            <select class=\"select\"
                                                    name=\"unit\"
                                                    data-role=\"field__unit\"
                                                    data-skip-input-widgets
                                                    required
                                            >
                                                <% _.each(productUnits, function(label, unit) { %>
                                                    <% if (unit === lineItem.unit) { %>
                                                        <option value=\"<%= unit %>\" selected=\"selected\"><%= label %></option>
                                                    <% } else { %>
                                                        <option value=\"<%= unit %>\"><%= label %></option>
                                                    <% } %>
                                                <% }); %>
                                            </select>
                                        <% } %>
                                    </li>
                                    <li class=\"shopping-lists-modify__badges\">
                                        <span class=\"shopping-lists-modify__edit\">
                                            <button class=\"shopping-lists-modify__button\"
                                                    type=\"button\"
                                                    title=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accept"), "html", null, true);
        echo "\"
                                                    disabled
                                                    data-role=\"accept\">
                                                    <i class=\"shopping-lists-modify__icon fa-check\"></i>
                                            </button>
                                        </span>
                                        <span class=\"shopping-lists-modify__edit\">
                                            <button class=\"shopping-lists-modify__button reset\"
                                                    type=\"button\"
                                                    title=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Decline"), "html", null, true);
        echo "\"
                                                    data-role=\"decline\">
                                                    <i class=\"shopping-lists-modify__icon fa-close\"></i>
                                            </button>
                                        </span>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    <% }); %>
                    <% } %>
                </td>
            </tr>
            <% }); %>
            </tbody>
        </table>
        <div class=\"shopping-lists-popup__footer\">
            <form method=\"post\" class=\"shopping-lists-popup__item\" data-role=\"add-form\">
                <div class=\"shopping-lists-popup__list\">
                    <select class=\"select\"
                            name=\"list\"
                            data-role=\"add-form-shopping-list\"
                            data-skip-input-widgets
                    >
                        <option value=\"0\">";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.actions.choose_list"), "html", null, true);
        echo "</option>
                        <% if (!_.isEmpty(shoppingListsCollection)) { %>
                        <% shoppingListsCollection.each(function(list) { %>
                        <option value=\"<%= list.get('id') %>\"><%= _.escape(list.get('label')) %></option>
                        <% }); %>
                        <% } %>
                    </select>
                </div>
                <div class=\"shopping-lists-popup__quantity\">
                    <div class=\"shopping-lists-units\">
                        <ul class=\"shopping-lists-modify\"
                            data-role=\"line-item-edit\">
                            <li class=\"shopping-lists-modify__text\">
                                <input class=\"shopping-lists-modify__input input input--size-x-s\"
                                       type=\"number\"
                                       min=\"1\"
                                       value=\"1\"
                                       name=\"oro_product_frontend_line_item[quantity]\"
                                       data-role=\"add-form-qty\">
                            </li>
                            <li class=\"shopping-lists-modify__select\">
                                <% if (singleUnitMode && applySingleUnitMode) { %>
                                    <input type=\"hidden\" name=\"oro_product_frontend_line_item[unit]\" value=\"<%= unit %>\" data-role=\"add-form-unit\"/>

                                    <% if (singleUnitModeCodeVisible) { %>
                                        <%= unit %>
                                    <% } %>
                                <% } else { %>
                                    <select class=\"select\"
                                            name=\"oro_product_frontend_line_item[unit]\"
                                            data-role=\"add-form-unit\"
                                            data-skip-input-widgets
                                    >
                                        <% _.each(productUnits, function(label, unit) { %>
                                        <option value=\"<%= unit %>\"><%= label %></option>
                                        <% }); %>
                                    </select>
                                <% } %>
                            </li>
                            <li class=\"shopping-lists-modify__badges\">
                                <span class=\"shopping-lists-modify__edit\">
                                    <button class=\"shopping-lists-modify__button\"
                                            type=\"button\"
                                            title=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accept"), "html", null, true);
        echo "\"
                                            data-role=\"add-form-accept\">
                                            <i class=\"shopping-lists-modify__icon fa-check\"></i>
                                    </button>
                                </span>
                                <span class=\"shopping-lists-modify__edit\">
                                    <button class=\"shopping-lists-modify__button reset\"
                                            type=\"reset\"
                                            title=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Decline"), "html", null, true);
        echo "\"
                                            data-role=\"add-form-reset\">
                                            <i class=\"shopping-lists-modify__icon fa-close\"></i>
                                    </button>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <input type=\"hidden\" name=\"oro_product_frontend_line_item[_token]\" value=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("oro_product_frontend_line_item"), "html", null, true);
        echo "\">
            </form>
        </div>
        <div class=\"widget-actions\">
            <button class=\"btn theme-btn\" type=\"reset\">";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close"), "html", null, true);
        echo "</button>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  406 => 312,  399 => 308,  387 => 299,  376 => 291,  330 => 248,  303 => 224,  291 => 215,  245 => 171,  243 => 158,  239 => 157,  233 => 154,  217 => 140,  215 => 115,  188 => 91,  184 => 90,  178 => 86,  175 => 85,  172 => 84,  169 => 83,  162 => 80,  159 => 79,  157 => 74,  156 => 73,  155 => 72,  154 => 67,  153 => 66,  151 => 60,  148 => 59,  145 => 58,  139 => 56,  136 => 55,  133 => 54,  130 => 53,  127 => 52,  121 => 48,  119 => 47,  107 => 37,  104 => 36,  95 => 30,  90 => 27,  87 => 26,  79 => 22,  77 => 17,  76 => 15,  75 => 10,  72 => 9,  69 => 8,  63 => 6,  60 => 5,  57 => 4,  54 => 3,  51 => 2,  48 => 1,  44 => 83,  41 => 82,  39 => 52,  36 => 51,  34 => 36,  31 => 35,  29 => 26,  26 => 25,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig");
    }
}
