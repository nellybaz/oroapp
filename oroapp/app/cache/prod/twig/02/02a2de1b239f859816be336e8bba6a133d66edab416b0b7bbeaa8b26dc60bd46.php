<?php

/* OroCustomerBundle:layouts/custom/oro_customer_frontend_customer_user_address_index:layout.html.twig */
class __TwigTemplate_de0446ca2e77648c32e8c060a06af93b0e6d86a339c7389f18ff0660f29040c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_customer_address_book_user_addresses_list_widget' => array($this, 'block__customer_address_book_user_addresses_list_widget'),
            '_customer_address_book_addresses_list_widget' => array($this, 'block__customer_address_book_addresses_list_widget'),
            '_user_addresses_user_addresses_head_widget' => array($this, 'block__user_addresses_user_addresses_head_widget'),
            '_company_addresses_user_addresses_head_widget' => array($this, 'block__company_addresses_user_addresses_head_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_customer_address_book_user_addresses_list_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_customer_address_book_addresses_list_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_user_addresses_user_addresses_head_widget', $context, $blocks);
        // line 30
        echo "

";
        // line 32
        $this->displayBlock('_company_addresses_user_addresses_head_widget', $context, $blocks);
    }

    // line 1
    public function block__customer_address_book_user_addresses_list_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " list-address-book"));
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
    public function block__customer_address_book_addresses_list_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " list-address-book"));
        // line 15
        echo "
    <div ";
        // line 16
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 21
    public function block__user_addresses_user_addresses_head_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " list-address-book__head"));
        // line 25
        echo "
    <div ";
        // line 26
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 27
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 32
    public function block__company_addresses_user_addresses_head_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " list-address-book__head"));
        // line 36
        echo "
    <div ";
        // line 37
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 38
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/custom/oro_customer_frontend_customer_user_address_index:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  112 => 37,  109 => 36,  106 => 33,  103 => 32,  96 => 27,  92 => 26,  89 => 25,  86 => 22,  83 => 21,  76 => 17,  72 => 16,  69 => 15,  66 => 12,  63 => 11,  56 => 7,  52 => 6,  49 => 5,  46 => 2,  43 => 1,  39 => 32,  35 => 30,  33 => 21,  30 => 20,  28 => 11,  25 => 10,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/custom/oro_customer_frontend_customer_user_address_index:layout.html.twig", "");
    }
}
