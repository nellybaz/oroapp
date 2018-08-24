<?php

/* OroPromotionBundle:Coupon:generate.html.twig */
class __TwigTemplate_c953b3c87db015bdd6ca88865476dd483c320bec4b74c83b6e8484bd8122aad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroPromotionBundle:Coupon:generate.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActionBundle:Operation:form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["buttonOptions"] = $this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array()), "buttonOptions", array());
        // line 5
        echo "    ";
        $context["pageComponentOptions"] = array();
        // line 6
        echo "    <div class=\"widget-content\">
        <form id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo "
              method=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
        echo "\" data-collect=\"true\" class=\"form-dialog\"
              data-page-component-module=\"oroui/js/app/components/view-component\"
              data-page-component-options=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropromotion/js/app/views/coupon-generation-preview-view")), "html", null, true);
        // line 12
        echo "\"
        >
            <fieldset class=\"form-horizontal\">
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "couponGenerationOptions", array()), 'widget');
        echo "
                <div class=\"control-group attribute-row\">
                    <label class=\"control-label\">Code Preview</label>
                    <div class=\"controls\">
                        <div id=\"coupon-code-preview\" class=\"control-label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\PromotionBundle\Twig\CouponPreviewExtension')->generateCouponCode($this->getAttribute(($context["actionData"] ?? null), "couponGenerationOptions", array())), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </fieldset>

            <div class=\"hidden\">
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            </div>

            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_tracking.action.cancel"), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.generation.action.generate"), "html", null, true);
        echo "</button>
            </div>
        </form>
        ";
        // line 33
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon:generate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  89 => 30,  85 => 29,  78 => 25,  69 => 19,  62 => 15,  57 => 12,  55 => 10,  50 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon:generate.html.twig", "");
    }
}
