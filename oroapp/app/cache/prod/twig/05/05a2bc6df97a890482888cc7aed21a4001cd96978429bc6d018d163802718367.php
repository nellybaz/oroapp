<?php

/* OroMagentoBundle:OrderPlace:error.html.twig */
class __TwigTemplate_0c8f67a479626447f6502be6e992301f0aeca57213b7ca42f946b4e779bdf841 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    parent.ORO_ORDER_EMBED_API.error();
</script>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:OrderPlace:error.html.twig";
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
        return new Twig_Source("", "OroMagentoBundle:OrderPlace:error.html.twig", "");
    }
}
