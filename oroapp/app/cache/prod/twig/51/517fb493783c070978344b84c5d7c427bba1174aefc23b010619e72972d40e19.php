<?php

/* OroOrganizationBundle:BusinessUnit/widget:info.html.twig */
class __TwigTemplate_395473fa9d513c5d8443caebfe0576a4d516818e4c48b7571540b78b4c1fae51 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit/widget:info.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
            ";
        // line 9
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.organization.label"), $this->getAttribute(($context["entity"] ?? null), "organization", array()));
        echo "
            ";
        // line 10
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.website.label"), (($this->getAttribute(($context["entity"] ?? null), "website", array())) ? ($context["ui"]->getrenderUrl($this->getAttribute(($context["entity"] ?? null), "website", array()))) : (null)));
        echo "

            ";
        // line 12
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 16
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.email.label"), $context["email"]->getrenderEmailWithActions($this->getAttribute(($context["entity"] ?? null), "email", array()), ($context["entity"] ?? null)));
        echo "
            ";
        // line 17
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.phone.label"), (($this->getAttribute(($context["entity"] ?? null), "phone", array())) ? ($context["ui"]->getrenderPhoneWithActions($this->getAttribute(($context["entity"] ?? null), "phone", array()), ($context["entity"] ?? null))) : (null)));
        echo "
            ";
        // line 18
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.fax.label"), (($this->getAttribute(($context["entity"] ?? null), "fax", array())) ? ($context["ui"]->getrenderPhone($this->getAttribute(($context["entity"] ?? null), "fax", array()))) : (null)));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  55 => 17,  51 => 16,  44 => 12,  39 => 10,  35 => 9,  31 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrganizationBundle:BusinessUnit/widget:info.html.twig", "");
    }
}
