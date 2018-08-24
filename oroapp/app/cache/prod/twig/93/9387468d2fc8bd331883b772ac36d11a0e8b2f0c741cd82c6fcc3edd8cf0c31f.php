<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/twig_in_variables.html.twig */
class __TwigTemplate_50e8f0646c5b7eea03292ce1c46d9b2e5a4b578542f9c448f3c3b722d1f8a3d1 extends Twig_Template
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
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/twig_in_variables.html.twig";
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
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/twig_in_variables.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/twig_in_variables.html.twig");
    }
}
