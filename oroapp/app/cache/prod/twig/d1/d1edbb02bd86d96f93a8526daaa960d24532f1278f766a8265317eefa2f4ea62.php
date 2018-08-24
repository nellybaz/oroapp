<?php

/* OroTaskBundle:Task:view.html.twig */
class __TwigTemplate_d8fa7bc387191fa83163ea0af42846346911c73a084da4dc79bbe8135cc0dabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroTaskBundle:Task:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'stats' => array($this, 'block_stats'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaskBundle:Task:view.html.twig", 2);
        // line 3
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroTaskBundle:Task:view.html.twig", 3);
        // line 4
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroTaskBundle:Task:view.html.twig", 4);
        // line 5
        $context["U"] = $this->loadTemplate("OroUserBundle::macros.html.twig", "OroTaskBundle:Task:view.html.twig", 5);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.subject%" => (($this->getAttribute(        // line 7
($context["entity"] ?? null), "subject", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "subject", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 11
            echo "        ";
            // line 12
            echo "        ";
            echo $context["AC"]->getaddContextButton(($context["entity"] ?? null));
            echo "
        ";
            // line 13
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_update", array("id" => $this->getAttribute(            // line 14
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_label")));
            // line 16
            echo "
    ";
        }
        // line 18
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 19
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_task", array("id" => $this->getAttribute(            // line 20
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(            // line 24
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_label")));
            // line 26
            echo "
    ";
        }
    }

    // line 30
    public function block_stats($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        // line 32
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 33
        echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null));
        echo "
    </li>
";
    }

    // line 37
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 39
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 42
($context["entity"] ?? null), "subject", array()));
        // line 44
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 50
        if ( !(null === $this->getAttribute(($context["entity"] ?? null), "status", array()))) {
            // line 51
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "id", array()) == "closed")) {
                // line 52
                echo "                <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 53
($context["entity"] ?? null), "status", array()), "id", array()) == "in_progress")) {
                // line 54
                echo "                <div class=\"badge badge-tentatively status-tentatively\"><i class=\"icon-status-tentatively fa-circle\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 56
                echo "                <div class=\"badge badge-disabled status-unknown\"><i class=\"icon-status-disabled fa-circle\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            }
            // line 58
            echo "        ";
        }
        // line 59
        echo "    </div>
";
    }

    // line 62
    public function block_content_data($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 66
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.subject.label"), $this->getAttribute(($context["entity"] ?? null), "subject", array()));
        echo "
                ";
        // line 67
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "
                ";
        // line 68
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.due_date.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "dueDate", array())));
        echo "
                ";
        // line 69
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.task_priority.label"), $this->getAttribute(($context["entity"] ?? null), "taskPriority", array()));
        // line 71
        ob_start();
        // line 72
        if ($this->getAttribute(($context["entity"] ?? null), "createdBy", array())) {
            // line 73
            echo $context["U"]->getrender_user_name($this->getAttribute(($context["entity"] ?? null), "createdBy", array()));
        }
        $context["createdByData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.created_by.label"), ($context["createdByData"] ?? null));
        echo "
            </div>
            <div class=\"responsive-block\">
                ";
        // line 79
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
            </div>
        </div>";
        $context["taskInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 84
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 89
($context["taskInformation"] ?? null))))));
        // line 93
        echo "
    ";
        // line 94
        $context["id"] = "taskView";
        // line 95
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 96
        echo "
    ";
        // line 97
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 97,  203 => 96,  200 => 95,  198 => 94,  195 => 93,  193 => 89,  192 => 84,  186 => 79,  180 => 76,  176 => 73,  174 => 72,  172 => 71,  170 => 69,  166 => 68,  162 => 67,  158 => 66,  154 => 64,  152 => 63,  149 => 62,  144 => 59,  141 => 58,  135 => 56,  129 => 54,  127 => 53,  122 => 52,  119 => 51,  117 => 50,  111 => 48,  108 => 47,  101 => 44,  99 => 42,  98 => 39,  96 => 38,  93 => 37,  86 => 33,  83 => 32,  81 => 31,  78 => 30,  72 => 26,  70 => 24,  69 => 20,  67 => 19,  64 => 18,  60 => 16,  58 => 14,  57 => 13,  52 => 12,  50 => 11,  47 => 10,  44 => 9,  40 => 1,  38 => 7,  35 => 5,  33 => 4,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task:view.html.twig", "");
    }
}
