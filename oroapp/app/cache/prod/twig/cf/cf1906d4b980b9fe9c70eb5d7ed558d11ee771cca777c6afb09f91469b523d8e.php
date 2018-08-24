<?php

/* OroEmailBundle:Email:activityButton.html.twig */
class __TwigTemplate_fda13c269532449f98244ee94ff583a40c0a932f719c4869fd88ca2001748f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroEmailBundle:Email:activityLink.html.twig", "OroEmailBundle:Email:activityButton.html.twig", 1);
        $this->blocks = array(
            'action_controll' => array($this, 'block_action_controll'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroEmailBundle:Email:activityLink.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_action_controll($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension')->isFeatureEnabled("email")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientButton", array(0 => ($context["options"] ?? null)), "method"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:activityButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email:activityButton.html.twig", "");
    }
}
