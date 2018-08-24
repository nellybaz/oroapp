<?php

/* OroNavigationBundle:Menu:dropdown.html.twig */
class __TwigTemplate_e87e7709c66ddc8b9aa77bf6f3443515b77493742cbe20b702193b2363605c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:dropdown.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
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
        echo "    ";
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? null), "childrenAttributes", array());
        // line 5
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:dropdown.html.twig", 5);
        // line 6
        echo "    ";
        $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), array("class" =>         // line 8
$context["oro_menu"]->getadd_attribute_values(($context["listAttributes"] ?? null), "class", array(0 => "dropdown-menu")), "role" => "menu", "aria-labelledby" => "dropdownMenu"));
        // line 12
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  39 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:dropdown.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/dropdown.html.twig");
    }
}
