<?php

/* OroNavigationBundle:Menu:shortcuts.html.twig */
class __TwigTemplate_db7fb99740a572ebaf0baef5783fa92e6dcbabbf2d16b4991d9d26afc3925e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:shortcuts.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
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
            echo "            <div class=\"dropdown header-dropdown-shortcut header-utility-dropdown\">
                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.shortcuts.title"), "html", null, true);
            echo "\"><i class=\"fa-share-square\"></i></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"nav-header nav-header-title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.shortcuts.title"), "html", null, true);
            echo "</li>
                    <li class=\"dark\">
                        <form>
                            <input type=\"text\"
                                   placeholder=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.shortcuts.placeholder"), "html", null, true);
            echo "\"
                                   data-source-url=";
            // line 13
            echo twig_jsonencode_filter($this->getAttribute(($context["options"] ?? null), "source", array()));
            echo " class=\"input\"
                                   data-entity-class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(($context["app"] ?? null), "user", array()), true), "html", null, true);
            echo "\"
                                   data-entity-id=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
            echo "\"
                            >
                            <div class=\"clearfix\">
                                <div class=\"extra-small\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.shortcuts.example"), "html", null, true);
            echo "
                                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "details", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.shortcuts.see_all"), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <div class=\"nav-header\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.shortcuts.most_used"), "html", null, true);
            echo "</div>
                    ";
            // line 25
            $this->displayBlock("children", $context, $blocks);
            echo "
                </ul>
            </div>
    ";
        }
    }

    // line 31
    public function block_item($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "is_custom_action", array(), "any", true, true)) {
            // line 33
            echo "        ";
            $this->displayBlock("item_renderer", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:shortcuts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  98 => 32,  95 => 31,  86 => 25,  82 => 24,  72 => 19,  68 => 18,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  43 => 8,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:shortcuts.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/shortcuts.html.twig");
    }
}
