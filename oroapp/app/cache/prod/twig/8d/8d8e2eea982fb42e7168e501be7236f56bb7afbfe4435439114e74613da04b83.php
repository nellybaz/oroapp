<?php

/* OroMailChimpBundle:Form:fields.html.twig */
class __TwigTemplate_af1f100b970fcbe1a1d9e646e01fa5c6ce1b844d8f7a289f191144d6e501619c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_mailchimp_api_key_type_widget' => array($this, 'block_oro_mailchimp_api_key_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_mailchimp_api_key_type_widget', $context, $blocks);
    }

    public function block_oro_mailchimp_api_key_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["options"] = array("pingUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_mailchimp_ping"));
        // line 5
        echo "    <div data-page-component-module=\"oromailchimp/js/app/components/api-key-component\"
         data-page-component-options=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

        <div style=\"margin-top: 10px;display: none;\" class=\"ping-holder\">
            <button type=\"button\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.integration_transport.api_key.check.label"), "html", null, true);
        echo "</button>
            <div class=\"connection-status alert\" style=\"display: none\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroMailChimpBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  32 => 6,  29 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMailChimpBundle:Form:fields.html.twig", "");
    }
}
