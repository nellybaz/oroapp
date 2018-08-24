<?php

/* OroTranslationBundle::requirejs.config.js.twig */
class __TwigTemplate_253395fb1f89d6ae614d59caeff88b42c42b37d825ca6a4b56e2d9e71b03032b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroTranslationBundle::requirejs.config.js.twig"));

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
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", array()) && $this->env->getExtension('Oro\Bundle\TranslationBundle\Twig\TranslationExtension')->isDebugJsTranslations())) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  61 => 27,  56 => 24,  50 => 22,  44 => 20,  42 => 19,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("require({
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
        {% if app.debug and oro_translation_debug_js_translations() %}
            'oro/translations': '{{ path('oro_translation_jstranslation')[0:-3]|raw }}'
        {% else %}
            'oro/translations': '{{ asset(asset_path('oro_translation_jstranslation'), 'translations')|raw }}'
        {% endif %}
    },
    config: {
        'orotranslation/js/translator': {
            'debugTranslator': {{ oro_translation_debug_translator()|json_encode|raw }}
        }
    }
});
", "OroTranslationBundle::requirejs.config.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/TranslationBundle/Resources/views/requirejs.config.js.twig");
    }
}
