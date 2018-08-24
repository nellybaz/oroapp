<?php

/* OroMessageQueueBundle:ConsumerHeartbeat:queue_consumer_heartbeat_js.html.twig */
class __TwigTemplate_52aca0c7ba698166231749b453923c2c897bcdac63e1336bee9e359874278d76 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroMessageQueueBundle:ConsumerHeartbeat:queue_consumer_heartbeat_js.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  30 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/messenger'],
        function (sync, messenger) {
            sync.subscribe('oro/message_queue_heartbeat', function (response) {
                messenger.notificationMessage(
                    'error',
                    {# A php message was used here instead of a js message because this message is used in a php code as well. #}
                    '{{ 'oro.message_queue_job.no_alive_consumers'|trans }}'
                );
            });
        });
</script>
", "OroMessageQueueBundle:ConsumerHeartbeat:queue_consumer_heartbeat_js.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/MessageQueueBundle/Resources/views/ConsumerHeartbeat/queue_consumer_heartbeat_js.html.twig");
    }
}
