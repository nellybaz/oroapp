<?php

/* OroSyncBundle::sync_js.html.twig */
class __TwigTemplate_a2173dd5871af0bd09f7d05b5f6854f08769e2b877405b75a20110c9823c7aeb extends Twig_Template
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
        if ($this->env->getExtension('Oro\Bundle\SyncBundle\Twig\OroSyncExtension')->checkWsConnected()) {
            // line 2
            echo "<script type=\"text/javascript\">
    require(['jquery', 'orosync/js/sync', 'orosync/js/sync/wamp', 'routing'],
    function(\$, sync, Wamp, routing){
        \$(document).on('click.action.data-api', '[data-action=sync-connect]', function (e) {
            sync.reconnect();
            \$(e.target).closest('.alert').alert('close');
            e.preventDefault();
        });

        sync(new Wamp({
            secure: ";
            // line 12
            echo (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "X-Forwarded-Proto"), "method") == "https") || $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "isSecure", array(), "method"))) ? ("true") : ("false"));
            echo ",
            host: '";
            // line 13
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["ws"] ?? null), "host", array()) == "*")) ? ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "host", array())) : ($this->getAttribute(($context["ws"] ?? null), "host", array()))), "html", null, true);
            echo "',
            port: ";
            // line 14
            echo twig_jsonencode_filter($this->getAttribute(($context["ws"] ?? null), "port", array()));
            echo ",
            path: '";
            // line 15
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["ws"] ?? null), "path", array()), "/"), "html", null, true);
            echo "',
            maxRetries: 3,
            retryDelay: 30000,
            syncTicketUrl: routing.generate('oro_sync_ticket')
        }));
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroSyncBundle::sync_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  41 => 14,  37 => 13,  33 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSyncBundle::sync_js.html.twig", "");
    }
}
