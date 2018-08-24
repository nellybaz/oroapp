<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig */
class __TwigTemplate_c73e4f751948731d96581a4736e11fdc7cbd3cf4d75940cada4dd4e0c87a54a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quick_access_menu_widget' => array($this, 'block__quick_access_menu_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig"));

        // line 1
        $this->displayBlock('_quick_access_menu_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block__quick_access_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_quick_access_menu_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " quick-access", "data-dom-relocation-options" => array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-extra-container]")))));
        // line 15
        echo "    
    ";
        // line 16
        $context["firstItem"] = true;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 18
            echo "        ";
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 19
                echo "            ";
                if (($context["firstItem"] ?? $this->getContext($context, "firstItem"))) {
                    // line 20
                    echo "                <div ";
                    $this->displayBlock("block_attributes", $context, $blocks);
                    echo ">
                    <ul class=\"quick-access__list\">
            ";
                }
                // line 23
                echo "
            ";
                // line 24
                if (($this->getAttribute($context["child"], "name", array()) == "orders")) {
                    // line 25
                    echo "                ";
                    $context["badgeClass"] = "quick-access__icon--light";
                    // line 26
                    echo "                ";
                    $context["iconClass"] = "fa-clipboard";
                    // line 27
                    echo "            ";
                } elseif (($this->getAttribute($context["child"], "name", array()) == "quotes")) {
                    // line 28
                    echo "                ";
                    $context["badgeClass"] = "";
                    // line 29
                    echo "                ";
                    $context["iconClass"] = "fa-tags";
                    // line 30
                    echo "            ";
                } else {
                    // line 31
                    echo "                ";
                    $context["badgeClass"] = "quick-access__icon--dark";
                    // line 32
                    echo "                ";
                    $context["iconClass"] = "fa-bolt";
                    // line 33
                    echo "            ";
                }
                // line 34
                echo "
            <li class=\"quick-access__item\">
                <a class=\"quick-access__link\"  href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "uri", array()), "html", null, true);
                echo "\">
                    <span class=\"quick-access__icon ";
                // line 37
                echo twig_escape_filter($this->env, ($context["badgeClass"] ?? $this->getContext($context, "badgeClass")), "html", null, true);
                echo "\">
                        <i class=\"";
                // line 38
                echo twig_escape_filter($this->env, ($context["iconClass"] ?? $this->getContext($context, "iconClass")), "html", null, true);
                echo "\"></i>
                    </span>
                    ";
                // line 40
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 41
                echo "                    <span class=\"quick-access__text\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                echo "</span>
                </a>
            </li>

            ";
                // line 45
                $context["firstItem"] = false;
                // line 46
                echo "        ";
            }
            // line 47
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    
    ";
        // line 49
        if ((($context["firstItem"] ?? $this->getContext($context, "firstItem")) == false)) {
            // line 50
            echo "            </ul>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 50,  155 => 49,  152 => 48,  138 => 47,  135 => 46,  133 => 45,  125 => 41,  123 => 40,  118 => 38,  114 => 37,  110 => 36,  106 => 34,  103 => 33,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  85 => 27,  82 => 26,  79 => 25,  77 => 24,  74 => 23,  67 => 20,  64 => 19,  61 => 18,  43 => 17,  41 => 16,  38 => 15,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _quick_access_menu_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' quick-access',
        'data-dom-relocation-options': {
            responsive: [
                {
                    viewport: {
                        maxScreenType: 'tablet',
                    },
                    moveTo: '[data-main-menu-extra-container]'
                }
            ]
        }
    }) %}
    
    {% set firstItem = true %}
    {% for child in item.children %}
        {% if child.displayed and child.extras.isAllowed %}
            {% if firstItem %}
                <div {{ block('block_attributes') }}>
                    <ul class=\"quick-access__list\">
            {% endif %}

            {% if child.name == 'orders' %}
                {% set badgeClass = 'quick-access__icon--light' %}
                {% set iconClass = 'fa-clipboard' %}
            {% elseif child.name == 'quotes' %}
                {% set badgeClass = '' %}
                {% set iconClass = 'fa-tags' %}
            {% else %}
                {% set badgeClass = 'quick-access__icon--dark' %}
                {% set iconClass = 'fa-bolt' %}
            {% endif %}

            <li class=\"quick-access__item\">
                <a class=\"quick-access__link\"  href=\"{{ child.uri }}\">
                    <span class=\"quick-access__icon {{ badgeClass }}\">
                        <i class=\"{{ iconClass }}\"></i>
                    </span>
                    {% set label = child.extras.custom is defined and child.extras.custom == true ? child.label : child.label|trans %}
                    <span class=\"quick-access__text\">{{ label }}</span>
                </a>
            </li>

            {% set firstItem = false %}
        {% endif %}
    {% endfor %}
    
    {% if firstItem == false %}
            </ul>
        </div>
    {% endif %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig");
    }
}
