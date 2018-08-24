<?php

/* OroOrderBundle:Action:shippingTrackingsChange.html.twig */
class __TwigTemplate_2a642739a4878c272684441cb5924587791bc94ffd7b06109ce82b245770fede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroOrderBundle:Action:shippingTrackingsChange.html.twig", 1);
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
                ";
        // line 9
        if ($this->getAttribute(($context["buttonOptions"] ?? null), "page_component_module", array(), "any", true, true)) {
            echo "data-page-component-module=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["buttonOptions"] ?? null), "page_component_module", array()), "html", null, true);
            echo "\"";
        }
        // line 10
        echo "        >
            <div>
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shippingTrackings", array()), 'widget');
        echo "
            </div>

            <div class=\"hidden\">
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            </div>

            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_tracking.action.cancel"), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_tracking.action.save"), "html", null, true);
        echo "</button>
            </div>
        </form>
        ";
        // line 24
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Action:shippingTrackingsChange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  82 => 21,  78 => 20,  71 => 16,  64 => 12,  60 => 10,  54 => 9,  50 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Action:shippingTrackingsChange.html.twig", "");
    }
}
