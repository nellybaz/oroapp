<?php

/* OroSyncBundle::maintenance_js.html.twig */
class __TwigTemplate_bd6747c1cc9b11f042bf7cf85525b0ec4d452bb8c44c746aa623cd6960a3b215 extends Twig_Template
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
    require(['orosync/js/sync', 'oroui/js/modal', 'orotranslation/js/translator'],
    function(sync, Modal, __) {
        var dialog = null;

        sync.subscribe('oro/maintenance', function (response) {
            var userId = null;
            ";
        // line 8
        if ( !(null === $this->getAttribute(($context["app"] ?? null), "user", array()))) {
            // line 9
            echo "                userId = ";
            echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array());
            echo ";
            ";
        }
        // line 11
        echo "
            if (response.isOn && (!userId || parseInt(userId) != parseInt(response.userId))) {
                var regExp = new RegExp('\\n', 'g');
                if (dialog) {
                    dialog.close();
                    dialog.remove();
                }
                dialog = new Modal({
                    'content': __('oro.platform.maintenance_mode_on_message').replace(regExp, '<br/>'),
                    'className': 'modal oro-modal-danger oro-modal-maintenance',
                    'allowCancel': false,
                    'title': __('oro.platform.maintenance_mode_on_title')
                });
                dialog.open();
            } else if (dialog) {
                dialog.close();
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroSyncBundle::maintenance_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSyncBundle::maintenance_js.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/SyncBundle/Resources/views/maintenance_js.html.twig");
    }
}
