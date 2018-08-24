<?php

/* OroContactUsBundle::fields.html.twig */
class __TwigTemplate_288de3ecf17bdcc8fa2323d227dcd9ddb007f2905665d96f33e7c6c48de31b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
    }

    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"";
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", array()), "html", null, true);
        }
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
            ";
        // line 4
        if ( !(($context["label"] ?? null) === false)) {
            // line 5
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => ($context["label_attr"] ?? null)));
            echo "
            ";
        }
        // line 7
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroContactUsBundle::fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  48 => 7,  42 => 5,  40 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactUsBundle::fields.html.twig", "");
    }
}
