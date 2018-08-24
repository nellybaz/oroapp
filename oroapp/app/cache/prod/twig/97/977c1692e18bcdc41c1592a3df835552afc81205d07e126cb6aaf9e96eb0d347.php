<?php

/* OroMagentoContactUsBundle:ContactRequest/widget:info.html.twig */
class __TwigTemplate_a681e0b579f578c9fb36b3f6aeb45df5aea2ed8c746b84e3d1b86f189daf4911 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoContactUsBundle:ContactRequest/widget:info.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroMagentoContactUsBundle:ContactRequest/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroMagentoContactUsBundle:ContactRequest/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.first_name.label"), $this->getAttribute(($context["entity"] ?? null), "firstName", array()));
        echo "
            ";
        // line 9
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.last_name.label"), $this->getAttribute(($context["entity"] ?? null), "lastName", array()));
        echo "
            ";
        // line 10
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.organization_name.label"), $this->getAttribute(($context["entity"] ?? null), "organizationName", array()));
        echo "
            ";
        // line 11
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.preferred_contact_method.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "preferredContactMethod", array())));
        echo "

            ";
        // line 13
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 17
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.email_address.label"), $context["email"]->getemail_address_simple($this->getAttribute(($context["entity"] ?? null), "emailAddress", array())));
        echo "
            ";
        // line 18
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.phone.label"), (($this->getAttribute(($context["entity"] ?? null), "phone", array())) ? ($context["ui"]->getrenderPhone($this->getAttribute(($context["entity"] ?? null), "phone", array()))) : (null)));
        echo "
            ";
        // line 19
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.contact_reason.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity"] ?? null), "contactReason", array())));
        echo "
            ";
        // line 20
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.comment.label"), nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "comment", array()))));
        echo "
            ";
        // line 21
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.feedback.label"), nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "feedback", array()))));
        echo "

            ";
        // line 23
        if ($this->getAttribute(($context["entity"] ?? null), "opportunity", array())) {
            // line 24
            if (($this->getAttribute(($context["entity"] ?? null), "opportunity", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["entity"] ?? null), "opportunity", array())))) {
                // line 25
                $context["opportunityView"] = $context["ui"]->getrenderUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "opportunity", array()), "id", array()))), $context["ui"]->getrenderEntityViewLabel($this->getAttribute(($context["entity"] ?? null), "opportunity", array()), "name", "oro.sales.oportunity.entity_label"));
            } else {
                // line 27
                $context["opportunityView"] = $context["ui"]->getrenderEntityViewLabel($this->getAttribute(($context["entity"] ?? null), "opportunity", array()), "name");
            }
            // line 30
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.opportunity.label"), ($context["opportunityView"] ?? null));
            echo "
            ";
        }
        // line 32
        echo "            ";
        if ($this->getAttribute(($context["entity"] ?? null), "lead", array())) {
            // line 33
            if (($this->getAttribute(($context["entity"] ?? null), "lead", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["entity"] ?? null), "lead", array())))) {
                // line 34
                $context["leadView"] = $context["ui"]->getrenderUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "lead", array()), "id", array()))), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "lead", array()), "name", array()));
            } else {
                // line 36
                $context["leadView"] = $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "lead", array()), "name", array());
            }
            // line 39
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.lead.label"), ($context["leadView"] ?? null));
            echo "
            ";
        }
        // line 41
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoContactUsBundle:ContactRequest/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  102 => 39,  99 => 36,  96 => 34,  94 => 33,  91 => 32,  86 => 30,  83 => 27,  80 => 25,  78 => 24,  76 => 23,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  48 => 13,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoContactUsBundle:ContactRequest/widget:info.html.twig", "");
    }
}
