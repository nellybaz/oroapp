<?php

/* OroPricingBundle:Customer:price_list_view.html.twig */
class __TwigTemplate_886e7ac2d9ed72434229af7233cc0c5fb35eb7eb6f41c7d404f3ed06491b22a8 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPricingBundle:Customer:price_list_view.html.twig", 1);
        // line 2
        echo "
<div id =\"priceLists\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        if (array_key_exists("priceLists", $context)) {
            // line 7
            echo "                ";
            $context["entities"] = ($context["priceLists"] ?? null);
            // line 8
            echo "                ";
            $this->loadTemplate("OroPricingBundle:PriceList/partial:list.html.twig", "OroPricingBundle:Customer:price_list_view.html.twig", 8)->display(array_merge($context, array("fallback" =>             // line 10
($context["fallback"] ?? null), "entities" =>             // line 11
($context["entities"] ?? null))));
            // line 14
            echo "            ";
        } else {
            // line 15
            echo "                <div class=\"no-data\">
                    <span>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.no_price_lists"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 19
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPricingBundle:Customer:price_list_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  43 => 16,  40 => 15,  37 => 14,  35 => 11,  34 => 10,  32 => 8,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Customer:price_list_view.html.twig", "");
    }
}
