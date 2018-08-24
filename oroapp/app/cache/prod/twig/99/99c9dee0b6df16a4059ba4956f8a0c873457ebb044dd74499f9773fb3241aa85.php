<?php

/* OroImportExportBundle:ImportExport/widget:importValidateExportTemplate.html.twig */
class __TwigTemplate_5d0a30dcd3e0876c30b478b41f47bb416da73d3c888e5b6b9e972245acdaeda2 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroImportExportBundle:ImportExport/widget:importValidateExportTemplate.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["importProcessorAliasesToConfirmMessage"] = array();
        // line 4
        echo "
<div class=\"widget-content import-widget-content\">
    ";
        // line 6
        if ((twig_length_filter($this->env, ($context["configsWithForm"] ?? null)) > 1)) {
            // line 7
            echo "
        <ul class=\"nav nav-tabs\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["configsWithForm"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["configWithForm"]) {
                // line 10
                echo "                ";
                $context["config"] = $this->getAttribute($context["configWithForm"], "configuration", array());
                // line 11
                echo "                ";
                $context["shortEntityName"] = $this->env->getExtension('Oro\Bundle\ImportExportBundle\Twig\BasenameTwigExtension')->basenameFilter($this->getAttribute(($context["config"] ?? null), "entityClass", array()));
                // line 12
                echo "
                ";
                // line 13
                if (($this->getAttribute(($context["config"] ?? null), "importEntityLabel", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["config"] ?? null), "importEntityLabel", array())))) {
                    // line 14
                    echo "                    ";
                    $context["entityLabel"] = $this->getAttribute(($context["config"] ?? null), "importEntityLabel", array());
                    // line 15
                    echo "                ";
                } else {
                    // line 16
                    echo "                    ";
                    $context["entityLabel"] = ($context["shortEntityName"] ?? null);
                    // line 17
                    echo "                ";
                }
                // line 18
                echo "
                ";
                // line 19
                $context["isActiveEntity"] = ((($context["chosenEntityName"] ?? null) && (($context["chosenEntityName"] ?? null) == $this->getAttribute(($context["config"] ?? null), "entityClass", array()))) || ( !($context["chosenEntityName"] ?? null) && ($this->getAttribute($context["loop"], "index", array()) == 1)));
                // line 20
                echo "
                <li ";
                // line 21
                if (($context["isActiveEntity"] ?? null)) {
                    echo " class=\"active\" ";
                }
                echo ">
                    <a data-toggle=\"tab\" href=\"#importExport";
                // line 22
                echo twig_escape_filter($this->env, ($context["shortEntityName"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["entityLabel"] ?? null), "html", null, true);
                echo "</a>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configWithForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>

    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ((twig_length_filter($this->env, ($context["configsWithForm"] ?? null)) > 1)) {
            // line 30
            echo "    <div class=\"tab-content\">
    ";
        }
        // line 32
        echo "
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["configsWithForm"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["configWithForm"]) {
            // line 34
            echo "            ";
            $context["config"] = $this->getAttribute($context["configWithForm"], "configuration", array());
            // line 35
            echo "            ";
            $context["form"] = $this->getAttribute($this->getAttribute($context["configWithForm"], "form", array()), "createView", array(), "method");
            // line 36
            echo "            ";
            $context["shortEntityName"] = $this->env->getExtension('Oro\Bundle\ImportExportBundle\Twig\BasenameTwigExtension')->basenameFilter($this->getAttribute(($context["config"] ?? null), "entityClass", array()));
            // line 37
            echo "            ";
            $context["isActiveEntity"] = ((($context["chosenEntityName"] ?? null) && (($context["chosenEntityName"] ?? null) == $this->getAttribute(($context["config"] ?? null), "entityClass", array()))) || ( !($context["chosenEntityName"] ?? null) && ($this->getAttribute($context["loop"], "index", array()) == 1)));
            // line 38
            echo "            ";
            $context["strategyTooltip"] = (($this->getAttribute(($context["config"] ?? null), "importStrategyTooltip", array())) ? ($this->getAttribute(($context["config"] ?? null), "importStrategyTooltip", array())) : ("oro.importexport.import.strategy.tooltip"));
            // line 39
            echo "            ";
            $context["importProcessorAliasesToConfirmMessage"] = twig_array_merge(($context["importProcessorAliasesToConfirmMessage"] ?? null), $this->getAttribute(($context["config"] ?? null), "importProcessorsToConfirmationMessage", array()));
            // line 40
            echo "
            <div id=\"importExport";
            // line 41
            echo twig_escape_filter($this->env, ($context["shortEntityName"] ?? null), "html", null, true);
            echo "\" class=\"tab-pane fade in ";
            if (($context["isActiveEntity"] ?? null)) {
                echo " active ";
            }
            echo "\">
                <div class=\"alert alert-info import-notice\">
                    <strong>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.importance"), "html", null, true);
            echo "</strong>:
                    ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.columns_notice"), "html", null, true);
            echo "
                    ";
            // line 45
            if ($this->getAttribute(($context["config"] ?? null), "importAdditionalNotices", array(), "any", true, true)) {
                // line 46
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "importAdditionalNotices", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["importAdditionalNotice"]) {
                    // line 47
                    echo "                            ";
                    echo nl2br(twig_escape_filter($this->env, $context["importAdditionalNotice"], "html", null, true));
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['importAdditionalNotice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    ";
            }
            // line 50
            echo "                </div>

                <div class=\"form-container\">
                    <form method=\"post\"
                          data-nohash=\"true\"
                          id=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\"
                          name=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\"
                          action=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_importexport_import_validate_export_template_form", array("entity" => $this->getAttribute(            // line 58
($context["config"] ?? null), "entityClass", array()), "importJob" => $this->getAttribute(            // line 59
($context["config"] ?? null), "importJobName", array()), "importValidateJob" => $this->getAttribute(            // line 60
($context["config"] ?? null), "importValidationJobName", array()), "alias" =>             // line 61
($context["alias"] ?? null))), "html", null, true);
            // line 62
            echo "\"
                          class=\"form-horizontal\" ";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
            echo "
                    >
                        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 66
                echo "                            <input type=\"hidden\" name=\"options[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\" />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
                        <input type=\"hidden\" name=\"isValidateJob\" value=\"false\" />

                        <fieldset class=\"form\">
                            <div class=\"import-file\">
                                ";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'row', array("label" => "oro.importexport.import.file"));
            echo "
                            </div>
                            <div ";
            // line 75
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "processorAlias", array()), "vars", array()), "choices", array())) <= 1)) {
                echo "style=\"display: none;\"";
            }
            echo ">
                                ";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "processorAlias", array()), 'row', array("label" => "oro.importexport.import.strategy", "tooltip" =>             // line 78
($context["strategyTooltip"] ?? null)));
            // line 79
            echo "
                            </div>
                        ";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

                        ";
            // line 83
            $context["exportTemplateProcessors"] = $this->getAttribute(($context["config"] ?? null), "exportTemplateProcessorAlias", array());
            // line 84
            echo "                        ";
            $context["hasExportTemplateProcessor"] =  !twig_test_empty($this->getAttribute(($context["config"] ?? null), "exportTemplateProcessorAlias", array()));
            // line 85
            echo "                        ";
            $context["isMultipleProcessorsRequired"] = twig_test_iterable(($context["exportTemplateProcessors"] ?? null));
            // line 86
            echo "                            <div class=\"control-group control-group-file multicurrency-selection-control-group\">
                                <div class=\"control-label wrap\"></div>
                                <div class=\"controls\">
                                    ";
            // line 89
            if (($context["hasExportTemplateProcessor"] ?? null)) {
                // line 90
                echo "                                        ";
                if ((($context["isMultipleProcessorsRequired"] ?? null) && (twig_length_filter($this->env, ($context["exportTemplateProcessors"] ?? null)) > 1))) {
                    // line 91
                    echo "                                            ";
                    $context["exportTemplateButtons"] = array();
                    // line 92
                    echo "
                                            ";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["exportTemplateProcessors"] ?? null));
                    foreach ($context['_seq'] as $context["alias"] => $context["label"]) {
                        // line 94
                        echo "                                                ";
                        $context["exportTemplateButtons"] = twig_array_merge(($context["exportTemplateButtons"] ?? null), array(0 => array("path" => "#", "aCss" => "icons-holder-text no-hash export-tmpl-btn", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                        // line 97
$context["label"]), "iCss" => "fa-file-o hide-text", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                        // line 99
$context["label"]), "data" => array("page-component-module" => "oroui/js/app/components/view-component", "page-component-options" => twig_jsonencode_filter(array("view" => "oroimportexport/js/app/views/export-template-button-view", "exportTemplateProcessor" =>                         // line 104
$context["alias"], "exportTemplateJob" => (($this->getAttribute(                        // line 105
($context["config"] ?? null), "exportTemplateJob", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "exportTemplateJob", array()), null)) : (null)), "routeOptions" => ((                        // line 106
array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array()))))))));
                        // line 111
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['alias'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "
                                            ";
                    // line 113
                    echo $context["UI"]->getdropdownButton(array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export_template.label"), "elements" =>                     // line 115
($context["exportTemplateButtons"] ?? null)));
                    // line 116
                    echo "
                                        ";
                } else {
                    // line 118
                    echo "                                            ";
                    echo $context["UI"]->getbutton(array("path" => "#", "aCss" => "icons-holder-text no-hash export-tmpl-btn", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export_template.label"), "iCss" => "fa-file-o hide-text", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.export_template.label"), "data" => array("page-component-module" => "oroui/js/app/components/view-component", "page-component-options" => twig_jsonencode_filter(array("view" => "oroimportexport/js/app/views/export-template-button-view", "exportTemplateProcessor" => $this->getAttribute(                    // line 128
($context["config"] ?? null), "exportTemplateProcessorAlias", array()), "exportTemplateJob" => (($this->getAttribute(                    // line 129
($context["config"] ?? null), "exportTemplateJob", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "exportTemplateJob", array()), null)) : (null)), "routeOptions" => ((                    // line 130
array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array())))))));
                    // line 133
                    echo "
                                        ";
                }
                // line 135
                echo "                                    ";
            }
            // line 136
            echo "                                </div>
                            </div>
                        </fieldset>
                    </form>
                    ";
            // line 140
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configWithForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "
    ";
        // line 145
        if ((twig_length_filter($this->env, ($context["configsWithForm"] ?? null)) > 1)) {
            // line 146
            echo "    </div>
    ";
        }
        // line 148
        echo "
    <div class=\"widget-actions\">
        <button class=\"btn\" type=\"reset\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button class=\"btn btn-primary\" type=\"button\" id=\"validate_import_button\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.validation_label"), "html", null, true);
        echo "</button>
        <button class=\"btn btn-success\" type=\"button\" id=\"import_button\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.importexport.import.label"), "html", null, true);
        echo "</button>
    </div>

    <script type=\"text/javascript\">
        require(['underscore', 'orotranslation/js/translator', 'oroui/js/widget-manager', 'oroui/js/messenger', 'oroui/js/standart-confirmation'],
            function(_, __, WidgetManager, Messenger, DeleteConfirmation) {
                var importProcessorsToConfirmationMessages = ";
        // line 158
        echo twig_jsonencode_filter(($context["importProcessorAliasesToConfirmMessage"] ?? null));
        echo ";

                var resetWidgetFormToActiveTabForm = function(widget) {
                    var \$tabContent = getCurrentlyActiveTabContent();

                    widget.form = \$tabContent.find('form');
                };

                var getCurrentlyActiveTabContent = function(){
                    return \$('.tab-pane.active');
                };

                var getCurrentlyChosenProcessorAlias = function() {
                    var form = getCurrentlyActiveTabContent().find('form');

                    return form.find(\"select[name='oro_importexport_import[processorAlias]']\").val();
                };

                // this needs to be done because select2 does not work well with hidden selects in mobile version
                var refreshActiveInputWidgets = function(){
                    getCurrentlyActiveTabContent().find('select').each(function(){
                        if (this.isRefreshed) {
                            return;
                        }

                        \$(this).inputWidget('refresh');
                        this.isRefreshed = true; // so that each select is not refreshed every time
                    });
                };

                refreshActiveInputWidgets();

                \$('#import_button').click(function(){
                    var \$form = getCurrentlyActiveTabContent().find('form');

                    \$form.find('input[name=isValidateJob]').val(false);

                    var currentlyChosenProcessorAlias = getCurrentlyChosenProcessorAlias();

                    if (importProcessorsToConfirmationMessages[currentlyChosenProcessorAlias] !== undefined) {
                        var confirm = new DeleteConfirmation({
                            content: importProcessorsToConfirmationMessages[currentlyChosenProcessorAlias]
                        });

                        confirm.on('ok', function () {
                            \$form.submit();
                        });

                        confirm.open();
                    } else {
                        \$form.submit();
                    }
                });

                \$('#validate_import_button').click(function(){
                    var \$form = getCurrentlyActiveTabContent().find('form');
                    \$form.find('input[name=isValidateJob]').val(true);

                    \$form.submit();
                });

                WidgetManager.getWidgetInstance(";
        // line 219
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
        echo ", function(widget) {
                    resetWidgetFormToActiveTabForm(widget);

                    \$('.nav-tabs a').on('shown .bs.tab', function() {
                        resetWidgetFormToActiveTabForm(widget);
                        refreshActiveInputWidgets();
                    });

                    widget._onContentLoad = function (content) {
                        if (_.has(content, 'success')) {
                            if(content.success) {
                                var message = _.has(content, 'message') ?
                                    content.message :
                                    __('oro.importexport.import.success.message');
                                Messenger.notificationFlashMessage('success', message);
                            } else {
                                Messenger.notificationFlashMessage('error', __('oro.importexport.import.form_fail.message'));
                            }
                            this.remove();
                        } else {
                            delete this.loading;
                            this.disposePageComponents();
                            this.setContent(content, true);
                            this._triggerContentLoadEvents();
                        }
                    };

                    widget._onContentLoadFail = function() {
                        Messenger.notificationFlashMessage('error', __('oro.importexport.import.fail.message'));
                        this.remove();
                    }
                });

            });
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroImportExportBundle:ImportExport/widget:importValidateExportTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 219,  393 => 158,  384 => 152,  380 => 151,  376 => 150,  372 => 148,  368 => 146,  366 => 145,  363 => 144,  345 => 140,  339 => 136,  336 => 135,  332 => 133,  330 => 130,  329 => 129,  328 => 128,  326 => 118,  322 => 116,  320 => 115,  319 => 113,  316 => 112,  310 => 111,  308 => 106,  307 => 105,  306 => 104,  305 => 99,  304 => 97,  302 => 94,  298 => 93,  295 => 92,  292 => 91,  289 => 90,  287 => 89,  282 => 86,  279 => 85,  276 => 84,  274 => 83,  269 => 81,  265 => 79,  263 => 78,  262 => 76,  256 => 75,  251 => 73,  244 => 68,  233 => 66,  229 => 65,  224 => 63,  221 => 62,  219 => 61,  218 => 60,  217 => 59,  216 => 58,  215 => 57,  211 => 56,  207 => 55,  200 => 50,  197 => 49,  188 => 47,  183 => 46,  181 => 45,  177 => 44,  173 => 43,  164 => 41,  161 => 40,  158 => 39,  155 => 38,  152 => 37,  149 => 36,  146 => 35,  143 => 34,  126 => 33,  123 => 32,  119 => 30,  117 => 29,  114 => 28,  109 => 25,  90 => 22,  84 => 21,  81 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  36 => 9,  32 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImportExportBundle:ImportExport/widget:importValidateExportTemplate.html.twig", "");
    }
}
