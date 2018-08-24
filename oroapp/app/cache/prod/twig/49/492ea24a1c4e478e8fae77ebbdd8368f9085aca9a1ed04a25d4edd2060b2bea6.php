<?php

/* OroCampaignBundle:EmailCampaign:index.html.twig */
class __TwigTemplate_9b60ec64c7cc82eddb4051f906f8bdbf3080470fde834a8cb05da4d3ab6e71a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroCampaignBundle:EmailCampaign:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCampaignBundle:EmailCampaign:index.html.twig", 2);
        // line 4
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.entity_plural_label");
        // line 5
        $context["gridName"] = "oro-email-campaign-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"btn-group\">
        ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_campaign_create")) {
            // line 10
            echo "            ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_campaign_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.entity_label")));
            // line 13
            echo "
        ";
        }
        // line 15
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:EmailCampaign:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 13,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:EmailCampaign:index.html.twig", "");
    }
}
