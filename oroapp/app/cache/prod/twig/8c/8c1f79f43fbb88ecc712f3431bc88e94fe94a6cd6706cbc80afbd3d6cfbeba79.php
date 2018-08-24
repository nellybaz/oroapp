<?php

/* OroNavigationBundle:Menu:menu.html.twig */
class __TwigTemplate_7586f84f93ec97d7ca695030c743fb4e39b4318d4e557fb2013ab267e43c65fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 2);
        // line 3
        $context["Navigation"] = $this->loadTemplate("OroNavigationBundle::macros.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_root($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? null), "childrenAttributes", array());
        // line 27
        echo "
    ";
        // line 28
        if ($this->getAttribute(($context["options"] ?? null), "rootClass", array(), "any", true, true)) {
            // line 29
            echo "        ";
            $context["oro_menu"] = $this;
            // line 30
            echo "        ";
            $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), array("class" => $context["oro_menu"]->getadd_attribute_values(($context["listAttributes"] ?? null), "class", array(0 => $this->getAttribute(($context["options"] ?? null), "rootClass", array())))));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 35
    public function block_list($context, array $blocks = array())
    {
        // line 36
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? null), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", array()))) {
            // line 37
            $context["oro_menu"] = $this;
            // line 38
            $context["childrenContent"] =             $this->renderBlock("children", $context, $blocks);
            // line 39
            if (($context["childrenContent"] ?? null)) {
                // line 40
                echo "<ul";
                echo $context["oro_menu"]->getattributes(($context["listAttributes"] ?? null));
                echo ">
                ";
                // line 41
                echo ($context["childrenContent"] ?? null);
                echo "
            </ul>";
            }
        }
    }

    // line 47
    public function block_children($context, array $blocks = array())
    {
        // line 49
        $context["currentOptions"] = ($context["options"] ?? null);
        // line 50
        $context["currentItem"] = ($context["item"] ?? null);
        // line 52
        if ( !(null === $this->getAttribute(($context["options"] ?? null), "depth", array()))) {
            // line 53
            $context["options"] = twig_array_merge(($context["currentOptions"] ?? null), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? null), "depth", array()) - 1)));
        }
        // line 55
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
            // line 56
            $context["itemAttributes"] = $this->getAttribute($context["item"], "attributes", array());
            // line 57
            $context["childrenAttributes"] = $this->getAttribute($context["item"], "childrenAttributes", array());
            // line 58
            $context["classes"] = (($this->getAttribute(($context["itemAttributes"] ?? null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute(($context["itemAttributes"] ?? null), "class", array()), " ")) : (array()));
            // line 59
            $context["childrenClasses"] = (($this->getAttribute(($context["childrenAttributes"] ?? null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute(($context["childrenAttributes"] ?? null), "class", array()), " ")) : (array()));
            // line 60
            ob_start();
            // line 61
            $this->displayBlock("item", $context, $blocks);
            $context["itemContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 63
            if ((($context["itemContent"] ?? null) || ($this->getAttribute($context["item"], "uri", array()) != "#"))) {
                // line 64
                echo ($context["itemContent"] ?? null);
            }
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
        // line 68
        $context["item"] = ($context["currentItem"] ?? null);
        // line 69
        $context["options"] = ($context["currentOptions"] ?? null);
    }

    // line 72
    public function block_item($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 76
    public function block_item_renderer($context, array $blocks = array())
    {
        // line 77
        $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "show_non_authorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "show_non_authorized", array()));
        // line 78
        $context["displayable"] = ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array()), "isAllowed", array()) || ($context["showNonAuthorized"] ?? null));
        // line 79
        if (($this->getAttribute(($context["item"] ?? null), "displayed", array()) && ($context["displayable"] ?? null))) {
            // line 81
            if ($this->getAttribute(($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method")) {
                // line 82
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 83
($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => $this->getAttribute(($context["options"] ?? null), "depth", array())), "method")) {
                // line 84
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "ancestorClass", array())));
            }
            // line 86
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeFirst", array())) {
                // line 87
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "firstClass", array())));
            }
            // line 89
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeLast", array())) {
                // line 90
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "lastClass", array())));
            }
            // line 92
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 93
                $context["itemAttributes"] = twig_array_merge(($context["itemAttributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
            }
            // line 95
            echo "        ";
            // line 96
            echo "        ";
            $context["oro_menu"] = $this;
            // line 97
            echo "        <li";
            echo $context["oro_menu"]->getattributes(($context["itemAttributes"] ?? null));
            echo ">
            ";
            // line 98
            $this->displayBlock("item_content", $context, $blocks);
            echo "
        </li>";
        }
    }

    // line 103
    public function block_item_content($context, array $blocks = array())
    {
        // line 104
        $context["linkAttributes"] = $this->getAttribute(($context["item"] ?? null), "linkAttributes", array());
        // line 105
        $context["labelAttributes"] = $this->getAttribute(($context["item"] ?? null), "labelAttributes", array());
        // line 106
        ob_start();
        // line 107
        if (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method") || $this->getAttribute(($context["options"] ?? null), "currentAsLink", array())))) {
            // line 108
            echo "            ";
            $this->displayBlock("linkElement", $context, $blocks);
        } else {
            // line 110
            echo "            ";
            $this->displayBlock("spanElement", $context, $blocks);
        }
        $context["elementContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 114
        $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? null), "level", array()))));
        // line 115
        $context["listAttributes"] = twig_array_merge(($context["childrenAttributes"] ?? null), array("class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")));
        // line 116
        $context["wrapperContent"] =         $this->renderBlock("list_wrapper", $context, $blocks);
        // line 117
        if ((($this->getAttribute(($context["item"] ?? null), "uri", array()) != "#") || ($context["wrapperContent"] ?? null))) {
            // line 118
            echo ($context["elementContent"] ?? null);
            // line 119
            echo ($context["wrapperContent"] ?? null);
        }
    }

    // line 124
    public function block_list_wrapper($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
    }

    // line 128
    public function block_linkElement($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        $context["oro_menu"] = $this;
        // line 130
        echo "    ";
        $context["extras"] = $this->getAttribute(($context["item"] ?? null), "extras", array());
        // line 131
        echo "
    ";
        // line 132
        if (($this->getAttribute(($context["extras"] ?? null), "dialog", array(), "any", true, true) && $this->getAttribute(($context["extras"] ?? null), "dialog", array()))) {
            // line 133
            echo "        ";
            echo $context["Navigation"]->getrenderClientLink($this->getAttribute(($context["extras"] ?? null), "dialog_config", array()), array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(            // line 134
($context["app"] ?? null), "user", array()), true), "entityId" => $this->getAttribute($this->getAttribute(            // line 135
($context["app"] ?? null), "user", array()), "id", array())));
        } else {
            // line 138
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "uri", array()), "html", null, true);
            echo "\"";
            echo $context["oro_menu"]->getattributes(($context["linkAttributes"] ?? null));
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>
    ";
        }
        // line 140
        echo "
";
    }

    // line 143
    public function block_spanElement($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $context["oro_menu"] = $this;
        // line 145
        echo "    <span";
        echo $context["oro_menu"]->getattributes(($context["labelAttributes"] ?? null));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
    }

    // line 148
    public function block_label($context, array $blocks = array())
    {
        // line 149
        if ($this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "icon"), "method")) {
            // line 150
            echo "        <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 152
        if (($this->getAttribute(($context["options"] ?? null), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 153
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? null), "label", array()));
        } elseif (($this->getAttribute(        // line 154
($context["item"] ?? null), "getExtra", array(0 => "translate_disabled", 1 => false), "method") == false)) {
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? null), "label", array()), $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "translateParams", 1 => array()), "method"), $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "translateDomain", 1 => "messages"), "method")), "html", null, true);
        } else {
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "label", array()), "html", null, true);
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
            echo "    ";
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
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 16,  406 => 15,  404 => 14,  390 => 13,  370 => 8,  368 => 7,  363 => 6,  351 => 5,  346 => 157,  343 => 155,  341 => 154,  339 => 153,  337 => 152,  331 => 150,  329 => 149,  326 => 148,  317 => 145,  314 => 144,  311 => 143,  306 => 140,  296 => 138,  293 => 135,  292 => 134,  290 => 133,  288 => 132,  285 => 131,  282 => 130,  279 => 129,  276 => 128,  269 => 125,  266 => 124,  261 => 119,  259 => 118,  257 => 117,  255 => 116,  253 => 115,  251 => 114,  246 => 110,  242 => 108,  240 => 107,  238 => 106,  236 => 105,  234 => 104,  231 => 103,  224 => 98,  219 => 97,  216 => 96,  214 => 95,  211 => 93,  209 => 92,  206 => 90,  204 => 89,  201 => 87,  199 => 86,  196 => 84,  194 => 83,  192 => 82,  190 => 81,  188 => 79,  186 => 78,  184 => 77,  181 => 76,  174 => 73,  171 => 72,  167 => 69,  165 => 68,  150 => 64,  148 => 63,  145 => 61,  143 => 60,  141 => 59,  139 => 58,  137 => 57,  135 => 56,  118 => 55,  115 => 53,  113 => 52,  111 => 50,  109 => 49,  106 => 47,  98 => 41,  93 => 40,  91 => 39,  89 => 38,  87 => 37,  85 => 36,  82 => 35,  77 => 32,  74 => 31,  71 => 30,  68 => 29,  66 => 28,  63 => 27,  60 => 26,  57 => 25,  49 => 21,  46 => 20,  43 => 19,  39 => 1,  37 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Menu:menu.html.twig", "");
    }
}
