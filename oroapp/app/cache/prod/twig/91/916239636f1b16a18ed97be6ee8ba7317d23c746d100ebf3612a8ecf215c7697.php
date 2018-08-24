<?php

/* OroNoteBundle:Note:addLink.html.twig */
class __TwigTemplate_447f7e554b08f6cb7e869430bf40d1034b6f42adaf7a54656528bf145ac3401b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientLink", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_note_create", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 4
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash", "iCss" => "fa-comment-o", "dataId" => $this->getAttribute(        // line 9
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.action.add"), "widget" => array("type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "note-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.action.add"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000))))), "method"), "html", null, true);
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNoteBundle:Note:addLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 27,  22 => 9,  21 => 5,  20 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNoteBundle:Note:addLink.html.twig", "");
    }
}
