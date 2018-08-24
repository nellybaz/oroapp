<?php

/* OroCommentBundle:Comment:form.html.twig */
class __TwigTemplate_e9a6b76b30dd55a7eab6d848c474d8791518590564cc1a87b95f29f81a6a78b0 extends Twig_Template
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => $this));
        // line 2
        echo "
<form method=\"post\" class=\"comment-form\">
    <fieldset class=\"form-horizontal\">
        <label>
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'widget');
        echo "
        </label>
        <div class=\"pull-left\">
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachment", array()), 'widget');
        echo "
            <% if (attachmentURL) { %>
            <div class=\"attachment-item\">
                <i class=\"fa-paperclip\"></i>
                <a href=\"<%- attachmentURL %>\" class=\"no-hash\" title=\"<%- attachmentFileName %>\"><%- attachmentFileName %></a> (<%- attachmentSize %>)
                <button class=\"btn btn-link fa-close remove-attachment\" type=\"button\"></button>
            </div>
            <% } %>
        </div>
        <div class=\"widget-actions pull-right\">
            <button class=\"btn cancel-comment-button\" type=\"reset\">
                <%= _.__('oro.comment.from.button.cancel_comment.label')  %>
            </button>
            <% if (!isNew) { %>
            <button class=\"btn btn-primary\" type=\"submit\">
                <%= _.__('oro.comment.from.button.edit_comment.label') %>
            </button>
            <% } else { %>
            <button class=\"btn btn-primary\" type=\"submit\">
                <%= _.__('oro.comment.from.button.send_comment.label') %>
            </button>
            <% } %>
        </div>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "OroCommentBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommentBundle:Comment:form.html.twig", "");
    }
}
