<?php

/* OroNavigationBundle:Menu:_tabs-content.html.twig */
class __TwigTemplate_0df59fe81e01cbbfd8680a10d30e116bd43c03e9daee2ce7321eca4725a799ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_tabs-content.html.twig", 1);
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
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_tabs-content.html.twig", 4);
        // line 5
        echo "
    ";
        // line 6
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? null), "childrenAttributes", array());
        // line 7
        echo "    ";
        $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), array("class" => $context["oro_menu"]->getadd_attribute_values(($context["listAttributes"] ?? null), "class", array(0 => "nav", 1 => "nav-pills"))));
        // line 8
        echo "
    <div class=\"tab-content\">
        ";
        // line 10
        $context["items"] = ($context["item"] ?? null);
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            ";
            $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array(), "any", false, true), "show_non_authorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["item"], "extras", array()), "show_non_authorized", array()));
            // line 13
            echo "            ";
            $context["displayable"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array()), "isAllowed", array()) || ($context["showNonAuthorized"] ?? null));
            // line 14
            echo "            ";
            if (((($context["displayable"] ?? null) && $this->getAttribute($context["item"], "hasChildren", array())) && $this->getAttribute($context["item"], "displayChildren", array()))) {
                // line 15
                echo "                ";
                $context["tabClasses"] = array(0 => "tab-pane");
                // line 16
                echo "                ";
                $context["tabClasses"] = (($this->getAttribute(($context["matcher"] ?? null), "isAncestor", array(0 => $context["item"], 1 => 2), "method")) ? (twig_array_merge(($context["tabClasses"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "ancestorClass", array())))) : (($context["tabClasses"] ?? null)));
                // line 17
                echo "                ";
                $context["tabClasses"] = (($this->getAttribute(($context["matcher"] ?? null), "isCurrent", array(0 => $context["item"]), "method")) ? (twig_array_merge(($context["tabClasses"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "currentClass", array())))) : (($context["tabClasses"] ?? null)));
                // line 18
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, twig_join_filter(($context["tabClasses"] ?? null), " "), "html", null, true);
                echo "\"
                     id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["item"], "name", array()), array(" " => "_", "#" => "_")))), "html", null, true);
                echo "\">
                    ";
                // line 20
                $this->displayBlock("list", $context, $blocks);
                // line 21
                echo "</div>
            ";
            }
            // line 23
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        ";
        $context["item"] = ($context["items"] ?? null);
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_tabs-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  113 => 24,  99 => 23,  95 => 21,  93 => 20,  89 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:_tabs-content.html.twig", "");
    }
}
