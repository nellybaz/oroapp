<?php

/* OroMagentoBundle:OrderPlace:success.html.twig */
class __TwigTemplate_92ad0ed9575d49477552f8025ca36c54266192c49d4414763c746068fb6fdc1c extends Twig_Template
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
    parent.ORO_ORDER_EMBED_API.success();
</script>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:OrderPlace:success.html.twig";
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
        return new Twig_Source("", "OroMagentoBundle:OrderPlace:success.html.twig", "");
    }
}
