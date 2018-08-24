<?php

/* OroOrderBundle:Order/Datagrid:shippingTrackingLink.html.twig */
class __TwigTemplate_2a44e1b8683c61d3ac4385db6f541da44e73c59ee6195ac4e534f77153516325 extends Twig_Template
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
        $context["method"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "method"), "method");
        // line 2
        $context["number"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "number"), "method");
        // line 3
        if ((($context["number"] ?? null) && ($context["method"] ?? null))) {
            // line 4
            $context["link"] = $this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderExtension')->formatShippingTrackingLink(($context["method"] ?? null), ($context["number"] ?? null));
            // line 5
            if ((($context["number"] ?? null) != ($context["link"] ?? null))) {
                // line 6
                echo "<a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
                echo "</a>";
            } else {
                // line 8
                echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
            }
        } else {
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Order/Datagrid:shippingTrackingLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  36 => 8,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Order/Datagrid:shippingTrackingLink.html.twig", "");
    }
}
