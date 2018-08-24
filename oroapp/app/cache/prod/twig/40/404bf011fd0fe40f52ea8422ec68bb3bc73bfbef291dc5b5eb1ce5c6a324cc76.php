<?php

/* OroOrderBundle:Form:discount_popup.html.twig */
class __TwigTemplate_75c91350d11c0bee80ad15ebb8092c2d1f0978fdba109c64d391ddbafc1c70c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_order_discount_item_widget' => array($this, 'block_oro_order_discount_item_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_order_discount_item_widget', $context, $blocks);
    }

    public function block_oro_order_discount_item_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"form-horizontal\" data-page-component-module=\"";
        echo twig_escape_filter($this->env, ($context["page_component"] ?? null), "html", null, true);
        echo "\" data-page-component-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["page_component_options"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"control-group\">
            <div class=\"control-label wrap\">";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'label');
        echo "</div>
            <div class=\"controls controls-discount-popup\">
                <div class=\"discount-popup\">
                    <div class=\"discount-amount-value\">
                        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget', array("attr" => array("data-role" => "value")));
        echo "
                        <div class=\"discount-amount-type\">
                            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'widget', array("attr" => array("data-role" => "type")));
        echo "
                        </div>
                    </div>

                    <div class=\"discount-item-value-calculated\">
                        ";
        // line 15
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()))) {
            // line 16
            echo "                            ";
            echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "amountPrice", array()));
            echo " (";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "percent", array())), "html", null, true);
            echo "%)
                        ";
        }
        // line 18
        echo "                    </div>
                    <div class=\"js-errors\"></div>

                    <span data-validation-ignore=\"\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "percent", array()), 'widget', array("attr" => array("data-role" => "percent")));
        echo "</span>
                    <span data-validation-ignore=\"\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "amount", array()), 'widget', array("attr" => array("data-role" => "amount")));
        echo "</span>
                </div>
            </div>
        </div>
        <div>
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("attr" => array("data-role" => "description")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Form:discount_popup.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  73 => 22,  69 => 21,  64 => 18,  56 => 16,  54 => 15,  46 => 10,  41 => 8,  34 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Form:discount_popup.html.twig", "");
    }
}
