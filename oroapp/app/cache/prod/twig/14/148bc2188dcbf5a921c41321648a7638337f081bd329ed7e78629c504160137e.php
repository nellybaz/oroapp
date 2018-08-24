<?php

/* OroAccountBundle:Account:view.html.twig */
class __TwigTemplate_99b6d96ba56b5564523221d8f88fa964809424723633726da508e77f3c55af09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroAccountBundle:Account:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["hasGrantedNameView"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "name");

        $this->env->getExtension("oro_title")->set(array("params" => array("%account.name%" => ((        // line 5
($context["hasGrantedNameView"] ?? null)) ? ((($this->getAttribute(        // line 6
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %fieldName% not granted", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.name.label"))))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_update", array("id" => $this->getAttribute(            // line 13
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.entity_label"))), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
        // line 17
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_account", array("id" => $this->getAttribute(            // line 19
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 22
($context["entity"] ?? null), "id", array()), "id" => "btn-remove-account", "dataMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete_confirm_cascade", array("%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.entity_label"))))), "method"), "html", null, true);
            // line 27
            echo "
    ";
        }
    }

    // line 31
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 33
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.entity_plural_label"), "rawEntityTitle" =>  !        // line 36
($context["hasGrantedNameView"] ?? null), "entityTitle" => ((        // line 37
($context["hasGrantedNameView"] ?? null)) ? ((($this->getAttribute(        // line 38
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"))) : ($this->getAttribute(        // line 39
($context["UI"] ?? null), "renderDisabledLabel", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %fieldName% not granted", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.name.label")))), "method"))));
        // line 41
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 44
    public function block_content_data($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        ob_start();
        // line 46
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.widgets.account_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_widget_info", array("id" => $this->getAttribute(        // line 49
($context["entity"] ?? null), "id", array())))));
        // line 50
        echo "
    ";
        $context["accountInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        $context["generalSectionBlocks"] = array(0 => array("data" => array(0 => ($context["accountInformationWidget"] ?? null))));
        // line 54
        echo "
    ";
        // line 55
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contact_view") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "contacts"))) {
            // line 56
            echo "        ";
            ob_start();
            // line 57
            echo "            <div class=\"contact-widget-wrapper\">
                ";
            // line 58
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_widget_contacts", array("id" => $this->getAttribute(            // line 60
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.widgets.account_contacts")));
            // line 62
            echo "
            </div>
        ";
            $context["contactsInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 65
            echo "
        ";
            // line 66
            $context["generalSectionBlocks"] = twig_array_merge(($context["generalSectionBlocks"] ?? null), array(0 => array("data" => array(0 =>             // line 67
($context["contactsInformationWidget"] ?? null)))));
            // line 69
            echo "    ";
        }
        // line 70
        echo "
    ";
        // line 71
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.sections.general"), "class" => "active", "subblocks" =>         // line 75
($context["generalSectionBlocks"] ?? null)));
        // line 78
        echo "
    ";
        // line 80
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 81
            ob_start();
            // line 82
            ob_start();
            // line 83
            echo "                ";
            $context["placeHolderName"] = ("oro_account_channel_info_" . $this->getAttribute($context["channel"], "channelType", array()));
            // line 84
            echo "                ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ($context["placeHolderName"] ?? null), array("accountId" => $this->getAttribute(($context["entity"] ?? null), "id", array()), "channelId" => $this->getAttribute($context["channel"], "id", array())));
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            $context["accountChannelInfoSection"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 87
            if ( !twig_test_empty(twig_trim_filter(strip_tags(($context["accountChannelInfoSection"] ?? null))))) {
                // line 88
                echo "            ";
                $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->getAttribute(                // line 90
$context["channel"], "name", array()), "priority" => 255, "subblocks" => array(0 => array("data" => array(0 =>                 // line 93
($context["accountChannelInfoSection"] ?? null)))))));
                // line 97
                echo "        ";
            }
            // line 98
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
    ";
        // line 101
        echo "    ";
        ob_start();
        // line 102
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("oro_website_activity", $context)) ? (_twig_default_filter(($context["oro_website_activity"] ?? null), "oro_website_activity")) : ("oro_website_activity")), array("customers" => ($context["customers"] ?? null), "byChannel" => true));
        $context["websiteActivity"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 104
        echo "    ";
        if ( !twig_test_empty(($context["websiteActivity"] ?? null))) {
            // line 105
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.sections.website_activity"), "priority" => 1050, "subblocks" => array(0 => array("data" => array(0 =>             // line 110
($context["websiteActivity"] ?? null)))))));
            // line 114
            echo "    ";
        }
        // line 115
        echo "
    ";
        // line 116
        $context["id"] = "accountView";
        // line 117
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 118
        echo "
    ";
        // line 119
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroAccountBundle:Account:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 119,  201 => 118,  198 => 117,  196 => 116,  193 => 115,  190 => 114,  188 => 110,  186 => 105,  183 => 104,  180 => 102,  177 => 101,  174 => 99,  168 => 98,  165 => 97,  163 => 93,  162 => 90,  160 => 88,  158 => 87,  151 => 84,  148 => 83,  146 => 82,  144 => 81,  139 => 80,  136 => 78,  134 => 75,  133 => 71,  130 => 70,  127 => 69,  125 => 67,  124 => 66,  121 => 65,  116 => 62,  114 => 60,  113 => 58,  110 => 57,  107 => 56,  105 => 55,  102 => 54,  100 => 53,  97 => 52,  93 => 50,  91 => 49,  89 => 46,  86 => 45,  83 => 44,  76 => 41,  74 => 39,  73 => 38,  72 => 37,  71 => 36,  70 => 33,  68 => 32,  65 => 31,  59 => 27,  57 => 22,  56 => 19,  54 => 18,  51 => 17,  47 => 15,  45 => 13,  43 => 12,  40 => 11,  37 => 10,  33 => 1,  31 => 6,  30 => 5,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAccountBundle:Account:view.html.twig", "");
    }
}
