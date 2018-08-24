<?php

/* OroPricingBundle:Product:sidebar.html.twig */
class __TwigTemplate_1c825ac6e6113f1e9b457a0d33fcf8b3d17993b7579a81c3452190399962e5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["currencyTemplate"] = ('' === $tmp = "    <div class=\"oro-clearfix\">
        <input type=\"checkbox\"
               id=\"oro_currency_selection_<%- ftid %>-uid-<%- uid %>\"
               name=\"oro_currency_selection[]\"
               data-ftid=\"oro_currency_selection_<%- ftid %>\"
               value=\"<%- value %>\"
               <%- checked %> >
        <label for=\"oro_currency_selection_<%- ftid %>-uid-<%- uid %>\"><%- text %><em>&nbsp;</em></label>
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
";
        // line 13
        $context["pageComponentOptions"] = array("priceListSelector" => ("#" . $this->getAttribute($this->getAttribute(        // line 14
($context["priceList"] ?? null), "vars", array()), "id", array())), "currenciesSelector" => ("#" . $this->getAttribute($this->getAttribute(        // line 15
($context["currencies"] ?? null), "vars", array()), "id", array())), "showTierPricesSelector" => ("#" . $this->getAttribute($this->getAttribute(        // line 16
($context["showTierPrices"] ?? null), "vars", array()), "id", array())), "currencyTemplate" =>         // line 17
($context["currencyTemplate"] ?? null));
        // line 19
        echo "
<div class=\"sidebar-items\"
    data-page-component-module=\"oropricing/js/app/components/product-sidebar-component\"
    data-page-component-options=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["pageComponentOptions"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"default-price-list-choice\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["priceList"] ?? null), 'row');
        echo "</div>
        <div class=\"currencies\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["currencies"] ?? null), 'row');
        echo "</div>
        <div class=\"show-tier-prices-choice\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["showTierPrices"] ?? null), 'row');
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Product:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  52 => 24,  48 => 23,  44 => 22,  39 => 19,  37 => 17,  36 => 16,  35 => 15,  34 => 14,  33 => 13,  30 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Product:sidebar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/Product/sidebar.html.twig");
    }
}
