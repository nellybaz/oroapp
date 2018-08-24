<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig */
class __TwigTemplate_de8ee095a198bdc1da3330206b3392bb98e8b884c24eeed597e992ac571a9128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_require_js_widget' => array($this, 'block__require_js_widget'),
            '_require_modules_widget' => array($this, 'block__require_modules_widget'),
            '_requirejs_scripts_widget' => array($this, 'block__requirejs_scripts_widget'),
            'body_widget' => array($this, 'block_body_widget'),
            '_wrapper_widget' => array($this, 'block__wrapper_widget'),
            '_page_container_widget' => array($this, 'block__page_container_widget'),
            '_page_main_widget' => array($this, 'block__page_main_widget'),
            '_page_main_content_widget' => array($this, 'block__page_main_content_widget'),
            '_page_main_header_widget' => array($this, 'block__page_main_header_widget'),
            '_page_content_widget' => array($this, 'block__page_content_widget'),
            '_page_sidebar_widget' => array($this, 'block__page_sidebar_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig"));

        // line 1
        $this->displayBlock('_require_js_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_require_modules_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('_requirejs_scripts_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('body_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('_wrapper_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('_page_container_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('_page_main_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('_page_main_content_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('_page_main_header_widget', $context, $blocks);
        // line 81
        echo "

";
        // line 83
        $this->displayBlock('_page_content_widget', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('_page_sidebar_widget', $context, $blocks);
        // line 113
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__require_js_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_require_js_widget"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block__require_modules_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_require_modules_widget"));

        // line 6
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block__requirejs_scripts_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_requirejs_scripts_widget"));

        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("requirejs_config_extend", $context)) ? (_twig_default_filter(($context["requirejs_config_extend"] ?? $this->getContext($context, "requirejs_config_extend")), "requirejs_config_extend")) : ("requirejs_config_extend")), array());
        $context["requirejs_config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "    ";
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig", 13)->display(array_merge($context, array("compressed" =>  !$this->getAttribute(        // line 14
($context["app"] ?? $this->getContext($context, "app")), "debug", array()), "config_extend" =>         // line 15
($context["requirejs_config_extend"] ?? $this->getContext($context, "requirejs_config_extend")), "provider_alias" =>         // line 16
($context["provider_alias"] ?? $this->getContext($context, "provider_alias")))));
        // line 18
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_body_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_widget"));

        // line 22
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => ((" body " . (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) ? ("mobile") : ("desktop"))) . "-version")));
        // line 25
        echo "
    <body ";
        // line 26
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div id=\"container\" data-layout=\"separate\">
            ";
        // line 28
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
        </div>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block__wrapper_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_wrapper_widget"));

        // line 34
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " wrapper"));
        // line 37
        echo "
    <div ";
        // line 38
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 39
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block__page_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_container_widget"));

        // line 44
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-container"));
        // line 47
        echo "
    <div ";
        // line 48
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 49
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block__page_main_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_main_widget"));

        // line 54
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-main"));
        // line 57
        echo "    <main";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 58
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block__page_main_content_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_main_content_widget"));

        // line 63
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-main__content"));
        // line 66
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 67
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block__page_main_header_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_main_header_widget"));

        // line 72
        echo "    ";
        if (($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "count", array()) > 0)) {
            // line 73
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-main__header"));
            // line 76
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 77
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block__page_content_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_content_widget"));

        // line 84
        echo "    ";
        $context["visibleSidebarChildren"] = array();
        // line 85
        echo "    ";
        if ($this->getAttribute(($context["blocks"] ?? null), "page_sidebar", array(), "any", true, true)) {
            // line 86
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "page_sidebar", array()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 87
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                    // line 88
                    echo "                ";
                    $context["visibleSidebarChildren"] = twig_array_merge(($context["visibleSidebarChildren"] ?? $this->getContext($context, "visibleSidebarChildren")), array(0 => $context["child"]));
                    // line 89
                    echo "            ";
                }
                // line 90
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    ";
        // line 93
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => (" page-content" . (((twig_length_filter($this->env,         // line 94
($context["visibleSidebarChildren"] ?? $this->getContext($context, "visibleSidebarChildren"))) > 0)) ? (" page-content--has-sidebar") : ("")))));
        // line 96
        echo "
    <section ";
        // line 97
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 98
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block__page_sidebar_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_sidebar_widget"));

        // line 103
        echo "    ";
        if (($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "count", array()) > 0)) {
            // line 104
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-sidebar"));
            // line 107
            echo "
        <aside ";
            // line 108
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 109
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
            echo "
        </aside>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  387 => 109,  383 => 108,  380 => 107,  377 => 104,  374 => 103,  368 => 102,  358 => 98,  354 => 97,  351 => 96,  349 => 94,  348 => 93,  345 => 92,  342 => 91,  336 => 90,  333 => 89,  330 => 88,  327 => 87,  322 => 86,  319 => 85,  316 => 84,  310 => 83,  299 => 77,  294 => 76,  291 => 73,  288 => 72,  282 => 71,  272 => 67,  267 => 66,  264 => 63,  258 => 62,  248 => 58,  243 => 57,  240 => 54,  234 => 53,  224 => 49,  220 => 48,  217 => 47,  214 => 44,  208 => 43,  198 => 39,  194 => 38,  191 => 37,  188 => 34,  182 => 33,  171 => 28,  166 => 26,  163 => 25,  160 => 22,  154 => 21,  144 => 18,  142 => 16,  141 => 15,  140 => 14,  138 => 13,  135 => 11,  132 => 10,  126 => 9,  116 => 6,  110 => 5,  100 => 2,  94 => 1,  86 => 113,  84 => 102,  81 => 101,  79 => 83,  75 => 81,  73 => 71,  70 => 70,  68 => 62,  65 => 61,  63 => 53,  60 => 52,  58 => 43,  55 => 42,  53 => 33,  50 => 32,  48 => 21,  45 => 20,  43 => 9,  40 => 8,  38 => 5,  35 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _require_js_widget %}
    {{ block_widget(block) }}
{% endblock %}

{% block _require_modules_widget %}
    {{ block_widget(block) }}
{% endblock %}

{% block _requirejs_scripts_widget %}
    {% set requirejs_config_extend %}
        {%- placeholder requirejs_config_extend -%}
    {% endset %}
    {% include 'OroRequireJSBundle::scripts.html.twig' with {
        compressed: not app.debug,
        config_extend: requirejs_config_extend,
        provider_alias: provider_alias
    } %}
    {{ block_widget(block) }}
{% endblock %}

{% block body_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' body ' ~ (isMobileVersion() ? 'mobile' : 'desktop') ~ '-version'
    }) %}

    <body {{ block('block_attributes') }}>
        <div id=\"container\" data-layout=\"separate\">
            {{ block_widget(block) }}
        </div>
    </body>
{% endblock %}

{% block _wrapper_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' wrapper'
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _page_container_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-container'
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _page_main_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-main'
    }) %}
    <main{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </main>
{% endblock %}

{% block _page_main_content_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-main__content'
    }) %}
    <div{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _page_main_header_widget %}
    {% if block.count > 0 %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' page-main__header'
        }) %}
        <div{{ block('block_attributes') }}>
            {{ block_widget(block) }}
        </div>
    {% endif %}
{% endblock %}


{% block _page_content_widget %}
    {% set visibleSidebarChildren = [] %}
    {% if blocks.page_sidebar is defined %}
        {% for child in blocks.page_sidebar.children %}
            {% if child.vars.visible %}
                {% set visibleSidebarChildren  = visibleSidebarChildren|merge([child]) %}
            {% endif %}
        {% endfor %}
    {% endif %}

    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-content' ~ (visibleSidebarChildren|length > 0 ? ' page-content--has-sidebar')
    }) %}

    <section {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </section>
{% endblock %}

{% block _page_sidebar_widget %}
    {% if block.count > 0 %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' page-sidebar'
        }) %}

        <aside {{ block('block_attributes') }}>
            {{ block_widget(block) }}
        </aside>
    {% endif %}
{% endblock %}

", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig");
    }
}
