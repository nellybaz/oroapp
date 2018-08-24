<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig */
class __TwigTemplate_eb60bf318b4dfa176222d10fa0c99ec32c03fc51ae94486e3d5598c4250325e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_categories_main_menu_list_widget' => array($this, 'block__categories_main_menu_list_widget'),
            '_categories_main_menu_widget' => array($this, 'block__categories_main_menu_widget'),
            '_categories_main_menu_first_level_item_widget' => array($this, 'block__categories_main_menu_first_level_item_widget'),
            '_categories_main_menu_second_level_widget' => array($this, 'block__categories_main_menu_second_level_widget'),
            '_categories_main_menu_second_level_item_widget' => array($this, 'block__categories_main_menu_second_level_item_widget'),
            '_categories_main_menu_third_level_widget' => array($this, 'block__categories_main_menu_third_level_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig"));

        // line 1
        $this->displayBlock('_categories_main_menu_list_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_categories_main_menu_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_categories_main_menu_first_level_item_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('_categories_main_menu_second_level_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('_categories_main_menu_second_level_item_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('_categories_main_menu_third_level_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__categories_main_menu_list_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_categories_main_menu_list_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " main-menu"));
        // line 5
        echo "
    <ul ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block__categories_main_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_categories_main_menu_widget"));

        // line 12
        echo "    ";
        if ( !(null === ($context["max_size"] ?? $this->getContext($context, "max_size")))) {
            // line 13
            echo "        ";
            $context["categories"] = twig_slice($this->env, ($context["categories"] ?? $this->getContext($context, "categories")), 0, ($context["max_size"] ?? $this->getContext($context, "max_size")));
        }
        // line 15
        echo "
    ";
        // line 16
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
            // line 17
            echo "<li class=\"main-menu__item ";
            echo (($this->getAttribute($context["category"], "hasSublist", array())) ? ("main-menu__item--ancestor") : (""));
            echo "\">
            ";
            // line 18
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? $this->getContext($context, "block")), array("category" => $context["category"]));
            // line 19
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

    // line 24
    public function block__categories_main_menu_first_level_item_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_categories_main_menu_first_level_item_widget"));

        // line 25
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()), "includeSubcategories" => true)), "html", null, true);
        echo "\"
       class=\"main-menu__link\">
        <span class=\"main-menu__text\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "title", array()), "html", null, true);
        echo " </span>
        ";
        // line 28
        if ($this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "hasSublist", array())) {
            // line 29
            echo "            <span class=\"main-menu__taptick\">
                <i class=\"fa-angle-down fa--no-offset\"></i>
            </span>
        ";
        }
        // line 33
        echo "    </a>
    ";
        // line 34
        if ($this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "hasSublist", array())) {
            // line 35
            echo "        <button class=\"main-menu__button-arrow\"
                data-toggle=\"dropdown\"
                data-go-to=\"next\"
        >
            <i class=\"fa-angle-down fa--no-offset\"></i>
        </button>
        ";
            // line 42
            echo "        <div class=\"main-menu__sublist-container\"
             data-header-row-toggle
             data-scroll=\"true\">
            <div class=\"main-menu-columns\">
                <div class=\"main-menu-column main-menu-column\">
                    <div class=\"main-menu-column__title\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.menu.by_category.label"), "html", null, true);
            echo "</div>
                    <div class=\"main-menu-column__inner\">
                        <ul class=\"main-menu-column__inner-left\">
                            ";
            // line 50
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? $this->getContext($context, "block")), array("categories" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "childCategories", array())));
            // line 51
            echo "                            ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
            echo "
                            <li class=\"main-menu-column__item\">
                                <a class=\"main-menu-column__link\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()), "includeSubcategories" => true)), "html", null, true);
            echo "\">
                                    ";
            // line 54
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.menu.all.label") . " ") . $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "title", array())), "html", null, true);
            echo "
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ";
            // line 63
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block__categories_main_menu_second_level_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_categories_main_menu_second_level_widget"));

        // line 67
        echo "    ";
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
            // line 68
            echo "        <li class=\"main-menu-column__item\">
            <a class=\"main-menu-column__link\"
               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "includeSubcategories" => true)), "html", null, true);
            echo "
            \">
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
        ";
            // line 75
            if ($this->getAttribute($context["category"], "hasSublist", array())) {
                // line 76
                echo "            ";
                $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? $this->getContext($context, "block")), array("categories" => $this->getAttribute($context["category"], "childCategories", array())));
                // line 77
                echo "            ";
                $this->displayBlock("container_widget", $context, $blocks);
                echo "
        ";
            }
            // line 79
            echo "    ";
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

    // line 82
    public function block__categories_main_menu_second_level_item_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_categories_main_menu_second_level_item_widget"));

        // line 83
        echo "    ";
        $context["class"] = ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " main-menu__subcategory");
        // line 84
        echo "    ";
        $context["class"] = (($this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "hasSublist", array())) ? ((($context["class"] ?? $this->getContext($context, "class")) . " main-menu__sublist--has-sibling")) : (($context["class"] ?? $this->getContext($context, "class"))));
        // line 85
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ($context["class"] ?? $this->getContext($context, "class"))));
        // line 86
        echo "
    <ul ";
        // line 87
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <li class=\"main-menu__subcategory-item\">
            <a class=\"link\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()), "includeSubcategories" => true)), "html", null, true);
        echo "\">
                ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "title", array()), "html", null, true);
        echo "
            </a>
            ";
        // line 92
        if ($this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "hasSublist", array())) {
            // line 93
            echo "                ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? $this->getContext($context, "block")), array("categories" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "childCategories", array())));
            // line 94
            echo "                ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
            ";
        }
        // line 96
        echo "        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block__categories_main_menu_third_level_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_categories_main_menu_third_level_widget"));

        // line 101
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 102
            echo "        <li class=\"main-menu-column__subitem\">
            <a class=\"main-menu-column__link\"
               href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "includeSubcategories" => true)), "html", null, true);
            echo "
            \">
                ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  370 => 106,  365 => 104,  361 => 102,  356 => 101,  350 => 100,  341 => 96,  335 => 94,  332 => 93,  330 => 92,  325 => 90,  321 => 89,  316 => 87,  313 => 86,  310 => 85,  307 => 84,  304 => 83,  298 => 82,  279 => 79,  273 => 77,  270 => 76,  268 => 75,  262 => 72,  257 => 70,  253 => 68,  235 => 67,  229 => 66,  221 => 63,  210 => 54,  206 => 53,  200 => 51,  198 => 50,  192 => 47,  185 => 42,  177 => 35,  175 => 34,  172 => 33,  166 => 29,  164 => 28,  160 => 27,  154 => 25,  148 => 24,  126 => 19,  124 => 18,  119 => 17,  102 => 16,  99 => 15,  95 => 13,  92 => 12,  86 => 11,  76 => 7,  72 => 6,  69 => 5,  66 => 2,  60 => 1,  53 => 100,  50 => 99,  48 => 82,  45 => 81,  43 => 66,  40 => 65,  38 => 24,  35 => 23,  33 => 11,  30 => 10,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _categories_main_menu_list_widget %}
    {% set attr =  layout_attr_defaults(attr, {
    '~class': ' main-menu'
    }) %}

    <ul {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </ul>
{% endblock %}

{% block _categories_main_menu_widget %}
    {% if (max_size is not null ) %}
        {% set categories = categories[0:max_size] %}
    {%- endif %}

    {% for category in categories -%}
        <li class=\"main-menu__item {{ category.hasSublist ? \"main-menu__item--ancestor\": \"\" }}\">
            {% do block|merge_context({'category': category}) %}
            {{ block('container_widget') }}
        </li>
    {%- endfor %}
{% endblock %}

{% block _categories_main_menu_first_level_item_widget %}
    <a href=\"{{ path('oro_product_frontend_product_index', {'categoryId': category.id, 'includeSubcategories': true}) }}\"
       class=\"main-menu__link\">
        <span class=\"main-menu__text\">{{ category.title }} </span>
        {% if category.hasSublist %}
            <span class=\"main-menu__taptick\">
                <i class=\"fa-angle-down fa--no-offset\"></i>
            </span>
        {% endif %}
    </a>
    {% if category.hasSublist %}
        <button class=\"main-menu__button-arrow\"
                data-toggle=\"dropdown\"
                data-go-to=\"next\"
        >
            <i class=\"fa-angle-down fa--no-offset\"></i>
        </button>
        {# START TOP NAVIGATION SUBLIST #}
        <div class=\"main-menu__sublist-container\"
             data-header-row-toggle
             data-scroll=\"true\">
            <div class=\"main-menu-columns\">
                <div class=\"main-menu-column main-menu-column\">
                    <div class=\"main-menu-column__title\">{{ 'oro.catalog.menu.by_category.label'|trans }}</div>
                    <div class=\"main-menu-column__inner\">
                        <ul class=\"main-menu-column__inner-left\">
                            {% do block|merge_context({'categories': category.childCategories }) %}
                            {{ block_widget(block) }}
                            <li class=\"main-menu-column__item\">
                                <a class=\"main-menu-column__link\" href=\"{{ path('oro_product_frontend_product_index', {'categoryId': category.id, 'includeSubcategories': true}) }}\">
                                    {{ 'oro.catalog.menu.all.label'|trans ~ \" \" ~ category.title }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {# ENDTOP NAVIGATION SUBLIST#}
    {% endif %}
{% endblock %}

{% block _categories_main_menu_second_level_widget %}
    {% for category in categories %}
        <li class=\"main-menu-column__item\">
            <a class=\"main-menu-column__link\"
               href=\"{{ path('oro_product_frontend_product_index', {'categoryId': category.id, 'includeSubcategories': true}) }}
            \">
                {{ category.title }}
            </a>
        </li>
        {% if category.hasSublist %}
            {% do block|merge_context({'categories': category.childCategories }) %}
            {{ block('container_widget') }}
        {% endif %}
    {% endfor %}
{% endblock %}

{% block _categories_main_menu_second_level_item_widget %}
    {% set class = attr.class|default('') ~ \" main-menu__subcategory\" %}
    {% set class = category.hasSublist ? class ~ \" main-menu__sublist--has-sibling\" : class %}
    {% set attr = attr|merge({class: class}) %}

    <ul {{ block('block_attributes') }}>
        <li class=\"main-menu__subcategory-item\">
            <a class=\"link\" href=\"{{ path('oro_product_frontend_product_index', {'categoryId': category.id, 'includeSubcategories': true}) }}\">
                {{ category.title }}
            </a>
            {% if category.hasSublist %}
                {% do block|merge_context({'categories': category.childCategories }) %}
                {{ block('container_widget') }}
            {% endif %}
        </li>
    </ul>
{% endblock %}

{% block _categories_main_menu_third_level_widget %}
    {% for category in categories %}
        <li class=\"main-menu-column__subitem\">
            <a class=\"main-menu-column__link\"
               href=\"{{ path('oro_product_frontend_product_index', {'categoryId': category.id, 'includeSubcategories': true}) }}
            \">
                {{ category.title }}
            </a>
        </li>
    {% endfor %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig");
    }
}
