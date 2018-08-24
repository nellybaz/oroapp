<?php

/* OroNavigationBundle:Menu:_dots_tabs-content.html.twig */
class __TwigTemplate_0a69bf3aa7722ec209c069ed77a7c3d808bf9bded1000bcccadc95b839714fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", 1);
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
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", 4);
        // line 5
        echo "
    <div class=\"tab-content\">
        ";
        // line 7
        $context["items"] = ($context["item"] ?? null);
        // line 8
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            ";
            $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array(), "any", false, true), "show_non_authorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["item"], "extras", array()), "show_non_authorized", array()));
            // line 10
            echo "            ";
            $context["displayable"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array()), "isAllowed", array()) || ($context["showNonAuthorized"] ?? null));
            // line 11
            echo "            ";
            if (($context["displayable"] ?? null)) {
                // line 12
                echo "                <div class=\"tab-pane";
                if ((($this->getAttribute($this->getAttribute($context["item"], "extras", array(), "any", false, true), "active_if_first_is_empty", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "extras", array(), "any", false, true), "active_if_first_is_empty", array()), false)) : (false))) {
                    echo " active";
                }
                echo "\"
                     id=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["item"], "name", array()), array(" " => "_", "#" => "_")))), "html", null, true);
                echo "-content\">
                    ";
                // line 14
                $context["options"] = array("tabTitle" => $this->getAttribute($context["item"], "label", array()));
                // line 15
                echo "                    ";
                $context["options"] = array("defaultUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_default"));
                // line 16
                echo "                    ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), $this->getAttribute($context["item"], "extras", array()));
                // line 17
                echo "                    ";
                echo $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\MenuExtension')->render($this->getAttribute($context["item"], "name", array()), ($context["options"] ?? null));
                echo "
                </div>
            ";
            }
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        ";
        $context["item"] = ($context["items"] ?? null);
        // line 22
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_dots_tabs-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  86 => 21,  80 => 20,  73 => 17,  70 => 16,  67 => 15,  65 => 14,  61 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/_dots_tabs-content.html.twig");
    }
}
