<?php

/* OroCustomerBundle:layouts/blank/imports/oro_customer_user_view:layout.html.twig */
class __TwigTemplate_f6118c49048108af07a3e9164103a881ee01fbd01901b05c46704e8ba5c1ea0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_customer_user_view_page_widget' => array($this, 'block__customer_user_view_page_widget'),
            '_customer_user_profile_controls_wrapper_widget' => array($this, 'block__customer_user_profile_controls_wrapper_widget'),
            '_customer_user_profile_controls_widget' => array($this, 'block__customer_user_profile_controls_widget'),
            '_customer_user_view_information_widget' => array($this, 'block__customer_user_view_information_widget'),
            '_customer_user_view_information_content_widget' => array($this, 'block__customer_user_view_information_content_widget'),
            '_customer_user_address_book_widget' => array($this, 'block__customer_user_address_book_widget'),
            '_customer_user_list_link_widget' => array($this, 'block__customer_user_list_link_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_customer_user_view_page_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('_customer_user_profile_controls_wrapper_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_customer_user_profile_controls_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_customer_user_view_information_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('_customer_user_view_information_content_widget', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('_customer_user_address_book_widget', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('_customer_user_list_link_widget', $context, $blocks);
    }

    // line 1
    public function block__customer_user_view_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " {{ class_prefix }}")));
        // line 5
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 8
    public function block__customer_user_profile_controls_wrapper_widget($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["block"] ?? null), "children", array()))) {
            // line 10
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " customer-profile__controls-wrapper")));
            // line 11
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 12
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 17
    public function block__customer_user_profile_controls_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " customer-profile__controls")));
        // line 19
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 24
    public function block__customer_user_view_information_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " customer-profile__box")));
        // line 26
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 27
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 31
    public function block__customer_user_view_information_content_widget($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_view:layout.html.twig", 32);
        // line 33
        echo "    ";
        $context["EmailActions"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_view:layout.html.twig", 33);
        // line 34
        echo "    ";
        $context["Email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_view:layout.html.twig", 34);
        // line 35
        echo "
    <div class=\"info-list\">
        <div class=\"info-list__item\">
            <div class=\"info-list__name\">
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.customer_user.full_name.label"), "html", null, true);
        echo "
            </div>
            <div class=\"info-list__desc\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.full_name", array("%name_prefix%" => $this->getAttribute(        // line 43
($context["customerUser"] ?? null), "namePrefix", array()), "%first_name%" => $this->getAttribute(        // line 44
($context["customerUser"] ?? null), "firstName", array()), "%middle_name%" => $this->getAttribute(        // line 45
($context["customerUser"] ?? null), "middleName", array()), "%last_name%" => $this->getAttribute(        // line 46
($context["customerUser"] ?? null), "lastName", array()), "%name_suffix%" => $this->getAttribute(        // line 47
($context["customerUser"] ?? null), "nameSuffix", array()))));
        // line 49
        echo "
            </div>
        </div>

        ";
        // line 53
        if ( !twig_test_empty($this->getAttribute(($context["customerUser"] ?? null), "birthday", array()))) {
            // line 54
            echo "            ";
            ob_start();
            // line 55
            echo "                ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["customerUser"] ?? null), "birthday", array()));
            echo "
                (";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->getAgeAsString($this->getAttribute(($context["customerUser"] ?? null), "birthday", array()), array("default" => "N/A")), "html", null, true);
            echo ")
            ";
            $context["birthday_string"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 58
            echo "
            <div class=\"info-list__item\">
                <div class=\"info-list__name\">
                    ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.birthday.label"), "html", null, true);
            echo "
                </div>
                <div class=\"info-list__desc\">
                    ";
            // line 64
            echo twig_escape_filter($this->env, ($context["birthday_string"] ?? null), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 68
        echo "
        <div class=\"info-list__item\">
            <div class=\"info-list__name\">
                ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.username.label"), "html", null, true);
        echo "
            </div>
            <div class=\"info-list__desc\">
                ";
        // line 74
        echo $context["Email"]->getemail_address_simple($this->getAttribute(($context["customerUser"] ?? null), "email", array()));
        echo "
            </div>
        </div>

        ";
        // line 78
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_frontend_customer_user_role_view")) {
            // line 79
            echo "            <div class=\"info-list__item\">
                <div class=\"info-list__name\">
                    ";
            // line 81
            if ((twig_length_filter($this->env, $this->getAttribute(($context["customerUser"] ?? null), "roles", array())) == 1)) {
                // line 82
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.role.label"), "html", null, true);
                echo "
                    ";
            } else {
                // line 84
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.roles.label"), "html", null, true);
                echo "
                    ";
            }
            // line 86
            echo "                </div>
                <div class=\"info-list__desc info-list__desc--roles\">
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerUser"] ?? null), "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["customerUserRole"]) {
                // line 89
                echo "                        ";
                echo $context["UI"]->getlink(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_frontend_customer_user_role_view", array("id" => $this->getAttribute(                // line 90
$context["customerUserRole"], "id", array()))), "label" => $this->getAttribute(                // line 91
$context["customerUserRole"], "label", array()), "class" => "info-list__link"));
                // line 93
                echo "
                        <br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customerUserRole'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                </div>
            </div>
        ";
        }
        // line 99
        echo "
        ";
        // line 100
        if (($this->getAttribute(($context["customerUser"] ?? null), "customer", array()) && ($context["companyNameEnabled"] ?? null))) {
            // line 101
            echo "            <div class=\"info-list__item\">
                <div class=\"info-list__name\">
                    ";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.company"), "html", null, true);
            echo "
                </div>
                <div class=\"info-list__desc\">
                    ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerUser"] ?? null), "customer", array()), "name", array()), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 110
        echo "
        <div class=\"info-list__item\">
            <div class=\"info-list__name\">
                ";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.status.label"), "html", null, true);
        echo "
            </div>
            <div class=\"info-list__desc\">
                ";
        // line 116
        if (($this->getAttribute(($context["customerUser"] ?? null), "enabled", array()) == true)) {
            // line 117
            echo "                    <div class=\"info-list-status\">
                        <i class=\"fa fa-check\"></i>
                        ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.statuses.active"), "html", null, true);
            echo "
                    </div>
                ";
        } else {
            // line 122
            echo "                    <div class=\"info-list-status info-list-status--disabled\">
                        <i class=\"fa fa-ban\"></i>
                        ";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.statuses.inactive"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 127
        echo "
                ";
        // line 128
        if (($this->getAttribute(($context["customerUser"] ?? null), "confirmed", array()) == true)) {
            // line 129
            echo "                    <div class=\"info-list-status\">
                        <i class=\"fa fa-check\"></i>
                        ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.statuses.confirmed"), "html", null, true);
            echo "
                    </div>
                ";
        } else {
            // line 134
            echo "                    <div class=\"info-list-status info-list-status--disabled\">
                        <i class=\"fa fa-ban\"></i>
                        ";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.statuses.unconfirmed"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 139
        echo "            </div>
        </div>

        ";
        // line 142
        if (twig_length_filter($this->env, $this->getAttribute(($context["customerUser"] ?? null), "salesRepresentatives", array()))) {
            // line 143
            echo "            <div class=\"info-list__item\">
                <div class=\"info-list__name\">
                    ";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.sales_representatives.label"), "html", null, true);
            echo "
                </div>
                <div class=\"info-list__desc\">
                    ";
            // line 148
            echo $context["UI"]->getentityViewLinks($this->getAttribute(($context["customerUser"] ?? null), "salesRepresentatives", array()), "fullName");
            echo "
                </div>
            </div>
        ";
        }
        // line 152
        echo "    </div>
";
    }

    // line 155
    public function block__customer_user_address_book_widget($context, array $blocks = array())
    {
        // line 156
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 157
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 161
    public function block__customer_user_list_link_widget($context, array $blocks = array())
    {
        // line 162
        echo "    <div class=\"\">
        ";
        // line 163
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/imports/oro_customer_user_view:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  398 => 163,  395 => 162,  392 => 161,  385 => 157,  380 => 156,  377 => 155,  372 => 152,  365 => 148,  359 => 145,  355 => 143,  353 => 142,  348 => 139,  342 => 136,  338 => 134,  332 => 131,  328 => 129,  326 => 128,  323 => 127,  317 => 124,  313 => 122,  307 => 119,  303 => 117,  301 => 116,  295 => 113,  290 => 110,  283 => 106,  277 => 103,  273 => 101,  271 => 100,  268 => 99,  263 => 96,  255 => 93,  253 => 91,  252 => 90,  250 => 89,  246 => 88,  242 => 86,  236 => 84,  230 => 82,  228 => 81,  224 => 79,  222 => 78,  215 => 74,  209 => 71,  204 => 68,  197 => 64,  191 => 61,  186 => 58,  181 => 56,  176 => 55,  173 => 54,  171 => 53,  165 => 49,  163 => 47,  162 => 46,  161 => 45,  160 => 44,  159 => 43,  158 => 42,  152 => 39,  146 => 35,  143 => 34,  140 => 33,  137 => 32,  134 => 31,  127 => 27,  122 => 26,  119 => 25,  116 => 24,  109 => 20,  104 => 19,  101 => 18,  98 => 17,  90 => 12,  85 => 11,  82 => 10,  79 => 9,  76 => 8,  67 => 5,  65 => 3,  63 => 2,  60 => 1,  56 => 161,  53 => 160,  51 => 155,  48 => 154,  46 => 31,  43 => 30,  41 => 24,  38 => 23,  36 => 17,  33 => 16,  31 => 8,  28 => 7,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_view:layout.html.twig", "");
    }
}
