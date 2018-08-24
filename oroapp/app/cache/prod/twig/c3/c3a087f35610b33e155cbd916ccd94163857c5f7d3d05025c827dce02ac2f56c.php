<?php

/* OroPricingBundle:Datagrid/Column:priceLists.html.twig */
class __TwigTemplate_7d211fb704ff290d8560d520f2fe0121e48d092087646e6bb96194480d0711cd extends Twig_Template
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
        $context["priceLists"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "price_lists"), "method");
        // line 2
        $context["priceListViewGranted"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_pricing_price_list_view");
        // line 3
        if (($context["priceLists"] ?? null)) {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["priceLists"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["priceList"]) {
                // line 5
                echo "        <strong class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["priceList"], "website", array()), "name", array())), "html", null, true);
                echo "</strong>
        <ul class=\"radio-ul\">
        ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["priceList"], "priceLists", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["websitePriceList"]) {
                    // line 8
                    echo "            <li>
                ";
                    // line 9
                    if (($context["priceListViewGranted"] ?? null)) {
                        // line 10
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pricing_price_list_view", array("id" => $this->getAttribute($context["websitePriceList"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["websitePriceList"], "name", array()), "html", null, true);
                        echo "</a>
                ";
                    } else {
                        // line 12
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["websitePriceList"], "name", array()), "html", null, true);
                        echo "
                ";
                    }
                    // line 14
                    echo "            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['websitePriceList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Datagrid/Column:priceLists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  59 => 14,  53 => 12,  45 => 10,  43 => 9,  40 => 8,  36 => 7,  30 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Datagrid/Column:priceLists.html.twig", "");
    }
}
