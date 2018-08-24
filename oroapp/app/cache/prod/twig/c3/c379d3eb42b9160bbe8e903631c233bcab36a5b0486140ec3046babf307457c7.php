<?php

/* OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add_copy_paste.html.twig */
class __TwigTemplate_89c1926d9fdfeb7ffaa9bde0f8b707145792967780a1102b0d81a98e44f42946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quick_add_copy_paste_form_start_widget' => array($this, 'block__quick_add_copy_paste_form_start_widget'),
            '_quick_add_copy_paste_form_widget' => array($this, 'block__quick_add_copy_paste_form_widget'),
            '_quick_add_copy_paste_title_widget' => array($this, 'block__quick_add_copy_paste_title_widget'),
            '_quick_add_copy_paste_description_widget' => array($this, 'block__quick_add_copy_paste_description_widget'),
            '_quick_add_copy_paste_form_buttons_widget' => array($this, 'block__quick_add_copy_paste_form_buttons_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quick_add_copy_paste_form_start_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('_quick_add_copy_paste_form_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_quick_add_copy_paste_title_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('_quick_add_copy_paste_description_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('_quick_add_copy_paste_form_buttons_widget', $context, $blocks);
    }

    // line 1
    public function block__quick_add_copy_paste_form_start_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroproduct/js/app/components/quick-add-copy-paste-form-component"),         // line 4
($context["attr"] ?? null));
        // line 5
        echo "    ";
        $this->displayBlock("form_start_widget", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block__quick_add_copy_paste_form_widget($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 10
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-copy-paste")));
        // line 12
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 13
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 17
    public function block__quick_add_copy_paste_title_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 19
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-copy-paste__title")));
        // line 21
        echo "    <h3 ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-paste\"></i>
        ";
        // line 23
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </h3>
";
    }

    // line 27
    public function block__quick_add_copy_paste_description_widget($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 29
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-copy-paste__description")));
        // line 31
        echo "    <p ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</p>
";
    }

    // line 34
    public function block__quick_add_copy_paste_form_buttons_widget($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 36
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-copy-paste__buttons")));
        // line 38
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 39
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add_copy_paste.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  124 => 38,  122 => 36,  120 => 35,  117 => 34,  108 => 31,  106 => 29,  104 => 28,  101 => 27,  94 => 23,  88 => 21,  86 => 19,  84 => 18,  81 => 17,  74 => 13,  69 => 12,  67 => 10,  65 => 9,  62 => 8,  55 => 5,  53 => 4,  51 => 2,  48 => 1,  44 => 34,  41 => 33,  39 => 27,  36 => 26,  34 => 17,  31 => 16,  29 => 8,  26 => 7,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add_copy_paste.html.twig", "");
    }
}
