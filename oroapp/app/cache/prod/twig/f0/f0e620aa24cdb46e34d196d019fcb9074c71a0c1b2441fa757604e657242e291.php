<?php

/* OroEntityConfigBundle:Attribute:attributes_import_sync.html.twig */
class __TwigTemplate_1b25b3ec3e37d371a699f55ed37c4c8a31e321e4bc6730ccb864f9c63152a575 extends Twig_Template
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
    require({config: {
        'oroentityconfig/js/sync/attribute-import-sync-notifier': {
            'topic': '";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "topic", array()), "html", null, true);
        echo "'
        }
    }});

    require(['oroentityconfig/js/sync/attribute-import-sync-notifier']);
</script>
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Attribute:attributes_import_sync.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Attribute:attributes_import_sync.html.twig", "");
    }
}
