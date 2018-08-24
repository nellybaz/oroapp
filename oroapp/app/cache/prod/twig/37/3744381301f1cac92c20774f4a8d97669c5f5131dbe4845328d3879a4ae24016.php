<?php

/* OroIntegrationBundle:Form:fields.html.twig */
class __TwigTemplate_6ba695a82e86ffb67163335801222a49d1920e0e3dda6450ae95af0aeac1f7f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_integration_channel_form_widget' => array($this, 'block_oro_integration_channel_form_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $this->displayBlock('oro_integration_channel_form_widget', $context, $blocks);
    }

    public function block_oro_integration_channel_form_widget($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "type", array()), "vars", array()), "choices", array()))) {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row', array("attr" => array("disabled" => true)));
            echo "
    ";
        } else {
            // line 11
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row');
            echo "
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
        echo "

    ";
        // line 16
        if ($this->getAttribute(($context["form"] ?? null), "organization", array(), "any", true, true)) {
            // line 17
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "organization", array()), 'row');
            echo "
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "transportType", array()), 'row');
        echo "

    ";
        // line 22
        if ($this->getAttribute(($context["form"] ?? null), "transport", array(), "any", true, true)) {
            // line 23
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "transport", array()), 'widget');
            echo "
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ($this->getAttribute(($context["form"] ?? null), "synchronizationSettings", array(), "any", true, true)) {
            // line 27
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "synchronizationSettings", array()), 'widget');
            echo "
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "mappingSettings", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mappingSettings", array()), 'widget');
            echo "
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ($this->getAttribute(($context["form"] ?? null), "connectors", array(), "any", true, true)) {
            // line 35
            echo "        <div ";
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "connectors", array()), "vars", array()), "choices", array()))) {
                echo "class=\"hide\"";
            }
            echo ">
            ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "connectors", array()), 'row');
            echo "
        </div>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

    ";
        // line 42
        $context["jsRenderer"] = $this->loadTemplate("OroIntegrationBundle:Form:javascript.html.twig", "OroIntegrationBundle:Form:fields.html.twig", 42);
        // line 43
        echo "    ";
        echo $context["jsRenderer"]->getrenderIntegrationFormJS(($context["form"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroIntegrationBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  123 => 42,  118 => 40,  115 => 39,  109 => 36,  102 => 35,  100 => 34,  97 => 33,  91 => 31,  89 => 30,  86 => 29,  80 => 27,  78 => 26,  75 => 25,  69 => 23,  67 => 22,  62 => 20,  59 => 19,  53 => 17,  51 => 16,  46 => 14,  43 => 13,  37 => 11,  31 => 9,  29 => 8,  26 => 7,  20 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroIntegrationBundle:Form:fields.html.twig", "");
    }
}
