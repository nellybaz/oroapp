<?php

/* OroEmbeddedFormBundle:layouts/embedded_default:form_inline.html.twig */
class __TwigTemplate_fc5728fe0f71946a275f9a83dc75495841cd1279a8b85e8f1db333f7753ae9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_form_css_widget' => array($this, 'block__form_css_widget'),
            'embed_form_legacy_form_widget' => array($this, 'block_embed_form_legacy_form_widget'),
            'embed_form_success_widget' => array($this, 'block_embed_form_success_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_form_css_widget', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('embed_form_legacy_form_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('embed_form_success_widget', $context, $blocks);
    }

    // line 1
    public function block__form_css_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["content"] = strip_tags(($context["content"] ?? null));
        // line 3
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("content" => ($context["content"] ?? null)));
        echo "
";
    }

    // line 6
    public function block_embed_form_legacy_form_widget($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ( !twig_test_empty(($context["form_layout"] ?? null))) {
            // line 8
            echo "        ";
            $this->loadTemplate(($context["form_layout"] ?? null), "OroEmbeddedFormBundle:layouts/embedded_default:form_inline.html.twig", 8)->display(array_merge($context, array("form" => ($context["form"] ?? null))));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form', array("attr" => array("id" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "name" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "novalidate" => "novalidate")));
            echo "
    ";
        }
    }

    // line 14
    public function block_embed_form_success_widget($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\EmbeddedFormBundle\Twig\BackLinkExtension')->backLinkFilter(((array_key_exists("message", $context)) ? (_twig_default_filter(($context["message"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.success_message.default"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.success_message.default"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmbeddedFormBundle:layouts/embedded_default:form_inline.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  69 => 14,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  42 => 3,  39 => 2,  36 => 1,  32 => 14,  29 => 13,  27 => 6,  24 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmbeddedFormBundle:layouts/embedded_default:form_inline.html.twig", "");
    }
}
