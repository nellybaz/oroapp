<?php

/* OroMarketingActivityBundle:MarketingActivity/js:list.html.twig */
class __TwigTemplate_c9687fb5a9464fdb1befaf97616a742ab5520a55de82a8b29d2c77f88e350644 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html_attr");
        echo "\">
    <div class=\"items list-box list-shaped\"></div>
    <div class=\"no-data\">
        <span>";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.no_marketing_activities_exist");
        echo "</span>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroMarketingActivityBundle:MarketingActivity/js:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingActivityBundle:MarketingActivity/js:list.html.twig", "");
    }
}
