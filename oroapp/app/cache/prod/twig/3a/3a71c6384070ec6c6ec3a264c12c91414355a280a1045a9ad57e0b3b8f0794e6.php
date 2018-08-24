<?php

/* @OroEntityConfig/layouts/blank/page/layout.yml */
class __TwigTemplate_c1faa08ab7256943e84b3e969637d035f83e139ba7b453c8ae5d2e1d6413065d extends Twig_Template
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
";
    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/layouts/blank/page/layout.yml";
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
        return new Twig_Source("", "@OroEntityConfig/layouts/blank/page/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/page/layout.yml");
    }
}
