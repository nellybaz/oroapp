<?php

/* OroEmailBundle:Email/dialog:view.html.twig */
class __TwigTemplate_f72ce6fbf854b6f691ea51251c3de2176eaf02782ae4e6fd3541016ceccfbaec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('page_container', $context, $blocks);
    }

    public function block_page_container($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_thread_widget", array("id" => $this->getAttribute(        // line 8
($context["entity"] ?? null), "id", array()), "showSingleEmail" =>  !$this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_activity_list.grouping"))), "alias" => "thread-view"));
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/dialog:view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  28 => 8,  26 => 6,  20 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/dialog:view.html.twig", "");
    }
}
