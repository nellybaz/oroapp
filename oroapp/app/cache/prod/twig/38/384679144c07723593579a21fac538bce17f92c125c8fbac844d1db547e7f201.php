<?php

/* OroCaseBundle:Comment/widget:comments.html.twig */
class __TwigTemplate_5c6e937297643fbbecd31659d4c2af5910c8b77234b061323094912611abd82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNoteBundle:Note/widget:notes.html.twig", "OroCaseBundle:Comment/widget:comments.html.twig", 1);
        $this->blocks = array(
            'items_container' => array($this, 'block_items_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNoteBundle:Note/widget:notes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCaseBundle:Comment/widget:comments.html.twig", 2);
        // line 4
        $context["containerExtraClass"] = "comments";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_items_container($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["options"] = array("widgetId" => $this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "notesOptions" => array("template" => "#template-comment-list", "itemTemplate" => "#template-comment-item", "itemAddEvent" => "comment:add", "itemViewIdPrefix" => "comment-", "itemView" => "orocase/js/app/views/comment-view", "itemModel" => "orocase/js/app/models/comment-model", "messages" => array("addDialogTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.dialog.add"), "editDialogTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.dialog.edit"), "itemSaved" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.message.saved"), "itemRemoved" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.message.removed"), "deleteConfirmation" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.message.delete_confirmation"), "loadItemsError" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.error.load"), "deleteItemError" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.error.delete")), "urls" => array("list" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_comment_list", array("id" => $this->getAttribute(        // line 26
($context["case"] ?? null), "id", array()))), "createItem" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_comment_create", array("caseId" => $this->getAttribute(        // line 27
($context["case"] ?? null), "id", array())))), "routes" => array("update" => "oro_case_comment_update", "delete" => "oro_case_api_delete_comment")), "notesData" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_comment_list", array("id" => $this->getAttribute(        // line 34
($context["case"] ?? null), "id", array())))));
        // line 36
        echo "    <div class=\"accordion\" id=\"comment-list\"
         data-page-component-module=\"oronote/js/app/components/notes-component\"
         data-page-component-options=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"></div>

    ";
        // line 40
        $this->loadTemplate("OroCaseBundle:Comment:js/list.html.twig", "OroCaseBundle:Comment/widget:comments.html.twig", 40)->display(array_merge($context, array("id" => "template-comment-list")));
        // line 41
        echo "    ";
        $this->loadTemplate("OroCaseBundle:Comment:js/view.html.twig", "OroCaseBundle:Comment/widget:comments.html.twig", 41)->display(array_merge($context, array("id" => "template-comment-item")));
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Comment/widget:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 41,  52 => 40,  47 => 38,  43 => 36,  41 => 34,  40 => 27,  39 => 26,  38 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Comment/widget:comments.html.twig", "");
    }
}
