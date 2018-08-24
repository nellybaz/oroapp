<?php

/* OroTaskBundle:Task:assignTaskButton.html.twig */
class __TwigTemplate_1a23dbdc910a07cc6b4761ebd764cff630998df9f78c89dcfcd542d9fc7f8a3f extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_create", $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getActionParams(        // line 2
($context["entity"] ?? null), "assign")), "aCss" => "no-hash", "iCss" => "fa-tasks", "dataId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.assign_entity"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.assign_entity.title"), "widget" => array("type" => "dialog", "multiple" => true, "reload-grid-name" => "user-tasks-grid", "options" => array("alias" => "assign-task-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.assign_entity.widget_title", array("%username%" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(        // line 15
($context["entity"] ?? null)))), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))))), "method"), "html", null, true);
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task:assignTaskButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 24,  22 => 15,  21 => 5,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task:assignTaskButton.html.twig", "");
    }
}
