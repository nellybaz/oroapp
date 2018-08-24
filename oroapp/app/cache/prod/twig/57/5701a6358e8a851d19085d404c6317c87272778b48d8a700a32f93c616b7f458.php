<?php

/* OroContactBundle:Dashboard:myContactsActivity.html.twig */
class __TwigTemplate_52d4cc82c3cec651e251e483bbb686fc53e6049e441c04e8c71e4251c82988a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:grid.html.twig", "OroContactBundle:Dashboard:myContactsActivity.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["gridName"] = "dashboard-my-contacts-activity-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataGrid"] ?? null), "renderGrid", array(0 => ($context["gridName"] ?? null), 1 => ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), 2 => twig_array_merge(array("routerEnabled" => false, "enableFilters" => false), ((        // line 8
array_key_exists("renderParams", $context)) ? (_twig_default_filter(($context["renderParams"] ?? null), array())) : (array())))), "method"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_actions($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["actions"] = array(0 => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_index"), "type" => "link", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.my_contacts_activity.view_all")));
        // line 17
        echo "
    ";
        // line 18
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Dashboard:myContactsActivity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  49 => 17,  46 => 12,  43 => 11,  37 => 8,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Dashboard:myContactsActivity.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm/src/Oro/Bundle/ContactBundle/Resources/views/Dashboard/myContactsActivity.html.twig");
    }
}
