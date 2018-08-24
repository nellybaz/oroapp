<?php

/* OroEmailBundle:Email:userEmails.html.twig */
class __TwigTemplate_a4e25515a7aa9adee540647b95c1761a6a9460c1d025db0aed90229bd0b05c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroEmailBundle:Email:userEmails.html.twig", 1);
        $this->blocks = array(
            'content_datagrid' => array($this, 'block_content_datagrid'),
            'navButtons' => array($this, 'block_navButtons'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["EmailActions"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroEmailBundle:Email:userEmails.html.twig", 2);
        // line 4
        $context["name"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["app"] ?? null), "user", array())), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 5
($context["name"] ?? null))));
        // line 8
        $context["params"] = array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()));
        // line 9
        $context["gridName"] = "user-email-grid";
        // line 10
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 11
            $context["renderParams"] = array("themeOptions" => array("tagName" => "div", "headerHide" => true, "showMassActionOnToolbar" => true, "bodyClassName" => "user-emails-grid", "rowTemplateSelector" => "#template-user-email-grid-row"), "toolbarOptions" => array("placement" => array("bottom" => true)));
        }
        // line 52
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_content_datagrid($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $this->displayParentBlock("content_datagrid", $context, $blocks);
        echo "
    <script id=\"template-user-email-grid-row\" type=\"text/template\">
        <div class=\"user-emails-row\">
            <div class=\"user-emails-row__top clearfix\">
                <div class=\"user-emails-row__select-row\">
                    <input type=\"checkbox\" data-role=\"select-row\">
                </div>
                <div class=\"user-emails-row__contacts\">
                    <%= model.contacts %>
                </div>
                <div class=\"user-emails-row__date\">
                    <%= model.sentAt %>
                </div>
                <div class=\"user-emails-row__attachments\">
                    <%= model.attachments %>
                </div>
            </div>
            <div class=\"user-emails-row__subject\">
                <%= model.subject %>
            </div>
        </div>
    </script>
    ";
    }

    // line 54
    public function block_navButtons($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
            // line 56
            echo "        <div class=\"btn-group\">
            ";
            // line 57
            echo $context["EmailActions"]->getcreateEmailButton(array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(            // line 58
($context["app"] ?? null), "user", array()), true), "entityId" => $this->getAttribute($this->getAttribute(            // line 59
($context["app"] ?? null), "user", array()), "id", array())));
            // line 60
            echo "
        </div>
    ";
        }
        // line 64
        $context["actionSync"] = ((("<i class=\"fa-refresh hide-text\">" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.action.sync")) . "</i>") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.action.sync"));
        // line 70
        $context["actionProcessing"] = (((("<i class=\"fa-refresh hide-text\">" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.action.processing")) . "</i>") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.action.processing")) . "&nbsp;<span class=\"loading-dots\"></span>");
        // line 77
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email:userEmails.html.twig", 77);
        // line 78
        echo "
    <div class=\"btn-group\" ";
        // line 79
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroemail/js/app/views/email-sync-view", "options" => array("syncPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_user_sync_emails"), "processingMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.action.message.processing"), "errorHandlerMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.action.message.error"), "actionProcessing" =>         // line 85
($context["actionProcessing"] ?? null), "actionSync" =>         // line 86
($context["actionSync"] ?? null))));
        // line 88
        echo ">
        <a type=\"button\" class=\"btn sync-btn icons-holder-text no-hash\" href=\"javascript: void(0);\" data-role=\"sync\">
            ";
        // line 90
        echo ($context["actionSync"] ?? null);
        echo "
        </a>
    </div>
";
    }

    // line 95
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.menu.user_emails")));
        // line 99
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroEmailBundle:Email:userEmails.html.twig", 99)->display($context);
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:userEmails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 99,  127 => 96,  124 => 95,  116 => 90,  112 => 88,  110 => 86,  109 => 85,  108 => 79,  105 => 78,  102 => 77,  100 => 70,  98 => 64,  93 => 60,  91 => 59,  90 => 58,  89 => 57,  86 => 56,  83 => 55,  80 => 54,  52 => 27,  49 => 26,  45 => 1,  43 => 52,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email:userEmails.html.twig", "");
    }
}
