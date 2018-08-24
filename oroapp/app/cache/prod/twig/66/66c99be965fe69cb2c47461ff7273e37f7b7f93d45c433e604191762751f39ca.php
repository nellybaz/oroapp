<?php

/* OroCaseBundle:Form:fields.html.twig */
class __TwigTemplate_e13aaef8f548df903db323dc090d5ce80c8b93fc75e582389420fc86a32d2f2c extends Twig_Template
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
        return new Twig_Source("", "OroCaseBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm/src/Oro/Bundle/CaseBundle/Resources/views/Form/fields.html.twig");
    }
}
