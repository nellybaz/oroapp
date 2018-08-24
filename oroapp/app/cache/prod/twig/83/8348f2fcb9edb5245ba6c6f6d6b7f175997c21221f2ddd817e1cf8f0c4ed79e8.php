<?php

/* OroOrganizationBundle:BusinessUnit:view.html.twig */
class __TwigTemplate_0daeb60753064aaaea36f99c90e5e3b05633b12e2f349b92feedd2f2f0519bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroOrganizationBundle:BusinessUnit:view.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%business_unit.name%" => (($this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")))));
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_update", array("id" => $this->getAttribute(            // line 9
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.entity_label"))), "method"), "html", null, true);
            // line 11
            echo "
    ";
        }
        // line 13
        echo "    ";
        if ((($this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getBusinessUnitCount() > 1) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_businessunit", array("id" => $this->getAttribute(            // line 15
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-business_unit", "dataId" => $this->getAttribute(            // line 19
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.entity_label"), "disabled" =>  !            // line 21
($context["allow_delete"] ?? null))), "method"), "html", null, true);
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
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 31
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
        // line 33
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 36
    public function block_content_data($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        ob_start();
        // line 38
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_widget_info", array("id" => $this->getAttribute(        // line 40
($context["entity"] ?? null), "id", array())))));
        // line 41
        echo "
    ";
        $context["businessUnitInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "
    ";
        // line 44
        ob_start();
        // line 45
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_widget_users", array("id" => $this->getAttribute(        // line 47
($context["entity"] ?? null), "id", array())))));
        // line 48
        echo "
    ";
        $context["businessUnitUsersWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        echo "
    ";
        // line 51
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 56
($context["businessUnitInformationWidget"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.businessunit.users.label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 62
($context["businessUnitUsersWidget"] ?? null))))));
        // line 66
        echo "
    ";
        // line 67
        $context["id"] = "businessUnitView";
        // line 68
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 69
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 69,  119 => 68,  117 => 67,  114 => 66,  112 => 62,  111 => 56,  110 => 51,  107 => 50,  103 => 48,  101 => 47,  99 => 45,  97 => 44,  94 => 43,  90 => 41,  88 => 40,  86 => 38,  83 => 37,  80 => 36,  73 => 33,  71 => 31,  70 => 28,  68 => 27,  65 => 26,  59 => 22,  57 => 21,  56 => 19,  55 => 15,  53 => 14,  50 => 13,  46 => 11,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrganizationBundle:BusinessUnit:view.html.twig", "");
    }
}
