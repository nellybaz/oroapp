<?php

/* OroPricingBundle:PriceList/partial:list.html.twig */
class __TwigTemplate_b375e51b6d68f6997dce2a511b408a4c1cb4e77dfec1ccbdb8d85877c66fe73b extends Twig_Template
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
        echo "<div>
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.fallback.label"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["fallback"] ?? null)), "html", null, true);
        echo "</strong></p>
</div>
<div class=\"clearfix\">
    ";
        // line 5
        if (($context["entities"] ?? null)) {
            // line 6
            echo "        <table class=\"grid table-hover table table-bordered\">
            <thead>
            <tr>
                <th>#</th>
                <th>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.name.label"), "html", null, true);
            echo "</th>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.merge_allowed.label"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 16
                echo "                <tr class=\"price_list";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "priceList", array()), "id", array()), "html", null, true);
                echo "\">
                    <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_pricing_price_list_view", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "priceList", array()), "id", array()))), "html", null, true);
                echo "\" class=\"price_list_link\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "priceList", array()), "name", array()), "html", null, true);
                echo "</a></td>
                    <td class=\"price_list_merge_allowed\">";
                // line 19
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "mergeAllowed", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.merge_allowed.yes.label")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.merge_allowed.no.label"))), "html", null, true);
                echo "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 25
            echo "        <div class=\"no-data\">
            <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.no_price_lists"), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:PriceList/partial:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  106 => 26,  103 => 25,  98 => 22,  81 => 19,  75 => 18,  71 => 17,  66 => 16,  49 => 15,  42 => 11,  38 => 10,  32 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:PriceList/partial:list.html.twig", "");
    }
}
