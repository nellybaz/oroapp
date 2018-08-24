<?php

/* OroUserBundle:User:passwordChangeButton.html.twig */
class __TwigTemplate_c6be2882f03706bf2448199d77ae61c50d965bbba525196966334346b43bcacb extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_reset_set_password", array("id" => $this->getAttribute(        // line 2
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash", "iCss" => "fa-key", "dataId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.change_password.label"), "widget" => array("type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "set-password-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.change_dialog.title"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 550))))), "method"), "html", null, true);
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:passwordChangeButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 23,  21 => 5,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User:passwordChangeButton.html.twig", "");
    }
}
