<?php

/* OroUserBundle:User:forcePasswordResetLink.html.twig */
class __TwigTemplate_e69764102ed439b6e083496c82da9988ed27b6111ce91f88fb6a991de9327d9d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientLink", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_send_forced_password_reset_email", array("id" => $this->getAttribute(        // line 2
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash", "iCss" => "fa-unlock-alt", "dataId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.reset_password.label"), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" => "force-password-reset-dialog", "stateEnabled" => ($this->getAttribute(        // line 12
($context["entity"] ?? null), "id", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())), "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.reset_dialog.title"), "allowMaximize" => false, "allowMinimize" => false, "autoResize" => true))))), "method"), "html", null, true);
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:forcePasswordResetLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 21,  22 => 12,  21 => 5,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User:forcePasswordResetLink.html.twig", "");
    }
}
