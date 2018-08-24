<?php

/* OroTaskBundle:Task:userTasks.html.twig */
class __TwigTemplate_2b05c0efaa4dff405e21422992fce9a74ebd203dfc6ce9b8a5227ceffbaa401a extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaskBundle:Task:userTasks.html.twig", 1);
        // line 2
        ob_start();
        // line 3
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_user_tasks", array("userId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.user_tasks")));
        // line 7
        echo "
";
        $context["widgetContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo $context["UI"]->getscrollSubblock(null, array(0 => ($context["widgetContent"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task:userTasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  27 => 7,  25 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task:userTasks.html.twig", "");
    }
}
