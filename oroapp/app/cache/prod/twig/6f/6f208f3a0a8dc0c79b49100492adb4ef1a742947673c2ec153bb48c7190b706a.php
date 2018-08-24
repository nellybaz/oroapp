<?php

/* OroCallBundle:Call:update.html.twig */
class __TwigTemplate_2dd40405bb1903856c4ddfb4c981fbcd1a9d148ee060f0913efaa507f350c042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCallBundle:Call:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content_data' => array($this, 'block_content_data'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%subject%" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "subject", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "subject", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_script($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 13
    public function block_content_data($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["id"] = "call-log";
        // line 15
        echo "    ";
        $context["title"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.entity_label")))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.log_call")));
        // line 19
        echo "
    ";
        // line 20
        $context["formFields"] = array();
        // line 21
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 22
            echo "        ";
            $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row')));
            // line 23
            echo "    ";
        }
        // line 24
        echo "    ";
        $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 =>         // line 25
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'row'), 1 =>         // line 26
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notes", array()), 'row'), 2 =>         // line 27
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "callDateTime", array()), 'row'), 3 =>         // line 28
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phoneNumber", array()), 'row'), 4 =>         // line 29
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "direction", array()), 'row'), 5 =>         // line 30
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "duration", array()), 'row')));
        // line 32
        echo "
    <div class=\"hide\">
        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "callStatus", array()), 'row');
        echo "
    </div>

    ";
        // line 37
        $context["additionalData"] = array();
        // line 38
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 39
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 40
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    ";
        // line 43
        echo "    ";
        $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest')));
        // line 44
        echo "
    ";
        // line 45
        $context["dataBlocks"] = array(0 => array("title" =>         // line 46
($context["title"] ?? null), "class" => "active", "subblocks" => array(0 => array("title" =>         // line 50
($context["title"] ?? null), "data" =>         // line 51
($context["formFields"] ?? null)))));
        // line 55
        echo "
    ";
        // line 56
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 57
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.block.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 62
($context["additionalData"] ?? null))))));
            // line 65
            echo "    ";
        }
        // line 66
        echo "
    ";
        // line 67
        $context["data"] = array("formErrors" => ((        // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 69
($context["dataBlocks"] ?? null), "hiddenData" =>         // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "callStatus", array()), 'row'));
        // line 72
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 75
    public function block_navButtons($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_index")), "method"), "html", null, true);
        echo "
    ";
        // line 77
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_call_view", "params" => array("id" => "\$id"))), "method");
        // line 81
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_call_create")) {
            // line 82
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_call_create")), "method"));
            // line 85
            echo "    ";
        }
        // line 86
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_call_update"))) {
            // line 87
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_call_update", "params" => array("id" => "\$id"))), "method"));
            // line 91
            echo "    ";
        }
        // line 92
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 95
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 97
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 98
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.entity_plural_label"), "entityTitle" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 101
($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "subject", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "subject", array()), "N/A")) : ("N/A")));
            // line 104
            echo "    ";
        } else {
            // line 105
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 106
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.log_call"));
            // line 112
            echo "    ";
        }
        // line 113
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 113,  212 => 112,  210 => 106,  208 => 105,  205 => 104,  203 => 101,  202 => 98,  200 => 97,  197 => 96,  194 => 95,  187 => 92,  184 => 91,  181 => 87,  178 => 86,  175 => 85,  172 => 82,  169 => 81,  167 => 77,  162 => 76,  159 => 75,  152 => 72,  150 => 70,  149 => 69,  148 => 68,  147 => 67,  144 => 66,  141 => 65,  139 => 62,  137 => 57,  135 => 56,  132 => 55,  130 => 51,  129 => 50,  128 => 46,  127 => 45,  124 => 44,  121 => 43,  118 => 41,  111 => 40,  108 => 39,  102 => 38,  100 => 37,  94 => 34,  90 => 32,  88 => 30,  87 => 29,  86 => 28,  85 => 27,  84 => 26,  83 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  70 => 20,  67 => 19,  64 => 15,  61 => 14,  58 => 13,  51 => 9,  45 => 8,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call:update.html.twig", "");
    }
}
