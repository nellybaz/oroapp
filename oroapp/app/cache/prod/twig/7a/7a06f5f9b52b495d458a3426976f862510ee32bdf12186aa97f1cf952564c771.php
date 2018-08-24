<?php

/* OroZendeskBundle:Case:syncButton.html.twig */
class __TwigTemplate_d3076b49458f03258fb270b1598f8c921db3ef8c0cd4809d715e72c9df32316d extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 2
            echo "    ";
            $context["channels"] = $this->env->getExtension('Oro\Bundle\ZendeskBundle\Twig\ZendeskExtension')->getEnabledTwoWaySyncChannels();
            // line 3
            echo "    ";
            $context["firstChannel"] = twig_first($this->env, ($context["channels"] ?? null));
            // line 4
            echo "    <div class=\"btn-group zendesk-integration-btn-group\">
        <a type=\"button\"
           class=\"zendesk-integration-btn btn icons-holder-text no-hash\"
           href=\"#\"
           data-channel-id=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["firstChannel"] ?? null), "id", array()), "html", null, true);
            echo "\"
        >
           <i class=\"fa-upload  hide-text\"></i>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.form.sync_to_zendesk.label"), "html", null, true);
            echo "
        </a>
        <a href=\"#\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 17
                echo "                <li>
                    <a type=\"button\"
                       class=\"zendesk-integration-btn icons-holder-text no-hash\"
                       href=\"#\" data-channel-id=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "name", array()), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    </div>
    <script type=\"text/javascript\">
        require(['jquery', 'routing', 'oroui/js/mediator', 'oroui/js/messenger', 'orotranslation/js/translator'],
            function (\$, routing, mediator, messenger, __) {
                \$('.zendesk-integration-btn').bind('click', function(event) {
                    event.preventDefault();

                    var id = \$(this).data('channel-id');
                    var url = routing.generate('oro_api_post_ticket_sync_case', {id: '";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
            echo "', channelId: id});

                    mediator.execute('showLoading');
                    \$.post({
                        url: url,
                        errorHandlerMessage: __('oro.zendesk.reverse_sync.fail_message')
                    }).done(function(res, status, jqXHR) {
                        mediator.once('page:afterChange', function(){
                            messenger.notificationFlashMessage('success', __('oro.zendesk.reverse_sync.success_message'));
                        });
                        mediator.execute('refreshPage', {restore: true});
                    }).always(function () {
                        mediator.execute('hideLoading');
                    });

                    return false;
                });
            });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroZendeskBundle:Case:syncButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  70 => 25,  60 => 21,  56 => 20,  51 => 17,  47 => 16,  38 => 10,  33 => 8,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroZendeskBundle:Case:syncButton.html.twig", "");
    }
}
