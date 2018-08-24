<?php

/* OroMagentoBundle:Customer/widget:info.html.twig */
class __TwigTemplate_515f2c92674bfcefd5dad2bbab05afc76b6542a4b436f3021ba9c6d55c6f78ce extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Customer/widget:info.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroMagentoBundle:Customer/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroMagentoBundle:Customer/widget:info.html.twig", 3);
        // line 4
        $context["channel"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroMagentoBundle:Customer/widget:info.html.twig", 4);
        // line 5
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 9
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.email.label"), $context["email"]->getrenderEmailWithActions($this->getAttribute(($context["entity"] ?? null), "email", array()), $this->getAttribute(($context["entity"] ?? null), "contact", array())));
        echo "
            ";
        // line 10
        if ($this->getAttribute(($context["entity"] ?? null), "group", array())) {
            // line 11
            echo "                ";
            echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.group.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "group", array()), "name", array()));
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ($this->getAttribute(($context["entity"] ?? null), "channel", array())) {
            // line 15
            echo "                ";
            echo $context["channel"]->getrenderChannelProperty(($context["entity"] ?? null), "oro.magento.customer.data_channel.label");
            echo "
                ";
            // line 16
            echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.channel.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "name", array()));
            echo "
            ";
        }
        // line 18
        echo "
            ";
        // line 19
        if ($this->getAttribute(($context["entity"] ?? null), "website", array())) {
            // line 20
            echo "                ";
            echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.website.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "website", array()), "name", array()));
            echo "
            ";
        }
        // line 22
        echo "            ";
        if ($this->getAttribute(($context["entity"] ?? null), "store", array())) {
            // line 23
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.store.label"), nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "name", array()))));
            echo "
            ";
        }
        // line 26
        if ($this->getAttribute(($context["entity"] ?? null), "guest", array())) {
            // line 27
            echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.guest.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.guest.yes"));
        }
        // line 29
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.imported_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "importedAt", array())));
        echo "
            ";
        // line 30
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.synced_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "syncedAt", array())));
        echo "

            ";
        // line 32
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
        <div class=\"responsive-block\">
            ";
        // line 35
        if ($this->getAttribute(($context["entity"] ?? null), "contact", array())) {
            // line 36
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.contact.label"),             // line 38
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "contact", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "contact", array())), "oro_contact_view"));
            // line 39
            echo "
            ";
        }
        // line 42
        ob_start();
        // line 43
        echo (( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) : (null));
        echo "
                ";
        // line 44
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) {
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->getAgeAsString($this->getAttribute(($context["entity"] ?? null), "birthday", array()), array("default" => "N/A")), "html", null, true);
            echo ")";
        }
        $context["birthdayData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.birthday.label"), (($this->getAttribute(($context["entity"] ?? null), "birthday", array())) ? (($context["birthdayData"] ?? null)) : (null)));
        echo "
            ";
        // line 48
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.gender.label"), $this->env->getExtension('Oro\Bundle\UserBundle\Twig\OroUserExtension')->getGenderLabel($this->getAttribute(($context["entity"] ?? null), "gender", array())));
        echo "
            ";
        // line 49
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.vat.label"), $this->getAttribute(($context["entity"] ?? null), "vat", array()));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  127 => 48,  123 => 47,  116 => 44,  112 => 43,  110 => 42,  106 => 39,  104 => 38,  102 => 36,  100 => 35,  94 => 32,  89 => 30,  85 => 29,  82 => 27,  80 => 26,  74 => 23,  71 => 22,  65 => 20,  63 => 19,  60 => 18,  55 => 16,  50 => 15,  48 => 14,  45 => 13,  39 => 11,  37 => 10,  33 => 9,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer/widget:info.html.twig", "");
    }
}
