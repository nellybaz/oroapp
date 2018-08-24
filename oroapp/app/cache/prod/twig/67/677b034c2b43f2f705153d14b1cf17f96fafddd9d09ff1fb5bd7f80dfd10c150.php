<?php

/* OroSalesBundle:Opportunity:view.html.twig */
class __TwigTemplate_31666d1f4ba4932e7c00581be729b3cb6f532ce3a53745ada93d5f65f7754502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroSalesBundle:Opportunity:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["hasGrantedNameView"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "name");

        $this->env->getExtension("oro_title")->set(array("params" => array("%opportunity.name%" => ((        // line 5
($context["hasGrantedNameView"] ?? null)) ? ((($this->getAttribute(        // line 6
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %fieldName% not granted", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.name.label"))))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_update", array("id" => $this->getAttribute(            // line 13
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_label"))), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
        // line 17
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_opportunity", array("id" => $this->getAttribute(            // line 19
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-contact", "dataId" => $this->getAttribute(            // line 23
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_label"))), "method"), "html", null, true);
            // line 25
            echo "
    ";
        }
    }

    // line 29
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 31
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_plural_label"), "rawEntityTitle" =>  !        // line 34
($context["hasGrantedNameView"] ?? null), "entityTitle" => ((        // line 35
($context["hasGrantedNameView"] ?? null)) ? ((($this->getAttribute(        // line 36
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"))) : ($this->getAttribute(        // line 37
($context["UI"] ?? null), "renderDisabledLabel", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %fieldName% not granted", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.name.label")))), "method"))));
        // line 39
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block_stats($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "createdAt")) {
            // line 44
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
            echo "</li>
    ";
        }
        // line 46
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "updatedAt")) {
            // line 47
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
            echo "</li>
    ";
        }
    }

    // line 51
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    ";
        // line 53
        if (($this->getAttribute(($context["entity"] ?? null), "status", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), "status"))) {
            // line 54
            echo "        <div class=\"pull-left\">
            ";
            // line 55
            if (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "id", array()) != "lost")) {
                // line 56
                echo "                <div class=\"badge badge-enabled status-enabled\">
                    <i class=\"icon-status-enabled fa-circle\"></i>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 59
                echo "                <div class=\"badge badge-disabled status-disabled\">
                    <i class=\"icon-status-disabled fa-circle\"></i>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "</div>
            ";
            }
            // line 62
            echo "        </div>
    ";
        }
    }

    // line 66
    public function block_content_data($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        ob_start();
        // line 68
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_info", array("id" => $this->getAttribute(        // line 70
($context["entity"] ?? null), "id", array())))));
        // line 71
        echo "
    ";
        $context["opportunityInfoWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
    ";
        // line 74
        $context["generalSubblocks"] = array(0 => array("data" => array(0 => ($context["opportunityInfoWidget"] ?? null))));
        // line 75
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" =>         // line 79
($context["generalSubblocks"] ?? null)));
        // line 82
        echo "
    ";
        // line 83
        $context["id"] = "opportunityView";
        // line 84
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 85
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Opportunity:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 85,  177 => 84,  175 => 83,  172 => 82,  170 => 79,  168 => 75,  166 => 74,  163 => 73,  159 => 71,  157 => 70,  155 => 68,  152 => 67,  149 => 66,  143 => 62,  138 => 60,  135 => 59,  130 => 57,  127 => 56,  125 => 55,  122 => 54,  120 => 53,  115 => 52,  112 => 51,  102 => 47,  99 => 46,  91 => 44,  88 => 43,  85 => 42,  78 => 39,  76 => 37,  75 => 36,  74 => 35,  73 => 34,  72 => 31,  70 => 30,  67 => 29,  61 => 25,  59 => 23,  58 => 19,  56 => 18,  53 => 17,  49 => 15,  47 => 13,  45 => 12,  42 => 11,  39 => 10,  35 => 1,  33 => 6,  32 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Opportunity:view.html.twig", "");
    }
}
