<?php

/* OroFrontendBundle:Form:fields.html.twig */
class __TwigTemplate_0b1a0216888d6e9f551c994cc5e8741ba6c3c030b271d2dc0e21c0c667d46560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_frontend_theme_select_widget' => array($this, 'block_oro_frontend_theme_select_widget'),
            'oro_frontend_page_template_form_field_widget' => array($this, 'block_oro_frontend_page_template_form_field_widget'),
            'oro_frontend_page_template_form_field_row' => array($this, 'block_oro_frontend_page_template_form_field_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_frontend_theme_select_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('oro_frontend_page_template_form_field_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('oro_frontend_page_template_form_field_row', $context, $blocks);
    }

    // line 1
    public function block_oro_frontend_theme_select_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orofrontend/js/app/views/theme-select-view", "metadata" => $this->getAttribute($this->getAttribute(        // line 6
($context["form"] ?? null), "vars", array()), "themes-metadata", array(), "array"))), "html", null, true);
        // line 7
        echo "\"
    >
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <div class=\"description-container\" style=\"display: none;\"></div>
    </div>
";
    }

    // line 14
    public function block_oro_frontend_page_template_form_field_widget($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "children", array())) == 0)) {
            // line 16
            echo "        <div class=\"control-label wrap\">
            <div class=\"description-container\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.system_configuration.messages.no_page_templates"), "html", null, true);
            echo "</div>
        </div>
    ";
        } else {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    ";
        }
    }

    // line 24
    public function block_oro_frontend_page_template_form_field_row($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"control-group control-group-oro_frontend_page_template_collection control-group-oro_config_form_field_type controls\">
        ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "value", array())) == 0)) {
            // line 27
            echo "            ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "vars", array()), "id", array())));
            // line 28
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row', array("label_attr" => ($context["label_attr"] ?? null)));
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
            echo "
            ";
            // line 31
            if ($this->getAttribute(($context["form"] ?? null), "use_parent_scope_value", array(), "any", true, true)) {
                // line 32
                echo "                <div class=\"parent-scope-checkbox oro-clearfix controls\">
                    ";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "use_parent_scope_value", array()), 'row', array("attr" => array("data-role" => "changeUseDefault")));
                echo "
                </div>
            ";
            }
            // line 36
            echo "        ";
        }
        // line 37
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  114 => 36,  108 => 33,  105 => 32,  103 => 31,  98 => 30,  92 => 28,  89 => 27,  87 => 26,  84 => 25,  81 => 24,  73 => 20,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  50 => 9,  46 => 7,  44 => 6,  43 => 4,  39 => 2,  36 => 1,  32 => 24,  29 => 23,  27 => 14,  24 => 13,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:Form:fields.html.twig", "");
    }
}
