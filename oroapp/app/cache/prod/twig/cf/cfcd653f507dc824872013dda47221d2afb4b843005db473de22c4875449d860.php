<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig */
class __TwigTemplate_1074d79e285915a940f0c13972511bce66426cbf31843e6eb864627a495e24bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroLayoutBundle:Layout:div_layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig", 1);
        $this->blocks = array(
            'form_end_widget' => array($this, 'block_form_end_widget'),
            'input_widget' => array($this, 'block_input_widget'),
            'button_widget' => array($this, 'block_button_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroLayoutBundle:Layout:div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_end_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("form_end_widget", $context, $blocks);
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null), ((array_key_exists("js_validation_options", $context)) ? (_twig_default_filter(($context["js_validation_options"] ?? null), array())) : (array())));
        echo "
";
    }

    // line 8
    public function block_input_widget($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 10
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " custom-checkbox__input"));
            // line 13
            echo "
        <label ";
            // line 14
            if ( !twig_test_empty($this->getAttribute(($context["attr"] ?? null), "id", array()))) {
                echo " for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "id", array()), "html", null, true);
                echo "\" ";
            }
            echo " class=\"custom-checkbox\">
            ";
            // line 15
            $this->displayParentBlock("input_widget", $context, $blocks);
            echo "
            <span class=\"custom-checkbox__icon\"></span>
            <span class=\"custom-checkbox__text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->processText(($context["label"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            echo " </span>
        </label>
    ";
        } else {
            // line 20
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " input"));
            // line 23
            echo "
        ";
            // line 25
            echo "        ";
            $this->displayParentBlock("input_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 29
    public function block_button_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if ((((array_key_exists("style", $context)) ? (_twig_default_filter(($context["style"] ?? null), "")) : ("")) == "auto")) {
            // line 31
            echo "        ";
            if ((($context["action"] ?? null) == "submit")) {
                // line 32
                echo "            ";
                $context["style"] = "btn--info";
                // line 33
                echo "        ";
            } else {
                // line 34
                echo "            ";
                $context["style"] = (((($context["action"] ?? null) == "reset")) ? ("btn--action") : (""));
                // line 35
                echo "        ";
            }
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        if ( !array_key_exists("style", $context)) {
            // line 38
            echo "        ";
            $context["add_class"] = "";
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "        ";
            $context["add_class"] = ("btn " . ($context["style"] ?? null));
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 43
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . ($context["add_class"] ?? null))));
        // line 45
        echo "    ";
        $this->displayParentBlock("button_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  130 => 43,  128 => 42,  125 => 41,  122 => 40,  119 => 39,  116 => 38,  113 => 37,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  81 => 25,  78 => 23,  75 => 20,  69 => 17,  64 => 15,  56 => 14,  53 => 13,  50 => 10,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig");
    }
}
