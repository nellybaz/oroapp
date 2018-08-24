<?php

/* OroNoteBundle:Note/widget:notes.html.twig */
class __TwigTemplate_d25f03396be4e77b0d5cf322997ced4aaf45729e7dbeaed3bbb99d13879e4611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget_content' => array($this, 'block_widget_content'),
            'widget_actions' => array($this, 'block_widget_actions'),
            'items_container' => array($this, 'block_items_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNoteBundle:Note/widget:notes.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["containerExtraClass"] = ((array_key_exists("containerExtraClass", $context)) ? (($context["containerExtraClass"] ?? null)) : (""));
        // line 4
        echo "
<div class=\"widget-content notes ";
        // line 5
        echo twig_escape_filter($this->env, ($context["containerExtraClass"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 6
        $this->displayBlock('widget_content', $context, $blocks);
        // line 65
        echo "</div>
";
    }

    // line 6
    public function block_widget_content($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        $this->displayBlock('widget_actions', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('items_container', $context, $blocks);
        // line 64
        echo "    ";
    }

    // line 7
    public function block_widget_actions($context, array $blocks = array())
    {
        // line 8
        echo "            <div class=\"widget-actions\">
                ";
        // line 9
        echo $context["UI"]->getclientLink(array("aCss" => "collapse-all-button btn-mini", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse All"), "dataAttributes" => array("action-name" => "collapse_all")));
        // line 13
        echo "
                ";
        // line 14
        echo $context["UI"]->getclientLink(array("aCss" => "btn refresh-button icons-holder-text", "iCss" => "fa-refresh", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refresh"), "dataAttributes" => array("action-name" => "refresh")));
        // line 19
        echo "
                ";
        // line 20
        echo $context["UI"]->getclientLink(array("aCss" => "btn sort-button icons-holder-text", "iCss" => "fa-arrow-up", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Descending Order"), "dataAttributes" => array("action-name" => "toggle_sorting", "title-alt" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ascending Order"), "icon-alt" => "fa-arrow-down")));
        // line 29
        echo "
            </div>
        ";
    }

    // line 33
    public function block_items_container($context, array $blocks = array())
    {
        // line 34
        echo "            ";
        $context["options"] = array("widgetId" => $this->getAttribute($this->getAttribute(        // line 35
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "notesOptions" => array("template" => "#template-note-list", "itemTemplate" => "#template-note-item", "urls" => array("list" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_note_notes", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 41
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "createItem" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_note_create", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 44
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array())))), "routes" => array("update" => "oro_note_update", "delete" => "oro_api_delete_note")), "notesData" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_note_notes", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 53
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array())))));
        // line 56
        echo "
            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oronote/js/app/components/notes-component\"
                data-page-component-options=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"></div>

            ";
        // line 61
        $this->loadTemplate("OroNoteBundle:Note:js/list.html.twig", "OroNoteBundle:Note/widget:notes.html.twig", 61)->display(array_merge($context, array("id" => "template-note-list")));
        // line 62
        echo "            ";
        $this->loadTemplate("OroNoteBundle:Note:js/view.html.twig", "OroNoteBundle:Note/widget:notes.html.twig", 62)->display(array_merge($context, array("id" => "template-note-item")));
        // line 63
        echo "        ";
    }

    public function getTemplateName()
    {
        return "OroNoteBundle:Note/widget:notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 63,  104 => 62,  102 => 61,  97 => 59,  92 => 56,  90 => 53,  89 => 44,  88 => 41,  87 => 35,  85 => 34,  82 => 33,  76 => 29,  74 => 20,  71 => 19,  69 => 14,  66 => 13,  64 => 9,  61 => 8,  58 => 7,  54 => 64,  52 => 33,  49 => 32,  46 => 7,  43 => 6,  38 => 65,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNoteBundle:Note/widget:notes.html.twig", "");
    }
}
