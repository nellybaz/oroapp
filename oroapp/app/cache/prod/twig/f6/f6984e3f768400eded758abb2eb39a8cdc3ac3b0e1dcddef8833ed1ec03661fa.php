<?php

/* OroImapBundle:Connection:checkGmail.html.twig */
class __TwigTemplate_7553e7bbdcc61b5dc8c2836fb79abaafabe7e4ac922aca6538acce773605ea73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "user", array()), "vars", array()), "value", array()))) {
            // line 2
            echo "    <div class=\"control-group\">
        <div class=\"control-label wrap\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.imap.configuration.reset_email.label"), "html", null, true);
            echo "
        </div>
        <div class=\"controls oro-item-collection\">
            <div style=\"margin-top: 6px\">
                <strong>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "user", array()), "vars", array()), "value", array()), "html", null, true);
            echo "</strong>
                <button title=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.imap.configuration.disconnect.label"), "html", null, true);
            echo "\" class=\"removeRow btn-action btn-link\" type=\"button\" style=\"vertical-align: baseline\">×</button>
            </div>
        </div>
    </div>
";
        }
        // line 14
        echo "
<div class=\"control-group\">
    <div class=\"controls\">
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "checkFolder", array()), 'row');
        echo "
    </div>
</div>
";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "folders", array()), 'row');
        echo "

";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "user", array()), 'row');
        echo "
";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "accessToken", array()), 'row');
        echo "
";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "refreshToken", array()), 'row');
        echo "
";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "clientId", array()), 'row');
        echo "
";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "imapPort", array()), 'row');
        echo "
";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "imapHost", array()), 'row');
        echo "
";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "imapEncryption", array()), 'row');
        echo "
";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "smtpPort", array()), 'row');
        echo "
";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "smtpHost", array()), 'row');
        echo "
";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "smtpEncryption", array()), 'row');
        echo "
";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "accessTokenExpiresAt", array()), 'row');
        echo "

<div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"google-alert google-connection-status alert alert-error\" style=\"display: none\"></div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroImapBundle:Connection:checkGmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  55 => 20,  49 => 17,  44 => 14,  36 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImapBundle:Connection:checkGmail.html.twig", "");
    }
}
