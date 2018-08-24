<?php

/* OroEmailBundle::requirejs.config.js.twig */
class __TwigTemplate_1068378a1ed64e229a92f53163cdd33e964fbc01977daf7ba2e399d0704a30a7 extends Twig_Template
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
        $context["email_clank_event"] = twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmailClankEvent());
        // line 2
        echo "require({
    config: {
        'oroemail/js/app/components/new-email-message-component': {
            clankEvent: ";
        // line 5
        echo ($context["email_clank_event"] ?? null);
        echo "
        },
        'oroemail/js/app/components/sidebar-recent-emails-component': {
            clankEvent: ";
        // line 8
        echo ($context["email_clank_event"] ?? null);
        echo "
        },
        'oroemail/js/app/unread-emails-state-holder': {
            clankEvent: ";
        // line 11
        echo ($context["email_clank_event"] ?? null);
        echo "
        },
        'oroemail/js/util/unread-email-count-cache': {
            unreadEmailsCount: ";
        // line 14
        echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getUnreadEmailsCount());
        echo "
        }
    }
});
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  38 => 11,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle::requirejs.config.js.twig", "");
    }
}
