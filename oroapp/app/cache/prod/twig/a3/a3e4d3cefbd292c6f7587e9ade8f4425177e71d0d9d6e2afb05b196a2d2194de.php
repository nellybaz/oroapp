<?php

/* OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add_import.html.twig */
class __TwigTemplate_5fb4bf165ac3f9e0c4012bb7d8c1104f310483751bdc800a080464421ee475c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quick_add_import_form_widget' => array($this, 'block__quick_add_import_form_widget'),
            '_quick_add_import_form_start_widget' => array($this, 'block__quick_add_import_form_start_widget'),
            '_quick_add_import_form_container_widget' => array($this, 'block__quick_add_import_form_container_widget'),
            '_quick_add_import_title_widget' => array($this, 'block__quick_add_import_title_widget'),
            '_quick_add_import_description_widget' => array($this, 'block__quick_add_import_description_widget'),
            '_quick_add_import_link_widget' => array($this, 'block__quick_add_import_link_widget'),
            '_quick_add_import_form_submit_widget' => array($this, 'block__quick_add_import_form_submit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quick_add_import_form_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_quick_add_import_form_start_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_quick_add_import_form_container_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('_quick_add_import_title_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('_quick_add_import_description_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('_quick_add_import_link_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('_quick_add_import_form_submit_widget', $context, $blocks);
    }

    // line 1
    public function block__quick_add_import_form_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-import")));
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
    public function block__quick_add_import_form_start_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroproduct/js/app/components/quick-add-import-form-component"),         // line 13
($context["attr"] ?? null));
        // line 14
        echo "    ";
        $this->displayBlock("form_start_widget", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block__quick_add_import_form_container_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 19
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-import__container")));
        // line 21
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 22
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 26
    public function block__quick_add_import_title_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 28
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-import__title")));
        // line 30
        echo "    <h3 ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-paperclip\"></i>
        ";
        // line 32
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </h3>
";
    }

    // line 36
    public function block__quick_add_import_description_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 38
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quick-order-import__description")));
        // line 40
        echo "    <p ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</p>
";
    }

    // line 43
    public function block__quick_add_import_link_widget($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add_import.html.twig", 44);
        // line 45
        echo "    ";
        echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 46
($context["route_name"] ?? null)), "aCss" => "no-hash quick-order-import__link", "iCss" => "fa-info-circle", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 49
($context["text"] ?? null)), "widget" => array("type" => "quick-add-import", "options" => array("dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.frontend.quick_add.import_from_file.title_dialog"), "modal" => true, "resizable" => false, "width" => 600, "autoResize" => true, "dialogClass" => "ui-dialog-no-scroll")))));
        // line 63
        echo "
";
    }

    // line 66
    public function block__quick_add_import_form_submit_widget($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 68
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " hidden")));
        // line 70
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add_import.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 70,  169 => 68,  167 => 67,  164 => 66,  159 => 63,  157 => 49,  156 => 46,  154 => 45,  151 => 44,  148 => 43,  139 => 40,  137 => 38,  135 => 37,  132 => 36,  125 => 32,  119 => 30,  117 => 28,  115 => 27,  112 => 26,  105 => 22,  100 => 21,  98 => 19,  96 => 18,  93 => 17,  86 => 14,  84 => 13,  82 => 11,  79 => 10,  72 => 6,  67 => 5,  65 => 3,  63 => 2,  60 => 1,  56 => 66,  53 => 65,  51 => 43,  48 => 42,  46 => 36,  43 => 35,  41 => 26,  38 => 25,  36 => 17,  33 => 16,  31 => 10,  28 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_quick_add:quick_add_import.html.twig", "");
    }
}
