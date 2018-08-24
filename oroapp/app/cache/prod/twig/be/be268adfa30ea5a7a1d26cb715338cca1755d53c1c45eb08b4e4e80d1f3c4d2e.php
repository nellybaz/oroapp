<?php

/* OroAccountBundle:Account:update.html.twig */
class __TwigTemplate_6776fe8a4f6580c76d40522d3e0533877f445570a512d2aedf0b59bfe76fa668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroAccountBundle:Account:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 3
        $context["name"] = "N/A";
        // line 4
        if ($this->getAttribute(($context["entity"] ?? null), "name", array())) {
            // line 5
            $context["name"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "name")) ? ((($this->getAttribute(            // line 6
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %fieldName% not granted", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.name.label")))));
        }

        $this->env->getExtension("oro_title")->set(array("params" => array("%account.name%" =>         // line 10
($context["name"] ?? null))));
        // line 12
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_head_script($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 21
    public function block_navButtons($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_account", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 27
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "id" => "btn-remove-account", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.entity_label"))), "method"), "html", null, true);
            // line 30
            echo "
        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 33
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_index")), "method"), "html", null, true);
        echo "
    ";
        // line 34
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_account_view", "params" => array("id" => "\$id"))), "method");
        // line 38
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_account_create")) {
            // line 39
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_account_create")), "method"));
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_account_update"))) {
            // line 44
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_account_update", "params" => array("id" => "\$id"))), "method"));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 52
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 54
            echo "        ";
            $context["name"] = "N/A";
            // line 55
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "name", array())) {
                // line 56
                echo "            ";
                $context["name"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "name")) ? ((($this->getAttribute($this->getAttribute($this->getAttribute(                // line 57
($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "name", array()), "N/A")) : ("N/A"))) : ($this->getAttribute(                // line 58
($context["UI"] ?? null), "renderDisabledLabel", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %fieldName% not granted", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.name.label")))), "method")));
                // line 60
                echo "        ";
            }
            // line 61
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 62
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.entity_plural_label"), "entityTitle" =>             // line 65
($context["name"] ?? null));
            // line 68
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 70
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.entity_label")));
            // line 71
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroAccountBundle:Account:update.html.twig", 71)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 72
            echo "    ";
        }
    }

    // line 75
    public function block_content_data($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        $context["id"] = "account-profile";
        // line 77
        echo "
    ";
        // line 78
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Basic Information"), "data" => array(0 =>         // line 85
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'))))));
        // line 90
        echo "
    ";
        // line 91
        $context["additionalData"] = array();
        // line 92
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 93
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 94
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 96
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 101
($context["additionalData"] ?? null))))));
            // line 104
            echo "    ";
        }
        // line 105
        echo "
    ";
        // line 106
        if ($this->getAttribute(($context["form"] ?? null), "contacts", array(), "any", true, true)) {
            // line 107
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.contacts.label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>             // line 113
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "default_contact", array()), 'widget'), 1 =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contacts", array()), 'widget')))))));
            // line 117
            echo "    ";
        }
        // line 118
        echo "
    ";
        // line 119
        $context["data"] = array("formErrors" => ((        // line 120
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 121
($context["dataBlocks"] ?? null));
        // line 123
        echo "    <div class=\"responsive-form-inner\">
        ";
        // line 124
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroAccountBundle:Account:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 124,  225 => 123,  223 => 121,  222 => 120,  221 => 119,  218 => 118,  215 => 117,  213 => 114,  212 => 113,  210 => 107,  208 => 106,  205 => 105,  202 => 104,  200 => 101,  198 => 96,  195 => 95,  188 => 94,  185 => 93,  179 => 92,  177 => 91,  174 => 90,  172 => 85,  171 => 78,  168 => 77,  165 => 76,  162 => 75,  157 => 72,  154 => 71,  151 => 70,  145 => 68,  143 => 65,  142 => 62,  140 => 61,  137 => 60,  135 => 58,  134 => 57,  132 => 56,  129 => 55,  126 => 54,  123 => 53,  120 => 52,  113 => 49,  110 => 48,  107 => 44,  104 => 43,  101 => 42,  98 => 39,  95 => 38,  93 => 34,  88 => 33,  83 => 31,  80 => 30,  78 => 27,  77 => 24,  75 => 23,  72 => 22,  69 => 21,  62 => 17,  56 => 16,  51 => 15,  48 => 14,  44 => 1,  42 => 12,  40 => 10,  36 => 6,  35 => 5,  33 => 4,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAccountBundle:Account:update.html.twig", "");
    }
}
