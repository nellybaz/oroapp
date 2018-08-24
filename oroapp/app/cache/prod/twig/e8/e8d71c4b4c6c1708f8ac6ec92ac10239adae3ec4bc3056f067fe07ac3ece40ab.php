<?php

/* OroEmailBundle:Email/Datagrid/Property:attachments.html.twig */
class __TwigTemplate_e17d1166832149a42d654d042a3651460cbdcf8d73034b5475bc96be584f6936 extends Twig_Template
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
        if (($context["value"] ?? null)) {
            // line 2
            echo "    <span class=\"icon grid\">
        <i class=\"fa-paperclip\"></i>
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:attachments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Datagrid/Property:attachments.html.twig", "");
    }
}
