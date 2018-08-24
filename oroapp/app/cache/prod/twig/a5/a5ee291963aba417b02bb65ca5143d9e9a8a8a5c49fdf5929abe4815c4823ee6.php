<?php

/* OroMagentoBundle:Include:fields.html.twig */
class __TwigTemplate_ef9fea63536c51819cf8d7c42314c91fd1b19b0a8c17a4f97ecbcb0bb591dc0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroAddressBundle:Include:fields.html.twig", "OroMagentoBundle:Include:fields.html.twig", 1);
        $this->blocks = array(
            'oro_magento_customer_addresses_collection_widget' => array($this, 'block_oro_magento_customer_addresses_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroAddressBundle:Include:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_oro_magento_customer_addresses_collection_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock("oro_typed_address_widget", $context, $blocks);
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Include:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Include:fields.html.twig", "");
    }
}
