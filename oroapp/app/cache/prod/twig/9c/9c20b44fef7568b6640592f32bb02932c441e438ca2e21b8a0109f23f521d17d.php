<?php

/* OroAttachmentBundle:Attachment/Datagrid/Property:allachmentLink.html.twig */
class __TwigTemplate_2f112c441d09728575a0560b74330c1d57df65eb9fb93ea24fa1e35834636a6f extends Twig_Template
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
        $context["attachment"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "att"), "method");
        // line 2
        $context["additional"] = (($this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getTypeIsImage($this->getAttribute($this->getAttribute(($context["attachment"] ?? null), "file", array()), "mimeType", array()))) ? (array("galleryId" => "grid-attachments")) : (array()));
        // line 3
        echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileView($this->env, ($context["attachment"] ?? null), "file", $this->getAttribute(($context["attachment"] ?? null), "file", array()), ($context["additional"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Attachment/Datagrid/Property:allachmentLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Attachment/Datagrid/Property:allachmentLink.html.twig", "");
    }
}
