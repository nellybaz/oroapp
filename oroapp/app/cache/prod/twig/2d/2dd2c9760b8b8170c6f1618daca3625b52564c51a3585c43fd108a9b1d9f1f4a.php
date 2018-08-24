<?php

/* @OroTranslation/layouts/blank/config/requirejs.yml */
class __TwigTemplate_f38144c184b2ab1a3e8a69b7e6fff7d64366c06c998c1360bee74e6c2d1d8c22 extends Twig_Template
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
    paths:
        'translator': 'bundles/orotranslation/lib/translator.js'
        'orotranslation/js/translator': 'bundles/orotranslation/js/translator.js'
";
    }

    public function getTemplateName()
    {
        return "@OroTranslation/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroTranslation/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/TranslationBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
