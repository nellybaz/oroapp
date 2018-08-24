<?php

/* OroCalendarBundle:Calendar/Menu:contextMenu.html.twig */
class __TwigTemplate_402187a2ec88c58fb6ca0429a18ad9ed0eccceb1183974b0dc19d7f39d9835c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroCalendarBundle:Calendar/Menu:contextMenu.html.twig", 1);
        $this->blocks = array(
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
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "module", array(), "any", true, true)) {
            // line 5
            echo "        ";
            $context["itemAttributes"] = twig_array_merge(($context["itemAttributes"] ?? null), array("data-module" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "module", array())));
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "template", array(), "any", true, true)) {
            // line 8
            echo "        ";
            echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "template", array()), array(), true, true);
            echo "
    ";
        } else {
            // line 10
            echo "        ";
            $this->displayBlock("item_renderer", $context, $blocks);
            echo "
    ";
        }
    }

    // line 14
    public function block_linkElement($context, array $blocks = array())
    {
        // line 15
        echo "    <a href=\"javascript:void(0);\" class=\"action\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Calendar/Menu:contextMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  58 => 14,  50 => 10,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Calendar/Menu:contextMenu.html.twig", "");
    }
}
