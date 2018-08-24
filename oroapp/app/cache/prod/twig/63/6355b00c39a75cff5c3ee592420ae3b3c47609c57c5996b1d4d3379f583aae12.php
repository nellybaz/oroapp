<?php

/* OroImapBundle::credentialsTopicSubscribe.html.twig */
class __TwigTemplate_129d530723cb39e45dfee52c9383c948c53616a2448e1e65cc818f752dd295f2 extends Twig_Template
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
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 2
            echo "<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/messenger', 'orotranslation/js/translator'],
        function (sync, messenger, __) {
            sync.subscribe('oro/imap_sync_fail_u_";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
        return array (  46 => 19,  37 => 12,  35 => 11,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImapBundle::credentialsTopicSubscribe.html.twig", "");
    }
}
