<?php

/* OroShoppingListBundle:ShoppingList/Frontend/widget:update.html.twig */
class __TwigTemplate_784882c09c37604f091c5ca4b24ed76f7c5ec2914b49b2313c1641e75a397d5a extends Twig_Template
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
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "savedId" => ((        // line 3
array_key_exists("savedId", $context)) ? (_twig_default_filter(($context["savedId"] ?? null), null)) : (null)));
        // line 5
        echo "
<div class=\"widget-content\"
     data-page-component-module=\"orofrontend/js/app/components/widget-form-component\"
     data-page-component-options=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["pageComponentOptions"] ?? null)), "html", null, true);
        echo "\"
        >
    ";
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 11
            echo "        <div class=\"alert alert-error\">
            ";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        </div>
    ";
        }
        // line 15
        echo "
    <form id=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo "
          method=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
        echo "\" data-collect=\"true\" class=\"form-dialog\">
        <fieldset class=\"form-horizontal\">
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row', array("label" => "oro.shoppinglist.create_new_form.input_label"));
        echo "
            <i>
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.create_new_form.comment"), "html", null, true);
        echo "<br/>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.create_new_form.comment_cancel"), "html", null, true);
        echo "
            </i>
        </fieldset>

        <div class=\"hidden\">
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>

        <div class=\"widget-actions\">
            <button type=\"reset\" class=\"btn\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.create_new_form.cancel_label"), "html", null, true);
        echo "</button>
            <button type=\"submit\"
                    class=\"btn btn-success\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.create_new_form.create_and_add.label"), "html", null, true);
        echo "</button>
        </div>
    </form>
    ";
        // line 36
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:ShoppingList/Frontend/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  91 => 33,  86 => 31,  79 => 27,  71 => 22,  67 => 21,  62 => 19,  57 => 17,  47 => 16,  44 => 15,  38 => 12,  35 => 11,  33 => 10,  28 => 8,  23 => 5,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:ShoppingList/Frontend/widget:update.html.twig", "");
    }
}
