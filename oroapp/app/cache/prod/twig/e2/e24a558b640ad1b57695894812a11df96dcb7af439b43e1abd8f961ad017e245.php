<?php

/* OroNavigationBundle:Menu:pinbar.html.twig */
class __TwigTemplate_b9f7e412b6868f7b3b694694c38226ac8f8860f5c28251f0c98aeea7cc766ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:pinbar.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
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

    // line 13
    public function block_list($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["pinbarItems"] = array();
        // line 15
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pinbarItem"]) {
                // line 17
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "isAllowed", array())) {
                    // line 18
                    echo "                ";
                    $context["pinbarItems"] = twig_array_merge(($context["pinbarItems"] ?? null), array(0 => array("id" => $this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "id", array()), "title" => $this->getAttribute($context["pinbarItem"], "label", array()), "title_rendered" => $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->render($this->getAttribute($context["pinbarItem"], "label", array())), "title_rendered_short" => $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->renderShort($this->getAttribute($context["pinbarItem"], "label", array())), "url" => $this->getAttribute($context["pinbarItem"], "uri", array()), "type" => $this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "type", array()))));
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pinbarItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        $context["pinbar"] = $this;
        // line 23
        echo "    ";
        $context["frontendOptions"] = array(0 => "maxPinbarItems", 1 => "el", 2 => "listBar", 3 => "tabTitle", 4 => "tabIcon", 5 => "minimizeButton", 6 => "closeButton", 7 => "defaultUrl");
        // line 24
        echo "    <div class=\"hide\" data-data=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["pinbarItems"] ?? null)), "html", null, true);
        echo "\" data-options=\"";
        echo $context["pinbar"]->getget_options(($context["frontendOptions"] ?? null), ($context["options"] ?? null));
        echo "\"></div>
";
    }

    // line 3
    public function getget_options($__attributes__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context["options"] = array();
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 6
                if ($this->getAttribute(($context["data"] ?? null), $context["attribute"], array(), "array", true, true)) {
                    // line 7
                    $context["options"] = twig_array_merge(($context["options"] ?? null), array($context["attribute"] => $this->getAttribute(($context["data"] ?? null), $context["attribute"], array(), "array")));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:pinbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 10,  96 => 7,  94 => 6,  90 => 5,  88 => 4,  75 => 3,  66 => 24,  63 => 23,  60 => 22,  57 => 21,  51 => 20,  48 => 19,  45 => 18,  42 => 17,  37 => 16,  34 => 15,  31 => 14,  28 => 13,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:pinbar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/pinbar.html.twig");
    }
}
