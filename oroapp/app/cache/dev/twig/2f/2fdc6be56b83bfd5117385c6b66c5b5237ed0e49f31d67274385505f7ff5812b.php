<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/footer_menu.html.twig */
class __TwigTemplate_8b5af90a754f479486b3696f2149c545538a17ba246e2df10021d7d02a47e1f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_footer_menu_widget' => array($this, 'block__footer_menu_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/footer_menu.html.twig"));

        // line 1
        $this->displayBlock('_footer_menu_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block__footer_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_footer_menu_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " information-nav__list", "data-collapse-container-footer" => true));
        // line 6
        echo "    ";
        $context["child_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["child_attr"] ?? $this->getContext($context, "child_attr")), array("~class" => " information-nav__item"));
        // line 9
        echo "    ";
        $context["link_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["link_attr"] ?? $this->getContext($context, "link_attr")), array("~class" => " information-nav__item-content"));
        // line 12
        echo "
    ";
        // line 13
        $context["collapseView"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("viewport" => array("maxScreenType" => "tablet-small"), "component" => "oroui/js/app/components/jquery-widget-component", "widgetModule" => "oroui/js/widget/collapse-widget", "trigger" => "[data-collapse-trigger-footer]", "container" => "[data-collapse-container-footer]", "open" => false));
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        ";
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
            // line 26
            echo "            ";
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 27
                echo "                <div class=\"information-nav information-nav--responsive\">
                    <div class=\"collapse-view\"
                        data-page-component-module=\"oroui/js/app/components/viewport-component\"
                        data-page-component-options=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["collapseView"] ?? $this->getContext($context, "collapseView"))), "html", null, true);
                echo "\">
                        ";
                // line 31
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 32
                echo "                        <h3 class=\"information-nav__title\" data-collapse-trigger-footer>
                            <span class=\"information-nav__icon\">
                                <i class=\"collapse-view__trigger-icon fa-caret-right\"></i>
                            </span>";
                // line 36
                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                // line 37
                echo "</h3>
                        ";
                // line 38
                $context["item"] = $context["child"];
                // line 39
                echo "                        ";
                $this->displayBlock("menu_widget", $context, $blocks);
                echo "
                    </div>
                </div>
            ";
            }
            // line 43
            echo "        ";
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
        // line 44
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/footer_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  106 => 43,  98 => 39,  96 => 38,  93 => 37,  91 => 36,  86 => 32,  84 => 31,  80 => 30,  75 => 27,  72 => 26,  54 => 25,  52 => 24,  49 => 23,  47 => 13,  44 => 12,  41 => 9,  38 => 6,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _footer_menu_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' information-nav__list',
        'data-collapse-container-footer': true
    }) %}
    {% set child_attr = layout_attr_defaults(child_attr, {
        '~class': ' information-nav__item'
    }) %}
    {% set link_attr = layout_attr_defaults(link_attr, {
        '~class': ' information-nav__item-content'
    }) %}

    {% set collapseView =  layout_attr_defaults(attr, {
        viewport: {
            maxScreenType: 'tablet-small',
        },
        component: 'oroui/js/app/components/jquery-widget-component',
        widgetModule: 'oroui/js/widget/collapse-widget',
        trigger: '[data-collapse-trigger-footer]',
        container: '[data-collapse-container-footer]',
        open: false
    }) %}

    {% spaceless %}
        {% for child in item.children %}
            {% if child.displayed and child.extras.isAllowed %}
                <div class=\"information-nav information-nav--responsive\">
                    <div class=\"collapse-view\"
                        data-page-component-module=\"oroui/js/app/components/viewport-component\"
                        data-page-component-options=\"{{ collapseView|json_encode }}\">
                        {% set label = child.extras.custom is defined and child.extras.custom == true ? child.label : child.label|trans %}
                        <h3 class=\"information-nav__title\" data-collapse-trigger-footer>
                            <span class=\"information-nav__icon\">
                                <i class=\"collapse-view__trigger-icon fa-caret-right\"></i>
                            </span>
                            {{- label -}}
                        </h3>
                        {% set item = child %}
                        {{ block('menu_widget') }}
                    </div>
                </div>
            {% endif %}
        {% endfor %}
    {% endspaceless %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/footer_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/footer_menu.html.twig");
    }
}
