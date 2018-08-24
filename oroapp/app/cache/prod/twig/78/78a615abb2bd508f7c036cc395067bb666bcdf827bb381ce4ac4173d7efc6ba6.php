<?php

/* @OroForm/layouts/blank/layout.yml */
class __TwigTemplate_f332ca74d0a597172371345ec90de33c5ecdec2f22b2f63c9c98da6a99266d18 extends Twig_Template
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
        echo "layout:
    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'
        - '@setFormTheme':
            themes: 'form_theme.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroForm/layouts/blank/layout.yml";
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
        return new Twig_Source("", "@OroForm/layouts/blank/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.yml");
    }
}
