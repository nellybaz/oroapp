<?php

/* OroImapBundle:Form:fields.html.twig */
class __TwigTemplate_cd8660b31d0190beab267b942e956635b99e84b0cc1d82a0ba981c8781eeb87f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_imap_configuration_check_widget' => array($this, 'block_oro_imap_configuration_check_widget'),
            'oro_imap_choice_account_type_widget' => array($this, 'block_oro_imap_choice_account_type_widget'),
            'oro_imap_configuration_gmail_widget' => array($this, 'block_oro_imap_configuration_gmail_widget'),
            'oro_config_google_imap_sync_checkbox_widget' => array($this, 'block_oro_config_google_imap_sync_checkbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_imap_configuration_check_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('oro_imap_choice_account_type_widget', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('oro_imap_configuration_gmail_widget', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('oro_config_google_imap_sync_checkbox_widget', $context, $blocks);
        // line 162
        echo "
";
    }

    // line 1
    public function block_oro_imap_configuration_check_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "parent", array()))) {
            // line 3
            echo "        ";
            $context["data"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "parent", array()), "vars", array()), "value", array());
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context["data"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "vars", array()), "value", array());
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        if ((($context["data"] ?? null) && twig_in_filter("oro_email_mailbox", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "vars", array()), "full_name", array())))) {
            // line 8
            echo "        ";
            $context["forEntity"] = "mailbox";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["forEntity"] = "user";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        $context["options"] = twig_array_merge((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array()), array())) : (array())), array("elementNamePrototype" =>         // line 13
($context["full_name"] ?? null), "id" => ((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()), "id", array())) : (null)), "forEntity" =>         // line 15
($context["forEntity"] ?? null), "organization" => ((((        // line 16
($context["data"] ?? null) && $this->getAttribute(($context["data"] ?? null), "organization", array(), "any", true, true)) && $this->getAttribute(($context["data"] ?? null), "organization", array()))) ? ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "organization", array()), "id", array())) : (null)), "parentElementSelector" => "fieldset"));
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-role" => "check-connection-btn", "data-page-component-module" => "oroimap/js/app/components/check-connection-component", "data-page-component-options" => twig_jsonencode_filter(        // line 22
($context["options"] ?? null))));
        // line 24
        echo "    <div class=\"control-group\">
        <div class=\"controls\">
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
            <div class=\"check-connection-messages\"></div>
        </div>
    </div>
    <div class=\"container-config-group\"
         data-page-component-module=\"oroimap/js/app/components/check-config-settings\"
         data-page-component-options=\"\">
    </div>
";
    }

    // line 36
    public function block_oro_imap_choice_account_type_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["data"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array());
        // line 38
        echo "
    ";
        // line 39
        $context["options"] = twig_array_merge((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array()), array())) : (array())), array("route" => "oro_imap_change_account_type", "formSelector" => ("#" . ((        // line 41
array_key_exists("formSelector", $context)) ? (_twig_default_filter(($context["formSelector"] ?? null), $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array())))), "formParentName" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 42
($context["form"] ?? null), "parent", array()), "vars", array()), "name", array()), "organization" => ((((        // line 43
($context["data"] ?? null) && $this->getAttribute(($context["data"] ?? null), "organization", array(), "any", true, true)) && $this->getAttribute(($context["data"] ?? null), "organization", array()))) ? ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "organization", array()), "id", array())) : (null))));
        // line 45
        echo "
    <div class=\"container-change-account-type\"
        data-page-component-module=\"oroimap/js/app/components/account-type-component\"
        data-page-component-options=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"
        data-layout=\"separate\"
    >
        <div ";
        // line 51
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 52
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 56
        if ($this->getAttribute(($context["form"] ?? null), "accountType", array(), "any", true, true)) {
            // line 57
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "accountType", array()), 'row');
            echo "
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if ($this->getAttribute(($context["form"] ?? null), "userEmailOrigin", array(), "any", true, true)) {
            // line 61
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "userEmailOrigin", array()), 'widget');
            echo "
            ";
        }
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 65
        echo "</div>
    </div>
";
    }

    // line 69
    public function block_oro_imap_configuration_gmail_widget($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $context["data"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "vars", array()), "value", array());
        // line 71
        echo "
    ";
        // line 72
        $context["options"] = twig_array_merge((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array()), array())) : (array())), array("route" => "oro_imap_change_account_type", "routeAccessToken" => "oro_imap_gmail_access_token", "routeGetFolders" => "oro_imap_gmail_connection_check", "formSelector" => ("#" . ((        // line 76
array_key_exists("formSelector", $context)) ? (_twig_default_filter(($context["formSelector"] ?? null), $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array())))), "googleErrorMessage" => ".google-alert", "formParentName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 78
($context["form"] ?? null), "parent", array()), "parent", array()), "vars", array()), "name", array()), "type" => twig_constant("Oro\\Bundle\\ImapBundle\\Form\\Model\\AccountTypeModel::ACCOUNT_TYPE_GMAIL"), "organization" => ((((        // line 80
($context["data"] ?? null) && $this->getAttribute(($context["data"] ?? null), "organization", array(), "any", true, true)) && $this->getAttribute(($context["data"] ?? null), "organization", array()))) ? ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "organization", array()), "id", array())) : (null)), "user" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 81
($context["form"] ?? null), "parent", array()), "userEmailOrigin", array()), "user", array()), "vars", array()), "value", array()), "accessToken" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 82
($context["form"] ?? null), "parent", array()), "userEmailOrigin", array()), "accessToken", array()), "vars", array()), "value", array()), "accessTokenExpiresAt" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 83
($context["form"] ?? null), "parent", array()), "userEmailOrigin", array()), "accessTokenExpiresAt", array()), "vars", array()), "value", array()), "id" => ((($this->getAttribute($this->getAttribute(        // line 84
($context["form"] ?? null), "vars", array()), "value", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) : (null))));
        // line 86
        echo "
    <div class=\"container-imap-gmail-container\"
         data-page-component-module=\"oroimap/js/app/components/imap-gmail-component\"
         data-page-component-options=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"
         data-layout=\"separate\"
    >
        <div ";
        // line 92
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 93
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 97
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "userEmailOrigin", array()), "user", array()), "vars", array()), "value", array()))) {
            // line 98
            echo "                <div class=\"control-group\">
                    <div class=\"control-label wrap\">
                        ";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.imap.configuration.reset_email.label"), "html", null, true);
            echo "
                    </div>
                    <div class=\"controls oro-item-collection\">
                        <div style=\"margin-top: 6px\">
                            <strong>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "userEmailOrigin", array()), "user", array()), "vars", array()), "value", array()), "html", null, true);
            echo "</strong>
                            <button title=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.imap.configuration.disconnect.label"), "html", null, true);
            echo "\" class=\"removeRow btn-action btn-link\" type=\"button\" style=\"vertical-align: baseline\">×</button>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 110
        echo "
            ";
        // line 111
        if ($this->getAttribute(($context["form"] ?? null), "check", array(), "any", true, true)) {
            // line 112
            echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "check", array()), 'widget');
            echo "
                    </div>
                </div>
            ";
        }
        // line 118
        echo "
            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"google-alert google-connection-status alert alert-error\" style=\"display: none\"></div>
                </div>
            </div>

            ";
        // line 125
        if ($this->getAttribute(($context["form"] ?? null), "checkFolder", array(), "any", true, true)) {
            // line 126
            echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "checkFolder", array()), 'widget');
            echo "
                    </div>
                </div>
            ";
        }
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 134
        echo "</div>
    </div>
";
    }

    // line 138
    public function block_oro_config_google_imap_sync_checkbox_widget($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        $context["options"] = array("errorMessage" => ".default-alert", "successMessage" => ".alert-success", "googleErrorMessage" => ".google-alert", "googleWarningMessage" => ".alert-warning");
        // line 145
        echo "    <div data-page-component-module=\"oroimap/js/app/components/google-sync-checkbox-component\"
        data-page-component-options=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\" style=\"margin-top: 3px\">
        ";
        // line 147
        $this->displayBlock("checkbox_widget", $context, $blocks);
        echo "
        <div class=\"alert google-connection-status alert-warning\" style=\"display: none\">
            ";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.imap.system_configuration.fields.enable_google_imap.warning.label"), "html", null, true);
        echo "
        </div>
        <div class=\"google-alert google-connection-status alert alert-error\" style=\"display: none\">

        </div>
        <div class=\"default-alert google-connection-status alert alert-error\" style=\"display: none\">
            ";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.imap.system_configuration.fields.enable_google_imap.error.label"), "html", null, true);
        echo "
        </div>
        <div class=\"alert google-connection-status alert-success\" style=\"display: none\">
            ";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.imap.system_configuration.fields.enable_google_imap.success.label"), "html", null, true);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroImapBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  307 => 158,  301 => 155,  292 => 149,  287 => 147,  283 => 146,  280 => 145,  277 => 139,  274 => 138,  268 => 134,  266 => 133,  259 => 128,  255 => 126,  253 => 125,  244 => 118,  237 => 114,  233 => 112,  231 => 111,  228 => 110,  220 => 105,  216 => 104,  209 => 100,  205 => 98,  203 => 97,  200 => 94,  198 => 93,  195 => 92,  189 => 89,  184 => 86,  182 => 84,  181 => 83,  180 => 82,  179 => 81,  178 => 80,  177 => 78,  176 => 76,  175 => 72,  172 => 71,  169 => 70,  166 => 69,  160 => 65,  158 => 64,  152 => 61,  150 => 60,  147 => 59,  141 => 57,  139 => 56,  136 => 53,  134 => 52,  131 => 51,  125 => 48,  120 => 45,  118 => 43,  117 => 42,  116 => 41,  115 => 39,  112 => 38,  109 => 37,  106 => 36,  93 => 26,  89 => 24,  87 => 22,  85 => 19,  83 => 16,  82 => 15,  81 => 14,  80 => 13,  78 => 12,  75 => 11,  72 => 10,  69 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  45 => 1,  40 => 162,  38 => 138,  35 => 137,  33 => 69,  30 => 68,  28 => 36,  25 => 35,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImapBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ImapBundle/Resources/views/Form/fields.html.twig");
    }
}
