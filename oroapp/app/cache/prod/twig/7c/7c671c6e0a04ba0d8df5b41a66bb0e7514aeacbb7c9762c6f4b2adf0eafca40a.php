<?php

/* OroCheckoutBundle:layouts/default/oro_order_frontend_index:layout.html.twig */
class __TwigTemplate_c4984d804d48f2786e26250c3d8b02522eb0f58d2736544c345309e1115bcee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_page_title_widget' => array($this, 'block__page_title_widget'),
            '_checkouts_container_widget' => array($this, 'block__checkouts_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_page_title_widget', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('_checkouts_container_widget', $context, $blocks);
    }

    // line 1
    public function block__page_title_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["titleIcon"] = "fa-shopping-cart";
        // line 3
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 6
    public function block__checkouts_container_widget($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"grid__row grid__row--has-twin-row\">
        ";
        // line 8
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_order_frontend_index:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  46 => 7,  43 => 6,  36 => 3,  33 => 2,  30 => 1,  26 => 6,  23 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_order_frontend_index:layout.html.twig", "");
    }
}
