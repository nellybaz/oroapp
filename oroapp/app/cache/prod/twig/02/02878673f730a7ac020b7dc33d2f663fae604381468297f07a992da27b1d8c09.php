<?php

/* OroCustomerBundle:CustomerUser/widget:info.html.twig */
class __TwigTemplate_f0138fa948e092e877007ad85c106b67b8f8e8c815a55f194ba3af5cf396d3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCustomerBundle:CustomerUser/widget:info.html.twig", 1);
        // line 2
        $context["EmailActions"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroCustomerBundle:CustomerUser/widget:info.html.twig", 2);
        // line 3
        $context["Email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroCustomerBundle:CustomerUser/widget:info.html.twig", 3);
        // line 4
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCustomerBundle:CustomerUser/widget:info.html.twig", 4);
        // line 5
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 9
        if ($this->getAttribute(($context["entity"] ?? null), "namePrefix", array(), "any", true, true)) {
            // line 10
            echo "                ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.name_prefix.label"), $this->getAttribute(($context["entity"] ?? null), "namePrefix", array()));
            echo "
            ";
        }
        // line 12
        echo "            ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.first_name.label"), $this->getAttribute(($context["entity"] ?? null), "firstName", array()));
        echo "
            ";
        // line 13
        if ($this->getAttribute(($context["entity"] ?? null), "middleName", array(), "any", true, true)) {
            // line 14
            echo "                ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.middle_name.label"), $this->getAttribute(($context["entity"] ?? null), "middleName", array()));
            echo "
            ";
        }
        // line 16
        echo "            ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.last_name.label"), $this->getAttribute(($context["entity"] ?? null), "lastName", array()));
        echo "
            ";
        // line 17
        if ($this->getAttribute(($context["entity"] ?? null), "nameSuffix", array(), "any", true, true)) {
            // line 18
            echo "                ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.name_suffix.label"), $this->getAttribute(($context["entity"] ?? null), "nameSuffix", array()));
            echo "
            ";
        }
        // line 20
        echo "
            ";
        // line 21
        ob_start();
        // line 22
        echo "                ";
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")) : ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "birthday", array())))), "html", null, true);
        echo "
                ";
        // line 23
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) {
            // line 24
            echo "                    (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->getAgeAsString($this->getAttribute(($context["entity"] ?? null), "birthday", array()), array("default" => "N/A")), "html", null, true);
            echo ")
                ";
        }
        // line 26
        echo "            ";
        $context["birthday_string"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "            ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.birthday.label"), ($context["birthday_string"] ?? null));
        echo "
            ";
        // line 28
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.email.label"), $context["Email"]->getemail_address_simple($this->getAttribute(($context["entity"] ?? null), "email", array())));
        echo "

            ";
        // line 30
        if ($this->getAttribute(($context["entity"] ?? null), "customer", array())) {
            // line 31
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.customer.label"), $context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customer", array()), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "name", array()), "oro_customer_customer_view"));
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_customer_user_role_view")) {
            // line 35
            echo "                ";
            $context["roles"] = array();
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entityRole"]) {
                // line 37
                echo "                    ";
                $context["roles"] = twig_array_merge(($context["roles"] ?? null), array(0 => twig_escape_filter($this->env, $this->getAttribute($context["entityRole"], "label", array()))));
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityRole'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                ";
            echo $context["UI"]->getrenderHTMLProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.roles.label"), twig_join_filter(($context["roles"] ?? null), "<br />"));
            echo "
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "salesRepresentatives", array()))) {
            // line 43
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.sales_representatives.label"), $context["UI"]->getentityViewLinks($this->getAttribute(($context["entity"] ?? null), "salesRepresentatives", array()), "fullName", "oro_user_view"));
            echo "
            ";
        }
        // line 45
        echo "            ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.is_guest.label"), (($this->getAttribute(($context["entity"] ?? null), "isGuest", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.is_guest_yes.label")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.is_guest_no.label"))));
        // line 49
        echo "

            ";
        // line 51
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUser/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 51,  148 => 49,  145 => 45,  139 => 43,  137 => 42,  134 => 41,  128 => 39,  122 => 38,  119 => 37,  114 => 36,  111 => 35,  109 => 34,  106 => 33,  100 => 31,  98 => 30,  93 => 28,  88 => 27,  85 => 26,  79 => 24,  77 => 23,  72 => 22,  70 => 21,  67 => 20,  61 => 18,  59 => 17,  54 => 16,  48 => 14,  46 => 13,  41 => 12,  35 => 10,  33 => 9,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUser/widget:info.html.twig", "");
    }
}
