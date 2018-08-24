<?php

/* OroNotificationBundle:EmailNotification:update.html.twig */
class __TwigTemplate_b6a6e95e92955795ad6ba8f279d231cd347454930101216db31a9f7facc74857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroNotificationBundle:EmailNotification:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroUserBundle:Form:fields.html.twig", 2 => "OroNotificationBundle:Form:fields.html.twig", 3 => "OroEmailBundle:Form:fields.html.twig"));
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%id%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 9
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))));
        }
        // line 12
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_notification_emailnotification_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_notification_emailnotification_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_navButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_emailnotication", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_notification_emailnotification_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-emailnotification", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.emailnotification.entity_label"))), "method"), "html", null, true);
            // line 26
            echo "
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 29
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_notification_emailnotification_index")), "method"), "html", null, true);
        echo "
    ";
        // line 30
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_notification_emailnotification_index")), "method");
        // line 33
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_notification_emailnotification_create")) {
            // line 34
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_notification_emailnotification_create")), "method"));
            // line 37
            echo "    ";
        }
        // line 38
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_notification_emailnotification_update"))) {
            // line 39
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_notification_emailnotification_update", "params" => array("id" => "\$id"))), "method"));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 47
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 49
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 50
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_notification_emailnotification_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.emailnotification.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.emailnotification.edit_entity", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 53
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))));
            // line 56
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 58
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.emailnotification.entity_label")));
            // line 59
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroNotificationBundle:EmailNotification:update.html.twig", 59)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 60
            echo "    ";
        }
    }

    // line 63
    public function block_content_data($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $context["id"] = "emailnotificaton-edit";
        // line 65
        echo "
    ";
        // line 66
        $context["recipientList"] = array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.emailnotification.recipient_list.label"), "class" => "", "subblocks" => array(0 => array("title" => "", "data" => array(0 => $this->getAttribute(        // line 72
($context["UI"] ?? null), "renderHtmlProperty", array(0 => "", 1 => ("* " . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.form.recipient_list.empty"))), "method"), 1 =>         // line 73
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "recipientList", array()), 'widget')))));
        // line 77
        echo "
    ";
        // line 78
        $context["data"] = array("formErrors" => ((        // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 87
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget'))))), 1 =>         // line 91
($context["recipientList"] ?? null)));
        // line 94
        echo "
    <div data-page-component-module=\"oronotification/js/app/components/email-notification-form-component\"
         data-page-component-options=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("selectors" => array("form" => ("#" . $this->getAttribute($this->getAttribute(        // line 98
($context["form"] ?? null), "vars", array()), "id", array())), "listenChangeElements" => $this->getAttribute($this->getAttribute(        // line 99
($context["form"] ?? null), "vars", array()), "listenChangeElements", array())))), "html", null, true);
        // line 101
        echo "\"
    >
        ";
        // line 103
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    // line 107
    public function block_content($context, array $blocks = array())
    {
        // line 108
        echo "    <div data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oronotification/js/app/views/email-notification-form-view")), "html", null, true);
        // line 111
        echo "\">
        ";
        // line 112
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroNotificationBundle:EmailNotification:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 112,  170 => 111,  168 => 109,  165 => 108,  162 => 107,  155 => 103,  151 => 101,  149 => 99,  148 => 98,  147 => 96,  143 => 94,  141 => 91,  140 => 87,  139 => 79,  138 => 78,  135 => 77,  133 => 73,  132 => 72,  131 => 66,  128 => 65,  125 => 64,  122 => 63,  117 => 60,  114 => 59,  111 => 58,  105 => 56,  103 => 53,  102 => 50,  100 => 49,  97 => 48,  94 => 47,  87 => 44,  84 => 43,  81 => 39,  78 => 38,  75 => 37,  72 => 34,  69 => 33,  67 => 30,  62 => 29,  57 => 27,  54 => 26,  52 => 24,  51 => 20,  49 => 19,  46 => 18,  43 => 17,  39 => 1,  37 => 13,  36 => 12,  33 => 9,  30 => 8,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNotificationBundle:EmailNotification:update.html.twig", "");
    }
}
