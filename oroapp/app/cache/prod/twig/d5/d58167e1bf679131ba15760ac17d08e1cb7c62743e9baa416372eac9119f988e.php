<?php

/* OroSegmentBundle:Segment:view.html.twig */
class __TwigTemplate_0a1efee008a2794638e8efffd02633c14e62942d09f375bfd07223f888cad40a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroSegmentBundle:Segment:view.html.twig", 1);
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
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSegmentBundle:Segment:view.html.twig", 2);
        // line 3
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroSegmentBundle:Segment:view.html.twig", 3);
        // line 4
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroSegmentBundle:Segment:view.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%segment.name%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "name", array()), "%segment.group%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["segmentGroup"] ?? null)))));
        // line 6
        $context["pageTitle"] = $this->getAttribute(($context["entity"] ?? null), "name", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo $context["segmentQD"]->getrunButton(($context["entity"] ?? null), true);
        echo "
    ";
        // line 10
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)))) {
            // line 11
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_update", array("id" => $this->getAttribute(            // line 12
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_label")));
            // line 14
            echo "
    ";
        }
        // line 16
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 17
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_segment", array("id" => $this->getAttribute(            // line 18
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 21
($context["entity"] ?? null), "id", array()), "id" => "btn-remove-segment", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_label")));
            // line 24
            echo "
    ";
        }
    }

    // line 28
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 30
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 33
($context["entity"] ?? null), "name", array()));
        // line 35
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 38
    public function block_content_data($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        if ((array_key_exists("gridName", $context) && ($context["gridName"] ?? null))) {
            // line 40
            echo "        ";
            $context["renderParams"] = twig_array_merge(((array_key_exists("renderParams", $context)) ? (_twig_default_filter(($context["renderParams"] ?? null), array())) : (array())), array("enableViews" => false));
            // line 41
            echo "        ";
            $context["gridParams"] = array("_grid_view" => array("_disabled" => true), "_tags" => array("_disabled" => true));
            // line 45
            echo "        ";
            if ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_report.display_sql_query")) {
                // line 46
                echo "            ";
                $context["gridParams"] = twig_array_merge(($context["gridParams"] ?? null), array("display_sql_query" => true));
                // line 47
                echo "        ";
            }
            // line 48
            echo "        ";
            $context["params"] = twig_array_merge(((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), ($context["gridParams"] ?? null));
            // line 49
            echo "        ";
            echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["params"] ?? null), ($context["renderParams"] ?? null));
            echo "
    ";
        } else {
            // line 51
            echo "        <div class=\"container-fluid\">
            <div class=\"grid-container\">
                <div class=\"no-data\">
                    <span>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid segment configuration"), "html", null, true);
            echo "</span>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroSegmentBundle:Segment:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 54,  119 => 51,  113 => 49,  110 => 48,  107 => 47,  104 => 46,  101 => 45,  98 => 41,  95 => 40,  92 => 39,  89 => 38,  82 => 35,  80 => 33,  79 => 30,  77 => 29,  74 => 28,  68 => 24,  66 => 21,  65 => 18,  63 => 17,  60 => 16,  56 => 14,  54 => 12,  52 => 11,  50 => 10,  45 => 9,  42 => 8,  38 => 1,  36 => 6,  34 => 5,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSegmentBundle:Segment:view.html.twig", "");
    }
}
