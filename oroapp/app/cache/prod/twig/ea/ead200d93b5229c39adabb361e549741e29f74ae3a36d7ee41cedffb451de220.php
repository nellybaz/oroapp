<?php

/* OroAttachmentBundle:Attachment:attachments.html.twig */
class __TwigTemplate_47c644cecee1bc9655e9bc04511a38d6ae5d5920ceeaaf884cd1e1ae75284886 extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attachment_view")) {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAttachmentBundle:Attachment:attachments.html.twig", 2);
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "        ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attachment_widget_attachments", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(            // line 7
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(            // line 8
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.attachment.entity_plural_label"), "cssClass" => "list-widget"));
            // line 12
            echo "
    ";
            $context["widgetContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "    ";
            echo $context["UI"]->getscrollSubblock(null, array(0 => ($context["widgetContent"] ?? null)));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Attachment:attachments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 14,  32 => 12,  30 => 8,  29 => 7,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Attachment:attachments.html.twig", "");
    }
}
