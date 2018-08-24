<?php

/* OroHangoutsCallBundle::inviteHangoutButton.html.twig */
class __TwigTemplate_ce383115f1af637b246763851c8f5dd21a2d2297d246b95789ca82a7e89f783d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroHangoutsCallBundle::inviteHangoutLink.html.twig", "OroHangoutsCallBundle::inviteHangoutButton.html.twig", 1);
        $this->blocks = array(
            'action_controll' => array($this, 'block_action_controll'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroHangoutsCallBundle::inviteHangoutLink.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientButton", array(0 => ($context["options"] ?? null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle::inviteHangoutButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle::inviteHangoutButton.html.twig", "");
    }
}
