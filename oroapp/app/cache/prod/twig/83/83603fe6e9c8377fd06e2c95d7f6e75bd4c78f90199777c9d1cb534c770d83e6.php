<?php

/* OroShoppingListBundle:Action:lineItem.html.twig */
class __TwigTemplate_373b2477990fe56b8cd03ca6a6333ee683c82fdd6fef9061ca7f44d2f869c70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroShoppingListBundle:Action:lineItem.html.twig", 1);
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
        $context["frontendOptions"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array()), "frontendOptions", array()), "options", array());
        // line 5
        echo "    ";
        $context["pageComponentOptions"] = array();
        // line 6
        echo "    <div class=\"widget-content add-product-widget\">
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
        if ($this->getAttribute(($context["frontendOptions"] ?? null), "form_page_component_module", array(), "any", true, true)) {
            echo "data-page-component-module=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["frontendOptions"] ?? null), "form_page_component_module", array()), "html", null, true);
            echo "\"";
        }
        // line 10
        echo "        >
            <fieldset class=\"form-horizontal\">
                ";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array(), "any", false, true), "product", array(), "any", true, true)) {
            // line 13
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "owner", array()), 'row', array("attr" => array("class" => "product-owner")));
            echo "
                    ";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "product", array()), 'row', array("attr" => array("class" => "product-product")));
            echo "
                    ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "quantity", array()), 'row', array("attr" => array("class" => "product-quantity")));
            echo "
                    ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "unit", array()), 'row', array("attr" => array("class" => "product-unit")));
            echo "
                    ";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "notes", array()), 'row');
            echo "
                ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 18
($context["form"] ?? null), "lineItem", array(), "any", false, true), "shoppingList", array(), "any", true, true)) {
            // line 19
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "shoppingList", array()), 'row', array("attr" => array("class" => "oro-shoppinglist")));
            echo "
                    ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "quantity", array()), 'row', array("attr" => array("class" => "product-quantity")));
            echo "
                    ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "unit", array()), 'row', array("attr" => array("class" => "product-unit")));
            echo "
                    <div class=\"";
            // line 22
            if (( !twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "shoppingListLabel", array()), "vars", array()), "errors", array())) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "shoppingList", array()), "vars", array()), "currentShoppingList", array()))) {
                echo "hidden";
            }
            echo "\">
                        ";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "lineItem", array()), "shoppingListLabel", array()), 'row', array("attr" => array("class" => "oro-shoppinglist-label")));
            echo "
                    </div>
                ";
        }
        // line 26
        echo "            </fieldset>

            <div class=\"hidden\">
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            </div>

            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.lineitem.action.cancel"), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.lineitem.action.save"), "html", null, true);
        echo "</button>
            </div>
        </form>
        ";
        // line 37
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:Action:lineItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  130 => 34,  126 => 33,  119 => 29,  114 => 26,  108 => 23,  102 => 22,  98 => 21,  94 => 20,  89 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  66 => 13,  64 => 12,  60 => 10,  54 => 9,  50 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:Action:lineItem.html.twig", "");
    }
}
