<?php

/* OroRedirectBundle::entitySlugs.html.twig */
class __TwigTemplate_374a72648c511cdf58eaabc193da6230da4e1511964a05815ad6654880422f42 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroRedirectBundle::entitySlugs.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        if (twig_test_empty(($context["entitySlugs"] ?? null))) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo $context["UI"]->getrenderList(($context["entitySlugs"] ?? null));
            echo "
    ";
        }
        $context["slugs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
";
        // line 11
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.redirect.slug.entity_plural_label"), ($context["slugs"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroRedirectBundle::entitySlugs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  42 => 10,  35 => 7,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRedirectBundle::entitySlugs.html.twig", "");
    }
}
