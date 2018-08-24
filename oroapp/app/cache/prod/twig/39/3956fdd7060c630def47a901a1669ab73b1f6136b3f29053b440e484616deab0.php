<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/imports/product_shopping_lists/product_shopping_lists.html.twig */
class __TwigTemplate_0d73f3310c4278142f43ff667ef8313d5e3b03117e8a603c27168bb4164c96bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__product_shopping_lists__shopping_lists_popup_template_widget' => array($this, 'block___product_shopping_lists__shopping_lists_popup_template_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__product_shopping_lists__shopping_lists_popup_template_widget', $context, $blocks);
    }

    public function block___product_shopping_lists__shopping_lists_popup_template_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/imports/product_shopping_lists/product_shopping_lists.html.twig", 2);
        // line 3
        echo "    ";
        $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/imports/product_shopping_lists/product_shopping_lists.html.twig", 3);
        // line 4
        echo "    <div class=\"shopping-lists-outer\">
        <table class=\"shopping-lists-popup\">
            <thead class=\"shopping-lists-popup__headline\">
            <tr class=\"shopping-lists-popup__item\">
                <th class=\"shopping-lists-popup__list\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.entity_label"), "html", null, true);
        echo "</th>
                <th class=\"shopping-lists-popup__quantity\">";
        // line 9
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
        // line 33
        echo $context["utils"]->getunderscoreRaw($context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroproduct/js/app/views/product-quantity-editable-view", "dataKey" => twig_constant("Oro\\Bundle\\ProductBundle\\Form\\Type\\FrontendLineItemType::NAME"), "enable" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_shopping_list_frontend_update"), "elements" => array("saveButton" => "[data-role=\"accept\"]", "quantity" => "[data-role=\"field__quantity\"]", "unit" => "[data-role=\"field__unit\"]"), "save_api_accessor" => array("default_route_parameters" => array("id" => "<%=lineItem.id %>"), "route" => "oro_api_shopping_list_frontend_put_line_item"), "validation" => array("showErrorsHandler" => "oroshoppinglist/js/shopping-list-item-errors-handler"), "triggerData" => array("lineItemId" => "<%= lineItem.id %>", "shoppingListId" => "<%= list.id %>")))));
        // line 58
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
                                        <ul class=\"actions-row\">
                                            <li class=\"actions-row__item actions-row__item--separate-light\">
                                                <button class=\"actions-row__button\" type=\"button\" title=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "\" data-role=\"edit\">
                                                    <i class=\"actions-row__icon fa-pencil\"></i>
                                                </button>
                                            </li>
                                            <li class=\"actions-row__item actions-row__item--separate-light\">
                                                <button class=\"actions-row__button\" type=\"button\" title=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
        echo "\"
                                                        ";
        // line 80
        echo $context["utils"]->getunderscoreRaw($context["UI"]->getrenderPageComponentAttributes(array("module" => "orofrontend/js/app/components/delete-item-component", "options" => array("route" => "oro_api_shopping_list_frontend_delete_line_item", "routeParams" => array("id" => "<%= lineItem.id %>"), "triggerData" => array("lineItemId" => "<%= lineItem.id %>"), "confirmMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.messages.line_item_delete_confirm"), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.messages.line_item_deleted")))));
        // line 93
        echo ">
                                                        <i class=\"actions-row__icon fa-trash-o\"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class=\"shopping-lists-modify hidden\"
                                    data-role=\"line-item-edit\">
                                    <li class=\"shopping-lists-modify__text\">
                                        <input class=\"shopping-lists-modify__input input input--size-s\"
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
                                            <select class=\"oro-select2 oro-select2--size-s\"
                                                    name=\"unit\"
                                                    data-role=\"field__unit\"
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
        // line 138
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
        // line 147
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
                    <select class=\"oro-select2 oro-select2--size-s\"
                            name=\"list\"
                            data-role=\"add-form-shopping-list\"
                    >
                        <option value=\"0\">";
        // line 170
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
                                <input class=\"shopping-lists-modify__input input input--size-s\"
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
                                    <select class=\"oro-select2 oro-select2--size-s\"
                                            name=\"oro_product_frontend_line_item[unit]\"
                                            data-role=\"add-form-unit\"
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
        // line 212
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
        // line 220
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
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("oro_product_frontend_line_item"), "html", null, true);
        echo "\">
            </form>
        </div>
        <div class=\"widget-actions\">
            <button class=\"btn theme-btn\" type=\"reset\">";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close"), "html", null, true);
        echo "</button>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/imports/product_shopping_lists/product_shopping_lists.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  263 => 233,  256 => 229,  244 => 220,  233 => 212,  188 => 170,  162 => 147,  150 => 138,  103 => 93,  101 => 80,  97 => 79,  89 => 74,  71 => 58,  69 => 33,  42 => 9,  38 => 8,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/imports/product_shopping_lists/product_shopping_lists.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/imports/product_shopping_lists/product_shopping_lists.html.twig");
    }
}
