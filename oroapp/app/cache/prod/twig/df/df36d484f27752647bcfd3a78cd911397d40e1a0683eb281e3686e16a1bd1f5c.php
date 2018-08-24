<?php

/* OroUserBundle:User/Profile:update.html.twig */
class __TwigTemplate_4908e37fce5d7b8ccba8f579806c2f1e5e20dfc843b38391e90963c0cde2a6ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroUserBundle:User/Profile:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 4
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 5
($context["fullname"] ?? null))));
        // line 7
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_profile_update");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())))) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_user", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 12
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 16
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_label"), "disabled" =>  !            // line 18
($context["allow_delete"] ?? null))), "method"), "html", null, true);
            // line 19
            echo "
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_profile_view")), "method"), "html", null, true);
        echo "
    ";
        // line 23
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_user_profile_view")), "method");
        // line 26
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_create")) {
            // line 27
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_user_create")), "method"));
            // line 30
            echo "    ";
        }
        // line 31
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_user_update"))) {
            // line 32
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_user_profile_update")), "method"));
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 39
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 41
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 42
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_plural_label"), "entityTitle" =>             // line 45
($context["fullname"] ?? null));
            // line 48
            echo "        ";
            $context["avatar"] = $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getConfiguredImageUrl($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "avatar");
            // line 49
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_label")));
            // line 52
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroUserBundle:User/Profile:update.html.twig", 52)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 53
            echo "    ";
        }
    }

    // line 56
    public function block_stats($context, array $blocks = array())
    {
        // line 57
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "updatedAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.last_login.label"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "lastLogin", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "lastLogin", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.login_count.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "loginCount", array()), 0)) : (0)), "html", null, true);
        echo "</li>
";
    }

    // line 63
    public function block_content_data($context, array $blocks = array())
    {
        // line 64
        echo "<div class=\"user-profile-cols\">
    ";
        // line 65
        $context["id"] = "user-profile";
        // line 66
        echo "
    ";
        // line 67
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 74
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'row'), 1 =>         // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'row'), 2 => (($this->getAttribute(        // line 76
($context["form"] ?? null), "plainPassword", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), 'row')) : ("")), 3 =>         // line 77
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row'), 4 =>         // line 78
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row'), 5 =>         // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row'), 6 =>         // line 80
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row'), 7 =>         // line 81
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row'), 8 =>         // line 82
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "birthday", array()), 'row'), 9 =>         // line 83
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "avatar", array()), 'row'), 10 => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 84
($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ("") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "inviteUser", array()), 'row'))))), 1 => array("title" => "", "data" => array(0 =>         // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row'), 1 => $this->getAttribute(        // line 91
($context["UI"] ?? null), "collectionField", array(0 => $this->getAttribute(($context["form"] ?? null), "emails", array()), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.emails.label"), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add another email")), "method"), 2 =>         // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row'), 3 => (($this->getAttribute(        // line 93
($context["form"] ?? null), "signature", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "signature", array()), 'row')) : ("")))))));
        // line 98
        echo "
    ";
        // line 99
        $context["additionalData"] = array();
        // line 100
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 101
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 102
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 104
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 109
($context["additionalData"] ?? null))))));
            // line 112
            echo "    ";
        }
        // line 113
        echo "
    ";
        // line 114
        if ($this->getAttribute(($context["form"] ?? null), "change_password", array(), "any", true, true)) {
            // line 115
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.label"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 121
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "change_password", array()), 'widget')))))));
            // line 126
            echo "    ";
        }
        // line 127
        echo "
    ";
        // line 128
        $context["data"] = array("formErrors" => ((        // line 129
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 130
($context["dataBlocks"] ?? null));
        // line 132
        echo "
    ";
        // line 133
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User/Profile:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 133,  232 => 132,  230 => 130,  229 => 129,  228 => 128,  225 => 127,  222 => 126,  220 => 121,  218 => 115,  216 => 114,  213 => 113,  210 => 112,  208 => 109,  206 => 104,  203 => 103,  196 => 102,  193 => 101,  187 => 100,  185 => 99,  182 => 98,  180 => 93,  179 => 92,  178 => 91,  177 => 90,  176 => 84,  175 => 83,  174 => 82,  173 => 81,  172 => 80,  171 => 79,  170 => 78,  169 => 77,  168 => 76,  167 => 75,  166 => 74,  165 => 67,  162 => 66,  160 => 65,  157 => 64,  154 => 63,  146 => 60,  140 => 59,  134 => 58,  127 => 57,  124 => 56,  119 => 53,  116 => 52,  113 => 51,  107 => 49,  104 => 48,  102 => 45,  101 => 42,  99 => 41,  96 => 40,  93 => 39,  86 => 36,  83 => 35,  80 => 32,  77 => 31,  74 => 30,  71 => 27,  68 => 26,  66 => 23,  61 => 22,  56 => 20,  53 => 19,  51 => 18,  50 => 16,  49 => 12,  47 => 11,  44 => 10,  41 => 9,  37 => 1,  35 => 7,  33 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User/Profile:update.html.twig", "");
    }
}
