<?php

/* OroUserBundle:User:passwordChangeLink.html.twig */
class __TwigTemplate_8bbe9c2b637064c790c8d1f5e079d319013112df5f80ca22a1852e0bf60ee5bf extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientLink", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_reset_set_password", array("id" => $this->getAttribute(        // line 2
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash", "iCss" => "fa-key", "dataId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.change_password.label"), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" => "set-password-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.change_dialog.title"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 550))))), "method"), "html", null, true);
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:passwordChangeLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 22,  21 => 5,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User:passwordChangeLink.html.twig", "");
    }
}
