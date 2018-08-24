<?php

/* OroEntityConfigBundle:Config:propertyLabel.html.twig */
class __TwigTemplate_e68d10efe6fbff591cb5af696e1fb90422b665309665ee3d0e7b208226b8481b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? null)), "html", null, true);
        echo "
";
        // line 2
        if ($this->getAttribute(($context["record"] ?? null), "hasValue", array(0 => "entity_icon"), "method", true, true)) {
            // line 3
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "entity_icon"), "method"), "html", null, true);
            echo " hide-text pull-right\"></i>
";
        }
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:propertyLabel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Config:propertyLabel.html.twig", "");
    }
}
