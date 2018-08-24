<?php

/* OroMagentoBundle:Order/Autocomplete:result.html.twig */
class __TwigTemplate_2850fba82490f57ee0af33efb7dd05ce1bd96290e70814d2914e2948bae9f397 extends Twig_Template
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
        echo "<%= highlight(
    _.escape(
        _.__(
            'oro.magento.autocomplete.entity_number', {
                \"entityName\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_label"), "html", null, true);
        echo "\",
                \"entityNumber\": incrementId
            }
        )
    )
) %>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order/Autocomplete:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order/Autocomplete:result.html.twig", "");
    }
}
