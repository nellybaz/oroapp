<?php

/* OroOrderBundle:Order/Datagrid:frontendProduct.html.twig */
class __TwigTemplate_3c111948fa8ac2de8c477b9092d625c71c01f36dc9334f1e602c495ea6301fa8 extends Twig_Template
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
        $context["isFreeFormProduct"] = (twig_test_empty($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "productName"), "method")) &&  !twig_test_empty($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "freeFormProduct"), "method")));
        // line 2
        echo "<h3 class=\"product-item__title product-item__title--in-cart\">
    ";
        // line 3
        if (($context["isFreeFormProduct"] ?? null)) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "freeFormProduct"), "method"), "html", null, true);
            echo "
    ";
        } else {
            // line 6
            echo "        ";
            $context["productId"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "product.id"), "method");
            // line 7
            echo "        ";
            $context["product"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "product"), "method");
            // line 8
            echo "        ";
            if ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "parentProduct"), "method")) {
                // line 9
                echo "            ";
                $context["product"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "parentProduct"), "method");
                // line 10
                echo "        ";
            }
            // line 11
            echo "        <a class=\"product-item__link-in-cart\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_view", array("id" => $this->getAttribute(($context["product"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", array()), "html", null, true);
            echo "</a>
    ";
        }
        // line 13
        echo "</h3>
";
        // line 14
        if ( !($context["isFreeFormProduct"] ?? null)) {
            // line 15
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.item_number.label"), "html", null, true);
            echo ": <span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "sku", array()), "html", null, true);
            echo "</span></div>
    ";
            // line 16
            if ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["productId"] ?? null)), "method", true, true)) {
                // line 17
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => ($context["productId"] ?? null)), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 18
                    echo "            <div>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field"], "label", array())), "html", null, true);
                    echo ":
                ";
                    // line 19
                    if (($this->getAttribute($context["field"], "type", array()) == "boolean")) {
                        // line 20
                        echo "                    ";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["field"], "value", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.variant_fields.yes.label")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.variant_fields.no.label"))), "html", null, true);
                        echo "
                ";
                    } else {
                        // line 22
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "value", array()), "html", null, true);
                        echo "
                ";
                    }
                    // line 24
                    echo "            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:frontendProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  93 => 24,  87 => 22,  81 => 20,  79 => 19,  74 => 18,  69 => 17,  67 => 16,  60 => 15,  58 => 14,  55 => 13,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:frontendProduct.html.twig", "");
    }
}
