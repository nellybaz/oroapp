<?php

/* OroCustomerBundle:layouts/blank/imports/oro_customer_user_form:layout.html.twig */
class __TwigTemplate_aed61483c9f2db7ec59819d829972ce61cdff5b0d8889151b37ce70db71bc2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_customer_user_page_widget' => array($this, 'block__customer_user_page_widget'),
            '__oro_customer_user_form__customer_user_form_fields_widget' => array($this, 'block___oro_customer_user_form__customer_user_form_fields_widget'),
            '__oro_customer_user_form__customer_user_form_fields_information_widget' => array($this, 'block___oro_customer_user_form__customer_user_form_fields_information_widget'),
            '__oro_customer_user_form__customer_user_form_fields_password_widget' => array($this, 'block___oro_customer_user_form__customer_user_form_fields_password_widget'),
            '__oro_customer_user_form__customer_user_form_fields_roles_widget' => array($this, 'block___oro_customer_user_form__customer_user_form_fields_roles_widget'),
            '__oro_customer_user_form__customer_user_form_actions_widget' => array($this, 'block___oro_customer_user_form__customer_user_form_actions_widget'),
            '__oro_customer_user_form__customer_user_form_required_label_widget' => array($this, 'block___oro_customer_user_form__customer_user_form_required_label_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_customer_user_page_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('__oro_customer_user_form__customer_user_form_fields_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('__oro_customer_user_form__customer_user_form_fields_information_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('__oro_customer_user_form__customer_user_form_fields_password_widget', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('__oro_customer_user_form__customer_user_form_fields_roles_widget', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('__oro_customer_user_form__customer_user_form_actions_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('__oro_customer_user_form__customer_user_form_required_label_widget', $context, $blocks);
    }

    // line 1
    public function block__customer_user_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " customer_user_form", "data-focusable" => true));
        // line 6
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 9
    public function block___oro_customer_user_form__customer_user_form_fields_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("form" =>         // line 11
($context["form"] ?? null)));
        // line 13
        echo "    ";
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
";
    }

    // line 17
    public function block___oro_customer_user_form__customer_user_form_fields_information_widget($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"form-group\">
        <div class=\"grid\">
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12 grid__column--offset-y\">
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.customer"))));
        echo "
                </div>
                ";
        // line 24
        if ($this->getAttribute(($context["form"] ?? null), "enabled", array(), "any", true, true)) {
            // line 25
            echo "                    <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                        ";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(""))));
            echo "
                    </div>
                ";
        }
        // line 29
        echo "            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.email"))));
        echo "
                </div>
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.name_prefix"))));
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.first_name"))));
        echo "
                </div>
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.middle_name"))));
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.last_name"))));
        echo "
                </div>
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.name_suffix"))));
        echo "
                </div>
            </div>
            ";
        // line 54
        if ($this->getAttribute(($context["form"] ?? null), "sendEmail", array(), "any", true, true)) {
            // line 55
            echo "                <div class=\"grid__row grid__row--offset-none\">
                    <div class=\"grid__column grid__column--12 grid__column--offset-y\">
                        ";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sendEmail", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(""))));
            echo "
                    </div>
                </div>
            ";
        }
        // line 61
        echo "            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--4 grid__column--offset-y\">
                    <div class=\"datepicker-box datepicker-box--form-mode\">
                        <span class=\"datepicker-box__icon\"><i class=\"fa-calendar\"></i></span>
                        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "birthday", array()), 'row', array("attr" => array("class" => "datepicker-input input input--full", "max" => twig_date_format_filter($this->env, "now", "Y-m-d")), "parentClass" => "", "datePickerOptions" => array("maxDate" => 0)));
        // line 74
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 82
    public function block___oro_customer_user_form__customer_user_form_fields_password_widget($context, array $blocks = array())
    {
        // line 83
        echo "    <div class=\"form-group\">
        <legend>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.form.sections.password.label"), "html", null, true);
        echo "</legend>
        <div class=\"grid\">
            ";
        // line 86
        $context["form"] = (($this->getAttribute(($context["form"] ?? null), "changePassword", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["form"] ?? null), "changePassword", array()), ($context["form"] ?? null))) : (($context["form"] ?? null)));
        // line 87
        echo "
            ";
        // line 88
        if ($this->getAttribute(($context["form"] ?? null), "currentPassword", array(), "any", true, true)) {
            // line 89
            echo "            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currentPassword", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.current_password")), "parentClass" => "current_password"));
            echo "
                </div>
            </div>
            ";
        }
        // line 95
        echo "
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.new_password"), "autocomplete" => "new-password"), "parentClass" => "password_first"));
        // line 104
        echo "
                </div>
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.placeholder.password_confirmation")), "parentClass" => "password_second"));
        echo "
                </div>
            </div>

            ";
        // line 111
        if ($this->getAttribute(($context["form"] ?? null), "passwordGenerate", array(), "any", true, true)) {
            // line 112
            echo "            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(            // line 115
($context["form"] ?? null), "passwordGenerate", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("")), "parentClass" => "profile__form__col form__col_x6 password-trigger"));
            // line 123
            echo "
                    <span data-page-component-module=\"orouser/js/components/password-generate\"
                          data-page-component-options=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("checkbox" => "[data-name=\"field__password-generate\"]", "passwordInput" => "[data-name=\"field__first\"]")), "html", null, true);
            echo "\"></span>
                </div>
            </div>
            ";
        }
        // line 129
        echo "        </div>
    </div>
";
    }

    // line 133
    public function block___oro_customer_user_form__customer_user_form_fields_roles_widget($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "roles", array(), "any", true, true)) {
            // line 135
            echo "    <div class=\"form-group\">
        <legend>";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.form.sections.roles.label"), "html", null, true);
            echo "</legend>
        <div class=\"grid\">
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6 grid__column--offset-y\">
                    ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "roles", array()), 'row');
            echo "
                </div>
            </div>
        </div>
    </div>
    ";
        }
    }

    // line 148
    public function block___oro_customer_user_form__customer_user_form_actions_widget($context, array $blocks = array())
    {
        // line 149
        echo "    <div class=\"form-buttons\">
        ";
        // line 150
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 154
    public function block___oro_customer_user_form__customer_user_form_required_label_widget($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " required-label"));
        // line 158
        echo "
    <p ";
        // line 159
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "><sup>*</sup> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.label.required"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/imports/oro_customer_user_form:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  317 => 159,  314 => 158,  311 => 155,  308 => 154,  301 => 150,  298 => 149,  295 => 148,  284 => 140,  277 => 136,  274 => 135,  271 => 134,  268 => 133,  262 => 129,  255 => 125,  251 => 123,  249 => 115,  248 => 114,  244 => 112,  242 => 111,  235 => 107,  230 => 104,  228 => 98,  223 => 95,  216 => 91,  212 => 89,  210 => 88,  207 => 87,  205 => 86,  200 => 84,  197 => 83,  194 => 82,  184 => 74,  182 => 65,  176 => 61,  169 => 57,  165 => 55,  163 => 54,  157 => 51,  151 => 48,  143 => 43,  137 => 40,  129 => 35,  123 => 32,  118 => 29,  112 => 26,  109 => 25,  107 => 24,  102 => 22,  96 => 18,  93 => 17,  87 => 14,  82 => 13,  80 => 11,  78 => 10,  75 => 9,  66 => 6,  63 => 2,  60 => 1,  56 => 154,  53 => 153,  51 => 148,  48 => 147,  46 => 133,  43 => 132,  41 => 82,  38 => 81,  36 => 17,  33 => 16,  31 => 9,  28 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/imports/oro_customer_user_form:layout.html.twig", "");
    }
}
