<?php

/* OroSalesBundle:Dashboard:forecastOfOpportunities.html.twig */
class __TwigTemplate_e5eba7e5bb2bc7dd19e7fcfe8c229b7954bc816b10310f7aee2d17c88db9ed28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroSalesBundle:Dashboard:forecastOfOpportunities.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["widgetType"] = "quick-launchpad";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, ($context["items"] ?? null))) {
            // line 7
            echo "        <ul class=\"quick-launchpad-toolbar with-subwidgets\">
            ";
            // line 8
            $context["itemWidth"] = twig_round((100 / 3), 2);
            // line 9
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["itemName"] => $context["item"]) {
                // line 10
                echo "                <li class=\"sub-widget\" style=\"width: ";
                echo twig_escape_filter($this->env, ($context["itemWidth"] ?? null), "html", null, true);
                echo "%\">
                    ";
                // line 11
                $this->loadTemplate($this->getAttribute($this->getAttribute(($context["widgetDataItems"] ?? null), $context["itemName"], array(), "array"), "template", array()), "OroSalesBundle:Dashboard:forecastOfOpportunities.html.twig", 11)->display(array_merge($context, array("item" => $context["item"])));
                // line 12
                echo "                </li>
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
            unset($context['_seq'], $context['_iterated'], $context['itemName'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    ";
        } else {
            // line 16
            echo "        <div class=\"container-fluid\">
            <div class=\"clearfix no-data\">
                <span>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.dashboard.forecast_of_opportunities.no_available_metrics"), "html", null, true);
            echo "</span>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Dashboard:forecastOfOpportunities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  86 => 16,  82 => 14,  67 => 12,  65 => 11,  60 => 10,  42 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Dashboard:forecastOfOpportunities.html.twig", "");
    }
}
