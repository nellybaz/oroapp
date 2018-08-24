<?php

/* OroConfigBundle:Form:fields.html.twig */
class __TwigTemplate_dcbb38d0cc215e5cabc67265a8a61bc6d41eb9167078c7e95a2c4d9da2939230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_config_form_field_type_widget' => array($this, 'block_oro_config_form_field_type_widget'),
            'oro_config_form_field_type_row' => array($this, 'block_oro_config_form_field_type_row'),
            'oro_config_parent_scope_checkbox_type_row' => array($this, 'block_oro_config_parent_scope_checkbox_type_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_config_form_field_type_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('oro_config_form_field_type_row', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('oro_config_parent_scope_checkbox_type_row', $context, $blocks);
    }

    // line 1
    public function block_oro_config_form_field_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["valueContainerId"] = ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "vars", array()), "id", array()) . "_container");
        // line 3
        echo "    ";
        $context["valueContainerClass"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "oro-clearfix controls control-subgroup")) : ("oro-clearfix controls control-subgroup"));
        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "vars", array()), "errors", array())) > 0)) {
            // line 5
            echo "        ";
            $context["valueContainerClass"] = (($context["valueContainerClass"] ?? null) . " validation-error");
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    <div id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["valueContainerId"] ?? null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ($context["valueContainerClass"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'errors');
        echo "
    </div>

    ";
        // line 13
        if ($this->getAttribute(($context["form"] ?? null), "use_parent_scope_value", array(), "any", true, true)) {
            // line 14
            echo "        <div class=\"horizontal parent-scope-checkbox\">
            <div class=\"oro-clearfix\">
                ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "use_parent_scope_value", array()), 'row', array("attr" => array("data-role" => "changeUseDefault")));
            echo "
            </div>
        </div>
    ";
        }
    }

    // line 22
    public function block_oro_config_form_field_type_row($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value_field_only", array())) {
            // line 24
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'row', array("label" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "label", array())));
            echo "
    ";
        } else {
            // line 26
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "vars", array()), "id", array())));
            // line 27
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row', array("label_attr" => ($context["label_attr"] ?? null)));
            echo "
    ";
        }
    }

    // line 31
    public function block_oro_config_parent_scope_checkbox_type_row($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroConfigBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  114 => 32,  111 => 31,  103 => 27,  100 => 26,  94 => 24,  91 => 23,  88 => 22,  79 => 16,  75 => 14,  73 => 13,  67 => 10,  63 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 31,  29 => 30,  27 => 22,  24 => 21,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroConfigBundle:Form:fields.html.twig", "");
    }
}
