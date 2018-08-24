<?php

/* OroSyncBundle::ping_js.html.twig */
class __TwigTemplate_24172a32f0d8cf27a638b7c757f37487c29cae9fc39c043846fa5ae04c1fc612 extends Twig_Template
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
        return new Twig_Source("", "OroSyncBundle::ping_js.html.twig", "");
    }
}
