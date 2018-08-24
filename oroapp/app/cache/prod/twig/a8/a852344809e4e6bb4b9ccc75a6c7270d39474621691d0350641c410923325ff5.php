<?php

/* OroCommerceMenuBundle:Form:fields.html.twig */
class __TwigTemplate_97627072398d64c8ca2732246097d540e5fa03716084dc6c6417a1d971c40d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_commerce_menu_user_agent_condition_widget' => array($this, 'block_oro_commerce_menu_user_agent_condition_widget'),
            'oro_commerce_menu_user_agent_conditions_collection_widget' => array($this, 'block_oro_commerce_menu_user_agent_conditions_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_commerce_menu_user_agent_condition_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 41
        echo "
";
        // line 54
        echo "
";
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('oro_commerce_menu_user_agent_conditions_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_commerce_menu_user_agent_condition_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <span class=\"menu-user-agent-inner-condition-label\">AND</span>
        <div class=\"menu-user-agent-condition-item\" data-layout=\"separate\">
            <div class=\"menu-user-agent-condition-item-container\">
                <div class=\"menu-user-agent-condition-operation\">
                    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "operation", array()), 'widget');
        echo "
                </div>
                <div class=\"menu-user-agent-condition-value\">
                    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 65
    public function block_oro_commerce_menu_user_agent_conditions_collection_widget($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        ob_start();
        // line 67
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 68
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_collection_item_prototype_html", array(0 => ($context["form"] ?? null)), "method");
            // line 69
            echo "        ";
        }
        // line 70
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 71
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 72
        echo "        <div class=\"row-oro\">
            ";
        // line 73
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 74
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-last-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-row-count-add=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_add", array()), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo ">
                <input type=\"hidden\" name=\"validate_";
        // line 75
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>
                ";
        // line 76
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 77
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 78
                echo "                        ";
                echo $this->getAttribute($this, "oro_collection_item_prototype_child", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 81
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 82
                echo "                        ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                ";
        }
        // line 85
        echo "            </div>
            ";
        // line 86
        if (($context["allow_add"] ?? null)) {
            // line 87
            echo "                <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 89
        echo "        </div>
        ";
        // line 90
        if ((($context["handle_primary"] ?? null) && ( !array_key_exists("prototype", $context) || $this->getAttribute(($context["prototype"] ?? null), "primary", array(), "any", true, true)))) {
            // line 91
            echo "            ";
            echo $this->getAttribute($this, "oro_collection_validate_primary_js", array(0 => $context), "method");
            echo "
        ";
        }
        // line 93
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function getoro_collection_item_prototype($__form__ = null, $__name__ = null, $__disabled__ = null, $__allow_delete__ = null, $__allow_add_after__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "name" => $__name__,
            "disabled" => $__disabled__,
            "allow_delete" => $__allow_delete__,
            "allow_add_after" => $__allow_add_after__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "    <div class=\"menu-user-agent-condition-container\"
         data-content=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
         data-validation-optional-group
         ";
            // line 21
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-validation-optional-group-handler", array(), "array", true, true)) {
                // line 22
                echo "            data-validation-optional-group-handler=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-validation-optional-group-handler", array(), "array"), "html", null, true);
                echo "\"
         ";
            }
            // line 24
            echo "    >
        <span class=\"menu-user-agent-condition-label\">OR</span>
        <div class=\"menu-user-agent-condition\">
            <div class=\"menu-user-agent-condition-wrap oro-multiselect-holder";
            // line 27
            if ( !($context["allow_delete"] ?? null)) {
                echo " not-removable";
            }
            echo "\">
                ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("disabled" => ($context["disabled"] ?? null)));
            echo "
                ";
            // line 29
            if (($context["allow_add_after"] ?? null)) {
                // line 30
                echo "                    <button class=\"addAfterRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">+</button>
                ";
            }
            // line 32
            echo "            </div>
            ";
            // line 33
            if (($context["allow_delete"] ?? null)) {
                // line 34
                echo "                <button class=\"removeRow btn btn-action btn-link btn-remove-main-row\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">
                    <span class=\"fa-close\"></span>
                </button>
            ";
            }
            // line 38
            echo "        </div>
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

    // line 42
    public function getoro_collection_item_prototype_child($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    ";
            $context["form"] = ($context["widget"] ?? null);
            // line 44
            echo "    ";
            $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
            // line 45
            echo "    ";
            $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "disabled", array());
            // line 46
            echo "    ";
            $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
            // line 47
            echo "    ";
            $context["allow_add_after"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_add_after", array());
            // line 48
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) {
                // line 49
                echo "        ";
                $context["allow_delete"] = (($context["allow_delete"] ?? null) && $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array()));
                // line 50
                echo "    ";
            }
            // line 51
            echo "
    ";
            // line 52
            echo $this->getAttribute($this, "oro_collection_item_prototype", array(0 => ($context["form"] ?? null), 1 => ($context["name"] ?? null), 2 => ($context["disabled"] ?? null), 3 => ($context["allow_delete"] ?? null), 4 => ($context["allow_add_after"] ?? null)), "method");
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

    // line 55
    public function getoro_collection_item_prototype_html($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
            // line 57
            echo "    ";
            $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
            // line 58
            echo "    ";
            $context["disabled"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disabled", array());
            // line 59
            echo "    ";
            $context["allow_delete"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array());
            // line 60
            echo "    ";
            $context["allow_add_after"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_add_after", array());
            // line 61
            echo "
    ";
            // line 62
            echo $this->getAttribute($this, "oro_collection_item_prototype", array(0 => ($context["form"] ?? null), 1 => ($context["name"] ?? null), 2 => ($context["disabled"] ?? null), 3 => ($context["allow_delete"] ?? null), 4 => ($context["allow_add_after"] ?? null)), "method");
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

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 62,  347 => 61,  344 => 60,  341 => 59,  338 => 58,  335 => 57,  332 => 56,  320 => 55,  303 => 52,  300 => 51,  297 => 50,  294 => 49,  291 => 48,  288 => 47,  285 => 46,  282 => 45,  279 => 44,  276 => 43,  264 => 42,  247 => 38,  239 => 34,  237 => 33,  234 => 32,  228 => 30,  226 => 29,  222 => 28,  216 => 27,  211 => 24,  205 => 22,  203 => 21,  198 => 19,  195 => 18,  179 => 17,  174 => 93,  168 => 91,  166 => 90,  163 => 89,  157 => 87,  155 => 86,  152 => 85,  149 => 84,  140 => 82,  135 => 81,  132 => 80,  123 => 78,  118 => 77,  116 => 76,  110 => 75,  93 => 74,  91 => 73,  88 => 72,  85 => 71,  82 => 70,  79 => 69,  76 => 68,  73 => 67,  70 => 66,  67 => 65,  57 => 10,  51 => 7,  45 => 3,  42 => 2,  39 => 1,  35 => 65,  32 => 64,  29 => 54,  26 => 41,  23 => 16,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/Form/fields.html.twig");
    }
}
