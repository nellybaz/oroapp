<?php

/* OroEmailBundle:Configuration/Mailbox:update.html.twig */
class __TwigTemplate_d72052bc998bd1a39355dffdf177259004594d9a54404714db228247841b2f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroConfigBundle::configPage.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["emailUI"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 3);
        // line 4
        $context["configUI"] = $this->loadTemplate("OroConfigBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 4);
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "data", array()), "id", array())) {
            // line 7
            $context["mailboxTitle"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "data", array()), "label", array());
        } else {
            // line 9
            $context["mailboxTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.mailbox.action.new");
        }
        // line 12
        $context["pageTitle"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_config_configuration_system"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.config.menu.system_configuration.label")), 1 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_config_configuration_system", array("activeGroup" => "platform", "activeSubGroup" => "email_configuration")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.system_configuration.email_configuration")), 2 =>         // line 24
($context["mailboxTitle"] ?? null));
        // line 27
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("redirectData" => ($context["redirectData"] ?? null))));
        // line 32
        $context["routeName"] = "oro_config_configuration_system";
        // line 33
        $context["routeParameters"] = array();
        // line 35
        $context["syncMacro"] = $this->loadTemplate("OroSyncBundle:Include:contentTags.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 35);
        // line 36
        $context["configUI"] = $this->loadTemplate("OroConfigBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 36);
        // line 37
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 37);
        // line 39
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroLocaleBundle:Form:fields.html.twig"));
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%label%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 42
($context["form"] ?? null), "vars", array()), "value", array()), "label", array()))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.config.menu.system_configuration.label")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.system_configuration.email_configuration")));
        // line 50
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 50)->display($context);
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $context["buttons"] = "";
        // line 55
        echo "    ";
        $context["html"] = "";
        // line 56
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 57
            echo "        ";
            $context["buttons"] = (($context["buttons"] ?? null) . $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_mailbox_delete", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 58
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_config_configuration_system", array("activeGroup" => "platform", "activeSubGroup" => "email_configuration")), "aCss" => "no-hash remove-button", "id" => "btn-remove-mailbox", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 65
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.mailbox.entity_label"))));
            // line 68
            echo "        ";
            $context["buttons"] = (($context["buttons"] ?? null) . $context["UI"]->getbuttonSeparator());
            // line 69
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndStayButton());
            // line 70
            echo "    ";
        }
        // line 71
        echo "
    ";
        // line 72
        $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndCloseButton());
        // line 73
        echo "    ";
        $context["buttons"] = (($context["buttons"] ?? null) . $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null))));
        // line 74
        echo "
    ";
        // line 75
        $context["options"] = array("view" => "oroconfig/js/form/config-form");
        // line 78
        echo "
    <form
        id=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
        ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo "
        action=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
        echo "\"
        method=\"post\"
        data-collect=\"true\"
        data-page-component-view=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"
    >
        ";
        // line 88
        ob_start();
        // line 89
        echo "            ";
        $context["mailboxId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array());
        // line 90
        echo "            <fieldset class=\"form-horizontal form-horizontal-large auto-response-rules\">
                <div class=\"auto-response-rule-header\">
                    <h5>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.autoresponserule.entity_plural_label"), "html", null, true);
        echo "</h5>
                    ";
        // line 93
        echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_autoresponserule_create", array("mailbox" =>         // line 94
($context["mailboxId"] ?? null))), "aCss" => "pull-right no-hash btn btn-primary", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.autoresponserule.action.add.label"), "widget" => array("type" => "dialog", "multiple" => false, "reload-grid-name" => "email-auto-response-rules", "options" => array("alias" => "auto-response-rules-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.autoresponserule.action.add.title"), "allowMaximize" => false, "allowMinimize" => false, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
        // line 114
        echo "
                </div>
                ";
        // line 116
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 116);
        // line 117
        echo "                ";
        echo $context["dataGrid"]->getrenderGrid("email-auto-response-rules", array("mailbox" => ($context["mailboxId"] ?? null)));
        echo "
            </fieldset>
        ";
        $context["autoResponseRules"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 120
        echo "        ";
        echo $context["emailUI"]->getrenderMailboxConfigTitleAndButtons(($context["pageTitle"] ?? null), ($context["buttons"] ?? null));
        echo "
        ";
        // line 121
        echo $context["configUI"]->getrenderConfigurationScrollData(array("configTree" =>         // line 122
($context["data"] ?? null), "form" =>         // line 123
($context["form"] ?? null), "content" => array("dataBlocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.system_configuration.mailbox_configuration.label"), "subblocks" => array(0 =>         // line 128
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form'), 1 =>         // line 129
($context["autoResponseRules"] ?? null))))), "activeTabName" =>         // line 133
($context["activeGroup"] ?? null), "activeSubTabName" =>         // line 134
($context["activeSubGroup"] ?? null), "routeName" =>         // line 135
($context["routeName"] ?? null), "routeParameters" =>         // line 136
($context["routeParameters"] ?? null)));
        // line 137
        echo "
    </form>
    ";
        // line 139
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    ";
        // line 140
        echo $context["syncMacro"]->getsyncContentTags(array("name" => "system_configuration", "params" => array(0 => ($context["activeGroup"] ?? null), 1 => ($context["activeSubGroup"] ?? null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Configuration/Mailbox:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 140,  192 => 139,  188 => 137,  186 => 136,  185 => 135,  184 => 134,  183 => 133,  182 => 129,  181 => 128,  180 => 123,  179 => 122,  178 => 121,  173 => 120,  166 => 117,  164 => 116,  160 => 114,  158 => 94,  157 => 93,  153 => 92,  149 => 90,  146 => 89,  144 => 88,  139 => 86,  133 => 83,  129 => 82,  125 => 81,  121 => 80,  117 => 78,  115 => 75,  112 => 74,  109 => 73,  107 => 72,  104 => 71,  101 => 70,  98 => 69,  95 => 68,  93 => 65,  92 => 58,  90 => 57,  87 => 56,  84 => 55,  81 => 54,  78 => 53,  73 => 50,  70 => 46,  67 => 45,  63 => 1,  60 => 42,  57 => 41,  55 => 39,  53 => 37,  51 => 36,  49 => 35,  47 => 33,  45 => 32,  43 => 29,  42 => 28,  41 => 27,  39 => 24,  38 => 12,  35 => 9,  32 => 7,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Configuration/Mailbox:update.html.twig", "");
    }
}
