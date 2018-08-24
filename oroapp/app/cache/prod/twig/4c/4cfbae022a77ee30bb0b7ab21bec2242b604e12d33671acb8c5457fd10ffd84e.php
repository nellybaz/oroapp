<?php

/* OroAttachmentBundle:Twig:image.html.twig */
class __TwigTemplate_a830d3cc088721f017f7526c058c251d3637f12d5f2511b35b8ec5b6e2ff7da9 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" class=\"no-hash\" title=\"";
        echo twig_escape_filter($this->env, ($context["fileName"] ?? null), "html", null, true);
        echo "\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["imagePath"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["fileName"] ?? null), "html", null, true);
        echo "\" />
</a>
";
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Twig:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Twig:image.html.twig", "");
    }
}
