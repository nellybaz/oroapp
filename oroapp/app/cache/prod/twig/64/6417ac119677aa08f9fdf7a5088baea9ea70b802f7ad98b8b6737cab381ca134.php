<?php

/* OroShoppingListBundle:ShoppingList/Frontend:buttons.html.twig */
class __TwigTemplate_fef53fc7367dba156c7e1b12009c592753c8c4543ef304de4945f209a6a0f6d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 17
        echo "
";
        // line 30
        echo "
";
        // line 41
        echo "
";
        // line 85
        echo "
";
        // line 123
        echo "
";
    }

    // line 1
    public function getaddToCurrentButton($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["buttons"] = $this;
            // line 3
            echo "    ";
            $context["options"] = twig_array_merge(array("defaultLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.entity_label"), "actionLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.actions.add_to_shopping_list")),             // line 6
($context["options"] ?? null));
            // line 7
            echo "    ";
            echo $context["buttons"]->getgetButton(($context["options"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getaddToButton($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            $context["buttons"] = $this;
            // line 12
            echo "    ";
            $context["options"] = twig_array_merge(array("actionLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.actions.add_to_shopping_list")),             // line 14
($context["options"] ?? null));
            // line 15
            echo "    ";
            echo $context["buttons"]->getgetButton(($context["options"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getaddToNewButton($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "    ";
            $context["buttons"] = $this;
            // line 20
            echo "    ";
            $context["dataAttributes"] = twig_array_merge($this->getAttribute(($context["options"] ?? null), "dataAttributes", array()), array("intention" => "new"));
            // line 23
            echo "    ";
            $context["options"] = twig_array_merge(twig_array_merge(array("actionLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.actions.add_to_new_shopping_list")),             // line 25
($context["options"] ?? null)), array("dataAttributes" =>             // line 26
($context["dataAttributes"] ?? null)));
            // line 28
            echo "    ";
            echo $context["buttons"]->getgetButton(($context["options"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getbuttonTemplate($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "    ";
            $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "OroShoppingListBundle:ShoppingList/Frontend:buttons.html.twig", 32);
            // line 33
            echo "    ";
            $context["buttons"] = $this;
            // line 34
            echo "    ";
            echo $context["utils"]->getunderscoreRaw($context["buttons"]->getaddToCurrentButton(twig_array_merge(array("shoppingList" => array("id" => "<%= id %>", "label" => "<%= _.escape(label) %>")),             // line 39
($context["options"] ?? null))));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getgetButton($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroShoppingListBundle:ShoppingList/Frontend:buttons.html.twig", 43);
            // line 44
            echo "
    ";
            // line 45
            $context["options"] = twig_array_merge(array("shoppingList" => null, "defaultLabel" => "", "aCss" => "btn--info"),             // line 49
($context["options"] ?? null));
            // line 50
            echo "
    ";
            // line 51
            $context["shoppingListId"] = (($this->getAttribute(($context["options"] ?? null), "shoppingList", array())) ? ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "shoppingList", array()), "id", array())) : (null));
            // line 52
            echo "    ";
            $context["shoppingListLabel"] = (($this->getAttribute(($context["options"] ?? null), "shoppingList", array())) ? ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "shoppingList", array()), "label", array())) : ($this->getAttribute(($context["options"] ?? null), "defaultLabel", array())));
            // line 53
            echo "
    ";
            // line 54
            $context["dataAttributes"] = twig_array_merge($this->getAttribute(($context["options"] ?? null), "dataAttributes", array()), array("shoppinglist" => array("id" =>             // line 56
($context["shoppingListId"] ?? null), "label" =>             // line 57
($context["shoppingListLabel"] ?? null))));
            // line 60
            echo "
    ";
            // line 61
            $context["buttonOptions"] = array("dataAttributes" =>             // line 62
($context["dataAttributes"] ?? null), "aCss" => ("btn add-to-shopping-list-button " . $this->getAttribute(            // line 63
($context["options"] ?? null), "aCss", array())), "moreButtonExtraClass" => "btn--action", "dataId" =>             // line 65
($context["shoppingListId"] ?? null), "label" => twig_replace_filter($this->getAttribute(            // line 66
($context["options"] ?? null), "actionLabel", array()), array("{{ shoppingList }}" =>             // line 67
($context["shoppingListLabel"] ?? null))));
            // line 70
            echo "    ";
            if ($this->getAttribute(($context["options"] ?? null), "dataUrl", array())) {
                // line 71
                echo "        ";
                $context["buttonOptions"] = twig_array_merge(($context["buttonOptions"] ?? null), array("dataUrl" => $this->getAttribute(                // line 72
($context["options"] ?? null), "dataUrl", array())));
                // line 74
                echo "    ";
            }
            // line 75
            echo "    ";
            if ($this->getAttribute(($context["options"] ?? null), "pageComponent", array(), "any", true, true)) {
                // line 76
                echo "        ";
                $context["buttonOptions"] = twig_array_merge(($context["buttonOptions"] ?? null), array("pageComponent" => $this->getAttribute(                // line 77
($context["options"] ?? null), "pageComponent", array())));
                // line 79
                echo "    ";
            }
            // line 80
            echo "
    <div class=\"pull-left btn-group icons-holder btn-group--loading\">
        ";
            // line 82
            echo $context["UI"]->getclientLink(($context["buttonOptions"] ?? null));
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 86
    public function getgetButtonsHtml($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 87
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroShoppingListBundle:ShoppingList/Frontend:buttons.html.twig", 87);
            // line 88
            echo "    ";
            $context["buttons"] = $this;
            // line 89
            echo "    <div class=\"btn-group full\"
         ";
            // line 90
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => twig_array_merge(array("view" => (($this->getAttribute(            // line 93
($context["options"] ?? null), "componentModule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "componentModule", array()), "oroshoppinglist/js/app/views/product-add-to-shopping-list-view")) : ("oroshoppinglist/js/app/views/product-add-to-shopping-list-view")), "buttonTemplate" => (("<%#" .             // line 94
$context["buttons"]->getbuttonTemplate($this->getAttribute(($context["options"] ?? null), "current", array()))) . "#%>"), "removeButtonTemplate" => (($this->getAttribute(            // line 95
($context["options"] ?? null), "remove", array(), "any", true, true)) ? ((("<%#" . $context["buttons"]->getbuttonTemplate($this->getAttribute(($context["options"] ?? null), "remove", array()))) . "#%>")) : ("")), "createNewButtonTemplate" => (("<%#" .             // line 96
$context["buttons"]->getbuttonTemplate($this->getAttribute(($context["options"] ?? null), "new", array()))) . "#%>"), "shoppingListCreateEnabled" => $this->env->getExtension('Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension')->isFeatureEnabled("shopping_list_create"), "emptyMatrixAllowed" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_product.matrix_form_allow_empty")), (($this->getAttribute(            // line 99
($context["options"] ?? null), "componentOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "componentOptions", array()), array())) : (array())))));
            // line 100
            echo "
        >
        ";
            // line 102
            if ( !twig_test_empty($this->getAttribute(($context["options"] ?? null), "shoppingLists", array()))) {
                // line 103
                echo "            ";
                $context["existingShoppingLists"] = array();
                // line 104
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["options"] ?? null), "shoppingLists", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["shoppingList"]) {
                    // line 105
                    echo "                ";
                    if ($this->getAttribute($context["shoppingList"], "current", array())) {
                        // line 106
                        echo "                    ";
                        echo $context["buttons"]->getaddToCurrentButton(twig_array_merge($this->getAttribute(($context["options"] ?? null), "current", array()), array("shoppingList" => $context["shoppingList"])));
                        echo "
                ";
                    } else {
                        // line 108
                        echo "                    ";
                        $context["existingShoppingLists"] = twig_array_merge(($context["existingShoppingLists"] ?? null), array(0 => $context["shoppingList"]));
                        // line 109
                        echo "                ";
                    }
                    // line 110
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shoppingList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["existingShoppingLists"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["shoppingList"]) {
                    // line 112
                    echo "                ";
                    echo $context["buttons"]->getaddToButton(twig_array_merge($this->getAttribute(($context["options"] ?? null), "existing", array()), array("shoppingList" => $context["shoppingList"])));
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shoppingList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "            ";
                if ($this->env->getExtension('Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension')->isFeatureEnabled("shopping_list_create")) {
                    // line 115
                    echo "                ";
                    echo $context["buttons"]->getaddToNewButton($this->getAttribute(($context["options"] ?? null), "new", array()));
                    echo "
            ";
                }
                // line 117
                echo "        ";
            } else {
                // line 118
                echo "            ";
                $context["aCss"] = (($this->getAttribute(($context["options"] ?? null), "singleButtonACss", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? null), "singleButtonACss", array())) : (""));
                // line 119
                echo "            ";
                echo $context["buttons"]->getaddToCurrentButton(twig_array_merge($this->getAttribute(($context["options"] ?? null), "current", array()), array("shoppingList" => null, "aCss" => ($context["aCss"] ?? null))));
                echo "
        ";
            }
            // line 121
            echo "    </div>
";
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
        return "OroShoppingListBundle:ShoppingList/Frontend:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 121,  370 => 119,  367 => 118,  364 => 117,  358 => 115,  355 => 114,  346 => 112,  341 => 111,  335 => 110,  332 => 109,  329 => 108,  323 => 106,  320 => 105,  315 => 104,  312 => 103,  310 => 102,  306 => 100,  304 => 99,  303 => 96,  302 => 95,  301 => 94,  300 => 93,  299 => 90,  296 => 89,  293 => 88,  290 => 87,  278 => 86,  260 => 82,  256 => 80,  253 => 79,  251 => 77,  249 => 76,  246 => 75,  243 => 74,  241 => 72,  239 => 71,  236 => 70,  234 => 67,  233 => 66,  232 => 65,  231 => 63,  230 => 62,  229 => 61,  226 => 60,  224 => 57,  223 => 56,  222 => 54,  219 => 53,  216 => 52,  214 => 51,  211 => 50,  209 => 49,  208 => 45,  205 => 44,  202 => 43,  190 => 42,  173 => 39,  171 => 34,  168 => 33,  165 => 32,  153 => 31,  135 => 28,  133 => 26,  132 => 25,  130 => 23,  127 => 20,  124 => 19,  112 => 18,  94 => 15,  92 => 14,  90 => 12,  88 => 11,  76 => 10,  58 => 7,  56 => 6,  54 => 3,  51 => 2,  39 => 1,  34 => 123,  31 => 85,  28 => 41,  25 => 30,  22 => 17,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:ShoppingList/Frontend:buttons.html.twig", "");
    }
}
