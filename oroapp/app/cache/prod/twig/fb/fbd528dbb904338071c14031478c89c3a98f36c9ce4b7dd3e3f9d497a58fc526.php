<?php

/* OroEmailBundle:Form:fields.html.twig */
class __TwigTemplate_663212b94fd9674a28300eedae2aa88ac024f41b0258e99d68a507d40ffe8d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_email_configuration_oro_email___smtp_settings_password_value_widget' => array($this, 'block__email_configuration_oro_email___smtp_settings_password_value_widget'),
            '_email_configuration_oro_email___attachment_sync_max_size_value_widget' => array($this, 'block__email_configuration_oro_email___attachment_sync_max_size_value_widget'),
            '_oro_email_autoresponserule_template_new_entity_translations_widget' => array($this, 'block__oro_email_autoresponserule_template_new_entity_translations_widget'),
            'oro_email_template_list_row' => array($this, 'block_oro_email_template_list_row'),
            'oro_email_link_to_scope_row' => array($this, 'block_oro_email_link_to_scope_row'),
            'oro_email_attachments_row' => array($this, 'block_oro_email_attachments_row'),
            'oro_email_emailtemplate_translatation_widget' => array($this, 'block_oro_email_emailtemplate_translatation_widget'),
            'oro_email_email_folder_tree_row' => array($this, 'block_oro_email_email_folder_tree_row'),
            'oro_email_email_folder_tree_widget' => array($this, 'block_oro_email_email_folder_tree_widget'),
            'oro_email_mailbox_grid_row' => array($this, 'block_oro_email_mailbox_grid_row'),
            'oro_email_mailbox_grid_label' => array($this, 'block_oro_email_mailbox_grid_label'),
            'oro_email_mailbox_grid_widget' => array($this, 'block_oro_email_mailbox_grid_widget'),
            'oro_email_mailbox_widget' => array($this, 'block_oro_email_mailbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_email_configuration_oro_email___smtp_settings_password_value_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('_email_configuration_oro_email___attachment_sync_max_size_value_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('_oro_email_autoresponserule_template_new_entity_translations_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('oro_email_template_list_row', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('oro_email_link_to_scope_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('oro_email_attachments_row', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('oro_email_emailtemplate_translatation_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('oro_email_email_folder_tree_row', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('oro_email_email_folder_tree_widget', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('oro_email_mailbox_grid_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('oro_email_mailbox_grid_label', $context, $blocks);
        // line 223
        echo "
";
        // line 224
        $this->displayBlock('oro_email_mailbox_grid_widget', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('oro_email_mailbox_widget', $context, $blocks);
        // line 292
        echo "
";
        // line 309
        echo "
";
        // line 322
        echo "
";
    }

    // line 1
    public function block__email_configuration_oro_email___smtp_settings_password_value_widget($context, array $blocks = array())
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
        $context["options"] = twig_array_merge((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array()), array())) : (array())), array("elementNamePrototype" =>         // line 8
($context["full_name"] ?? null), "id" => ((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()), "id", array())) : (null)), "forEntity" => "user", "organization" => ((((        // line 11
($context["data"] ?? null) && $this->getAttribute(($context["data"] ?? null), "organization", array(), "any", true, true)) && $this->getAttribute(($context["data"] ?? null), "organization", array()))) ? ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "organization", array()), "id", array())) : (null)), "parentElementSelector" => "fieldset", "showLoading" => true));
        // line 15
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_config_system")) {
            // line 17
            echo "        <span class=\"help-block\">
            <button class=\"btn btn-primary check-connection-messages\"
               data-role=\"check-smtp-connection\"
               data-page-component-module=\"";
            // line 20
            echo "oroemail/js/app/components/check-smtp-connection-component";
            echo "\"
               data-page-component-options=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
            echo "\"
            >";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.system_configuration.smtp_settings.check_connection.label"), "html", null, true);
            echo "</button>
        </span>
    <div class=\"check-connection-messages check-smtp-connection-messages\"></div>
    ";
        }
    }

    // line 28
    public function block__email_configuration_oro_email___attachment_sync_max_size_value_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_config_system")) {
            // line 31
            echo "    <span class=\"help-block\">
        <a class=\"btn btn-danger\"
           href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_purge_emails_attachments");
            echo "\"
           data-page-component-module=\"";
            // line 34
            echo "oroui/js/app/components/hidden-redirect-component";
            echo "\"
           data-page-component-options=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("showLoading" => true)), "html", null, true);
            echo "\"
        >";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.system_configuration.attachment_configuration.remove_larger_attachments.label"), "html", null, true);
            echo "</a>
    </span>
    ";
        }
    }

    // line 41
    public function block__oro_email_autoresponserule_template_new_entity_translations_widget($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 42);
        // line 43
        echo "    ";
        $context["entityNameForm"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "entityName", array());
        // line 44
        echo "
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        // line 46
        echo $context["email"]->getrenderAvailableVariablesWidget($this->getAttribute($this->getAttribute(($context["entityNameForm"] ?? null), "vars", array()), "value", array()), $this->getAttribute($this->getAttribute(($context["entityNameForm"] ?? null), "vars", array()), "id", array()));
        echo "
";
    }

    // line 49
    public function block_oro_email_template_list_row($context, array $blocks = array())
    {
        // line 50
        echo "    <script type=\"text/template\" id=\"emailtemplate-chooser-template\">
        <% _.each(entities, function(entity, i) { %>
        <option value=\"<%- entity.get('id') %>\"><%- entity.get('name') %></option>
        <% }); %>
    </script>

    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "

    ";
        // line 58
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 58);
        // line 59
        echo "
    ";
        // line 60
        $context["options"] = array("targetSelector" => ("#" .         // line 61
($context["id"] ?? null)), "_sourceElement" => (("[name\$=\"[" .         // line 62
($context["depends_on_parent_field"] ?? null)) . "]\"]"), "collectionOptions" => array("route" =>         // line 64
($context["data_route"] ?? null), "routeId" =>         // line 65
($context["data_route_parameter"] ?? null), "includeNonEntity" => (((        // line 66
array_key_exists("includeNonEntity", $context) && ($context["includeNonEntity"] ?? null))) ? (true) : (false)), "includeSystemTemplates" => (((        // line 67
array_key_exists("includeSystemTemplates", $context) &&  !($context["includeSystemTemplates"] ?? null))) ? (false) : (true))));
        // line 70
        echo "
    <div ";
        // line 71
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroemail/js/app/views/email-template-view", "options" =>         // line 73
($context["options"] ?? null)));
        // line 74
        echo "></div>
";
    }

    // line 77
    public function block_oro_email_link_to_scope_row($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 78);
        // line 79
        echo "
    ";
        // line 80
        $context["options"] = array("enableAttachmentSelector" => "[data-ftid=oro_entity_config_type_attachment_enabled]", "_sourceElement" => ("#" . $this->getAttribute($this->getAttribute(        // line 82
($context["form"] ?? null), "vars", array()), "id", array())));
        // line 84
        echo "
    ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "

    <div ";
        // line 87
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroemail/js/app/views/email-attachment-context-view", "options" =>         // line 89
($context["options"] ?? null)));
        // line 90
        echo "></div>
";
    }

    // line 93
    public function block_oro_email_attachments_row($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        $context["entityAttachmentsArray"] = array();
        // line 95
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["options"] ?? null), "entityAttachments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 96
            echo "        ";
            $context["entityAttachmentArray"] = array("id" => $this->getAttribute(            // line 97
$context["attachment"], "id", array()), "type" => $this->getAttribute(            // line 98
$context["attachment"], "type", array()), "fileName" => $this->getAttribute(            // line 99
$context["attachment"], "fileName", array()), "icon" => $this->getAttribute(            // line 100
$context["attachment"], "icon", array()));
            // line 102
            echo "        ";
            $context["entityAttachmentsArray"] = twig_array_merge(($context["entityAttachmentsArray"] ?? null), array(0 => ($context["entityAttachmentArray"] ?? null)));
            // line 103
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
    ";
        // line 105
        $context["attachmentsAvailableArray"] = array();
        // line 106
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["options"] ?? null), "attachmentsAvailable", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 107
            echo "        ";
            $context["attachmentAvailableArray"] = array("id" => $this->getAttribute(            // line 108
$context["attachment"], "id", array()), "type" => $this->getAttribute(            // line 109
$context["attachment"], "type", array()), "fileName" => $this->getAttribute(            // line 110
$context["attachment"], "fileName", array()), "fileSize" => $this->getAttribute(            // line 111
$context["attachment"], "fileSize", array()), "modified" => $this->getAttribute(            // line 112
$context["attachment"], "modified", array()), "icon" => $this->getAttribute(            // line 113
$context["attachment"], "icon", array()), "preview" => $this->getAttribute(            // line 114
$context["attachment"], "preview", array()));
            // line 116
            echo "        ";
            $context["attachmentsAvailableArray"] = twig_array_merge(($context["attachmentsAvailableArray"] ?? null), array(0 => ($context["attachmentAvailableArray"] ?? null)));
            // line 117
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
    ";
        // line 119
        $context["options"] = twig_array_merge(($context["options"] ?? null), array("containerId" =>         // line 120
($context["id"] ?? null), "inputName" =>         // line 121
($context["full_name"] ?? null), "entityAttachments" =>         // line 122
($context["entityAttachmentsArray"] ?? null), "attachmentsAvailable" =>         // line 123
($context["attachmentsAvailableArray"] ?? null), "fileIcons" => $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileIconsConfig()));
        // line 126
        echo "
    <div data-page-component-module=\"oroemail/js/app/components/email-attachment-component\"
         data-page-component-options=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </div>
";
    }

    // line 133
    public function block_oro_email_emailtemplate_translatation_widget($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 134);
        // line 135
        echo "    <div class=\"emailtemplate-translatation oro-tabs tabbable\" ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroemail/js/app/views/email-translation-view"));
        // line 137
        echo ">
        <ul class=\"nav nav-tabs\">
            ";
        // line 139
        ob_start();
        // line 140
        echo "                ";
        if (($context["simple_way"] ?? null)) {
            // line 141
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                // line 142
                echo "                        ";
                echo $this->getAttribute($this, "renderTabNavItem", array(0 => $context["translationsField"], 1 => ($context["labels"] ?? null)), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                ";
        } else {
            // line 145
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 146
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    // line 147
                    echo "                            ";
                    echo $this->getAttribute($this, "renderTabNavItem", array(0 => $context["translationsField"], 1 => ($context["labels"] ?? null), 2 => ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()))), "method");
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                ";
        }
        // line 151
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 152
        echo "        </ul>
        <div class=\"tab-content\">
            ";
        // line 154
        ob_start();
        // line 155
        echo "                ";
        if (($context["simple_way"] ?? null)) {
            // line 156
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                // line 157
                echo "                        ";
                echo $this->getAttribute($this, "renderTab", array(0 => $context["translationsField"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                ";
        } else {
            // line 160
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 161
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    // line 162
                    echo "                            ";
                    echo $this->getAttribute($this, "renderTab", array(0 => $context["translationsField"]), "method");
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                ";
        }
        // line 166
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 167
        echo "        </div>
    </div>
";
    }

    // line 171
    public function block_oro_email_email_folder_tree_row($context, array $blocks = array())
    {
        // line 172
        echo "    ";
        if (( !(null === $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())) > 0))) {
            // line 173
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
            echo "
    ";
        }
    }

    // line 177
    public function block_oro_email_email_folder_tree_widget($context, array $blocks = array())
    {
        // line 178
        echo "    ";
        $context["options"] = array("dataInputSelector" => (("input[name=\"" .         // line 179
($context["full_name"] ?? null)) . "\"]"), "checkAllSelector" => ".check-all", "relatedCheckboxesSelector" => ".folder-list :checkbox");
        // line 183
        echo "    <div class=\"folder-tree-widget\"
         data-page-component-module=\"oroemail/js/app/components/folder-tree-component\"
         data-page-component-options=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
        <label class=\"folder-label\">
            <input class=\"check-all\" type=\"checkbox\">
            ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.imap.folder.checkAll"), "html", null, true);
        echo "
        </label>
        <div class=\"folder-list\">
            ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()));
        foreach ($context['_seq'] as $context["key"] => $context["folder"]) {
            if (((null === $this->getAttribute($context["folder"], "parentFolder", array())) && (null === $this->getAttribute($context["folder"], "outdatedAt", array())))) {
                // line 192
                echo "                ";
                echo $this->getAttribute($this, "renderFolder", array(0 => $context["key"], 1 => $context["folder"], 2 => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array())), "method");
                echo "
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "        </div>
        <input name=\"";
        // line 195
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" type=\"hidden\">
    </div>
";
    }

    // line 199
    public function block_oro_email_mailbox_grid_row($context, array $blocks = array())
    {
        // line 200
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
    ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    // line 204
    public function block_oro_email_mailbox_grid_label($context, array $blocks = array())
    {
        // line 205
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 205);
        // line 206
        echo "    ";
        $context["redirectData"] = array("route" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 207
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "parameters" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 208
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 210
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_organization_update")) {
            // line 211
            echo "        <div class=\"row\" style=\"margin-top: -42px;\">
            <div class=\"pull-right\">
                <div class=\"btn-group\">
                    ";
            // line 214
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_mailbox_create", array("redirectData" =>             // line 215
($context["redirectData"] ?? null))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.system_configuration.mailbox_configuration.add_mailbox.label")));
            // line 217
            echo "
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 224
    public function block_oro_email_mailbox_grid_widget($context, array $blocks = array())
    {
        // line 225
        echo "    ";
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 225);
        // line 226
        echo "    ";
        $context["redirectData"] = array("route" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 227
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "parameters" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 228
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 230
        echo "    <div class=\"row\" style=\"margin-right: -20px;\">
        ";
        // line 231
        echo $context["dataGrid"]->getrenderGrid("base-mailboxes-grid", array("redirectData" =>         // line 232
($context["redirectData"] ?? null), "organization_ids" => array(0 => $this->getAttribute($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->getCurrentOrganization(), "getId", array(), "method"))));
        // line 233
        echo "
    </div>
";
    }

    // line 237
    public function block_oro_email_mailbox_widget($context, array $blocks = array())
    {
        // line 238
        echo "    ";
        ob_start();
        // line 239
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), "origin", array(), "any", true, true)) {
            // line 240
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "origin", array()), 'widget');
            echo "
            ";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "origin", array()), 'errors');
            echo "
        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 242
($context["form"] ?? null), "children", array(), "any", false, true), "imapAccountType", array(), "any", true, true)) {
            // line 243
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "imapAccountType", array()), 'widget');
            echo "
            ";
            // line 244
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "imapAccountType", array()), 'errors');
            echo "
        ";
        }
        // line 246
        echo "    ";
        $context["imapAccountType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 247
        echo "
    ";
        // line 248
        $context["process"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "processType", array()), 'row') .         // line 249
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "processSettings", array()), 'widget'));
        // line 250
        echo "    ";
        $context["access"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "authorizedUsers", array()), 'row') .         // line 251
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "authorizedRoles", array()), 'row'));
        // line 253
        echo "    ";
        $context["options"] = array("el" => ("#" . $this->getAttribute($this->getAttribute(        // line 254
($context["form"] ?? null), "vars", array()), "id", array())));
        // line 256
        echo "    <div data-page-component-module=\"oroemail/js/app/views/mailbox-update-view\"
         data-page-component-options=\"";
        // line 257
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.mailbox.general.label"), "html", null, true);
        echo "</span>
            </h5>
            <div class=\"control-group-wrapper\">
                ";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.mailbox.origin.label"), "html", null, true);
        echo "</span>
            </h5>
            <div class=\"control-group-wrapper\">
                ";
        // line 271
        echo ($context["imapAccountType"] ?? null);
        echo "
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.mailbox.process.label"), "html", null, true);
        echo "</span>
            </h5>
            <div class=\"control-group-wrapper\">
                ";
        // line 279
        echo ($context["process"] ?? null);
        echo "
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.mailbox.access.label"), "html", null, true);
        echo "</span>
            </h5>
            <div class=\"control-group-wrapper\">
                ";
        // line 287
        echo ($context["access"] ?? null);
        echo "
            </div>
        </fieldset>
    </div>
";
    }

    // line 300
    public function getrenderTabNavItem($__form__ = null, $__localeLabels__ = null, $__isDefault__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "localeLabels" => $__localeLabels__,
            "isDefault" => $__isDefault__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 301
            echo "    ";
            $context["locale"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array());
            // line 302
            echo "
    <li ";
            // line 303
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"javascript:void(0);\" data-role=\"change-language\" data-target=\".emailtemplate-translatation-fields-";
            // line 304
            echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" data-related=\"";
            echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
            echo "\">";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["localeLabels"] ?? null), ($context["locale"] ?? null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["localeLabels"] ?? null), ($context["locale"] ?? null), array(), "array"), "N/A")) : ("N/A"))), "html", null, true);
            if (($context["isDefault"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("[Default]", array(), "messages");
            }
            // line 306
            echo "</a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 315
    public function getrenderTab($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 316
            echo "    ";
            $context["locale"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array());
            // line 317
            echo "
    <div class=\"emailtemplate-translatation-fields-";
            // line 318
            echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
            echo " tab-pane";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                echo " active";
            }
            echo "\">
        ";
            // line 319
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 323
    public function getrenderFolder($__key__ = null, $__folder__ = null, $__namePrefix__ = null, $__maxDepth__ = 10, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "folder" => $__folder__,
            "namePrefix" => $__namePrefix__,
            "maxDepth" => $__maxDepth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 324
            echo "    ";
            if (($context["maxDepth"] ?? null)) {
                // line 325
                echo "        <div>
            <label class=\"folder-label\">
                <input type=\"checkbox\" data-name=\"syncEnabled\"";
                // line 327
                if ($this->getAttribute(($context["folder"] ?? null), "syncEnabled", array())) {
                    echo "checked=\"checked\"";
                }
                echo ">
                ";
                // line 328
                echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "name", array()), "html", null, true);
                echo "
            </label>
            <input type=\"hidden\" data-name=\"fullName\" value=\"";
                // line 330
                echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "fullName", array()), "html", null, true);
                echo "\">
            <input type=\"hidden\" data-name=\"name\" value=\"";
                // line 331
                echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "name", array()), "html", null, true);
                echo "\">
            <input type=\"hidden\" data-name=\"type\" value=\"";
                // line 332
                echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "type", array()), "html", null, true);
                echo "\">
            ";
                // line 333
                if (((($context["maxDepth"] ?? null) > 1) && (twig_length_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "subFolders", array())) > 0))) {
                    // line 334
                    echo "                <div class=\"folder-sub-folders\">
                    ";
                    // line 335
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["folder"] ?? null), "subFolders", array()));
                    foreach ($context['_seq'] as $context["subKey"] => $context["subFolder"]) {
                        // line 336
                        echo "                        ";
                        echo $this->getAttribute($this, "renderFolder", array(0 => $context["subKey"], 1 => $context["subFolder"], 2 => (((($context["namePrefix"] ?? null) . "[") . ($context["key"] ?? null)) . "][subFolders]"), 3 => (($context["maxDepth"] ?? null) - 1)), "method");
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subKey'], $context['subFolder'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 338
                    echo "                </div>
            ";
                }
                // line 340
                echo "        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  899 => 340,  895 => 338,  886 => 336,  882 => 335,  879 => 334,  877 => 333,  873 => 332,  869 => 331,  865 => 330,  860 => 328,  854 => 327,  850 => 325,  847 => 324,  832 => 323,  814 => 319,  806 => 318,  803 => 317,  800 => 316,  788 => 315,  771 => 306,  765 => 305,  760 => 304,  754 => 303,  751 => 302,  748 => 301,  734 => 300,  725 => 287,  719 => 284,  711 => 279,  705 => 276,  697 => 271,  691 => 268,  683 => 263,  677 => 260,  671 => 257,  668 => 256,  666 => 254,  664 => 253,  662 => 251,  660 => 250,  658 => 249,  657 => 248,  654 => 247,  651 => 246,  646 => 244,  641 => 243,  639 => 242,  635 => 241,  630 => 240,  627 => 239,  624 => 238,  621 => 237,  615 => 233,  613 => 232,  612 => 231,  609 => 230,  607 => 228,  606 => 227,  604 => 226,  601 => 225,  598 => 224,  589 => 217,  587 => 215,  586 => 214,  581 => 211,  578 => 210,  576 => 208,  575 => 207,  573 => 206,  570 => 205,  567 => 204,  561 => 201,  556 => 200,  553 => 199,  546 => 195,  543 => 194,  533 => 192,  528 => 191,  522 => 188,  516 => 185,  512 => 183,  510 => 179,  508 => 178,  505 => 177,  497 => 173,  494 => 172,  491 => 171,  485 => 167,  482 => 166,  479 => 165,  473 => 164,  464 => 162,  459 => 161,  454 => 160,  451 => 159,  442 => 157,  437 => 156,  434 => 155,  432 => 154,  428 => 152,  425 => 151,  422 => 150,  416 => 149,  407 => 147,  402 => 146,  397 => 145,  394 => 144,  385 => 142,  380 => 141,  377 => 140,  375 => 139,  371 => 137,  368 => 135,  365 => 134,  362 => 133,  355 => 129,  351 => 128,  347 => 126,  345 => 123,  344 => 122,  343 => 121,  342 => 120,  341 => 119,  338 => 118,  332 => 117,  329 => 116,  327 => 114,  326 => 113,  325 => 112,  324 => 111,  323 => 110,  322 => 109,  321 => 108,  319 => 107,  314 => 106,  312 => 105,  309 => 104,  303 => 103,  300 => 102,  298 => 100,  297 => 99,  296 => 98,  295 => 97,  293 => 96,  288 => 95,  285 => 94,  282 => 93,  277 => 90,  275 => 89,  274 => 87,  269 => 85,  266 => 84,  264 => 82,  263 => 80,  260 => 79,  257 => 78,  254 => 77,  249 => 74,  247 => 73,  246 => 71,  243 => 70,  241 => 67,  240 => 66,  239 => 65,  238 => 64,  237 => 62,  236 => 61,  235 => 60,  232 => 59,  230 => 58,  225 => 56,  217 => 50,  214 => 49,  208 => 46,  204 => 45,  201 => 44,  198 => 43,  195 => 42,  192 => 41,  184 => 36,  180 => 35,  176 => 34,  172 => 33,  168 => 31,  166 => 30,  161 => 29,  158 => 28,  149 => 22,  145 => 21,  141 => 20,  136 => 17,  134 => 16,  129 => 15,  127 => 11,  126 => 9,  125 => 8,  123 => 7,  120 => 6,  117 => 5,  114 => 4,  111 => 3,  108 => 2,  105 => 1,  100 => 322,  97 => 309,  94 => 292,  92 => 237,  89 => 236,  87 => 224,  84 => 223,  82 => 204,  79 => 203,  77 => 199,  74 => 198,  72 => 177,  69 => 176,  67 => 171,  64 => 170,  62 => 133,  59 => 132,  57 => 93,  54 => 92,  52 => 77,  49 => 76,  47 => 49,  44 => 48,  42 => 41,  39 => 40,  37 => 28,  34 => 27,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Form/fields.html.twig");
    }
}
