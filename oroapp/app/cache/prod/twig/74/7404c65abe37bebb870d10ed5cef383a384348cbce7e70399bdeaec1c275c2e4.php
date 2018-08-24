<?php

/* OroEmailBundle:Email:activityLink.html.twig */
class __TwigTemplate_33305d6b84c03474a0a712c53ace12e9a880bdffe8939d45801360d689ef225e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'action_controll' => array($this, 'block_action_controll'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email:activityLink.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["options"] = array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_email_create", array("to" => ((        // line 6
array_key_exists("email", $context)) ? (twig_escape_filter($this->env, ($context["email"] ?? null), "html")) : ($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmail(($context["entity"] ?? null)))), "entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 7
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 8
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash", "iCss" => "fa-envelope", "class" => ((        // line 12
array_key_exists("cssClass", $context)) ? (($context["cssClass"] ?? null)) : ("")), "dataId" => $this->getAttribute(        // line 13
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "widget" => array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "email-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))));
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('action_controll', $context, $blocks);
    }

    public function block_action_controll($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension')->isFeatureEnabled("email")) {
            // line 35
            echo "        ";
            echo $context["UI"]->getclientLink(($context["options"] ?? null));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:activityLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 35,  41 => 34,  35 => 33,  32 => 32,  30 => 13,  29 => 12,  28 => 8,  27 => 7,  26 => 6,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email:activityLink.html.twig", "");
    }
}
