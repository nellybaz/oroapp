<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/default/page/main_menu.html.twig */
class __TwigTemplate_2b75db976e225d221890ec918b809a0b7af7e91fa5843d9c3d805c8412a54bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_categories_main_menu_widget' => array($this, 'block__categories_main_menu_widget'),
            '_categories_main_menu_list_widget' => array($this, 'block__categories_main_menu_list_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/default/page/main_menu.html.twig"));

        // line 1
        $this->displayBlock('_categories_main_menu_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_categories_main_menu_list_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__categories_main_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_categories_main_menu_widget"));

        // line 2
        echo "    ";
        if ( !(null === ($context["max_size"] ?? $this->getContext($context, "max_size")))) {
            // line 3
            echo "        ";
            $context["categories"] = twig_slice($this->env, ($context["categories"] ?? $this->getContext($context, "categories")), 0, ($context["max_size"] ?? $this->getContext($context, "max_size")));
        }
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            $context["hasSublist"] =  !twig_test_empty($this->getAttribute($context["category"], "childCategories", array()));
            // line 8
            echo "        <li class=\"main-menu__item
            ";
            // line 9
            echo ((($context["hasSublist"] ?? $this->getContext($context, "hasSublist"))) ? ("main-menu__item--ancestor") : (""));
            echo "
            main-menu__item--";
            // line 10
            echo twig_escape_filter($this->env, ((((twig_length_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array())) == 1)) ? ("floated") : ("centered")) . "-dropdown"), "html", null, true);
            echo "\">
            ";
            // line 11
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? $this->getContext($context, "block")), array("category" => $context["category"]));
            // line 12
            echo "            ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
        </li>";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block__categories_main_menu_list_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_categories_main_menu_list_widget"));

        // line 18
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " main-menu main-menu__categories"));
        // line 21
        echo "
    <ul ";
        // line 22
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 23
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/default/page/main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 23,  118 => 22,  115 => 21,  112 => 18,  106 => 17,  84 => 12,  82 => 11,  78 => 10,  74 => 9,  71 => 8,  69 => 7,  52 => 6,  49 => 5,  45 => 3,  42 => 2,  36 => 1,  29 => 17,  26 => 16,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _categories_main_menu_widget %}
    {% if (max_size is not null ) %}
        {% set categories = categories[0:max_size] %}
    {%- endif %}

    {% for category in categories -%}
        {% set hasSublist = category.childCategories is not empty %}
        <li class=\"main-menu__item
            {{ hasSublist ? \"main-menu__item--ancestor\": \"\" }}
            main-menu__item--{{ (block.children|length == 1 ? \"floated\" : \"centered\") ~ \"-dropdown\" }}\">
            {% do block|merge_context({'category': category}) %}
            {{ block('container_widget') }}
        </li>
    {%- endfor %}
{% endblock %}

{% block _categories_main_menu_list_widget %}
    {% set attr =  layout_attr_defaults(attr, {
        '~class': ' main-menu main-menu__categories'
    }) %}

    <ul {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </ul>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/default/page/main_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/default/page/main_menu.html.twig");
    }
}
