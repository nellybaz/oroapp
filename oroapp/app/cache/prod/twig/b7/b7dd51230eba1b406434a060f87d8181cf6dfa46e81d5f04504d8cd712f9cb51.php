<?php

/* OroNavigationBundle:Menu:_htabs.html.twig */
class __TwigTemplate_2a039df34d93c83a06dd09512f497152eea9b7e87761f936fd64acd242c3e7b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
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
    public function block_list($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 5
            echo "        ";
            $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 5);
            // line 6
            echo "        ";
            $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), array("class" =>             // line 7
$context["oro_menu"]->getadd_attribute_values(($context["listAttributes"] ?? null), "class", array(0 => "nav", 1 => "nav-tabs"))));
            // line 9
            echo "        <ul";
            echo $context["oro_menu"]->getattributes(($context["listAttributes"] ?? null));
            echo ">
            ";
            // line 10
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
    }

    // line 15
    public function block_item($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if ($this->getAttribute(($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => 2), "method")) {
            // line 17
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "ancestorClass", array())));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 22
    public function block_linkElement($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 23);
        // line 24
        echo "    ";
        $context["itemLink"] = $this->getAttribute(($context["item"] ?? null), "uri", array());
        // line 25
        echo "    ";
        if (($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 26
            echo "        ";
            $context["linkAttributes"] = twig_array_merge(($context["linkAttributes"] ?? null), array("data-toggle" => "tab"));
            // line 27
            echo "        ";
            $context["itemLink"] = ("#" . twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter($this->getAttribute(($context["item"] ?? null), "name", array()), array(" " => "_", "#" => "_")))));
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        ";
            $context["linkAttributes"] = twig_array_merge(($context["linkAttributes"] ?? null), array("class" =>             // line 30
$context["oro_menu"]->getadd_attribute_values(($context["linkAttributes"] ?? null), "class", array(0 => "empty"))));
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, ($context["itemLink"] ?? null), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes(($context["linkAttributes"] ?? null));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_htabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  99 => 32,  97 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  67 => 19,  64 => 18,  62 => 17,  59 => 16,  56 => 15,  48 => 10,  43 => 9,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:_htabs.html.twig", "");
    }
}
