<?php

/* OroPricingBundle:Action:addProductPrice.html.twig */
class __TwigTemplate_8e4162f024f3a6047f3d9ae7b709222a11f9f07a78411ade38495a26314773ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroPricingBundle:Action:addProductPrice.html.twig", 1);
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
        echo "    <form id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
          name=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
          action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo "
          method=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
        echo "\"
          data-collect=\"true\"
          class=\"form-dialog\"
          data-page-component-module=\"oroproduct/js/app/components/product-unit-component\"
    >
        <fieldset class=\"form-horizontal\">
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "product", array()), 'row', array("attr" => array("class" => "product-product")));
        echo "
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "quantity", array()), 'row', array("attr" => array("class" => "product-quantity")));
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "unit", array()), 'row', array("attr" => array("class" => "product-unit")));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "price", array()), 'row');
        echo "
        </fieldset>

        <div class=\"hidden\">
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>

        <div class=\"widget-actions\">
            <button type=\"reset\" class=\"btn\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.productprice.action.cancel"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn btn-success\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.productprice.action.save"), "html", null, true);
        echo "</button>
        </div>
    </form>
    ";
        // line 28
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Action:addProductPrice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  85 => 25,  81 => 24,  74 => 20,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  46 => 7,  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Action:addProductPrice.html.twig", "");
    }
}
