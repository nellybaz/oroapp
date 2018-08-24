<?php

/* OroSalesBundle:B2bCustomer:view.html.twig */
class __TwigTemplate_e59fd1f4e33a4880682a5b6046bcb9425f4e0dc3c299f70995096967cb3c2911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroSalesBundle:B2bCustomer:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
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
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:B2bCustomer:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%b2bcustomer.name%" => $this->getAttribute(        // line 4
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_update", array("id" => $this->getAttribute(            // line 9
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.entity_label"))), "method"), "html", null, true);
            // line 11
            echo "
    ";
        }
        // line 13
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_b2bcustomer", array("id" => $this->getAttribute(            // line 15
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-b2bcustomer", "dataId" => $this->getAttribute(            // line 19
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.entity_label"))), "method"), "html", null, true);
            // line 21
            echo "
    ";
        }
    }

    // line 25
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 27
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 30
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
        // line 32
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 35
    public function block_stats($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
    <li>
        <div class=\"label label-info orocrm-channel-lifetime-value-label\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.lifetime.label"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "lifetime", array()));
        echo "
        </div>
    </li>
";
    }

    // line 44
    public function block_content_data($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        ob_start();
        // line 46
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.widgets.b2bcustomer_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_widget_info", array("id" => $this->getAttribute(        // line 49
($context["entity"] ?? null), "id", array())))));
        // line 50
        echo "
    ";
        $context["b2bcustomerInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        $context["generalSectionBlocks"] = array(0 => array("data" => array(0 => ($context["b2bcustomerInformationWidget"] ?? null))));
        // line 54
        echo "
    ";
        // line 55
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.sections.general"), "class" => "active", "subblocks" =>         // line 58
($context["generalSectionBlocks"] ?? null)));
        // line 60
        echo "
    ";
        // line 61
        $context["id"] = "b2bcustomerView";
        // line 62
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 63
        echo "
    ";
        // line 64
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:B2bCustomer:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 64,  133 => 63,  130 => 62,  128 => 61,  125 => 60,  123 => 58,  122 => 55,  119 => 54,  117 => 53,  114 => 52,  110 => 50,  108 => 49,  106 => 46,  103 => 45,  100 => 44,  90 => 39,  83 => 36,  80 => 35,  73 => 32,  71 => 30,  70 => 27,  68 => 26,  65 => 25,  59 => 21,  57 => 19,  56 => 15,  54 => 14,  51 => 13,  47 => 11,  45 => 9,  43 => 8,  40 => 7,  37 => 6,  33 => 1,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:B2bCustomer:view.html.twig", "");
    }
}
