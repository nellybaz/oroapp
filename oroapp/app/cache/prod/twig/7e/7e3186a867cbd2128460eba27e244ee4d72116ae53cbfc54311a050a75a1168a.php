<?php

/* OroOrderBundle:Action:orderDiscount.html.twig */
class __TwigTemplate_f2c48752f18f851dca93ef41f812e7fc1fffae5697bc94ff5fd9c7e445b99190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroOrderBundle:Action:orderDiscount.html.twig", 1);
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
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["form"] ?? null), "orderDiscount", array()), array(0 => "@OroOrder/Form/discount_popup.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_form($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["buttonOptions"] = $this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array()), "buttonOptions", array());
        // line 7
        echo "    <div class=\"widget-content\">
        <form id=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo "
              method=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
        echo "\" data-collect=\"true\" class=\"form-dialog\"
        >
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "orderDiscount", array()), 'widget');
        echo "

            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.orderdiscount.action.cancel"), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"btn ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["buttonOptions"] ?? null), "data", array()), "class", array()), "html", null, true);
        echo "\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["buttonOptions"] ?? null), "data", array(), "any", false, true), "submit_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["buttonOptions"] ?? null), "data", array(), "any", false, true), "submit_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
        echo "
                </button>
            </div>
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </form>
        ";
        // line 21
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null), array("errorLabelContainer" => "div.js-errors"));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Action:orderDiscount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  75 => 19,  69 => 16,  65 => 15,  61 => 14,  55 => 11,  50 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Action:orderDiscount.html.twig", "");
    }
}
