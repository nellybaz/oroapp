<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/blank/imports/oro_product_list/low_inventory.html.twig */
class __TwigTemplate_e32aaa33c9fd804f4c92f95569be91f46a7d72327a3f108c8f9c46d00d6769a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_list__product_low_inventory_label_widget' => array($this, 'block___oro_product_list__product_low_inventory_label_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_list__product_low_inventory_label_widget', $context, $blocks);
    }

    public function block___oro_product_list__product_low_inventory_label_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\InventoryBundle\Twig\LowInventoryExtension')->isLowInventory(($context["product"] ?? null))) {
            // line 3
            echo "        <p class=\"product-low-inventory\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.low_inventory.label"), "html", null, true);
            echo "</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/blank/imports/oro_product_list/low_inventory.html.twig";
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
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/blank/imports/oro_product_list/low_inventory.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/blank/imports/oro_product_list/low_inventory.html.twig");
    }
}
