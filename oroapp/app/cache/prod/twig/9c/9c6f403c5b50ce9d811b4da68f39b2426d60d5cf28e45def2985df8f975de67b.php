<?php

/* OroPaymentBundle:PaymentMethodsConfigsRule:update.html.twig */
class __TwigTemplate_edc4c6754f626648a7f098fc33da753214381652779d27b6d1a214d49ff1d765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule:update.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
            'oro_payment_rule_add_method_widget' => array($this, 'block_oro_payment_rule_add_method_widget'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%id%" => (($this->getAttribute(        // line 3
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))))));
        // line 5
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_methods_configs_rule_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_methods_configs_rule_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 9
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 10
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_methods_configs_rule_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.paymentmethodsconfigsrule.entity_short_plural_label"), "entityTitle" => twig_slice($this->env, $this->getAttribute($this->getAttribute(            // line 13
($context["entity"] ?? null), "rule", array()), "name", array()), 0, 50));
            // line 15
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 17
            echo "        ";
            $context["breadcrumbs"] = array("indexLabel" => "Create", "entityTitle" => "Payment Rule", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_methods_configs_rule_create"));
            // line 22
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.paymentmethodsconfigsrule.entity_short_label")));
            // line 23
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule:update.html.twig", 23)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 24
            echo "    ";
        }
    }

    // line 27
    public function block_navButtons($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_methods_configs_rule_index")), "method"), "html", null, true);
        echo "
    ";
        // line 31
        if ((($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_payment_methods_configs_rule_update")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ooro_payment_methods_configs_rule_create"))) {
            // line 32
            echo "        ";
            $context["html"] = "";
            // line 33
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_payment_methods_configs_rule_view")) {
                // line 34
                echo "            ";
                $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_payment_methods_configs_rule_view", "params" => array("id" => "\$id"))), "method");
                // line 38
                echo "        ";
            }
            // line 39
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_payment_methods_configs_rule_update", "params" => array("id" => "\$id"))), "method"));
            // line 43
            echo "
        ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 48
    public function block_oro_payment_rule_add_method_widget($context, array $blocks = array())
    {
        // line 49
        echo "    <div
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropayment/js/app/views/payment-rule-method-view", "methodSelectSelector" => "select.oro-payment-rule-add-method-select", "buttonSelector" => ".add-method", "updateFlag" => twig_constant("Oro\\Bundle\\PaymentBundle\\Form\\Handler\\PaymentMethodsConfigsRuleHandler::UPDATE_FLAG"), "methods" => $this->getAttribute($this->getAttribute(        // line 56
($context["form"] ?? null), "vars", array()), "methods", array()))), "html", null, true);
        // line 57
        echo "\"
    >
        <div class=\"oro-payment-rule-add-method-select\">
            ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "method", array()), 'row', array("attr" => array("class" => "oro-payment-rule-add-method-select")));
        echo "
        </div>
        <a class=\"btn add-method\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
        echo "</a>
    </div>
";
    }

    // line 66
    public function block_content_data($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $context["id"] = "payment-methods-configs-rule-edit";
        // line 68
        echo "
    ";
        // line 69
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "enabled", array()), 'row'), 1 =>         // line 77
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "name", array()), 'row'), 2 =>         // line 78
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "sortOrder", array()), 'row'), 3 =>         // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'row'), 4 =>         // line 80
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "stopProcessing", array()), 'row'))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.sections.destination"), "subblocks" => array(0 => array("data" => array(0 =>         // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "destinations", array()), 'widget', array("attr" => array("class" => "oro-payment-rule-collection oro-payment-rule-destinations-collection row-oro"))))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.sections.expression"), "subblocks" => array(0 => array("data" => array(0 =>         // line 100
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "expression", array()), 'row'))))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.sections.configurations"), "subblocks" => array(0 => array("data" => array(0 =>         // line 110
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "methodConfigs", array()), 'widget', array("attr" => array("class" => "oro-payment-rule-collection oro-payment-rule-method-configs-collection row-oro"))), 1 =>         // line 111
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "methodConfigs", array()), 'errors'), 2 =>         $this->renderBlock("oro_payment_rule_add_method_widget", $context, $blocks))))));
        // line 118
        echo "
    ";
        // line 119
        $context["data"] = array("formErrors" => nl2br(        // line 120
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')), "dataBlocks" =>         // line 121
($context["dataBlocks"] ?? null));
        // line 123
        echo "
    ";
        // line 124
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentMethodsConfigsRule:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 124,  162 => 123,  160 => 121,  159 => 120,  158 => 119,  155 => 118,  153 => 111,  152 => 110,  151 => 100,  150 => 90,  149 => 80,  148 => 79,  147 => 78,  146 => 77,  145 => 76,  144 => 69,  141 => 68,  138 => 67,  135 => 66,  128 => 62,  123 => 60,  118 => 57,  116 => 56,  115 => 51,  111 => 49,  108 => 48,  101 => 44,  98 => 43,  95 => 39,  92 => 38,  89 => 34,  86 => 33,  83 => 32,  81 => 31,  77 => 30,  71 => 28,  68 => 27,  63 => 24,  60 => 23,  57 => 22,  54 => 17,  48 => 15,  46 => 13,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentMethodsConfigsRule:update.html.twig", "");
    }
}
