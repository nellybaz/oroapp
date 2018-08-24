<?php

/* OroWorkflowBundle:WorkflowDefinition:configure.html.twig */
class __TwigTemplate_1c9dc32675fc372d3c2c706e1932123120d1e44894f1419307f2ac0daed7d1f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroWorkflowBundle:WorkflowDefinition:configure.html.twig", 1);
        $this->blocks = array(
            'stats' => array($this, 'block_stats'),
            'navButtons' => array($this, 'block_navButtons'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%workflow_definition.label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
($context["entity"] ?? null), "label", array()), array(), "workflows"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stats($context, array $blocks = array())
    {
        // line 6
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["html"] = ($this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_workflow_definition_view", "params" => array("name" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "name", array())))), "method") . $this->getAttribute(        // line 13
($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "

    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_definition_view", array("name" => $this->getAttribute(($context["entity"] ?? null), "name", array())))), "method"), "html", null, true);
        echo "
";
    }

    // line 19
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 21
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_definition_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.entity_plural_label"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_definition_view", array("name" => $this->getAttribute(        // line 25
($context["entity"] ?? null), "name", array()))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 26
($context["entity"] ?? null), "label", array()), array(), "workflows"))), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.configuration.label"));
        // line 30
        echo "
    ";
        // line 31
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "

    <div class=\"pull-left\">
        ";
        // line 34
        if ($this->getAttribute(($context["entity"] ?? null), "isActive", array())) {
            // line 35
            echo "            <div class=\"badge badge-enabled status-enabled\">
                <i class=\"icon-status-enabled fa-circle\"></i>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
            echo "
            </div>
        ";
        } else {
            // line 39
            echo "            <div class=\"badge badge-disabled status-disabled\">
                <i class=\"icon-status-disabled fa-circle\"></i>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 43
        echo "    </div>
";
    }

    // line 46
    public function block_content_data($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $context["data"] = array();
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 49
            echo "        ";
            if ($this->getAttribute($context["child"], "children", array())) {
                // line 50
                echo "            ";
                $context["tooltip"] = null;
                // line 51
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "tooltip", array(), "any", true, true)) {
                    // line 52
                    echo "                ";
                    $context["tooltip"] = $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "tooltip", array());
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "            ";
                $context["data"] = twig_array_merge(($context["data"] ?? null), array(0 => $this->getAttribute(                // line 55
($context["UI"] ?? null), "collectionField", array(0 => $context["child"], 1 => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), 3 => ($context["tooltip"] ?? null)), "method")));
                // line 57
                echo "        ";
            } else {
                // line 58
                echo "            ";
                $context["data"] = twig_array_merge(($context["data"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 59
                echo "        ";
            }
            // line 60
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
    ";
        // line 62
        $context["id"] = "workflow-variables";
        // line 63
        echo "    ";
        $context["data"] = array("dataBlocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.configuration.label"), "class" => "active", "subblocks" => array(0 => array("data" =>         // line 67
($context["data"] ?? null))))));
        // line 70
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:WorkflowDefinition:configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 70,  168 => 67,  166 => 63,  164 => 62,  161 => 61,  155 => 60,  152 => 59,  149 => 58,  146 => 57,  144 => 55,  142 => 54,  139 => 53,  136 => 52,  133 => 51,  130 => 50,  127 => 49,  122 => 48,  119 => 47,  116 => 46,  111 => 43,  105 => 40,  102 => 39,  96 => 36,  93 => 35,  91 => 34,  85 => 31,  82 => 30,  80 => 26,  79 => 25,  78 => 21,  76 => 20,  73 => 19,  67 => 16,  61 => 14,  59 => 13,  58 => 12,  56 => 11,  53 => 10,  45 => 7,  38 => 6,  35 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:WorkflowDefinition:configure.html.twig", "");
    }
}
