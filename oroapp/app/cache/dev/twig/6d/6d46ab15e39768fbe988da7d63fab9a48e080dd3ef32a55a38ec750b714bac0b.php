<?php

/* OroImapBundle::credentialsTopicSubscribe.html.twig */
class __TwigTemplate_af2195840f65b0e0326e2000063938fd0128f7b7894e8147255dd552cb8ccc2e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroImapBundle::credentialsTopicSubscribe.html.twig"));

        // line 1
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/messenger', 'orotranslation/js/translator'],
        function (sync, messenger, __) {
            sync.subscribe('oro/imap_sync_fail_u_";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "', function (response) {
                messenger.notificationMessage(
                    'error',
                    __('oro.imap.sync.flash_message.user_box_failed', {username: response.username, host: response.host})
                );
            });
            ";
            // line 11
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_imap_sync_origin_credential_notifications")) {
                // line 12
                echo "            sync.subscribe('oro/imap_sync_fail_system', function (response) {
                messenger.notificationMessage(
                    'error',
                    __('oro.imap.sync.flash_message.system_box_failed', {username: response.username, host: response.host})
                );
            });
            ";
            }
            // line 19
            echo "        });
</script>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroImapBundle::credentialsTopicSubscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  40 => 12,  38 => 11,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user %}
<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/messenger', 'orotranslation/js/translator'],
        function (sync, messenger, __) {
            sync.subscribe('oro/imap_sync_fail_u_{{ app.user.id }}', function (response) {
                messenger.notificationMessage(
                    'error',
                    __('oro.imap.sync.flash_message.user_box_failed', {username: response.username, host: response.host})
                );
            });
            {% if is_granted('oro_imap_sync_origin_credential_notifications') %}
            sync.subscribe('oro/imap_sync_fail_system', function (response) {
                messenger.notificationMessage(
                    'error',
                    __('oro.imap.sync.flash_message.system_box_failed', {username: response.username, host: response.host})
                );
            });
            {% endif %}
        });
</script>
{% endif %}
", "OroImapBundle::credentialsTopicSubscribe.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ImapBundle/Resources/views/credentialsTopicSubscribe.html.twig");
    }
}
