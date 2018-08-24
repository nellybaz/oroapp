<?php

/* OroCaseBundle:Form:fields.html.twig */
class __TwigTemplate_3e9b03e3986d2b039c9becae8db3a5b0304a17d8289a9d4b54808145fac832f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_case_mailbox_process_settings_widget' => array($this, 'block_oro_case_mailbox_process_settings_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_case_mailbox_process_settings_widget', $context, $blocks);
    }

    public function block_oro_case_mailbox_process_settings_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroTagBundle:Form:fields.html.twig", 1 => $this));
        // line 3
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Form:fields.html.twig", "");
    }
}
