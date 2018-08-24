<?php

/* OroRFPBundle:Request/widget:info.html.twig */
class __TwigTemplate_4c298be807e2a56713ec858b00d048f32d3147a522a43a751ce023ff7b7c4561 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroRFPBundle:Request/widget:info.html.twig", 1);
        // line 2
        $context["EmailActions"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroRFPBundle:Request/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroRFPBundle:Request/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.first_name.label"), $this->getAttribute(($context["entity"] ?? null), "firstName", array()));
        echo "
            ";
        // line 9
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.last_name.label"), $this->getAttribute(($context["entity"] ?? null), "lastName", array()));
        echo "
            ";
        // line 10
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.email.label"), $context["EmailActions"]->getsendEmailLink($this->getAttribute(($context["entity"] ?? null), "email", array()), ($context["entity"] ?? null)));
        echo "
            ";
        // line 11
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.phone.label"), $this->getAttribute(($context["entity"] ?? null), "phone", array()));
        echo "
            ";
        // line 12
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.company.label"), (($this->getAttribute(($context["entity"] ?? null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "company", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        echo "
            ";
        // line 13
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.role.label"), (($this->getAttribute(($context["entity"] ?? null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "role", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        echo "
            ";
        // line 14
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.po_number.label"), (($this->getAttribute(($context["entity"] ?? null), "poNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "poNumber", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        echo "
            ";
        // line 15
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.ship_until.label"), _twig_default_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "shipUntil", array())), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")));
        echo "
            ";
        // line 16
        if ($this->getAttribute(($context["entity"] ?? null), "customer", array())) {
            // line 17
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.customer.label"), $context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customer", array()), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "name", array()), "oro_customer_customer_view"));
            echo "
            ";
        }
        // line 19
        echo "            ";
        if ($this->getAttribute(($context["entity"] ?? null), "customerUser", array())) {
            // line 20
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.customer_user.label"), $context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customerUser", array()), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customerUser", array()), "fullName", array()), "oro_customer_customer_user_view"));
            echo "
            ";
        }
        // line 22
        echo "            ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.internal_status.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "internalStatus", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "internalStatus", array(), "any", false, true), "name", array()), "")) : ("")));
        echo "
            ";
        // line 23
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.customer_status.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customerStatus", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customerStatus", array(), "any", false, true), "name", array()), "")) : ("")));
        echo "
            ";
        // line 24
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "assignedUsers", array()))) {
            // line 25
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.assigned_users.label"), $context["UI"]->getentityViewLinks($this->getAttribute(($context["entity"] ?? null), "assignedUsers", array()), "fullName", "oro_user_view"));
            echo "
            ";
        }
        // line 27
        echo "            ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "assignedCustomerUsers", array()))) {
            // line 28
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.assigned_customer_users.label"), $context["UI"]->getentityViewLinks($this->getAttribute(($context["entity"] ?? null), "assignedCustomerUsers", array()), "fullName", "oro_customer_customer_user_view"));
            echo "
            ";
        }
        // line 30
        echo "        </div>
        <div class=\"responsive-block\">
            ";
        // line 32
        echo $context["UI"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.note.label"), $this->getAttribute(($context["entity"] ?? null), "note", array()));
        echo "

            ";
        // line 34
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:Request/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  110 => 32,  106 => 30,  100 => 28,  97 => 27,  91 => 25,  89 => 24,  85 => 23,  80 => 22,  74 => 20,  71 => 19,  65 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:Request/widget:info.html.twig", "");
    }
}
