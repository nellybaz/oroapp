<?php

/* OroTaskBundle:Task:myTasks.html.twig */
class __TwigTemplate_b46dce7340e08dd8b9bc3e88f3f178a1d0a6140a13d62e9eb4e1a4e5c9297ce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroTaskBundle:Task:myTasks.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["name"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["app"] ?? null), "user", array())), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 4
($context["name"] ?? null))));
        // line 6
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.entity_plural_label");
        // line 7
        $context["gridName"] = "user-tasks-grid";
        // line 9
        $context["params"] = array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.menu.my_tasks")));
        // line 15
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroTaskBundle:Task:myTasks.html.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task:myTasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  43 => 12,  40 => 11,  36 => 1,  34 => 9,  32 => 7,  30 => 6,  28 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task:myTasks.html.twig", "");
    }
}
