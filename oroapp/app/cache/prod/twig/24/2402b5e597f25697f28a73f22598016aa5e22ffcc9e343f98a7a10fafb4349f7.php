<?php

/* OroProductBundle:Product/RelatedItems:tabs.html.twig */
class __TwigTemplate_c17159cb1eb2b3a3911558fa88c9e4b66e1a45081e966baa09452f493da18e60 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Product/RelatedItems:tabs.html.twig", 1);
        // line 2
        echo "
<div ";
        // line 3
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroproduct/js/app/components/related-items-tabs-component", "options" => array("data" =>         // line 6
($context["relatedItemsTabsItems"] ?? null))));
        // line 8
        echo "></div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/RelatedItems:tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 8,  25 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product/RelatedItems:tabs.html.twig", "");
    }
}
