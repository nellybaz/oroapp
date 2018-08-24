<?php

/* OroSalesBundle:B2bCustomer:accountCustomersInfo.html.twig */
class __TwigTemplate_5b6b87a7ea677f26b07d5f9cadbec05ef3501915de7b24f799ba391280ceca8f extends Twig_Template
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
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_b2bcustomer_view") && (twig_length_filter($this->env, ($context["customers"] ?? null)) > 0))) {
            // line 2
            echo "    ";
            $context["tabs"] = array();
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 4
                echo "        ";
                $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => array("alias" => ((("oro_sales_b2bcustomer_info_customer_" . $this->getAttribute(                // line 6
$context["customer"], "id", array())) . "_channel_") . $this->getAttribute(($context["channel"] ?? null), "id", array())), "widgetType" => "customer-info", "label" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(                // line 8
$context["customer"]), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_widget_b2bcustomer_info", array("id" => $this->getAttribute(                // line 10
$context["customer"], "id", array()), "channelId" => $this->getAttribute(($context["channel"] ?? null), "id", array()))))));
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
            if ((twig_length_filter($this->env, ($context["tabs"] ?? null)) > 1)) {
                // line 16
                echo "        ";
                if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
                    // line 17
                    echo "            ";
                    $context["tabsOptions"] = array("useDropdown" => true);
                    // line 18
                    echo "        ";
                } else {
                    // line 19
                    echo "            ";
                    $context["tabsOptions"] = array("verticalTabs" => true, "subtitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.customer.entity_plural_label"));
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:B2bCustomer:accountCustomersInfo.html.twig", 21);
                // line 22
                echo "        <div class=\"widget-content account-customer-info multicustomer\" ";
                echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "orosales/js/app/views/account-multicustomer-view")));
                // line 27
                echo ">
            ";
                // line 28
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null), ($context["tabsOptions"] ?? null));
                echo "
        </div>
    ";
            } else {
                // line 31
                echo "        <div class=\"widget-content account-customer-info\">
            ";
                // line 32
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, $this->getAttribute(($context["tabs"] ?? null), 0, array(), "array"));
                echo "
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:B2bCustomer:accountCustomersInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  74 => 31,  68 => 28,  65 => 27,  62 => 22,  59 => 21,  56 => 20,  53 => 19,  50 => 18,  47 => 17,  44 => 16,  41 => 15,  35 => 14,  33 => 10,  32 => 8,  31 => 6,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:B2bCustomer:accountCustomersInfo.html.twig", "");
    }
}
