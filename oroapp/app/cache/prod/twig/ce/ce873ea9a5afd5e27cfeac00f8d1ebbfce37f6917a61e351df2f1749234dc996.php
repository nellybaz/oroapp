<?php

/* OroInventoryBundle:layouts/blank/oro_product_frontend_product_view:low_inventory.html.twig */
class __TwigTemplate_8f8a682bcd47f066b3ae532db28030d6258bc8146cb4345b1d51f327a03a47e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_low_inventory_label_widget' => array($this, 'block__low_inventory_label_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_low_inventory_label_widget', $context, $blocks);
    }

    public function block__low_inventory_label_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\InventoryBundle\Twig\LowInventoryExtension')->isLowInventory(($context["product"] ?? null))) {
            // line 3
            echo "        <p class=\"product-low-inventory\">
           ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.low_inventory.label"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:layouts/blank/oro_product_frontend_product_view:low_inventory.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:layouts/blank/oro_product_frontend_product_view:low_inventory.html.twig", "");
    }
}
