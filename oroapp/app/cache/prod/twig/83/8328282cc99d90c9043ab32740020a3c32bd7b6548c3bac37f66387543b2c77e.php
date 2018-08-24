<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_line_item_form/oro_product_line_item_form.html.twig */
class __TwigTemplate_64d6711347e6c295ed20e66778d913b47531dc4e2471047a63b527b1a96d1d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_line_item_form__line_item_form_fields_widget' => array($this, 'block___oro_product_line_item_form__line_item_form_fields_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_line_item_form__line_item_form_fields_widget', $context, $blocks);
    }

    public function block___oro_product_line_item_form__line_item_form_fields_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["class_prefix"] = "line_item_form_fields";
        // line 3
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("class_prefix" =>         // line 4
($context["class_prefix"] ?? null)));
        // line 6
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->setClassPrefixToForm(($context["form"] ?? null), ($context["class_prefix"] ?? null));
        // line 7
        echo "    ";
        if ( !array_key_exists("renderCache", $context)) {
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item__qty__current-grid", "data-page-component-module" => "oroproduct/js/app/components/product-unit-select-component", "data-page-component-options" => twig_jsonencode_filter(array("singleUnitMode" =>             // line 13
($context["singleUnitMode"] ?? null), "singleUnitModeCodeVisible" =>             // line 14
($context["singleUnitModeCodeVisible"] ?? null), "configDefaultUnit" =>             // line 15
($context["defaultUnitCode"] ?? null)))));
            // line 18
            echo "
            <div ";
            // line 19
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
                <div>
                    <div class=\"form-row ";
            // line 21
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget', array("attr" => array("class" => "product-item__qty-input")));
            // line 24
            echo "
                    </div>
                    <div class=\"form-row ";
            // line 26
            echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget');
            echo "
                    </div>
                </div>
                ";
            // line 30
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
            </div>
        ";
            $context["renderCache"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 33
            echo "        ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("renderCache" =>             // line 34
($context["renderCache"] ?? null)));
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        if ( !$this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->isConfigurableType($this->getAttribute(($context["product"] ?? null), "type", array()))) {
            // line 38
            echo "        ";
            echo twig_escape_filter($this->env, ($context["renderCache"] ?? null), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_line_item_form/oro_product_line_item_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 38,  89 => 37,  86 => 36,  84 => 34,  82 => 33,  76 => 30,  70 => 27,  66 => 26,  62 => 24,  60 => 22,  56 => 21,  51 => 19,  48 => 18,  46 => 15,  45 => 14,  44 => 13,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_line_item_form/oro_product_line_item_form.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_line_item_form/oro_product_line_item_form.html.twig");
    }
}
