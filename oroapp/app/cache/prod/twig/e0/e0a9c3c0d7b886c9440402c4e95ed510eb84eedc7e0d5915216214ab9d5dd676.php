<?php

/* OroProductBundle:layouts/default/oro_product_frontend_quick_add_import/dialog:quick_add_import_result.html.twig */
class __TwigTemplate_ef1f88627bee659381db2861c3948d7af634010020652d81ed3c9049c6e7acf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quick_add_form_widget' => array($this, 'block__quick_add_form_widget'),
            '_quick_add_form_start_widget' => array($this, 'block__quick_add_form_start_widget'),
            '_quick_add_form_buttons_widget' => array($this, 'block__quick_add_form_buttons_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quick_add_form_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_quick_add_form_start_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_quick_add_form_buttons_widget', $context, $blocks);
    }

    // line 1
    public function block__quick_add_form_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " hidden-form")));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block__quick_add_form_start_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->setClassPrefixToForm(($context["form"] ?? null), ($context["class_prefix"] ?? null));
        // line 12
        echo "    ";
        $context["pageComponentOptions"] = array("componentSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
($context["form"] ?? null), "component", array()), "vars", array()), "id", array())), "additionalSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
($context["form"] ?? null), "additional", array()), "vars", array()), "id", array())), "componentPrefix" => "quick-add-import");
        // line 17
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroproduct/js/app/components/quick-add-component", "data-page-component-options" => twig_jsonencode_filter(        // line 19
($context["pageComponentOptions"] ?? null))),         // line 20
($context["attr"] ?? null));
        // line 21
        echo "    ";
        $this->displayBlock("form_start_widget", $context, $blocks);
        echo "
";
    }

    // line 24
    public function block__quick_add_form_buttons_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 26
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " clearfix")));
        // line 28
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"pull-left\">";
        // line 29
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
        <fieldset class=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "__buttons\">
            ";
        // line 31
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_product_quick_add_buttons", $context)) ? (_twig_default_filter(($context["oro_product_quick_add_buttons"] ?? null), "oro_product_quick_add_buttons")) : ("oro_product_quick_add_buttons")), array());
        // line 32
        echo "        </fieldset>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_quick_add_import/dialog:quick_add_import_result.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  98 => 31,  94 => 30,  90 => 29,  85 => 28,  83 => 26,  81 => 25,  78 => 24,  71 => 21,  69 => 20,  68 => 19,  66 => 17,  64 => 14,  63 => 13,  61 => 12,  58 => 11,  55 => 10,  48 => 6,  43 => 5,  41 => 3,  39 => 2,  36 => 1,  32 => 24,  29 => 23,  27 => 10,  24 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_quick_add_import/dialog:quick_add_import_result.html.twig", "");
    }
}
