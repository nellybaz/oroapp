<?php

/* OroTranslationBundle::requirejs.config.js.twig */
class __TwigTemplate_29eddb10f783bb916fd04bfd80db450393c42ec3fc77a7ea191a204e62ef9458 extends Twig_Template
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
        echo "require({
    shim: {
        'oro/translations': {
            deps: ['orotranslation/js/translator'],
            init: function(__) {
                return __;
            }
        }
    },
    map: {
        '*': {
            'orotranslation/js/translator': 'oro/translations'
        },
        'oro/translations': {
            'orotranslation/js/translator': 'orotranslation/js/translator'
        }
    },
    paths: {
        ";
        // line 19
        if (($this->getAttribute(($context["app"] ?? null), "debug", array()) && $this->env->getExtension('Oro\Bundle\TranslationBundle\Twig\TranslationExtension')->isDebugJsTranslations())) {
            // line 20
            echo "            'oro/translations': '";
            echo twig_slice($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_translation_jstranslation"), 0,  -3);
            echo "'
        ";
        } else {
            // line 22
            echo "            'oro/translations': '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->generateUrlWithoutFrontController("oro_translation_jstranslation"), "translations");
            echo "'
        ";
        }
        // line 24
        echo "    },
    config: {
        'orotranslation/js/translator': {
            'debugTranslator': ";
        // line 27
        echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\TranslationBundle\Twig\TranslationExtension')->isDebugTranslator());
        echo "
        }
    }
});
";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 27,  53 => 24,  47 => 22,  41 => 20,  39 => 19,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTranslationBundle::requirejs.config.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/TranslationBundle/Resources/views/requirejs.config.js.twig");
    }
}
