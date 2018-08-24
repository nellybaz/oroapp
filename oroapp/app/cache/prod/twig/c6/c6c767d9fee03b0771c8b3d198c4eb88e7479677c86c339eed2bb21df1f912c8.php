<?php

/* OroAccountBundle:Account/widget:contactsInfo.html.twig */
class __TwigTemplate_4fc6bd8fe53f5e5626aa384897afc4246a4de0c5c38f34653f0ccdca6324bddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"widget-content grid-widget-content\">
    ";
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroAccountBundle:Account/widget:contactsInfo.html.twig", 2);
        // line 3
        echo "    ";
        $context["gridName"] = "account-contacts-update-grid";
        // line 4
        echo "
    ";
        // line 5
        $context["params"] = array("account" => ((        // line 6
($context["account"] ?? null)) ? ($this->getAttribute(($context["account"] ?? null), "id", array())) : (null)), "_parameters" => array("data_in" => (($this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? null), "request", array()), "get", array(0 => "added"), "method")) ? (twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "added"), "method"), ",")) : (array())), "data_not_in" => (($this->getAttribute($this->getAttribute(        // line 9
($context["app"] ?? null), "request", array()), "get", array(0 => "removed"), "method")) ? (twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "removed"), "method"), ",")) : (array()))));
        // line 12
        echo "
    <style type=\"text/css\">
        .grid-widget-content .grid,
        .grid-widget-content .table {
            margin-bottom: 0;
        }
    </style>

    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "
    <script type=\"text/javascript\">
        ";
        // line 27
        $context["wid"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method");
        // line 28
        echo "        require(['jquery', 'routing', 'orodatagrid/js/datagrid/listener/callback-listener', 'oroui/js/widget-manager',
            'oroform/js/multiple-entity/model', 'orolocale/js/formatter/name'],
        function(\$, routing, CallbackListener, WidgetManager, MultipleEntityModel, nameFormatter) {
            var addedModels = {};
            WidgetManager.getWidgetInstance(";
        // line 32
        echo twig_jsonencode_filter(($context["wid"] ?? null));
        echo ", function(widget) {
                widget.getAction('select', 'adopted', function(selectBtn) {
                    selectBtn.click(function() {
                        var addedVal = \$('#appendContacts').val();
                        var removedVal = \$('#removeContacts').val();
                        var appendedIds = addedVal.length ? addedVal.split(',') : [];
                        var removedIds = removedVal.length ? removedVal.split(',') : [];
                        widget.trigger('completeSelection', appendedIds, addedModels, removedIds);
                    });
                });
            });

            var gridName = ";
        // line 44
        echo twig_jsonencode_filter(($context["gridName"] ?? null));
        echo ";

            \$(function () {
                /** @type {orodatagrid.datagrid.listener.CallbackListener} */
                new CallbackListener({
                    \$gridContainer: \$('[data-wid=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["wid"] ?? null), "html", null, true);
        echo "\"]'),
                    gridName: gridName,
                    dataField: 'id',
                    columnName: 'hasContact',
                    processCallback: function (value, model, listener) {
                        var isActive = model.get(listener.columnName);
                        var id = model.get('id');
                        if (isActive) {
                            addedModels[id] = new MultipleEntityModel({
                                'id': model.get('id'),
                                'link': routing.generate('oro_contact_info', {id: model.get('id')}),
                                'label': nameFormatter.format(model.toJSON()),
                                'extraData': [
                                    {
                                        'label': 'Phone',
                                        'value': model.get('primaryPhone')
                                    },
                                    {
                                        'label': 'Email',
                                        'value': model.get('primaryEmail')
                                    }
                                ]
                            });
                        } else if (addedModels.hasOwnProperty(id)) {
                            delete addedModels[id];
                        }
                    }
                });
            });
        });
    </script>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" data-action-name=\"select\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["params"] ?? null));
        echo "
        <input type=\"hidden\" name=\"appendContacts\" id=\"appendContacts\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "added"), "method"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"removeContacts\" id=\"removeContacts\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "removed"), "method"), "html", null, true);
        echo "\" />
    ";
    }

    public function getTemplateName()
    {
        return "OroAccountBundle:Account/widget:contactsInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 23,  139 => 22,  134 => 21,  131 => 20,  123 => 83,  119 => 82,  83 => 49,  75 => 44,  60 => 32,  54 => 28,  52 => 27,  48 => 25,  46 => 20,  36 => 12,  34 => 9,  33 => 8,  32 => 6,  31 => 5,  28 => 4,  25 => 3,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAccountBundle:Account/widget:contactsInfo.html.twig", "");
    }
}
