<?php

/* OroCampaignBundle:EmailCampaign/Property:schedule.html.twig */
class __TwigTemplate_b132a7df832b2929b7835a790462c0289ad54329fb9fba9f9359ac5f1a8c3bbb extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.campaign.emailcampaign.schedule." . ($context["value"] ?? null))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:EmailCampaign/Property:schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:EmailCampaign/Property:schedule.html.twig", "");
    }
}
