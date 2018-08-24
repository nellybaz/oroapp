<?php

/* OroCustomerBundle:layouts/blank/page:top_nav_logged_dropdown.html.twig */
class __TwigTemplate_4384c767f11458e07c9dd78813bc6857940b671c3885e5a1f9461940a039dea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_top_nav_controls_dropdown_container_widget' => array($this, 'block__top_nav_controls_dropdown_container_widget'),
            '_top_nav_customer_dropdown_menu_widget' => array($this, 'block__top_nav_customer_dropdown_menu_widget'),
            '_top_nav_customer_dropdown_trigger_widget' => array($this, 'block__top_nav_customer_dropdown_trigger_widget'),
            '_top_nav_user_name_widget' => array($this, 'block__top_nav_user_name_widget'),
            '_top_nav_customer_dropdown_sign_out_link_widget' => array($this, 'block__top_nav_customer_dropdown_sign_out_link_widget'),
            '_top_nav_customer_menu_list_widget' => array($this, 'block__top_nav_customer_menu_list_widget'),
            '_top_nav_customer_menu_widget' => array($this, 'block__top_nav_customer_menu_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_top_nav_controls_dropdown_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_top_nav_customer_dropdown_menu_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_top_nav_customer_dropdown_trigger_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('_top_nav_user_name_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('_top_nav_customer_dropdown_sign_out_link_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('_top_nav_customer_menu_list_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('_top_nav_customer_menu_widget', $context, $blocks);
    }

    // line 1
    public function block__top_nav_controls_dropdown_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid__column grid__column--5 topbar-customer-menu dropdown"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 11
    public function block__top_nav_customer_dropdown_menu_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-customer-menu__dropdown dropdown-menu"));
        // line 15
        echo "
    <div ";
        // line 16
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 21
    public function block__top_nav_customer_dropdown_trigger_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-customer-menu__trigger", "type" => "button", "data-toggle" => "dropdown"));
        // line 27
        echo "
    <button ";
        // line 28
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <span class=\"topbar-customer-menu__greeting\">
            ";
        // line 30
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </span>
        <i class=\"fa-angle-down\"></i>
    </button>
";
    }

    // line 36
    public function block__top_nav_user_name_widget($context, array $blocks = array())
    {
        // line 37
        echo "    <span title=\"";
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</span>
";
    }

    // line 40
    public function block__top_nav_customer_dropdown_sign_out_link_widget($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " link sign-out-link"));
        // line 44
        echo "
    ";
        // line 45
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 48
    public function block__top_nav_customer_menu_list_widget($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-customer-menu-list"));
        // line 52
        echo "
    <ul ";
        // line 53
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 54
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </ul>
";
    }

    // line 58
    public function block__top_nav_customer_menu_widget($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context["requestUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 60
        echo "    ";
        $context["found"] = false;
        // line 61
        echo "
    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 63
                echo "        ";
                $context["currentUrl"] = $this->getAttribute($context["child"], "uri", array());
                // line 64
                echo "        ";
                $context["itemCurrentClass"] = "";
                // line 65
                echo "        ";
                $context["linkCurrentClass"] = "";
                // line 66
                echo "        ";
                if ((twig_in_filter(($context["currentUrl"] ?? null), ($context["requestUrl"] ?? null)) &&  !($context["found"] ?? null))) {
                    // line 67
                    echo "            ";
                    $context["itemCurrentClass"] = "current";
                    // line 68
                    echo "            ";
                    $context["linkCurrentClass"] = "current";
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "
        <li class=\"topbar-customer-menu-list__item ";
                // line 71
                echo twig_escape_filter($this->env, ($context["itemCurrentClass"] ?? null), "html", null, true);
                echo "\">
            <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "uri", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (" topbar-customer-menu-list__link " . ($context["linkCurrentClass"] ?? null)), "html", null, true);
                echo "\">";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array())), "html", null, true);
                // line 74
                echo "</a>
        </li>
        ";
                // line 76
                if ((twig_in_filter(($context["currentUrl"] ?? null), ($context["requestUrl"] ?? null)) &&  !($context["found"] ?? null))) {
                    // line 77
                    echo "            ";
                    $context["found"] = true;
                    // line 78
                    echo "        ";
                }
                // line 79
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/page:top_nav_logged_dropdown.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 79,  231 => 78,  228 => 77,  226 => 76,  222 => 74,  220 => 73,  215 => 72,  211 => 71,  208 => 70,  205 => 69,  202 => 68,  199 => 67,  196 => 66,  193 => 65,  190 => 64,  187 => 63,  182 => 62,  179 => 61,  176 => 60,  173 => 59,  170 => 58,  163 => 54,  159 => 53,  156 => 52,  153 => 49,  150 => 48,  144 => 45,  141 => 44,  138 => 41,  135 => 40,  126 => 37,  123 => 36,  114 => 30,  109 => 28,  106 => 27,  103 => 22,  100 => 21,  93 => 17,  89 => 16,  86 => 15,  83 => 12,  80 => 11,  73 => 7,  69 => 6,  66 => 5,  63 => 2,  60 => 1,  56 => 58,  53 => 57,  51 => 48,  48 => 47,  46 => 40,  43 => 39,  41 => 36,  38 => 35,  36 => 21,  33 => 20,  31 => 11,  28 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/page:top_nav_logged_dropdown.html.twig", "");
    }
}
