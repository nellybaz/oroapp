<?php

/* OroMailChimpBundle:MailChimp:connectionButtons.html.twig */
class __TwigTemplate_8e978135d5baf92a41628b9d8cbe8e5837ad8f9533413285380febab4e1d2904 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMailChimpBundle:MailChimp:connectionButtons.html.twig", 1);
        // line 2
        echo "
<div class=\"btn-group pull-left\">
";
        // line 4
        if ($this->getAttribute(($context["staticSegment"] ?? null), "id", array())) {
            // line 5
            echo "    ";
            ob_start();
            // line 6
            echo "        ";
            echo $context["UI"]->getdropdownItem(array("path" => "javascript:void(0);", "data" => array("page-component-module" => "oromailchimp/js/app/components/synchronize-btn-component", "page-component-options" => twig_jsonencode_filter(array("status" => twig_constant("Oro\\Bundle\\MailChimpBundle\\Entity\\StaticSegment::STATUS_SCHEDULED"))), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_update_staticsegment_status", array("id" => $this->getAttribute(            // line 13
($context["staticSegment"] ?? null), "id", array()))), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.message.syncronize_scheduled")), "id" => "mailchimp-synchronize-btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.synchronize"), "class" => "no-hash", "iCss" => "fa-refresh"));
            // line 20
            echo "

        ";
            // line 22
            echo $context["UI"]->getdropdownItem(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_mailchimp_marketing_list_connect", array("id" => $this->getAttribute(            // line 25
($context["marketingList"] ?? null), "id", array()))), "page-component-module" => "oromailchimp/js/app/components/connect-btn-component", "page-component-options" => twig_jsonencode_filter(array("createOnEvent" => "click", "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.message.update"), "options" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.dialog.title.update"))))), "id" => "mailchimp-connection-btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.manage_connection"), "class" => "no-hash", "iCss" => "fa-pencil-square-o"));
            // line 39
            echo "
        <li>
            ";
            // line 41
            echo $context["UI"]->getdeleteLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_staticsegment", array("id" => $this->getAttribute(            // line 42
($context["staticSegment"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_view", array("id" => $this->getAttribute(            // line 43
($context["marketingList"] ?? null), "id", array()))), "dataMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.confirmation.disconnect"), "aCss" => "no-hash remove-button", "id" => "btn-remove-mailchimp-connection", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.name"), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.message.disconnect"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.disconnect"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.disconnect")));
            // line 51
            echo "
        </li>
    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 54
            echo "
    ";
            // line 55
            echo $context["UI"]->getdropdownButton(array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.group_name"), "iCss" => "fa-cog", "html" =>             // line 58
($context["html"] ?? null)));
            // line 59
            echo "
";
        } else {
            // line 61
            echo "    ";
            echo $context["UI"]->getlink(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_mailchimp_marketing_list_connect", array("id" => $this->getAttribute(            // line 64
($context["marketingList"] ?? null), "id", array()))), "page-component-module" => "oromailchimp/js/app/components/connect-btn-component", "page-component-options" => twig_jsonencode_filter(array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.message.connect"), "createOnEvent" => "click", "options" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.dialog.title.connect"))))), "id" => "mailchimp-connection-btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.connect"), "class" => "no-hash btn", "iCss" => "icon-mailchimp"));
            // line 78
            echo "
";
        }
        // line 80
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroMailChimpBundle:MailChimp:connectionButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 80,  68 => 78,  66 => 64,  64 => 61,  60 => 59,  58 => 58,  57 => 55,  54 => 54,  49 => 51,  47 => 43,  46 => 42,  45 => 41,  41 => 39,  39 => 25,  38 => 22,  34 => 20,  32 => 13,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMailChimpBundle:MailChimp:connectionButtons.html.twig", "");
    }
}
