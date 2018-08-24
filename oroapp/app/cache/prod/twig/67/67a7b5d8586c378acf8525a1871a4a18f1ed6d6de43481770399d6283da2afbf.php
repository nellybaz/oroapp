<?php

/* OroCalendarBundle:Calendar:viewDefault.html.twig */
class __TwigTemplate_f5219063bbcb81b2595805cbcef0c93ed6b93fe94f0605b9f1216e8f262e228e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroCalendarBundle:Calendar:view.html.twig", "OroCalendarBundle:Calendar:viewDefault.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'ownerLink' => array($this, 'block_ownerLink'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroCalendarBundle:Calendar:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.my_calendar")));
        // line 5
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroCalendarBundle:Calendar:viewDefault.html.twig", 5)->display($context);
    }

    // line 8
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["breadcrumbs"] = array("entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.my_calendar"));
        // line 10
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_ownerLink($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Calendar:viewDefault.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  54 => 13,  47 => 10,  44 => 9,  41 => 8,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Calendar:viewDefault.html.twig", "");
    }
}
