<?php

/* OroCustomerBundle:CustomerUserRole:view.html.twig */
class __TwigTemplate_b10ad8673ca7628467c14e244bd3e74066c5b0568e689a0a71469b25fa0e3d7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCustomerBundle:CustomerUserRole:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
            'stats' => array($this, 'block_stats'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCustomerBundle:CustomerUserRole:view.html.twig", 2);
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCustomerBundle:CustomerUserRole:view.html.twig", 3);
        // line 4
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCustomerBundle:CustomerUserRole:view.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%label%" => $this->getAttribute(        // line 6
($context["entity"] ?? null), "label", array()))));
        // line 8
        $context["gridName"] = "customer-customer-users-grid-view";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 12
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_role_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 15
($context["entity"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 17
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_content_data($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["selfManagedProperty"] = "";
        // line 22
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "public", array())) {
            // line 23
            echo "        ";
            $context["selfManagedPropertyValue"] = "";
            // line 24
            echo "        ";
            if ($this->getAttribute(($context["entity"] ?? null), "selfManaged", array())) {
                // line 25
                echo "            ";
                $context["selfManagedPropertyValue"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.self_managed.value.true.label");
                // line 26
                echo "        ";
            } else {
                // line 27
                echo "            ";
                $context["selfManagedPropertyValue"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.self_managed.value.false.label");
                // line 28
                echo "        ";
            }
            // line 29
            echo "        ";
            $context["selfManagedProperty"] = $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.self_managed.label"), ($context["selfManagedPropertyValue"] ?? null));
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "        ";
            $context["selfManagedProperty"] = $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.self_managed.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"));
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    ";
        // line 34
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 40
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.label.label"), $this->getAttribute(($context["entity"] ?? null), "label", array())), 1 =>         // line 41
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruserrole.customer.label"), $this->getAttribute(($context["entity"] ?? null), "customer", array())), 2 =>         // line 42
$context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null)), 3 =>         // line 43
($context["selfManagedProperty"] ?? null))))));
        // line 48
        echo "
    ";
        // line 49
        ob_start();
        // line 50
        echo "        <div ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orouser/js/components/role/entity-category-tabs-component", "options" =>         // line 52
($context["tabsOptions"] ?? null)));
        // line 53
        echo "></div>
        ";
        // line 54
        echo $context["dataGrid"]->getrenderGrid("customer-user-role-permission-grid", array("role" => ($context["entity"] ?? null)), array("cssClass" => "inner-permissions-grid", "themeOptions" => array("readonly" => true)));
        echo "
        <div ";
        // line 55
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orouser/js/components/role/capability-set-component", "options" =>         // line 57
($context["capabilitySetOptions"] ?? null)));
        // line 58
        echo "></div>
    ";
        $context["rolePermissionsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
    ";
        // line 61
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.customeruserrole.entity"), "subblocks" => array(0 => array("data" => array(0 =>         // line 65
($context["rolePermissionsGrid"] ?? null)))))));
        // line 69
        echo "
    ";
        // line 70
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_plural_label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 76
$context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("role" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 80
        echo "
    ";
        // line 81
        $context["id"] = "customer-customer-user-role-view";
        // line 82
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 83
        echo "
    ";
        // line 84
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 87
    public function block_stats($context, array $blocks = array())
    {
        // line 88
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUserRole:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 88,  157 => 87,  151 => 84,  148 => 83,  145 => 82,  143 => 81,  140 => 80,  138 => 76,  137 => 70,  134 => 69,  132 => 65,  131 => 61,  128 => 60,  124 => 58,  122 => 57,  121 => 55,  117 => 54,  114 => 53,  112 => 52,  110 => 50,  108 => 49,  105 => 48,  103 => 43,  102 => 42,  101 => 41,  100 => 40,  99 => 34,  96 => 33,  93 => 32,  90 => 31,  87 => 30,  84 => 29,  81 => 28,  78 => 27,  75 => 26,  72 => 25,  69 => 24,  66 => 23,  63 => 22,  60 => 21,  57 => 20,  50 => 17,  48 => 15,  47 => 12,  45 => 11,  42 => 10,  38 => 1,  36 => 8,  34 => 6,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUserRole:view.html.twig", "");
    }
}
