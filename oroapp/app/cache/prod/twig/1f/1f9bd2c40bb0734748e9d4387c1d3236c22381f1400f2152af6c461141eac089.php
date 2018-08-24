<?php

/* OroPricingBundle:ProductPrice/widget:update.html.twig */
class __TwigTemplate_db1eef19640224489db716f3ccfb38e43552a329563cd64c44ad734b3c0fd2f8 extends Twig_Template
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
        $context["pageComponentOptions"] = array("_wid" => $this->getAttribute($this->getAttribute(        // line 2
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "savedId" => (((        // line 3
array_key_exists("savedId", $context) && ($context["savedId"] ?? null))) ? (($context["savedId"] ?? null)) : (null)));
        // line 5
        echo "<div class=\"widget-content\"
     data-page-component-module=\"orofrontend/js/app/components/widget-form-component\"
     data-page-component-options=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(($context["pageComponentOptions"] ?? null), array("message" => "oro.pricing.product_price_save.flash.success"))), "html", null, true);
        echo "\"
        >
    ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 10
            echo "        <div class=\"alert alert-error\">
            ";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        </div>
    ";
        }
        // line 14
        echo "
    <form id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo "
          method=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
        echo "\" data-collect=\"true\" class=\"form-dialog\"
          data-page-component-module=\"oroproduct/js/app/components/product-unit-component\">
        <fieldset class=\"form-horizontal\">
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'row', array("attr" => array("class" => "product-product")));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'row', array("attr" => array("class" => "product-quantity")));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'row', array("attr" => array("class" => "product-unit")));
        echo "
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "price", array()), 'row');
        echo "
        </fieldset>

        <div class=\"hidden\">
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>

        <div class=\"widget-actions\">
            <button type=\"reset\" class=\"btn\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.productprice.action.cancel"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn btn-success\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.productprice.action.save"), "html", null, true);
        echo "</button>
        </div>
    </form>
    ";
        // line 34
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:ProductPrice/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  92 => 31,  88 => 30,  81 => 26,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  56 => 16,  46 => 15,  43 => 14,  37 => 11,  34 => 10,  32 => 9,  27 => 7,  23 => 5,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:ProductPrice/widget:update.html.twig", "");
    }
}
