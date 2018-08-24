<?php

/* OroTaskBundle:Task/Calendar:info.html.twig */
class __TwigTemplate_d7f5ff6666f7f4a35f5bded63a881ffbd599c42788d142e2a25693f1a01c578f extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaskBundle:Task/Calendar:info.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.subject.label"), $this->getAttribute(($context["entity"] ?? null), "subject", array()));
        echo "
            ";
        // line 7
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "
            ";
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.due_date.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "dueDate", array())));
        echo "
            ";
        // line 9
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.task_priority.label"), $this->getAttribute(($context["entity"] ?? null), "taskPriority", array()));
        echo "
            ";
        // line 10
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.owner.label"), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "owner", array())));
        echo "
        </div>
        <div class=\"widget-actions form-actions\" style=\"display: none;\">
            ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 14
            echo "                ";
            echo $context["UI"]->getdeleteButton(array("aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataUrl" => "oro_api_delete_task", "data" => array("action-name" => "delete"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_label")));
            // line 20
            echo "
            ";
        }
        // line 22
        echo "            <a class=\"action btn\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_view", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.view_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null)), "label")))), "html", null, true);
        // line 24
        echo "</a>
            <a class=\"action btn\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null)), "label")))), "html", null, true);
        // line 27
        echo "</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task/Calendar:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  70 => 26,  67 => 25,  64 => 24,  62 => 23,  58 => 22,  54 => 20,  51 => 14,  49 => 13,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task/Calendar:info.html.twig", "");
    }
}
