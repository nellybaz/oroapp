<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_open_orders:layout.html.twig */
class __TwigTemplate_32b958d91a35047a06feea021b57e3ec3ed60fbf12e51ac5cf81ea50a6ed32d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_checkouts_title_widget' => array($this, 'block__checkouts_title_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_checkouts_title_widget', $context, $blocks);
    }

    public function block__checkouts_title_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <h1 class=\"page-title\">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_open_orders:layout.html.twig";
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
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_open_orders:layout.html.twig", "");
    }
}
