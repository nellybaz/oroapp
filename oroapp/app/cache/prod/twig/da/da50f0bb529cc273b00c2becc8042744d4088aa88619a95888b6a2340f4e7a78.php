<?php

/* OroSaleBundle:Workflow:emailNotification.html.twig */
class __TwigTemplate_7af227d035fe6a24b77c4fbceb72fe9a558a1c7d77fc85eb1d000124d83440bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroWorkflowBundle:Widget:widget/transitionForm.html.twig", "OroSaleBundle:Workflow:emailNotification.html.twig", 1);
        $this->blocks = array(
            'transition_widget_class' => array($this, 'block_transition_widget_class'),
            'transition_form' => array($this, 'block_transition_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroWorkflowBundle:Widget:widget/transitionForm.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_transition_widget_class($context, array $blocks = array())
    {
        echo "widget-content email-form";
    }

    // line 5
    public function block_transition_form($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroEmailBundle:Form:fields.html.twig"));
        // line 7
        echo "    
    ";
        // line 8
        $context["context"] = $this->getAttribute(($context["workflowItem"] ?? null), "data", array());
        // line 9
        echo "
    <div class=\"form-container\">
        <form id=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
            ";
        // line 12
        $context["emailEditorOptions"] = array("entityId" => $this->getAttribute($this->getAttribute(        // line 13
($context["context"] ?? null), "email", array()), "entityId", array()), "to" => $this->getAttribute($this->getAttribute(        // line 14
($context["context"] ?? null), "email", array()), "to", array()), "cc" => $this->getAttribute($this->getAttribute(        // line 15
($context["context"] ?? null), "email", array()), "cc", array()), "bcc" => $this->getAttribute($this->getAttribute(        // line 16
($context["context"] ?? null), "email", array()), "bcc", array()), "appendSignature" => $this->getAttribute(        // line 17
($context["context"] ?? null), "appendSignature", array()), "minimalWysiwygEditorHeight" => 150, "isSignatureEditable" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_user_update"));
        // line 21
        echo "            <fieldset class=\"form-horizontal\"
                data-page-component-module=\"oroemail/js/app/components/email-editor-component\"
                data-page-component-options=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["emailEditorOptions"] ?? null)), "html", null, true);
        echo "\"
                data-layout=\"separate\"
            >
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "gridName", array()), 'row');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "from", array()), 'row');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "to", array()), 'row');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "cc", array()), 'row');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "bcc", array()), 'row');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "subject", array()), 'row');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "template", array()), 'row', array("includeNonEntity" => true, "includeSystemTemplates" => false));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "type", array()), 'row');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "body", array()), 'row');
        echo "

                <div class=\"control-group email-body-actions\">
                    <div class=\"controls\">
                        <span class=\"email-body-action\"><a id=\"add-signature\" href=\"javascript:void(0);\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.add_signature"), "html", null, true);
        echo "</a></span>

                        <span>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.attach_file"), "html", null, true);
        echo ": </span>
                        <div class=\"dropup\" style=\"display: inline-block\">
                            <a class=\"attach-file dropdown-toggle\" href=\"javascript:void(0);\" aria-expanded=\"true\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.from_record"), "html", null, true);
        echo "</a>
                            <div class=\"dropdown-menu attachment-list-popup\" role=\"menu\" aria-labelledby=\"attach-file\"></div>
                        </div>
                        |
                        <span>
                            <a class=\"upload-new\" href=\"javascript:void(0);\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.upload"), "html", null, true);
        echo "</a>
                        </span>
                    </div>
                </div>

                ";
        // line 52
        $context["emailAttachmentOptions"] = array("popupTriggerButton" => ".attach-file", "uploadNewButton" => ".upload-new", "popupContentEl" => ".attachment-list-popup", "entityAttachments" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 56
($context["context"] ?? null), "email", array()), "attachments", array()), "toArray", array()), "attachmentsAvailable" => $this->getAttribute($this->getAttribute(        // line 57
($context["context"] ?? null), "email", array()), "attachmentsAvailable", array()));
        // line 59
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "attachments", array()), 'row', array("options" => ($context["emailAttachmentOptions"] ?? null)));
        echo "
                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "contexts", array()), 'row');
        echo "

                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

                <div class=\"widget-actions form-actions\">
                    <button class=\"btn\" type=\"reset\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.btn.cancel"), "html", null, true);
        echo "</button>
                    <button class=\"btn\" type=\"submit\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.btn.send"), "html", null, true);
        echo "</button>
                </div>
            </fieldset>
        </form>
        ";
        // line 71
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:Workflow:emailNotification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 71,  168 => 67,  164 => 66,  158 => 63,  154 => 62,  149 => 60,  144 => 59,  142 => 57,  141 => 56,  140 => 52,  132 => 47,  124 => 42,  119 => 40,  114 => 38,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  69 => 23,  65 => 21,  63 => 17,  62 => 16,  61 => 15,  60 => 14,  59 => 13,  58 => 12,  50 => 11,  46 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:Workflow:emailNotification.html.twig", "");
    }
}
