<?php

/* OroSaleBundle:Action:emailNotification.html.twig */
class __TwigTemplate_845a3d24b3b120150b229c62ee9b7658a62b71575ee499ed708e7d0c64005b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroSaleBundle:Action:emailNotification.html.twig", 1);
        $this->blocks = array(
            'widget_content_class' => array($this, 'block_widget_content_class'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActionBundle:Operation:form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSaleBundle:Action:emailNotification.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_widget_content_class($context, array $blocks = array())
    {
        echo "widget-content email-form";
    }

    // line 6
    public function block_form($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroEmailBundle:Form:fields.html.twig"));
        // line 8
        echo "
    <div class=\"form-container\">
        <form id=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
            ";
        // line 11
        $context["emailEditorOptions"] = array("entityId" => $this->getAttribute($this->getAttribute(        // line 12
($context["context"] ?? null), "email", array()), "entityId", array()), "to" => $this->getAttribute($this->getAttribute(        // line 13
($context["context"] ?? null), "email", array()), "to", array()), "cc" => $this->getAttribute($this->getAttribute(        // line 14
($context["context"] ?? null), "email", array()), "cc", array()), "bcc" => $this->getAttribute($this->getAttribute(        // line 15
($context["context"] ?? null), "email", array()), "bcc", array()), "appendSignature" => $this->getAttribute(        // line 16
($context["context"] ?? null), "appendSignature", array()), "minimalWysiwygEditorHeight" => 150, "isSignatureEditable" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_user_update"));
        // line 20
        echo "            <fieldset class=\"form-horizontal\"
                      data-page-component-module=\"oroemail/js/app/components/email-editor-component\"
                      data-page-component-options=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["emailEditorOptions"] ?? null)), "html", null, true);
        echo "\"
                      data-layout=\"separate\"
            >
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "gridName", array()), 'row');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "from", array()), 'row');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "to", array()), 'row');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "cc", array()), 'row');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "bcc", array()), 'row');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "subject", array()), 'row');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "template", array()), 'row', array("includeNonEntity" => true, "includeSystemTemplates" => false));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "type", array()), 'row');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "body", array()), 'row');
        echo "

                <div class=\"control-group email-body-actions\">
                    <div class=\"controls\">
                        <span class=\"email-body-action\"><a id=\"add-signature\" href=\"javascript:void(0);\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.add_signature"), "html", null, true);
        echo "</a></span>

                        <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.attach_file"), "html", null, true);
        echo ": </span>
                        <div class=\"dropup\" style=\"display: inline-block\">
                            <a class=\"attach-file dropdown-toggle\" href=\"javascript:void(0);\" aria-expanded=\"true\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.from_record"), "html", null, true);
        echo "</a>
                            <div class=\"dropdown-menu attachment-list-popup\" role=\"menu\" aria-labelledby=\"attach-file\"></div>
                        </div>
                        |
                        <span>
                            <a class=\"upload-new\" href=\"javascript:void(0);\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.upload"), "html", null, true);
        echo "</a>
                        </span>
                    </div>
                </div>

                ";
        // line 51
        $context["emailAttachmentOptions"] = array("popupTriggerButton" => ".attach-file", "uploadNewButton" => ".upload-new", "popupContentEl" => ".attachment-list-popup", "entityAttachments" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 55
($context["context"] ?? null), "email", array()), "attachments", array()), "toArray", array()), "attachmentsAvailable" => $this->getAttribute($this->getAttribute(        // line 56
($context["context"] ?? null), "email", array()), "attachmentsAvailable", array()));
        // line 58
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "attachments", array()), 'row', array("options" => ($context["emailAttachmentOptions"] ?? null)));
        echo "
                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "contexts", array()), 'row');
        echo "

                ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

                <div class=\"widget-actions form-actions\">
                    <button class=\"btn\" type=\"reset\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.btn.cancel"), "html", null, true);
        echo "</button>
                    <button class=\"btn\" type=\"submit\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.btn.send"), "html", null, true);
        echo "</button>
                </div>
            </fieldset>
        </form>
        ";
        // line 70
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:Action:emailNotification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 70,  166 => 66,  162 => 65,  156 => 62,  152 => 61,  147 => 59,  142 => 58,  140 => 56,  139 => 55,  138 => 51,  130 => 46,  122 => 41,  117 => 39,  112 => 37,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 22,  63 => 20,  61 => 16,  60 => 15,  59 => 14,  58 => 13,  57 => 12,  56 => 11,  48 => 10,  44 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:Action:emailNotification.html.twig", "");
    }
}
