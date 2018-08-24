<?php

/* OroEntitySerializedFieldsBundle:Form:fields.html.twig */
class __TwigTemplate_b5c088cecc3678bff9f3d55d7fa9ee32b0ad0091be1c426f50a3dd7974fa9f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_serialized_fields_is_serialized_type_widget' => array($this, 'block_oro_serialized_fields_is_serialized_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_serialized_fields_is_serialized_type_widget', $context, $blocks);
    }

    public function block_oro_serialized_fields_is_serialized_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <script type=\"text/javascript\">
            require(['jquery', 'oroui/js/mediator'], function (\$, mediator) {
                \$(function () {
                    var storageTypeSelector  = 'form[name=oro_entity_extend_field_type] select[data-ftid=oro_entity_extend_field_type_is_serialized]';
                    var fieldTypeSelector    = 'form[name=oro_entity_extend_field_type] select[data-ftid=oro_entity_extend_field_type_type]';
                    var _onChangeStorageType = function () {
                        var that = this;
                        var serializableTypes = ";
        // line 11
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "serializableTypes", array()));
        echo ";
                        \$(fieldTypeSelector + ' optgroup').each(function (index, value) {
                            \$.each(\$(value).find('option'), function (index, value) {
                                if (\$(that).val() == 1) {
                                    if (serializableTypes.indexOf(\$(value).val()) === -1) {
                                        \$(value).attr('disabled', 'disabled');
                                    }
                                } else {
                                    \$(value).removeAttr('disabled');
                                }
                            })
                        });
                        \$(fieldTypeSelector).select2('val', '');
                    };

                    \$(storageTypeSelector).on('change.changeStorageType', _onChangeStorageType);

                    mediator.once('page:beforeChange', function () {
                        \$(storageTypeSelector).off('change.changeStorageType', _onChangeStorageType);
                    });
                })
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroEntitySerializedFieldsBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntitySerializedFieldsBundle:Form:fields.html.twig", "");
    }
}
