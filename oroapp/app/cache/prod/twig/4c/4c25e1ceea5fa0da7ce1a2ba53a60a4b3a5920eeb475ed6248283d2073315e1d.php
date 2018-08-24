<?php

/* OroShippingBundle:ShippingMethodsConfigsRule:update.html.twig */
class __TwigTemplate_341821de3fed60920f98483e260657edb16266a78cbe71197d7831b7a9abf58e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroShippingBundle:ShippingMethodsConfigsRule:update.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
            'oro_shipping_rule_methods' => array($this, 'block_oro_shipping_rule_methods'),
            'oro_shipping_rule_add_method_widget' => array($this, 'block_oro_shipping_rule_add_method_widget'),
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
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shipping_methods_configs_rule_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shipping_methods_configs_rule_create")));
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
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shipping_methods_configs_rule_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.shippingmethodsconfigsrule.entity_plural_label"), "entityTitle" => twig_slice($this->env, $this->getAttribute($this->getAttribute(            // line 13
($context["entity"] ?? null), "rule", array()), "name", array()), 0, 50));
            // line 15
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 17
            echo "        ";
            $context["breadcrumbs"] = array("indexLabel" => "Create", "entityTitle" => "Shipping Rule", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shipping_methods_configs_rule_create"));
            // line 22
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.shippingmethodsconfigsrule.entity_label")));
            // line 23
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroShippingBundle:ShippingMethodsConfigsRule:update.html.twig", 23)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shipping_methods_configs_rule_index")), "method"), "html", null, true);
        echo "
    ";
        // line 31
        if ((($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_shipping_methods_configs_rule_update")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_shipping_methods_configs_rule_create"))) {
            // line 32
            echo "        ";
            $context["html"] = "";
            // line 33
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_shipping_methods_configs_rule_view")) {
                // line 34
                echo "            ";
                $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_shipping_methods_configs_rule_view", "params" => array("id" => "\$id"))), "method");
                // line 38
                echo "        ";
            }
            // line 39
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_shipping_methods_configs_rule_update", "params" => array("id" => "\$id"))), "method"));
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
    public function block_oro_shipping_rule_methods($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["updateFlag"] = twig_constant("Oro\\Bundle\\ShippingBundle\\Form\\Handler\\ShippingMethodsConfigsRuleHandler::UPDATE_FLAG");
        // line 50
        echo "    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroshipping/js/app/views/shipping-rule-method-view", "updateFlag" =>         // line 53
($context["updateFlag"] ?? null), "focus" => (($this->getAttribute($this->getAttribute(        // line 54
($context["app"] ?? null), "request", array()), "get", array(0 => ($context["updateFlag"] ?? null)), "method")) ? (true) : (false)))), "html", null, true);
        // line 55
        echo "\"
    >
        ";
        // line 57
        $this->displayBlock("oro_shipping_rule_add_method_widget", $context, $blocks);
        echo "

        ";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "method", array()), "vars", array()), "choices", array())) == 0)) {
            // line 60
            echo "            <div class=\"no-data\">
                <span>
                    ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.sections.shippingrule_configurations.no_methods.message"), "html", null, true);
            echo "
                </span>
            </div>
        ";
        }
        // line 66
        echo "
        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "methodConfigs", array()), 'widget');
        echo "
    </div>
";
    }

    // line 71
    public function block_oro_shipping_rule_add_method_widget($context, array $blocks = array())
    {
        // line 72
        echo "    <div>
        <div class=\"oro-shipping-rule-add-method-select\">
            ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "method", array()), 'row', array("attr" => array("class" => " no-uniform ")));
        echo "
        </div>
        <a class=\"btn add-method\" href=\"javascript: void(0);\">
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
        echo "
        </a>
        <a class=\"btn add-all-methods btn-primary\" href=\"javascript: void(0);\">
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add_all")) : ("oro.form.collection.add_all"))), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    // line 85
    public function block_content_data($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $context["id"] = "shipping-rule-edit";
        // line 87
        echo "
    ";
        // line 88
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 95
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "enabled", array()), 'row'), 1 =>         // line 96
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "name", array()), 'row'), 2 =>         // line 97
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "sortOrder", array()), 'row'), 3 =>         // line 98
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'row'), 4 =>         // line 99
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "stopProcessing", array()), 'row'))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.sections.shippingrule_destination"), "subblocks" => array(0 => array("data" => array(0 =>         // line 109
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "destinations", array()), 'widget', array("attr" => array("class" => "oro-shipping-rule-collection oro-shipping-rule-destinations-collection row-oro"))))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.sections.shippingrule_conditions"), "subblocks" => array(0 => array("data" => array(0 =>         // line 119
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "expression", array()), 'row'))))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.sections.shippingrule_configurations.label"), "content_attr" => array("class" => "shipping-rule-methods-wrapper"), "subblocks" => array(0 => array("data" => array(0 =>         $this->renderBlock("oro_shipping_rule_methods", $context, $blocks))))));
        // line 138
        echo "
    ";
        // line 139
        $context["data"] = array("formErrors" =>         // line 140
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 141
($context["dataBlocks"] ?? null));
        // line 143
        echo "
    ";
        // line 144
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShippingBundle:ShippingMethodsConfigsRule:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 144,  206 => 143,  204 => 141,  203 => 140,  202 => 139,  199 => 138,  197 => 119,  196 => 109,  195 => 99,  194 => 98,  193 => 97,  192 => 96,  191 => 95,  190 => 88,  187 => 87,  184 => 86,  181 => 85,  173 => 80,  167 => 77,  161 => 74,  157 => 72,  154 => 71,  147 => 67,  144 => 66,  137 => 62,  133 => 60,  131 => 59,  126 => 57,  122 => 55,  120 => 54,  119 => 53,  118 => 51,  115 => 50,  112 => 49,  109 => 48,  102 => 44,  99 => 43,  96 => 39,  93 => 38,  90 => 34,  87 => 33,  84 => 32,  82 => 31,  78 => 30,  72 => 28,  69 => 27,  64 => 24,  61 => 23,  58 => 22,  55 => 17,  49 => 15,  47 => 13,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShippingBundle:ShippingMethodsConfigsRule:update.html.twig", "");
    }
}
