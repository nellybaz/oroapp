<?php

/* OroMessageQueueBundle:Job:childJobs.html.twig */
class __TwigTemplate_da186e46c93677ac2822f1accea45e187cb7f2634f3af49ae69428492d8dcaa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroMessageQueueBundle:Job:childJobs.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
            'pageHeader' => array($this, 'block_pageHeader'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMessageQueueBundle:Job:childJobs.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()), "%id%" => $this->getAttribute(($context["entity"] ?? null), "id", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "

    <div class=\"pull-left\">
        ";
        // line 10
        $this->loadTemplate("OroMessageQueueBundle:Job/Datagrid:status.html.twig", "OroMessageQueueBundle:Job:childJobs.html.twig", 10)->display(array_merge($context, array("record" => array("rootEntity" => ($context["entity"] ?? null)))));
        // line 11
        echo "
        ";
        // line 12
        if ($this->getAttribute(($context["entity"] ?? null), "unique", array())) {
            // line 13
            echo "            <div class=\"badge badge-info status-box\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.message_queue_job.header.unique"), "html", null, true);
            echo "</div>
        ";
        }
        // line 15
        echo "
        ";
        // line 16
        if ($this->getAttribute(($context["entity"] ?? null), "interrupted", array())) {
            // line 17
            echo "            <div class=\"badge badge-info status-box\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.message_queue_job.header.interrupted"), "html", null, true);
            echo "</div>
        ";
        }
        // line 19
        echo "    </div>
";
    }

    // line 22
    public function block_stats($context, array $blocks = array())
    {
        // line 23
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.message_queue_job.header.startedAt"), "html", null, true);
        echo ": ";
        echo ((($this->getAttribute(($context["entity"] ?? null), "startedAt", array(), "any", true, true) && $this->getAttribute(($context["entity"] ?? null), "startedAt", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "startedAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.message_queue_job.header.stoppedAt"), "html", null, true);
        echo ": ";
        echo ((($this->getAttribute(($context["entity"] ?? null), "stoppedAt", array(), "any", true, true) && $this->getAttribute(($context["entity"] ?? null), "stoppedAt", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "stoppedAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 27
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 29
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_message_queue_root_jobs"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.message_queue_job.header.root_jobs"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.message_queue_job.header.name", array("%name%" => $this->getAttribute(        // line 32
($context["entity"] ?? null), "name", array()))));
        // line 34
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_content_data($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["gridName"] = "oro_message_queue_child_jobs";
        // line 39
        echo "    ";
        $context["params"] = array("root_job_id" => $this->getAttribute(($context["entity"] ?? null), "id", array()));
        // line 40
        echo "    ";
        $context["renderParams"] = array("enableFullScreenLayout" => true, "enableViews" => true, "showViewsInNavbar" => true);
        // line 45
        echo "
    ";
        // line 46
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["params"] ?? null), ($context["renderParams"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMessageQueueBundle:Job:childJobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  121 => 45,  118 => 40,  115 => 39,  112 => 38,  109 => 37,  102 => 34,  100 => 32,  99 => 29,  97 => 28,  94 => 27,  86 => 24,  79 => 23,  76 => 22,  71 => 19,  65 => 17,  63 => 16,  60 => 15,  54 => 13,  52 => 12,  49 => 11,  47 => 10,  40 => 7,  37 => 6,  33 => 1,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMessageQueueBundle:Job:childJobs.html.twig", "");
    }
}
