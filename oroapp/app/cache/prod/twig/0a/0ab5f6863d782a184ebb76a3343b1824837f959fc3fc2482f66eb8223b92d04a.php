<?php

/* OroVisibilityBundle:ProductVisibility/widget:scope.html.twig */
class __TwigTemplate_d850af920654c4c2193b6d2f411297ab6aa7ac6b66f7f634653f11b80685eb85 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroVisibilityBundle:ProductVisibility/widget:scope.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    <h5 class=\"widget-subtitle\"> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.visibility.to_all.label"), "html", null, true);
        echo " </h5>
    <div id=\"product-visibility-all\">
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "all", array()), 'row');
        echo "
    </div>
    <h5 class=\"widget-subtitle indented\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.visibility.customergroupproductvisibility.entity_label"), "html", null, true);
        echo "</h5>
    <div id=\"product-visibility-customer-group\">
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerGroup", array()), 'row', array("id" => (("customergroup-product-visibility-changeset" . "-") . $this->getAttribute(($context["scope"] ?? null), "id", array()))));
        echo "
        ";
        // line 11
        echo $context["dataGrid"]->getrenderGrid("customer-group-product-visibility-grid", array("target_entity_id" => $this->getAttribute(($context["entity"] ?? null), "id", array()), "scope_id" => $this->getAttribute(($context["scope"] ?? null), "id", array())));
        echo "
    </div>
    <h5 class=\"widget-subtitle indented\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.visibility.customerproductvisibility.entity_label"), "html", null, true);
        echo "</h5>
    <div id=\"product-visibility-customer\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer", array()), 'row', array("id" => (("customer-product-visibility-changeset" . "-") . $this->getAttribute(($context["scope"] ?? null), "id", array()))));
        echo "
        ";
        // line 16
        echo $context["dataGrid"]->getrenderGrid("customer-product-visibility-grid", array("target_entity_id" => $this->getAttribute(($context["entity"] ?? null), "id", array()), "scope_id" => $this->getAttribute(($context["scope"] ?? null), "id", array())));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroVisibilityBundle:ProductVisibility/widget:scope.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  54 => 15,  49 => 13,  44 => 11,  40 => 10,  35 => 8,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroVisibilityBundle:ProductVisibility/widget:scope.html.twig", "");
    }
}
