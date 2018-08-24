<?php

/* OroOrderBundle:layouts/default/oro_order_frontend_index:layout.html.twig */
class __TwigTemplate_0157b471d144d66be6ea04c5ac240fe1053897b7f96f75b06c17b7386ddc8b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_orders_container_widget' => array($this, 'block__orders_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_orders_container_widget', $context, $blocks);
    }

    public function block__orders_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"grid__row grid__row--has-twin-row\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:layouts/default/oro_order_frontend_index:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:layouts/default/oro_order_frontend_index:layout.html.twig", "");
    }
}
