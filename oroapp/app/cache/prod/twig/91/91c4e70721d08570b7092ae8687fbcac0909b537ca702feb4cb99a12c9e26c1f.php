<?php

/* OroCheckoutBundle:Checkout/Datagrid:startedFrom.html.twig */
class __TwigTemplate_25f52b2bb33237ac0f0875bc98b1042f8072bfcee024c603cf8c9f2c1429194c extends Twig_Template
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
        $context["data"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "startedFrom"), "method");
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["data"] ?? null), "entity", array(), "any", true, true)) {
            // line 4
            echo "    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["data"] ?? null), "entity", array()))) {
                // line 5
                echo "        ";
                if (($this->getAttribute(($context["data"] ?? null), "type", array()) == "shopping_list")) {
                    // line 6
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_frontend_view", array("id" => $this->getAttribute(($context["data"] ?? null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "label", array()), "html", null, true);
                    echo "</a>
        ";
                } elseif (($this->getAttribute(                // line 7
($context["data"] ?? null), "type", array()) == "quote")) {
                    // line 8
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_frontend_view", array("id" => $this->getAttribute(($context["data"] ?? null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "label", array()), "html", null, true);
                    echo "</a>
        ";
                } elseif (($this->getAttribute(                // line 9
($context["data"] ?? null), "type", array()) == "order")) {
                    // line 10
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_order_frontend_view", array("id" => $this->getAttribute(($context["data"] ?? null), "id", array()))), "html", null, true);
                    echo "\">
                ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.order.identifier.label", array("%identifier%" => (($this->getAttribute($this->getAttribute(                    // line 12
($context["data"] ?? null), "entity", array(), "any", false, true), "identifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "entity", array(), "any", false, true), "identifier", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))))), "html", null, true);
                    // line 13
                    echo "
            </a>
        ";
                } else {
                    // line 16
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "label", array()), "html", null, true);
                    echo "
        ";
                }
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "label", array()), "html", null, true);
                echo "
    ";
            }
        } elseif ( !(null ===         // line 21
($context["data"] ?? null))) {
            // line 22
            echo "    ";
            echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:Checkout/Datagrid:startedFrom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  78 => 21,  72 => 19,  69 => 18,  63 => 16,  58 => 13,  56 => 12,  55 => 11,  50 => 10,  48 => 9,  41 => 8,  39 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:Checkout/Datagrid:startedFrom.html.twig", "");
    }
}
