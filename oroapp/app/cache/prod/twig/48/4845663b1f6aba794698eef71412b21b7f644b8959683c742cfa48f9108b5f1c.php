<?php

/* OroEmbeddedFormBundle:layouts/embedded_default:layout.html.twig */
class __TwigTemplate_9d679654a4ae4cb0e085f41173f310ed68bc9e3a7d64a7b03a1804d3f9ed6631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'embed_form_start_widget' => array($this, 'block_embed_form_start_widget'),
            'embed_form_fields_widget' => array($this, 'block_embed_form_fields_widget'),
            'embed_form_end_widget' => array($this, 'block_embed_form_end_widget'),
            'embed_form_field_widget' => array($this, 'block_embed_form_field_widget'),
            'embed_form_errors_widget' => array($this, 'block_embed_form_errors_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('embed_form_start_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('embed_form_fields_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('embed_form_end_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('embed_form_field_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('embed_form_errors_widget', $context, $blocks);
    }

    // line 1
    public function block_embed_form_start_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), ($context["attr"] ?? null));
        // line 3
        echo "    ";
        $context["action"] = ((array_key_exists("action_path", $context)) ? (($context["action_path"] ?? null)) : (((array_key_exists("action_route_name", $context)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["action_route_name"] ?? null), ($context["action_route_parameters"] ?? null))) : (null))));
        // line 4
        if ((array_key_exists("method", $context) && !twig_in_filter(($context["method"] ?? null), array(0 => "GET", 1 => "POST")))) {
            // line 5
            $context["form_method"] = "POST";
        }
        // line 7
        echo "<form";
        $this->displayBlock("block_attributes", $context, $blocks);
        if ( !(($context["action"] ?? null) === null)) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"";
        }
        if (array_key_exists("method", $context)) {
            echo " method=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ((array_key_exists("form_method", $context)) ? (_twig_default_filter(($context["form_method"] ?? null), ($context["method"] ?? null))) : (($context["method"] ?? null)))), "html", null, true);
            echo "\"";
        }
        if (array_key_exists("enctype", $context)) {
            echo " enctype=\"";
            echo twig_escape_filter($this->env, ($context["enctype"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 8
        if (array_key_exists("form_method", $context)) {
            // line 9
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />";
        }
    }

    // line 13
    public function block_embed_form_fields_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 17
    public function block_embed_form_end_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => ($context["render_rest"] ?? null)));
        echo "
";
    }

    // line 21
    public function block_embed_form_field_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
";
    }

    // line 25
    public function block_embed_form_errors_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 27
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEmbeddedFormBundle:layouts/embedded_default:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  126 => 27,  123 => 26,  120 => 25,  113 => 22,  110 => 21,  103 => 18,  100 => 17,  93 => 14,  90 => 13,  83 => 9,  81 => 8,  62 => 7,  59 => 5,  57 => 4,  54 => 3,  51 => 2,  48 => 1,  44 => 25,  41 => 24,  39 => 21,  36 => 20,  34 => 17,  31 => 16,  29 => 13,  26 => 12,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmbeddedFormBundle:layouts/embedded_default:layout.html.twig", "");
    }
}
