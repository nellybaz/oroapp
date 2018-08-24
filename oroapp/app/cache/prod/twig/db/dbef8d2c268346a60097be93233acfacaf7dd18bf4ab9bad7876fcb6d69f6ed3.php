<?php

/* OroRFPBundle:Request:note.html.twig */
class __TwigTemplate_6b09b9e5cd81639b652b56293a3b8b51c8ff169a0d3aa96b7a74bb633885a101 extends Twig_Template
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
        echo "New status: ";
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "
<p></p>
";
        // line 3
        echo twig_escape_filter($this->env, ($context["note"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:Request:note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:Request:note.html.twig", "");
    }
}
