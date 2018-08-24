<?php

/* OroNavigationBundle:Menu:application_menu_desktop_top.html.twig */
class __TwigTemplate_03a2925a7ba072b552dff6e6f90f15e6a1f95f56f4c1fd3e40e6bdd083c446e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", 1);
        $this->blocks = array(
            'list_wrapper' => array($this, 'block_list_wrapper'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'children' => array($this, 'block_children'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list_wrapper($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute(($context["item"] ?? null), "hasChildren", array())) {
            // line 5
            echo "        ";
            if (($this->getAttribute(($context["item"] ?? null), "level", array()) == 1)) {
                // line 6
                echo "            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__placeholder\">
                <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__scrollable\">";
                // line 8
                $this->displayBlock("list", $context, $blocks);
                // line 9
                echo "</div>
            </div>
        ";
            } elseif (($this->getAttribute(            // line 11
($context["item"] ?? null), "level", array()) == 2)) {
                // line 12
                echo "            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__child\">";
                // line 13
                $this->displayBlock("list", $context, $blocks);
                // line 14
                echo "</div>
        ";
            } else {
                // line 16
                $this->displayBlock("list", $context, $blocks);
            }
            // line 18
            echo "    ";
        }
    }

    // line 21
    public function block_item($context, array $blocks = array())
    {
        // line 22
        if (($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 23
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown"));
            // line 24
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => "dropdown-menu"));
        } else {
            // line 26
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "single"));
        }
        // line 28
        if ((($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "routes", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "routes", array(), "any", false, true), 0, array(), "array", true, true))) {
            // line 29
            $context["itemAttributes"] = twig_array_merge(($context["itemAttributes"] ?? null), array("data-route" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "routes", array()), 0, array(), "array")));
            // line 30
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "routes", array())) > 1)) {
                // line 31
                $context["itemAttributes"] = twig_array_merge(($context["itemAttributes"] ?? null), array("data-routes" => twig_jsonencode_filter(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "routes", array()), 1))));
            }
        }
        // line 34
        $this->displayBlock("item_renderer", $context, $blocks);
    }

    // line 37
    public function block_linkElement($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", 38);
        // line 39
        echo "
    ";
        // line 40
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array())) && ($this->getAttribute(($context["item"] ?? null), "level", array()) === 0))) {
            // line 41
            echo "        ";
            $context["linkAttributes"] = twig_array_merge(($context["linkAttributes"] ?? null), array("class" =>             // line 42
$context["oro_menu"]->getadd_attribute_values(($context["linkAttributes"] ?? null), "class", array(0 => "dropdown-toggle")), "data-toggle" => "dropdown"));
            // line 45
            echo "    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if ((twig_test_empty($this->getAttribute(($context["item"] ?? null), "uri", array())) || ($this->getAttribute(($context["item"] ?? null), "uri", array()) == "#"))) {
            // line 48
            echo "        ";
            $context["linkAttributes"] = twig_array_merge(($context["linkAttributes"] ?? null), array("class" =>             // line 49
$context["oro_menu"]->getadd_attribute_values(($context["linkAttributes"] ?? null), "class", array(0 => "unclickable"))));
            // line 51
            echo "    ";
        }
        // line 52
        echo "
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes(($context["linkAttributes"] ?? null));
        echo "><span class=\"title\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span></a>
";
    }

    // line 56
    public function block_children($context, array $blocks = array())
    {
        // line 57
        ob_start();
        // line 58
        $this->displayParentBlock("children", $context, $blocks);
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        if ((($context["content"] ?? null) && ($this->getAttribute(($context["item"] ?? null), "level", array()) === 1))) {
            // line 61
            $context["labelAttributes"] = $this->getAttribute(($context["item"] ?? null), "labelAttributes", array());
            // line 62
            echo "        <li class=\"dropdown-menu-title\">";
            $this->displayBlock("spanElement", $context, $blocks);
            echo "</li>
        <li class=\"divider\"><span></span></li>
    ";
        }
        // line 65
        echo ($context["content"] ?? null);
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 65,  148 => 62,  146 => 61,  144 => 60,  141 => 58,  139 => 57,  136 => 56,  126 => 53,  123 => 52,  120 => 51,  118 => 49,  116 => 48,  114 => 47,  111 => 46,  108 => 45,  106 => 42,  104 => 41,  102 => 40,  99 => 39,  96 => 38,  93 => 37,  89 => 34,  85 => 31,  83 => 30,  81 => 29,  79 => 28,  76 => 26,  73 => 24,  71 => 23,  69 => 22,  66 => 21,  61 => 18,  58 => 16,  54 => 14,  52 => 13,  50 => 12,  48 => 11,  44 => 9,  42 => 8,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/application_menu_desktop_top.html.twig");
    }
}
