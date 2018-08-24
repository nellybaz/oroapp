<?php

/* OroPaymentBundle:PaymentMethodsConfigsRule:view.html.twig */
class __TwigTemplate_872f81b3e6abc39ae47ac8ea2804f75651489a2ec5152344b825988155d6d697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule:view.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule:view.html.twig", 3);
        // line 4
        $context["PayRuleMacro"] = $this->loadTemplate("OroPaymentBundle:PaymentMethodsConfigsRule:macros.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule:view.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%label%" => (($this->getAttribute($this->getAttribute(        // line 6
($context["entity"] ?? null), "rule", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array(), "any", false, true), "name", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 10
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_methods_configs_rule_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.paymentmethodsconfigsrule.entity_short_plural_label"), "entityTitle" => (($this->getAttribute($this->getAttribute(        // line 13
($context["entity"] ?? null), "rule", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array(), "any", false, true), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 15
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_content_data($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 23
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.name.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "name", array()));
        echo "
                ";
        // line 24
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.enabled.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "enabled", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.enabled_yes.label")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.enabled_no.label"))));
        // line 28
        echo "
                ";
        // line 29
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.sort_order.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "sortOrder", array()));
        echo "
                ";
        // line 30
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.paymentmethodsconfigsrule.currency.label"), $this->getAttribute(($context["entity"] ?? null), "currency", array()));
        echo "
                ";
        // line 31
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.expression.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "expression", array()));
        echo "

                ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "destinations", array()), "count", array())) {
            // line 34
            echo "                    ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.paymentmethodsconfigsrule.destinations.label"),             // line 36
$context["UI"]->getrenderList($this->getAttribute(($context["entity"] ?? null), "destinations", array())));
            echo "
                ";
        }
        // line 38
        echo "
                ";
        // line 39
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "methodConfigs", array()), "count", array())) {
            // line 40
            echo "                    ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.paymentmethodsconfigsrule.method_configs.label"),             // line 42
$context["PayRuleMacro"]->getrenderPaymentMethodsConfigs($this->getAttribute(($context["entity"] ?? null), "methodConfigs", array()), $this->getAttribute(($context["entity"] ?? null), "currency", array())));
            echo "
                ";
        }
        // line 44
        echo "            </div>
            <div class=\"responsive-block\">
                ";
        // line 46
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
            </div>
        </div>";
        $context["paymentRuleInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.block_titles.general.label"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 56
($context["paymentRuleInformation"] ?? null))))));
        // line 60
        echo "
    ";
        // line 61
        $context["id"] = "payment-rule-view";
        // line 62
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 63
        echo "
    ";
        // line 64
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 67
    public function block_stats($context, array $blocks = array())
    {
        // line 68
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentMethodsConfigsRule:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 68,  137 => 67,  131 => 64,  128 => 63,  125 => 62,  123 => 61,  120 => 60,  118 => 56,  117 => 51,  111 => 46,  107 => 44,  102 => 42,  100 => 40,  98 => 39,  95 => 38,  90 => 36,  88 => 34,  86 => 33,  81 => 31,  77 => 30,  73 => 29,  70 => 28,  68 => 24,  64 => 23,  60 => 21,  58 => 20,  55 => 18,  48 => 15,  46 => 13,  45 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentMethodsConfigsRule:view.html.twig", "");
    }
}
