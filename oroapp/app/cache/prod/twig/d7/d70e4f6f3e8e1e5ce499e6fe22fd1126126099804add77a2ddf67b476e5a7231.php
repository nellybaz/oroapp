<?php

/* OroSalesBundle:Lead:view.html.twig */
class __TwigTemplate_419cc3d738a977256b41f347caba6cd4e803049c412a10b28afc5a540eb33d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroSalesBundle:Lead:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'stats' => array($this, 'block_stats'),
            'pageHeader' => array($this, 'block_pageHeader'),
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
        // line 2
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:Lead:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%lead.name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 8
            echo "        ";
            if (($context["isDisqualifyAllowed"] ?? null)) {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_disqualify", array("id" => $this->getAttribute(                // line 10
($context["entity"] ?? null), "id", array()))), "aCss" => "btn btn-danger action-button", "iCss" => "fa-ban", "label" => "Disqualify", "title" => "Disqualify")), "method"), "html", null, true);
                // line 15
                echo "
        ";
            }
            // line 17
            echo "        ";
            if (($context["isConvertToOpportunityAllowed"] ?? null)) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_convert_to_opportunity", array("id" => $this->getAttribute(                // line 19
($context["entity"] ?? null), "id", array()))), "aCss" => "btn action-button", "iCss" => "fa-usd", "label" => "Convert to Opportunity", "title" => "Convert to Opportunity")), "method"), "html", null, true);
                // line 24
                echo "
        ";
            }
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_update", array("id" => $this->getAttribute(            // line 27
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.entity_label"))), "method"), "html", null, true);
            // line 29
            echo "
    ";
        }
        // line 31
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_lead", array("id" => $this->getAttribute(            // line 33
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-lead", "dataId" => $this->getAttribute(            // line 37
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.entity_label"))), "method"), "html", null, true);
            // line 39
            echo "
    ";
        }
    }

    // line 43
    public function block_stats($context, array $blocks = array())
    {
        // line 44
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 48
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 50
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 53
($context["entity"] ?? null), "name", array()));
        // line 55
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 58
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 61
        if (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "id", array()) != "canceled")) {
            // line 62
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 64
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "status", array()), "name", array()), "html", null, true);
            echo "</div>
        ";
        }
        // line 66
        echo "    </div>
";
    }

    // line 69
    public function block_content_data($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_info", array("id" => $this->getAttribute(        // line 73
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Lead Information")));
        // line 75
        echo "
    ";
        $context["leadInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        echo "
    ";
        // line 78
        ob_start();
        // line 79
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "contentClasses" => array(), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_lead_address_book", array("id" => $this->getAttribute(        // line 82
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address Book")));
        // line 84
        echo "
    ";
        $context["addressBookWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 86
        echo "
    ";
        // line 87
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 92
($context["leadInformationWidget"] ?? null))), 1 => array("data" => array(0 =>         // line 93
($context["addressBookWidget"] ?? null))))));
        // line 97
        echo "
    ";
        // line 98
        $context["id"] = "leadView";
        // line 99
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 100
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Lead:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 100,  188 => 99,  186 => 98,  183 => 97,  181 => 93,  180 => 92,  179 => 87,  176 => 86,  172 => 84,  170 => 82,  168 => 79,  166 => 78,  163 => 77,  159 => 75,  157 => 73,  155 => 71,  152 => 70,  149 => 69,  144 => 66,  138 => 64,  132 => 62,  130 => 61,  124 => 59,  121 => 58,  114 => 55,  112 => 53,  111 => 50,  109 => 49,  106 => 48,  98 => 45,  91 => 44,  88 => 43,  82 => 39,  80 => 37,  79 => 33,  77 => 32,  74 => 31,  70 => 29,  68 => 27,  66 => 26,  62 => 24,  60 => 19,  58 => 18,  55 => 17,  51 => 15,  49 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  34 => 1,  32 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Lead:view.html.twig", "");
    }
}
