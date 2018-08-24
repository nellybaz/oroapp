<?php

/* OroNotificationBundle:MassNotification/widget:info.html.twig */
class __TwigTemplate_c3ab52e9777808b44d5f2721f518cf09ff81f64520193a3f17f0dae899d97eed extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNotificationBundle:MassNotification/widget:info.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroNotificationBundle:MassNotification/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.massnotification.sender.label"), $this->getAttribute(($context["entity"] ?? null), "sender", array()));
        echo "
            ";
        // line 8
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.massnotification.email.label"), $this->getAttribute(($context["entity"] ?? null), "email", array()));
        echo "
            ";
        // line 9
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.massnotification.processed_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "processedAt", array())));
        echo "
            ";
        // line 10
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.massnotification.subject.label"), $this->getAttribute(($context["entity"] ?? null), "subject", array()));
        echo "
            ";
        // line 11
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.massnotification.status.label"), ($context["statusLabel"] ?? null));
        echo "
            ";
        // line 12
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.massnotification.body.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "body", array())));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroNotificationBundle:MassNotification/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNotificationBundle:MassNotification/widget:info.html.twig", "");
    }
}
