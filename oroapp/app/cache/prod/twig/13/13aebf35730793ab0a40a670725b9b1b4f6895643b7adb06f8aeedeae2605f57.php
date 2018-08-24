<?php

/* OroDotmailerBundle:AddressBook:connectionButtons.html.twig */
class __TwigTemplate_440de901f3894f09a4c4496b917b380033747f869b9bbd443a0585df7fb8a0be extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDotmailerBundle:AddressBook:connectionButtons.html.twig", 1);
        // line 2
        echo "
<div class=\"btn-group pull-left dotmailer-group\">
    ";
        // line 4
        if (($context["addressBook"] ?? null)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "        ";
            echo $context["UI"]->getdropdownItem(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_synchronize_adddress_book", array("id" => $this->getAttribute(            // line 9
($context["addressBook"] ?? null), "id", array()))), "success-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.message.syncronize_scheduled"), "fail-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.message.syncronize_schedule_failed"), "action" => "sync-with-dotmailer"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.button.synchronize"), "class" => "no-hash dotmailer-sync-btn", "iCss" => "fa-refresh"));
            // line 17
            echo "

        ";
            // line 19
            echo $context["UI"]->getdropdownItem(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_synchronize_adddress_book_datafields", array("id" => $this->getAttribute(            // line 22
($context["addressBook"] ?? null), "id", array()))), "action" => "sync-with-dotmailer"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.addressbook.sync_datafields"), "class" => "no-hash dotmailer-sync-btn", "iCss" => "fa-refresh"));
            // line 28
            echo "

        ";
            // line 30
            echo $context["UI"]->getdropdownItem(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_marketing_list_connect", array("id" => $this->getAttribute(            // line 33
($context["marketingList"] ?? null), "id", array()))), "action" => "connect-with-dotmailer-setting-update", "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.message.update"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.dialog.title.update")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.button.manage_connection"), "class" => "no-hash dotmailer-sync-btn", "iCss" => "fa-pencil-square-o"));
            // line 41
            echo "

        <li>
            ";
            // line 44
            echo $context["UI"]->getdeleteLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_marketing_list_disconnect", array("id" => $this->getAttribute(            // line 45
($context["addressBook"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_view", array("id" => $this->getAttribute(            // line 46
($context["marketingList"] ?? null), "id", array()))), "dataMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.confirmation.disconnect"), "aCss" => "no-hash remove-button", "id" => "btn-remove-dotmailer-connection", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.name"), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.message.disconnect"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.button.disconnect"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.button.disconnect")));
            // line 54
            echo "
        </li>
        ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 57
            echo "
        ";
            // line 58
            echo $context["UI"]->getdropdownButton(array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.button.group_name"), "iCss" => "fa-cog", "html" =>             // line 61
($context["html"] ?? null)));
            // line 62
            echo "
    ";
        } else {
            // line 64
            echo "        ";
            echo $context["UI"]->getlink(array("path" => "javascript:void(0);", "data" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_marketing_list_connect", array("id" => $this->getAttribute(            // line 67
($context["marketingList"] ?? null), "id", array()))), "action" => "connect-with-dotmailer-setting-update", "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.message.connect"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.dialog.title.connect")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.button.connect"), "class" => "no-hash btn dotmailer-sync-btn", "iCss" => "icon-dotmailer"));
            // line 75
            echo "
    ";
        }
        // line 77
        echo "</div>

<script type=\"text/javascript\">
    require(['orodotmailer/js/sync-buttons-handler'], function(Handler){
        new Handler('.dotmailer-sync-btn');
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:AddressBook:connectionButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 77,  76 => 75,  74 => 67,  72 => 64,  68 => 62,  66 => 61,  65 => 58,  62 => 57,  57 => 54,  55 => 46,  54 => 45,  53 => 44,  48 => 41,  46 => 33,  45 => 30,  41 => 28,  39 => 22,  38 => 19,  34 => 17,  32 => 9,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:AddressBook:connectionButtons.html.twig", "");
    }
}
