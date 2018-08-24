<?php

/* OroWebsiteBundle:Form:fields.html.twig */
class __TwigTemplate_618d6b6c37e0886411a64dc62ffdd113e8d3a0da180bb780b22caa3123f8f15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_website_scoped_data_type_row' => array($this, 'block_oro_website_scoped_data_type_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_website_scoped_data_type_row', $context, $blocks);
    }

    public function block_oro_website_scoped_data_type_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_first($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWebsiteBundle:Form:fields.html.twig";
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
        return new Twig_Source("", "OroWebsiteBundle:Form:fields.html.twig", "");
    }
}
