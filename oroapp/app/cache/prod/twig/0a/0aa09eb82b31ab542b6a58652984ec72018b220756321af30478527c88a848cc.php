<?php

/* OroCMSBundle:layouts/blank/oro_frontend_root:default.html.twig */
class __TwigTemplate_45514f7f131d705dc8b10ec49572a7bba2342277abb72dc2842a7cc9427e9290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_hero_promo_widget' => array($this, 'block__hero_promo_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_hero_promo_widget', $context, $blocks);
    }

    public function block__hero_promo_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "orofrontend/js/app/components/list-slider-component", "data-page-component-options" => array("slidesToShow" => 1, "autoplay" => true, "autoplaySpeed" => 4000, "arrows" => false, "dots" => true), "~class" => " promo-slider"));
        // line 13
        echo "
    <div ";
        // line 14
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        echo $this->getAttribute(($context["contentBlock"] ?? null), "content", array());
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:layouts/blank/oro_frontend_root:default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  32 => 14,  29 => 13,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:layouts/blank/oro_frontend_root:default.html.twig", "");
    }
}
