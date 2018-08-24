<?php

/* OroOrganizationBundle:BusinessUnit:update.html.twig */
class __TwigTemplate_fe4a9c3d75dda3b587443d02ec59e5013eead423abd8573369a896cccb191df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroOrganizationBundle:BusinessUnit:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit:update.html.twig", 2);
        // line 4
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 6
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array());

        $this->env->getExtension("oro_title")->set(array("params" => array("%business_unit.name%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
($context["form"] ?? null), "vars", array()), "value", array()), "name", array()))));
        // line 9
        $context["gridName"] = "bu-update-users-grid";
        // line 10
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_head_script($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 14
        $context["listenerParameters"] = array("columnName" => "has_business_unit", "selectors" => array("included" => "#businessUnitAppendUsers", "excluded" => "#businessUnitRemoveUsers"));
    }

    // line 23
    public function block_navButtons($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if (((($context["entityId"] ?? null) && ($this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getBusinessUnitCount() > 1)) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_businessunit", array("id" =>             // line 26
($context["entityId"] ?? null))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_index"), "aCss" => "no-hash remove-button", "dataId" =>             // line 29
($context["entityId"] ?? null), "id" => "btn-remove-business_unit", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.entity_label"), "disabled" =>  !            // line 32
($context["allow_delete"] ?? null))), "method"), "html", null, true);
            // line 33
            echo "
        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 36
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_index")), "method"), "html", null, true);
        echo "
    ";
        // line 37
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_business_unit_view", "params" => array("id" => "\$id"))), "method");
        // line 41
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_business_unit_create")) {
            // line 42
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_business_unit_create")), "method"));
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_business_unit_update"))) {
            // line 47
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_business_unit_update", "params" => array("id" => "\$id"))), "method"));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 55
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 57
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 58
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.entity_plural_label"), "entityTitle" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
($context["form"] ?? null), "vars", array()), "value", array()), "name", array()));
            // line 63
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 65
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.entity_label")));
            // line 66
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroOrganizationBundle:BusinessUnit:update.html.twig", 66)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 67
            echo "    ";
        }
    }

    // line 70
    public function block_content_data($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $context["id"] = "business_unit-profile";
        // line 72
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 78
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendUsers", array()), 'widget', array("id" => "businessUnitAppendUsers")), 1 =>         // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeUsers", array()), 'widget', array("id" => "businessUnitRemoveUsers")), 2 =>         // line 80
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 3 =>         // line 82
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "parentBusinessUnit", array()), 'row'), 4 =>         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row'), 5 =>         // line 85
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", array()), 'row'), 6 =>         // line 86
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row'), 7 =>         // line 87
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fax", array()), 'row'))))));
        // line 91
        echo "
    ";
        // line 92
        $context["additionalData"] = array();
        // line 93
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 94
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 95
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 97
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 102
($context["additionalData"] ?? null))))));
            // line 105
            echo "    ";
        }
        // line 106
        echo "
    ";
        // line 107
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.users.label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 112
$context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("business_unit_id" => ($context["entityId"] ?? null)), array("cssClass" => "inner-grid"))))))));
        // line 115
        echo "
    ";
        // line 116
        $context["data"] = array("formErrors" => ((        // line 117
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 118
($context["dataBlocks"] ?? null));
        // line 120
        echo "
    ";
        // line 121
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 121,  198 => 120,  196 => 118,  195 => 117,  194 => 116,  191 => 115,  189 => 112,  188 => 107,  185 => 106,  182 => 105,  180 => 102,  178 => 97,  175 => 96,  168 => 95,  165 => 94,  159 => 93,  157 => 92,  154 => 91,  152 => 87,  151 => 86,  150 => 85,  149 => 84,  148 => 82,  147 => 80,  146 => 79,  145 => 78,  143 => 72,  140 => 71,  137 => 70,  132 => 67,  129 => 66,  126 => 65,  120 => 63,  118 => 61,  117 => 58,  115 => 57,  112 => 56,  109 => 55,  102 => 52,  99 => 51,  96 => 47,  93 => 46,  90 => 45,  87 => 42,  84 => 41,  82 => 37,  77 => 36,  72 => 34,  69 => 33,  67 => 32,  66 => 29,  65 => 26,  63 => 25,  60 => 24,  57 => 23,  53 => 14,  48 => 13,  45 => 12,  41 => 1,  39 => 10,  37 => 9,  35 => 7,  32 => 6,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrganizationBundle:BusinessUnit:update.html.twig", "");
    }
}
