<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/page/layout.html.twig */
class __TwigTemplate_a8b188dea8193221a0eb9cf33da9d888b58cd809897bb6720df9ff7377d1afc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_sticker_widget' => array($this, 'block_product_sticker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/page/layout.html.twig"));

        // line 1
        $this->displayBlock('product_sticker_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_product_sticker_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_sticker_widget"));

        // line 2
        echo "    ";
        if ((        // line 3
array_key_exists("stickers", $context) && twig_length_filter($this->env,         // line 4
($context["stickers"] ?? $this->getContext($context, "stickers"))))) {
            // line 6
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " product-sticker"));
            // line 9
            echo "
        ";
            // line 10
            if ((($context["mode"] ?? $this->getContext($context, "mode")) == "icon")) {
                // line 11
                echo "            ";
                $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " product-sticker--icon"));
                // line 14
                echo "        ";
            } elseif ((($context["mode"] ?? $this->getContext($context, "mode")) == "text")) {
                // line 15
                echo "            ";
                $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " product-sticker--text"));
                // line 18
                echo "        ";
            }
            // line 19
            echo "
        ";
            // line 20
            $context["def_attr"] = ($context["attr"] ?? $this->getContext($context, "attr"));
            // line 21
            echo "
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stickers"] ?? $this->getContext($context, "stickers")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                // line 23
                echo "            ";
                $context["attr"] = ($context["def_attr"] ?? $this->getContext($context, "def_attr"));
                // line 24
                echo "
            ";
                // line 25
                $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => (((" product-sticker--" .                 // line 26
($context["mode"] ?? $this->getContext($context, "mode"))) . "-") . $this->getAttribute($context["sticker"], "type", array()))));
                // line 28
                echo "
            ";
                // line 29
                if ((($context["mode"] ?? $this->getContext($context, "mode")) == "icon")) {
                    // line 30
                    echo "                ";
                    $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => (" product-sticker--" .                     // line 31
($context["position"] ?? $this->getContext($context, "position")))));
                    // line 33
                    echo "            ";
                }
                // line 34
                echo "
            <div ";
                // line 35
                $this->displayBlock("block_attributes", $context, $blocks);
                echo ">";
                // line 36
                if ((($context["mode"] ?? $this->getContext($context, "mode")) == "text")) {
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.product.sticker." . $this->getAttribute($context["sticker"], "type", array()))), "html", null, true);
                }
                // line 39
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/page/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  117 => 39,  114 => 37,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  101 => 31,  99 => 30,  97 => 29,  94 => 28,  92 => 26,  91 => 25,  88 => 24,  85 => 23,  68 => 22,  65 => 21,  63 => 20,  60 => 19,  57 => 18,  54 => 15,  51 => 14,  48 => 11,  46 => 10,  43 => 9,  40 => 6,  38 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block product_sticker_widget %}
    {% if
        stickers is defined and
        stickers|length
    %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' product-sticker'
        }) %}

        {% if mode == 'icon' %}
            {% set attr = layout_attr_defaults(attr, {
                '~class': ' product-sticker--icon'
            }) %}
        {% elseif mode == 'text' %}
            {% set attr = layout_attr_defaults(attr, {
                '~class': ' product-sticker--text'
            }) %}
        {% endif %}

        {% set def_attr = attr %}

        {% for sticker in stickers %}
            {% set attr = def_attr %}

            {% set attr = layout_attr_defaults(attr, {
                '~class': ' product-sticker--' ~ mode ~ '-' ~ sticker.type
            }) %}

            {% if mode == 'icon' %}
                {% set attr = layout_attr_defaults(attr, {
                    '~class': ' product-sticker--' ~ position
                }) %}
            {% endif %}

            <div {{ block('block_attributes') }}>
                {%- if mode == 'text' -%}
                    {{- ('oro.product.sticker.' ~ sticker.type)|trans -}}
                {%- endif -%}
            </div>
        {% endfor %}
    {% endif %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/page/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/page/layout.html.twig");
    }
}
