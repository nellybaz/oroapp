<?php

/* OroCustomerAccountBridgeBundle:Customer:accountCustomersInfo.html.twig */
class __TwigTemplate_9654ac06eade9b14b879165acbd929b7a9bbd9a0421ee58edff6f9ef31b2a890 extends Twig_Template
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
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_customer_view") && (twig_length_filter($this->env, ($context["customers"] ?? null)) > 0))) {
            // line 2
            echo "    ";
            $context["subtitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.customer.entity_plural_label");
            // line 3
            echo "    ";
            $context["tabs"] = array();
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 5
                echo "        ";
                $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ("oro_customer_info_customer_" . $this->getAttribute(                // line 7
$context["customer"], "id", array())), "widgetType" => "customer-info", "label" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(                // line 9
$context["customer"]), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_customer_widget_customer_info", array("id" => $this->getAttribute(                // line 11
$context["customer"], "id", array()), "channelId" => $this->getAttribute(($context["channel"] ?? null), "id", array()))))));
                // line 15
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
            if ((twig_length_filter($this->env, ($context["tabs"] ?? null)) > 1)) {
                // line 17
                echo "        ";
                if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
                    // line 18
                    echo "            ";
                    $context["tabsOptions"] = array("useDropdown" => true);
                    // line 19
                    echo "        ";
                } else {
                    // line 20
                    echo "            ";
                    $context["tabsOptions"] = array("verticalTabs" => true, "subtitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.customer.entity_plural_label"));
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCustomerAccountBridgeBundle:Customer:accountCustomersInfo.html.twig", 22);
                // line 23
                echo "        <div class=\"widget-content account-customer-info multicustomer\" ";
                echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "orosales/js/app/views/account-multicustomer-view", "customerType" => "account_customer", "useChannel" => true)));
                // line 30
                echo ">
            ";
                // line 31
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null), ($context["tabsOptions"] ?? null));
                echo "
        </div>
    ";
            } else {
                // line 34
                echo "        <div class=\"widget-content account-customer-info\">
            ";
                // line 35
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, $this->getAttribute(($context["tabs"] ?? null), 0, array(), "array"));
                echo "
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroCustomerAccountBridgeBundle:Customer:accountCustomersInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  77 => 34,  71 => 31,  68 => 30,  65 => 23,  62 => 22,  59 => 21,  56 => 20,  53 => 19,  50 => 18,  47 => 17,  44 => 16,  38 => 15,  36 => 11,  35 => 9,  34 => 7,  32 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerAccountBridgeBundle:Customer:accountCustomersInfo.html.twig", "");
    }
}
