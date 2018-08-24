<?php

/* OroCustomerBundle:layouts/default/page:main_menu_anonymous.html.twig */
class __TwigTemplate_ce3ea509fee2ed197da7ba20575aa02d2e96487820f32b66c4811624a92de3ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_header_row_customer_widget' => array($this, 'block__header_row_customer_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_header_row_customer_widget', $context, $blocks);
    }

    public function block__header_row_customer_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"header-row__container hidden-on-desktop\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route_name"] ?? null));
        echo "\" class=\"header-row__trigger\">
            <span class=\"nav-trigger__icon\"><i class=\"fa-user\"></i></span>
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/page:main_menu_anonymous.html.twig";
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
        return new Twig_Source("", "OroCustomerBundle:layouts/default/page:main_menu_anonymous.html.twig", "");
    }
}
