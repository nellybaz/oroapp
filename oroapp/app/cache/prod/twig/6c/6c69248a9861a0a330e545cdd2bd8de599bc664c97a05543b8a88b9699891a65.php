<?php

/* OroNavigationBundle:Menu:dots_tabs.html.twig */
class __TwigTemplate_37d1c303717a028ecf583b21bdd433a107ba89e704599638fa70a42590d3f5aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "OroNavigationBundle:Menu:dots_tabs.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'navbar_tabs' => array($this, 'block_navbar_tabs'),
            'navbar_tabs_content' => array($this, 'block_navbar_tabs_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 8
    public function block_root($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 10
            echo "        ";
            $this->displayBlock("navbar_tabs", $context, $blocks);
            echo "
        ";
            // line 11
            $this->displayBlock("navbar_tabs_content", $context, $blocks);
            echo "
    ";
        }
    }

    // line 15
    public function block_navbar_tabs($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["options"] = twig_array_merge(($context["options"] ?? null), array("template" => "OroNavigationBundle:Menu:_dots_tabs.html.twig", "depth" => 1));
        // line 17
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["item"] ?? null), ($context["options"] ?? null));
        echo "
";
    }

    // line 20
    public function block_navbar_tabs_content($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["options"] = twig_array_merge(($context["options"] ?? null), array("template" => "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", "depth" => 1));
        // line 22
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["item"] ?? null), ($context["options"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dots_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  79 => 21,  76 => 20,  69 => 17,  66 => 16,  63 => 15,  56 => 11,  51 => 10,  48 => 9,  45 => 8,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:dots_tabs.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/dots_tabs.html.twig");
    }
}
