<?php

/* OroPricingBundle:layouts/blank/imports/oro_product_quick_add_validation:quick_add_validation_subtotal.html.twig */
class __TwigTemplate_2e65b64b5c0078a660ed290942a83e819a11823769f8408d3c9a60cd203a977f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quick_add_validation_additional_fields_subtotal_widget' => array($this, 'block__quick_add_validation_additional_fields_subtotal_widget'),
            '_quick_add_validation_items_table_header_additional_data_subtotal_widget' => array($this, 'block__quick_add_validation_items_table_header_additional_data_subtotal_widget'),
            '_quick_add_validation_valid_items_additional_fields_subtotal_widget' => array($this, 'block__quick_add_validation_valid_items_additional_fields_subtotal_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quick_add_validation_additional_fields_subtotal_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_quick_add_validation_items_table_header_additional_data_subtotal_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('_quick_add_validation_valid_items_additional_fields_subtotal_widget', $context, $blocks);
    }

    // line 1
    public function block__quick_add_validation_additional_fields_subtotal_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " text-right")));
        // line 3
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 4
        if ( !(null === $this->getAttribute(($context["price"] ?? null), "value", array()))) {
            // line 5
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.subtotals.subtotal.label"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_localized_currency_filter($this->getAttribute(($context["price"] ?? null), "value", array()), $this->getAttribute(($context["price"] ?? null), "currency", array())), "html", null, true);
            echo "
        ";
        } else {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceAttribute.withoutPrice"), "html", null, true);
            echo "
        ";
        }
        // line 9
        echo "    </div>
";
    }

    // line 12
    public function block__quick_add_validation_items_table_header_additional_data_subtotal_widget($context, array $blocks = array())
    {
        // line 13
        echo "    <th class=\"text-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.price.label"), "html", null, true);
        echo "</th>
";
    }

    // line 16
    public function block__quick_add_validation_valid_items_additional_fields_subtotal_widget($context, array $blocks = array())
    {
        // line 17
        echo "    <td class=\"text-right\">
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["validRow"] ?? null), "additionalFields", array(), "any", false, true), "price", array(), "any", false, true), "value", array(), "any", false, true), "value", array(), "any", true, true)) {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, twig_localized_currency_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["additionalFields"] ?? null), "price", array()), "value", array()), "value", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["additionalFields"] ?? null), "price", array()), "value", array()), "currency", array())), "html", null, true);
            echo "
        ";
        } else {
            // line 21
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceAttribute.withoutPrice"), "html", null, true);
            echo "
        ";
        }
        // line 23
        echo "    </td>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:layouts/blank/imports/oro_product_quick_add_validation:quick_add_validation_subtotal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  92 => 21,  86 => 19,  84 => 18,  81 => 17,  78 => 16,  71 => 13,  68 => 12,  63 => 9,  57 => 7,  49 => 5,  47 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 16,  29 => 15,  27 => 12,  24 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:layouts/blank/imports/oro_product_quick_add_validation:quick_add_validation_subtotal.html.twig", "");
    }
}
