<?php

/* OroMagentoBundle:Product/widget:info.html.twig */
class __TwigTemplate_a670a05efc57ae265286d9092a16fd277bea2d1a7a73d8b5cdde90f80e9c093d extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Product/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroMagentoBundle:Product/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.product.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
            ";
        // line 8
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.product.sku.label"), $this->getAttribute(($context["entity"] ?? null), "sku", array()));
        echo "
            ";
        // line 9
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.product.type.label"), $this->getAttribute(($context["entity"] ?? null), "type", array()));
        echo "
            ";
        // line 10
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.product.price.label"), $this->getAttribute(($context["entity"] ?? null), "price", array()));
        echo "
            ";
        // line 11
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.product.special_price.label"), $this->getAttribute(($context["entity"] ?? null), "specialPrice", array()));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 15
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.product.channel.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "name", array()));
        echo "

            ";
        // line 17
        $context["websites"] = array();
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "websites", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["website"]) {
            // line 19
            echo "                ";
            $context["websites"] = twig_array_merge(($context["websites"] ?? null), array(0 => $this->getAttribute($context["website"], "name", array())));
            // line 20
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['website'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            ";
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.product.websites.label"), twig_join_filter(($context["websites"] ?? null), ", "));
        echo "
            ";
        // line 22
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Product/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  73 => 21,  67 => 20,  64 => 19,  59 => 18,  57 => 17,  52 => 15,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Product/widget:info.html.twig", "");
    }
}
