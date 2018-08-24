<?php

/* OroAbandonedCartBundle:AbandonedCart:connectionButtons.html.twig */
class __TwigTemplate_9cb4e047697ae8302bf3efbd3140a2569b3b68aac32719b51ea75f2b400d9331 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAbandonedCartBundle:AbandonedCart:connectionButtons.html.twig", 1);
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
($context["staticSegment"] ?? null), "id", array()))), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.connection.message.syncronize_scheduled")), "id" => "mailchimp-synchronize-btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.synchronize"), "class" => "no-hash", "iCss" => "fa-refresh"));
            // line 20
            echo "

        ";
            // line 22
            echo $context["UI"]->getdropdownItem(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_mailchimp_marketing_list_connect", array("id" => $this->getAttribute(            // line 25
($context["marketingList"] ?? null), "id", array()))), "page-component-module" => "oromailchimp/js/app/components/connect-btn-component", "page-component-options" => twig_jsonencode_filter(array("createOnEvent" => "click", "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.message.update"), "options" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.dialog.title.update"))))), "id" => "mailchimp-connection-btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.manage_connection"), "class" => "no-hash", "iCss" => "fa-pencil-square-o"));
            // line 39
            echo "

        ";
            // line 41
            if (($context["relatedCampaigns"] ?? null)) {
                // line 42
                echo "            ";
                echo $context["UI"]->getdropdownItem(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_manage_workflow", array("id" => $this->getAttribute(                // line 45
($context["marketingList"] ?? null), "id", array()))), "page-component-module" => "oromailchimp/js/app/components/connect-btn-component", "page-component-options" => twig_jsonencode_filter(array("createOnEvent" => "click", "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.conversion.message.update"), "options" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.conversion.dialog.title.connect"))))), "id" => "mailchimp-connection-btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.conversion.button.enable"), "class" => "no-hash", "iCss" => "fa-usd"));
                // line 59
                echo "
        ";
            }
            // line 61
            echo "        <li>
            ";
            // line 62
            echo $context["UI"]->getdeleteLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_staticsegment", array("id" => $this->getAttribute(            // line 63
($context["staticSegment"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_abandoned_cart_list_view", array("id" => $this->getAttribute(            // line 64
($context["marketingList"] ?? null), "id", array()))), "dataMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.connection.confirmation.disconnect"), "aCss" => "no-hash remove-button", "id" => "btn-remove-mailchimp-connection", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.name"), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.abandonedcart.connection.message.disconnect"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.disconnect"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.disconnect")));
            // line 72
            echo "
        </li>
    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 75
            echo "
    ";
            // line 76
            echo $context["UI"]->getdropdownButton(array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.group_name"), "iCss" => "fa-cog", "html" =>             // line 79
($context["html"] ?? null)));
            // line 80
            echo "
";
        } else {
            // line 82
            echo "    ";
            echo $context["UI"]->getlink(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_mailchimp_marketing_list_connect", array("id" => $this->getAttribute(            // line 85
($context["marketingList"] ?? null), "id", array()))), "page-component-module" => "oromailchimp/js/app/components/connect-btn-component", "page-component-options" => twig_jsonencode_filter(array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.message.connect"), "createOnEvent" => "click", "options" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.dialog.title.connect"))))), "id" => "mailchimp-connection-btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.connection.button.connect"), "class" => "no-hash btn", "iCss" => "icon-mailchimp"));
            // line 99
            echo "
";
        }
        // line 101
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroAbandonedCartBundle:AbandonedCart:connectionButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 101,  81 => 99,  79 => 85,  77 => 82,  73 => 80,  71 => 79,  70 => 76,  67 => 75,  62 => 72,  60 => 64,  59 => 63,  58 => 62,  55 => 61,  51 => 59,  49 => 45,  47 => 42,  45 => 41,  41 => 39,  39 => 25,  38 => 22,  34 => 20,  32 => 13,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAbandonedCartBundle:AbandonedCart:connectionButtons.html.twig", "");
    }
}
