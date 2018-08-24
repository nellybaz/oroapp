<?php

/* OroMagentoBundle:Order/Autocomplete:selection.html.twig */
class __TwigTemplate_4d4f808f22b7c7d9c84cb650ea0a3246750b9c75bf47a41e2f3b5ef74d182d9a extends Twig_Template
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
        echo "<%- _.__(
    'oro.magento.autocomplete.entity_number', {
        \"entityName\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order.entity_label"), "html", null, true);
        echo "\",
        \"entityNumber\": incrementId
    }
) %>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order/Autocomplete:selection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order/Autocomplete:selection.html.twig", "");
    }
}
