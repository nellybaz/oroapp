<?php

/* OroCMSBundle:Page/widget:info.html.twig */
class __TwigTemplate_c9692dad1795e433c68c1539b6a3593a1237f951acc38fbd7594636729a46bbc extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCMSBundle:Page/widget:info.html.twig", 1);
        // line 2
        $context["Redirect"] = $this->loadTemplate("OroRedirectBundle::macros.html.twig", "OroCMSBundle:Page/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.page.titles.singular_label"), $this->getAttribute(($context["entity"] ?? null), "defaultTitle", array()));
        echo "
            ";
        // line 8
        echo $context["Redirect"]->getrenderGeneratedSlugs($this->getAttribute(($context["entity"] ?? null), "slugs", array()));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:Page/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:Page/widget:info.html.twig", "");
    }
}
