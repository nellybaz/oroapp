<?php

/* OroFrontendBundle:layouts/default/imports/datagrid_views:datagrid_views.html.twig */
class __TwigTemplate_c373c62e21619ee13fc454b53505dc73229144f800ef3e92ba5ac42a69f06c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__datagrid_views__datagrid_views_widget' => array($this, 'block___datagrid_views__datagrid_views_widget'),
            '__datagrid_views__datagrid_views_group_widget' => array($this, 'block___datagrid_views__datagrid_views_group_widget'),
            '__datagrid_views__datagrid_views_toolbar_header_widget' => array($this, 'block___datagrid_views__datagrid_views_toolbar_header_widget'),
            '__datagrid_views__datagrid_views_container_label_widget' => array($this, 'block___datagrid_views__datagrid_views_container_label_widget'),
            '__datagrid_views__datagrid_views_container_edit_label_widget' => array($this, 'block___datagrid_views__datagrid_views_container_edit_label_widget'),
            '__datagrid_views__datagrid_views_popup_widget' => array($this, 'block___datagrid_views__datagrid_views_popup_widget'),
            '__datagrid_views__datagrid_views_popup_close_widget' => array($this, 'block___datagrid_views__datagrid_views_popup_close_widget'),
            '__datagrid_views__datagrid_views_popup_container_widget' => array($this, 'block___datagrid_views__datagrid_views_popup_container_widget'),
            '__datagrid_views__datagrid_views_popup_title_widget' => array($this, 'block___datagrid_views__datagrid_views_popup_title_widget'),
            '__datagrid_views__datagrid_views_popup_list_widget' => array($this, 'block___datagrid_views__datagrid_views_popup_list_widget'),
            '__datagrid_views__datagrid_views_popup_list_item_widget' => array($this, 'block___datagrid_views__datagrid_views_popup_list_item_widget'),
            '__datagrid_views__datagrid_views_popup_footer_widget' => array($this, 'block___datagrid_views__datagrid_views_popup_footer_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__datagrid_views__datagrid_views_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('__datagrid_views__datagrid_views_group_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('__datagrid_views__datagrid_views_toolbar_header_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('__datagrid_views__datagrid_views_container_label_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('__datagrid_views__datagrid_views_container_edit_label_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('__datagrid_views__datagrid_views_popup_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('__datagrid_views__datagrid_views_popup_close_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('__datagrid_views__datagrid_views_popup_container_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('__datagrid_views__datagrid_views_popup_title_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('__datagrid_views__datagrid_views_popup_list_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('__datagrid_views__datagrid_views_popup_list_item_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('__datagrid_views__datagrid_views_popup_footer_widget', $context, $blocks);
    }

    // line 1
    public function block___datagrid_views__datagrid_views_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("class" => "js-frontend-datagrid-grid-views-tpl"));
        // line 5
        echo "
    <script type=\"text/template\" ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </script>
";
    }

    // line 11
    public function block___datagrid_views__datagrid_views_group_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " dropdown", "data-dropdown-trigger" => ""));
        // line 16
        echo "    <% if (choices.length) { %>
        <div ";
        // line 17
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
            ";
        // line 18
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    <% } %>
";
    }

    // line 23
    public function block___datagrid_views__datagrid_views_toolbar_header_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__header", "data-toggle" => "dropdown"));
        // line 28
        echo "    <% if (choices.length) { %>
    <div ";
        // line 29
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 30
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
    <% } %>
";
    }

    // line 35
    public function block___datagrid_views__datagrid_views_container_label_widget($context, array $blocks = array())
    {
        // line 36
        echo "    <%= title %>
";
    }

    // line 39
    public function block___datagrid_views__datagrid_views_container_edit_label_widget($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__edit-label"));
        // line 43
        echo "
    <% if (dirty) { %>
        <span ";
        // line 45
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">&nbsp;-&nbsp;<%- editedLabel %></span>
    <% } %>
";
    }

    // line 49
    public function block___datagrid_views__datagrid_views_popup_widget($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__dropdown dropdown-menu"));
        // line 53
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 54
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 58
    public function block___datagrid_views__datagrid_views_popup_close_widget($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__close"));
        // line 62
        echo "    <span ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-times\" data-close></i>
    </span>
";
    }

    // line 67
    public function block___datagrid_views__datagrid_views_popup_container_widget($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__containner", "data-prevent-dropdown-close" => ""));
        // line 72
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 73
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 77
    public function block___datagrid_views__datagrid_views_popup_title_widget($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__subtitle"));
        // line 81
        echo "    <h3 ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">Saved Views</h3>
";
    }

    // line 84
    public function block___datagrid_views__datagrid_views_popup_list_widget($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__list"));
        // line 88
        echo "    <ul ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <% _.each(choices, function (choice, iterate) { %>
            ";
        // line 90
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        <% }); %>
    </ul>
";
    }

    // line 95
    public function block___datagrid_views__datagrid_views_popup_list_item_widget($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__item"));
        // line 99
        echo "    <li ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid-views__label\">
            <label class=\"custom-radio absolute\">
                <input type=\"radio\"
                       name=\"grid-view-<%- gridViewId %>\"
                       class=\"custom-radio__control\"
                       value=\"<%- choice.value %>\"
                       data-change-grid-view
                    <% if (current === choice.value) { %>
                        checked <% }
                    %>
                >
                <span class=\"custom-radio__text\">
                    <span class=\"grid-views__text-line\" data-page-component-line-clamp>
                        <%- choice.label %>
                    </span>
                </span>
            </label>
        </div>
        <% if (showActions[iterate]) { %>
            <div class=\"grid-views__actions\">
                <ol class=\"actions-row\">
                    <% _.each(actions[iterate], function(action) { %>
                        <% if (action.enabled) { %>
                            <li class=\"actions-row__item\">
                                <button class=\"actions-row__button\"
                                        type=\"button\"
                                        title=\"<%- action.label %>\"
                                        data-role=\"<%- action.name %>\"
                                        data-choice-value=\"<%- choice.value %>\"
                                >
                                    <% if (action.icon) { %>
                                        <i class=\"actions-row__icon fa-<%= action.icon %>\"></i>
                                    <% } %>
                                </button>
                            </li>
                        <% } %>
                    <% }); %>
                </ol>
            </div>
        <% } %>
    </li>
";
    }

    // line 143
    public function block___datagrid_views__datagrid_views_popup_footer_widget($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__footer"));
        // line 147
        echo "
    <div ";
        // line 148
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid-views__toggle-container\"
             data-prevent-dropdown-close
        >
            <button class=\"btn btn--link btn--size-s btn--full\"
                    type=\"button\"
                    data-role=\"save-new\"
                    data-switch-edit-button=\"\"
            >
                <i class=\"fa-plus-circle hide-text\"></i>
                <%- _.__(\"oro_frontend.datagrid_views.save_as_new\") %>
            </button>
        </div>

        <div class=\"grid-views__edit-container\" data-edit-container>
            <div class=\"grid-views__form-content\">
                <div class=\"grid\">
                    <div class=\"grid__row grid__row--offset-m\">
                        <input id=\"frontend-grid-view-name\"
                               name=\"name\"
                               class=\"input input--full\"
                               type=\"text\"
                               placeholder=\"<%- _.__('oro_frontend.datagrid_views.placeholder') %>\"
                               data-view-value
                        >
                    </div>
                    <div class=\"grid__row grid__row--offset-none\">
                        <div class=\"grid__column grid__column--no-gutters-l grid__column--gutter-r-s\">
                            <button type=\"button\"
                                    class=\"btn btn--info btn--size-xs\"
                                    data-grid-view-update
                                    data-text=\"<%- _.__('oro_frontend.datagrid_views.add') %>\"
                                    data-text-add=\"<%- _.__('oro_frontend.datagrid_views.add') %>\"
                                    data-text-save=\"<%- _.__('oro_frontend.datagrid_views.save') %>\"
                            ><%- _.__('oro_frontend.datagrid_views.add') %></button>
                        </div>

                        <div class=\"grid__column grid__column--no-gutters-l\">
                            <button type=\"button\"
                                    class=\"btn btn--size-xs\"
                                    data-switch-edit-mode=\"hide\"
                            ><%- _.__(\"oro_frontend.datagrid_views.cancel\") %></button>
                        </div>

                        <div class=\"grid__column\" data-checkbox-container>
                            <label class=\"custom-checkbox\">
                                <input type=\"checkbox\" name=\"is_default\" class=\"custom-checkbox__input\">
                                <span class=\"custom-checkbox__icon\"></span>
                                <span class=\"custom-checkbox__text\"><%- _.__(\"oro_frontend.datagrid_views.set_as_default\") %></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/default/imports/datagrid_views:datagrid_views.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  324 => 148,  321 => 147,  318 => 144,  315 => 143,  267 => 99,  264 => 96,  261 => 95,  253 => 90,  247 => 88,  244 => 85,  241 => 84,  234 => 81,  231 => 78,  228 => 77,  221 => 73,  216 => 72,  213 => 68,  210 => 67,  201 => 62,  198 => 59,  195 => 58,  188 => 54,  183 => 53,  180 => 50,  177 => 49,  170 => 45,  166 => 43,  163 => 40,  160 => 39,  155 => 36,  152 => 35,  144 => 30,  140 => 29,  137 => 28,  134 => 24,  131 => 23,  123 => 18,  119 => 17,  116 => 16,  113 => 12,  110 => 11,  103 => 7,  99 => 6,  96 => 5,  93 => 2,  90 => 1,  86 => 143,  83 => 142,  81 => 95,  78 => 94,  76 => 84,  73 => 83,  71 => 77,  68 => 76,  66 => 67,  63 => 66,  61 => 58,  58 => 57,  56 => 49,  53 => 48,  51 => 39,  48 => 38,  46 => 35,  43 => 34,  41 => 23,  38 => 22,  36 => 11,  33 => 10,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/default/imports/datagrid_views:datagrid_views.html.twig", "");
    }
}
