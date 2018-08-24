<?php

/* OroTranslationBundle:Translation:translation.js.twig */
class __TwigTemplate_2e1fc02e2350a386443bb6d4057d43dc4ff61ec897c835086c4ecfd9102a3dd4 extends Twig_Template
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
        echo "Translator.fromJSON(";
        echo twig_jsonencode_filter(($context["json"] ?? null));
        echo ");";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Translation:translation.js.twig";
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
        return new Twig_Source("", "OroTranslationBundle:Translation:translation.js.twig", "");
    }
}
