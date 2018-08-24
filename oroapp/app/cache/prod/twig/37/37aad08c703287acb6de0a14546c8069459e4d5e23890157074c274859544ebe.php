<?php

/* @OroForm/layouts/blank/config/requirejs.yml */
class __TwigTemplate_8d5414e4f0b62ec568d6f0fe5c28b63297244685843ca17d120b7fba40c6ce20 extends Twig_Template
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
        echo "config:
    shim:
        'jquery.validate':
            deps:
                - 'jquery'
        'jquery.validate-additional-methods':
            deps:
                - 'jquery.validate'
    map:
        '*':
            'jquery.validate': 'oroform/js/extend/validate'
        'oroform/js/extend/validate':
            'jquery.validate': 'jquery.validate'
    paths:
        'xregexp': 'bundles/npmassets/xregexp/xregexp-all.js'
        'jquery.validate': 'bundles/bowerassets/jquery-validate/dist/jquery.validate.js'
        'jquery.validate-additional-methods': 'bundles/bowerassets/jquery-validate/dist/additional-methods.js'
        'oroform/js/validator/count': 'bundles/oroform/js/validator/count.js'
        'oroform/js/validator/date': 'bundles/oroform/js/validator/date.js'
        'oroform/js/validator/datetime': 'bundles/oroform/js/validator/datetime.js'
        'oroform/js/validator/email': 'bundles/oroform/js/validator/email.js'
        'oroform/js/validator/length': 'bundles/oroform/js/validator/length.js'
        'oroform/js/validator/notblank': 'bundles/oroform/js/validator/notblank.js'
        'oroform/js/validator/notnull': 'bundles/oroform/js/validator/notnull.js'
        'oroform/js/validator/number': 'bundles/oroform/js/validator/number.js'
        'oroform/js/validator/range': 'bundles/oroform/js/validator/range.js'
        'oroform/js/validator/open-range': 'bundles/oroform/js/validator/open-range.js'
        'oroform/js/validator/regex': 'bundles/oroform/js/validator/regex.js'
        'oroform/js/validator/repeated': 'bundles/oroform/js/validator/repeated.js'
        'oroform/js/validator/time': 'bundles/oroform/js/validator/time.js'
        'oroform/js/validator/type': 'bundles/oroform/js/validator/type.js'
        'oroform/js/validator/url': 'bundles/oroform/js/validator/url.js'
        'oroform/js/validator/callback': 'bundles/oroform/js/validator/callback.js'
        'oroform/js/optional-validation-handler': 'bundles/oroform/js/optional-validation-handler.js'
        'oroform/js/optional-validation-groups-handler': 'bundles/oroform/js/optional-validation-groups-handler.js'
        'oroform/js/app/views/form-validate-view': 'bundles/oroform/js/app/views/form-validate-view.js'

        #inline editing
        'oroform/js/tools/frontend-type-map': 'bundles/oroform/js/tools/frontend-type-map.js'
        'oroform/js/app/components/inline-editable-view-component': 'bundles/oroform/js/app/components/inline-editable-view-component.js'
        'oroform/js/app/views/editor/text-editor-view': 'bundles/oroform/js/app/views/editor/text-editor-view.js'

        'oro/autocomplete-component': 'bundles/oroform/js/app/components/autocomplete-component.js'
        'oro/select2-component': 'bundles/oroform/js/app/components/select2-component.js'
        'oro/select2-tree-autocomplete-component': 'bundles/oroform/js/app/components/select2-tree-autocomplete-component.js'
        'oro/select2-autocomplete-component': 'bundles/oroform/js/app/components/select2-autocomplete-component.js'
        'oroform/js/app/components/select-create-inline-type-async-component': 'bundles/oroform/js/app/components/select-create-inline-type-async-component.js'
";
    }

    public function getTemplateName()
    {
        return "@OroForm/layouts/blank/config/requirejs.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroForm/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
