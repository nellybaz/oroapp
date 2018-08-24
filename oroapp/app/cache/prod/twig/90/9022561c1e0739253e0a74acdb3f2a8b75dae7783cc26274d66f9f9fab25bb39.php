<?php

/* OroEmailBundle:Email/dialog:viewGroup.html.twig */
class __TwigTemplate_f1fea46bfd08e586ea14e09b653021bd1eb30abea6cc22f2645d57dd76093eb2 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_thread_widget", array("id" => $this->getAttribute(        // line 3
($context["results"] ?? null), "entityId", array()))), "alias" => "thread-view", "pageComponentName" => "thread-view"));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/dialog:viewGroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 6,  20 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/dialog:viewGroup.html.twig", "");
    }
}
