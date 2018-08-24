<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig */
class __TwigTemplate_8dd4c5fa1b2cd238d382211c466e417f2f5f1fb2c98af7ed2d5405b12f45293b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sale_representative_info_widget' => array($this, 'block_sale_representative_info_widget'),
            '_sales_menu_user_info_widget' => array($this, 'block__sales_menu_user_info_widget'),
            '_sales_menu_blank_widget' => array($this, 'block__sales_menu_blank_widget'),
            '_sales_menu_text_info_widget' => array($this, 'block__sales_menu_text_info_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig"));

        // line 1
        $this->displayBlock('sale_representative_info_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_sales_menu_user_info_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('_sales_menu_blank_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('_sales_menu_text_info_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_sale_representative_info_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sale_representative_info_widget"));

        // line 2
        echo "    ";
        $this->displayBlock($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "widget", array()), $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block__sales_menu_user_info_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sales_menu_user_info_widget"));

        // line 6
        echo "    <div class=\"information-nav\" id=\"sales-contact-info\">
        <h3 class=\"information-nav__title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.frontend.navigation.items.sales.label"), "html", null, true);
        echo "</h3>
        <ul class=\" information-nav__list\">
            ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "name", array())) {
            // line 10
            echo "                <li class=\" information-nav__item first\">
                    <span class=\" information-nav__item-content\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "name", array()), "html", null, true);
            echo "</span>
                </li>
            ";
        }
        // line 14
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "phone", array())) {
            // line 15
            echo "                <li class=\" information-nav__item\">
                    <a
                        href=\"tel:";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "phone", array()), "html", null, true);
            echo "\"
                        class=\" information-nav__item-content\"
                    >";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "phone", array()), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 22
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "email", array())) {
            // line 23
            echo "                <li class=\" information-nav__item last\">
                    <a href=\"mailto:";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "email", array()), "html", null, true);
            echo "\" class=\" information-nav__item-content\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "email", array()), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 27
        echo "        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block__sales_menu_blank_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sales_menu_blank_widget"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block__sales_menu_text_info_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sales_menu_text_info_widget"));

        // line 35
        echo "    <div class=\"information-nav\" id=\"sales-contact-info\">
        <h3 class=\"information-nav__title\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.frontend.navigation.items.sales.label"), "html", null, true);
        echo "</h3>
        ";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "manualText", array())) {
            // line 38
            echo "            ";
            $context["infoRows"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? $this->getContext($context, "blockView")), "attributes", array()), "contactInfo", array()), "manualText", array()), "
");
            // line 39
            echo "            <ul class=\" information-nav__list\">
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["infoRows"] ?? $this->getContext($context, "infoRows")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 41
                echo "                <li class=\" information-nav__item first\">
                    <span class=\" information-nav__item-content\">";
                // line 42
                echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                echo "</span>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </ul>
        ";
        }
        // line 47
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 47,  179 => 45,  170 => 42,  167 => 41,  163 => 40,  160 => 39,  156 => 38,  154 => 37,  150 => 36,  147 => 35,  141 => 34,  130 => 31,  121 => 27,  113 => 24,  110 => 23,  107 => 22,  101 => 19,  96 => 17,  92 => 15,  89 => 14,  83 => 11,  80 => 10,  78 => 9,  73 => 7,  70 => 6,  64 => 5,  54 => 2,  48 => 1,  41 => 34,  38 => 33,  36 => 31,  33 => 30,  31 => 5,  28 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sale_representative_info_widget %}
    {{ block(blockView.widget) }}
{% endblock %}

{% block _sales_menu_user_info_widget %}
    <div class=\"information-nav\" id=\"sales-contact-info\">
        <h3 class=\"information-nav__title\">{{ 'oro.commercemenu.frontend.navigation.items.sales.label'|trans }}</h3>
        <ul class=\" information-nav__list\">
            {% if blockView.attributes.contactInfo.name %}
                <li class=\" information-nav__item first\">
                    <span class=\" information-nav__item-content\">{{ blockView.attributes.contactInfo.name }}</span>
                </li>
            {% endif %}
            {% if blockView.attributes.contactInfo.phone %}
                <li class=\" information-nav__item\">
                    <a
                        href=\"tel:{{ blockView.attributes.contactInfo.phone }}\"
                        class=\" information-nav__item-content\"
                    >{{ blockView.attributes.contactInfo.phone }}</a>
                </li>
            {% endif %}
            {% if blockView.attributes.contactInfo.email %}
                <li class=\" information-nav__item last\">
                    <a href=\"mailto:{{ blockView.attributes.contactInfo.email }}\" class=\" information-nav__item-content\">{{ blockView.attributes.contactInfo.email }}</a>
                </li>
            {% endif %}
        </ul>
    </div>
{% endblock %}

{% block _sales_menu_blank_widget %}
{% endblock %}

{% block _sales_menu_text_info_widget %}
    <div class=\"information-nav\" id=\"sales-contact-info\">
        <h3 class=\"information-nav__title\">{{ 'oro.commercemenu.frontend.navigation.items.sales.label'|trans }}</h3>
        {% if blockView.attributes.contactInfo.manualText %}
            {% set infoRows = blockView.attributes.contactInfo.manualText|split('\\n') %}
            <ul class=\" information-nav__list\">
            {% for row in infoRows %}
                <li class=\" information-nav__item first\">
                    <span class=\" information-nav__item-content\">{{ row }}</span>
                </li>
            {% endfor %}
            </ul>
        {% endif %}
    </div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig");
    }
}
