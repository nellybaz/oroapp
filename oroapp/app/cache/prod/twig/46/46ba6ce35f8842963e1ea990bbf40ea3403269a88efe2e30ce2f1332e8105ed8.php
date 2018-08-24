<?php

/* OroProductBundle:Product/Autocomplete:autocomplete_selection.html.twig */
class __TwigTemplate_1d791869077b90713d3ac7fa21f2d8ab7c0da5cd17cb61d0acc7265c1e09b499 extends Twig_Template
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
        echo "<%= _.escape(sku) %> - <%= _.escape(obj['defaultName.string']) %>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/Autocomplete:autocomplete_selection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product/Autocomplete:autocomplete_selection.html.twig", "");
    }
}
