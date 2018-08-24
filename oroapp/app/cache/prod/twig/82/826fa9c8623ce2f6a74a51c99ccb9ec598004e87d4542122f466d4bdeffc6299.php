<?php

/* OroEmbeddedFormBundle:layouts/embedded_default:form.html.twig */
class __TwigTemplate_58f8723873a10f169ab2a857ec85bc4485a69f02840571a1f9f484f30f0a5711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'root_widget' => array($this, 'block_root_widget'),
            'body_widget' => array($this, 'block_body_widget'),
            'javascript' => array($this, 'block_javascript'),
            '_base_css_widget' => array($this, 'block__base_css_widget'),
            '_form_css_widget' => array($this, 'block__form_css_widget'),
            'embed_form_legacy_form_widget' => array($this, 'block_embed_form_legacy_form_widget'),
            'embed_form_success_widget' => array($this, 'block_embed_form_success_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('root_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('_base_css_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('_form_css_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('embed_form_legacy_form_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('embed_form_success_widget', $context, $blocks);
    }

    // line 1
    public function block_root_widget($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE ";
        echo twig_escape_filter($this->env, ((array_key_exists("doctype", $context)) ? (_twig_default_filter(($context["doctype"] ?? null), "html")) : ("html")), "html", null, true);
        echo ">
<!--[if IE 7 ]>
<html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]>
<html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]>
<html class=\"no-js ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
";
        // line 11
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
</html>
";
    }

    // line 15
    public function block_body_widget($context, array $blocks = array())
    {
        // line 16
        echo "<body";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
    <div id=\"page\">
        ";
        // line 18
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
        ";
        // line 19
        $this->displayBlock('javascript', $context, $blocks);
        // line 32
        echo "    </div>
</body>
";
    }

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        // line 20
        echo "            <script type=\"text/javascript\">
                var form = document.querySelector('form');
                if (form) {
                    form.addEventListener('submit', function () {
                        var button = this.querySelector('button');
                        if (button) {
                            button.disabled = true;
                        }
                    });
                }
            </script>
        ";
    }

    // line 36
    public function block__base_css_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["content"] = ('' === $tmp = "    body {
        min-width: 0;
    }
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("content" => ($context["content"] ?? null)));
        echo "
";
    }

    // line 45
    public function block__form_css_widget($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["content"] = strip_tags(($context["content"] ?? null));
        // line 47
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("content" => ($context["content"] ?? null)));
        echo "
";
    }

    // line 50
    public function block_embed_form_legacy_form_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        if ( !twig_test_empty(($context["form_layout"] ?? null))) {
            // line 52
            echo "        ";
            $this->loadTemplate(($context["form_layout"] ?? null), "OroEmbeddedFormBundle:layouts/embedded_default:form.html.twig", 52)->display(array_merge($context, array("form" => ($context["form"] ?? null))));
            // line 53
            echo "    ";
        } else {
            // line 54
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form', array("attr" => array("id" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "name" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "novalidate" => "novalidate")));
            echo "
    ";
        }
    }

    // line 58
    public function block_embed_form_success_widget($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\EmbeddedFormBundle\Twig\BackLinkExtension')->backLinkFilter(((array_key_exists("message", $context)) ? (_twig_default_filter(($context["message"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.success_message.default"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.success_message.default"))), ($context["form_id"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmbeddedFormBundle:layouts/embedded_default:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 59,  166 => 58,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  139 => 47,  136 => 46,  133 => 45,  126 => 42,  120 => 37,  117 => 36,  102 => 20,  99 => 19,  93 => 32,  91 => 19,  87 => 18,  81 => 16,  78 => 15,  71 => 11,  58 => 2,  55 => 1,  51 => 58,  48 => 57,  46 => 50,  43 => 49,  41 => 45,  38 => 44,  36 => 36,  33 => 35,  31 => 15,  28 => 14,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmbeddedFormBundle:layouts/embedded_default:form.html.twig", "");
    }
}
