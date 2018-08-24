<?php

/* OroReportBundle:Report/table:view.html.twig */
class __TwigTemplate_94f10798fb7ed4e1fa5eb0b02a2b1a3e534abee369ef4fbea6aaad80d850ea34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroReportBundle:Report/table:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'after_breadcrumbs' => array($this, 'block_after_breadcrumbs'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroReportBundle:Report/table:view.html.twig", 2);
        // line 3
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroReportBundle:Report/table:view.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%report.name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()), "%report.group%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["reportGroup"] ?? null)))));
        // line 5
        $context["pageTitle"] = $this->getAttribute(($context["entity"] ?? null), "name", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)))) {
            // line 9
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_report_update", array("id" => $this->getAttribute(            // line 10
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.entity_label")));
            // line 12
            echo "
    ";
        }
        // line 14
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 15
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_report", array("id" => $this->getAttribute(            // line 16
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_report_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 19
($context["entity"] ?? null), "id", array()), "id" => "btn-remove-report", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.entity_label")));
            // line 22
            echo "
    ";
        }
    }

    // line 26
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 28
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_report_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.report.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 31
($context["entity"] ?? null), "name", array()));
        // line 33
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 36
    public function block_after_breadcrumbs($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\"pull-left\">
        <div class=\"grid-views-holder\"></div>
    </div>
";
    }

    // line 42
    public function block_content_data($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (array_key_exists("gridName", $context)) {
            // line 44
            echo "        ";
            if (array_key_exists("chartView", $context)) {
                // line 45
                echo "            <div class=\"chart-wrapper\">
                ";
                // line 46
                echo $this->getAttribute(($context["chartView"] ?? null), "render", array(), "method");
                echo "
            </div>
        ";
            }
            // line 49
            echo "        ";
            $context["renderParams"] = twig_array_merge(((array_key_exists("renderParams", $context)) ? (_twig_default_filter(($context["renderParams"] ?? null), array())) : (array())), array("enableFullScreenLayout" => true, "enableViews" => true, "showViewsInCustomElement" => ".page-title > .navbar-extra .pull-left-extra .grid-views-holder"));
            // line 54
            echo "        ";
            $context["gridParams"] = array("_grid_view" => array(), "_tags" => array("_disabled" => true));
            // line 58
            echo "        ";
            if ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_report.display_sql_query")) {
                // line 59
                echo "            ";
                $context["gridParams"] = twig_array_merge(($context["gridParams"] ?? null), array("display_sql_query" => true));
                // line 60
                echo "        ";
            }
            // line 61
            echo "        ";
            $context["params"] = twig_array_merge(((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), ($context["gridParams"] ?? null));
            // line 63
            echo "        ";
            echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["params"] ?? null), ($context["renderParams"] ?? null));
            echo "
    ";
        } else {
            // line 65
            echo "        <div class=\"container-fluid\">
            <div class=\"grid-container\">
                <div class=\"no-data\">
                    <span>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid report configuration"), "html", null, true);
            echo "</span>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroReportBundle:Report/table:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 68,  136 => 65,  130 => 63,  127 => 61,  124 => 60,  121 => 59,  118 => 58,  115 => 54,  112 => 49,  106 => 46,  103 => 45,  100 => 44,  97 => 43,  94 => 42,  87 => 37,  84 => 36,  77 => 33,  75 => 31,  74 => 28,  72 => 27,  69 => 26,  63 => 22,  61 => 19,  60 => 16,  58 => 15,  55 => 14,  51 => 12,  49 => 10,  47 => 9,  44 => 8,  41 => 7,  37 => 1,  35 => 5,  33 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReportBundle:Report/table:view.html.twig", "");
    }
}
