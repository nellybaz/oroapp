<?php

/* OroEmailBundle:Email/Datagrid/Property:mailbox.html.twig */
class __TwigTemplate_d4b0617630e419e35d8219de05b997a6ce8d739449b016f8d0ce4a3458dbbf41 extends Twig_Template
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
        echo "<span class=\"nowrap\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "mailboxName"), "method"), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:mailbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Datagrid/Property:mailbox.html.twig", "");
    }
}
