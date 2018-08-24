<?php

/* OroCallBundle:Call:activityLink.html.twig */
class __TwigTemplate_603f4243d382c66fae76609f6e032fb622ea8d736deb31b7e2eb7e999d931a02 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCallBundle:Call:activityLink.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["options"] = array("dataUrl" => (( !twig_test_empty(        // line 4
($context["entity"] ?? null))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_create", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 7
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 8
($context["entity"] ?? null), "id", array()), "phone" => ((        // line 9
array_key_exists("phone", $context)) ? (twig_escape_filter($this->env, ($context["phone"] ?? null), "html")) : (null))))) : (null)), "class" => ((        // line 12
array_key_exists("cssClass", $context)) ? (($context["cssClass"] ?? null)) : ("")), "aCss" => "no-hash", "iCss" => "fa-phone-square", "dataId" => (( !twig_test_empty(        // line 15
($context["entity"] ?? null))) ? ($this->getAttribute(($context["entity"] ?? null), "id", array())) : (null)), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.log_call"), "widget" => array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "call-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.log_call"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))));
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('action_controll', $context, $blocks);
    }

    public function block_action_controll($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        echo $context["UI"]->getclientLink(($context["options"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call:activityLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 36,  36 => 35,  33 => 34,  31 => 15,  30 => 12,  29 => 9,  28 => 8,  27 => 7,  26 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call:activityLink.html.twig", "");
    }
}
