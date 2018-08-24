<?php

/* OroInventoryBundle:layouts/default/imports/oro_product_grid:low_inventory.html.twig */
class __TwigTemplate_a0ec6c73e92337f1157d45bac2658e030e6a9280b8d211f5e4f61d16b7d124c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_datagrid_row__product_low_inventory_label_widget' => array($this, 'block__product_datagrid_row__product_low_inventory_label_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_product_datagrid_row__product_low_inventory_label_widget', $context, $blocks);
    }

    public function block__product_datagrid_row__product_low_inventory_label_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute(($context["product"] ?? null), "low_inventory", array())) {
            // line 3
            echo "        <p class=\"grid__row product-low-inventory\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.low_inventory.label"), "html", null, true);
            echo "</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:layouts/default/imports/oro_product_grid:low_inventory.html.twig";
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
        return new Twig_Source("", "OroInventoryBundle:layouts/default/imports/oro_product_grid:low_inventory.html.twig", "");
    }
}
