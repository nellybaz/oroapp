<?php

/* OroTaskBundle:Task:activityLink.html.twig */
class __TwigTemplate_3c21633031bd0e91061d1699589916f6e2d52554dbbc2dd7003e949e109eac53 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientLink", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_create", $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getActionParams(        // line 2
($context["entity"] ?? null), "activity")), "aCss" => "no-hash", "iCss" => "fa-tasks", "dataId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.add_entity"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.add_entity.title"), "widget" => array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "task-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.add_entity"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))))), "method"), "html", null, true);
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task:activityLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  21 => 5,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task:activityLink.html.twig", "");
    }
}
