<?php

/* OroCustomerAccountBridgeBundle:Form:fields.html.twig */
class __TwigTemplate_dab6ff2aab9204452d79207c85a5ce674f371205f057ec3e91f9db65f71011eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_config_customer_account_choice_widget' => array($this, 'block_oro_config_customer_account_choice_widget'),
            '_account_settings_oro_customer_account_bridge___customer_account_settings_use_parent_scope_value_widget' => array($this, 'block__account_settings_oro_customer_account_bridge___customer_account_settings_use_parent_scope_value_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_config_customer_account_choice_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('_account_settings_oro_customer_account_bridge___customer_account_settings_use_parent_scope_value_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_config_customer_account_choice_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["valueContainerId"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "_container");
        // line 3
        echo "    ";
        $context["valueContainerClass"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "oro-clearfix controls control-subgroup")) : ("oro-clearfix controls control-subgroup"));
        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 5
            echo "        ";
            $context["valueContainerClass"] = (($context["valueContainerClass"] ?? null) . " validation-error");
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        $context["options"] = twig_array_merge((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array()), array())) : (array())), array("warningContainer" => ".customeraccount-warning-message", "view" => "orocustomeraccountbridge/js/app/account-creating-strategy/view/warning-view", "rootMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer_account_bridge.system_configuration.messages.root_warning"), "eachMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer_account_bridge.system_configuration.messages.each_warning"), "defaultStrategy" => "each"));
        // line 15
        echo "
    <div id=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["valueContainerId"] ?? null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ($context["valueContainerClass"] ?? null), "html", null, true);
        echo "\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        <div class=\"customeraccount-warning-message alert alert-warning\"></div>
    </div>
";
    }

    // line 25
    public function block__account_settings_oro_customer_account_bridge___customer_account_settings_use_parent_scope_value_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["options"] = twig_array_merge((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "options", array()), array())) : (array())), array("view" => "orocustomeraccountbridge/js/app/account-creating-strategy/view/use-default-view"));
        // line 29
        echo "
    <span data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </span>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerAccountBridgeBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  89 => 31,  85 => 29,  82 => 26,  79 => 25,  71 => 20,  67 => 19,  63 => 18,  56 => 16,  53 => 15,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 25,  23 => 24,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerAccountBridgeBundle:Form:fields.html.twig", "");
    }
}
