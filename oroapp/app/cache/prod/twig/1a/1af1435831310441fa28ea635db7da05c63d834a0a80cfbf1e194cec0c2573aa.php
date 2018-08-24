<?php

/* OroUserBundle:User:view.html.twig */
class __TwigTemplate_1bb33d92eeadf2c6c2aee579c5cd714d2f3c44e2c39dfc23522cac1bcef59292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroUserBundle:User:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:User:view.html.twig", 2);
        // line 4
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null)), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 5
($context["fullname"] ?? null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_navButtons", $context)) ? (_twig_default_filter(($context["view_navButtons"] ?? null), "view_navButtons")) : ("view_navButtons")), array("entity" => ($context["entity"] ?? null)));
        // line 9
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            // line 10
            echo "        ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("CONFIGURE", ($context["entity"] ?? null)) &&  !($context["isProfileView"] ?? null))) {
                // line 11
                echo "            ";
                echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_config", array("id" => $this->getAttribute(                // line 12
($context["entity"] ?? null), "id", array()))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.user_configuration.label"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.user_configuration.label"), "iCss" => "fa-cog"));
                // line 16
                echo "
        ";
            } elseif ((            // line 17
($context["isProfileView"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("update_own_configuration"))) {
                // line 18
                echo "            ";
                echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_profile_configuration"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.user_configuration.label"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.user_configuration.label"), "iCss" => "fa-cog"));
                // line 23
                echo "
        ";
            }
            // line 25
            echo "    ";
        }
        // line 26
        echo "    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)) &&  !($context["isProfileView"] ?? null))) {
            // line 27
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_update", array("id" => $this->getAttribute(            // line 28
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_label")));
            // line 30
            echo "
    ";
        } elseif ((        // line 31
($context["isProfileView"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("update_own_profile"))) {
            // line 32
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_profile_update"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile")));
            // line 35
            echo "
    ";
        }
        // line 37
        echo "    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null)) && ($this->getAttribute(($context["entity"] ?? null), "id", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())))) {
            // line 38
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_user", array("id" => $this->getAttribute(            // line 39
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(            // line 43
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_label"), "disabled" =>  !            // line 45
($context["allow_delete"] ?? null)));
            // line 46
            echo "
    ";
        }
    }

    // line 50
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 52
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_plural_label"), "entityTitle" =>         // line 55
($context["fullname"] ?? null));
        // line 57
        echo "    ";
        $context["avatar"] = $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getConfiguredImageUrl(($context["entity"] ?? null), "avatar");
        // line 58
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 61
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 64
        if ($this->getAttribute(($context["entity"] ?? null), "enabled", array())) {
            // line 65
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.enabled.enabled"), "html", null, true);
            // line 67
            echo "</div>
        ";
        } else {
            // line 69
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.enabled.disabled"), "html", null, true);
            // line 71
            echo "</div>
        ";
        }
        // line 73
        echo "    </div>
    <div class=\"pull-left\">
        ";
        // line 75
        if (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "authStatus", array()), "id", array()) == "expired")) {
            // line 76
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-unlock-alt\"></i>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "authStatus", array()), "name", array()), "html", null, true);
            echo "</div>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 78
($context["entity"] ?? null), "authStatus", array()), "id", array()) == "active")) {
            // line 79
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-unlock\"></i>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "authStatus", array()), "name", array()), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 82
            echo "            <div class=\"badge badge-tentatively status-tentatively\"><i class=\"icon-status-tentatively fa-lock\"></i>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "authStatus", array()), "name", array()), "html", null, true);
            echo "</div>
        ";
        }
        // line 85
        echo "    </div>
";
    }

    // line 88
    public function block_stats($context, array $blocks = array())
    {
        // line 89
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.last_login.label"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "lastLogin", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "lastLogin", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.login_count.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["entity"] ?? null), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "loginCount", array()), 0)) : (0)), "html", null, true);
        echo "</li>
";
    }

    // line 95
    public function block_content_data($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        ob_start();
        // line 97
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_widget_info", array("id" => $this->getAttribute(        // line 99
($context["entity"] ?? null), "id", array()), "viewProfile" => ($context["isProfileView"] ?? null))), "separateLayout" => false));
        // line 101
        echo "
    ";
        $context["userInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 103
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 108
($context["userInformationWidget"] ?? null))))));
        // line 112
        echo "
    ";
        // line 113
        $context["id"] = "userView";
        // line 114
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 115
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 115,  236 => 114,  234 => 113,  231 => 112,  229 => 108,  227 => 103,  223 => 101,  221 => 99,  219 => 97,  216 => 96,  213 => 95,  205 => 92,  199 => 91,  193 => 90,  186 => 89,  183 => 88,  178 => 85,  173 => 83,  171 => 82,  166 => 80,  164 => 79,  162 => 78,  158 => 77,  156 => 76,  154 => 75,  150 => 73,  146 => 71,  144 => 70,  142 => 69,  138 => 67,  136 => 66,  134 => 65,  132 => 64,  126 => 62,  123 => 61,  116 => 58,  113 => 57,  111 => 55,  110 => 52,  108 => 51,  105 => 50,  99 => 46,  97 => 45,  96 => 43,  95 => 39,  93 => 38,  90 => 37,  86 => 35,  83 => 32,  81 => 31,  78 => 30,  76 => 28,  74 => 27,  71 => 26,  68 => 25,  64 => 23,  61 => 18,  59 => 17,  56 => 16,  54 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  36 => 1,  34 => 5,  31 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User:view.html.twig", "");
    }
}
