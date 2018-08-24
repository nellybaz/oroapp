<?php

/* OroAttachmentBundle:Attachment/widget:attachments.html.twig */
class __TwigTemplate_bb86c2ec02f6f281712450c75f8e7f0c0c30b8534fa60adeec6f7f18d93bd0cf extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroAttachmentBundle:Attachment/widget:attachments.html.twig", 1);
        // line 2
        echo "<div class=\"widget-content\">
    ";
        // line 3
        echo $context["dataGrid"]->getrenderGrid("attachment-grid", array("entityId" => ($context["entityId"] ?? null), "entityField" => ($context["entityField"] ?? null)));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Attachment/widget:attachments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Attachment/widget:attachments.html.twig", "");
    }
}
