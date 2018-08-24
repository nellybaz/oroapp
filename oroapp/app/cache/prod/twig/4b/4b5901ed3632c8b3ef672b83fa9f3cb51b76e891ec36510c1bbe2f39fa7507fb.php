<?php

/* OroNavigationBundle:Menu:application_menu_desktop_sided.html.twig */
class __TwigTemplate_23c8d29bad3fc518932da1831c47eb986efdfe86aa9bb2358e49fe474debac5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu_desktop_sided.html.twig", 1);
        $this->blocks = array(
            'list_wrapper' => array($this, 'block_list_wrapper'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'item_content' => array($this, 'block_item_content'),
            'label' => array($this, 'block_label'),
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
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? null), "hasChildren", array())) {
            // line 5
            echo "        ";
            if (($this->getAttribute(($context["item"] ?? null), "level", array()) == 1)) {
                // line 6
                echo "            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__scrollable\">";
                // line 7
                $this->displayBlock("list", $context, $blocks);
                // line 8
                echo "</div>
        ";
            } elseif (($this->getAttribute(            // line 9
($context["item"] ?? null), "level", array()) == 2)) {
                // line 10
                echo "            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__child\">";
                // line 11
                $this->displayBlock("list", $context, $blocks);
                // line 12
                echo "</div>
        ";
            } else {
                // line 14
                $this->displayBlock("list", $context, $blocks);
            }
            // line 16
            echo "    ";
        }
    }

    // line 19
    public function block_item($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if (($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 21
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown"));
            // line 22
            if (($this->getAttribute(($context["item"] ?? null), "level", array()) != 1)) {
                // line 23
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => "dropdown-menu"));
                // line 24
                echo "        ";
            }
        } elseif (($this->getAttribute(        // line 25
($context["item"] ?? null), "level", array()) == 1)) {
            // line 26
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown", 1 => "dropdown-empty"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "routes", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "routes", array(), "any", false, true), 0, array(), "array", true, true))) {
            // line 29
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "routes", array())) > 1)) {
                // line 30
                echo "            ";
                $context["itemAttributes"] = twig_array_merge(($context["itemAttributes"] ?? null), array("data-routes" => twig_jsonencode_filter(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "routes", array()), 1))));
                // line 31
                echo "        ";
            }
            // line 32
            echo "        ";
            $context["itemAttributes"] = twig_array_merge(($context["itemAttributes"] ?? null), array("data-route" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "routes", array()), 0, array(), "array")));
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_linkElement($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu_desktop_sided.html.twig", 38);
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
    public function block_item_content($context, array $blocks = array())
    {
        // line 57
        echo "   ";
        if (($this->getAttribute(($context["item"] ?? null), "level", array()) == 1)) {
            // line 58
            echo "       ";
            $context["linkAttributes"] = $this->getAttribute(($context["item"] ?? null), "linkAttributes", array());
            // line 59
            echo "       ";
            $this->displayBlock("linkElement", $context, $blocks);
            echo "
       <div class=\"dropdown-menu\">
           ";
            // line 61
            $this->displayParentBlock("item_content", $context, $blocks);
            echo "
       </div>
   ";
        } else {
            // line 64
            echo "       ";
            $this->displayParentBlock("item_content", $context, $blocks);
            echo "
   ";
        }
    }

    // line 68
    public function block_label($context, array $blocks = array())
    {
        // line 69
        if ((($this->getAttribute(($context["item"] ?? null), "level", array()) == 1) &&  !$this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "icon"), "method"))) {
            // line 70
            echo "        <i class=\"fa-th\"></i> ";
            $this->displayParentBlock("label", $context, $blocks);
            echo "
    ";
        } else {
            // line 72
            echo "        ";
            $this->displayParentBlock("label", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:application_menu_desktop_sided.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 72,  190 => 70,  188 => 69,  185 => 68,  177 => 64,  171 => 61,  165 => 59,  162 => 58,  159 => 57,  156 => 56,  146 => 53,  143 => 52,  140 => 51,  138 => 49,  136 => 48,  134 => 47,  131 => 46,  128 => 45,  126 => 42,  124 => 41,  122 => 40,  119 => 39,  116 => 38,  113 => 37,  106 => 34,  103 => 33,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  85 => 27,  83 => 26,  81 => 25,  78 => 24,  76 => 23,  74 => 22,  72 => 21,  69 => 20,  66 => 19,  61 => 16,  58 => 14,  54 => 12,  52 => 11,  50 => 10,  48 => 9,  45 => 8,  43 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:application_menu_desktop_sided.html.twig", "");
    }
}
