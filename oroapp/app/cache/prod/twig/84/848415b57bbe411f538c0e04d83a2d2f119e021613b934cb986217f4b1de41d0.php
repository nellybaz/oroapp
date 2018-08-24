<?php

/* OroUIBundle::skype_button.html.twig */
class __TwigTemplate_14b2bd18d57217de61fc43bdb8aef07d3ac60cb09a909be96b689885f5e9f7f7 extends Twig_Template
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
        echo "<a href=\"skype:";
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["options"] ?? null), "participants", array()), ";"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "name", array()), "html", null, true);
        echo "\"
    class=\"skype-button\"
    id=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "element", array()), "html", null, true);
        echo "\"><i class=\"fa-skype\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Call"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::skype_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::skype_button.html.twig", "");
    }
}
