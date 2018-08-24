<?php

/* OroOrderBundle:Order/widget:info.html.twig */
class __TwigTemplate_22ac6b004911da17ff329adea749505037f3a1b6843fa53a47b229d7de141b8d extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroOrderBundle:Order/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroOrderBundle:Order/widget:info.html.twig", 2);
        // line 3
        $context["currency"] = $this->loadTemplate("OroCurrencyBundle::macros.html.twig", "OroOrderBundle:Order/widget:info.html.twig", 3);
        // line 4
        $context["address"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroOrderBundle:Order/widget:info.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo "  ";
        $context["sourceDocumenttitle"] = $this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderExtension')->formatSourceDocument($this->getAttribute(($context["order"] ?? null), "sourceEntityClass", array()), $this->getAttribute(        // line 9
($context["order"] ?? null), "sourceEntityId", array()), $this->getAttribute(        // line 10
($context["order"] ?? null), "sourceEntityIdentifier", array()));
        // line 12
        echo "
  <i class=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->getAttribute(($context["order"] ?? null), "sourceEntityClass", array()), "icon"), "html", null, true);
        echo "\"></i>
  ";
        // line 14
        if (( !(null === ($context["sourceEntity"] ?? null)) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["sourceEntity"] ?? null)))) {
            // line 15
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getViewLink($this->getAttribute(($context["order"] ?? null), "sourceEntityClass", array()), $this->getAttribute(($context["order"] ?? null), "sourceEntityId", array())), "html", null, true);
            echo "\">
          ";
            // line 16
            echo twig_escape_filter($this->env, ($context["sourceDocumenttitle"] ?? null), "html", null, true);
            echo "
      </a>
  ";
        } else {
            // line 19
            echo "      ";
            echo twig_escape_filter($this->env, ((array_key_exists("sourceDocumenttitle", $context)) ? (_twig_default_filter(($context["sourceDocumenttitle"] ?? null), "N/A")) : ("N/A")), "html", null, true);
            echo "
  ";
        }
        $context["sourceEntityBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 26
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.identifier.label"), $this->getAttribute(($context["order"] ?? null), "identifier", array()));
        echo "
            ";
        // line 27
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.po_number.label"), $this->getAttribute(($context["order"] ?? null), "poNumber", array()));
        echo "
            ";
        // line 28
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.currency.label"), $this->getAttribute(($context["order"] ?? null), "currency", array()));
        echo "
            ";
        // line 29
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.subtotal.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["order"] ?? null), "subtotal", array()), array("currency" => $this->getAttribute(($context["order"] ?? null), "currency", array()))));
        echo "
            ";
        // line 30
        echo $context["currency"]->getconvert_to_base_currency($this->getAttribute(($context["order"] ?? null), "subtotalObject", array()), "", ($context["order"] ?? null), "subtotal");
        echo "

            ";
        // line 32
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.customer.label"),         // line 34
$context["UI"]->getentityViewLink($this->getAttribute(($context["order"] ?? null), "customer", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["order"] ?? null), "customer", array())), "oro_customer_customer_view"));
        // line 35
        echo "

            ";
        // line 37
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.customer_user.label"),         // line 39
$context["UI"]->getentityViewLink($this->getAttribute(($context["order"] ?? null), "customerUser", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["order"] ?? null), "customerUser", array())), "oro_customer_customer_user_view"));
        // line 40
        echo "

            ";
        // line 42
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.internal_status.label"), (($this->getAttribute($this->getAttribute(($context["order"] ?? null), "internalStatus", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["order"] ?? null), "internalStatus", array(), "any", false, true), "name", array()), "")) : ("")));
        echo "
            ";
        // line 43
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.ship_until.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["order"] ?? null), "shipUntil", array())));
        echo "
            ";
        // line 44
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.source_document.label"), ($context["sourceEntityBlock"] ?? null));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 48
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.billing_address.label"), $context["address"]->getrenderAddress($this->getAttribute(($context["order"] ?? null), "billingAddress", array())));
        echo "
            ";
        // line 49
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_address.label"), $context["address"]->getrenderAddress($this->getAttribute(($context["order"] ?? null), "shippingAddress", array())));
        echo "
            ";
        // line 50
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.customer_notes.label"), $this->getAttribute(($context["order"] ?? null), "customerNotes", array()));
        echo "
        </div>
        <div class=\"responsive-block\">
            ";
        // line 53
        echo $context["entityConfig"]->getrenderDynamicFields(($context["order"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  128 => 50,  124 => 49,  120 => 48,  113 => 44,  109 => 43,  105 => 42,  101 => 40,  99 => 39,  98 => 37,  94 => 35,  92 => 34,  91 => 32,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  64 => 22,  57 => 19,  51 => 16,  46 => 15,  44 => 14,  40 => 13,  37 => 12,  35 => 10,  34 => 9,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/widget:info.html.twig", "");
    }
}
