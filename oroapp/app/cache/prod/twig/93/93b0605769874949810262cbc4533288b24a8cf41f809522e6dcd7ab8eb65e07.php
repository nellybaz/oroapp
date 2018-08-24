<?php

/* OroTagBundle:Taxonomy/widget:info.html.twig */
class __TwigTemplate_97f22210f1e25f381d7f7e2487e8758e124fd958e1367b33c355106957bd473f extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTagBundle:Taxonomy/widget:info.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["taxonomy"] ?? null), "name")) {
            // line 6
            echo "            <div class=\"responsive-block\">
                ";
            // line 7
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.taxonomy.name.label"), $this->getAttribute(($context["taxonomy"] ?? null), "name", array()));
            echo "
            </div>
        ";
        }
        // line 10
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Taxonomy/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle:Taxonomy/widget:info.html.twig", "");
    }
}
