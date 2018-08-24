<?php

/* OroTrackingBundle:TrackingWebsite:update.html.twig */
class __TwigTemplate_fb060313f08213a2c11626c1553402ff77d00d87ca653f9dba4113c98cdbe7c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroTrackingBundle:TrackingWebsite:update.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.entity_label"))));
        // line 7
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 9
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tracking_website_update", array("id" =>         // line 10
($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tracking_website_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_navButtons($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_tracking_website_view", "params" => array("id" => "\$id"))), "method");
        // line 18
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tracking_website_create")) {
            // line 19
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_tracking_website_create")), "method"));
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tracking_website_update")) {
            // line 24
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_tracking_website_update", "params" => array("id" => "\$id"))), "method"));
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tracking_website_index")), "method"), "html", null, true);
        echo "
";
    }

    // line 33
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 35
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 36
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tracking_website_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 39
($context["entity"] ?? null), "name", array()));
            // line 41
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 43
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.entity_label")));
            // line 44
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroTrackingBundle:TrackingWebsite:update.html.twig", 44)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 45
            echo "    ";
        }
    }

    // line 48
    public function block_content_data($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["id"] = "tracking-website-form";
        // line 50
        echo "
    ";
        // line 51
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.block.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 57
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 1 =>         // line 58
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "identifier", array()), 'row'), 2 =>         // line 59
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "url", array()), 'row'))))));
        // line 63
        echo "
    ";
        // line 64
        $context["additionalData"] = array();
        // line 65
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 66
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 67
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 69
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.block.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 71
($context["additionalData"] ?? null))))));
            // line 73
            echo "    ";
        }
        // line 74
        echo "
    ";
        // line 75
        $context["data"] = array("formErrors" => ((        // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 77
($context["dataBlocks"] ?? null));
        // line 79
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTrackingBundle:TrackingWebsite:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 79,  152 => 77,  151 => 76,  150 => 75,  147 => 74,  144 => 73,  142 => 71,  140 => 69,  137 => 68,  130 => 67,  127 => 66,  121 => 65,  119 => 64,  116 => 63,  114 => 59,  113 => 58,  112 => 57,  111 => 51,  108 => 50,  105 => 49,  102 => 48,  97 => 45,  94 => 44,  91 => 43,  85 => 41,  83 => 39,  82 => 36,  80 => 35,  77 => 34,  74 => 33,  68 => 30,  63 => 29,  60 => 28,  57 => 24,  54 => 23,  51 => 22,  48 => 19,  45 => 18,  42 => 14,  39 => 13,  35 => 1,  33 => 10,  32 => 9,  30 => 7,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTrackingBundle:TrackingWebsite:update.html.twig", "");
    }
}
