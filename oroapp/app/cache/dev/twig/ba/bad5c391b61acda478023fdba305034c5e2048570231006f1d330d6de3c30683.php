<?php

/* OroSyncBundle::maintenance_js.html.twig */
class __TwigTemplate_af490e49929e80109cbf20c0e4c73bebfc2889978892ffa997534b2e19191d88 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSyncBundle::maintenance_js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/modal', 'orotranslation/js/translator'],
    function(sync, Modal, __) {
        var dialog = null;

        sync.subscribe('oro/maintenance', function (response) {
            var userId = null;
            ";
        // line 8
        if ( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()))) {
            // line 9
            echo "                userId = ";
            echo $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array());
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  39 => 11,  33 => 9,  31 => 8,  22 => 1,);
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
    require(['orosync/js/sync', 'oroui/js/modal', 'orotranslation/js/translator'],
    function(sync, Modal, __) {
        var dialog = null;

        sync.subscribe('oro/maintenance', function (response) {
            var userId = null;
            {% if app.user is not null %}
                userId = {{ app.user.id|raw }};
            {% endif %}

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
", "OroSyncBundle::maintenance_js.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/SyncBundle/Resources/views/maintenance_js.html.twig");
    }
}
