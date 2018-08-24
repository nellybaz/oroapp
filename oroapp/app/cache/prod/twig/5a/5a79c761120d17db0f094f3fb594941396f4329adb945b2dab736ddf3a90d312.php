<?php

/* OroDashboardBundle:Dashboard:index.html.twig */
class __TwigTemplate_c887cbd1c18d2944202269a2806edfb872b8fa86d71d72290f907bd5ba0d5cf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroDashboardBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Dashboard:index.html.twig", 2);
        // line 3
        $context["gridName"] = "dashboards-grid";
        // line 5
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.management_title");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dashboard_create")) {
            // line 9
            echo "        ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dashboard_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.entity_label")));
            // line 12
            echo "
    ";
        }
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div ";
        // line 19
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orodashboard/js/app/components/dashboard-navigation-component", "options" => array("gridName" =>         // line 22
($context["gridName"] ?? null))));
        // line 24
        echo "></div>
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  61 => 22,  60 => 19,  54 => 17,  51 => 16,  45 => 12,  42 => 9,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Dashboard:index.html.twig", "");
    }
}
