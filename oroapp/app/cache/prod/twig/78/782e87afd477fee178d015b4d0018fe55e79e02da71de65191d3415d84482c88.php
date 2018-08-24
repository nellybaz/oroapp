<?php

/* OroNavigationBundle:Menu:navbar.html.twig */
class __TwigTemplate_b914ead1523a2b6777ab76f13258e4e981225872bf55838bab071af6a39af88e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:navbar.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'brand' => array($this, 'block_brand'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
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
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            ";
        // line 6
        $this->displayBlock("brand", $context, $blocks);
        echo "

            ";
        // line 8
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? null), "childrenAttributes", array());
        // line 9
        echo "            ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:navbar.html.twig", 9);
        // line 10
        echo "            ";
        $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), array("class" =>         // line 11
$context["oro_menu"]->getadd_attribute_values(($context["listAttributes"] ?? null), "class", array(0 => "nav"))));
        // line 13
        echo "            ";
        $this->displayBlock("list", $context, $blocks);
        // line 14
        echo "</div>
    </div>
";
    }

    // line 18
    public function block_brand($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if ( !(null === $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "brand"), "method"))) {
            // line 20
            echo "        ";
            $context["brandLink"] = (( !(null === $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "brandLink"), "method"))) ? ($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "brandLink"), "method")) : ("/"));
            // line 21
            echo "        <a class=\"brand\" href=\"";
            echo twig_escape_filter($this->env, ($context["brandLink"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "brand"), "method"), "html", null, true);
            echo "</a>
    ";
        }
    }

    // line 25
    public function block_item($context, array $blocks = array())
    {
        // line 26
        if (($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 27
            echo "        ";
            if (($this->getAttribute(($context["item"] ?? null), "level", array()) > 0)) {
                // line 28
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => "dropdown-menu"));
                // line 29
                echo "        ";
            }
            // line 30
            echo "        ";
            if (($this->getAttribute(($context["item"] ?? null), "level", array()) == 1)) {
                // line 31
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown"));
                // line 32
                echo "        ";
            } elseif (($this->getAttribute(($context["item"] ?? null), "level", array()) > 1)) {
                // line 33
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown-submenu"));
                // line 34
                echo "        ";
            }
        }
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 41
    public function block_linkElement($context, array $blocks = array())
    {
        // line 42
        if (((($this->getAttribute(($context["item"] ?? null), "level", array()) == 1) && $this->getAttribute(($context["item"] ?? null), "hasChildren", array())) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 43
            echo "        ";
            $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:navbar.html.twig", 43);
            // line 44
            $context["linkAttributes"] = twig_array_merge(($context["linkAttributes"] ?? null), array("class" =>             // line 45
$context["oro_menu"]->getadd_attribute_values(($context["linkAttributes"] ?? null), "class", array(0 => "dropdown-toggle")), "data-toggle" => "dropdown"));
        }
        // line 48
        echo "
    ";
        // line 49
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
";
    }

    // line 52
    public function block_label($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $this->displayParentBlock("label", $context, $blocks);
        echo "
    ";
        // line 54
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) && ($this->getAttribute(($context["item"] ?? null), "level", array()) == 1)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 55
            echo "        <b class=\"caret\"></b>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  146 => 54,  141 => 53,  138 => 52,  132 => 49,  129 => 48,  126 => 45,  125 => 44,  122 => 43,  120 => 42,  117 => 41,  111 => 38,  108 => 37,  104 => 34,  102 => 33,  99 => 32,  97 => 31,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  71 => 21,  68 => 20,  65 => 19,  62 => 18,  56 => 14,  53 => 13,  51 => 11,  49 => 10,  46 => 9,  44 => 8,  39 => 6,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:navbar.html.twig", "");
    }
}
