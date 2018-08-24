<?php

/* OroHangoutsCallBundle::startHangoutButton.html.twig */
class __TwigTemplate_df388037b49ba9cd79208e2092e32f935f149ac57883649fa524728158ab4107 extends Twig_Template
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
        $context["HangoutsCall"] = $this->loadTemplate("OroHangoutsCallBundle::macros.html.twig", "OroHangoutsCallBundle::startHangoutButton.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["HangoutsCall"]->getrenderStartButton(array("hangoutOptions" => array("invites" => ((        // line 5
array_key_exists("invites", $context)) ? (($context["invites"] ?? null)) : (array())))));
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle::startHangoutButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  25 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle::startHangoutButton.html.twig", "");
    }
}
