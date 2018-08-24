<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig */
class __TwigTemplate_f94689197614d3c964c53cb1010b4140e79c01d94a2a42164a895d28939d2341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'layout_subtree_update_widget' => array($this, 'block_layout_subtree_update_widget'),
            'page_subtitle_widget' => array($this, 'block_page_subtitle_widget'),
            'breadcrumbs_widget' => array($this, 'block_breadcrumbs_widget'),
            'logo_widget' => array($this, 'block_logo_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig"));

        // line 1
        $this->displayBlock('layout_subtree_update_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('page_subtitle_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('breadcrumbs_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('logo_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_layout_subtree_update_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_subtree_update_widget"));

        // line 2
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array()))) {
            // line 3
            echo "    ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroui/js/app/views/layout-subtree-view", "blockId" => $this->getAttribute($this->getAttribute(            // line 7
($context["block"] ?? $this->getContext($context, "block")), "vars", array()), "id", array()), "reloadEvents" =>             // line 8
($context["reloadEvents"] ?? $this->getContext($context, "reloadEvents")), "restoreFormState" =>             // line 9
($context["restoreFormState"] ?? $this->getContext($context, "restoreFormState")))));
            // line 12
            echo "    <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
        ";
            // line 13
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
            echo "
    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_subtitle_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle_widget"));

        // line 19
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-subtitle"));
        // line 20
        echo "    <h2 ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 21
        if (($context["icon"] ?? $this->getContext($context, "icon"))) {
            echo "<span class=\"badge ";
            echo twig_escape_filter($this->env, ((($context["badge"] ?? $this->getContext($context, "badge"))) ? (("badge--" . ($context["badge"] ?? $this->getContext($context, "badge")))) : ("")), "html", null, true);
            echo "\"><i class=\"fa-";
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "\"></i></span>";
        }
        // line 22
        echo "        <span class=\"page-subtitle__text\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->processText(($context["text"] ?? $this->getContext($context, "text")), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</span>
        ";
        // line 23
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_breadcrumbs_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs_widget"));

        // line 28
        echo "    ";
        if (twig_test_empty(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")))) {
            // line 29
            echo "        ";
            $context["breadcrumbs"] = twig_reverse_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "title", array()), "vars", array()), "value", array()), " - "));
            // line 30
            echo "    ";
        }
        // line 31
        echo "
    ";
        // line 32
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " breadcrumbs"));
        // line 35
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <span class=\"breadcrumbs__item\">
            ";
        // line 37
        if ( !twig_test_iterable(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")))) {
            // line 38
            echo "                ";
            echo twig_escape_filter($this->env, ($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")), "html", null, true);
            echo "
            ";
        } else {
            // line 40
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 41
                echo "                    ";
                echo (( !$this->getAttribute($context["loop"], "first", array())) ? (" / ") : (""));
                echo "
                    ";
                // line 42
                if ($this->getAttribute($context["breadcrumb"], "label", array(), "any", true, true)) {
                    // line 43
                    echo "                        ";
                    if ($this->getAttribute($context["breadcrumb"], "uri", array(), "any", true, true)) {
                        // line 44
                        echo "                            ";
                        $context["url"] = $this->getAttribute($context["breadcrumb"], "uri", array());
                        // line 45
                        echo "                        ";
                    } else {
                        // line 46
                        echo "                            ";
                        $context["url"] = $this->getAttribute($context["breadcrumb"], "url", array());
                        // line 47
                        echo "                        ";
                    }
                    // line 48
                    echo "
                        ";
                    // line 49
                    if ((($context["url"] ?? $this->getContext($context, "url")) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                        // line 50
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
                        echo "\" class=\"breadcrumbs__link\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["breadcrumb"], "label", array())), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 52
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["breadcrumb"], "label", array())), "html", null, true);
                        echo "
                        ";
                    }
                    // line 54
                    echo "                    ";
                } else {
                    // line 55
                    echo "                        ";
                    echo twig_escape_filter($this->env, $context["breadcrumb"], "html", null, true);
                    echo "
                    ";
                }
                // line 57
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            ";
        }
        // line 59
        echo "        </span>
        ";
        // line 60
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_logo_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo_widget"));

        // line 65
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig", 65);
        // line 66
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " logo"));
        // line 69
        echo "    
    ";
        // line 70
        $context["attr_img"] = ((array_key_exists("attr_img", $context)) ? (_twig_default_filter(($context["attr_img"] ?? $this->getContext($context, "attr_img")), array())) : (array()));
        // line 71
        echo "    ";
        $context["attr_img"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr_img"] ?? $this->getContext($context, "attr_img")), array("src" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/orofrontend/blank/images/logo/logo-oroacem.svg"), "~class" => " logo-img", "alt" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.logo.alt.label")));
        // line 76
        echo "
    ";
        // line 77
        if ((($context["renderLink"] ?? $this->getContext($context, "renderLink")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != ($context["route"] ?? $this->getContext($context, "route"))))) {
            // line 78
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")));
            echo "\" ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <img ";
            // line 79
            echo $context["UI"]->getattributes(($context["attr_img"] ?? $this->getContext($context, "attr_img")));
            echo ">
        </a>
    ";
        } else {
            // line 82
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <img ";
            // line 83
            echo $context["UI"]->getattributes(($context["attr_img"] ?? $this->getContext($context, "attr_img")));
            echo ">
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  291 => 83,  286 => 82,  280 => 79,  273 => 78,  271 => 77,  268 => 76,  265 => 71,  263 => 70,  260 => 69,  257 => 66,  254 => 65,  248 => 64,  238 => 60,  235 => 59,  232 => 58,  218 => 57,  212 => 55,  209 => 54,  203 => 52,  195 => 50,  193 => 49,  190 => 48,  187 => 47,  184 => 46,  181 => 45,  178 => 44,  175 => 43,  173 => 42,  168 => 41,  150 => 40,  144 => 38,  142 => 37,  136 => 35,  134 => 32,  131 => 31,  128 => 30,  125 => 29,  122 => 28,  116 => 27,  106 => 23,  101 => 22,  93 => 21,  88 => 20,  85 => 19,  79 => 18,  68 => 13,  63 => 12,  61 => 9,  60 => 8,  59 => 7,  57 => 3,  54 => 2,  48 => 1,  41 => 64,  38 => 63,  36 => 27,  33 => 26,  31 => 18,  28 => 17,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block layout_subtree_update_widget %}
    {% if block.children is not empty %}
    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroui/js/app/components/view-component',
        '~data-page-component-options': {
            view: 'oroui/js/app/views/layout-subtree-view',
            blockId : block.vars.id,
            reloadEvents: reloadEvents,
            restoreFormState: restoreFormState
        },
    }) %}
    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
    {% endif %}
{% endblock %}

{% block page_subtitle_widget %}
    {% set attr = layout_attr_defaults(attr, {'~class': ' page-subtitle'}) %}
    <h2 {{ block('block_attributes') }}>
        {% if icon %}<span class=\"badge {{ badge ? 'badge--' ~ badge }}\"><i class=\"fa-{{ icon }}\"></i></span>{% endif %}
        <span class=\"page-subtitle__text\">{{ text|block_text(translation_domain) }}</span>
        {{ block('container_widget') }}
    </h2>
{% endblock %}

{% block breadcrumbs_widget %}
    {% if breadcrumbs is empty %}
        {% set breadcrumbs = blocks.title.vars.value|split(' - ')|reverse %}
    {% endif %}

    {% set attr = layout_attr_defaults(attr, {
        '~class': ' breadcrumbs'
    }) %}
    <div {{ block('block_attributes') }}>
        <span class=\"breadcrumbs__item\">
            {% if breadcrumbs is not iterable %}
                {{ breadcrumbs }}
            {% else %}
                {% for breadcrumb in breadcrumbs %}
                    {{ not loop.first ? ' / ' }}
                    {% if breadcrumb.label is defined %}
                        {% if breadcrumb.uri is defined %}
                            {% set url = breadcrumb.uri %}
                        {% else %}
                            {% set url = breadcrumb.url %}
                        {% endif %}

                        {% if url and not loop.last %}
                            <a href=\"{{ url  }}\" class=\"breadcrumbs__link\">{{ breadcrumb.label|trans }}</a>
                        {% else %}
                            {{ breadcrumb.label|trans }}
                        {% endif %}
                    {%  else %}
                        {{ breadcrumb }}
                    {%  endif %}
                {% endfor %}
            {% endif %}
        </span>
        {{ block('container_widget') }}
    </div>
{% endblock %}

{% block logo_widget %}
    {% import 'OroUIBundle::macros.html.twig' as UI %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' logo'
    }) %}
    
    {% set attr_img = attr_img|default({}) %}
    {% set attr_img = layout_attr_defaults(attr_img, {
        'src': asset('bundles/orofrontend/blank/images/logo/logo-oroacem.svg'),
        '~class': ' logo-img',
        'alt': 'oro_frontend.logo.alt.label'|trans
    }) %}

    {% if renderLink and app.request.attributes.get('_route') != route %}
        <a href=\"{{ path(route) }}\" {{ block('block_attributes') }}>
            <img {{ UI.attributes(attr_img) }}>
        </a>
    {% else %}
        <div {{ block('block_attributes') }}>
            <img {{ UI.attributes(attr_img) }}>
        </div>
    {% endif %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig");
    }
}
