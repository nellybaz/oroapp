<?php

/* OroAsseticBundle:Assetic:theme_css.html.twig */
class __TwigTemplate_2bc0e3ed5b83431d789ca8bebf12ff2310eaf975b06c4ebc8edbbaab7ad86b19 extends Twig_Template
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
        $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, ($context["asset_url"] ?? null), "."));
        // line 2
        if (($context["isLess"] ?? null)) {
            // line 3
            echo "    <script type=\"text/javascript\">
        // need to clear localStorage when less is compiled on client, to prevent caching
        try {
            localStorage.clear();
        } catch (e) {
            // catch IE protected mode or browsers w/o localStorage support
        }
    </script>
";
        }
        // line 12
        echo "<link ";
        if (($context["isLess"] ?? null)) {
            echo "rel=\"stylesheet/less\"";
        } else {
            echo "rel=\"stylesheet\"";
        }
        echo " media=\"all\" href=\"";
        echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
        echo "\" />
";
        // line 13
        if (($context["isLess"] ?? null)) {
            // line 14
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bowerassets/less/dist/less.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroAsseticBundle:Assetic:theme_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  45 => 13,  34 => 12,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAsseticBundle:Assetic:theme_css.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/AsseticBundle/Resources/views/Assetic/theme_css.html.twig");
    }
}
