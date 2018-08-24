<?php

/* OroPromotionBundle:Coupon/widget:mass_update.html.twig */
class __TwigTemplate_ae44dab52faee90bf59cd26466b7c83c5390273a0fbd3c064ac1d611af1ff62d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroPromotionBundle:Coupon/widget:mass_update.html.twig", 1);
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
        // line 2
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_coupon_mass_edit_widget", array("gridName" => "promotion-coupons-grid", "actionName" => "edit", "inset" => ($context["inset"] ?? null), "values" => ($context["values"] ?? null)));
        // line 1
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
        echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
        echo "\"
          method=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
        echo "\"
          class=\"form-dialog\"
    >
        <fieldset class=\"form-horizontal\">
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </fieldset>

        <div class=\"hidden\">
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>

        <div class=\"widget-actions\">
            <button class=\"btn\" type=\"reset\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
            <button class=\"btn btn-success\" type=\"submit\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply"), "html", null, true);
        echo "</button>
        </div>
    </form>
    ";
        // line 23
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon/widget:mass_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  72 => 20,  68 => 19,  61 => 15,  54 => 11,  47 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon/widget:mass_update.html.twig", "");
    }
}
