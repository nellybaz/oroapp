<?php

/* OroMessageQueueBundle:ConsumerHeartbeat:queue_consumer_heartbeat_js.html.twig */
class __TwigTemplate_40e526dc8f191b250dbf38ef00a2299d47c141b3fa4d9e19a1e6399ec3fb408d extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/messenger'],
        function (sync, messenger) {
            sync.subscribe('oro/message_queue_heartbeat', function (response) {
                messenger.notificationMessage(
                    'error',
                    ";
        // line 8
        echo "                    '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.message_queue_job.no_alive_consumers"), "html", null, true);
        echo "'
                );
            });
        });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroMessageQueueBundle:ConsumerHeartbeat:queue_consumer_heartbeat_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMessageQueueBundle:ConsumerHeartbeat:queue_consumer_heartbeat_js.html.twig", "");
    }
}
