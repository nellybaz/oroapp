<?php

/* OroNavigationBundle:Menu:_dots_tabs.html.twig */
class __TwigTemplate_baab6954d693ff962ca1152a165eb649a95bc365de48350005b0adbc86e10d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:_htabs.html.twig", "OroNavigationBundle:Menu:_dots_tabs.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'item_renderer' => array($this, 'block_item_renderer'),
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:_htabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_item_renderer($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "show_non_authorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "show_non_authorized", array()));
        // line 9
        echo "    ";
        $context["displayable"] = ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "isAllowed", array()) || ($context["showNonAuthorized"] ?? null));
        // line 10
        echo "    ";
        if (($this->getAttribute(($context["item"] ?? null), "displayed", array()) && ($context["displayable"] ?? null))) {
            // line 11
            echo "        ";
            // line 12
            echo "        ";
            $context["oro_menu"] = $this;
            // line 13
            $context["linkAttributes"] = $this->getAttribute(($context["item"] ?? null), "linkAttributes", array());
            // line 14
            $context["labelAttributes"] = $this->getAttribute(($context["item"] ?? null), "labelAttributes", array());
            // line 15
            echo "        ";
            $context["class"] = array(0 => "");
            // line 16
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "active_if_first_is_empty", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "active_if_first_is_empty", array()))) {
                // line 17
                echo "            ";
                $context["class"] = twig_array_merge(($context["class"] ?? null), array(0 => "active"));
                // line 18
                echo "        ";
            }
            // line 19
            echo "        <li id=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter($this->getAttribute(($context["item"] ?? null), "name", array()), array(" " => "_", "#" => "_")))), "html", null, true);
            echo "-tab\" class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["class"] ?? null), " "), "html", null, true);
            echo "\">
            ";
            // line 20
            $this->displayBlock("linkElement", $context, $blocks);
            echo "
        </li>
    ";
        }
    }

    // line 25
    public function block_linkElement($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs.html.twig", 26);
        // line 27
        echo "    ";
        $context["linkAttributes"] = twig_array_merge(($context["linkAttributes"] ?? null), array("data-toggle" => "tab"));
        // line 28
        echo "    ";
        $context["itemLink"] = (("#" . twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter($this->getAttribute(($context["item"] ?? null), "name", array()), array(" " => "_", "#" => "_"))))) . "-content");
        // line 29
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
        return "OroNavigationBundle:Menu:_dots_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  80 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:_dots_tabs.html.twig", "");
    }
}
