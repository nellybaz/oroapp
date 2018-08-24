<?php

/* OroMagentoBundle:Customer:accountCustomersInfo.html.twig */
class __TwigTemplate_4e8fd17e2c4ad84e970ce17a81e600662715e3b3440132681ad651ea92480d30 extends Twig_Template
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
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_magento_customer_view") && (twig_length_filter($this->env, ($context["customers"] ?? null)) > 0))) {
            // line 2
            echo "    ";
            $context["tabs"] = array();
            // line 3
            echo "    ";
            if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
                // line 4
                echo "        ";
                $context["tabsOptions"] = array("useDropdown" => true);
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["tabsOptions"] = array("verticalTabs" => true, "subtitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer_tabs_title"));
                // line 7
                echo "    ";
            }
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 9
                echo "        ";
                $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ((("oro_magento_customer_info_customer_" . $this->getAttribute(                // line 11
$context["customer"], "id", array())) . "_channel_") . $this->getAttribute(($context["channel"] ?? null), "id", array())), "widgetType" => "customer-info", "label" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(                // line 13
$context["customer"]), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_widget_customer_info", array("id" => $this->getAttribute(                // line 15
$context["customer"], "id", array()), "channelId" => $this->getAttribute(($context["channel"] ?? null), "id", array()))))));
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
            if ((twig_length_filter($this->env, ($context["tabs"] ?? null)) > 1)) {
                // line 21
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:Customer:accountCustomersInfo.html.twig", 21);
                // line 22
                echo "        <div class=\"widget-content account-customer-info multicustomer\" ";
                echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "orosales/js/app/views/account-multicustomer-view", "customerType" => "magento_customer")));
                // line 28
                echo ">
            ";
                // line 29
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null), ($context["tabsOptions"] ?? null));
                echo "
        </div>
    ";
            } else {
                // line 32
                echo "        <div class=\"widget-content account-customer-info\">
            ";
                // line 33
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, $this->getAttribute(($context["tabs"] ?? null), 0, array(), "array"));
                echo "
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer:accountCustomersInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  74 => 32,  68 => 29,  65 => 28,  62 => 22,  59 => 21,  56 => 20,  50 => 19,  48 => 15,  47 => 13,  46 => 11,  44 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer:accountCustomersInfo.html.twig", "");
    }
}
