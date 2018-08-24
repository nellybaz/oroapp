<?php

/* OroCMSBundle:layouts/blank:twig_in_variables.html.twig */
class __TwigTemplate_3f99e1136ea3491ab6873ab8ad70c8ca1b81069716216a78dc8673f354fbe0b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'text_with_placeholders_widget' => array($this, 'block_text_with_placeholders_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('text_with_placeholders_widget', $context, $blocks);
    }

    public function block_text_with_placeholders_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\CMSBundle\Twig\TwigInVariablesExtension')->renderContent(($context["text"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:layouts/blank:twig_in_variables.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:layouts/blank:twig_in_variables.html.twig", "");
    }
}
