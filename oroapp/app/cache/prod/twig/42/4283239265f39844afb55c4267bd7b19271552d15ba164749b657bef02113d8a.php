<?php

/* OroUserBundle:Role:view.html.twig */
class __TwigTemplate_698f2822f0ec6a697b6e6c6a050ad2446efbc3ce09d001f14abac5e486a22a53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroUserBundle:Role:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtonContainer' => array($this, 'block_navButtonContainer'),
            'navButtons' => array($this, 'block_navButtons'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroUserBundle:Role:view.html.twig", 2);
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:Role:view.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%role%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "label", array()))));
        // line 7
        $context["gridName"] = "role-view-users-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 11
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_role_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 14
($context["entity"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "label", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 16
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_navButtonContainer($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayBlock('navButtons', $context, $blocks);
    }

    public function block_navButtons($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_navButtons", $context)) ? (_twig_default_filter(($context["view_navButtons"] ?? null), "view_navButtons")) : ("view_navButtons")), array("entity" => ($context["entity"] ?? null)));
        // line 22
        echo "        ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array(), "any", true, true) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)))) {
            // line 23
            echo "            ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_role", array("id" => $this->getAttribute(            // line 24
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_role_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 27
($context["entity"] ?? null), "id", array()), "id" => "btn-remove-role", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.entity_label"), "disabled" =>  !            // line 30
($context["allow_delete"] ?? null)));
            // line 32
            echo "
        ";
        }
        // line 34
        echo "    ";
    }

    // line 37
    public function block_content_data($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 44
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.role.label"), $this->getAttribute(($context["entity"] ?? null), "label", array())))))));
        // line 49
        echo "
    ";
        // line 50
        ob_start();
        // line 51
        echo "        ";
        if ($this->getAttribute(($context["entity"] ?? null), "organization", array(), "any", true, true)) {
            // line 52
            echo "            ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.organization.label"), $this->getAttribute(($context["entity"] ?? null), "organization", array()));
            echo "
        ";
        }
        // line 54
        echo "        ";
        echo $context["UI"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.role.extend_description.label"), $this->getAttribute(($context["entity"] ?? null), "extendDescription", array()));
        echo "
    ";
        $context["additionalBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
    ";
        // line 57
        ob_start();
        // line 58
        echo "        <div ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orouser/js/components/role/entity-category-tabs-component", "options" =>         // line 60
($context["tabsOptions"] ?? null)));
        // line 61
        echo "></div>
        ";
        // line 62
        echo $context["dataGrid"]->getrenderGrid("role-permission-grid", array("role" => ($context["entity"] ?? null)), array("cssClass" => "inner-permissions-grid", "themeOptions" => array("readonly" => true)));
        echo "
        <div ";
        // line 63
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orouser/js/components/role/capability-set-component", "options" =>         // line 65
($context["capabilitySetOptions"] ?? null)));
        // line 66
        echo "></div>
    ";
        $context["rolePermissionsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        echo "
    ";
        // line 69
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("data" => array(0 =>         // line 73
($context["additionalBlock"] ?? null)))))));
        // line 77
        echo "
    ";
        // line 78
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entity"), "subblocks" => array(0 => array("data" => array(0 =>         // line 82
($context["rolePermissionsGrid"] ?? null)))))));
        // line 86
        echo "
    ";
        // line 87
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_plural_label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 93
$context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("role_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 97
        echo "
    ";
        // line 98
        $context["id"] = "user-role-view";
        // line 99
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 100
        echo "
    ";
        // line 101
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 104
    public function block_stats($context, array $blocks = array())
    {
        // line 105
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Role:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 105,  172 => 104,  166 => 101,  163 => 100,  160 => 99,  158 => 98,  155 => 97,  153 => 93,  152 => 87,  149 => 86,  147 => 82,  146 => 78,  143 => 77,  141 => 73,  140 => 69,  137 => 68,  133 => 66,  131 => 65,  130 => 63,  126 => 62,  123 => 61,  121 => 60,  119 => 58,  117 => 57,  114 => 56,  108 => 54,  102 => 52,  99 => 51,  97 => 50,  94 => 49,  92 => 44,  90 => 38,  87 => 37,  83 => 34,  79 => 32,  77 => 30,  76 => 27,  75 => 24,  73 => 23,  70 => 22,  67 => 21,  60 => 20,  57 => 19,  50 => 16,  48 => 14,  47 => 11,  45 => 10,  42 => 9,  38 => 1,  36 => 7,  34 => 5,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Role:view.html.twig", "");
    }
}
