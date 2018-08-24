<?php

/* OroSalesBundle:SalesFunnel:view.html.twig */
class __TwigTemplate_9a2820911a94427b6ca469b130992990c2ed57b109a4d02d04752168ec7d8231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroSalesBundle:SalesFunnel:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'stats' => array($this, 'block_stats'),
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
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:SalesFunnel:view.html.twig", 2);
        // line 4
        $context["salesFunnelHint"] = "";
        // line 5
        if (($context["entity"] ?? null)) {
            // line 6
            $context["salesFunnelHint"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.hint", array("%id%" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        }

        $this->env->getExtension("oro_title")->set(array("params" => array("%sales_funnel%" =>         // line 9
($context["salesFunnelHint"] ?? null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_navButtons($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_update", array("id" => $this->getAttribute(            // line 14
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.entity_label"))), "method"), "html", null, true);
            // line 16
            echo "
    ";
        }
        // line 18
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_salesfunnel", array("id" => $this->getAttribute(            // line 20
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-sales-funnel", "dataId" => $this->getAttribute(            // line 24
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.entity_label"))), "method"), "html", null, true);
            // line 26
            echo "
    ";
        }
    }

    // line 30
    public function block_stats($context, array $blocks = array())
    {
        // line 31
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 35
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 37
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.entity_plural_label"), "entityTitle" =>         // line 40
($context["salesFunnelHint"] ?? null));
        // line 42
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 45
    public function block_content_data($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        ob_start();
        // line 47
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_info", array("id" => $this->getAttribute(        // line 49
($context["entity"] ?? null), "id", array())))));
        // line 50
        echo "
    ";
        $context["informationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 57
($context["informationWidget"] ?? null))))));
        // line 60
        echo "
    ";
        // line 61
        if ($this->getAttribute(($context["entity"] ?? null), "opportunity", array())) {
            // line 62
            echo "        ";
            ob_start();
            // line 63
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_info", array("id" => $this->getAttribute($this->getAttribute(            // line 65
($context["entity"] ?? null), "opportunity", array()), "id", array())))));
            // line 66
            echo "
        ";
            $context["opportunityInfoWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 68
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opportunity Information"), "subblocks" => array(0 => array("data" => array(0 =>             // line 70
($context["opportunityInfoWidget"] ?? null)))))));
            // line 72
            echo "    ";
        }
        // line 73
        echo "
    ";
        // line 74
        $context["id"] = "salesFunnelView";
        // line 75
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 76
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:SalesFunnel:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 76,  153 => 75,  151 => 74,  148 => 73,  145 => 72,  143 => 70,  141 => 68,  137 => 66,  135 => 65,  133 => 63,  130 => 62,  128 => 61,  125 => 60,  123 => 57,  122 => 53,  119 => 52,  115 => 50,  113 => 49,  111 => 47,  108 => 46,  105 => 45,  98 => 42,  96 => 40,  95 => 37,  93 => 36,  90 => 35,  82 => 32,  75 => 31,  72 => 30,  66 => 26,  64 => 24,  63 => 20,  61 => 19,  58 => 18,  54 => 16,  52 => 14,  50 => 13,  47 => 12,  44 => 11,  40 => 1,  38 => 9,  34 => 6,  32 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:SalesFunnel:view.html.twig", "");
    }
}
