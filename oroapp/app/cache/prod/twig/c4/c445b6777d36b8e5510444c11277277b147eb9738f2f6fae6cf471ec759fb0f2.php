<?php

/* OroAttachmentBundle:Attachment:addLink.html.twig */
class __TwigTemplate_f661f64298c0cea9658fba49ea3995799ed165445950d463cdeb62b895c9de7a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientLink", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attachment_create", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 4
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash", "iCss" => "fa-paperclip", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.attachment.action.add"), "widget" => array("type" => "dialog", "multiple" => false, "reload-grid-name" => "attachment-grid", "options" => array("alias" => "attachment-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.attachment.action.add"), "allowMaximize" => false, "allowMinimize" => false, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 550))))), "method"), "html", null, true);
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Attachment:addLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 27,  21 => 5,  20 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Attachment:addLink.html.twig", "");
    }
}
