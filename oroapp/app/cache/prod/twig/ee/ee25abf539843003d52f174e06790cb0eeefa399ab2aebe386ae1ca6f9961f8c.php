<?php

/* OroSegmentBundle:Form:fields.html.twig */
class __TwigTemplate_038a12f0c05aac24e7b64812c2ab181f7f1c4c7cbcc42bb286986c798dfc6d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_segment_filter_builder_row' => array($this, 'block_oro_segment_filter_builder_row'),
            'oro_segment_filter_builder_widget' => array($this, 'block_oro_segment_filter_builder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_segment_filter_builder_row', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('oro_segment_filter_builder_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_segment_filter_builder_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) {
            // line 3
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("attr" => array("class" => "control-group-oro_segment_filter_builder_segment_name")));
            // line 5
            echo "
    ";
        }
        // line 7
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </div>
";
    }

    // line 12
    public function block_oro_segment_filter_builder_widget($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroSegmentBundle:Form:fields.html.twig", 13);
        // line 14
        echo "    ";
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroSegmentBundle:Form:fields.html.twig", 14);
        // line 15
        echo "
    ";
        // line 16
        $context["segment"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array());
        // line 17
        echo "    ";
        $context["id"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array());
        // line 18
        echo "    ";
        $context["coditionBuilderId"] = (($context["id"] ?? null) . "-condition-builder");
        // line 19
        echo "    ";
        $context["entityChoiceId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "entity", array()), "vars", array()), "attr", array()), "data-ftid", array(), "array");
        // line 20
        echo "    ";
        $context["definitionId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "definition", array()), "vars", array()), "attr", array()), "data-ftid", array(), "array");
        // line 21
        echo "    ";
        $context["metadata"] = $this->env->getExtension('Oro\Bundle\DashboardBundle\Twig\DashboardExtension')->getQueryFilterMetadata();
        // line 22
        echo "    ";
        $context["column_chain_template_id"] = ("column-chain-template-" . ($context["id"] ?? null));
        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entity", array()), 'widget');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "definition", array()), 'widget');
        echo "
    ";
        // line 26
        echo $context["QD"]->getquery_designer_column_chain_template(($context["column_chain_template_id"] ?? null));
        echo "
    ";
        // line 27
        echo $context["segmentQD"]->getquery_designer_condition_builder(array("id" =>         // line 28
($context["coditionBuilderId"] ?? null), "currentSegmentId" => (($this->getAttribute(        // line 29
($context["segment"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["segment"] ?? null), "id", array()), null)) : (null)), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "conditionBuilderOptions" =>         // line 31
($context["condition_builder_options"] ?? null), "metadata" =>         // line 32
($context["metadata"] ?? null), "column_chain_template_selector" => ("#" .         // line 33
($context["column_chain_template_id"] ?? null))));
        // line 34
        echo "

    ";
        // line 36
        $context["widgetOptions"] = array("valueSource" => (("[data-ftid=" .         // line 37
($context["definitionId"] ?? null)) . "]"), "entityChoice" => (("[data-ftid=" .         // line 38
($context["entityChoiceId"] ?? null)) . "]"), "entityChangeConfirmMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.condition_builder.confirm_message"), "metadata" =>         // line 40
($context["metadata"] ?? null), "initEntityChangeEvents" => false, "select2FieldChoiceTemplate" => ("#" .         // line 42
($context["column_chain_template_id"] ?? null)));
        // line 44
        echo "
    ";
        // line 45
        $context["widgetOptions"] = $this->env->getExtension('Oro\Bundle\SegmentBundle\Twig\SegmentExtension')->updateSegmentWidgetOptions(($context["widgetOptions"] ?? null), ($context["id"] ?? null));
        // line 46
        echo "    <div data-page-component-module=\"orosegment/js/app/components/segment-component\"
         data-page-component-options=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["widgetOptions"] ?? null)), "html", null, true);
        echo "\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroSegmentBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 47,  124 => 46,  122 => 45,  119 => 44,  117 => 42,  116 => 40,  115 => 38,  114 => 37,  113 => 36,  109 => 34,  107 => 33,  106 => 32,  105 => 31,  104 => 29,  103 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  48 => 8,  43 => 7,  39 => 5,  36 => 3,  33 => 2,  30 => 1,  26 => 12,  23 => 11,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSegmentBundle:Form:fields.html.twig", "");
    }
}
