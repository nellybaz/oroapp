<?php

/* OroCalendarBundle:SystemCalendar:update.html.twig */
class __TwigTemplate_2db9f6a5b86a36f509af33b83723e8c955d0daf43952f2d363cb84b7bcbfadb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCalendarBundle:SystemCalendar:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.title%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "name", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.entity_label"))));
        // line 4
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_system_calendar_view", "params" => array("id" => "\$id"))), "method");
        // line 11
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_calendar_create")) {
            // line 12
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_system_calendar_create")), "method"));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_public_calendar_management") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_system_calendar_management"))) {
            // line 17
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_system_calendar_update", "params" => array("id" => "\$id"))), "method"));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_index")), "method"), "html", null, true);
        echo "
";
    }

    // line 26
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 28
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 29
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 32
($context["entity"] ?? null), "name", array()));
            // line 34
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.entity_label")));
            // line 37
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCalendarBundle:SystemCalendar:update.html.twig", 37)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_content_data($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["id"] = "systemcalendar-form";
        // line 43
        echo "
    ";
        // line 44
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 51
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 1 =>         // line 52
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "backgroundColor", array()), 'row'), 2 =>         // line 53
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "public", array()), 'row'))))));
        // line 58
        echo "
    ";
        // line 59
        $context["additionalData"] = array();
        // line 60
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 61
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 62
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 64
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 69
($context["additionalData"] ?? null))))));
            // line 72
            echo "    ";
        }
        // line 73
        echo "
    ";
        // line 74
        $context["data"] = array("formErrors" => ((        // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 76
($context["dataBlocks"] ?? null));
        // line 78
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:SystemCalendar:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 78,  149 => 76,  148 => 75,  147 => 74,  144 => 73,  141 => 72,  139 => 69,  137 => 64,  134 => 63,  127 => 62,  124 => 61,  118 => 60,  116 => 59,  113 => 58,  111 => 53,  110 => 52,  109 => 51,  108 => 44,  105 => 43,  102 => 42,  99 => 41,  94 => 38,  91 => 37,  88 => 36,  82 => 34,  80 => 32,  79 => 29,  77 => 28,  74 => 27,  71 => 26,  65 => 23,  60 => 22,  57 => 21,  54 => 17,  51 => 16,  48 => 15,  45 => 12,  42 => 11,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:SystemCalendar:update.html.twig", "");
    }
}
