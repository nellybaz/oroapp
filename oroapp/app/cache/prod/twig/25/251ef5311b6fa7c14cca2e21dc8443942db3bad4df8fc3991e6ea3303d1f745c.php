<?php

/* OroContactUsBundle:layouts/embedded_default/oro_embedded_form_submit:form.html.twig */
class __TwigTemplate_3b23a00176354d1bc94fb3ea4d7702241bcfe365092b6b7f1757910b6943f628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'form_field_widget' => array($this, 'block_form_field_widget'),
            'form_fields_widget' => array($this, 'block_form_fields_widget'),
            '_embedded_form_firstName_widget' => array($this, 'block__embedded_form_firstName_widget'),
            '_embedded_form_lastName_widget' => array($this, 'block__embedded_form_lastName_widget'),
            '_embedded_form_comment_widget' => array($this, 'block__embedded_form_comment_widget'),
            '_embedded_form_submit_widget' => array($this, 'block__embedded_form_submit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('fieldset_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('form_field_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_fields_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_embedded_form_firstName_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_embedded_form_lastName_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('_embedded_form_comment_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('_embedded_form_submit_widget', $context, $blocks);
    }

    // line 1
    public function block_fieldset_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"row-group\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 7
    public function block_form_field_widget($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row-group\"";
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "extra_field", array()))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "_holder"), "html", null, true);
            echo "\" ";
        }
        echo " >
    <div class=\"box\">
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </div>
</div>
";
    }

    // line 15
    public function block_form_fields_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroContactUsBundle::fields.html.twig"));
        // line 17
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "name" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "novalidate" => "novalidate")));
        echo "
    <div class=\"wrapper\">
        ";
        // line 19
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 24
    public function block__embedded_form_firstName_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"box\">
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </div>
";
    }

    // line 30
    public function block__embedded_form_lastName_widget($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"box\">
        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </div>
";
    }

    // line 36
    public function block__embedded_form_comment_widget($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\"row-group\">
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </div>
";
    }

    // line 42
    public function block__embedded_form_submit_widget($context, array $blocks = array())
    {
        // line 43
        echo "    <div class=\"row-group\">
        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroContactUsBundle:layouts/embedded_default/oro_embedded_form_submit:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 44,  159 => 43,  156 => 42,  149 => 38,  146 => 37,  143 => 36,  136 => 32,  133 => 31,  130 => 30,  123 => 26,  120 => 25,  117 => 24,  111 => 21,  106 => 19,  100 => 17,  97 => 16,  94 => 15,  86 => 10,  76 => 8,  73 => 7,  66 => 3,  63 => 2,  60 => 1,  56 => 42,  53 => 41,  51 => 36,  48 => 35,  46 => 30,  43 => 29,  41 => 24,  38 => 23,  36 => 15,  33 => 14,  31 => 7,  28 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactUsBundle:layouts/embedded_default/oro_embedded_form_submit:form.html.twig", "");
    }
}
