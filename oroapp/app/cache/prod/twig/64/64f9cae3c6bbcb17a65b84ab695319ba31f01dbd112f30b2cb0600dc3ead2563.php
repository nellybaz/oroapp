<?php

/* OroCustomerBundle:layouts/default/imports/oro_customer_user_address_grid:layout.html.twig */
class __TwigTemplate_e4d9c152d4192de9cd5cdd1d18b25633453cecc01e2fbd7f8acda2e6a1290489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_user_address_grid__user_addresses_view_additional_container_widget' => array($this, 'block___oro_customer_user_address_grid__user_addresses_view_additional_container_widget'),
            '__oro_customer_user_address_grid__datagrid_toolbar_widget' => array($this, 'block___oro_customer_user_address_grid__datagrid_toolbar_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_user_address_grid__user_addresses_view_additional_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('__oro_customer_user_address_grid__datagrid_toolbar_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_customer_user_address_grid__user_addresses_view_additional_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid-views__aditional"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 11
    public function block___oro_customer_user_address_grid__datagrid_toolbar_widget($context, array $blocks = array())
    {
        // line 12
        echo "    <script type=\"text/html\" id=\"template-customer-user-address-book-addresses-grid-toolbar\">
        <div";
        // line 13
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        $this->displayBlock("container_widget", $context, $blocks);
        echo "</div>
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/imports/oro_customer_user_address_grid:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  53 => 12,  50 => 11,  43 => 7,  39 => 6,  36 => 5,  33 => 2,  30 => 1,  26 => 11,  23 => 10,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/imports/oro_customer_user_address_grid:layout.html.twig", "");
    }
}
