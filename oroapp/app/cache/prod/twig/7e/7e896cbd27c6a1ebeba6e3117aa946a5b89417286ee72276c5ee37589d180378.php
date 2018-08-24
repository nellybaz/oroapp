<?php

/* OroSyncBundle::ping_js.html.twig */
class __TwigTemplate_000b661c5b397a24899e74c5d6d22b50b3f851227ad2c5f0fa010303caf215e9 extends Twig_Template
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
    require(['orosync/js/sync'],
    function(sync) {
        sync.subscribe('oro/ping', function () {});
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroSyncBundle::ping_js.html.twig";
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
        return new Twig_Source("", "OroSyncBundle::ping_js.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/SyncBundle/Resources/views/ping_js.html.twig");
    }
}
