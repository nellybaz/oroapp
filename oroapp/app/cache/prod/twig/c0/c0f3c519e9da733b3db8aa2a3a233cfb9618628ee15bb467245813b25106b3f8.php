<?php

/* OroSecurityBundle:Form:fields.html.twig */
class __TwigTemplate_7eaf3a69b0071e3e39deb355a68eae438f08bdc627776f14152dc2b9f28f5fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_acl_access_level_selector_widget' => array($this, 'block_oro_acl_access_level_selector_widget'),
            'oro_acl_privilege_identity_widget' => array($this, 'block_oro_acl_privilege_identity_widget'),
            'oro_acl_label_widget' => array($this, 'block_oro_acl_label_widget'),
            'oro_acl_object_name_widget' => array($this, 'block_oro_acl_object_name_widget'),
            'oro_acl_collection_widget' => array($this, 'block_oro_acl_collection_widget'),
            'oro_acl_privilege_widget' => array($this, 'block_oro_acl_privilege_widget'),
            'oro_acl_permission_widget' => array($this, 'block_oro_acl_permission_widget'),
            'oro_acl_permission_collection_widget' => array($this, 'block_oro_acl_permission_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_acl_access_level_selector_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('oro_acl_privilege_identity_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('oro_acl_label_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('oro_acl_object_name_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('oro_acl_collection_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('oro_acl_privilege_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('oro_acl_permission_widget', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('oro_acl_permission_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_acl_access_level_selector_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["additionalClass"] = "";
        // line 3
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "privileges_config", array(), "any", false, true), "view_type", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "vars", array()), "privileges_config", array()), "view_type", array()) != "grid"))) {
            // line 4
            echo "        ";
            $context["additionalClass"] = "span2";
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        $context["label"] = ((( !array_key_exists("level_label", $context) || twig_test_empty(($context["level_label"] ?? null)))) ? ((        // line 7
($context["translation_prefix"] ?? null) . "NONE")) : ((        // line 8
($context["translation_prefix"] ?? null) . ($context["level_label"] ?? null))));
        // line 10
        echo "    <div class=\"access_level_value ";
        echo twig_escape_filter($this->env, ($context["additionalClass"] ?? null), "html", null, true);
        echo "\"
         data-identity=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["identity"] ?? null), "html", null, true);
        echo "\"
         data-selector-id=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
         data-selector-name=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"
         data-value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\"
    >
        <input type=\"hidden\" data-value-text=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\">
    </div>
";
    }

    // line 20
    public function block_oro_acl_privilege_identity_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["class"] = "";
        // line 22
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "privileges_config", array(), "any", false, true), "view_type", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "privileges_config", array()), "view_type", array()) != "grid"))) {
            // line 23
            echo "        ";
            $context["class"] = "span8";
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => ($context["class"] ?? null))));
        echo "
";
    }

    // line 29
    public function block_oro_acl_label_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSecurityBundle:Form:fields.html.twig", 30);
        // line 31
        echo "    <strong>
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? null)), "html", null, true);
        echo "
    </strong>
    ";
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "vars", array()), "value", array()), "description", array())) {
            // line 35
            echo "        ";
            echo $context["UI"]->gettooltip($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "vars", array()), "value", array()), "description", array())));
            echo "
    ";
        }
        // line 37
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 38
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 41
    public function block_oro_acl_object_name_widget($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "oid", array()), 'widget');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget');
        echo "
";
    }

    // line 46
    public function block_oro_acl_collection_widget($context, array $blocks = array())
    {
        // line 47
        echo "    <div data-page-component-module=\"";
        echo twig_escape_filter($this->env, ($context["page_component_module"] ?? null));
        echo "\" data-page-component-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["page_component_options"] ?? null)));
        echo "\">
        ";
        // line 48
        if (($this->getAttribute(($context["privileges_config"] ?? null), "view_type", array()) == "grid")) {
            // line 49
            echo "            <table class=\"table acl-table\">
                <tbody>
                <tr>
                    <th class=\"span6\">&nbsp;</th>
                    <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.security.permissions"), "html", null, true);
            echo "</th>
                </tr>
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 56
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 61
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 62
                echo "                <div class=\"security-row row-fluid\">
                    ";
                // line 63
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        ";
        }
        // line 67
        echo "    </div>
";
    }

    // line 70
    public function block_oro_acl_privilege_widget($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        ob_start();
        // line 72
        echo "        <tr ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) {
            echo "class=\"default-field\"";
        }
        echo ">
            <td>
                ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "identity", array()), 'widget');
        echo "
            </td>
            ";
        // line 76
        if (($this->getAttribute(($context["privileges_config"] ?? null), "view_type", array()) == "grid")) {
            // line 77
            echo "                <td>
                    <div class=\"table-responsive\">
                        <table class=\"table table-condensed\">
                            <tbody>
                                ";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "permissions", array()), 'widget');
            echo "
                            </tbody>
                        </table>
                    </div>
                </td>
            ";
        } else {
            // line 87
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "permissions", array()), 'widget');
            echo "
            ";
        }
        // line 89
        echo "        </tr>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_oro_acl_permission_widget($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "accessLevel", array()), 'widget');
        echo "
    ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget');
        echo "
";
    }

    // line 98
    public function block_oro_acl_permission_collection_widget($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["privileges_config"] ?? null), "permissions", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 100
            echo "        <tr ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) {
                echo "class=\"default-field\"";
            }
            echo ">
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 102
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                    // line 103
                    echo "                    <td class=\"span8\">
                        ";
                    // line 104
                    if (($this->getAttribute(($context["privileges_config"] ?? null), "view_type", array()) == "grid")) {
                        // line 105
                        echo "                            ";
                        $context["aclPermission"] = $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->getPermission($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()));
                        // line 106
                        echo "
                            ";
                        // line 107
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["aclPermission"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["aclPermission"] ?? null), "label", array()), $context["field"])) : ($context["field"]))), "html", null, true);
                        echo "
                            ";
                        // line 108
                        if ($this->getAttribute(($context["aclPermission"] ?? null), "description", array())) {
                            echo " (";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["aclPermission"] ?? null), "description", array())), "html", null, true);
                            echo ")";
                        }
                        // line 109
                        echo "                        ";
                    }
                    // line 110
                    echo "                    </td>
                    <td>
                        ";
                    // line 112
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["permission"], 'widget');
                    echo "
                    </td>
                ";
                }
                // line 115
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  379 => 116,  373 => 115,  367 => 112,  363 => 110,  360 => 109,  354 => 108,  350 => 107,  347 => 106,  344 => 105,  342 => 104,  339 => 103,  336 => 102,  332 => 101,  325 => 100,  320 => 99,  317 => 98,  311 => 95,  306 => 94,  303 => 93,  297 => 89,  291 => 87,  282 => 81,  276 => 77,  274 => 76,  269 => 74,  261 => 72,  258 => 71,  255 => 70,  250 => 67,  247 => 66,  238 => 63,  235 => 62,  230 => 61,  225 => 58,  216 => 56,  212 => 55,  207 => 53,  201 => 49,  199 => 48,  192 => 47,  189 => 46,  183 => 43,  178 => 42,  175 => 41,  168 => 38,  165 => 37,  159 => 35,  157 => 34,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  137 => 26,  134 => 25,  131 => 24,  128 => 23,  125 => 22,  122 => 21,  119 => 20,  108 => 16,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  86 => 10,  84 => 8,  83 => 7,  81 => 6,  78 => 5,  75 => 4,  72 => 3,  69 => 2,  66 => 1,  62 => 98,  59 => 97,  57 => 93,  54 => 92,  52 => 70,  49 => 69,  47 => 46,  44 => 45,  42 => 41,  39 => 40,  37 => 29,  34 => 28,  32 => 20,  29 => 19,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSecurityBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/SecurityBundle/Resources/views/Form/fields.html.twig");
    }
}
