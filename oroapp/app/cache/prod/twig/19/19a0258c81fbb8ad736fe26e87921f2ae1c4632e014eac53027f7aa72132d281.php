<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig */
class __TwigTemplate_0e9c5efb736c281dd92999c3d116fc07c6ecf6d1f5ebbfdb33718ccee01e6fe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig", 1);
        $this->blocks = array(
            'menu_widget' => array($this, 'block_menu_widget'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'item_renderer' => array($this, 'block_item_renderer'),
            'item_content' => array($this, 'block_item_content'),
            'list_wrapper' => array($this, 'block_list_wrapper'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig", 2);
        // line 3
        $context["Navigation"] = $this->loadTemplate("OroNavigationBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_menu_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["options"] = array("depth" =>         // line 21
($context["depth"] ?? null), "matchingDepth" =>         // line 22
($context["matchingDepth"] ?? null), "currentAsLink" =>         // line 23
($context["currentAsLink"] ?? null), "ancestorClass" =>         // line 24
($context["ancestorClass"] ?? null), "currentClass" =>         // line 25
($context["currentClass"] ?? null), "firstClass" =>         // line 26
($context["firstClass"] ?? null), "lastClass" =>         // line 27
($context["lastClass"] ?? null), "allow_safe_labels" =>         // line 28
($context["allow_safe_labels"] ?? null), "clear_matcher" =>         // line 29
($context["clear_matcher"] ?? null), "leaf_class" =>         // line 30
($context["leaf_class"] ?? null), "branch_class" =>         // line 31
($context["branch_class"] ?? null));
        // line 33
        echo "
    ";
        // line 34
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? null), "childrenAttributes", array()), ($context["attr"] ?? null));
        // line 35
        echo "
    ";
        // line 36
        if ($this->getAttribute(($context["options"] ?? null), "rootClass", array(), "any", true, true)) {
            // line 37
            echo "        ";
            $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), array("class" => $this->getAttribute($this, "add_attribute_values", array(0 => ($context["listAttributes"] ?? null), 1 => "class", 2 => array(0 => $this->getAttribute(($context["options"] ?? null), "rootClass", array()))), "method")));
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 42
    public function block_list($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 44
            echo "        <ul";
            echo $this->getAttribute($this, "attributes", array(0 => ($context["listAttributes"] ?? null)), "method");
            echo ">
            ";
            // line 45
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
    }

    // line 50
    public function block_children($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        $context["currentOptions"] = ($context["options"] ?? null);
        // line 53
        echo "    ";
        $context["currentItem"] = ($context["item"] ?? null);
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        if ( !(null === $this->getAttribute(($context["options"] ?? null), "depth", array()))) {
            // line 56
            echo "        ";
            $context["options"] = twig_array_merge(($context["currentOptions"] ?? null), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? null), "depth", array()) - 1)));
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? null), "children", array()));
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
            // line 59
            $context["itemAttributes"] = twig_array_merge($this->getAttribute($context["item"], "attributes", array()), ($context["child_attr"] ?? null));
            // line 60
            $context["childrenAttributes"] = $this->getAttribute($context["item"], "childrenAttributes", array());
            // line 61
            $context["classes"] = twig_split_filter($this->env, (((($this->getAttribute($this->getAttribute($context["item"], "attributes", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "attributes", array(), "any", false, true), "class", array()), "")) : ("")) . " ") . (($this->getAttribute(($context["child_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["child_attr"] ?? null), "class", array()), "")) : (""))), " ");
            // line 62
            $context["childrenClasses"] = (($this->getAttribute(($context["childrenAttributes"] ?? null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute(($context["childrenAttributes"] ?? null), "class", array()), " ")) : (array()));
            // line 63
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
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
        // line 65
        echo "    ";
        // line 66
        echo "    ";
        $context["item"] = ($context["currentItem"] ?? null);
        // line 67
        echo "    ";
        $context["options"] = ($context["currentOptions"] ?? null);
    }

    // line 70
    public function block_item($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 74
    public function block_item_renderer($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        if (($this->getAttribute(($context["item"] ?? null), "displayed", array()) && $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "isAllowed", array()))) {
            // line 76
            echo "        ";
            // line 77
            if ($this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isCurrent(($context["item"] ?? null))) {
                // line 78
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "currentClass", array())));
            } elseif ($this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isAncestor(            // line 79
($context["item"] ?? null), $this->getAttribute(($context["options"] ?? null), "depth", array()))) {
                // line 80
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "ancestorClass", array())));
            }
            // line 82
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeFirst", array())) {
                // line 83
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "firstClass", array())));
            }
            // line 85
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeLast", array())) {
                // line 86
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "lastClass", array())));
            }
            // line 88
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 89
                $context["itemAttributes"] = twig_array_merge(($context["itemAttributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
            }
            // line 91
            echo "        ";
            // line 92
            echo "        <li";
            echo $this->getAttribute($this, "attributes", array(0 => ($context["itemAttributes"] ?? null)), "method");
            echo ">
            ";
            // line 93
            $this->displayBlock("item_content", $context, $blocks);
            echo "
        </li>
    ";
        }
    }

    // line 98
    public function block_item_content($context, array $blocks = array())
    {
        // line 99
        $context["linkAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? null), "linkAttributes", array()), ($context["link_attr"] ?? null));
        // line 100
        $context["labelAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? null), "labelAttributes", array()), ($context["label_attr"] ?? null));
        // line 101
        if (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "uri", array())) && ( !$this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isCurrent(($context["item"] ?? null)) || $this->getAttribute(($context["options"] ?? null), "currentAsLink", array())))) {
            // line 102
            echo "        ";
            $this->displayBlock("linkElement", $context, $blocks);
        } else {
            // line 104
            echo "        ";
            $this->displayBlock("spanElement", $context, $blocks);
        }
        // line 106
        echo "    ";
        // line 107
        $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? null), "level", array()))));
        // line 108
        $context["listAttributes"] = twig_array_merge(($context["childrenAttributes"] ?? null), array("class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")));
        // line 109
        echo "    ";
        $this->displayBlock("list_wrapper", $context, $blocks);
        echo "
";
    }

    // line 113
    public function block_list_wrapper($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
    }

    // line 117
    public function block_linkElement($context, array $blocks = array())
    {
        // line 118
        echo "    ";
        $context["extras"] = $this->getAttribute(($context["item"] ?? null), "extras", array());
        // line 119
        echo "
    ";
        // line 120
        if (($this->getAttribute(($context["extras"] ?? null), "dialog", array(), "any", true, true) && $this->getAttribute(($context["extras"] ?? null), "dialog", array()))) {
            // line 121
            echo "        ";
            echo $context["Navigation"]->getrenderClientLink($this->getAttribute(($context["extras"] ?? null), "dialog_config", array()), array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(            // line 122
($context["app"] ?? null), "user", array()), true), "entityId" => $this->getAttribute($this->getAttribute(            // line 123
($context["app"] ?? null), "user", array()), "id", array())));
        } else {
            // line 126
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->getUrl($this->getAttribute(($context["item"] ?? null), "uri", array())), "html", null, true);
            echo "\"";
            echo $this->getAttribute($this, "attributes", array(0 => ($context["linkAttributes"] ?? null)), "method");
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>
    ";
        }
        // line 128
        echo "
";
    }

    // line 131
    public function block_spanElement($context, array $blocks = array())
    {
        // line 132
        echo "    <span";
        echo $this->getAttribute($this, "attributes", array(0 => ($context["labelAttributes"] ?? null)), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
    }

    // line 135
    public function block_label($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        $context["label"] = ((($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "custom", array()) == true))) ? ($this->getAttribute(($context["item"] ?? null), "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? null), "label", array()))));
        // line 137
        if ($this->getAttribute(($context["options"] ?? null), "allow_safe_labels", array())) {
            // line 138
            echo ($context["label"] ?? null);
        } else {
            // line 140
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        }
    }

    // line 5
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 7
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 8
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getadd_attribute_values($__attributes__ = null, $__attribute__ = null, $__values__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "attribute" => $__attribute__,
            "values" => $__values__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            $context["_values"] = (($this->getAttribute(($context["attributes"] ?? null), ($context["attribute"] ?? null), array(), "array", true, true)) ? (twig_split_filter($this->env, $this->getAttribute(($context["attributes"] ?? null), ($context["attribute"] ?? null), array(), "array"), " ")) : (array()));
            // line 15
            $context["_values"] = twig_array_merge(($context["_values"] ?? null), ($context["values"] ?? null));
            // line 16
            echo twig_escape_filter($this->env, twig_join_filter(($context["_values"] ?? null), " "), "html", null, true);
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
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 16,  385 => 15,  383 => 14,  369 => 13,  349 => 8,  347 => 7,  343 => 6,  331 => 5,  326 => 140,  323 => 138,  321 => 137,  318 => 136,  315 => 135,  306 => 132,  303 => 131,  298 => 128,  288 => 126,  285 => 123,  284 => 122,  282 => 121,  280 => 120,  277 => 119,  274 => 118,  271 => 117,  264 => 114,  261 => 113,  254 => 109,  252 => 108,  250 => 107,  248 => 106,  244 => 104,  240 => 102,  238 => 101,  236 => 100,  234 => 99,  231 => 98,  223 => 93,  218 => 92,  216 => 91,  213 => 89,  211 => 88,  208 => 86,  206 => 85,  203 => 83,  201 => 82,  198 => 80,  196 => 79,  194 => 78,  192 => 77,  190 => 76,  187 => 75,  184 => 74,  177 => 71,  174 => 70,  169 => 67,  166 => 66,  164 => 65,  147 => 63,  145 => 62,  143 => 61,  141 => 60,  139 => 59,  121 => 58,  118 => 57,  115 => 56,  112 => 55,  110 => 54,  107 => 53,  104 => 52,  102 => 51,  99 => 50,  91 => 45,  86 => 44,  83 => 43,  80 => 42,  75 => 39,  72 => 38,  69 => 37,  67 => 36,  64 => 35,  62 => 34,  59 => 33,  57 => 31,  56 => 30,  55 => 29,  54 => 28,  53 => 27,  52 => 26,  51 => 25,  50 => 24,  49 => 23,  48 => 22,  47 => 21,  45 => 20,  42 => 19,  38 => 1,  36 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig");
    }
}
