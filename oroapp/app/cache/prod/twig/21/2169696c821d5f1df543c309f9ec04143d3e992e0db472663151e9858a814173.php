<?php

/* OroInventoryBundle:Form:fields.html.twig */
class __TwigTemplate_e0b801ca1034aed59102697daf072ddb07e16375ad118d51b87d1dcdee47ca4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_inventory_level_grid_row' => array($this, 'block_oro_inventory_level_grid_row'),
            'oro_inventory_level_grid_widget' => array($this, 'block_oro_inventory_level_grid_widget'),
            'oro_checkout_ship_until_widget' => array($this, 'block_oro_checkout_ship_until_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_inventory_level_grid_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('oro_inventory_level_grid_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('oro_checkout_ship_until_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_inventory_level_grid_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_oro_inventory_level_grid_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-level-quantity-options" => twig_jsonencode_filter(array("quantityColumnName" => "levelQuantity", "unitColumnName" => "unitCode", "unitPrecisions" =>         // line 10
($context["unitPrecisions"] ?? null), "quantityConstraints" =>         // line 11
($context["quantityConstraints"] ?? null)))));
        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("id" => "inventory-level-quantities", "attr" => ($context["attr"] ?? null)));
        echo "

    ";
        // line 16
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroInventoryBundle:Form:fields.html.twig", 16);
        // line 17
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid("inventory-level-grid", array("productId" => $this->getAttribute(($context["product"] ?? null), "id", array())));
        echo "
";
    }

    // line 20
    public function block_oro_checkout_ship_until_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayBlock("oro_date_widget", $context, $blocks);
        echo "
    ";
        // line 22
        if (($context["disabled"] ?? null)) {
            // line 23
            echo "        <div class=\"notification--warning\">
            <i class=\"fa-exclamation-circle\"></i>
            <span class=\"notification__text\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.availability_date.warning"), "html", null, true);
            echo "</span>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  79 => 23,  77 => 22,  72 => 21,  69 => 20,  62 => 17,  60 => 16,  54 => 14,  52 => 11,  51 => 10,  49 => 6,  46 => 5,  39 => 2,  36 => 1,  32 => 20,  29 => 19,  27 => 5,  24 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/Form/fields.html.twig");
    }
}
