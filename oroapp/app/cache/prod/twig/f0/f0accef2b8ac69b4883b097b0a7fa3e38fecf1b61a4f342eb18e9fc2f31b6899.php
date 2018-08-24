<?php

/* OroCatalogBundle:Product:category_info.html.twig */
class __TwigTemplate_6dd34859f2c439f7a5245e192acbc02893e55207383e0b0577c5c98827c73e33 extends Twig_Template
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
        echo "<div class=\"clearfix customer-info well-small customer-simple\">
    <div class=\"customer-content pull-left\">
        <div class=\"clearfix\">
            <ul class=\"inline\">
                <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "category", array()), "vars", array()), "label", array())), "html", null, true);
        echo ":&nbsp;";
        // line 7
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "category", array()), "vars", array()), "data", array()))) {
            // line 8
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "category", array()), "vars", array()), "data", array()), "defaultTitle", array())), "html", null, true);
        } else {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
        }
        // line 12
        echo "</li>
            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Product:category_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  33 => 10,  30 => 8,  28 => 7,  25 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Product:category_info.html.twig", "");
    }
}
