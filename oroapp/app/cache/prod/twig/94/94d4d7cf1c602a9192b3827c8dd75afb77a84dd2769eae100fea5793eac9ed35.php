<?php

/* OroNavigationBundle:Menu:history.html.twig */
class __TwigTemplate_508765616247e6b67d449bde368748561bd491d3eca5e2708ca4ff0304df20fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:history.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
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
    public function block_list($context, array $blocks = array())
    {
        // line 4
        echo "    <ul";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oro_menu"] ?? null), "attributes", array(0 => ($context["listAttributes"] ?? null)), "method"), "html", null, true);
        echo ">";
        // line 5
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 6
            echo "            ";
            $context["oro_menu"] = $this;
            // line 7
            echo "            ";
            $this->displayBlock("children", $context, $blocks);
            echo "
        ";
        }
        // line 9
        echo "</ul>
    ";
        // line 10
        if (( !$this->getAttribute(($context["item"] ?? null), "hasChildren", array()) && (null === $this->getAttribute(($context["item"] ?? null), "parent", array())))) {
            // line 11
            echo "        <div class=\"dot-menu-empty-message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.messages.no_items"), "html", null, true);
            echo "</div>
    ";
        }
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->render($this->getAttribute(($context["item"] ?? null), "label", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  60 => 15,  52 => 11,  50 => 10,  47 => 9,  41 => 7,  38 => 6,  36 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:history.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/history.html.twig");
    }
}
