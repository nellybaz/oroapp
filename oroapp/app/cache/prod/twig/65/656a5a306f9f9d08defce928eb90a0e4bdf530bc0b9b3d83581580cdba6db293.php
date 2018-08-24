<?php

/* OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig */
class __TwigTemplate_3236bc0cb9f354971d307eabccc7f5cc3fc734e5b7c0df4b3d78eab33e518fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActivityListBundle:ActivityList/js:view.html.twig", "OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", 1);
        $this->blocks = array(
            'activityIcon' => array($this, 'block_activityIcon'),
            'activityActions' => array($this, 'block_activityActions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActivityListBundle:ActivityList/js:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_activityIcon($context, array $blocks = array())
    {
        // line 4
        echo "    <i class=\"";
        echo $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(((array_key_exists("entityClass", $context)) ? (_twig_default_filter(($context["entityClass"] ?? null))) : ("")), "icon");
        echo "\"></i>
";
    }

    // line 7
    public function block_activityActions($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"dropdown vertical-actions activity-actions\">
        <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle activity-item\">...</a>
        <ul class=\"dropdown-menu activity-item pull-right\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("actions", $context)) ? (_twig_default_filter(($context["actions"] ?? null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 12
            echo "                <li class=\"activity-action\">";
            echo $context["action"];
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            ";
        $this->loadTemplate("OroActivityListBundle:ActivityList/js:workflowTemplate.html.twig", "OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", 14)->display($context);
        // line 15
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  60 => 14,  51 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", "");
    }
}
