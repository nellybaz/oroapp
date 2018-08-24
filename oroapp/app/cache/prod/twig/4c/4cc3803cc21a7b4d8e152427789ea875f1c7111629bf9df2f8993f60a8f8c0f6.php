<?php

/* OroEmailBundle:Email/dialog:update.html.twig */
class __TwigTemplate_bf4c5f96e1fcc0bb87426bd153ef9c5701e62e1d0fb7d354be972282b7f03865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
            'page_container_before_form' => array($this, 'block_page_container_before_form'),
            'page_container_form_actions' => array($this, 'block_page_container_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroEmailBundle:Form:fields.html.twig"));
        // line 8
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email/dialog:update.html.twig", 8);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('page_container', $context, $blocks);
    }

    public function block_page_container($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if (($context["saved"] ?? null)) {
            // line 12
            echo "        ";
            $context["widgetResponse"] = array("widget" => array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.the_email_was_sent"), "triggerSuccess" => true, "trigger" => array(0 => "datagrid:doRefresh:attachment-grid", 1 => "widget:doRefresh:email-thread"), "remove" => true));
            // line 20
            echo "
        ";
            // line 21
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
    ";
        } else {
            // line 23
            echo "        <div class=\"widget-content email-form\">
            ";
            // line 24
            $this->displayBlock('page_container_before_form', $context, $blocks);
            // line 25
            echo "            ";
            if (( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array()) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())))) {
                // line 26
                echo "                <div class=\"alert alert-error\">
                    <div class=\"message\">
                        ";
                // line 28
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
                    </div>
                </div>
            ";
            }
            // line 32
            echo "            <div class=\"form-container\">
                <form id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\"
                      method=\"post\" action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                    ";
            // line 35
            $context["emailEditorOptions"] = array("entityId" => $this->getAttribute(            // line 36
($context["entity"] ?? null), "entityId", array()), "to" => $this->getAttribute(            // line 37
($context["entity"] ?? null), "to", array()), "cc" => $this->getAttribute(            // line 38
($context["entity"] ?? null), "cc", array()), "bcc" => $this->getAttribute(            // line 39
($context["entity"] ?? null), "bcc", array()), "appendSignature" =>             // line 40
($context["appendSignature"] ?? null), "minimalWysiwygEditorHeight" => 150, "isSignatureEditable" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_user_update"));
            // line 44
            echo "                    <fieldset class=\"form-horizontal\"
                              data-page-component-module=\"oroemail/js/app/components/email-editor-component\"
                              data-page-component-options=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["emailEditorOptions"] ?? null)), "html", null, true);
            echo "\"
                              data-layout=\"separate\"
                            >
                        ";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "gridName", array()), 'row');
            echo "
                        ";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "origin", array()), 'row');
            echo "
                        ";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", array()), 'row');
            echo "
                        ";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cc", array()), 'row');
            echo "
                        ";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "bcc", array()), 'row');
            echo "
                        ";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'row');
            echo "
                        ";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "template", array()), 'row', array("includeNonEntity" => true, "includeSystemTemplates" => false));
            echo "
                        ";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row');
            echo "
                        ";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "body", array()), 'row');
            echo "

                        <div class=\"control-group email-body-actions\">
                            <div class=\"controls\">
                                <span class=\"email-body-action\"><a id=\"add-signature\" href=\"javascript:void(0);\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.add_signature"), "html", null, true);
            echo "</a></span>

                                <span>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.attach_file"), "html", null, true);
            echo ": </span>
                                <div class=\"dropup\" style=\"display: inline-block\">
                                    <a class=\"attach-file dropdown-toggle\" href=\"javascript:void(0);\" aria-expanded=\"true\">";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.from_record"), "html", null, true);
            echo "</a>
                                    <div class=\"dropdown-menu attachment-list-popup\" role=\"menu\" aria-labelledby=\"attach-file\"></div>
                                </div>
                                |
                                <span>
                                    <a class=\"upload-new\" href=\"javascript:void(0);\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.form.upload"), "html", null, true);
            echo "</a>
                                </span>
                            </div>
                        </div>

                        ";
            // line 75
            $context["emailAttachmentOptions"] = array("popupTriggerButton" => ".attach-file", "uploadNewButton" => ".upload-new", "popupContentEl" => ".attachment-list-popup", "entityAttachments" => $this->getAttribute($this->getAttribute(            // line 79
($context["entity"] ?? null), "attachments", array()), "toArray", array()), "attachmentsAvailable" => $this->getAttribute(            // line 80
($context["entity"] ?? null), "attachmentsAvailable", array()));
            // line 82
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachments", array()), 'row', array("options" => ($context["emailAttachmentOptions"] ?? null)));
            echo "

                        ";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                        <div class=\"widget-actions form-actions\" style=\"display: none;\">
                            ";
            // line 86
            $this->displayBlock('page_container_form_actions', $context, $blocks);
            // line 90
            echo "                        </div>
                    </fieldset>
                </form>
                ";
            // line 93
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
            </div>
        </div>
    ";
        }
    }

    // line 24
    public function block_page_container_before_form($context, array $blocks = array())
    {
    }

    // line 86
    public function block_page_container_form_actions($context, array $blocks = array())
    {
        // line 87
        echo "                                <button class=\"btn\" type=\"reset\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-primary\" type=\"submit\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send"), "html", null, true);
        echo "</button>
                            ";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/dialog:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 88,  202 => 87,  199 => 86,  194 => 24,  185 => 93,  180 => 90,  178 => 86,  173 => 84,  167 => 82,  165 => 80,  164 => 79,  163 => 75,  155 => 70,  147 => 65,  142 => 63,  137 => 61,  130 => 57,  126 => 56,  122 => 55,  118 => 54,  114 => 53,  110 => 52,  106 => 51,  102 => 50,  98 => 49,  92 => 46,  88 => 44,  86 => 40,  85 => 39,  84 => 38,  83 => 37,  82 => 36,  81 => 35,  77 => 34,  71 => 33,  68 => 32,  61 => 28,  57 => 26,  54 => 25,  52 => 24,  49 => 23,  44 => 21,  41 => 20,  38 => 12,  35 => 11,  29 => 10,  26 => 9,  24 => 8,  22 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/dialog:update.html.twig", "");
    }
}
