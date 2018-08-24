<?php

/* OroTaskBundle:Task:update.html.twig */
class __TwigTemplate_850e6e19f153f8a73cebeb61744d44897269c7c5baaa3f0152ea4978b0ad4e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroTaskBundle:Task:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.subject%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "subject", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_label"))));
        // line 4
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_task_view", "params" => array("id" => "\$id"))), "method");
        // line 11
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_task_create")) {
            // line 12
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_task_create")), "method"));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_task_update")) {
            // line 17
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_task_update", "params" => array("id" => "\$id"))), "method"));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_index")), "method"), "html", null, true);
        echo "
";
    }

    // line 26
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 28
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 29
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 32
($context["entity"] ?? null), "subject", array()));
            // line 34
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_label")));
            // line 37
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroTaskBundle:Task:update.html.twig", 37)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 44
        if ( !(null === $this->getAttribute(($context["entity"] ?? null), "status", array()))) {
            // line 45
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "id", array()) == "closed")) {
                // line 46
                echo "                <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 47
($context["entity"] ?? null), "status", array()), "id", array()) == "in_progress")) {
                // line 48
                echo "                <div class=\"badge badge-tentatively status-tentatively\"><i class=\"icon-status-tentatively fa-circle\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 50
                echo "                <div class=\"badge badge-disabled status-unknown\"><i class=\"icon-status-disabled fa-circle\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            }
            // line 52
            echo "        ";
        }
        // line 53
        echo "    </div>
";
    }

    // line 56
    public function block_content_data($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $context["id"] = "task-form";
        // line 58
        echo "
    ";
        // line 59
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'row'), 1 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row'), 2 =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dueDate", array()), 'row'), 3 =>         // line 69
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'row'), 4 =>         // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "taskPriority", array()), 'row'), 5 => (($this->getAttribute(        // line 71
($context["form"] ?? null), "owner", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row')) : ("")), 6 =>         // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reminders", array()), 'row'))))));
        // line 77
        echo "
    ";
        // line 78
        $context["additionalData"] = array();
        // line 79
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 80
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 81
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 83
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 88
($context["additionalData"] ?? null))))));
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    ";
        // line 93
        $context["data"] = array("formErrors" => ((        // line 94
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 95
($context["dataBlocks"] ?? null));
        // line 97
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 97,  195 => 95,  194 => 94,  193 => 93,  190 => 92,  187 => 91,  185 => 88,  183 => 83,  180 => 82,  173 => 81,  170 => 80,  164 => 79,  162 => 78,  159 => 77,  157 => 72,  156 => 71,  155 => 70,  154 => 69,  153 => 68,  152 => 67,  151 => 66,  150 => 59,  147 => 58,  144 => 57,  141 => 56,  136 => 53,  133 => 52,  127 => 50,  121 => 48,  119 => 47,  114 => 46,  111 => 45,  109 => 44,  103 => 42,  100 => 41,  95 => 38,  92 => 37,  89 => 36,  83 => 34,  81 => 32,  80 => 29,  78 => 28,  75 => 27,  72 => 26,  66 => 23,  61 => 22,  58 => 21,  55 => 17,  52 => 16,  49 => 15,  46 => 12,  43 => 11,  40 => 7,  37 => 6,  33 => 1,  31 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task:update.html.twig", "");
    }
}
