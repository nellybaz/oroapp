<?php

/* OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/short:logged.html.twig */
class __TwigTemplate_722b8ed63df5ab6af4e816180cc8652f297c4e11888fdad9f25f7ae5310d0d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroProductBundle:layouts/default/oro_product_frontend_product_view:colored_short.html.twig", "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/short:logged.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroProductBundle:layouts/default/oro_product_frontend_product_view:colored_short.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/short:logged.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_product_view/page_template/short:logged.html.twig", "");
    }
}
