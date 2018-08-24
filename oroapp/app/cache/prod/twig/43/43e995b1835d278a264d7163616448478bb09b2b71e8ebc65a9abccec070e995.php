<?php

/* OroUserBundle:User:update.html.twig */
class __TwigTemplate_3032430443d2d438529e8ee6ab4e5d40d3893c1c79edb4613a0eee9769893d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroUserBundle:User:update.html.twig", 1);
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
($context["fullname"] ?? null), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_label"))));
        // line 7
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_create")));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_index")), "method"), "html", null, true);
        echo "
    ";
        // line 23
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_user_view", "params" => array("id" => "\$id"))), "method");
        // line 27
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_create")) {
            // line 28
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_user_create")), "method"));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_user_update"))) {
            // line 33
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_user_update", "params" => array("id" => "\$id"))), "method"));
            // line 37
            echo "    ";
        }
        // line 38
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 39
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 44
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 45
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_plural_label"), "entityTitle" =>             // line 48
($context["fullname"] ?? null));
            // line 51
            echo "        ";
            $context["avatar"] = $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getConfiguredImageUrl($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "avatar");
            // line 52
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 54
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_label")));
            // line 55
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroUserBundle:User:update.html.twig", 55)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 56
            echo "    ";
        }
    }

    // line 59
    public function block_stats($context, array $blocks = array())
    {
        // line 60
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "updatedAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.last_login.label"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "lastLogin", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "lastLogin", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.login_count.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "loginCount", array()), 0)) : (0)), "html", null, true);
        echo "</li>
";
    }

    // line 66
    public function block_content_data($context, array $blocks = array())
    {
        // line 67
        echo "<div class=\"user-profile-cols\">
    ";
        // line 68
        $context["id"] = "user-profile";
        // line 69
        echo "
    ";
        // line 70
        $context["formRows"] = array(0 => (($this->getAttribute(        // line 71
($context["form"] ?? null), "enabled", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'row')) : ("")), 1 =>         // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'row'), 2 => (($this->getAttribute(        // line 73
($context["form"] ?? null), "plainPassword", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), 'row')) : ("")), 3 =>         // line 74
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row'), 4 =>         // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row'), 5 =>         // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row'), 6 =>         // line 77
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row'), 7 =>         // line 78
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row'), 8 =>         // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "birthday", array()), 'row'), 9 =>         // line 80
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "avatar", array()), 'row'), 10 => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 81
($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ("") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "inviteUser", array()), 'row'))));
        // line 83
        echo "
    ";
        // line 84
        if ($this->getAttribute(($context["form"] ?? null), "passwordGenerate", array(), "any", true, true)) {
            // line 85
            echo "        ";
            $context["formRows"] = twig_array_merge(($context["formRows"] ?? null), array(0 =>             // line 86
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "passwordGenerate", array()), 'row')));
            // line 88
            echo "        <span data-page-component-module=\"orouser/js/components/password-generate\"
              data-page-component-options=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("checkbox" => "[data-name=\"field__password-generate\"]", "passwordInput" => "[data-name=\"field__first\"],[data-name=\"field__second\"]")), "html", null, true);
            // line 92
            echo "\"></span>
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" =>         // line 101
($context["formRows"] ?? null)), 1 => array("title" => "", "data" => array(0 =>         // line 106
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row'), 1 => $this->getAttribute(        // line 107
($context["UI"] ?? null), "collectionField", array(0 => $this->getAttribute(($context["form"] ?? null), "emails", array()), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.emails.label"), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add another email")), "method"), 2 =>         // line 108
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row'))))));
        // line 113
        echo "
    ";
        // line 114
        $context["additionalData"] = array();
        // line 115
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 116
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 117
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 119
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 124
($context["additionalData"] ?? null))))));
            // line 127
            echo "    ";
        }
        // line 128
        echo "
    ";
        // line 129
        $context["hasGroups"] = $this->getAttribute(($context["form"] ?? null), "groups", array(), "any", true, true);
        // line 130
        echo "    ";
        $context["hasRoles"] = $this->getAttribute(($context["form"] ?? null), "roles", array(), "any", true, true);
        // line 131
        echo "    ";
        if ((($context["hasGroups"] ?? null) || ($context["hasRoles"] ?? null))) {
            // line 132
            echo "        ";
            ob_start();
            // line 133
            echo "            ";
            if (($context["hasGroups"] ?? null)) {
                // line 134
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "groups", array()), 'row', array("attr" => array("class" => "horizontal")));
                echo "
            ";
            }
            // line 136
            echo "        ";
            $context["userGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 137
            echo "
        ";
            // line 138
            ob_start();
            // line 139
            echo "            ";
            if (($context["hasRoles"] ?? null)) {
                // line 140
                echo "                <div class=\"form-horizontal\" id=\"roles-list\">
                    ";
                // line 141
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "roles", array()), 'row', array("attr" => array("class" => "horizontal")));
                echo "
                </div>
            ";
            }
            // line 144
            echo "        ";
            $context["userRoles"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 145
            echo "
        ";
            // line 146
            $context["title"] = "";
            // line 147
            echo "        ";
            if ((($context["hasGroups"] ?? null) && ($context["hasRoles"] ?? null))) {
                // line 148
                echo "            ";
                $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%groups% and %roles%", array("%groups%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.groups.label"), "%roles%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.roles.label")));
                // line 152
                echo "        ";
            } elseif (($context["hasGroups"] ?? null)) {
                // line 153
                echo "            ";
                $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.groups.label");
                // line 154
                echo "        ";
            } elseif (($context["hasRoles"] ?? null)) {
                // line 155
                echo "            ";
                $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.roles.label");
                // line 156
                echo "        ";
            }
            // line 157
            echo "
        ";
            // line 158
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" =>             // line 159
($context["title"] ?? null), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 163
($context["userGroups"] ?? null), 1 => ($context["userRoles"] ?? null)))))));
            // line 167
            echo "    ";
        }
        // line 168
        echo "
    ";
        // line 169
        if ($this->getAttribute(($context["form"] ?? null), "organizations", array(), "any", true, true)) {
            // line 170
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Access Settings"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>             // line 175
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "organizations", array()), 'row')))))));
            // line 178
            echo "    ";
        }
        // line 179
        echo "
    ";
        // line 180
        if ($this->getAttribute(($context["form"] ?? null), "change_password", array(), "any", true, true)) {
            // line 181
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.label"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 187
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "change_password", array()), 'widget')))))));
            // line 192
            echo "    ";
        }
        // line 193
        echo "
    ";
        // line 194
        $context["data"] = array("formErrors" => ((        // line 195
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 196
($context["dataBlocks"] ?? null));
        // line 198
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 198,  351 => 196,  350 => 195,  349 => 194,  346 => 193,  343 => 192,  341 => 187,  339 => 181,  337 => 180,  334 => 179,  331 => 178,  329 => 175,  327 => 170,  325 => 169,  322 => 168,  319 => 167,  317 => 163,  316 => 159,  315 => 158,  312 => 157,  309 => 156,  306 => 155,  303 => 154,  300 => 153,  297 => 152,  294 => 148,  291 => 147,  289 => 146,  286 => 145,  283 => 144,  277 => 141,  274 => 140,  271 => 139,  269 => 138,  266 => 137,  263 => 136,  257 => 134,  254 => 133,  251 => 132,  248 => 131,  245 => 130,  243 => 129,  240 => 128,  237 => 127,  235 => 124,  233 => 119,  230 => 118,  223 => 117,  220 => 116,  214 => 115,  212 => 114,  209 => 113,  207 => 108,  206 => 107,  205 => 106,  204 => 101,  203 => 95,  200 => 94,  196 => 92,  194 => 89,  191 => 88,  189 => 86,  187 => 85,  185 => 84,  182 => 83,  180 => 81,  179 => 80,  178 => 79,  177 => 78,  176 => 77,  175 => 76,  174 => 75,  173 => 74,  172 => 73,  171 => 72,  170 => 71,  169 => 70,  166 => 69,  164 => 68,  161 => 67,  158 => 66,  150 => 63,  144 => 62,  138 => 61,  131 => 60,  128 => 59,  123 => 56,  120 => 55,  117 => 54,  111 => 52,  108 => 51,  106 => 48,  105 => 45,  103 => 44,  100 => 43,  97 => 42,  91 => 39,  86 => 38,  83 => 37,  80 => 33,  77 => 32,  74 => 31,  71 => 28,  68 => 27,  66 => 23,  61 => 22,  56 => 20,  53 => 19,  51 => 18,  50 => 16,  49 => 12,  47 => 11,  44 => 10,  41 => 9,  37 => 1,  35 => 7,  33 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User:update.html.twig", "");
    }
}
