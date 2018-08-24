<?php

/* OroAttachmentBundle:Attachment/Datagrid/Property:fileSize.html.twig */
class __TwigTemplate_d94c871ba2771bc6cf120e3b67164bbff020d395a113c3e5cca1135d94917b29 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileSize(($context["value"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Attachment/Datagrid/Property:fileSize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Attachment/Datagrid/Property:fileSize.html.twig", "");
    }
}
