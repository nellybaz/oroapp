<?php

/* OroUserBundle:Sync:outdated_js.html.twig */
class __TwigTemplate_1777da3b148e4c98023a0af17ad42985bb48aa30df3a3a41301a90a94999aed3 extends Twig_Template
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
        $context["roles"] = array();
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 3
            echo "    ";
            $context["roles"] = twig_array_merge(($context["roles"] ?? null), array(0 => $this->getAttribute($context["role"], "role", array())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "
<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/modal', 'oroui/js/mediator', 'oroui/js/messenger', 'orotranslation/js/translator'],
    function(sync, Modal, mediator, messenger, __) {
        var notifier = null;
        var sendNotification = true;

        mediator.on('page:beforeChange', function() {
            if (notifier) {
                notifier.close();
            }
            sendNotification = false;
        });

        sync.subscribe('oro/outdated_user_page', function (response) {
            var roles = ";
        // line 20
        echo twig_jsonencode_filter(($context["roles"] ?? null));
        echo ";

            if (roles.indexOf(response.role) != -1) {
                if (notifier) {
                    notifier.close();
                }

                if (sendNotification) {
                    notifier = messenger.notificationMessage(
                            'warning',
                            __('oro.role.content_outdated')
                    );
                }
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Sync:outdated_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  32 => 5,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Sync:outdated_js.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Sync/outdated_js.html.twig");
    }
}
